<?php
if (isset($_POST["btn_reg"])){
    //receive values from the user
    $name = $_POST["jina"];
    $email = $_POST["arafa"];
    $pass = $_POST["siri"];
    $encrypted_password = md5($pass);

    //connect to the database start saving
    require_once"db_connection.php";

    //prepare the insert query
    $insert_query = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$name','$email','$encrypted_password')" ;

    //finally save the data using the mysqli
    $save = mysqli_query($connection, $insert_query);

    //check if the saving was successful
    if (isset($save)){
        echo "User Registered Successfully";
    }else{
        echo "User Registration Failed";
    }
}