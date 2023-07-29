<html>
<?php include('../config/constants.php'); ?>




<head>
        <title>Art-gallery-home-page</title>
        <link rel="stylesheet" href="../admin CSS/admin.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
        <div class="logo">
            <h1>Modern<span>Artgallery</span>database</h1>
        </div>
        <div class="navigation text-right">
            <ul>
            <li>
                    <a href="../admin/index.php">home</a>
                </li>
                <li>
                    <a href="../admin/manage-art-details.php">art_details</a>
                </li>
                <li>
                    <a href="../admin/manage-artist-details.php">Artwork_details</a>
                </li>
                <li>
                    <a href="../admin/manage-customer-details.php">Customer_details</a>
                </li>
                <li>
                    <a href="../admin/manage-order-details.php">order_details</a>
                </li>
                
            </ul>
        </div>
        </div>
    </section>
    


<div class="main-content">
    <div class="wrapper">
        <h2>DASHBOARD</h2>

        <div class="col-4 text-center">
            <?php 
            $sql="SELECT * FROM art_details";
            $res=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            ?>
        <h1><?php echo $count; ?></h1>
        <br>
        Art_details
    </div>
    <div class="col-4 text-center">
    <?php 
            $sql2="SELECT * FROM artist_details";
            $res2=mysqli_query($conn,$sql2);
            $count2=mysqli_num_rows($res2);
            ?>
        <h1><?php echo $count2; ?></h1>
        <br>
        Artist_details
    </div>
    <div class="col-4 text-center">
    <?php 
            $sql3="SELECT * FROM customer_details";
            $res3=mysqli_query($conn,$sql3);
            $count3=mysqli_num_rows($res3);
            ?>
        <h1><?php echo $count3; ?></h1>
        
        <br>
        Customers
    </div>
    <div class="col-4 text-center">
    <?php 
            $sql4="SELECT * FROM order_details";
            $res4=mysqli_query($conn,$sql4);
            $count4=mysqli_num_rows($res4);
            ?>
        <h1><?php echo $count4; ?></h1>
        <br>
        Orders
    </div>
    <div class="clearfix">
    </div>
    </div>
</div>
</body>
</html>