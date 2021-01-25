<?php

$query_string = $_SERVER['QUERY_STRING']; // module=users&action=login
$module = @$_GET['module'];
$ctrl = ucfirst(strtolower($module));
$action = @$_GET['action'];
$admin = @$_GET['admin'];
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($admin === 'show') { // Backend
    require_once("app/admin/controllers/$module/$ctrl.php");
    $action = ucfirst(strtolower($action));
    if($method === 'get'){
        if($action === 'Delete'){
            $action = 'set'.$action.$ctrl;
        }else if($action === 'Edit'){
            $action = 'set'.$action.$ctrl;
         } else if($action === 'Export'){
                $action = 'set'.$action.$ctrl; 
        }else{
            $action = $method.$ctrl.$action;
        }
    }else{
        $action = 'set'.$ctrl.$action;
    }
    $action($method, $action); // call method
} else { // Frontend
    if(empty($module) || empty($action)) { // Is module value is blank or action value is blank of query string
        include_once("app/views/layouts/header-view.php");
        include_once("app/views/layouts/footer-view.php");
    }else{
        require_once("app/controllers/$module/$ctrl.php"); // Dynamic Approach
        $action($method, $action); // dynamic

        /*if($module === 'users' && $action === 'login') { Static Approach
            require_once("app/controllers/users/Users.php");
            login($method, $action);
        }else if($module === 'users' && $action === 'register') {
            require_once("app/controllers/users/Users.php");
            register($method, $action);
        }*/
    }
}
?>