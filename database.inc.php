<?php
function pgConnection() {
	$conn = new PDO ("pgsql:host=" + $_ENV['POSTGRES_HOST'] +
	 ";dbname=" + $_ENV['POSTGRES_DB'],
	 $_ENV['POSTGRES_USER'],
	 $_ENV['POSTGRES_PASSWORD'],
	 array(PDO::ATTR_PERSISTENT => true));
    return $conn;
}
?>