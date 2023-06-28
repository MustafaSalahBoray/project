<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
	<script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
	<title>HTML FORM</title>
</head>
<body style="background-color: yellowgreen;"> 
	<h1 style="text-align:center;">HTML FORM</h1>
  <form method="POST"style="width: 50%;margin: auto;" > 
	<label >Name</label>
  <input  class="form-control" type="text" name="Name"><br>
  <label>Email</label>
  <input  class="form-control"  type="Email" name="Email"><br>
  <label class="form-check">Gender</label><br>
   <input  class="form-check-input" type="radio" name="gender" style="display: block;" value="male">male<br>
    <input  class="form-check-input"  type="radio" name="gender" style="display: block;"value="fmale">famale<br>
     <input  class="form-check-input"  type="radio" name="gender" style="display: block;"value="fmale">other<br>
     	<label >mobile</label>
  <input  class="form-control" type="text" name="mobile"><br>
  <label>password</label>
  <input  class="form-control"  type="password" name="password">
  <button    class="btn btn-success" type="login" name="login" style="width:100%;margin-top: 20px;color:black;">login</button>
  

</body>

</html>
<?php 

    $username="mostafa";
     $pass="123";
     $db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass); 
     if (isset($_POST['login'])) {
       $insert=$db->prepare("INSERT INTO html (Name,Email,Phone,password) VALUES (:name,:Email,:phone,:password)");
       $insert->bindparam("name",$_POST['Name']);
       $insert->bindparam("Email",$_POST['Email']);
    
       $insert->bindparam("phone",$_POST['mobile']);
       $insert->bindparam("password",$_POST['password']);
       if ($insert->execute()) {
        header("location:http://localhost/project/");
       }

     }

       


?>