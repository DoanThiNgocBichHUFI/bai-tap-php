<?php
$severname= "files.000webhost.com";
$username= "diemtinphp15";
$password= " 155@Dangtin";
$Db= "id21988575_mydb_tuan7";

try{
    $conn= new PDO("mysql:host= $severname;dbname= $Db",$username,$password);
    // thiết lập ngoại lệ lỗi PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connected sucessfully";
}catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();exit;
};
