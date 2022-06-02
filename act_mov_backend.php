<?php include_once "connection.php"; ?>

<?php
    $title = $_POST['movie_name'];

    $sql = "SELECT * FROM `movie` WHERE `m_title` = '$title'";
    $val = mysqli_query($conn, $sql);
    $movie = mysqli_fetch_assoc($val);
    // checking whether the moive is available
    if(mysqli_num_rows($val) !=1 ){
        echo "<b>". $title."</b> is not present in database. Please Insert it.";
        mysqli_free_result($val);
        die();
    }
    else{
        //whether actor details are given or not
        if((isset($_POST['actor_name'])) && (isset($_POST['role']))){
            foreach(array_combine($_POST['actor_name'], $_POST['role']) as $actors => $roles){
                $res1 = mysqli_query($conn, "SELECT * FROM `actor` WHERE `actor_name` = '$actors'");
                $act = mysqli_fetch_assoc($res1);
                // Checking whether the actor detail is present in the actor table
                if(mysqli_num_rows($res1)>=1){
                    $mov_id = $movie['mid'];
                    $act_id = $act['actor_id'];
                    $mov_title = $movie['m_title'];
                    $act_name = $act['actor_name'];
                    //authenticate that same actor with same role doesn't exist in the same movie(later)
                    
                    // insert the data into actor_movie table
                    $sql1 = "INSERT INTO `actor_movie`(`movie_id`, `actor_id`, `m_name`, `actor_name`, `role`)
                                    VALUES('$mov_id', '$act_id', '$mov_title','$act_name', '$roles')";
                    $val1 = mysqli_query($conn, $sql1);
                    if($val){
                        echo "Data Inserted Successfully";
                        echo "<br>";
                    }
                    else{
                        echo "Error" .mysqli_error($conn);
                    }
                }
                else{
                    echo $actors." is not present in the database";
                }
            }
        }
        else{
            echo "enter actor details";
        }
    }
?>