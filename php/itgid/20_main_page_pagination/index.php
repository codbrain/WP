<?php
require_once 'core/config.php';
require_once 'core/function.php';
$conn = connect();
$data = selectMain($conn);
$countPage = paginationCount($conn);
close($conn);
?>
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
$out = '';
for ($i=0; $i < count($data); $i++){
    $out .="<img src='/images/{$data[$i]['image']}' width='100'>";
    $out .="<h2>{$data[$i]['title']}</h2>";
    $out .="<p>{$data[$i]['descr_min']}</p>";
    $out .="<p><a href='/arcticle.php?id='{$data[$i]['id']}'>Read more...</a></p>";
    $out.='<hr>';
}
echo $out;

for ($i=0; $i < $countPage; $i++){
    $j = $i+1;
    echo "<a href='/index.php?page={$i}' style='padding: 5px;'>{$j}</a>";
}
?>