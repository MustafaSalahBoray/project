<form method="POST"  enctype="multipart/form-data">
<input type="file" name="n"multiple>

<button type="submit" name="Send">submit</button>
</form>
<?php 
    if (isset($_POST['Send'])) {
    	 $username="root";
     $pass="";
     $db=new PDO("mysql:host=Localhost;dbname=janut;Charset=utf8;",$username,$pass);
       $image=$_FILES['n']['name'];
       $imagetmp=$_FILES['n']['tmp_name'];
      move_uploaded_file($imagetmp,"images/$image");
     $inset=$db->prepare("INSERT INTO place (images) VALUES(:images)");
     $inset->bindparam("images",$image);
     $inset->execute();
     $show=$db->prepare("SELECT * FROM place");
     $show->execute();
     foreach($show as $key){
        $id=$key['id'];
        $inet=$db->prepare("INSERT INTO image(id,image) VALUES (:id,:image) ");
         $inet->bindparam("image",$image);
       $inset->bindparam("id",$id);
     $inet->execute();
     }
    }
 

?>