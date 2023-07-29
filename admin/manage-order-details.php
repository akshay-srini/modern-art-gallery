<html>
<?php include('partials/menu.php'); ?>

<div class="main-content">
        <div class="wrapper">
            <h1>Manage order details</h1>

            
           
            <table class="tbl-full">
                <tr>
                    <th class="tbl-left">art_id</th>
                    <th>Customer_id</th>
                    <th>Order_id</th>
                    
                </tr>

                <?php

                    $sql="SELECT * FROM order_details";
                    $res=mysqli_query($conn,$sql);

                    if($res==TRUE)
                    {
                        $count=mysqli_num_rows($res);
                        
                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($res))
                            {
                                $art_id=$rows['art_id'];
                                $Cust_id=$rows['Cust_id'];
                                $order_id=$rows['order_id'];

                                ?>

                                <tr>
                                <td class="tbl-left"><?php echo $art_id; ?> </td>
                                <td><?php echo $Cust_id; ?></td>
                                <td><?php echo $order_id; ?></td>
                                
                                
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
</html>