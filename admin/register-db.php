<?php
session_start();
include('config/dbcon.php');
if (isset($_POST['addUser'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $usertype = $_POST['usertype'];
    $Password = $_POST['Password'];
    //confirm password
    $user_query = "INSERT into  users (Name,Email,Password,usertype) VALUES ('$Name','$Email','$Password','$usertype')";



    $query_run = mysqli_query($con, $user_query);
    if ($query_run) {
        $_SESSION['status'] = "User Added Successfully";
        header("Location:register.php");
    } else {
        $_SESSION['status'] = "User Adding Failed";
        header("Location:register.php");
    }
}
if (isset($_POST['updateUser'])) {
    $user_id = $_POST['user_id'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $usertype = $_POST['usertype'];
    $Password = $_POST['Password'];
    $query = "UPDATE users SET Name='$Name' , Email='$Email' , Password='$Password', usertype='$usertype' Where id='$user_id'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "User updated Successfully";
        header("Location:register.php");
    } else {
        $_SESSION['status'] = "User Updating Failed";
        header("Location:register.php");
    }
}
if (isset($_POST['deleteUser'])) {
    $userid = $_POST['delete_id'];
    $query = "DELETE from users where id='$userid'";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "User Deleted Successfully";
        header("Location:register.php");
    } else {
        $_SESSION['status'] = "User Cannot delete";
        header("Location:register.php");
    }
}
