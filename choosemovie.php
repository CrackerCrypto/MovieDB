<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose MOVIE</title>
</head>
<body>
    <form action="selecthouse.php" method="post">
        <h1>Choose which production house produces which movies?</h1>
        <label for="production_house">Choose Production House: </label>
        <input type="text" name="production_house" id="production_house">
        <br><br>
    
        <label for="m_name">Choose Movie Name: </label>
        <input type="text" name="m_name" id="m_name">
        <br><br>
    
        <input type="submit" value="Submit">
    </form>
</body>
</html>