


<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: POST");
         $data=file_get_contents("php://input");
         $data=json_decode($data);
       
           echo $_POST['Name1']+$_POST['select'];
         

  
   
  ?>
   
 

  
