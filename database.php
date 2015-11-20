<?php

class DatabaseMongo {
 
	const DBHOST = '127.0.0.1';
	const DBNAME = 'uenf';
 
	private static $instance;
	public $connection;
	public $database;
 
	private function __construct() {
		$connection_string = sprintf('mongodb://%s', DatabaseMongo::DBHOST);
		try {
			$this->connection = new MongoClient($connection_string);
			$this->database = $this->connection->selectDB(DatabaseMongo::DBNAME);
		} catch (MongoConnectionException $e) {
			throw $e;
		}
	}
 
	static public function getInstance() {
		if(!isset(self::$instance)){
			self::$instance = new DatabaseMongo();
		}
		return self::$instance;
	}
 
	public function getCollection($name) {
		return $this->database->selectCollection($name);
	}

}

