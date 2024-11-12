<?php

class Curso {
    private $id_curso;
    private $nome_curso;
    private $sigla;
    public function __construct() {
        ;
    }
    public function __get($param) {
        return $this->$param;
    }
    
    public function __set($param,$value) {
        $this->$param = $value;
    }
    function getId_curso() {
        return $this->id_curso;
    }

    function getNome_curso() {
        return $this->nome_curso;
    }

    function getSigla() {
        return $this->sigla;
    }

    function setId_curso($id_curso): void {
        $this->id_curso = $id_curso;
    }

    function setNome_curso($nome_curso): void {
        $this->nome_curso = $nome_curso;
    }

    function setSigla($sigla): void {
        $this->sigla = $sigla;
    }


}
