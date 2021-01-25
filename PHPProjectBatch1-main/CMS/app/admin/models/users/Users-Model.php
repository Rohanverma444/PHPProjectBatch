<?php

include_once("app/config/database.php");

function getUsers($start_limit, $end_limit) {
    $search_query = null; // login error
    $dbConn = getDBConnection();
    if(@$_GET['search']) {
        $search = $_GET['search'];
        $search_query = " AND (user_name LIKE '$search%' OR first_name LIKE '%$search%' OR mobile LIKE '%$search%' OR email LIKE '%$search%') ";
    }

    $limit_query = "LIMIT $start_limit, $end_limit";
    $query = " SELECT * FROM users WHERE deleted = 0 ";
    if($search_query)
        $query .= $search_query;
    $query .= $limit_query;

    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
            $result = $res_query;
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $result;
}

function getUsersCount() {
    $search_query = null;
    $dbConn = getDBConnection();
    if(@$_GET['search']) {
        $search = $_GET['search'];
        $search_query = " AND (user_name LIKE '%$search%' OR first_name LIKE '%$search%' OR mobile LIKE '%$search%' OR email LIKE '%$search%') ";
    }
    $query = " SELECT COUNT(1) total_rows FROM users WHERE deleted = 0";
    if($search_query)
        $query .= $search_query;
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        $result = mysqli_fetch_row($res_query);
        $count = $result[0];
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $count;
}

function deleteUser() {
    $status = true;
    $dbConn = getDBConnection();
    $today = date("Y-m-d H:i:s");
    $record = @$_GET['record'];
    $loggedin_id = $_SESSION['id'];
    $query = " UPDATE users SET deleted = 1, modified = '$today', modified_by = $loggedin_id where id = $record";
    $res_query = mysqli_query($dbConn, $query);
    if(!$res_query){
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $status;
}

function getUserDetails() {
    $id = $_GET['record'];
    $result = false;
    $dbConn = getDBConnection();
    $query = " SELECT * FROM users WHERE deleted = 0 AND id = $id LIMIT 1";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        if(mysqli_num_rows($res_query) > 0){
            $result = mysqli_fetch_assoc($res_query);
        }
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);
    return $result;
}

function setUserDetails()
{
    $status = false;
    $today = date("Y-m-d H:i:s");
    $dbConn = getDBConnection();
    $id = $_POST["record"];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email'
 , address = '$address', mobile = '$mobile', modified = '$today' WHERE id = $id";
    if(mysqli_query($dbConn, $query)){
        $status = true;
    }
    mysqli_close($dbConn);

    return $status;
}
function exportDetails()
{

     $dbConn = getDBConnection();
     $sql="select * from cms";
     $res_query=mysqli_query($dbConn,$sql);

        $html='<h2>Users List View</h2>
      <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>';
        $counter=0;
        while($row = mysqli_fetch_assoc($res_query)){
        $counter++;
    
       $html.='<tr>
       <td>'.$counter.'</td>
       <td>'.$row['user_name'].'</td>
      <td>'.$row['first_name'].'</td>
      <td>'.$row['last_name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['mobile'].'</td></tr>';
}
    $html.='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=report.xls');
    echo $html;
}

?>