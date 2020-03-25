<?php
    $connection = new PDO('mysql:host=db; dbname=cryptid_database','root','password');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $weird_lvl = $_POST['weird_lvl'];
        $fear_lvl = $_POST['fear_lvl'];
        $size = $_POST['size'];
        $meal_rating = $_POST['meal_rating'];
        if($name !=''||$weird_lvl !=''||$fear_lvl !=''||$size !=''||$meal_rating !=''){
            $query = mysql_query("INSERT INTO cryptids(`name`,`weird_lvl`,`fear_lvl`,`size`,`meal_rating`) VALUES ('$name','$weird_lvl','$fear_lvl','$size','$meal_rating')");
            echo "<br/><span>Thank you for your submission</span>";
        } else {
            echo "<p> Failed </p>";
        };
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload a cryptid</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="cryptid_upload.php" method="POST" class="userform">
            <h2>Form</h2>
            <label>Name:</label>
            <input type="text" name="cryptid_name" required>
            <label>Weird Level:</label>
            <input type="number" name="cryptid_weird" min="0" max="10" required>
            <label>Fear Level:</label>
            <input type="number" name="cryptid_fear" min="0" max="10" required>
            <label>Size:</label>
            <input type="number" name="cryptid_size" min="0" max="10" required>
            <label>Meal Rating:</label>
            <select name="meal_taste" size="4" multiple>
                <option value="delicious">Delicious</option>
                <option value="okay">Okay</option>
                <option value="disgusting">Disgusting</option>
                <option value="escaped">It got away</option>
            </select>
            <input type="submit" name="submit" class="submit">
        </form>
    </body>
</html>