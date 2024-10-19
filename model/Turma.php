<?php

class Turma {
    private $id_turma;
    private $nome_turma;
    private $ano;
    private $turno;
    private $mod1=0;
    private $mod2=0;
    private $mod3=0;
    private $mod4=0;
    private $curso;
    private $status=1;
    function getId_turma() {
        return $this->id_turma;
    }

    function getNome_turma() {
        return $this->nome_turma;
    }

    function getAno() {
        return $this->ano;
    }

    function getTurno() {
        return $this->turno;
    }

    function getMod1() {
        return $this->mod1;
    }

    function getMod2() {
        return $this->mod2;
    }

    function getMod3() {
        return $this->mod3;
    }

    function getMod4() {
        return $this->mod4;
    }

    function getCurso() {
        return $this->curso;
    }

    function getStatus() {
        return $this->status;
    }

    function setId_turma($id_turma): void {
        $this->id_turma = $id_turma;
    }

    function setNome_turma($nome_turma): void {
        $this->nome_turma = $nome_turma;
    }

    function setAno($ano): void {
        $this->ano = $ano;
    }

    function setTurno($turno): void {
        $this->turno = $turno;
    }

    function setMod1($mod1): void {
        $this->mod1 = $mod1;
    }

    function setMod2($mod2): void {
        $this->mod2 = $mod2;
    }

    function setMod3($mod3): void {
        $this->mod3 = $mod3;
    }

    function setMod4($mod4): void {
        $this->mod4 = $mod4;
    }

    function setCurso($curso): void {
        $this->curso = $curso;
    }

    function setStatus($status): void {
        $this->status = $status;
    }


}
