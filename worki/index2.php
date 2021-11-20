<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
?>

<?php
	include_once 'include/head.php';
	include_once 'include/menu.php';
	include_once 'include/index2.php';
?>
