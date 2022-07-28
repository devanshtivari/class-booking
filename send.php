<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "codimaths";

    $conn = mysqli_connect($server, $username, $password , $db);

    if($conn === false){
        die("Could not connect .".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $query = "INSERT INTO student_data(Name , Email , Phone, Age) VALUES ('$name' , '$email' , '$phone' , '$age' )";


    if(mysqli_query($conn,$query)){
        echo
        '
            <h1>Data inserted successfully</h1>
        ';
    }
    else{
        echo
        '
            <h1>Error in progressing data</h1>
        ';
    }
    mysqli_close($conn);
?>