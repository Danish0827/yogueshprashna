<?php
session_start();
include('config/dbcon.php');
if (isset($_POST['addSlider'])) {
    $image = $_FILES['image']['name'];
    $user_query = "INSERT INTO `slider` (`image`) VALUES ('$image');";
    echo $user_query;

    $query_run = mysqli_query($con, $user_query);
    if ($query_run) {
        move_uploaded_file($_FILES['image']['tmp_name'], "upload/slider/" . $image);
        $_SESSION['status'] = "Image Added Successfully";
        header("Location:slider.php");
    } else {
        $_SESSION['status'] = "Image Adding Failed";
        header("Location:slider.php");
    }
}






if (isset($_POST['updateSlider'])) {
    $portfolio_id = $_POST['portfolio_id'];
    $image = $_FILES['image']['name'];
    $image_old = $_POST['image_old'];

    if ($image != '') {
        $update_filename_1 = $_FILES['image']['name'];
        echo $update_filename_1;
    } else {
        $update_filename_1 = $image_old;
    }
    $query = "UPDATE `slider` SET `image`='$update_filename_1' WHERE id='$portfolio_id';";
    echo $query;
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        if ($image != '') {
            move_uploaded_file($_FILES['image']['tmp_name'], "upload/slider/" . $image);
        }
        // move_uploaded_file($_FILES['image']['tmp_name'], "/upload" . $_FILES['image']['name']);
        $_SESSION['status'] = 'Image Updated Successfully';
        header("Location:slider.php");
    } else {
        $_SESSION['status'] = 'Image Cannot be updated';
        header("Location:slider.php");
    }
}



if (isset($_POST['deleteSlider'])) {
    $slider = $_POST['delete_id'];
    $query = "DELETE from slider where id='$slider'";
    echo $query;
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['status'] = "Image Deleted Successfully";
        header("Location:slider.php");
    } else {
        $_SESSION['status'] = "Image Cannot delete";
        header("Location:slider.php");
    }
}
