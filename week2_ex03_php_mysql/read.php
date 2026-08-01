<?php
//connecting the database
require_once "db_connect.php";

//the sql command used to pull all employee data
$sql = "SELECT * FROM employees";

//telling php to run sql
$result = $conn->query($sql);


//make sure table isnt empty
if ($result->num_rows > 0){

} else {
  echo "<p>No employees found.</p>";
}



?>

//html to display results in a table
<!DOCTYPE html>
<html>
  <head>
    <title>Employee List</title>
  </head>


  <body>
    <hr>

<p>
    <a href="index.php">Home</a> |
    <a href="create.php">Add Employee</a> |
    <a href="read.php">Employee List</a>
</p>

<hr>
    <h1>Employee List</h1>

    
    <?php
    if ($result->num_rows > 0){
      echo "<table border='1' cellpadding='8'>";
        echo "<tr>";
          echo "<th>ID</th>";
          echo "<th>Name</th>";
          echo "<th>Email</th>";
          echo "<th>Department</th>";
          echo "</tr>";
   
    }
     while ($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["department"] . "</td>";
      echo "</tr>";
    }

    echo "</table>";

    $conn->close();

    ?>
  </body>
</html>