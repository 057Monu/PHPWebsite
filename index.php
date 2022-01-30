<?php
$nameErr = "";
session_start();
require_once "database/conn.php";
$result = $view->allView();

//for($i = 0; $i < count($result); $i++)
//while($result->)
//    print_r($result);
//exit();

if(isset($_POST['username'])){
    header("Location: first.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
<body>

<nav>

    <ul>
        <li><a href="first.php">First</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signUp.php">Sign Up</a></li>
        <li><a href="#">My Cart</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Project</a></li>
        <li><a href="payment.php">Payment</a></li>
        <li><a href="#">Text</a></li>
    </ul>
</nav>

<section>

<nav class="nav-side">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
        <a href="#">Link 5</a>
        <a href="#">Link 6</a>
        <a href="#">Link 7</a>
        <a href="#">Link 8</a>
        <a href="#">Link 9</a>
        <a href="#">Link 10</a>
</nav>

<div class="main-div">

    <div class="t-div">
        <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
        <div class="div-child" onclick="divClick(<?php echo $r['did']?>)" >
            <img src="<?php echo $r['image']  ?>" />

            <br/><span>Price $<?php echo $r['price'] ?></span>
            <span style="display: none" id="data-<?php echo $r['did']?>"></span>
            <p>
                <?php echo $r['TITLE'] ?>
            </p>
        </div>
    <?php } ?>
    </div>

</div>

<aside class="main-aside">
    <div class="aside-div">

        <div class="aside-div-search">
            <input type="text" placeholder="Search" class="aside-search">
        </div>

        <div class="aside-div-content">
        <p>
            HTML elements are positioned static by default.
            Static positioned elements are not affected by the top, bottom, left, and right properties.
        </p>
        <p>
            An element with position: static; is not positioned in any special way; it is always positioned
            according to the normal flow of the page:
        </p>
        <p>
            HTML elements are positioned static by default.
            Static positioned elements are not affected by the top, bottom, left, and right properties.
        </p>
<!--        <p>-->
<!--            An element with position: static; is not positioned in any special way; it is always positioned-->
<!--            according to the normal flow of the page:-->
<!--        </p>-->
<!--        <p>-->
<!--            HTML elements are positioned static by default.-->
<!--            Static positioned elements are not affected by the top, bottom, left, and right properties.-->
<!--        </p>-->
<!--        <p>-->
<!--            An element with position: static; is not positioned in any special way; it is always positioned-->
<!--            according to the normal flow of the page:-->
<!--        </p>-->
        </div>
    </div>
</aside>

</section>

<script src="JavaScript/index.js"></script>
</body>
</html>
