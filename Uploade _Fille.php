<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script>var json={"name":"mostafa"};console.log(json.name);
         var parse=JSON.Parse(json);
         console.log(parse);
</script>
</head>
<body>
  <form method="POST">
  <input type="text" name="text">
  <button type="submit" name="Send">submit</button></form>
  <?php  
    session_start();

  $username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass);
if (isset($_POST['Send'])) {
  $adduser=$db->prepare("INSERT INTO  to_emploey (textt , Emploey_id) VALUES(:textt,:idd)");
  $adduser->bindparam("textt",$_POST['text']);
  $user=$_SESSION['user']->ID;
   $adduser->bindparam("idd",$user);

}
   





    if ($_SESSION['Email']==="amr@gmail.com") {
       echo '<nav class="navbar navbar-light bg-light" width="100%" height="200">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../project/images/team/team1.webp" alt="" width="30" height="24" class="d-inline-block align-text-top">
      
    </a>
  </div>
</nav>'; 
    }
 elseif ($_SESSION['Email']==="ms@gmail.com") {
      echo '<nav class="navbar navbar-light bg-light" width="100%" height="200">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../project/images/team/team2.webp" alt="" width="30" height="24" class="d-inline-block align-text-top">
      
    </a>
  </div>
</nav>'; 
 }
 elseif($_SESSION['Email']==="Ebraim@gmail.com"){

      echo '<nav class="navbar navbar-light bg-light" width="100%" height="200">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../project/images/team/team3.webp" alt="" width="30" height="24" class="d-inline-block align-text-top">
      
    </a>
  </div>
</nav>'; 

 }
 
   

    
  

  ?>
</body>
</html>
