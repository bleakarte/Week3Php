<?php
//check if the update button has been clicked

if (isset($_GET["my_id"])){

    $received_id = $_GET["my_id"];
    $received_name = $_GET["my_name"];
    $received_email = $_GET["my_email"];
    $received_pass = $_GET["my_pass"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  connections-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <title>Sign Up</title>
</head>
<body>
<section class="form my-4 mx-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="resources/sign-up.jpg" class="img-fluid" alt="profile">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <form class="form-group" method="post" action="update_handler.php">
                    <h1 class="font-weight-bold py-3">Swaymnier</h1>
                    <h4>Sign in to our account</h4>
                    <!--                    username-->
                    <div class="form-row">
                        <input type="hidden" name="a" value="<?php echo $received_id;?>">
                        <div class="col-lg-7">
                            <input name="jina" value="<?php echo $received_name;?>" type="text" placeholder="Update Username" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <!--                        email address-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="arafa" value="<?php echo $received_email;?>" type="email" placeholder="Update Email Address" class="form-control my-3 p-4">
                        </div>
                    </div>

                    <!--                        password-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="siri" value="<?php echo $received_pass;?>" type="password" placeholder="Update Password" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <!--                        Register-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="btn_update" value="Update User" type="submit"  type="button" class="btn1 mt-3 mb-5">
                        </div>
                        <a href="users.php" class=" col-lg-7 btn btn-outline-danger btn-block">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
