<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "<html><body><h1>Error: Please provide valid numbers.</h1></body></html>";
        exit;
    }


    echo "Inputs: $num1, $num2, $operation<br>";

    $command = escapeshellcmd("python3 math_operations.py $num1 $num2 $operation");
    echo "Command: $command<br>";

    $output = shell_exec($command);
    

    if ($output === null) {
        echo "<html><body><h1>Error: No output returned from Python script.</h1></body></html>";
    } else {
        echo $output;
    }
} 

