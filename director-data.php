<?php include_once "connection.php"; ?>
<?php
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    // Cheecking whether the data is already on the table or not
    $sql = "SELECT * FROM `director` WHERE `director_name` = '$name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if((mysqli_num_rows($result)>=1) && ($dob==$row['director_dob'])){
        echo "Data is already on the database";
        mysqli_free_result($result);
        die();
    }
    else{
        // Insert tha data
        $sql = "INSERT INTO `director`(`director_name`, `director_dob`)
                    VALUES('$name', '$dob')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Data Inserted successfully";
            die();
        }
        else{
            echo "Error" .mysqli_error($conn);
        }
    }
?>