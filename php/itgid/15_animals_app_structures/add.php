<?php
require_once 'core/config.php';
require_once 'core/function.php';

$title = $_POST['title'];
$descrMin = $_POST['descr-min'];
$description = $_POST['description'];


$conn = connect();
$sql = "INSERT INTO info (title, descr_min, description) VALUES ('".$title."', '".$descrMin."', '".$description."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

close($conn);