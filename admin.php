<?php

    require_once 'database/conn.php';

    if((isset($_POST['submit'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')){

        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];

        $result = $user->getUser($username, $password);

        if(!$result){
            echo "<div>Username or Password is incorrect!</div>";
        }else {
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['uid'];

            header("Location:adminhome.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="./CSS/admin.css">
</head>
<body>
<div class="form-div">
        <h2>Admin Login</h2>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
    <div class="aise-hi">
    <div class="input-div">
        <input type="text" name="username" size="22px" placeholder="Username">
    </div>
    <div class="input-div">
        <input type="password" name="password" size="22px" placeholder="Password">
    </div>
    <div class="submit-div">
        <input type="submit"  name="submit" value="Log In">
    </div>
    <div class="form-forgot">
        <a href="forgotpasswd.php">Forgot Password</a>
    </div>
    </div>
</form>
</div>
</body>
</html>
