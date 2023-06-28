<?php
 $username="mostafa";
  $pass="123";
  $db=new PDO("mysql:host=Localhost;dbname=my_trainer;Charset=utf8;",$username,$pass); 
  $result=5;
  $number=$db->prepare("SELECT * FROM  back ");
  $number->execute();
   $number=$number->rowcount(); 



   if (!isset($_GET['page'])) {
       $page=1;
   }
   elseif (isset($_GET['page'])) {
     $page=$_GET['page'];

   }
    $totalPage=ceil($number/$result);

   $resultshow=$db->prepare("SELECT * FROM back LIMIT " . $result . " OFFSET " .($page-1)*$result );
   $resultshow->execute();
  
   foreach($resultshow AS $key){
    echo $key['titel'];
   }
       if ($page>1) {
        // code...
              echo "<a class='btn btn-danger'  href='pagination.php?page=".($page-1)."'>privios</a>";
    }
    echo "<br> <br>";
   for ($count=1; $count <=$totalPage ; $count++) { 


      echo "<a class='btn btn-primary' style='color:black'; href='advcrud.php?page=".$count."'>".$count."</a>";
   }
       if ($count>$page) {
        // code...
              echo "<a class='btn btn-danger'  href='advcrud.php?page=".($page+1)."'>Next</a>";
    }
?><link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
    <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script> 