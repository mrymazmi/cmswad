<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $course_name = $_POST['course_name'];
    $matric_number = $_POST['matric_number'];
    $student_name = $_POST['student_name'];
    $quiz1 = $_POST['quiz1'];
    $quiz2 = $_POST['quiz2'];
    $quiz3 = $_POST['quiz3'];
    $test1 = $_POST['test1'];
    $test2 = $_POST['test2'];
    $midterm = $_POST['midterm'];
    $project = $_POST['project'];
    $final = $_POST['final'];

    insert_student_marks($course_name, $matric_number, $student_name, $quiz1, $quiz2, $quiz3, $test1, $test2, $midterm, $project, $final);
}

header('Location: index.html');
?>