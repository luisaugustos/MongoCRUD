<?php

/**
 * Description of PortariaController
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class PortariaController extends Controller {
    
    public $collection = 'aluno';
    
    public function index() {
            $this->view = 'retrieve';
            return $this->view;
	}
    
    public function inserir() {
        $this->view = 'form';
        return $this->view;
	}
    
    public function save() {
        $p = new Portaria();
//        $p->setNumero($numero);
//        $p->setData($data);
//        $p->setInteressados($interessados);
//        $p->setConteudo($conteudo);
//        $p->setStatus($status);
        var_dump($p);
        die;
        DatabaseMongo::getInstance()->insert($p, $this->collection);
    }

}
