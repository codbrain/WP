<?php
require_once 'core/config.php';
require_once 'core/function.php';
?>

<form action="add.php" method="POST">
    <p>Title: <input type="text" name="title"></p>
    <p>Min description:</p>
    <textarea name="descr-min"></textarea>
    <p>Description:</p>
    <textarea name="description"></textarea>
    <p><input type="submit" value="add"></p>
</form>