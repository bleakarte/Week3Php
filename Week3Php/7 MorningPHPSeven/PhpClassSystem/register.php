<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  connections-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Register</title>
</head>
<body>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4" style="background-image: url(resources/signup.gif); background-size: cover">
            <h1 class="font-weight-bold, text-center" style="color: red; text-shadow: 2px 2px  2px white">
                REGISTER
            </h1>
            <form class="form-group" action="server.php" method="post">
                <!--input 1-->
                    <input name="jina" type="text" class="form-control" placeholder="Enter Name">
                <!--input 2-->
                    <input name="arafa" type="email" class="form-control" placeholder="Enter Email">
                <!--input 3-->
                    <input name="siri" type="password" class="form-control" placeholder="Enter Password">
                <!--input register-->
                <input type="submit" value="Register" name="btn_reg">

                <a href="users.php" class="btn btn-outline-success btn-block">View Users</a>
            </form>

        </div>
        <div class="col-4"></div>
</body>
</html>
