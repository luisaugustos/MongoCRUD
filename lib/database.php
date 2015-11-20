<?php

class DatabaseMongo {

    const DBHOST = '127.0.0.1';
    const DBNAME = 'sistemaPortaria';

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
        if (!isset(self::$instance)) {
            self::$instance = new DatabaseMongo();
        }
        return self::$instance;
    }

    public function retrieve($collectionName, $fields = array(), $where = array(), $sort = array(), $limit = 0) {
        $cur = $this->database->$collectionName->find($where, $fields)->limit($limit);
        $cur->sort($sort);

        $this->docs = null;
        while ($docs = $cur->getNext()) {
            $this->docs[] = $docs;
        }
        return $this->docs;
    }

    public function insert($obj, $collectionName) {
         $collection = $this->database->$collectionName;
        try {
            $collection->insert($obj, array('w' => true));
            return (!empty($obj['_id']) ) ? 1 : 0;
        } catch (MongoException $e) {
            return "Erro no insert";
        }
    }

    public function update($collectionName, $criteria, $update, $confirm) {
        $collection = $this->database->$collectionName;
        try {
            $collection->update($criteria, $update, array("multiple" => true));
            $num_rows = $collection->find($confirm)->count();
            return (!empty($num_rows) ) ? $num_rows : 0;
        } catch (MongoException $e) {
            return "Erro no update!";
        }
    }

    public function remove($collectionName, $criteria) {
        $collection = $this->database->$collectionName;
        try {
            $collection->remove($criteria);
            $num_rows = $collection->find($criteria)->count();
            return ( empty($num_rows) ) ? 1 : 0;
        } catch (MongoException $e) {
            return "Erro ao remover";
        }
    }

}
