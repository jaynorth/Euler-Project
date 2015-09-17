<?php
#Square digit chains - Problem 92 
ini_set('max_execution_time', 1000); 

$time_start = microtime(true);
//////////////////////////////////////////////////////

function square_chain($n, &$total, &$x){
	$p = $n;
	
	while ($p>1 && $p!=89){
		$digits = str_split($p);
		$sum = 0;
		foreach ($digits As $digit){
			$sum += bcpow($digit, 2);
		}
		$p = $sum;
		
		if ($n>567 && in_array($p, $x)){
			$total++;
			//$x[]=$n;
			//echo "in array $p for number $n<br />";
			return;
		}
		
		//echo "N is $n and P is $p <br />";
	}
	
	switch ($p){
		
		case 1:
			break;
		case 89:
			$total++;
			$x[]=$n;
			return $total;
			break;
		default:
			echo "error!";
			break;
		}
		//print_r($x);
}

$max = pow(9, 2)*7 ;
$limit=10000000;
$total=0;
$x=array();

for ($i=1; $i<=$limit; $i++){
$sum = square_chain($i, $total, $x);
}
echo "Sum is $total";


//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>