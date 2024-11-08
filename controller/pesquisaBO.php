<?php

    include_once '../model/database/UsuarioDAO.php';

    if (isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['tipo']) && !empty($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $id = $_POST['id'];

        switch ($tipo){
            case 'usuario':
                if (isset($_POST['tipo_pesquisa']) && !empty($_POST['tipo_pesquisa']) && isset($_POST['txtusername']) && !empty($_POST['txtusername'])){
                    $pesquisa = $_POST['tipo_pesquisa'];
                    $conteudo = $_POST['txtusername'];

                    switch ($pesquisa){
                        case 'default':
                            ?>
                            <script type="text/javascript">
                                alert('Escolha o tipo de pesquisa a ser realizada!');
                                history.go(-1);
                            </script>
                            <?php
                            break;
                        case 'id':
                            $dao = new UsuarioDAO();
                            $resultado = $dao->get_info($conteudo);
                            header('location: ../pages/gerenciar_usuario.php?id_adm='.$id.'&pesquisa='.$resultado);
                            break;
                        case 'nome':
                            $dao = new UsuarioDAO();
                            $resultado = $dao->get_info_by_nome($conteudo);
                            header('location: ../pages/gerenciar_usuario.php?id_adm='.$id.'&pesquisa='.$resultado);
                            break;
                    }
                }
                break;
        }
    }
?>