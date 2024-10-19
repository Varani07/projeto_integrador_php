<?php

class Modulo {
    private $id_modulo;
    private $nome_modulo;
    private $curso;
    function getId_modulo() {
        return $this->id_modulo;
    }

    function getNome_modulo() {
        return $this->nome_modulo;
    }

    function getCurso() {
        return $this->curso;
    }

    function setId_modulo($id_modulo): void {
        $this->id_modulo = $id_modulo;
    }

    function setNome_modulo($nome_modulo): void {
        $this->nome_modulo = $nome_modulo;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


}
