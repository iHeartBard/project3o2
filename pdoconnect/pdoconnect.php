<?php  
// try catch for database connection
	try {
    	$pdoConnect = new PDO('mysql:host=angelosantoniou.com.mysql;dbname=angelosantoniou_com;charset=utf8','angelosantoniou_com','PXXkSYzu');
    	// $pdoConnect = new PDO('mysql:host=localhost;dbname=videos_db;charset=utf8','root','');
    	// webserver database and localhost database connection 
	} 
	catch (PDOException $e) {
    	echo $e->getMessage();
    	exit();
    	// if database connection is not successful, display error
	}
?>