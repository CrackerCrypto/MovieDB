<?php include_once "connection.php"; ?>
<?php
    $title = $_POST['title'];
    $length = $_POST['length'];
    $release = $_POST['releasedate'];
    $outline = $_POST['outline'];
    
    $sql = "SELECT * FROM `movie` WHERE `m_title` = '$title'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // checking for duplicate value on the table
    if((mysqli_num_rows($result)>=1) && ($release == $row['year_of_release'])){
        echo "<span><b>" . $title . "</b></span> is already present on the database";
        mysqli_free_result($result);    //free
        die();
    }
    else{
        //insert the data onto the `movie` table
        $sql = "INSERT INTO `movie`(`m_title`, `m_length`, `year_of_release`, `plot_outline`)
                            VALUES('$title','$length','$release','$outline')";
        $result = mysqli_query($conn, $sql);
    
        if($result){
            echo "Data inserted";
        }
        else{
            echo "data not inserted" .mysqli_error($conn);
        }
        // get the id of recently added movie
        $sql1 = "SELECT * FROM `movie` WHERE `mid` = (SELECT MAX(`mid`) FROM `movie`)";
        $r = mysqli_query($conn, $sql1);
    
        $value = mysqli_fetch_array($r);
        $fk = $value['mid'];
        $m_name = $value['m_title'];
    
        // Inserting the movie genre into the `genre` database
        if(isset($_POST['check_list'])){
            foreach($_POST['check_list'] as $genre){
                $sql2 = "INSERT INTO `genre`(`mid`, `m_title`, `genre`)
                            VALUES('$fk', '$m_name', '$genre')";
                $r2 = mysqli_query($conn, $sql2);
            }
        }
    }
?>