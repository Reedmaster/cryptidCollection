<?php
    function list_collection() {
        foreach ($cryptids as $cryptid) {
            echo '<h2>';
            echo $cryptids['name'];
            echo '</h2>';
            echo '<br>';
            echo '<ul>';
                echo '<li>' . $cryptids["weird_lvl"] . '</li>';
                echo '<li>' . $cryptids["fear_lvl"] . '</li>';
                echo '<li>' . $cryptids["size"] . '</li>';
                echo '<li>' . $cryptids["meal_rating"] . '</li>';
            echo '</ul>';
        };
    }
?>