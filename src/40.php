<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "GitHub_School_Project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input and perform action accordingly
    echo "<form method='post'>";
    echo "<label for='user_name'>User Name:</label>";
    echo "<input type='text' id='user_name' name='user_name' placeholder='Enter your username'>";
    echo "<button type='submit'>Submit</button>";
    echo "</form>";
?>
