<?php

class DatabaseMongo {

    const DBHOST = '127.0.0.1';
    const DBNAME = 'sistemaPortaria';

    public $instance;
    public $connection;
    public $database;

    public function __construct() {
        $connection_string = sprintf('mongodb://%s', DatabaseMongo::DBHOST);
        try {
            $this->connection = new MongoClient($connection_string);
            $this->database = $this->connection->selectDB(DatabaseMongo::DBNAME);
        } catch (MongoConnectionException $e) {
            throw $e;
        }
    }

    public function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new DatabaseMongo();
        }
        return self::$instance;
    }

}
