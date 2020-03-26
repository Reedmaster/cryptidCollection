<?php
    function list_collection(array $cryptids) {
        echo '<div class="tile_container">';
        foreach ($cryptids as $cryptid) {
            echo '<h2>';
            echo $cryptid['name'];
            echo '</h2>';
            echo '<br>';
            echo '<ul>';
                echo '<li>' . "Weirdness Level: " . $cryptid["weird_lvl"] . '</li>';
                echo '<li>' . "Scariness Level: " . $cryptid["fear_lvl"] . '</li>';
                echo '<li>' . "Size: " . $cryptid["size"] . '</li>';
                echo '<li>' . "Meal review: " . $cryptid["meal_rating"] . '</li>';
            echo '</ul>';
        };
        echo '</div>';
    }