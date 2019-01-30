<?php
//
//$n = 100;
//  $i = 2;
 // while ($i * $i < $n) {
  //     while ($n % $i == 0) {
   //        $n = $n / $i;
    //       $i = $i + 1;
     //  }
//  } 
 // echo $n;

$limit = 600851475143;
$primes  = array();

function isPrime($x)
{
	if ($x < 2)
	{
		return false;
	}
	
	if (($x % 2 == 0) && ($x > 2))
	{	// a multiple of 2, but not 2 itself
		return false;
	}
	
	for ($i = 3; $i <= sqrt($x); $i += 2)
	{
		if ($x % $i == 0)
		{	// found a factor of x
			return false;
		}
	}
	
	return true;
}

function findPrimes($x)
{
	// need to re-declare $primes as a global variable so this function can access it:
	global $primes;
	
	for ($i = 3; $i < sqrt($x); $i += 2)
	{
		if ((fmod($x,$i) == 0) && isPrime($i))
		{
			if (! in_array($i, $primes))
			{
				array_push($primes, $i);
			}
		}
	}
}

findPrimes($limit);
rsort($primes,  SORT_NUMERIC);
echo $primes[0];

