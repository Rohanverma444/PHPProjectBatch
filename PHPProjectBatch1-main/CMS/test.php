<?php



$CamelCase = "iAmGoodBoy"; // input
$SnakeCase = "i_am_good_boy"; //output


function isLoggedIn(){
    return false;
}

$action = "sahdfas";

if(!isLoggedIn()){ // User is not loggedin
    if(empty($action)){
       die('Layout included');
    }
    if($action !== 'register') {
        $action = 'login';
       echo ($action); echo "<br>";
    }
    else if($action){
        die("Last IF");
    }
}else{ // User is loggedin

    die("User has been loggedin");
}
?>