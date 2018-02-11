<?php



class Manager {
	protected function dbconnect() {
		
		try {
			$db= new \PDO('mysql:host=localhost;dbname=blog_MVC;charset=utf8','root','root');
			return $db;
		}
		catch (Exception $e) {
			die($e->getMessage());
		}
		
	}
	
}