<?php

function getDashboardIndex()
{
    include_once("app/admin/views/layouts/header-view.php");
    include_once("app/admin/views/layouts/sidebar-menu-view.php");
    include_once("app/admin/views/dashboard/dashboard-index-view.php"); // content
    include_once("app/admin/views/layouts/footer-view.php");
}
?>