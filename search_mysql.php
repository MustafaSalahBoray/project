<form method="GET">
	<input type="search" name="search" style="color: red;">
	<button type="submit" name="submit">search</button>

</form>
<?php  
$username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=companey;Charset=utf8;",$username,$pass);
if (isset($_GET['submit'])) {
	$serch=$db->prepare("SELECT * FROM emploey WHERE Name LIKE :value OR Email LIKE :value");
	$serch_valu="%".$_GET['search']."%";
	$serch->bindparam("value",$serch_valu);
	$serch->execute();
	foreach ($serch as $value) {
    echo "<h1>".$value["Name"]."</h1>";

    echo "<p>".$value["Email"]."</p>";
    
	}



?>