/* Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
 *
 * 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
 *
 * By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
 *
 */

function evenFib() {
    let fibArray = [1,2];
    let total = 0;

    while ( fibArray[fibArray.length - 1] < 4000000 ) {
        fibArray.push( (fibArray[fibArray.length - 1]) + (fibArray[fibArray.length -2]) );
    }

    for ( var i = 0; i < fibArray.length; i++ ) {
        if ( fibArray[i] % 2 == 0) {
           total += fibArray[i]; 
        }
    }

    return total;
}

console.log(evenFib());
