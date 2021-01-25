<?php

$x = 5; // Local variable

function getData() {
   global $x;
    print("Value of x in method: $x"); // Output 0
    echo 'Value of x in method: '.$x.'<br>'; // Output 0
}

getData();

print(" Value of x out side method: $x"); // Output 5
?>