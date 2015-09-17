<?php
#Summation of primes - Problem 10
ini_set('memory_limit','256M');
$time_start = microtime(true);
//////////////////////////////////////////////////////

$limit = 2000000;
for ($i=2; $i<=$limit; $i++){
	$list [$i]= true ;
}

for ($i=2; $i<=floor(sqrt($limit)); $i++){
	if ($list[$i]==true){
		for ($j=$i*$i; $j<=$limit; $j=$j+$i){
			$list[$j]=false;
		}
	}
}
$sum =2;


foreach ($list as $prime=>$value){
	if ($value==true){
		$sum +=$prime;
	}
}
echo $sum;




///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////





/*
ini_set('max_execution_time', 60); 

$time_start = microtime(true);
//////////////////////////////////////////////////////
function isPrime($num) {
    if($num == 1){
        return false;
	}
    if($num == 2){
        return true;
	}
    if($num % 2 == 0 || $num %3 ==0 || $num %5 ==0 || $num %7 ==0) {
        return false;
    }
    for($i = 11; $i <= floor(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0){
            return false;
		}
		
    }
    return true;
}

$limit = 2000;
$sum = 17;
$n =11;
while ($n<$limit){
	if (isPrime($n)==true){
		$sum +=$n;
		//$n=$n+2;
	}
	
	$n=$n+2;
	
	
}


echo "Sum of primes under $limit equals $sum";


///////////////////////////////////////////////////////
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
/////////////////////////////////////////////////////////////////////
*/
?>