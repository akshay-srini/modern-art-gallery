
<?php

    

    $art_id=$_GET['art_id'];

    $sql="DELETE FROM art_details WHERE art_id = $art_id";


    include('../config/constants.php');


    $res = mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        $_SESSION['delete'] = "column deleted Successfully";
        header("location:".SITEURL.'admin/manage-art-details.php');
    }
    else
    {
        $_SESSION['delete'] = "Failed to delete the column";
        header("location:".SITEURL.'admin/manage-art-details.php');
    }

?>
    