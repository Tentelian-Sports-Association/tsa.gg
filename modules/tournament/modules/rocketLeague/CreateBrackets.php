<?php

namespace app\modules\tournament\modules\rocketLeague;

use app\modules\tournament\modules\rocketLeague\models\PlayerBrackets;
use app\modules\tournament\modules\rocketLeague\models\TeamBrackets;
use app\modules\tournament\modules\rocketLeague\models\PlayerBracketEncounter;
use app\modules\tournament\modules\rocketLeague\models\TeamBracketEncounter;

use app\modules\tournament\models\Tournament;

use yii;
use app\widgets\Alert;


/**
 * Class CreateBrackets
 * @package app\modules\core\miscellaneouse
 */
class CreateBrackets
{
    /**
     * constructor.
     */
    public function __construct()
    {
    }

    public function CreateBrackets($participants, $tournament_id = null, $bracketId = null)
    {
        $run = false;
        if (Yii::$app->user->identity != NULL && Yii::$app->user->identity->getId() <= 4) {
            $run = true;
        }

        if (false === $run) {
            Alert::addError('Ungültige Aktion.');
            return $this->redirect('details?id=' . $tournament_id);
        }

        $tournament = Tournament::getTournamentById($tournament_id);

        if($tournament->getIsTeamTournament())
        {
            $brackets = TeamBrackets::getAllByTournamentFormatted($tournament_id);

            if (count($brackets['winner']) > 0) {
                TeamBrackets::clearForTournament($tournament_id);
            }
		}
        else
        {
            $brackets = PlayerBrackets::getAllByTournamentFormatted($tournament_id);

            if (count($brackets['winner']) > 0) {
                PlayerBrackets::clearForTournament($tournament_id);
            }
        }

        /** Check if Power of Two and exend if necessary */
        if(!$this->IsPowerOfTwo(count($participants)))
        {
            $powerOfTwoCount = $this->nextPowerOf2(count($participants)) - count($participants);
            for($i = 0; $i < $powerOfTwoCount; $i++)
            {
                $tmpEntry['name'] = 'Freilos';

                array_push($participants, $tmpEntry);
			}
		}
        
        $participantBrackets = NULL;

        $firstRoundBrackets = count($participants)/2;
        for($i = 0; $i < $firstRoundBrackets; $i++)
        {
            $participantBrackets[$i][0]['name'] = $participants[$i]['name'];
            $participantBrackets[$i][0]['id'] = $participants[$i]['id'];

            if($participants[count($participants)+1-($i+2)]['name'] == 'Freilos')
            {
                $participantBrackets[$i][1] = null;
			}
            else
            {
	            $participantBrackets[$i][1]['name'] = $participants[count($participants)+1-($i+2)]['name'];
                $participantBrackets[$i][1]['id'] = $participants[count($participants)+1-($i+2)]['id'];
            }
		}

        $bracketSet = $tournament->getBracketSet();

        if (NULL !== $bracketSet && $participantBrackets) {

            $bracketArr = [];
            $looserPlayers = count($participants) - 1;

            // hier der algorithmus für die bracket zusammenstellung
            $playersPerRound = $this->createWinnerBracket($tournament->getIsTeamTournament(), $bracketArr, $tournament->getId(), count($participants), 1);
            
            if ($bracketSet->getIsDoubleElimination()) {
                $this->createLooserBracket($tournament->getIsTeamTournament(), $bracketArr, $looserPlayers,$tournament->getId(), $playersPerRound/2, 1, false);
            }

            $this->setPlayersIntoBracket($tournament->getId(), $bracketArr, $participantBrackets, $playersPerRound);
            $this->connectWinnerBrackets($bracketArr);

            if ($bracketSet->getIsDoubleElimination()) {
                $this->createConnectFinale($tournament->getIsTeamTournament(), $bracketSet, $bracketArr, $tournament_id);
                $countLooserBrackets = $this->connectLooserBrackets($bracketArr);
                $this->changeLooserRounds($bracketArr, $countLooserBrackets);
                $this->connectWinnerBracketsInLooser($bracketArr);
            }

            $this->moveFirstRoundTickets($bracketArr, $tournament);

            if ($bracketSet->getIsDoubleElimination()) {
                $this->stretchWinnerBracket($bracketArr, $tournament_id);
                $this->changeLooserBracketsRotation($bracketArr, $tournament_id);
            }

            Alert::addSuccess('Brackets erfolgreich angelegt.');
        }
        else
        {
            Alert::addError('An error occured');
		}
	}

