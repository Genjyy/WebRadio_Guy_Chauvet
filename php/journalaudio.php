<?php

$sql = "Select * from Article";
$dbh = new PDO('mysql:host=127.0.0.1;dbname=web_radio','chefWR','mdpwebradio');
$res = $dbh ->query($sql);
$dbh = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
    <script src="../js/loader.js"></script>
    <title>Journal</title>
</head>

<body>

	<?php require("header.php");?>
    <main>

        <!--setup page Journal -->
        <h1 class="title" style="margin-top: 6%">LE JOURNAL</h1>
        <hr size=5 width="93%" color=black>

	<?php
	while($resu = $res->fetch(PDO::FETCH_ASSOC)) {
	extract($resu);
	echo "
        	<a href=\"article.php?id=".$resu["id"]. "\" class=\"j-box border-1\">
            		<img src=\"../images/test.png\" alt=\"Image\">
            		<article> 
				<h2>".$resu["titre"]."</h2>
                		<p>".$resu["description"]."</p>
            		</article>
		</a>";
		}?>
    </main>

	<?php require("footer.php");?>
</body>

</html>
