<?php
class conn
{
	public function getConnnn()
	{
		$db_host = "localhost";
		$db_name = "productt";
		$db_user = "admin";
		$db_passw = "admin";
		$dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8;";
		try {
			$pdo = new PDO($dsn, $db_user, $db_passw);
			return $pdo;
		} catch (PDOException $ex) {

			$ex->getMessage();
		}
	}
}
