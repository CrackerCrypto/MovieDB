<!-- This file is for inserting the movie into "MOVIE" table and "GENRE" table -->
<?php include_once "connection.php";?>
<?php
    // session_start();

    $title = $_POST['title'];
    $length = $_POST['length'];
    $release = $_POST['releasedate'];
    $outline = $_POST['outline'];

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
?>