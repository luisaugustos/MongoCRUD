<?php

class Model extends DatabaseMongo {

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

  public function update($collectionName, $criterio, $update, $confirm) {
    $collection = $this->database->$collectionName;
    try {
      $collection->update($criterio, $update, array("multiple" => true));
      $num_rows = $collection->find($confirm)->count();
      return (!empty($num_rows) ) ? $num_rows : 0;
    } catch (MongoException $e) {
      return "Erro no update!";
    }
  }

  public function remove($collectionName, $criterio) {
    $collection = $this->database->$collectionName;
    try {
      $collection->remove($criterio, array('w' => true));
      $num_rows = $collection->find($criterio)->count();
      var_dump($num_rows);
      die;
      return ( empty($num_rows) ) ? 1 : 0;
    } catch (MongoException $e) {
      return "Erro ao remover";
    }
  }

}
