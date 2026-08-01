<?php

require_once "db_connect.php";

if (isset($_GET["search"]) && !empty($_GET["search"])){
  $search = "%" . $_GET["search"] . "%";
  $stmt = $conn->prepare(
        "SELECT * FROM employees
         WHERE department LIKE ?"
    );

    $stmt->bind_param("s", $search);

    $stmt->execute();

    $result = $stmt->get_result();

} else {

    $sql = "SELECT * FROM employees";

    $result = $conn->query($sql);

}

// now for the page html
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TechVibe Employee Management</title>
  
  </head>
<body>
  <h1>TechVibe Employee Management</h1>

  <form method="GET">
    <label>Search By Department:</label>
    <input type="text" name="search"
      value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">

    <button type="submit">Search</button>
  </form>

  <br>

  <p>
    <a href="create.php">Add New Employee</a>
  </p>

  <?php

if ($result->num_rows > 0) {

    echo "<table border='1' cellpadding='8'>";

    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Department</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>";

        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";

        echo "<td>";
        echo "<a href='update.php?id=" . $row["id"] . "'>Edit</a>";
        echo " | ";
        echo "<form action='delete.php' method='POST' style='display:inline;'>";

        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";

        echo "<button type='submit'>Delete</button>";

        echo "</form>";
        echo "</td>";

        echo "</tr>";
    }

    echo "</table>";

} else {

    echo "<p>No employees found.</p>";

}

$conn->close();

?>
</body>
</html>