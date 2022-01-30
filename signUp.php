<?php

require_once 'database/conn.php';

if((isset($_POST['signUp'])) && ($_SERVER['REQUEST_METHOD'] == 'POST')){

    $username = strtolower(trim($_POST['username']));

    $gender = $_POST['gender'];

    $password = $_POST['password'];
    $email = $_POST['email'];

//    echo "Gender: $gender";

    if(strlen($username) <= 3 || $gender == ""){
        header("Location: signUp.php");
    }else {

        if (strlen($password) < 5 || strlen($email) < 6) {
            header("Location: signUp.php");
        } else {
            echo " hjkhkj";
            $result = $crud->insert($username, $password, $email, $gender);

            if (!$result) {
//        echo "<div>Username or Password is incorrect!</div>";
                echo "username already taken";
            } else {
                $_SESSION['username'] = $username;
//        $_SESSION['userid'] = $result['uid'];

                header("Location: first.php");
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="./CSS/signUp.css">
</head>
<body>
<div class="form-div">
    <h2>Sign Up</h2>

    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="aise-hi">
            <div class="input-div">
                <input type="text" name="username" size="22px" placeholder="Username">
            </div>
            <div class="input-div">
                <input type="email" name="email" size="22px" placeholder="Email">
            </div>
            <div class="input-div">
                <input type="password" name="password" size="22px" placeholder="Password">
            </div>
            <div class="input-div">
                <input type="password" name="cnfPassword" size="22px" placeholder="Confirm Password">
            </div>
            <div class="input-div">
                <input type="radio" name="gender" checked value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Other">Other
            </div>
            <div class="submit-div">
                <input type="submit"  name="signUp" value="Sign Up">
            </div>
            <div class="form-forgot">
                <a href="">Forgot Password</a>
            </div>
            <div class="create-ac">
                <a href="login.php">Already have an account</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
