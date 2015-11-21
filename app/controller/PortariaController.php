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

    /* Listando as Potarias */
    $p = new Portaria();
    $array = $p->retrieve('registros');

    return $this->view;
  }

  public function inserir() {
    $this->view = 'form';
    return $this->view;
  }

  /*
  * Variavel $this->posts retorna todos os atributos obtidos via post
  */
  public function save() {
    var_dump($this->posts);
    die;
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
