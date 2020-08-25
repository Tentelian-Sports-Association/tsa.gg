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

    public function createBracketData($participants)
    {

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
                $brackets['teams'][$i][0] = $participants[$i]['name'];
                $brackets['teams'][$i][1] = $participants[count($participants)+1-($i+2)]['name'];

                /** Winner first Round */
                $brackets['results'][0][0][$i][0] = null;
                $brackets['results'][0][0][$i][1] = null;

                /** Looser first Round */
                if ($i < $firstRoundBrackets/2)
                {
                    $brackets['results'][1][0][$i][0] = null;
                    $brackets['results'][1][0][$i][1] = null;
				}
		    }
        }

        /** Return the Brackets */
        return $brackets;
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