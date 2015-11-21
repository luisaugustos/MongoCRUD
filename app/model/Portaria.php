<?php

/**
 * Description of Portaria
 * CRUD para Portaria
 * @author Luis Augusto Silva - luis.bc@hotmail.com
 */
class Portaria extends Model {

    public $identificacao;
    public $numero;
    public $data;
    public $interessados = array();
    public $conteudo;
    public $status;

    public function getIdentificacao() {
        return $this->identificacao;
    }

    public function setIdentificacao($identificacao) {
        $this->identificacao = $identificacao;
    }

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

}
