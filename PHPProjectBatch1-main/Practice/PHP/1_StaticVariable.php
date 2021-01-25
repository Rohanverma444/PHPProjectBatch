<?php


function getStaticData() {
   static $x = 1;
    // $x = $x + 1; or $x++;
    $x++;
    print("Value of Static variable x in method: $x");
    echo '<br>';
}

getStaticData();
getStaticData();
getStaticData();


function getData() {
    $x = 1;
    // $x = $x + 1; or $x++;
    $x++;
    print("Value of Non Static variable x in method: $x");
    echo '<br>';
}

getData();
getData();
getData();

// 2, 3, 4

// 2, 2, 2

?>