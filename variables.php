<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
  <h1>PHP variables and data types</h1>

  <?php
  //personal info
  $name="Liam De Wet";
  $age=19;
  $favColour="Periwinkle";
  $favHobby="Programming";

  //more data types
  $isStudent=true;
  $skills =["Java", "Python", "Bash"];

  echo "<h2>Biography</h2>";
  echo "<p>";
  echo "Hi, my name is <strong>$name</strong>.";
  echo " I am $age years old.";
  echo " My favourite colour is $favColour and my favourite hobby is $favHobby.";
  echo "</p>";

  echo "<br><br>";


  //BMI calculator
  echo "<h2>BMI Calculator</h2>";
  $height = 1.80; //my height 5'11" in meters
  $weight = 70;
  $bmi = $weight / ($height * $height);


  //using conditional statements to determine BMI category
  if ($bmi < 18.5) {
    $category = "Underweight";
  } elseif ($bmi < 25){
    $category = "Normal weight";
  } elseif ($bmi < 30){
    $category = "Overweight";
  }else{
    $category = "Obese";
  }

  echo "Height: $height m<br>";
  echo "Weight: $weight kg<br>";
  echo "BMI: " .round($bmi, 2) . "<br>";
  echo "Category: <strong>$category</strong><br>";


  // stretch goal:
  echo "<h2>BMI Categories</h2>";
  echo "<table border='1' cellpadding='8'>";
  echo "<tr>
    <th>Category</th>
    <th>BMI Range</th>
  </tr>";

  $categories = [
    "Underweight" => "Below 18.5",
    "Normal weight" => "18.5 - 24.9",
    "Overweight" => "25 - 29.9",
    "Obese" => "30 and above"
  ];

  foreach ($categories as $name => $range) {
    if ($category == $name){
      echo "<tr style='background-color: lightreen; font-weight:bold;'>";
    } else {
      echo "<tr>";
    }

    echo "<td>$name</td>";
    echo "<td>$range</td>";
    echo "</tr>";
    
  }
  echo "</table>";

  

  echo "<br><br>";


  //using intval() function to convert float to integer, all it does is remove the value after the decimal point, it doesn't round it up or down.
  echo "<h2>Float to integer conversion</h2>";
  $price = 36.92;
  $wholeNumb = intval($price);

  echo "Original float value: $price<br>";
  echo "Converted integer value: $wholeNumb<br>";

  echo "<br><br>";

  // using the function gettype() to find out what the data type is of the variables i created. also i used "." becasue it is a function call not a variable. 
  echo "<h2>Data types</h2>";
  echo "Age: " . gettype($age) . "<br>";
  echo "Height: " . gettype($height) . "<br>";
  echo "Is student: " . gettype($isStudent) . "<br>";
  echo "Skills: " . gettype($skills) . "<br>";
  echo "Name: " . gettype($name) . "<br>";

  ?>
</body>
</html>