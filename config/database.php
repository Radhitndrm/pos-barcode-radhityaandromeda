<?php 
try{
    $pdo = new PDO('mysql:host=localhost;port=8111;dbname=pos_barcode_db','root','');
}catch(PDOException $e){
    echo $e->getMessage();
}