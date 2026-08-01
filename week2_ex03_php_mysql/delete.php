<?php


require_once "db_connect.php";

//provide an id
if (!isset($_POST["id"])) {
    die("No employee ID provided.");
}

$id = $_POST["id"];


//delete statement
$stmt = $conn->prepare(
  "DELETE FROM employees WHERE id = ?"
);


$stmt->bind_param("i", $id);

//run execute the query
$stmt->execute();

$stmt->close();

$conn->close();

header("Location: index.php");
exit();
?>