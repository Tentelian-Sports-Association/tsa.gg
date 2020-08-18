<?php
/* @var $this yii\web\View */


\app\modules\tournament\assets\ActiveTournamentAsset::register($this);

?>

<div id="big">
  <script type="text/javascript">
  
  var bigData = {
    teams : [
      ["Team 1",  "Team 2" ],
      ["Team 3",  "Team 4" ],
      ["Team 5",  "Team 6" ],
      ["Team 7",  "Team 8" ],
      ["Team 9",  "Team 10"],
      ["Team 11", "Team 12"],
      ["Team 13", "Team 14"],
      ["Team 15", "Team 16"]
    ],
    results : [
        [/* WINNER BRACKET */
        [[1,3]]],
        [/* LOSER BRACKET */],
        [/* FINALS */]
    ]
  }


  $(function() {
      $('div#big .demo').bracket({
        skipConsolationRound: true,
        init: bigData})
    })
  
</script>


<div class="demo">
    
</div>