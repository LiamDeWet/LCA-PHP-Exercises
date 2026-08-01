<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "db_connect.php";



//combined with stretch goals and creation of new employee
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $department = $_POST["department"];


  if (empty($name) || empty($email)){
    echo "<p style='color:red;'>Name and Email are required.</p>";
  } else{

   $stmt = $conn->prepare(
    "INSERT INTO employees (name, email, department)
    VALUES (?, ?, ?)"
);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("sss", $name, $email, $department);

  if ($stmt->execute()){
    echo "<p style='color:green;'>Employee addedd successfully!</p>";
  } else{
    echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
  }

  $stmt->close();
  }

 

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>
  <hr>

<p>
    <a href="index.php">Home</a> |
    <a href="create.php">Add Employee</a> |
    <a href="read.php">Employee List</a>
</p>

<hr>

<h1>Add New Employee</h1>

<p>
    <a href="index.php">Home</a>
</p>

<form method="POST">

    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Department:</label><br>
    <input type="text" name="department" required><br><br>

    <button type="submit">Add Employee</button>

</form>

</body>
</html>