
	<link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
	<script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script> 
    
	<title>HTML FORM</title>  
	
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add user
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">
         <form method="POST"style="width: 50%;margin: auto;" > 
    <label  for="completeName">Name</label>
  <input   id="completeName" class="form-control" type="text" name="Name"><br>
  <label for="completeEmail">Email</label>
  <input  class="form-control"  type="Email" name="Email"  id="completeEmail" ><br>
        <label for="completemobile" >mobile</label>
  <input  id="completemobile"class="form-control" type="text" name="mobile"><br>
  <label for="completePassword">password</label>
  <input  id="completePassword"  class="form-control"  type="password" name="password">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="adduser()">Submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></form>
        
      </div>
    </div>
  </div>
</div>

<center>

  <div class="container">
     <h1> crud</h1> 
     <br><br>  
     <table class="table ">
  <thead class="table-primary">
    <tr class="text-center">
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
   <tbody>
   	<?php 
$username="mostafa";
     $pass="123";
     $db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass); 
     $show=$db->prepare("SELECT * FROM html");
     $show->execute();
     $x=1;
     foreach ($show as $key ) {
     	
    
?>
   	<tr class="text-center">
   		   <th scope="row"><?php echo $x;?> </th>
   		<td><?php  echo $key['Name'];?></td>
   		<td><?php  echo $key['Email'];?></td>
   		<td><?php  echo $key['Gender'];?></td>
   		<td><?php  echo $key['Phone'];?></td>
   		<td>
   			<form method="POST">
   				<a href="crudedite.php?id=<?php echo  $key['id']?> " class="btn btn-primary">Edite</a>
          <button type="submit" class="btn btn-danger"value="<?php echo $key['id'];?>"name="remove">Delete</button>
   			</form>

   		</td>
     
<?php $x++;}?>
   	</tr>
   </tbody>




</table></div></center>
<?php 

 if (isset($_POST['remove'])) {
    $del=$db->prepare("DELETE FROM html WHERE id =:id");
    $del->bindparam(":id",$_POST['remove']);
    $del->execute();
 }



?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script type="text/javascript">
    function adduser(){
          var  nameadd =$('#completName').val();
        var Emailadd =$('#completeEmail').val();
       var  mobileadd =$('#completemobile').val();
       var Passwordadd =$('#completePassword').val();
       $.ajax({
               url:"insercurd.php",
               type:'POST',
               data:{
                   namesend:nameadd,
                   Emailsend:Emailadd,
                   mobilesend:mobileadd,
                   Passwordsend:Passwordadd
               },
        success :function(data,stuts){
            console.log(stuts);
        }
       });
    }
</script>