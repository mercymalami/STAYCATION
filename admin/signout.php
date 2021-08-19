<?php
session_start();
$_SESSION=array();
if(session_destroy()){
	header("Location: http://localhost/Staycation/admin.php");
}

?>