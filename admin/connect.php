<?php
$drive = "mysql:host=localhost; dbname = db_floom_php";
$user = "root";
$pass = "";
$conn = new PDO($drive,$user,$pass);
try{
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "kết nối thành công";
}catch(PDOException $e){
    echo "lỗi kết nối ".$e->getMessage();
}

$conn = null;
?>