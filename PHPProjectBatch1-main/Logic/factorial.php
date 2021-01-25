<?php


$fact = 5;

echo factorial($fact);

function factorial($fact){
    if($fact === 0 || $fact === 1)
        return 1;
    else{
        return $fact * factorial($fact - 1);
    }
}



?>