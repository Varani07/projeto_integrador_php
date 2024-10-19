<?php

class Cronograma {
    private $id_cronograma;
    private $data_inicio;
    private $data_fim;
    private $id_curso;
    private $id_modulo;
    private $id_turma;
    function getId_cronograma() {
        return $this->id_cronograma;
    }

    function getData_inicio() {
        return $this->data_inicio;
    }

    function getData_fim() {
        return $this->data_fim;
    }

    function getId_curso() {
        return $this->id_curso;
    }

    function getId_modulo() {
        return $this->id_modulo;
    }

    function getId_turma() {
        return $this->id_turma;
    }

    function setId_cronograma($id_cronograma): void {
        $this->id_cronograma = $id_cronograma;
    }

    function setData_inicio($data_inicio): void {
        $this->data_inicio = $data_inicio;
    }

    function setData_fim($data_fim): void {
        $this->data_fim = $data_fim;
    }

    function setId_curso($id_curso): void {
        $this->id_curso = $id_curso;
    }

    function setId_modulo($id_modulo): void {
        $this->id_modulo = $id_modulo;
    }

    function setId_turma($id_turma): void {
        $this->id_turma = $id_turma;
    }


}
