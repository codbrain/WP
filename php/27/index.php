<?php

header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

/*
bool copy ( string $source , string $dest [, resource $context ] )
bool file_exists ( string $filename )
string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]] )
int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )
array file ( string $filename [, int $flags = 0 [, resource $context ]] )
bool is_dir ( string $filename )
bool is_file ( string $filename )
bool move_uploaded_file ( string $filename , string $destination )
bool rename ( string $oldname , string $newname [, resource $context ] )
bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )
bool rmdir ( string $dirname [, resource $context ] )
bool touch ( string $filename [, int $time = time() [, int $atime ]] )
bool unlink ( string $filename [, resource $context ] )
*/

// copy('text.txt', 'folder/file.txt');

/*if(file_exists('folder/file.txt')) echo 'Файл существует';
else echo 'Такого файла нет';*/

// echo nl2br($file = file_get_contents('text.txt'));
/*$file = file_get_contents('http://php.net/');
echo htmlspecialchars($file);*/

/*$file = file_get_contents('http://php.net/');
$file2 = file_get_contents('http://php.net/manual/ru/function.file-put-contents.php');
file_put_contents('folder/file.txt', $file, FILE_APPEND);
file_put_contents('folder/file.txt', $file2, FILE_APPEND);*/

/*$file = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo '<pre>';
print_r($file);
echo '</pre>';*/

/*if(is_dir('..')) echo 'Это каталог';
else echo 'Это не каталог';*/

/*if(is_file('folder')) echo 'Это файл';
else echo 'Это не файл';*/

// rename('text.txt', 'folder/file2.txt');

// mkdir('1/2/3', 0777, true);
// mkdir('1');
// rmdir('1');

// touch('folder/file.txt', time()-3600*24);

// unlink('folder/file.txt');
