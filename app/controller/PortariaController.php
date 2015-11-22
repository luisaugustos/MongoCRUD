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

    public function deletar($p) {
        //var_dump($p);
        //die;

        $portaria = new Portaria();
        if ($portaria->remove($this->collection, array('_id' => new MongoId($p)))) {
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

        $portariaAdd = array(
            'identificacao' => $_POST['identificacao'],
            'numero' => $_POST['numero'],
            'data' => $_POST['data'],
            'interessados' => $_POST['interessados'],
            'conteudo' => $_POST['conteudo'],
            'status' => $_POST['status'],
        );

        //var_dump($p);
        //die;

        if ($p->insert($portariaAdd, $this->collection)) {
            header('Location: ' . BASE_URL . 'portaria');
        }
    }

}
