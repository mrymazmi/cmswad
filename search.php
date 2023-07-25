<?php
// Connect to the database (replace with your credentials)

// Retrieve the student's matric number to be searched
// ...

// Search for the student's information in the database
$sql = "SELECT * FROM students WHERE matric_number = '$matric_number'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Display the student's information and marks
  while ($row = $result->fetch_assoc()) {
    // ...
  }
} else {
  echo "Student not found.";
}

$conn->close();
?>
