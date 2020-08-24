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
      ["Team 5", "Team 6"],
      ["Team 5", "Team 6"],
      ["Team 5", "Team 6"],
      ["Team 7", null],
      [null, null]

    ],
    results : [
    [/* WINNER BRACKET */
      [[4,3], [5,3]],           /* first and second matches of the first round */
      []            /* second round */
    ],
    [/* LOSER BRACKET */
      [],           /* first round */
      []            /* second round */
    ],
    [/* FINALS */
      [],           /* First Round */
      []            /* LB winner won first round so need a rematch */
    ]]
  }
 
$(function() {
    $('div#doubleElimination .demo').bracket({
        centerConnectors: true,
        skipConsolationRound: false,
        init: doubleEliminationData})
  })
  
</script>


<div class="demo">
    
</div>