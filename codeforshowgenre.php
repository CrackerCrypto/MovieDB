<?php include_once "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=echo , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1><u>Sort by Genre</u></h1>";

        $name = $_POST['production_house'];
        $sql = "SELECT `genre`.`m_title`, `genre`.`genre` FROM `genre` 
                    INNER JOIN `production_movie` ON `genre`.`mid` = `production_movie`.`mid` 
                    AND `production_movie`.`prod_name` = '".$name."' ORDER BY `genre`";
        $r = mysqli_query($conn, $sql);
        // $numrow = mysqli_num_rows($r);

        echo "<table border='1'>
        <tr>
            <th>Movie</th>
            <th>Genre</th>
        </tr>";

        while($row = mysqli_fetch_assoc($r)){
            echo "<tr>";
                echo "<td>" .$row['m_title']."</td>";
                echo "<td>" .$row['genre']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>

</body>
</html>
