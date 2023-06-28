<form method="POST" enctype="multipart/form-data">
            <img class="img-fluid rounded-3" src="img ex/imgonline-com-ua-ReplaceColor-DBJEGeisUnYges.jpg" alt="" />
     		 <div>
     		
     			
     		
     			<br>
     			<input type="file" name="image">
                <input type="text" name="text">
     			
     		
     		 	<button type="submit" name="submit" class="btn btn-danger">Submit</button>
     			 
     		</form>
            <?php
              
    if (isset($_POST['submit'])) {
         $username="root";
  $pass="";
  $db=new PDO("mysql:host=Localhost;dbname=db_my_trainer;Charset=utf8;",$username,$pass); 
   
    
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $Insert=$db->prepare("INSERT INTO cardio (image,titel) VALUES(:image,:titel)");
    $Insert->bindparam("image",$image);
    $Insert->bindparam("titel",$_POST['text']);
    
    if ($Insert->execute()) {
        move_uploaded_file($image_tmp,"images/$image");
            }}

?>



        ?>