<html>
<?php include('partials/menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>Manage Customer details</h1>

            
            <br /><br />
            
            <br /><br />
            <table class="tbl-full">
                <tr>
                    <th class="tbl-left">Cust_id</th>
                    <th>Cust_name</th>
                    <th>Email</th>
                    <th>Zipcode</th>
                    <th>Contact_number</th>
                    <th class="tbl-right">address</th>
                    <th>Action</th>
                </tr>

                
               <?php 

                    $sql = "SELECT * FROM customer_details";
                    $res = mysqli_query($conn, $sql);

                    if($res==TRUE)
                    {
                        $count=mysqli_num_rows($res);
                        $id = 1;

                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                $cust_id=$rows['cust_id'];
                                $cust_name=$rows['cust_name'];
                                $Email_id=$rows['Email_id'];
                                $zipcode=$rows['zipcode'];
                                $contact_no=$rows['contact_no'];
                                $liv_address=$rows['liv_address'];

                                ?>

                                <tr>
                                <td class="tbl-left"><?php echo $id++ ?> </td>
                                <td><?php echo $cust_name; ?></td>
                                <td><?php echo $Email_id; ?></td>
                                <td><?php echo $zipcode; ?></td>
                                <td><?php echo $contact_no; ?></td>
                                <td><?php echo $liv_address; ?></td>
                                <td>
                                    
                                    <a class="btn-delete">Delete</a>
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