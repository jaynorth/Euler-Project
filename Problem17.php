<?php
ini_set('max_execution_time', 30); 
$time_start = microtime(true);
//////////////////////////////////////////////////////
#Number letter counts - Problem 17

function count_letters ($n){
$letters = array (1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six', 7 => 'seven', 8 => 'eight', 9 => 'nine', 10 => 'ten', 
11 => 'eleven', 12 => 'twelve', 13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen', 16 => 'sixteen', 17 => 'seventeen', 
18 => 'eighteen', 19 => 'nineteen', 20 => 'twenty', 30 => 'thirty', 40=> 'fourty', 50=> 'fifty', 60 => 'sixty' , 70 => 'seventy', 
80=> 'eighty', 90=> 'ninety', 100 => 'hundred'); 
	if ($n<20){
		$sum = strlen($letters[$n]);
		echo"$letters[$n] <br />";
	}
	elseif ($n>19 && $n<100 && $n%10==0){
		$sum = strlen($letters[$n]);
		echo"$letters[$n] <br />";
	}
	elseif($n>19 && $n<100 && $n%10!=0){
		$left = $n%10;
		$dozen = $n-$left;
		$sum = strlen($letters[$dozen]);
		echo"$letters[$dozen] <br />";
		$sum += strlen($letters[$left]);
		echo"$letters[$left] <br />";
	}
	elseif ($n>99 && $n%100==0 && $n!=1000){
		$h=$n/100;
		$sum = strlen($letters[$h]);
		echo" $letters[$h] <br />";
		$sum += strlen($letters[100]);
		echo"$letters[100] <br />";
	}
	elseif ($n>100 && $n<1000 && $n%100!=0 && $n%100<20 ){
		$left = $n%100;
		$hundreds = ($n-$left)/100;
		//$dozen = ($left%10);
		//$dozen = $left-$dozen;
		//echo "<b>$dozen</b>";
		$digit = $left;
		$sum = strlen($letters[$hundreds]);
		echo"$letters[$hundreds]";
		$sum += strlen($letters[100]);
		echo " $letters[100]";
		$sum += 3;//for and
		echo " and ";
		$sum += strlen($letters[$digit ]);
		echo "$letters[$digit] <br />";
		
	}
	elseif ($n>100 && $n<1000 && $n%100!=0){
		$left = $n%100;
		$hundreds = ($n-$left)/100;
		$dozen = ($left%10);
		$dozen = $left-$dozen;
		//echo "<b>$dozen</b>";
		$digit = $left%10;
		$sum = strlen($letters[$hundreds]);
		echo"$letters[$hundreds]";
		$sum += strlen($letters[100]);
		echo " $letters[100]";
		$sum += 3;//for and
		echo " and ";
		if ($dozen !=0){
			$sum += strlen($letters[$dozen]);
			 echo " $letters[$dozen]";
		}
		if ($digit !=0){
			$sum += strlen($letters[$digit ]);
			echo "$letters[$digit] <br />";
		}
	}
	elseif ($n==1000){
		echo "one thousand";
		$sum = 11;
	}
	else {
		echo "Not a valid number !!!";
		
	}
	
	return $sum;

}
$total = 0;
for ($i=1; $i<1001; $i++){

 $sum = count_letters($i);
 $total += $sum;
 }
 echo "<br /><b>Total is $total<b>";




//////////////////////////////////////////////////////////////////////
// End of execution time calculation
$time_end = microtime(true);
$execution_time = ($time_end - $time_start); //total execution time
/////////////////////////////////////////////////////////////////////
//Below Outputs the execution time in seconds
echo '<br /><br /><b>Total Execution Time:</b> '.$execution_time.' seconds';
?>