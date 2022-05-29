<?php include_once "connection.php"; ?>
<?php
    // session_start();
    
    $prod_house = $_POST['production_house'];
    $m_name = $_POST['m_name'];

    $res = mysqli_query($conn, "SELECT * FROM `production_movie` WHERE `m_title` = '$m_name'");
    // Check whether the movie is already on the database or not
    if(mysqli_num_rows($res)>=1){
        echo $m_name . " is already present on the table";
        die();
    }
    else{
        $r = mysqli_query($conn, "SELECT * FROM `productioncompany` WHERE `prod_name`= '" .$prod_house."'");
        $row = mysqli_fetch_array($r);
        
        $r1 = mysqli_query($conn, "SELECT * FROM `movie` WHERE `m_title`= '" .$m_name."'");
        $row1 = mysqli_fetch_array($r1);
        
        //checking whether both are present in the database or not
        if(($prod_house == $row['prod_name']) && ($m_name == $row1['m_title'])){
            $id = $row['prod_id'];
            $id1 = $row1['mid'];
            // authenticating whether the production house and movie are already present in the database or not
            $check = "SELECT * FROM `production_movie` 
                        WHERE `prod_name`='$prod_house' AND `m_title`='$m_name'";
            $result = mysqli_query($conn, $check);

            // $num = mysqli_num_rows($result)
            // echo $num;
            if(mysqli_num_rows($result)>=1){
                echo "Data already exists";
                die();
            }
            else{
                // Insert the data into production_movie table
                $s = "INSERT INTO `production_movie`(`pid`, `mid`, `prod_name`, `m_title`)
                                VALUES('$id','$id1', '$prod_house', '$m_name')";
                mysqli_query($conn, $s);
            }
        }
        else{
            die("try");
        }
    }
?>