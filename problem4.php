<?php
#Largest palindrome product - Problem 4
$time_start = microtime(true);
//////////////////////////////////////////

$digits = range(100, 999);
$count = count($digits);

for ($i=0; $i<$count; $i++){
	$a=$digits[$i];
	for ($j=0; $j<$count; $j++){
		$b=$digits[$j];
		$p=$a*$b;
		$l=strlen($p);
		if ($l%2==0){
			$products[]=$p;
		}
	}
}

foreach ($products As $product){
	$a = substr($product, 0,3);
	$b = strrev(substr($product, 3));
		if ($a==$b){
			$palindrome[]=$product;
		}

}
rsort($palindrome);
$result = $palindrome[0];
echo "The Biggest Palindrome with 3 digits is $result";

// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////

?>