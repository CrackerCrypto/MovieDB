<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTOR TO MOVIE</title>
</head>
<body>
    <h1>Actor to Movie Relation!!!</h1>
    <form action="act_mov_backend.php" method="post">
        <label for="movie_name">Movie Name: </label>
        <input type="text" name="movie_name" id="movie_name">
        <br><br>

        <p>Number of actors in the movie: </p>
        <br>

        <label for="actors">Actor Name: </label>
        <input type="text" name="actor_name[]" id="actor_name1">
        <br>

        <label for="actor_name">Actor Name: </label>
        <input type="text" name="actor_name" id="actor_name2">
        <br>

        <label for="actor_name">Actor Name: </label>
        <input type="text" name="actor_name" id="actor_name3">
        <br>

        <input type="submit">
    </form>
</body>
</html>