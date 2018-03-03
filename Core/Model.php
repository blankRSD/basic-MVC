<?php 

namespace Core;

use PDO;
use App\Config;

abstract class Model
{
	protected static function getDB()
	{
		static $db = null;
		if ($db === null) 
		{
			$host = Config::DB_HOST;
			$dbname = Config::DB_NAME;
			$username = Config::DB_USER;
			$password = Config::DB_PASSWORD;

			try
			{
				$db = new PDO("mysql:host=$host;dbname=$dbname;",$username,$password);
				$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				echo $e->getMessage();
			}
		}
		return $db;
	}
	
}
?>