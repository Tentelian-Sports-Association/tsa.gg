<?php

namespace app\modules\tournament\controllers;

use app\components\BaseController;
use yii\filters\AccessControl;
use Yii;
use app\widgets\Alert;

use app\modules\tournament\models\Tournament;

use app\modules\tournament\modules\clashRoyale\models\PlayerBrackets;
use app\modules\tournament\modules\clashRoyale\models\PlayerBracketEncounter;
use app\modules\tournament\modules\clashRoyale\models\PlayerBracketEncounterCurrentDeck;


/**
 * Class PartnerController
 *
 * @package app\modules\tournament\controllers
 */
class ClashRoyaleController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behavior()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['0'],
                    ]
                ]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /** Register */

    public function actionRegisterPlayer($tournamentId)
    {
        print_r("dies ist der Clash Royale Controller");
        die();
	}

    public function actionFetchPlayerData($tournamentId = null, $bracketId = null)
    {
        if(!$tournamentId || !$bracketId)
        {
              Alert::addError('No Tournament and Bracket Selected');
              return $this->redirect(['/tournament/overview']);
		}

        /** Base Informations **/
        $user = Yii::$app->HelperClass->getUser();
        $languageID = Yii::$app->HelperClass->getUserLanguage($user);

        $tournament = Tournament::getTournamentById($tournamentId);
        $bracket = PlayerBrackets::find()->where(['id' => $bracketId])->one();

        $tmp = 'app\modules\miscellaneouse\API\ClashRoyale\RoyaleAPICalls';
        $gameClass = new $tmp();

        $data = $gameClass->getBracketData($user);
        $sortedBattleLogData = $this->sortEncounterData($data, $bracket);
        
        $encounterData1 = $bracket->getEncounterData($bracket->getPlayerParticipant1Id());
        $encounterData2 = $bracket->getEncounterData($bracket->getPlayerParticipant2Id());

        foreach($sortedBattleLogData as $nr => $battleLogData)
        {
            $ecd = -1;
                
            foreach($encounterData1 as $ecdNr => $singleEncounter)
            {
                if($singleEncounter->getBattleTime() != null) { continue; }

                $ecd = $ecdNr;
                break;
			}

            if($ecd != -1)
            {
                $encounterData1[$ecd]->battle_time = $battleLogData['battleTime'];
                $encounterData1Cards = PlayerBracketEncounterCurrentDeck::find()->where(['player_id' => $encounterData1[$ecd]['player_id']])->andWhere(['tournament_id' => $encounterData1[$ecd]['tournament_id']])->andWhere(['encounter_id' => $encounterData1[$ecd]['id']])->andWhere(['encounter_round' => $encounterData1[$ecd]['game_round']])->one();
                $encounterData2[$ecd]->battle_time = $battleLogData['battleTime'];
                $encounterData2Cards = PlayerBracketEncounterCurrentDeck::find()->where(['player_id' => $encounterData2[$ecd]['player_id']])->andWhere(['tournament_id' => $encounterData2[$ecd]['tournament_id']])->andWhere(['encounter_id' => $encounterData2[$ecd]['id']])->andWhere(['encounter_round' => $encounterData2[$ecd]['game_round']])->one();


                if(!$encounterData1Cards)
                    $encounterData1Cards = new PlayerBracketEncounterCurrentDeck();

                if(!$encounterData2Cards)
                    $encounterData2Cards = new PlayerBracketEncounterCurrentDeck();

                $encounterData1Cards['player_id'] = $encounterData1[$ecd]['player_id'];
                $encounterData2Cards['player_id'] = $encounterData2[$ecd]['player_id'];

                $encounterData1Cards['tournament_id'] = $encounterData1[$ecd]['tournament_id'];
                $encounterData2Cards['tournament_id'] = $encounterData2[$ecd]['tournament_id'];

                $encounterData1Cards['encounter_id'] = $encounterData1[$ecd]['id'];
                $encounterData2Cards['encounter_id'] = $encounterData2[$ecd]['id'];

                $encounterData1Cards['encounter_round'] = $encounterData1[$ecd]['game_round'];
                $encounterData2Cards['encounter_round'] = $encounterData2[$ecd]['game_round'];

                $encounterData1Cards['card_1_id'] = $battleLogData['team']['cards'][0]['id'];
                $encounterData2Cards['card_1_id'] = $battleLogData['opponent']['cards'][0]['id'];
                $encounterData1Cards['card_2_id'] = $battleLogData['team']['cards'][1]['id'];
                $encounterData2Cards['card_2_id'] = $battleLogData['opponent']['cards'][1]['id'];
                $encounterData1Cards['card_3_id'] = $battleLogData['team']['cards'][2]['id'];
                $encounterData2Cards['card_3_id'] = $battleLogData['opponent']['cards'][2]['id'];
                $encounterData1Cards['card_4_id'] = $battleLogData['team']['cards'][3]['id'];
                $encounterData2Cards['card_4_id'] = $battleLogData['opponent']['cards'][3]['id'];
                $encounterData1Cards['card_5_id'] = $battleLogData['team']['cards'][4]['id'];
                $encounterData2Cards['card_5_id'] = $battleLogData['opponent']['cards'][4]['id'];
                $encounterData1Cards['card_6_id'] = $battleLogData['team']['cards'][5]['id'];
                $encounterData2Cards['card_6_id'] = $battleLogData['opponent']['cards'][5]['id'];
                $encounterData1Cards['card_7_id'] = $battleLogData['team']['cards'][6]['id'];
                $encounterData2Cards['card_7_id'] = $battleLogData['opponent']['cards'][6]['id'];
                $encounterData1Cards['card_8_id'] = $battleLogData['team']['cards'][7]['id'];
                $encounterData2Cards['card_8_id'] = $battleLogData['opponent']['cards'][7]['id'];
                $encounterData1Cards['battle_time'] = $battleLogData['battleTime'];
                $encounterData2Cards['battle_time'] = $battleLogData['battleTime'];

                $encounterData1[$ecd]->crowns = $battleLogData['team']['crowns'];
                $encounterData2[$ecd]->crowns = $battleLogData['opponent']['crowns'];
                $encounterData1[$ecd]->king_tower_hit_points = $battleLogData['team']['king_tower_hit_points'];
                $encounterData2[$ecd]->king_tower_hit_points = $battleLogData['opponent']['king_tower_hit_points'];
                $encounterData1[$ecd]->princess_tower_1_hitpoints = $battleLogData['team']['princess_tower_1_hitpoints'];
                $encounterData2[$ecd]->princess_tower_1_hitpoints = $battleLogData['opponent']['princess_tower_1_hitpoints'];
                $encounterData1[$ecd]->princess_tower_2_hitpoints = $battleLogData['team']['princess_tower_2_hitpoints'];
                $encounterData2[$ecd]->princess_tower_2_hitpoints = $battleLogData['opponent']['princess_tower_2_hitpoints'];

                $encounterData1Cards->save();
                $encounterData2Cards->save();

                $encounterData1[$ecd]->save();
                $encounterData2[$ecd]->save();
			}
		}

        $gameEncounterClass = 'app\modules\tournament\modules\ClashRoyale\models\PlayerBracketEncounter';
        $tournamentEncounterClass = new $gameEncounterClass();
        $winner = $tournamentEncounterClass->getWinner($bracket);

        if($winner)
        {
            $bracket->moveParticipantsNextRound($winner);
            
            $bracket->finished = 1;
            $bracket->save();

            Alert::addSuccess('Bracket Data Saved and Bracket Closed.');
            return $this->redirect(['tournament/bracket-details?tournamentId=' . $tournament->getId() . '&bracketId=' . $bracket->getId()]);
		}

        Alert::addSuccess('Bracket Data Saved');
        return $this->redirect(['tournament/bracket-details?tournamentId=' . $tournament->getId() . '&bracketId=' . $bracket->getId()]);
	}

    private function sortEncounterData($data, $bracket)
    {
        $dataSet = 0;
        $returnEncounterData = [];

        $lastPlayer1Encounters = PlayerBracketEncounter::find()->where(['tournament_id' => $bracket->getTournamentId()])->andWhere(['player_id' => $bracket->getPlayerParticipant1Id()])->andWhere(['>','battle_time', 0])->select('battle_time')->orderBy(['id' => SORT_ASC])->all();

        foreach($data as $nr => $encounter)
        {
            if($encounter['type'] != 'clanMate') { continue; }
            if($dataSet > $bracket->getBestOf()) { break; }
            
            foreach($lastPlayer1Encounters as $battleTimeLog)
            {
                if($encounter['battleTime'] == $battleTimeLog['battle_time'])
                {
                    $passingBattleTimeEncounter = PlayerBracketEncounter::find()->where(['tournament_id' => $bracket->getTournamentId()])->andWhere(['player_id' => $bracket->getPlayerParticipant1Id()])->andWhere(['battle_time' => $battleTimeLog['battle_time']])->one();
                    
                    if($passingBattleTimeEncounter->getId() == $bracket->getEncounterId())
                    {
                        $dataSet++;
					}
                    
                    continue 2;
				}
			}

            if($encounter['team'][0]['tag'] == $bracket->getPlayerParticipant1()->getPlayerId(3)['player_id'] && $encounter['opponent'][0]['tag'] == $bracket->getPlayerParticipant2()->getPlayerId(3)['player_id']) {
                $returnEncounterData[$dataSet] = $this->setData($encounter,'team', 'opponent');
                $dataSet++;
			} else if($encounter['opponent'][0]['tag'] == $bracket->getPlayerParticipant1()->getPlayerId(3)['player_id'] && $encounter['team'][0]['tag'] == $bracket->getPlayerParticipant2()->getPlayerId(3)['player_id']) {
                $returnEncounterData[$dataSet] = $this->setData($encounter,'opponent', 'team');
                $dataSet++;
			}
		}

        return $returnEncounterData;
	}

    private function setData($log, $participant1, $participant2)
    {
        $returnValue = [];

        $returnValue['battleTime'] = $log['battleTime'];

        /* Player 1 */
        $returnValue[$participant1]['crowns'] = $log[$participant1][0]['crowns'];
        $returnValue[$participant1]['king_tower_hit_points'] = array_key_exists('kingTowerHitPoints', $log[$participant1][0])? $log[$participant1][0]['kingTowerHitPoints']: 0;
        $returnValue[$participant1]['princess_tower_1_hitpoints'] = 0;
        $returnValue[$participant1]['princess_tower_2_hitpoints'] = 0;
        if(array_key_exists('princessTowersHitPoints', $log[$participant1][0]))
        {
            if(sizeof($log[$participant1][0]['princessTowersHitPoints']) == 2)
            {
                $returnValue[$participant1]['princess_tower_1_hitpoints'] = $log[$participant1][0]['princessTowersHitPoints'][0];
                $returnValue[$participant1]['princess_tower_2_hitpoints'] = $log[$participant1][0]['princessTowersHitPoints'][1];
			}
            else
            {
                $returnValue[$participant1]['princess_tower_1_hitpoints'] = $log[$participant1][0]['princessTowersHitPoints'][0];
            }
		}

        $returnValue[$participant1]['cards'] = $log[$participant1][0]['cards'];

        /* Player 2 */
        $returnValue[$participant2]['crowns'] = $log[$participant2][0]['crowns'];
        $returnValue[$participant2]['king_tower_hit_points'] = array_key_exists('kingTowerHitPoints', $log[$participant2][0])? $log[$participant2][0]['kingTowerHitPoints']: 0;
        $returnValue[$participant2]['princess_tower_1_hitpoints'] = 0;
        $returnValue[$participant2]['princess_tower_2_hitpoints'] = 0;
        if(array_key_exists('princessTowersHitPoints', $log[$participant2][0]))
        {
            if(sizeof($log[$participant2][0]['princessTowersHitPoints']) == 2)
            {
                $returnValue[$participant2]['princess_tower_1_hitpoints'] = $log[$participant2][0]['princessTowersHitPoints'][0];
                $returnValue[$participant2]['princess_tower_2_hitpoints'] = $log[$participant2][0]['princessTowersHitPoints'][1];
			}
            else
            {
                $returnValue[$participant2]['princess_tower_1_hitpoints'] = $log[$participant2][0]['princessTowersHitPoints'][0];
            }
		}

        $returnValue[$participant2]['cards'] = $log[$participant2][0]['cards'];

        return $returnValue;
	}

    private function setEncounterData()
    {
        
	}
}