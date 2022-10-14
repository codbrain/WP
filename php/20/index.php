<?php error_reporting(-1);

header('Content-Type: text/html; charset=utf-8');

/*
http://php.net/manual/ru/ref.strings.php
http://php.net/manual/ru/ref.mbstring.php

array explode ( string $delimiter , string $string [, int $limit ] )
string implode ( string $glue , array $pieces ) || join()
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
string rtrim ( string $str [, string $character_mask ] )
string ltrim ( string $str [, string $character_mask ] )
string md5 ( string $str [, bool $raw_output = false ] )
string sha1 ( string $str [, bool $raw_output = false ] )
string nl2br ( string $string [, bool $is_xhtml = true ] )

mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
string strip_tags ( string $str [, string $allowable_tags ] )
int strlen ( string $string )
mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )

int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
*/

/*$str = 'Hello, world!';
// echo mb_strpos($str, 'l', 3, 'utf-8');

if( 0 !== false ) echo 'OK';
else echo 'NO';*/

/*$str = 'hello, world!';
$str2 = 'HELLO, WORLD!';
// echo mb_strtoupper($str, 'utf-8');
// echo mb_strtolower($str, 'utf-8');*/

/*$str = 'HEllo, world!';
// echo mb_substr($str, 0, 6, 'utf-8');
// echo mb_substr($str, 8, 3, 'utf-8');
echo mb_substr($str, -4, 3, 'utf-8');*/

/*$str = '&amp;<h1><i>Hello</i>! my name <b>Вася</b>!</h1><iframe src="#" height="100%" width="100%"></iframe><script>alert(\'XSS\')</script>';
echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);*/

/*$str = '&amp;&lt;h1&gt;&lt;i&gt;Hello&lt;/i&gt;! my name &lt;b&gt;Вася&lt;/b&gt;!&lt;/h1&gt;&lt;iframe src=&quot;#&quot; height=&quot;100%&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
echo htmlspecialchars_decode($str);*/

