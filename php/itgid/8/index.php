<?php
    $a = array(3,4,5);

    $b = array("name" => "Alex", "age" => 44,);

    print_r($b);

    echo $b['name'];

    $c = 'age';
    echo $b[$c];

    echo '<hr>';

    foreach($b as $key => $value){
        echo $value. '<br>';
    }

    if (in_array('male', $b)) echo 'yes';
    if(array_key_exists('sex', $b)) echo 'yes - key';

?>