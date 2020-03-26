<?php
    function list_collection(array $cryptids) {
        echo '<div class="tile_container">';
        foreach ($cryptids as $cryptid) {
            echo '<h2>';
            echo $cryptid['name'];
            echo '</h2>';
            echo '<br>';
            echo '<ul>';
                echo '<li>' . $cryptid["weird_lvl"] . '</li>';
                echo '<li>' . $cryptid["fear_lvl"] . '</li>';
                echo '<li>' . $cryptid["size"] . '</li>';
                echo '<li>' . $cryptid["meal_rating"] . '</li>';
            echo '</ul>';
        };
        echo '</div>';
    }
?>