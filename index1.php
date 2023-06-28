 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>mofide</title>
 </head>
 <body style="background: red;color: white; ">
 	<form  method="POST">
        <label>the price</label>
        <input type="text" name="n1" required>
        <label>the price after discount</label>
        <input type="text" name="n2" optional>
        <button type="Submit" name="Send">Submit</button>
 		
 	</form>
 </body>
 </html>
 <?php 

if (isset($_POST['Send'])) {
   if (is_numeric($_POST['n1'])==false &&is_numeric($_POST['n2'])==false) {
      echo "<h1>please Enter data to field</h1>";
      // code...
   }
   if (is_numeric($_POST['n1'])==true &&is_numeric($_POST['n2'])==true) {
      echo "the price before discount".$_POST['n1']."<br>";
      $result=$_POST['n1']-(100-$_POST['n2']);
      echo "the price after discount is ".$result ."$";

   }
   
}

  ?>
 