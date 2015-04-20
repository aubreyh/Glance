<?php
$action = $_REQUEST['action'];
$description = $_REQUEST['description'];

include "getDB.php";

try {
	$dbh = getDatabaseHandle();
} catch(PDOException $e) {
  echo $e->getMessage();
}

if($dbh){
	$data = array('action' => $action, 'description' => $description);
	$sth = $dbh->prepare("INSERT INTO question (action, description) value (:action, :description)");
	$sth->execute($data);

	echo $dbh->lastInsertId('setupId');  
}

?>