<?php

require_once 'classes/File.php';

$file = new File(__DIR__ . '/file.txt');
$file ->write('String one');
$file ->write('String two');
$file ->write('String tree');
$file ->write('String four');

?>