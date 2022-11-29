<?php 
require_once 'config.php';

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
mysqli_set_charset($conn, "utf8");
if (!$conn){
    die("Connection failed: " . mysqli_connect_errno());
}

$b = 40;
$sql = "SELECT name, cost FROM goods WHERE cost >" .$b;
$result = mysqli_query($conn, $sql);

var_dump(mysqli_num_rows($result));
$a = array();

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $a[] = $row;
    }

}else {
    echo "0 result";
}

echo '<pre>';
print_r($a);
echo '</pre>';


mysqli_close($conn);