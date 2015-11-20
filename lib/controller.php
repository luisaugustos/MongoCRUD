<?php

/**
 * Description of Controller
 *
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Controller {

    public $view;
    protected $directory;


    public function __construct() {
		$this->directory = $this->getShortName();
		if (isset($_POST['posts'])) {
			if (is_string($_POST['posts'])) {
				parse_str($_POST['posts'], $this->posts);
			} else if (is_array($_POST['posts'])) {
				$this->posts = $_POST['posts'];
			}
		} else {
			$this->posts = $_POST;
		}
    }

    public function getView() {
        return $this->view;
    }

    public function getClass() {
        $nameClass = get_class($this);
        return $nameClass;
    }

    public function getContent() {
        $page = VIEW . DS . $this->getViewFolder() . DS . $this->view . '.php';
        return $page;
    }

    public function getModelName() {
        $controller = strtolower((get_class($this))); // buscar o nome do controller
        $ModelName = str_replace("controller", "", $controller);
        $ModelName = ucfirst($ModelName);
        return $ModelName;
    }
    
    /*
     * @return Nome da pasta que esta as views da classe usada.
     */
    
    public function getViewFolder() { 
        $controller = strtolower((get_class($this))); // buscar o nome do controller
        $controller = str_replace("controller", "", $controller);
        return $controller;
    }
    
    /*
     * Retorna o nome base do controller, Ex HomeController retorna "Home"
     */
    public function getShortName() {
		return lcfirst(str_replace('Controller', '', get_class($this)));
	}

    public function index() {
        return $this->retrieve();
    }

}
