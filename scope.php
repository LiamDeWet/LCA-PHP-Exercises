<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable Scope</title>
</head>
<body>
  <h1> PHP Variable Scope </h1>

  <?php
  //global variable
  $message = "Welcom to TechVibe!";

  function displayMessage(){
    global $message;
    echo $message . "<br>";
  }
  displayMessage(); // calling the function to actually run the code


  //local var
  function localVariable(){
    $localVar = "I only exist inside this function.";
    echo $localVar . "<br>";
  }
  localVariable(); 

  //try access the local variable outside the function
  echo $localVar ."<br>"; //error on purpose to demonstrate that local variables cannot be accessed outside their function

  echo "<br><br>";

  echo "<h2>Static Variables</h2>";
  function staticCounter(){
    static $count = 0;
    $count++;
    echo "Counter: $count<br>";
  }
  staticCounter();
  staticCounter();
  staticCounter();
  ?>
</body>
</html>