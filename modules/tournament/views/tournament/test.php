<?php
/* @var $this yii\web\View */


\app\modules\tournament\assets\TournamentDetailsAsset::register($this);

?>

<div id="doubleElimination">
	<script type="text/javascript">
  
  var doubleEliminationData = {
    teams : [
        ["Team 1", "Team 2"],
        ["Team 3", "Team 4"],
        ["Team 5", "Team 6"],
        ["Team 7", "Team 8"],
        ["Team 9", null],
        ["Team 10", null],
        ["Team 11", null],
        ["Team 12", null],
    ],
    results : [[      /* WINNER BRACKET */
      [],               /* first and second matches of the first round */
      [],               /* second round */
    ], [              /* LOSER BRACKET */
      [],               /* first round */
    ], [              /* FINALS */
      [],               /* First Finale */
      []                /* LB winner won first round so need a rematch */
    ]]
  }
 
$(function() {
    $('div#doubleElimination .demo').bracket({
        //onMatchHover: onhover,
        skipConsolationRound: true,
        centerConnectors: true,
        init: doubleEliminationData})
  })
  
</script>


	<div class="demo">
	</div>
</div>