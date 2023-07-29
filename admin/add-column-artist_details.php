<?php include('partials/menu.php'); ?>



<div class="main content">
    <div class="wrapper">
        <h1>Add Column</h1>

        
        <form action="" method="POST">
            <table>
            
                <tr>
                    <td class="tbl-empty">Artist_name</td>
                    <td class="tbl-empty"><input type="text" name="artist_name" placeholder="Eg: Akshay"></td>
                </tr>
                <tr>
                    <td class="tbl-empty">Style</td>
                    <td class="tbl-empty"><input type="text" name="style" placeholder="Nature, Urban"></td>
                </tr>
                <tr>
                    <td class="tbl-empty">Contact_Number </td>
                    <td class="tbl-empty"><input type="text" name="Contact_no" placeholder="12345*****"></td>
                </tr>
                <tr>
                    <td class="tbl-empty">Country</td>
                    <td class="tbl-empty"><input type="text" name="Country" placeholder="Eg.: India"></td>
                </tr>
                <tr>
                    <td class="tbl-empty" colspan="2">
                        <input type="Submit" name="submit" value="Add Column" class="btn-update">
                </tr>

            </table>
        </form>
    </div>

</div>


<?php

    if(isset($_POST['submit']))
    {
        $artist_id=$_POST['artist_id'];
        $artist_name=$_POST['artist_name'];
        $style=$_POST['style'];
        $Contact_no=$_POST['Contact_no'];
        $Country=$_POST['Country'];

        $sql = "INSERT INTO artist_details SET
        
        artist_name='$artist_name',
        style='$style',
        Contact_no='$Contact_no',
        Country='$Country'
        ";
    ?>

      

        <?php
        include('../config/constants.php');
        $res = mysqli_query($conn,$sql);
        if($res==TRUE)
        {
            $_SESSION['add'] = "Column added Successfully";
            header("location:".SITEURL.'admin/manage-artist-details.php');
        }
        else

        {
            $_SESSION['add'] = "Failed to add Column";
            header("location:".SITEURL.'admin/manage-artist-details.php');
        }


    }

    ?>

