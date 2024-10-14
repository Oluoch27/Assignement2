<?php
$rollNo = $_GET['roll_no'];
$name = $_GET['name'];

echo "<h2>Student Details from Link</h2>";
echo "Roll No: " . htmlspecialchars($rollNo) . "<br>";
echo "Name: " . htmlspecialchars($name);
?>
