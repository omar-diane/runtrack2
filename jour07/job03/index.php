<?php

session_start();
?>

<html>
<body>
	<form action="" method="post">Prenom:
		<input type="text" value="prenom" name="prenom">
	</form>
	<form action="" method="get">=>
		<input type="submit" value="reset" name="reset">
	</form>
</body>
</html>

<?php

$_SESSION["name"][] = $_POST["prenom"];

foreach($_SESSION["name"] as $v){ 
	echo $v."<br/>";
}

if (isset($_GET["reset"])){ 
    session_destroy();
	header('Location: index.php');
}
?>