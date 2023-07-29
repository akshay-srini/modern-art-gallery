<html>
<?php include('partials/menu.php'); ?>


    <div class="main-content">
        <div class="wrapper">
            <h1>Manage art-details</h1>

            <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
        ?>
            <br /><br />
            <a href="add-column-art_details.php" class="btn-primary">Add Column</a>
            <br /><br />
            <table class="tbl-full">
                <tr>
                    <th class="tbl-left">Art_id</th>
                    <th>Artist_id</th>
                    <th>title</th>
                    <th>year</th>
                    <th class="tbl-right">price</th>
                    <th>Action</th>
                </tr>


                <?php 
                    $sql = "SELECT * FROM art_details";
                    $res = mysqli_query($conn, $sql);

                    if($res==TRUE)
                    {
                        //counting rows to check whether we have data in db or not
                        $count=mysqli_num_rows($res);
                        $id=1;

                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                $art_id=$rows['art_id'];
                                $artist_id=$rows['artist_id'];
                                $title=$rows['title'];
                                $year=$rows['Year'];
                                $price=$rows['price'];

                                ?>
                                <tr>
                                    <td class="tbl-left"><?php echo $id++ ?></td>
                                    <td><?php echo $artist_id; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $year; ?></td>
                                    <td><?php echo $price; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/delete-column-art_details.php?art_id=<?php echo $art_id; ?>"  class="btn-delete">Delete</a>
                                    </td>
                                </tr>


                                <?php
                            }
                        }
                        else
                        {

                        }
                    }
                
                ?>

            </table>
        </div>
    </div>
    </body>
</html>