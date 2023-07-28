<?php
function connect_db() {
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function insert_student_marks($course_name, $matric_number, $student_name, $quiz1, $quiz2, $quiz3, $test1, $test2, $midterm, $project, $final) {
    $conn = connect_db();
    $sql = "INSERT INTO course_marks (course_name, matric_number, student_name, quiz1, quiz2, quiz3, test1, test2, midterm, project, final) 
            VALUES ('$course_name', '$matric_number', '$student_name', '$quiz1', '$quiz2', '$quiz3', '$test1', '$test2', '$midterm', '$project', '$final')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Student marks added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>