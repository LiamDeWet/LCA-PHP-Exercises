<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Conditionals</title>
</head>

<body>

<h1>PHP Logic and Conditionals</h1>

<?php

  echo "<h2>Budget Calculator</h2>";
  $totalBudget = 10000;
  //stretch goal using an associative array for the other expenses:
  $expenses = [
    "Groceries" => 2500,
    "Transport" => 1200,
    "Entertainment" => 800
  ];

  //then use a loop to calculate the expenses
  $totalExpenses = 0;
  foreach ($expenses as $expense => $amount){
    echo "$expense: R$amount<br>";
    $totalExpenses += $amount;
  }

  $remaining = $totalBudget - $totalExpenses;
  echo "<br>Total Budget: R$totalBudget<br>";
  echo "Remaining Budget: <strong>R$remaining</strong><br><br>";

   /*echo "Total Budget: R$totalBudget<br>";
  echo "Groceries: R$groceries<br>";
  echo "Transport: R$transport<br>";
  echo "Entertainment: R$entertainment<br>";
  echo "Remaining Balance: <strong>R$remainingBudget</strong><br><br>"; */


  echo "<br><br>";

  echo "<h2>Age Category Checker</h2>";
  $age = 19; //setting my age as the basic age value

  //now for the conditional statements
  //chainging the age variable will result in different outputs of the category list.
  if ($age < 12){
    $category = "Child";
  } elseif ($age >= 13 && $age <= 17){
    $category = "Teen";
  } elseif ($age >= 18 && $age <= 64){
    $category = "Adult";
  } else {
    $category = "Senior";
  }
  

  echo "Age: $age years old<br>";
  echo "Category: <strong>$category</strong><br><br>";

  echo "<br><br>";

  echo "<h2>Simple Interest Calculator</h2>";

  //static variable values to be used in the caluation.
  $principal = 10000;
  $rate = 5;
  $time = 3;

  //now to calculate the interest
  $interest = ($principal * $time) / 100;
  $totalAmount = $principal + $interest;

  //display results to the screen
  echo "Principal: R$principal<br>";
  echo "Interest Rate: $rate%<br>";
  echo "Time: $time years<br>";
  echo "Interest Earned: R$interest<br>";
  echo "Total Amount: <strong>R$totalAmount</strong><br><br>";
 
  //same with the age checker, making a change to the variable values will result in different outputs of the interest earned and total amount.
  echo "<br><br>";
  

  //using logical operators

  echo "<h2>Voter Eligibility Checker</h2>";

  $age = 25; //standard age
  $isRegistered = true; //standard registration status

  if (($age >= 18 && $age <= 35) && $isRegistered){
    echo "The voter is eligible to vote.<br><br>";
  } else {
    echo "The voter is not eligible to vote.<br><br>";
  }

  echo "<br><br>";

  //using the switch statement
  echo "<h2>Province Checker Using the switch statement</h2>";
  $province = "Western Cape"; //if this changes so does the switch output.

  switch ($province){

  case "Western Cape":
    echo "The city is Cape Town<br>";
    break;
  case " Gauteng":
    echo "The city is Johannesburg<br>";
    break;
  case "KwaZulu-Natal":
    echo "The city is Durban<br>";
    break;
  default:
    echo "Province not found.<br>";
  }
?>
</body>
</html>