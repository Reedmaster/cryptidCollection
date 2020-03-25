<?php

require_once('fetch_database.php');
$db=fetch_db();
require_once('lister.php');
$collection=list_collection($db);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cryptid Collection</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--Top Bar-->

        <section id="top_bar">
            <div class="container">
                <h1>Cryptid collection</h1>
                <p>Share your cryptid sightings</p>
            </div>
            <a class="add_cryptid" href="add_cryptid.php">
                Add cryptid
            </a>
        </section>

        <!--Content Section-->

        <section id="content">
            <div class="tile">
                <img src>
                <ul>
                    <li>Name: Kraken</li>
                    <li>Weird level: 7/10</li>
                    <li>Fear level: 8/10</li>
                    <li>Size: 9/10</li>
                    <li>Colour: orange</li>
                    <li>Drugs taken: hallucinogens</li>
                </ul>
                <form method="post" action="deleter.php">
                    <input hidden name="id" value="1">
                    <button type="submit">DELETE</button>
                </form>
            </div>
            <div class="tile">
                <img src>
                <div class="container">
                    <ul>
                        <li>Name: Loch Ness Monster</li>
                        <li>Weird level: 5/10</li>
                        <li>Fear level: 3/10</li>
                        <li>Size: 6/10</li>
                        <li>Colour: blue</li>
                        <li>Drugs taken: none</li>
                    </ul>
                </div>
            </div>
            <div class="tile">
                <img src>
                <div class="container">
                    <ul>
                        <li>Name: Yeti</li>
                        <li>Weird level: 4/10</li>
                        <li>Fear level: 6/10</li>
                        <li>Size: 4/10</li>
                        <li>Colour: black</li>
                        <li>Drugs taken: none</li>
                    </ul>
                </div>
            </div>
        </section>
    </body>
</html>