<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "demomovie";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo "Not Connected!". mysqli_connect_error($conn);
    }
?>