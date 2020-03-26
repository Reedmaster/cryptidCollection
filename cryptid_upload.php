<?php
    require_once('upload_function.php');
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
        <nav>
            <a class="home" href="index.php">
                Home
            </a>
        </nav>
        <section id="upload_div">
            <?php

            if(isset($_POST['submit']) && input_not_null()){
                upload_db();
                echo "<br/><span>Thank you for your submission</span>";
            }else {
                echo "<p> Failed </p>";
            }
            ?>
        </section>
    </body>
</html>