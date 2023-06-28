<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header("Access-Control-Allow-Methods: POST");

$username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass);
$cheackEmail=$db->prepare("SELECT * FROM login WHERE Email= :Email");

$cheackEmail->bindparam("Email",$_POST['Email']);
$cheackEmail->execute();
if (isset($_POST['login'])) {
  session_start();
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $date=$_POST['date'];
  $password=sha1($_POST['password']);;
  if ($cheackEmail->rowcount()>0) {
  	echo "Email is orleady";
  }
  else{
  	$adduser=$db->prepare("INSERT INTO login (Name,Email,Data,password) VALUES(:Name,:Email,:Dat,:pass)");
  	$adduser->bindparam(":Name",$Name);
  	$adduser->bindparam(":Email",$Email);
  	$adduser->bindparam(":Dat",$date);
  	$adduser->bindparam(":pass",$password);
  

  	$adduser->execute();
  	
  }
}
if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("location:http://localhost/project/Sighn%20up.php",true);
}
?> 
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
  <input   class="form-control" type="date" name="date"><br>
  <label>password</label>
  <input  class="form-control"  type="password" name="password">
  <button    class="btn btn-outline-success" type="login" name="login" style="width:100%;margin-top: 20px;color:black;">login</button>
  <button    class="btn btn-outline-success" type="logout" name="logout" style="width:100%;margin-top: 20px; color: black;">logout</button>
  



</form>
</body>
</html>
