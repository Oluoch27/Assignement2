<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST['student_name'];
    $studentGrNo = $_POST['student_gr_no'];
    $class = $_POST['class'];
    $section = $_POST['section'];

    echo "<h2>Student Details</h2>";
    echo "Name: " . htmlspecialchars($studentName) . "<br>";
    echo "G.R #: " . htmlspecialchars($studentGrNo) . "<br>";
    echo "Class: " . htmlspecialchars($class) . "<br>";
    echo "Section: " . htmlspecialchars($section);
}
?>
