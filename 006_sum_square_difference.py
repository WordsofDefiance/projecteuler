import sys 

def sum_square_difference():

    if len(sys.argv) != 2:
        print('You must only use one argument and it can only be an integer.')
        quit()

    try:
        int(sys.argv[1])
    except ValueError:
        print('Your one argument must be an integer')

    size = int(sys.argv[1])
    sum_of_squares = 0
    square_of_sums = 0
    sum_of_nums = 0

    # Calculate the Sum of Squares
    for i in range(size):
        sum_of_squares += (i+1)**2

    # calculate the Square of Sums

    for i in range(size):
        sum_of_nums += (i+1)

    square_of_sums = sum_of_nums**2

    return (square_of_sums - sum_of_squares)

if __name__ == '__main__':
    print(sum_square_difference())
