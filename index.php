<?php
    require_once('fetch_database.php');
    require_once('lister.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cryptid Collection</title>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Top Bar-->
        <section id="top_bar">
            <div class="container">
                <h1>Cryptid Collection</h1>
                <p>Share your cryptid sightings</p>
            </div>
            <a class="add_cryptid" href="add_cryptid.php">
                Add cryptid
            </a>
        </section>
        <section id="content">
            <?php
            $db=fetch_db();
            list_collection($db);
            ?>
        </section>
    </body>
</html>