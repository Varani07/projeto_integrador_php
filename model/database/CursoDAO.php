<?php

require_once 'DB.php';

class CursoDAO {
    
    public function cadastrar_curso(Curso $obj) {
        $query = "INSERT INTO cursos (id_curso, nome_curso, sigla) VALUES (null, :pnome_curso, :psigla)";
        $conn = DB::getConnection()->prepare($query);
        $conn->execute(array(':pnome_curso'=>$obj->nome_curso, ':psigla'=>$obj->sigla));
        return $conn->rowCount()>0;
    }
    
}
