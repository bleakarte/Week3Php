<?php
//check if the delete button has been clicked

if (isset($_GET["my_id"])){

    $id = $_GET["my_id"];

    //to delete connect to the db
    require_once "db_connection.php";

    //prepare the delete query
    $delete_query = "DELETE FROM users WHERE id='$id'";

    //finally execute
    $delete = mysqli_query($connection, $delete_query);

    //check if delete was successful
    if (isset($delete)){
        //return
        header("location:users.php");
    }else{
        echo "Deleting Failed";
    }
}