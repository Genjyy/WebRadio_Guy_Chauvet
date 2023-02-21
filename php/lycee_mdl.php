<?php
$sql="Select * from Equipe";
$dbh=new PDO('mysql:host=127.0.0.1;dbname=web_radio','chefWR','mdpwebradio');
$res=$dbh->query($sql);
$dbh=null;
$resu=$res->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/loader.js"></script>
    <title>Lycee_MDL</title>
</head>

<body>

	<?php require("header.php");?>	
    <main>
         <!-- ly-BOX Container -->
        <div class="ly-box" style="margin-top: 2%">
            <h6>Le Lycée Guy Chauvet</h6>

            <img id="img1" src="../images/lycee.PNG" alt="logo_lyceée">
            <img id="img2" class="border-3" src="../images/test.png" alt="Image">
                
            <p><br>
		<?php echo $res["description"]; ?>
            </p>
        </div>
        <!-- setup MDL container-->
        <div class="MDL-box">
            <h6>La Maison des lycéens</h6>
            <p id="p1">
           	<?php echo $resu["description"]; ?>
		 </p>
            <div>
                <img id="img0" src="../images/mdl.PNG" alt="logo_lyceée">
                <img id="img1" class="border-2" src="../images/test.png" alt="Image">
                <img id="img2" class="border-2" src="../images/test.png" alt="Image">
            </div>
            <p id="p2">
 		<?php echo $res["description"]; ?>           
		 </p>
        </div>
    </main>

	<?php require("footer.php");?>
	
</body>
