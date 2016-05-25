<?php
session_start();
if (isset($_SESSION['user'])) {
	$sessie = $_SESSION ['user'];
	echo "logged in as $sessie";
}
else {
	echo "not logged in";
}
?>