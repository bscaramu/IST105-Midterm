<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Operations Form</title>
</head>
<body>
    <h1>Math Operations</h1>
    <form action="process_math.php" method="post">
        <label for="number1">Number 1:</label>
        <input type="text" id="number1" name="number1" required>
        <br><br>
        
        <label for="number2">Number 2:</label>
        <input type="text" id="number2" name="number2" required>
        <br><br>
        
        <label for="operation">Select Operation:</label>
        <select id="operation" name="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <br><br>
        
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
