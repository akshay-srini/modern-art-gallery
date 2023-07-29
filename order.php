<?php include('config/constants.php'); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order details</title>
    <link rel="stylesheet" href="order CSS/order.css">
</head>
<body>
    <section class="navbar">
        <div class="container">
        <div class="logo">
            <h1>Modern<span>Artgallery</span></h1>
        </div>
        <div class="navigation text-right">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="index.html#artworks">Artworks</a>
                </li>
                <li>
                    <a href="index.html#artists">Artists</a>
                </li>
                <li>
                    <a href="index.html#contact-us">contact-us</a>
                </li>
            </ul>
        </div>
        
        </div>
    <div class="clearfix"></div>
    </section>
    <section class="Order-details">
        <div class="ord-det-container">
            <h2 class="text-center text-white"><br><br><br>Fill this form to confirm your order</h2>

        <?php 
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        
        
        ?>


            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Frame</legend>

                    <div class="art-img">
                        <img src="images/pet1.jpg" alt="pet1" class="img-responsive img-curve">
                    </div>

                    <div class="art-order-desc">
                        <h3>Art title</h3>
                        <p class="artwork-price">2500</p>  
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Order details</legend>
                    <div class="order-label">Full name</div>
                    <input type="text" name="Cust_name" placeholder="A" class="imput-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="Email_id" placeholder="a@gmail.com" class="imput-responsive" required>

                    <div class="order-label">zipcode</div>
                    <input type="text" name="zipcode" placeholder="963521" class="imput-responsive" required>

                    <div class="order-label">Contact_n0r</div>
                    <input type="tel" name="contact_no" placeholder="96354*****" class="imput-responsive" required>

                    <div class="order-label">address</div>
                    <input type="address" name="liv_address" rows="10" placeholder="Street, City, Country" class="imput-responsive" required>
                    <p><br></p>
                    <input type="submit" name="submit" value="Confirm order" class="btn btn-primary">

                </fieldset>

            </form>
        </div>
    </section>
</body>
</html>

<?php 
    if(isset($_POST['Submit']))
    {
        $cust_name=$_POST['cust_name'];
        $Email_id=$_POST['Email_id'];
        $zipcode=$_POST['zipcode'];
        $contact_no=$_POST['contact_no'];
        $liv_address=$_POST['liv_address'];

        $sql = "INSERT INTO customer_details SET
        cust_name='$cust_name',
        Email_id='$Email_id',
        zipcode='$zipcode',
        contact_no='$contact_no',
        liv_address='$liv_address'
        ";

        $conn = mysqli_connect('localhost','root','') or die(mysqli_error()); //DB connection
        $db_select = mysqli_select_db($conn,'artgallery') or die(mysqli_error());
        $res = mysqli_query($conn, $sql);
        
        if($res==TRUE)
        {
            $_SESSION['add'] = "Ordered Successfully";
            header("location:".SITEURL);
        }
        else
        {
            $_SESSION['add'] = "Failed to Order";
            header("location:".SITEURL);
        }
    }

    ?>