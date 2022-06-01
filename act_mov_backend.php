<?php include_once "connection.php"; ?>

<?php
    $title = $_POST['movie_name'];

    $sql = "SELECT * FROM `movie` WHERE `m_title` = '$title'";
    $val = mysqli_query($conn, $sql);
    
    // checking whether the moive is available
    if(mysqli_num_rows($val) !=1 ){
        echo "<b>". $title."</b> is not present in database. Please Insert it.";
        mysqli_free_result($val);
        die();
    }
    else{
        //actor details
        if((isset($_POST['actor_name'])) && (isset($_POST['role']))){
            foreach(array_combine($_POST['actor_name'], $_POST['role']) as $actors => $roles){
                echo $actors . " => ". $roles;
                echo "<br>";
            }
        }
        else{
            echo "enter actor details";
        }
    }
?>