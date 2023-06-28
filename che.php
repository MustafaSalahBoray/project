<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: POST");

$username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=my_trainer;Charset=utf8;",$username,$pass); 
 $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$method=$_SERVER['REQUEST_METHOD'];
 switch ($method) {

    case 'POST':
    $data=file_get_contents("php://input");
    $data=json_decode($data);
      $adduser=$db->prepare("INSERT INTO login (Name , Email  , password  , Address ,Phone , Age ,Height , CurrentWeight , GoalWeight ) VALUES (:Name, :Email , :password  ,:Address ,:Phone , :Age ,:Height , :CurrentWeight , :GoalWeight) ") ;
      $adduser->bindparam(":Name",$data->Name, PDO::PARAM_STR);
       $adduser->bindparam(":Email address",$data->Email , PDO::PARAM_STR);
      $adduser->bindparam(":password",$data->password, PDO::PARAM_STR);
      $adduser->bindparam(":Address",$data->Address, PDO::PARAM_STR);
      $adduser->bindparam(":Phone",$data->Phone, PDO::PARAM_STR);
      $adduser->bindparam(":Age",$data->Age, PDO::PARAM_STR);
       $adduser->bindparam(":Height",$data->Height, PDO::PARAM_STR);
      $adduser->bindparam(":CurrentWeight",$data->CurrentWeight, PDO::PARAM_STR);
      $adduser->bindparam(":GoalWeight",$data->GoalWeight, PDO::PARAM_STR);
    // $adduser->bindparam(":id",$data->id,PDO::PARAM_STR);
     if ($adduser->execute()) {

                print_r(json_encode(["msg"=>"Sucess"]));
               }
    else{
                print_r(json_encode(["msg"=>"error"]));}
      break;
    
    default:
      // code...
      break;
  }
   
 

  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body class="Container" style="background-image: url('../project/images/trainer/background-login.jpg'); widows: 50%;">
  <?php  require_once 'nav.php';?>
<form method="POST"style="width: 50%;margin: auto;" > 
  <label>Name</label>
  <input  class="form-control" type="text" name="Name"><br>
  <label>Email</label>
  <input  class="form-control"  type="Email" name="Email"><br>
  <label>date</label>
  <input   class="form-control" type="date" name="Age"><br>
  <label>password</label>
  <input  class="form-control"  type="password" name="password">
  <button    class="btn btn-outline-success" type="login" name="login" style="width:100%;margin-top: 20px;color:black;">login</button>
  <button    class="btn btn-outline-success" type="logout" name="logout" style="width:100%;margin-top: 20px; color: black;">logout</button>
  



</form>
</body>
</html>
S