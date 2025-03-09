 <?php

// Get the number of students in class
$numberOfStudents = 20;

// Initialize an array to store the student names
$studentNames = array();

// Generate random names for each student
for ($i = 0; $i < $numberOfStudents; $i++) {
    $firstName = 'John';
    $lastName = 'Doe';
    $fullName = "$firstName $lastName";
    array_push($studentNames, $fullName);
}

// Display the student names
echo "<ul>";
foreach ($studentNames as $student) {
    echo "<li>$student</li>";
}
echo "</ul>";

?>