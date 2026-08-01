<?php
//
require_once "db_connect.php";

//this will get the employee ID
if (!isset($_GET["id"])){
  die("No employee ID provided.");
}
$id = $_GET["id"];

$stmt = $conn->prepare("SELECT * FROM employees WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

//get the results now
$result = $stmt->get_result();

//but fetch one row
$employee = $result->fetch_assoc();

/*mental check
echo "<pre>";
print_r($employee);
echo "</pre>";*/


// now the edit form with html

//detect the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST["name"];
$email = $_POST["email"];
$department = $_POST["department"];

if (empty($name) || empty($email)) {
    echo "<p style='color:red;'>Name and Email are required.</p>";
} else {

    $stmt = $conn->prepare(
  "UPDATE employees
  SET name = ?, email =?, department = ?
  WHERE id = ?"
);

$stmt->bind_param("sssi", $name, $email, $department, $id);


if ($stmt->execute()){
  echo "<p style='color:green;'>Emplyee updated successfully!</p>";
} else {
  echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
}

$stmt->close();

}


}
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Edit Employee</title>
  </head>

<body>
  <hr>

<p>
    <a href="index.php">Home</a> |
    <a href="create.php">Add Employee</a> |
    <a href="read.php">Employee List</a>
</p>

<hr>
  <h1>Edit Employee</h1>

  <p>
    <a href="index.php">Home</a>
</p>
  <form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name"
      value="<?php echo $employee['name']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email"
      value="<?php echo $employee['email']; ?>" required><br><br>

    <label>Department:</label><br>
    <input type="text" name="department"
        value="<?php echo $employee['department']; ?>" required><br><br>


      <button type="submit">Update Employee</button>
  </form>
</body>
</html>