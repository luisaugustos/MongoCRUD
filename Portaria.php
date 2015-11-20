<?php

require_once 'database.php';

/**
 * Description of Portaria
 * CRUD para Portaria
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Portaria {

    public $collection = 'aluno';

    public function setPortaria() {
        $obj = array('nome' => 'Yuri', 'idade' => 69);
        return DatabaseMongo::getInstance()->insert($obj, $this->collection);
    }

    public function getPortaria() {
        $fields = array('nome' => 1, 'idade' => 1);
        //$where = array('nome' => 'Luis');
        $where = array();
        $sort = array('_id' => 1);
        $limit = 9999; // muitosss
        return DatabaseMongo::getInstance()->retrieve($this->collection, $fields, $where, $sort, $limit);
    }

    public function updatePortaria() {
        $where = array('nome' => 'Yuri');
        $update = array('$set' => array('idade' => 30));
        $confirm = array('nome' => 'Yuri', 'idade' => 30);
        return DatabaseMongo::getInstance()->update($this->collection, $where, $update, $confirm);
    }

    public function deletePortaria() {
        
    }
}

$p = new Portaria();
//$p->setPortaria();
$p->updatePortaria();
var_dump($p->getPortaria());
