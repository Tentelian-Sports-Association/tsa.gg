<?php
/* @var $this yii\web\View */
/* @var $tournament array */
/* @var $rules array */
/* @var $participants array */
/* @var $doubleEliminationData array */


\app\modules\tournament\assets\TournamentDetailsAsset::register($this);

?>
<div class="site-tournamentDetails">
    <div class="hero">
    </div>

    <div class="rules">
    </div>

    <div class="participants">
    </div>

    <div class="brackets">
    </div>
</div>

<?php

    $jsonCode =  '{"teams":[["Team 1","Team 2"],["Team 3","Team 4"],["Team 5","Team 6"],["Team 7","Team 8"],["Team 9",null],["Team 10",null],["Team 11",null],["Team 12",null]],"results":[[[],[]],[[]],[[],[]]]}';
    $json_result = json_decode($jsonCode, true);

    //print_r($json_result);
    //die();

    //$doubleEliminationData = [];

    /** Teams */
    /*$doubleEliminationData['teams'][0][0] = 'Team 1';
    $doubleEliminationData['teams'][0][1] = 'Team 2';

    $doubleEliminationData['teams'][1][0] = 'Team 3';
    $doubleEliminationData['teams'][1][1] = 'Team 4';

    $doubleEliminationData['teams'][2][0] = 'Team 5';
    $doubleEliminationData['teams'][2][1] = 'Team 6';

    $doubleEliminationData['teams'][3][0] = 'Team 7';
    $doubleEliminationData['teams'][3][1] = 'Team 8';

    $doubleEliminationData['teams'][4][0] = 'Team 9';
    $doubleEliminationData['teams'][4][1] = null;

    $doubleEliminationData['teams'][5][0] = 'Team 10';
    $doubleEliminationData['teams'][5][1] = null;

    $doubleEliminationData['teams'][6][0] = 'Team 11';
    $doubleEliminationData['teams'][6][1] = null;

    $doubleEliminationData['teams'][7][0] = 'Team 12';
    $doubleEliminationData['teams'][7][1] = null;

    /** Results */
    /** Winner First Round */
    /*$doubleEliminationData['results'][0][0][0][0] = null;
    $doubleEliminationData['results'][0][0][0][1] = null;

    $doubleEliminationData['results'][0][0][1][0] = null;
    $doubleEliminationData['results'][0][0][1][1] = null;

    $doubleEliminationData['results'][0][0][2][0] = null;
    $doubleEliminationData['results'][0][0][2][1] = null;

    $doubleEliminationData['results'][0][0][3][0] = null;
    $doubleEliminationData['results'][0][0][3][1] = null;

    /** Winner Second Round */
    /*$doubleEliminationData['results'][0][1][0][0] = 0;
    $doubleEliminationData['results'][0][1][0][1] = 2;

    $doubleEliminationData['results'][0][1][1][0] = 2;
    $doubleEliminationData['results'][0][1][1][1] = 1;

    $doubleEliminationData['results'][0][1][2][0] = 2;
    $doubleEliminationData['results'][0][1][2][1] = 0;

    $doubleEliminationData['results'][0][1][3][0] = 1;
    $doubleEliminationData['results'][0][1][3][1] = 2;

    /** Winner Third Round */
    /*$doubleEliminationData['results'][0][2][0][0] = 0;
    $doubleEliminationData['results'][0][2][0][1] = 2;

    $doubleEliminationData['results'][0][2][1][0] = 2;
    $doubleEliminationData['results'][0][2][1][1] = 1;

    /** Winner Fourth Round */
    /*$doubleEliminationData['results'][0][3][0][0] = 0;
    $doubleEliminationData['results'][0][3][0][1] = 2;

    /** Looser First Round */
    /*$doubleEliminationData['results'][1][0][0][0] = null;
    $doubleEliminationData['results'][1][0][0][1] = null;

    $doubleEliminationData['results'][1][0][1][0] = null;
    $doubleEliminationData['results'][1][0][1][1] = null;

    $doubleEliminationData['results'][1][0][2][0] = null;
    $doubleEliminationData['results'][1][0][2][1] = null;

    $doubleEliminationData['results'][1][0][3][0] = null;
    $doubleEliminationData['results'][1][0][3][1] = null;

    /** Looser Second Round */
    /*$doubleEliminationData['results'][1][1][0][0] = 1;
    $doubleEliminationData['results'][1][1][0][1] = 2;

    $doubleEliminationData['results'][1][1][1][0] = 2;
    $doubleEliminationData['results'][1][1][1][1] = 0;

    $doubleEliminationData['results'][1][1][2][0] = null;
    $doubleEliminationData['results'][1][1][2][1] = null;

    $doubleEliminationData['results'][1][1][3][0] = null;
    $doubleEliminationData['results'][1][1][3][1] = null;

    /** Looser Third Round */
    /*$doubleEliminationData['results'][1][2][0][0] = 1;
    $doubleEliminationData['results'][1][2][0][1] = 2;

    $doubleEliminationData['results'][1][2][1][0] = 2;
    $doubleEliminationData['results'][1][2][1][1] = 0;

    /** Looser fourth Round */
    /*$doubleEliminationData['results'][1][3][0][0] = 1;
    $doubleEliminationData['results'][1][3][0][1] = 2;

    $doubleEliminationData['results'][1][3][1][0] = 2;
    $doubleEliminationData['results'][1][3][1][1] = 0;

    /** Looser fifth Round */
    /*$doubleEliminationData['results'][1][4][0][0] = 1;
    $doubleEliminationData['results'][1][4][0][1] = 2;

    /** Looser Sixt Round */
    /*$doubleEliminationData['results'][1][5][0][0] = 1;
    $doubleEliminationData['results'][1][5][0][1] = 2;


    /** FINALE */
    /*$doubleEliminationData['results'][2][0][0][0] = 0;
    $doubleEliminationData['results'][2][0][0][1] = 2;

    $doubleEliminationData['results'][2][1][0][0] = 0;
    $doubleEliminationData['results'][2][1][0][1] = 2;*/
   


    //print_r($doubleEliminationData);
    //die();
?>


<div id="doubleElimination">
	<script type="text/javascript">

    var doubleEliminationData = <?= json_encode($doubleEliminationData) ?>;

    //console.log(doubleEliminationDatas);
    //console.log(doubleEliminationData);
    
    //skipSecondaryFinal: false,
    //centerConnectors: true,

    $(function() {
        $('div#doubleElimination .demo').bracket({
            skipConsolationRound: true,
            init: doubleEliminationData })
        });
    </script>

	<div class="demo">
	</div>
</div>