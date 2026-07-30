<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>

<h1>PHP Functions</h1>

<?php
//simple function that takes one parameter
echo "<h2>Greeting Function</h2>";

function printGreeting($name) {

    echo "Hello, $name! Welcome to PHP Functions.<br><br>";

}
printGreeting("Liam");


echo "<br><br>";
//using the return keyword in a function to make it more flexible.
echo "<h2>Multiply Function</h2>";

function multiply($a, $b) {

    return $a * $b;

}
$result = multiply(6, 8);

echo "6 × 8 = $result<br><br>";

echo "<br><br>";

echo "<h2>Array Looper Function</h2>";
//this function takes an array as a parameter then runs through the array one by one, just by calling the function once with the specified array.
function arrayLooper($array) {

    foreach ($array as $item) {

        echo $item . "<br>";

    }

}
$fruits = [
    "Apple",
    "Banana",
    "Orange",
    "Mango",
    "Grapes"
];
arrayLooper($fruits);

echo "<br>";

echo "<br><br>";
//creating a function to calculate discounts
echo "<h2>Discount Calculator</h2>";
//first create the function that does all the work
function calcDiscount($amount){
  if ($amount > 1000){
    return 10;
  } elseif ($amount >= 500){
    return 5;
  } elseif ($amount >= 250){
    return 2;
  }else{
    return 0;
  }
}
//then create the variable values
$purchaseAmount = 1200;

$discountPercent = calcDiscount($purchaseAmount);
//now the actual discount calculation
$discountAmount = $purchaseAmount * ($discountPercent / 100 );
$finalAmount = $purchaseAmount - $discountAmount;

//finally display the results
echo "Purchase Amount: R$purchaseAmount<br>";
echo "Discount: $discountPercent%<br>";
echo "Discount Amount: R$discountAmount<br>";
echo "Final Amount: <strong>R$finalAmount</strong><br>";

echo "<br><br>";

//stretch goal the grade calculator
echo "<h2>Grade Calculator</h2>";

function gradeCalculator($score)
{
    if ($score >= 90) {
        return "A";
    } elseif ($score >= 80) {
        return "B";
    } elseif ($score >= 70) {
        return "C";
    } elseif ($score >= 60) {
        return "D";
    } else {
        return "F";
    }
}
$studentScore = 84;

$grade = gradeCalculator($studentScore);

echo "Score: $studentScore<br>";
echo "Grade: <strong>$grade</strong><br><br>";

//stretch goal to create a function and return min and max values
echo "<br><br>";

echo "<h2>Min and Max Values</h2>";
function findMinMax($numbers){
  return [
    "Minimum" => min($numbers),
    "Maximum" => max($numbers)
  ];
}
$values = [15,8,42,23,67,5];
$result = findMinMax($values);

echo "Numbers: ";
foreach ($values as $value){
  echo "$value ";
}
echo "<br>";
echo "Minimum: " . $result["Minimum"] . "<br>";
echo "Maximum: " . $result["Maximum"] . "<br>";
?>

</body>
</html>