<?php

session_start();

?>

<html>
<body>
	<form action="#" method="get">=>
		<input type="submit" value="reset" name="reset">
	</form>
</body>
</html>

<?php

if (!isset( $_SESSION['nbvisites'] ) ) {
$_SESSION['nbvisites']=0;}
else{ 
$_SESSION['nbvisites']++;}

echo $_SESSION['nbvisites'];

if(isset($_GET['reset'])){
	session_destroy();
	header('Location: index.php');
}
?>