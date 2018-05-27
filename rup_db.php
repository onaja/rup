<?php
//สร้าง Connection
$connection = new MongoClient();

//สร้าง Database
$db = $connection->rupdb;

//สร้าง Collection
$collection = $db->yes;

//Insert
//$doc = array("User"=>"ถูกต้อง" , "System"=>"ใช่");
//$collection->insert($doc);

echo 'success';

?>