    private function IsPowerOfTwo($x) {
        return ($x & ($x - 1)) == 0;
    }

    private function nextPowerOf2($n) { 
        $p = 1; 
        if ($n && !($n & ($n - 1))) 
            return $n; 
  
        while ($p < $n)  
            $p <<= 1; 
      
        return $p; 
    }

    private function createWinnerBracket($isTeamTournament, &$bracketArr, $tournament_id, $participants, $bracketSizeInRound) {
        
        $playersPerRound = $bracketSizeInRound*2;

        for ($b=0; $b < $bracketSizeInRound; $b++) { 
            
            if($isTeamTournament)
                $bracket = new TeamBrackets();
            else
	            $bracket = new PlayerBrackets();

            $bracket->tournament_id = $tournament_id;
            $bracket->best_of = 3;
            $bracket->round = 1;
            $bracket->is_winner = true;
            $bracket->insert();
            
            $bracketArr[] = $bracket;
        }

        if ($participants <= $playersPerRound) {
            return $playersPerRound;
        }

        return self::createWinnerBracket($isTeamTournament, $bracketArr, $tournament_id, $participants, $playersPerRound);
    }

    private function createLooserBracket($isTeamTournament, &$bracketArr, &$looserPlayers, $tournament_id, $playersPerWinnerRound, $bracketSizeInRound, $isVirtual) {

        $playersPerRound = ($isVirtual) ? $bracketSizeInRound*2 : $bracketSizeInRound;

        for ($b=0; $b < $bracketSizeInRound; $b++) { 

            if($isTeamTournament)
                $bracket = new TeamBrackets();
            else
	            $bracket = new PlayerBrackets();

            $bracket->tournament_id = $tournament_id;
            $bracket->best_of = 3;
            $bracket->round = 1;
            $bracket->is_winner = false;
            $bracket->insert();
            
            $bracketArr[] = $bracket;

            if (!$isVirtual) {
                $looserPlayers--;
            }
        }

        if ($playersPerRound >= $playersPerWinnerRound) {
            return;
        }

        self::createLooserBracket($isTeamTournament, $bracketArr, $looserPlayers, $tournament_id, $playersPerWinnerRound, $playersPerRound, !$isVirtual);
    }

    private function setPlayersIntoBracket($tournament_id, &$bracketArr, $participants, $playersPerRound) {

        $initialLimbs = $playersPerRound / 2;
        $countSingle = $playersPerRound - count($participants);

        $bracket = reset($bracketArr);

        /** Calculation Algorithm */

        for ($l=0; $l < $initialLimbs; $l++) { 
            
            $bracket->encounter_id = $l+1;
            $bracket->round = 1;

            $bracket->setParticipant(array_shift($participants));

            if (0 === $countSingle) {
                $bracket->setParticipant(array_shift($participants));
            } else {
                $countSingle--;
            }

            $bracket->update();



            $bracket = next($bracketArr);

        }
    }

    private function connectWinnerBrackets(&$bracketArr) {

        $initBracket = $bracketArr;

        $bracket1 = reset($initBracket);
        $bracket2 = next($initBracket);

        $id = 1;

        foreach ($bracketArr as $key => $bracket) {
            
            $encounterId = $bracket->getEncounterId();
            if ($encounterId !== NULL) {
                $id = $encounterId + 1;
                continue;
            }

            $bracket->encounter_id = $id;
            $bracket->round = $bracket1->getRound() + 1;
            $bracket->update();

            $bracket1->winner_bracket = $bracket->getId();
            $bracket2->winner_bracket = $bracket->getId();

            $bracket1->update();
            $bracket2->update();

            $bracket1 = next($initBracket);
            $bracket2 = next($initBracket);

            $id++;

            if (false !== $bracket1 && !$bracket1->getIsWinnerBracket()) {
                break;
            }

            if (false !== $bracket2 && !$bracket2->getIsWinnerBracket()) {
                break;
            }

        }
    }

