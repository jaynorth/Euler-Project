<?php
ini_set('max_execution_time', 300); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
$sum = 2;
for ($i = 3; $i < 2000000; $i=$i+2) {

  $d = 3;
  $x = sqrt($i);
  while ($i % $d != 0 && $d < $x) {
    $d += 2;
  }
  if ((($i % $d == 0 && $i != $d) * 1) == 0) {
    $sum += $i;
  }
}
echo $sum;

///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Timeeeeeeeeeee:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////

?>