<?php include('partials/menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>Manage artist-details</h1>

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
            <a href="add-column-artist_details.php" class="btn-primary">Add Column</a>
            <br /><br />
            <table class="tbl-full">
            <tr>
                    <th class="tbl-left">Artist_id</th>
                    <th>Artist_name</th>
                    <th>Style</th>
                    <th>Contact no</th>
                    <th class="tbl-right">Country</th>
                    <th>Action</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM artist_details";
                    $res = mysqli_query($conn,$sql);

                    if($res==TRUE)
                    {
                        $count=mysqli_num_rows($res);
                        $id=1;

                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                $artist_id=$rows['artist_id'];
                                $artist_name=$rows['artist_name'];
                                $style=$rows['style'];
                                $Contact_no=$rows['Contact_no'];
                                $Country=$rows['Country'];

                                ?>

                                <tr>
                                    <td class="tbl-left"><?php echo $id++; ?></td>
                                    <td><?php echo $artist_name; ?></td>
                                    <td><?php echo $style; ?></td>
                                    <td><?php echo $Contact_no; ?></td>
                                    <td><?php echo $Country; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/delete-column-artist_details.php?artist_id=<?php echo $artist_id; ?>" class="btn-delete">Delete</a>
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


