<?php
// setcookie("c1", '2019', time()+3600);
// if (isset($_GET['cook']) AND $_GET['cook']!='') {
//     setcookie("c1", $_GET['cook'], time()+3600);
// }
$a = array ( "ssjs99" => 1, "aa00s" => 2);
setcookie("cart", json_encode($a), time()+3600);
echo 'file 1';

