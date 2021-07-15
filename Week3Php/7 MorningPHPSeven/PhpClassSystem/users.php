<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--  connections-->
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <title>Users</title>
</head>
<body>
    <h1 class="text-info, text-center">System Users</h1>

    <table class="table table-dark table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

        <?php
        //connect to db
        require_once "db_connection.php";

        //prepare select query
        $select_query= "SELECT `id`, `jina`, `arafa`, `siri` FROM `users` WHERE 1";

        //user the mysqli_query
        $users = mysqli_query($connection, $select_query);

        //write a loop to display the respective users
        while ($row = mysqli_fetch_assoc($users)){
            extract($row);
            echo "<tr>
                    <td>$jina</td>
                    <td>$arafa</td> 
                    <td><a href='delete.php?my_id=$id' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?my_id=$id&my_name=$jina&my_email=$arafa&my_pass=$siri' class='btn btn-info'>Update</a></td>
                   </tr>";
        }

        ?>

    </table>

</body>
</html>
