<?php 
$username="root";
$pass="";
$db=new PDO("mysql:host=Localhost;dbname=db_my_trainer;Charset=utf8;",$username,$pass);
// $msg="$$";
// $select=$db->prepare("SELECT * FROM product");
// $select->execute();
// $select=$select->fetchAll(PDO::FETCH_ASSOC);
	
$Upd=$db->prepare("UPDATE  calor3500 SET paths=CONCAT('http://mytrainer-001-site1.atempurl.com/img_meals/','',image)");
// $Upd=$db->prepare("UPDATE product  t1 JOIN product t2 ON t1.id=t2.id SET t1.Updatee=t2.Name ");
 if ($Upd->execute()) {
 	// code...
 }
 else
 {
 	echo "string";
 }
// $id=1;
                                // $Update=$db->prepare("INSERT INTO calor1300(Name,quantite,Calories,Timess,Days,image) SELECT Type1,quan1 ,calo1,timep,Days,image1 FROM calories1300 WHERE timep='After Dinner' AND Days='Day2' ");
                                   // $Update=$db->prepare("INSERT INTO calor1300 (Name,quantite,Calories,Timess,Days,image) SELECT Type2,quan2 ,calo2,timep,Days,image2 FROM calories1300 WHERE timep='Dinner' AND Days='Day2' ");
                                     // $Update=$db->prepare("INSERT INTO calor1300 (Name,quantite,Calories,Timess,Days,image) SELECT Type3,quan3 ,calo3,timep,Days ,image3 FROM calories1300 WHERE timep='Dinner' AND Days='Day2'");
                                // $Update=$db->prepare("INSERT INTO calor1300 (Name,quantite,Calories,Timess,Days,image) SELECT Type4,quan4 ,calo4,timep,Days,image4 FROM calories1300 WHERE timep='Lunch' AND Days='Day2' ");
// if ($Update->execute()) {
//     // code...
// }
// else
// {
//     echo "string";
// }

?>