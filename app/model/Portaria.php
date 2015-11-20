<?php

/**
 * Description of Portaria
 * CRUD para Portaria
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Portaria {

    public $numero;
    public $data;
    public $interessados = array();
    public $conteudo;
    public $status;
    
    public function getNumero() {
        return $this->numero;
    }

    public function getData() {
        return $this->data;
    }

    public function getInteressados() {
        return $this->interessados;
    }

    public function getConteudo() {
        return $this->conteudo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setInteressados($interessados) {
        $this->interessados = $interessados;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

//    public function setPortaria() {
//        $obj = array('nome' => 'Yuri', 'idade' => 69);
//        return DatabaseMongo::getInstance()->insert($obj, $this->collection);
//    }
//
//    public function getPortaria() {
//        $fields = array('nome' => 1, 'idade' => 1);
//        //$where = array('nome' => 'Luis');
//        $where = array();
//        $sort = array('_id' => 1);
//        $limit = 9999; // muitosss
//        return DatabaseMongo::getInstance()->retrieve($this->collection, $fields, $where, $sort, $limit);
//    }
//
//    public function updatePortaria() {
//        $where = array('nome' => 'Yuri');
//        $update = array('$set' => array('idade' => 30));
//        $confirm = array('nome' => 'Yuri', 'idade' => 30);
//        return DatabaseMongo::getInstance()->update($this->collection, $where, $update, $confirm);
//    }
//
//    public function deletePortaria() {
//        
//    }
}
