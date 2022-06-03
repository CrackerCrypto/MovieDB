<?php include_once "connection.php"; ?>
<?php
    echo "<h1>Actor Details page</h1>";
    $actor = $_POST['actor_name'];

    $val = mysqli_query($conn, "SELECT * FROM `actor` WHERE `actor_name` = '$actor'");
    if(mysqli_num_rows($val)>=1){
        $sql = "SELECT * FROM `actor_movie` WHERE `actor_name` = '$actor'";
        $val1 = mysqli_query($conn, $sql);
        $numrow = mysqli_num_rows($val1);
        echo "<table border = '1'>
        <tr>
            <th colspan='2'>Actor's Details</th>
        </tr>";
        echo "<tr>";
            echo "<td>Actor Name</td>";
            echo "<td><b>".$actor."</b></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Number of Movies</td>";
            echo "<td><b>".$numrow."</b></td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>Moive List</td>";
                echo "<td><b>";
                    while($list = mysqli_fetch_assoc($val1)){
                        echo $list['m_name'];
                        echo "<br>";
                    }
                echo "</b></td>"; 
        echo "</tr>";
        echo "</table>";

    }
    else{
        echo $actor." is not present in the table";
    }
?>