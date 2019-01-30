<?php 

/** 
 * Sieve of Arestosthenes
 * @param upper bound
 * @return an array of prime numbers that are less than the specified upper bound
 *
 */

//$upperBound = $argv[1];

function primeGenerator($upperBound) {

    $upperBound = $upperBound; 
    $sieve = array();


    // Create an array of every number between 2 and the upperBound
    $sieve = range( 3, $upperBound, 2 );

    // Remove every factor until we have only primes
    for ( $i = 0; $i <= floor(sqrt(sizeOf($sieve))); $i++ ) {
        $factor = $sieve[$i];
        $start = 2;
        
        while ( $factor * $start <= $upperBound) {
            if ( in_array( $factor * $start, $sieve)) {
                unset($sieve[array_search($factor * $start, $sieve)]);
            }
            $start++;
        }

        $sieve = array_values($sieve);
        
    } 
    
    array_unshift($sieve, 2);
   return $sieve;
   //echo var_dump($primeArray);
}


