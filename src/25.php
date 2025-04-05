<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "github_school_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'>
    <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Address</th>
      <th>Password</th>
    </tr>";
  
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
          <td>" . $row["student_id"] . "</td>
          <td>" . $row["name"] . "</td>
          <td>" . $row["email"] . "</td>
          <td>" . $row["address"] . "</td>
          <td>" . $row["password"] . "</td>
        </tr>";
  }
  
  echo "</table>";
}
$conn->close();
?>
