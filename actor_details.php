<?php include_once "connection.php"; ?>
<?php
    echo "<h1>Actor Details page</h1>";
    $actor_name = $_POST['actor_name'];

    $sql = "SELECT * FROM `actor` WHERE `actor_name` = '$actor_name'";
    $res = mysqli_query($conn, $res);
    if((mysqli_num_rows($result)!=1)){
        echo "Actor is not present in table";
        mysqli_free_result($res);
        die();
    }
    echo "<table border='1'>
    <tr>
        <th>Actor Name:</th>
        <th>Genre</th>
    </tr>";

    while($row = mysqli_fetch_assoc($r)){
        echo "<tr>";
            // echo "<td>" .$row['m_title']."</td>";
            // echo "<td>" .$row['genre']."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>