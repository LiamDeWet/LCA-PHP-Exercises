<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Type Casting</title>
</head>
<body>

<h1>PHP Type Casting</h1>

<?php

//Integer casting
$number = 15.75;
$integer = (int)$number;

echo "<h2>Integer Casting</h2>";
echo "Original value: $number<br>";
echo "After casting to int: $integer<br>";

echo "<br><br>";

//Float casting
$age = 19;
$floatAge = (float)$age;

echo "<h2>Float Casting</h2>";
echo "Original value: $age<br>";
echo "After casting to float: $floatAge<br>";

echo "<br><br>";

// String Casting
$score = 100;
$stringScore = (string)$score;

echo "<h2>String Casting</h2>";
echo "Original value: $score<br>";
echo "After casting to string: $stringScore<br><br>";

echo "<br><br>";

// Boolean Casting
$value = 1;
$booleanValue = (bool)$value;

echo "<h2>Boolean Casting</h2>";
echo "Original value: $value<br>";
echo "After casting to boolean: ";
var_export($booleanValue);

?>

</body>
</html>