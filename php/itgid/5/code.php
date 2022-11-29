<?php
    function checkVar($a){
        if(isset($a) AND trim($a) !=''){
            return trim($a);
        }
        else{
            exit ( 'Problem'); 
        }   
    }

    $n1 = checkVar($_GET['n1']);
    $n2 = checkVar($_GET['n2']);
    
    for($i = $n1; $i <= $n2; $i++){
        echo $i . " ";
    }
?>