    private function connectLooserBrackets(&$bracketArr) {

        $id = 0;

        foreach ($bracketArr as $key => $bracket) {
            
            $encounterId = $bracket->getEncounterId();
            if ($encounterId !== NULL) {
                $id = $encounterId + 1;
                continue;
            }

            $bracket->encounter_id = $id;
            $bracket->round = 1;
            $bracket->update();

            $id++;

        }

        $initBracketRevers = $bracketArr;
        $looserBracket = end($initBracketRevers);

        $initBracket = $bracketArr;
        $winnerBracket = reset($initBracket);
        while ($winnerBracket->getIsWinnerBracket()) {
            $winnerBracket = next($initBracket);
        }
        $winnerBracket = prev($initBracket);

        $countIns = 1;

        while (false !== $looserBracket && !$looserBracket->getIsWinnerBracket()) {

            for ($c=1; $c<=$countIns; $c++) {

                $winnerBracket->looser_bracket = $looserBracket->getId();
                $winnerBracket->update();
                $winnerBracket = prev($initBracket);

                $looserBracket = prev($initBracketRevers);

            }

            for ($c=1; $c<=$countIns; $c++) {
                $looserBracket = prev($initBracketRevers);
            }

            $countIns*= 2;

        }

        $countIns/= 2;

        if (false === $winnerBracket) {
            return;
        }

        for ($c=1; $c<=$countIns; $c++) {
            $looserBracket = next($initBracketRevers);
        }

        $countLooserBrackets = 0;

        while (false !== $looserBracket && !$looserBracket->getIsWinnerBracket()) {
            $winnerBracket->looser_bracket = $looserBracket->getId();
            $winnerBracket->update();
            $winnerBracket = prev($initBracket);

            $winnerBracket->looser_bracket = $looserBracket->getId();
            $winnerBracket->update();
            $winnerBracket = prev($initBracket);

            $looserBracket = prev($initBracketRevers);
            $countLooserBrackets++;
        }

        return $countLooserBrackets;
    }

    private function createConnectFinale($isTeamTournament, $bracketSet, &$bracketArr, $tournament_id) {
        if($isTeamTournament)
            $finale1 = new TeamBrackets();
        else
	        $finale1 = new PlayerBrackets();

        $finale1->tournament_id = $tournament_id;
        $finale1->encounter_id = count($bracketArr) + 1;
        $finale1->best_of = $bracketSet->getWinnerFinaleBO();
        $finale1->round = 998;
        $finale1->is_winner = true;
        $finale1->insert();

        if($isTeamTournament)
            $finale2 = new TeamBrackets();
        else
	        $finale2 = new PlayerBrackets();

        $finale2->tournament_id = $tournament_id;
        $finale2->encounter_id = count($bracketArr) + 2;
        $finale2->best_of = $bracketSet->getWinnerFinaleBO();
        $finale2->round = 999;
        $finale2->is_winner = true;
        $finale2->insert();

        $finale1->winner_bracket = $finale2->getId();
        $finale1->looser_bracket = $finale2->getId();
        $finale1->update();

        $highestWinnerRound = 0;
        $highestWinnerBracket = NULL;
        foreach ($bracketArr as $key => $bracket) {

            if (!$bracket->getIsWinnerBracket()) {
                continue;
            }

            if ($highestWinnerRound < $bracket->getRound()) {
                $highestWinnerRound = $bracket->getRound();
                $highestWinnerBracket = $bracket;
            }
        }

        $highestWinnerBracket->winner_bracket = $finale1->getId();
        $highestWinnerBracket->update();

        $lastBracket = end($bracketArr);
        $lastBracket->winner_bracket = $finale1->getId();
        $lastBracket->update();
    }

    private function changeLooserRounds(&$bracketArr, $countLooserBrackets) {

        $countFirstLooserBrackets = 0;
        $round = 0;

        foreach ($bracketArr as $key => $bracket) {

            if (!$bracket->getIsWinnerBracket()) {
                continue;
            }

            if ($bracket->getRound() !== 1) {
                continue;
            }

            $looserBracket = $bracket->getLooserBracket();
            if (NULL === $looserBracket) {
                continue;
            }

            $round = $bracket->getRound() + 1;
            $looserBracket->round = $round;
            $looserBracket->update();
            $countFirstLooserBrackets++;
        }

        $countFirstLooserBrackets/= 2;

        $counter = 0;
        $bracket = reset($bracketArr);
        while ($bracket->getIsWinnerBracket()) {
            $bracket = next($bracketArr);
        }
        while ($counter < $countFirstLooserBrackets) {
            $bracket = next($bracketArr);
            $counter++;
        }
        $isVirtual = false;
        $counter = 0;
        $round++;
        while (false !== $bracket) {

            $bracket->round = $round;
            $bracket->update();
            $bracket = next($bracketArr);
            $counter++;

            if ($counter === $countFirstLooserBrackets) {
                $isVirtual = !$isVirtual;
                if ($isVirtual && $countFirstLooserBrackets === 1) {
                    break;
                }
                $countFirstLooserBrackets = ($isVirtual) ? $countFirstLooserBrackets/2 : $countFirstLooserBrackets;
                $counter = 0;
                $round++;
            }
        }
    }

