<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  connections-->
    <script src="PhpClassSystem/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="PhpClassSystem/bootstrap/js/popper.min.js"></script>
    <script src="PhpClassSystem/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="PhpClassSystem/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="PhpClassSystem/bootstrap/css/custom.css">
    <title>Sign Up</title>
</head>
<body>
<section class="form my-4 mx-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="PhpClassSystem/resources/sign-up.jpg" class="img-fluid" alt="profile">
            </div>
            <div class="col-lg-7 px-5 pt-5">
                <form class="form-group" method="post" action="PhpClassSystem/server.php">
                    <h1 class="font-weight-bold py-3">Swaymnier</h1>
                    <h4>Sign in to our account</h4>
                    <!--                    username-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="jina" type="text" placeholder="Username" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <!--                        email address-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="arafa" type="email" placeholder="Email Address" class="form-control my-3 p-4">
                        </div>
                    </div>

                    <!--                        password-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input name="siri" type="password" placeholder="Password" class="form-control my-3 p-4">
                        </div>
                    </div>
                    <!--                        Register-->
                    <div class="form-row">
                        <div class="col-lg-7">
                            <input value="Register" type="submit" name="btn_reg" type="button" class="btn1 mt-3 mb-5">
                        </div>
                        <a href="PhpClassSystem/users.php" class=" col-lg-7 btn btn-outline-success btn-block">View Users</a>
                    </div>
                    <!--                        register-->
                    <p>Already have an account? <a href="#">Log in here</a></p>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
