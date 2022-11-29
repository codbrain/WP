<?php 

$file = 'file.txt';

if (file_exists($file)) {
    $handle = fopen($file, "r");
    //var_dump($handle);
    $contents = fread($handle, filesize($file)); 
    echo $contents;

    fclose($handle);

    $handle = fopen($file, "r+");
    fwrite($handle, 'Add text');
    fclose($handle);

}

file_put_contents($file, 'add Text, more text');

$second = file_get_contents($file);
    echo '<hr>';
    echo $second;