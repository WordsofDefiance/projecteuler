/**
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 *   Find the sum of all the multiples of 3 or 5 below 1000.
 */

function getSum() {

    const num1 = 3;
    const num2 = 5;
    let sum = 0;
    let sum2 = 0;
    let array1 = [];
    let array2 = [];

    for ( var i = 1; i < 334; i++) {
        array1.push(num1 * i); 
    }

    for ( var j = 1; j < 200; j++) {
       if ( !array1.includes( num2 * j)) {
           array2.push(num2 * j);
       }
    }

    for ( var a = 0; a < array1.length; a++) {
        sum += array1[a];
    }

    for ( var b = 0; b < array2.length; b++) {
       sum2 += array2[b]; 
    }

    return sum + sum2;

}

console.log(getSum());

function betterSolve() {
    var total = 0;

    for ( var i = 0; i < 1000; i++ ) {
        if ( i % 3 == 0 || i % 5 == 0 ) {
            total += i;        
        }
    }

    return total;
}

console.log(betterSolve());
