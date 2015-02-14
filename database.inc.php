<?php
function pgConnection() {
	$conn = new PDO("pgsql:host=" . $_SERVER['POSTGRES_HOST'] .
		";port=" . $_SERVER['POSTGRES_PORT'] .
		";dbname=" . $_SERVER['POSTGRES_DB'],
		$_SERVER['POSTGRES_USER'],
		$_SERVER['POSTGRES_PASSWORD']
	);
    return $conn;
}
?>
