<?php 

/** 
 * Prime Generator
 * Generates Prime Numbers
 * @param upper bound
 * @return an array of prime numbers that are less than the specified upper bound
 *
 */

//$upperBound = $argv[1];

function primeGenerator($upperBound) {

    $upperBound = $upperBound; 
    $primeArray = array( 2, 3 );

    for ( $i = 5; $i < $upperBound; $i = $i + 2) {

        // remove factors of 5 
        if ( $i % 5 == 0 ) {
            continue;
        }
        
        $halfOfI = floor( $i / 2 );

        // Divide $i by $halfOfI down to 2 and see if any number divides evenly
        // If it does, $i is not a prime
        for ( $j = $halfOfI; $j > 1; $j--) {
            if ( $i % $j === 0 ) {
               // number is not prime 
                break;
        }
            
            // if loop doesn't break, add $i to $primeArray        
            if ( $j == 2 ) {
                array_push( $primeArray, $i);
                echo $i . " " . sizeOf($primeArray) . "\n";
            }
        }

    }
    
   return $primeArray;
   //echo var_dump($primeArray);
}

echo primeGenerator(30);

