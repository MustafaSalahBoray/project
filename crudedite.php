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
<body style="background-color:wheat;" > 



 <?php
  if (isset($_GET['id'])) {
       
    $username="mostafa";
     $pass="123";
     $db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass); 
     $show=$db->prepare("SELECT * FROM html WHERE id=:id");
     $show->bindparam("id",$_GET['id']);
     $show->execute();
     foreach ($show as $key ) {
    

 ?>

	<h1 style="text-align:center;">HTML FORM</h1>
  <form method="POST"style="width: 50%;margin: auto;" > 
	<label >Name</label>
  <input  class="form-control" type="text" name="Name" value="<?php echo $key['Name'];?>"><br>
  <label>Email</label>
  <input  class="form-control"  type="Email" name="Email" value="<?php echo $key['Email'];?>"><br>
  <label class="form-check">Gender</label><br>
   <input  class="form-check-input" type="radio" name="gender" style="display: block;" value="male">male<br>
    <input  class="form-check-input"  type="radio" name="gender" style="display: block;"value="fmale">famale<br>
     <input  class="form-check-input"  type="radio" name="gender" style="display: block;"value="fmale">other<br>
     	<label >mobile</label>
  <input  class="form-control" type="text" name="mobile" value="<?php echo $key['Phone'];?>"><br>
  <label>password</label>
  <input  class="form-control"  type="password" name="password" value="<?php echo $key['Password'];?>">
  <button    class="btn btn-success" type="submit" name="login" value="<?php echo $key['id'];?>" style="width:100%;margin-top: 20px;color:black;">login</button>
   <?php }}?>
 </form>
</body>

</html>
<?php 
$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['mobile'];
$pass=$_POST['password'];
if (isset($_POST['login'])) {
    $update=$db->prepare("UPDATE html SET Name=:Name , Email=:Email , Phone=:phone,Password=:password WHERE id=:id");
    $update->bindparam("Name",$name);
    $update->bindparam("Email",$email);
   // $update->bindparam("gender",$_POST['gender']);
    $update->bindparam("phone",$phone);
    $update->bindparam("password",$pass);
    $update->bindparam("id",$_POST['login']);
   // $update->execute();
    if($update->execute()){

        echo "string";
    }
    else{

        echo "no";
    }
}



?>