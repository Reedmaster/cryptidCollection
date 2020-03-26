<?php

function input_not_null() : bool {
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

?>