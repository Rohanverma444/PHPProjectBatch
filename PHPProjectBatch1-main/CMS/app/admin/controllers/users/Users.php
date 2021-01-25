<?php

function getUsersList($method, $action) {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $page = (isset($_GET['page']) && ($_GET['page'] <= 1)) ? 0 : @$_GET['page'];
    $per_page = 2;
    $start_limit = $page * $per_page;
    $end_limit = $per_page;
    $users_list = getUsers($start_limit, $end_limit);
    $users_count = getUsersCount();
    $total_pages = ceil($users_count/$per_page);
    include_once("app/admin/views/users/users-list-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
}

// Delete single record
function setDeleteUsers() {
    include_once("app/admin/models/users/users-Model.php");
    deleteUser();
    header("Location: ?admin=show&module=users&action=list");
}

// View single record
function getUsersView() {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $user_details = getUserDetails();
    //echo "<pre>";print_r($user_details);
    include_once("app/admin/views/users/user-details-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
    die("View User Data");
}

// Update single record
function setEditUsers() {
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/models/users/users-Model.php");
    $user_details = getUserDetails();
    //echo "<pre>";print_r($user_details);
    include_once("app/admin/views/users/user-edit-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
    die("View User Data");
}

// Update single record
function setUsersUpdate() {
    include_once("app/admin/models/users/users-Model.php");
    $user_details = setUserDetails();
    die("View User Data");
}
function setExportUsers() {
    

    include_once("app/admin/models/users/users-Model.php");
    
   $details= exportDetails();
   echo "<pre>";print_r($details);
   
 
}
?>