<?php

namespace app\modules\miscellaneouse;

use yii;
use yii\web\View;
use yii\helpers\Url;

/**
 * Class MetaClass
 * @package app\modules\core\miscellaneous
 */
class TournamentBracketClass
{
    /**
     * TournamentBracketClass constructor.
     */
    public function __construct() { }

    public function createBracketData($participants, $gameClassName, $tournament_id)
    {
        $game = 'app\modules\tournament\modules\\' .$gameClassName . '\CreateBrackets';
        $gameClass = new $game();
        $brackets = [];

        if($participants)
        {
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

            $firstRoundBrackets = count($participants)/2;

            for($i = 0; $i < $firstRoundBrackets; $i++)
            {
                $brackets['teams'][$i][0]['name'] = $participants[$i]['name'];
                $brackets['teams'][$i][0]['id'] = $participants[$i]['id'];

                if($participants[count($participants)+1-($i+2)]['name'] == 'Freilos')
                {
                    $brackets['teams'][$i][1] = null;
				}
                else
                {
	                $brackets['teams'][$i][1]['name'] = $participants[count($participants)+1-($i+2)]['name'];
                    $brackets['teams'][$i][1]['id'] = $participants[count($participants)+1-($i+2)]['id'];
                }
		    }
        }

        $tournamentBrackets = $gameClass->CreateBrackets($participants, $tournament_id);

        /** Return the Brackets */
        return $tournamentBrackets;
    }

    public function IsPowerOfTwo($x)
    {
        return ($x & ($x - 1)) == 0;
    }

    function nextPowerOf2($n) 
    { 
        $p = 1; 
        if ($n && !($n & ($n - 1))) 
            return $n; 
  
        while ($p < $n)  
            $p <<= 1; 
      
        return $p; 
    }
}