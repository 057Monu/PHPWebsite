<?php

if(!isset($_GET))
    header("location: index.php");

$uid = $_GET['uid'];

    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment</title>
    <link rel="stylesheet" href="CSS/payment.css">
</head>
<body>

<section>

    <h2>Payment Info</h2>

    <main class="payment-main">

        <div class="payment-left">

            <div class="payment-left-header">
                <h2>Payment</h2>
                <p>Price </p>
            </div>

            <div class="payment-left-card">
                <h2>Debit Card</h2>
                <h2>Credit Card</h2>
                <h2>Cash On Delivery</h2>
            </div>
        </div>

        <div class="payment-right">

            <div class="topic">
                <h2>Card Info</h2>
            </div>

            <div class="payment-right-content">
               <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">

                   <div class="input-card">
<!--                    <label for="card-number">Card Number:</label>-->
                    <input type="text" name="cardNum" placeholder="Card Number">
                </div>
                <div class="input-card">
<!--                    <label for="cvv">CVV:</label>-->
                    <input type="password" name="cvv" placeholder="Enter CVV">
                </div>
                <div class="input-card">
                    <!--                    <label for="otp">OTP:</label>-->
                    <input type="text" name="nameOfHolder" placeholder="Name of the Card Holder">
                </div>
                <div class="input-card">
<!--                    <label for="otp">OTP:</label>-->
                    <input type="password" name="otp" placeholder="Enter OTP">
                </div>

                <div class="submit-card">
                    <button type="submit" name="submit">Pay Now</button>
                </div>
               </form>
        </div>
        </div>
    </main>

    <a href="view.php?uid=<?php echo $uid ?>">Go Back</a>

</section>

</body>
</html>
