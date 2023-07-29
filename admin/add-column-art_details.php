<?php include('partials/menu.php'); ?>


<div class="main content">
    <div class="wrapper">
        <h1>Add Column</h1>

        
        <form action="" method="POST">
            <table>
                <tr>
                    <td class="tbl-empty">Artist_id</td>
                    <td class="tbl-empty"><input type="text" name="artist_id" placeholder="1"></td>
                </tr>
                <tr>
                    <td class="tbl-empty">Title</td>
                    <td class="tbl-empty"><input type="text" name="title" placeholder="title"></td>
                </tr>
                <tr>
                    <td class="tbl-empty">Year </td>
                    <td class="tbl-empty"><input type="text" name="year" placeholder="Eg. 2015"></td>
                </tr>
                <tr>
                    <td class="tbl-empty">Price</td>
                    <td class="tbl-empty"><input type="text" name="price" placeholder="2500"></td>
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
    //processing the form and saving it\
    if(isset($_POST['submit']))
    {
        $artist_id = $_POST['artist_id'];
        $title = $_POST['title'];
        $year = $_POST['year'];
        $price = $_POST['price'];

        $sql = "INSERT INTO art_details SET
                artist_id='$artist_id',
                title='$title',
                year='$year',
                price='$price'
            ";  

            $conn = mysqli_connect('localhost','root','') or die(mysqli_error()); //DB connection
            $db_select = mysqli_select_db($conn,'artgallery') or die(mysqli_error());


            $res = mysqli_query($conn, $sql);
            if($res==TRUE)
            {
                $_SESSION['add'] = "column added Successfully";
                header("location:".'http://localhost/art-gallery/admin/manage-art-details.php');
            }

            else

            {
                $_SESSION['add'] = "Failed to add Column";
                header("location:".SITEURL.'admin/manage-art-details.php');

            }



    }

?>