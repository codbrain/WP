<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once 'config.php';
require_once 'function.php';

$conn = connect();
// обновление
$id = 2;
$newName = 'Бананы';
$sql = "UPDATE goods SET name='".$newName."' WHERE id=".$id;
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// oбновление end
$sql = "INSERT INTO goods (name, description, cost, amount, image)
VALUES ('cherry', 'red', 23, 445,  'cherry.png')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$a = select($conn);

echo '<pre>';
print_r ($a);
echo '</pre>';

close($conn);
