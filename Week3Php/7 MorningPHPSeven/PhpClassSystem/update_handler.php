<?php
if (isset($_POST["btn_update"])){
    //receive values from the user
    $id = $_POST["a"];
    $updated_name = $_POST["jina"];
    $updated_email = $_POST["arafa"];
    $updated_pass = $_POST["siri"];
    $encrypted_password = md5($updated_pass);

    //connect to the database start saving
    require_once"db_connection.php";

    //prepare the insert query
    $update_query = "UPDATE `users` SET `jina`='$updated_name',`arafa`='$updated_email',`siri`='$encrypted_password' WHERE id='$id'";

    //finally save the data using the mysqli
    $update = mysqli_query($connection, $update_query);

    //check if the saving was successful
    if (isset($update)){
    //redirect
        header("location:users.php");
    }else{
        echo "User Update Failed";
    }
}