<?php 
     
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods:POST");
    $username="mostafa";
     $pass="123";
     $db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass); 
     extract($_POST);
     if (isset($_POST['namesend'])&&isset($_POST['Emailsend'])&&isset($_POST['Gendersend'])&&isset($_POST['mobilesend'])&&isset($_POST['Passwordsend'])) {
     	  $insert=$db->prepare("INSERT INTO html (Name,Email,Phone,password) VALUES (:name,:Email,:phone,:password)");
       $insert->bindparam("name",$namesend);
       $insert->bindparam("Email",$Emailsend);
       $insert->bindparam("phone",$mobilesend);
       $insert->bindparam("password",$Passwordsend);
      if ($insert->execute()) {
      	 echo "string";
      }
      else{
      	echo"no";
      }
     }
?>