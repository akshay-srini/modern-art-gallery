<?php

    $artist_id=$_GET['artist_id'];

    $sql = "DELETE FROM artist_details WHERE artist_id=$artist_id";

    include('../config/constants.php');

    $res=mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        $_SESSION['delete'] = "Column deleted Successfully";
        header("location:".SITEURL.'admin/manage-artist_details.php');
    }
    else
    {
        $_SESSION['delete'] = "Failed to delete the Column";
        header("location:".SITEURL.'admin/manage-artist_details.php');
    }

?>
