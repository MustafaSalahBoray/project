<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change password</title>
</head>
<body>
  
<form method="POST">  <input type="email" name="email">
<button type="submit" name="submit"> Rewrite an email</button></form>
</body>
</html>
<?php
   if (isset($_POST['submit'])) {
   	$username="mostafa";
    $pass="123";
    $db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass);
    $check=$db->prepare("SELECT * FROM login WHERE Email =:Email");
    $check->bindparam("Email",$_POST['email']);
    $check->execute();
   	  if ($check->rowcount()>0) {
   	     
   	  }
   	  else
   	  {
   	  	echo "write wrong Email";
   	  }
   }
 session_start();
   $x=5;
   $y=6;
   $tre=$x+$y; 
   $_SESSION['reult']=$tre;
   echo $_SESSION['reult'];
 ?>