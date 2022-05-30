<?php include_once "connection.php";?>
<?php
    $name = $_POST['prod-name'];
    $country = $_POST['add-country'];
    $state = $_POST['add-state'];
    $city = $_POST['add-city'];
    $pincode = $_POST['add-pincode'];

    $sql = "SELECT * FROM `productioncompany` WHERE `prod_name` = '$name'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>=1){
        echo "The <span><b>Production Company</b></span> is already present on the database";
        mysqli_free_result($result);
        die();
    }
    else{
        $sql = "INSERT INTO `productioncompany`(`prod_name`, `add_country`, `add_state`, `add_city`, `add_pincode`)
                                VALUES('$name', '$country', '$state', '$city', '$pincode')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Data inserted";
        }
        else{
            echo "Not inserted" .mysqli_error($conn);
        }
    }
?>