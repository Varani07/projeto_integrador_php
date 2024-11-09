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

                    if ($pesquisa == 'default'){
                        ?>
                        <script type="text/javascript">
                            alert('Escolha o tipo de pesquisa a ser realizada.');
                        </script>
                        <?php
                        header('location: ../pages/gerenciar_usuario.php?id_adm='.$id);
                    }else{
                        header('location: ../pages/gerenciar_usuario.php?id_adm='.$id.'&conteudo='.$conteudo.'&tipo='.$pesquisa);
                    }
                }
                break;
        }
    }
?>