<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: GET");
$username="root";
$pass="";
$db=new PDO("mysql:host=Localhost;dbname=db_my_trainer;Charset=utf8;",$username,$pass);

$get=$db->prepare("SELECT * FROM abs");
$get->execute();
$get=$get->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($get));
 
   


 

?>