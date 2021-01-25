<?php
//$camel_string = 'iLiveInIndia';
//$camel_string = 'i   Live   In   India';
// $camel_string = 'i Live In India';
$camel_string = 'iLiveInIndia';

$snake_string = null;
$i = 0 ;
while(@$camel_string[$i] != null) {

    $char = $camel_string[$i];
    $ascii_code = ord($char);
    if(checkUpperCase($char)){
        // $snake_string .= '_'.strtolower($char);
        $snake_string .= '_'.chr($ascii_code + 32);
    }else{
        $snake_string .= $char;
    }
    $i++;
}

function checkUpperCase($char){
    $ascii_code = ord($char);
    return ($ascii_code >= 65 && $ascii_code <= 90) ? true : false;
}


$lookup_array_upper_to_lower = array(65=>'a', );

echo "Camel Case: $camel_string Snake Case: $snake_string";
/*function checkUpperCase($char){
    $status = false;
    $ascii_code = ord($char);
    if($ascii_code >= 65 && $ascii_code <= 90)
        $status = true;
    return $status;
}*/




?>