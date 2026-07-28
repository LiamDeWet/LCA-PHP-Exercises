<!DOCTYPE html>
<!--code runs from top to bottom, to make it look neater, I'll stat with html... -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>PHP fundamentals</title>
</head>
<body>

<?php
 //stretch goal: 
  $currentHour = date("H");
  if ($currentHour < 12){
    $greeting = "Good morning!";
  } elseif ($currentHour < 18){
    $greeting = "Good afternoon!";
  } else{
    $greeting = "Good evening!";
  }
?>
  <h1>
    <?php echo "$greeting Welcome to PHP Programming!"; ?>
  </h1>

  <?php

 
  // simple script using echo 
  echo "Hello, World. My name is Liam and this is my first PHP script.<br>";
  // The browser doesn't see white space 

  

  // print is slower than echo and can only print one arument at a time.

  print "My favourite programming language...Truly a difficult question to answer, because there are a few I really like. So I'll say all; Java, Python and Bash. The reason I love Java is because of its robustness and wide range of applications.I love Python because of its simplicity and large amount of libraries. Then Bash I love because it's powerful and flexible, especially when I work in a Linux environment.<br>";

  echo "<br><br>";

  //calc the sum of two numbers
  $numb1 = 67;
  $numb2 = 69;
  $sum = $numb1 + $numb2;
  echo "The sum of $numb1 and $numb2 is $sum.<br>";

  echo "<br><br>";

  // using the date() function to display todays date
  echo "Today is " . date("l, F j, Y") . ".<br>";
  echo "<br><br>";

  //generating a random number between 1 and 100
  $luckyNumb = rand(1, 100);
  echo "Your lucky number today is: $luckyNumb.<br>";
  echo "<br><br>";

  ?>


</body>
</html>

 








