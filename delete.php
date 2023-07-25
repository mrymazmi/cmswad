<?php
// Connect to the database (replace with your credentials)

// Retrieve the student's matric number to be deleted
// ...

// Delete the student's information from the database
$sql = "DELETE FROM students WHERE matric_number = '$matric_number'";

if ($conn->query($sql) === TRUE) {
  echo "Student information deleted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
