<?php
@session_start();

function isLoggedIn() {
    $status = false;
    if(@$_SESSION['username'] && @$_SESSION['id']) {
        $status = true;
    }
    return $status;
}