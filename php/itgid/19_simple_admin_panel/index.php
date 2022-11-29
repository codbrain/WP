<?php
require_once 'core/config.php';
require_once 'core/function.php';

if (isset($_COOKIE['bd_create_success']) AND $_COOKIE['bd_create_success']!=''){
    if ($_COOKIE['bd_create_success'] == 1) {
        setcookie('bd_create_success', 1, time()-10);
        echo "New record created successfully";
    }
}
?>

<form action="add.php" method="POST" enctype="multipart/form-data">
    <p>Title: <input type="text" name="title"></p>
    <p>Min description:</p>
    <textarea name="descr-min"></textarea>
    <p>Description:</p>
    <textarea name="description"></textarea>

    <p>Photo: <input type="file" name="image"></p>
    
    <p><input type="submit" value="add"></p>
</form>