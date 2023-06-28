<?php 
$username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass);
if (isset($_POST['login'])) {
   $password=sha1($_POST['password']);
  $login=$db->prepare("SELECT * FROM  login WHERE Email =:Email AND password =:PASS");
  $login->bindparam("Email",$_POST['Email']);
  $login->bindparam("PASS",$password);
  $login->execute();
  if ($login->rowcount()===1) {
    $user=$login->fetchObject();
    if ($user->ACTVATE==="0") {
      session_start();
      echo "string";
      // $_SESSION['Email']=$user->Email;
      // $_SESSION['password']=$user->password;
      // header("location:http://localhost/project/Uploade _Fille.php");
    }
    else{

      echo "found erorr";
    }

    }   else{
    
  }
}
  

   
    

  


 ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body class="Container">
<?php  require_once 'nav.php';?>
<form method="POST" style="margin-top:10%;">
  USERNAME<input  class="form-control"  type="Email" name="Email">
  PASSWORD<input  class="form-control"  type="password" name="password">
  <a  class="btn btn-primary btn-lg"  href="reset.php">change password</a>

  <button class="btn btn-primary btn-lg m-3"type="login" name="login">login</button>


</form>
</body>
</html>