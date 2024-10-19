<?php

class UnidadeCurricular {
    private $id_uc;
    private $nome_uc;
    private $carga_horaria;
    private $modulo;
    private $curso;
    
    function getId_uc() {
        return $this->id_uc;
    }

    function getNome_uc() {
        return $this->nome_uc;
    }

    function getCarga_horaria() {
        return $this->carga_horaria;
    }

    function getModulo() {
        return $this->modulo;
    }

    function getCurso() {
        return $this->curso;
    }

    function setId_uc($id_uc): void {
        $this->id_uc = $id_uc;
    }

    function setNome_uc($nome_uc): void {
        $this->nome_uc = $nome_uc;
    }

    function setCarga_horaria($carga_horaria): void {
        $this->carga_horaria = $carga_horaria;
    }

    function setModulo($modulo): void {
        $this->modulo = $modulo;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }


}
