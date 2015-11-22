<?php

/**
* Description of PortariaController
*
* @author Luis Augusto Silva - luis.bc@hotmail.com
*/
class PortariaController extends Controller {

  public $collection = 'registros';

  public function index() {
    $this->view = 'retrieve';

    /* Listando as Potarias */
    $p = new Portaria();
    $this->resultados = $p->retrieve($this->collection);

  }

  public function deletar($p)
  {
    //var_dump($p);
    //die;
    $p = new Portaria();
    if($p->remove($this->collection, array('_id' => $p)))
    {
      header('Location: ' . BASE_URL . 'portaria');
    }

  }

  public function inserir() {
    $this->view = 'form';
    return $this->view;
  }

  /*
  * Variavel $this->posts retorna todos os atributos obtidos via post
  */
  public function save() {

    //var_dump($this->post);
    //die;

    $p = new Portaria();
    $p->setIdentificacao($_POST['identificacao']);
    $p->setNumero($_POST['identificacao']);
    $p->setData($_POST['data']);
    $p->setInteressados($_POST['interessados']);
    $p->setConteudo($_POST['conteudo']);
    $p->setStatus($_POST['status']);

    //var_dump($p);
    //die;

    $p->insert($p, $this->collection);
    header('Location: ' . BASE_URL . 'portaria');
  }

}