    private function connectWinnerBracketsInLooser(&$bracketArr) {
        
        $initBracket = $bracketArr;

        $winnerBrackets = reset($initBracket);
        while ($winnerBrackets->getIsWinnerBracket()) {
            $winnerBrackets = next($initBracket);
        }
        $looserBracket = $winnerBrackets;

        $isVirtual = true;

        foreach ($bracketArr as $key => $bracket) {
            
            if ($bracket->getIsWinnerBracket()) {
                continue;
            }

            $bracketRefs = count($bracket->getBracketRefs());

            for ($b=$bracketRefs; $b<2; $b++) {

                $looserBracket->winner_bracket = $bracket->getId();
                $looserBracket->update();

                $looserBracket = next($initBracket);
            }
        }
    }

    private function moveFirstRoundTickets(&$bracketArr, $tournament) {
        
        foreach ($bracketArr as $key => $bracket) {
            
            if ($bracket->getRound() > 1) {
                continue;
            }

            if($tournament->getIsTeamTournament())
            {
                if ($bracket->getTeamParticipant2Id()) {
                    continue;
                }
			}
            else
            {
                if ($bracket->getPlayerParticipant2Id())
                {
                    for($i = 0; $i < $bracket->getBestOf(); $i++)
                    {
                        $encounterParticipant1 = new PlayerBracketEncounter();
                        $encounterParticipant1->id = $bracket->getEncounterId();
                        $encounterParticipant1->tournament_id = $tournament->getId();
                        $encounterParticipant1->game_round = $i+1;
                        $encounterParticipant1->player_id = $bracket->getPlayerParticipant1Id();
                        $encounterParticipant1->save();

                        $encounterParticipant2 = new PlayerBracketEncounter();
                        $encounterParticipant2->id = $bracket->getEncounterId();
                        $encounterParticipant2->tournament_id = $tournament->getId();
                        $encounterParticipant2->game_round = $i+1;
                        $encounterParticipant2->player_id = $bracket->getPlayerParticipant2Id();
                        $encounterParticipant2->save();
				    }

                    continue;
                }
			}      

            $bracket->movePlayersNextRound(1);
        }
    }

    private function stretchWinnerBracket(&$bracketArr) {

        foreach ($bracketArr as $key => $bracket) {

            if (!$bracket->getIsWinnerBracket()) {
                continue;
            }

            $tRound = $bracket->getRound();

            if ($tRound == 1 || $tRound == 2) {
                continue;
            }

            $diff = $tRound - 2;
            $newRound = $tRound + $diff;
            $bracket->round = $newRound;
            $bracket->update();
        }
    }

    private function changeLooserBracketsRotation(&$bracketArr, $tournament_id) {

        $rotateRound = 3;
        $roundFound = true;
        while ($roundFound) {

            $roundFound = false;
            $rotateBrackets = [];
            $rotateBracketsRefs = [];

            foreach ($bracketArr as $key => $bracket) {
                
                if ($bracket->getIsWinnerBracket()) {
                    continue;
                }

                if ($bracket->getRound() != $rotateRound) {
                    continue;
                }

                $roundFound = true;

                $refs = $bracket->getBracketRefs();
                array_push($rotateBrackets, $bracket);
                array_push($rotateBracketsRefs, $refs[0]['bracket']);

            }

            while ($bracket = array_shift($rotateBrackets)) {
                $ref = array_pop($rotateBracketsRefs);

                $ref->looser_bracket = $bracket->getId();
                $ref->update();
            }

            $rotateRound+= 4;
        }
    }
}