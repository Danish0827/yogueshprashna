<?php
session_start();
include('config/dbcon.php');
if (isset($_POST['addPortfolio'])) {
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $user_query = "INSERT INTO `image_gallery` (`title`, `image`) VALUES ( '$title', '$image');";
    $query_run = mysqli_query($con, $user_query);
    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $image);
        $_SESSION['status'] = "Image Added Successfully";
        header("Location:portfolio.php");
    } else {
        $_SESSION['status'] = "Image Adding Failed";
        header("Location:portfolio.php");
    }
}






if (isset($_POST['updatePortfolio'])) {
    $portfolio_id = $_POST['portfolio_id'];
    $title = $_POST['title'];
    $image = $_FILES['image']['name'];
    $image_old = $_POST['image_old'];

    if ($image != '') {
        $update_filename_1 = $_FILES['image']['name'];
        echo $update_filename_1;
    } else {
        $update_filename_1 = $image_old;
    }
    $query = "UPDATE `image_gallery` SET `title`='$title',`image`='$update_filename_1' WHERE id='$portfolio_id';";
    echo $query;
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        if ($image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $image);
        }
        // move_uploaded_file($_FILES['image']['tmp_name'], "/upload" . $_FILES['image']['name']);
        $_SESSION['status'] = 'Image Updated Successfully';
        header("Location:portfolio.php");
    } else {
        $_SESSION['status'] = 'Image Cannot be updated';
        header("Location:portfolio.php");
    }
}



if (isset($_POST['deletePortfolio'])) {
    $package_id = $_POST['delete_id'];
    $query = "DELETE from image_gallery where id='$package_id'";
    echo $query;
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Image Deleted Successfully";
        header("Location:portfolio.php");
    } else {
        $_SESSION['status'] = "Image Cannot delete";
        header("Location:portfolio.php");
    }
}
