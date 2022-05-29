<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIE DATABASE</title>
</head>
<body>
    <h1>Movie Form</h1>
    <form action="movieinsert.php" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title" id="title"><br><br>

        <label for="length">Length: </label>
        <input type="text" name="length" id="length"><br><br>
        
        <label for="releasedate">Year of release: </label>
        <input type="text" name="releasedate" id="releasedate"><br><br>

        <label for="genre">Genre: </label>
            <input type="checkbox" name="check_list[]" id="action" value="action">
            <label for="action">Action</label>
    
            <input type="checkbox" name="check_list[]" id="thriller" value="thriller">
            <label for="thriller">Thriller</label>
    
            <input type="checkbox" name="check_list[]" id="comedy" value="comedy">
            <label for="comedy">Comedy</label>
            
            <input type="checkbox" name="check_list[]" id="horror" value="horror">
            <label for="horror">Horror</label>

            <input type="checkbox" name="check_list[]" id="drama" value="drama">
            <label for="drama">Drama</label><br><br>
        <label for="outline">Plot Outline: </label>
        <textarea name="outline" id="outline" cols="50" rows="5"></textarea><br><br>

        <input type="submit" value="submit">
    </form>
</body>
</html>