<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload a cryptid</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav>
            <a class="home" href="index.php">
                Home
            </a>
        </nav>
        <section id=upload_div>
            <?php
                $connection = new PDO('mysql:host=db; dbname=cryptid_database','root','password');
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if(isset($_POST['submit'])){
                    $name = $_POST['cryptid_name'];
                    $weird_lvl = $_POST['cryptid_weird'];
                    $fear_lvl = $_POST['cryptid_fear'];
                    $size = $_POST['cryptid_size'];
                    $meal_rating = $_POST['meal_taste'];
                    if($name !=''||$weird_lvl !=''||$fear_lvl !=''||$size !=''||$meal_rating !=''){
                        $query = $connection->prepare("INSERT INTO cryptids(`name`,`weird_lvl`,`fear_lvl`,`size`,`meal_rating`) VALUES ('$name','$weird_lvl','$fear_lvl','$size','$meal_rating')");
                        $query->execute();
                        echo "<br/><span>Thank you for your submission</span>";
                    } else {
                        echo "<p> Failed </p>";
                    };
                };
            ?>
        </section>
    </body>
</html>