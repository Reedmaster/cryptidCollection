<?php
    function fetch_db() : array {
        $database = new PDO('mysql:host=db; dbname=cryptid_database','root','password');
        $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query=$database->prepare("SELECT `name`,`weird_lvl`,`fear_lvl`,`size`,`meal_rating` FROM `cryptids`;");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }