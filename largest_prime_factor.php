<?php

    include( 'sieve_of_arestosthenes.php');

    //$num = 600851475143;
    $num = $argv[1];
    $arrayOfPrimes = primeGenerator(sqrt($num));
    $largestPrimeFactor;

    foreach ( $arrayOfPrimes as $prime) {
        if ( $num % $prime == 0 ) {
            $largestPrimeFactor = $prime;
        }    
    }

    echo $largestPrimeFactor . "\n";

    


