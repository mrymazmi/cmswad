<?php
// Connect to the database (replace with your credentials)
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve student details and marks from the form
// ...

// Calculate the total marks and pass/fail status
// ...

// Insert the student's information into the database
$sql = "INSERT INTO students (matric_number, student_name, quiz1_marks, quiz2_marks, quiz3_marks, test1_marks, test2_marks, midterm_marks, project_marks, final_exam_marks, total_marks, pass_status) VALUES ('$matric_number', '$student_name', $quiz1_marks, $quiz2_marks, $quiz3_marks, $test1_marks, $test2_marks, $midterm_marks, $project_marks, $final_exam_marks, $total_marks, '$pass_status')";

if ($conn->query($sql) === TRUE) {
  echo "Student marks inserted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
