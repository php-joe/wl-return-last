<?php

//Display last sentence.
function myLastSentence() {
  if(isset($_POST['string'])) {
  $string = $_POST['string'];
  $stringSplit = preg_split('/["?.!]\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
  $numberPeriods = substr_count($string, ".") + substr_count($string, "?") + substr_count($string, "!");
  $lastString=" ";

  if ($numberPeriods > 1) {
  $lastString = $stringSplit[($numberPeriods-1)];
  }
  elseif ($numberPeriods == 1) {
    $lastString = $stringSplit[0];
  }
  else {
    $lastString = "Your input does not include a sentence.";
  }
  echo "<br><br> Your last sentence is:<br><em><u>" . $lastString . "</em></u>";
}
}
