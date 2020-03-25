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