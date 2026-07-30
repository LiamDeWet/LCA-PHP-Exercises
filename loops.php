//I always start with the html structure
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>

<h1>PHP Loops</h1>

<?php

//first a for loop
echo "<h2>For Loop</h2>";
//counting from 0 to 10 basically it runs till the condition is false.
for ($i = 0; $i <=10; $i++){
  echo "i is equal to $i<br>";
}

echo "<br><br>";

//now a foreach loop
echo "<h2>Foreach Loop</h2>";
//array for the loop to run through without needing the index value.
$cities = [
    "Cape Town",
    "Johannesburg",
    "Durban",
    "Pretoria",
    "Gqeberha"
];
foreach ($cities as $city) {
    echo $city . "<br>";
}

echo "<br><br>";

//now a while loop
echo "<h2>While Loop</h2>";

$counter = 10;

while ($counter >= 0) {
//counting from 10 to 0 and displaying the value of the counter variable.
    echo "$counter is equal to: $counter<br>";

    $counter--;
}

echo "<br><br>";

echo "<h2>Do-While Loop</h2>";
//php wont check the condition first, it will run the code block first and then check the condition. thats why the loop still runs first even if the condition ends up being false
$counter = 6;
do {

    echo "$counter<br>";

    $counter++;

} while ($counter <= 5);
?>

</body>
</html>