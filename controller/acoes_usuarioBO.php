<?php 
    include_once '../model/Curso.php';
    include_once '../model/database';
    include_once '../model/database/CursoDAO.php';

    if (isset($_POST['acao']) && !empty($_POST['acao']) && 
    isset($_POST['objeto']) && !empty($_POST['objeto']) && 
    isset($_POST['id']) && !empty($_POST['id'])){
        $acao = $_POST['acao'];
        $objeto = $_POST['objeto'];
        $id = $_POST['id'];

        switch ($acao){
            case 'inserir':
                if ($objeto == 'curso'){
                    if(isset($_POST['nome_curso']) && !empty($_POST['nome_curso']) && 
                    isset($_POST['sigla']) && !empty($_POST['sigla'])){
                        $obj = new Curso();
                        $obj->nome_curso = $_POST['nome_curso'];
                        $obj->sigla = $_POST['sigla'];
                        $dao = new CursoDAO();

                        if ($dao->cadastrar_curso($obj)){
                            ?>
                            <script type="text/javascript">
                                alert('Curso cadastrado com sucesso.');
                                history.go(-1);
                            </script>
                            <?php
                        }else{
                            ?>
                            <script type="text/javascript">
                                alert('Erro ao cadastrar curso.');
                                history.go(-1);
                            </script>
                            <?php
                        }
                    }
                }
                break;
            case 'alterar':
                break;
            case 'deletar':
                break;
        }
    }

?>