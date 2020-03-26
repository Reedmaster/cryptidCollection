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

            function inputNotNull() : bool {
                return $_POST['cryptid_name'] != '' ||$_POST['cryptid_weird'] != '' ||$_POST['cryptid_fear'] != '' ||$_POST['cryptid_size'] != '' ||$_POST['meal_taste'] != '' ;
            }

            function upload_db() {
                $connection = new PDO('mysql:host=db; dbname=cryptid_database','root','password');
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $name = $_POST['cryptid_name'];
                $weird_lvl = $_POST['cryptid_weird'];
                $fear_lvl = $_POST['cryptid_fear'];
                $size = $_POST['cryptid_size'];
                $meal_rating = $_POST['meal_taste'];
    
                $query = $connection->prepare("INSERT INTO cryptids(`name`,`weird_lvl`,`fear_lvl`,`size`,`meal_rating`) VALUES (:name,:weird_lvl,:fear_lvl,:size,:meal_rating)");
                $query->execute(['name'=>$name, 'weird_lvl'=>$weird_lvl, 'fear_lvl'=>$fear_lvl, 'size'=>$size, 'meal_rating'=>$meal_rating]);
            }
         
            if(isset($_POST['submit']) && inputNotNull()){
                upload_db();
                echo "<br/><span>Thank you for your submission</span>";
                   // update this so it sends the user back to index after a succesful add
            }else {
                echo "<p> Failed </p>";
            }
            ?>
        </section>
    </body>
</html>