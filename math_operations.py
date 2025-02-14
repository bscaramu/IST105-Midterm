#!/usr/bin/env python3
import sys
import traceback

def main():
    try:
        if len(sys.argv) != 4:
            print("<html><body><h1>Error: Invalid number of arguments provided.</h1></body></html>")
            sys.exit(1)

        try:
            num1 = float(sys.argv[1])
            num2 = float(sys.argv[2])
        except ValueError:
            print("<html><body><h1>Error: Please provide valid numbers.</h1></body></html>")
            sys.exit(1)

        operation = sys.argv[3].lower()
        result = None

        if operation == "addition":
            result = num1 + num2
        elif operation == "subtraction":
            result = num1 - num2
        elif operation == "multiplication":
            result = num1 * num2
        elif operation == "division":
            if num2 == 0:
                print("<html><body><h1>Error: Division by zero is not allowed.</h1></body></html>")
                sys.exit(1)
            result = num1 / num2
        else:
            print("<html><body><h1>Error: Unknown operation.</h1></body></html>")
            sys.exit(1)


        if result > 100:
            result *= 2
        if result < 0:
            result += 50

    
        print("<html><body><h1>Result: {}</h1></body></html>".format(result))
    
    except Exception as e:

        print("<html><body><h1>Unexpected Error Occurred</h1>")
        print("<p>{}</p>".format(str(e)))
        print("</body></html>")
        traceback.print_exc()

if __name__ == "__main__":
    main()
