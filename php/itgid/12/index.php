<?php 
require_once 'config.php';
require_once 'function.php';

$conn = connect();

$sql = "UPDATE goods cost= 175.99 WHERE id=1";

$a = select($conn);

echo '<pre>';
print_r($a);
echo '<pre>';

close($conn);