<?php

include_once '../util/Validacoes.php';
include_once '../model/database/UsuarioDAO.php';
include_once '../model/Usuario.php';

if (isset($_REQUEST['acao']) && isset($_REQUEST['id']) && isset($_REQUEST['tipo'])){
    $id = $_REQUEST['id'];
    $acao = $_REQUEST['acao'];
    $tipo = $_REQUEST['tipo'];
    
    switch ($acao) {
        case 'alterar':
            if($tipo == 'usuario'){
                if(isset($_POST['txtusername']) && !empty($_POST['txtusername']) && isset($_POST['txtcpf']) && !empty($_POST['txtcpf']) && 
                        isset($_POST['txtemail']) && !empty($_POST['txtemail']) && isset($_POST['txtpassword']) && !empty($_POST['txtpassword']) && 
                        isset($_POST['txtconfirm_password']) && !empty($_POST['txtconfirm_password'])){
                    $usuario = new Usuario();
                        
                    $usuario->id_usuario = $id;
                    $usuario->login = $_POST['txtusername'];
                    $usuario->cpf = $_POST['txtcpf'];
                    $usuario->email = $_POST['txtemail'];
                    $usuario->senha = $_POST['txtpassword'];
                    $senhaC = $_POST['txtconfirm_password'];
                    
                    if($usuario->senha != $senhaC){
                        ?>
                        <script type="text/javascript">
                            alert('A senha deve ser a mesma em ambos os campos.');
                            history.go(-1);
                        </script>
                        <?php
                    }else{
                        if(!Validacoes::validaSenha($usuario->senha)){
                            ?>
                            <script type="text/javascript">
                                alert('Senha inválida.');
                                history.go(-1);
                            </script>
                            <?php
                        }else{
                            if(Validacoes::validaCPF($usuario->cpf)){
                                ?>
                                <script type="text/javascript">
                                    alert('CPF inválido.');
                                    history.go(-1);
                                </script>
                                <?php
                            }else{
                                if(!Validacoes::validaEmail($usuario->email)){
                                    ?>
                                    <script type="text/javascript">
                                        alert('E-mail inválido.');
                                        history.go(-1);
                                    </script>
                                    <?php
                                }else{
                                    $dao = new UsuarioDAO();
                                    if($dao->update_usuario_all($usuario)){
                                        ?>
                                        <script type="text/javascript">
                                            alert('Dados do usuário alterados com sucesso!.');
                                            history.go(-1);
                                        </script>
                                        <?php
                                    }else{
                                        ?>
                                        <script type="text/javascript">
                                            alert('Erro ao alterar dados do usuário.');
                                            history.go(-1);
                                        </script>
                                        <?php
                                    }
                                }
                            }
                        }
                    }
                    
                }else{
                    if(isset($_POST['txtusername']) && !empty($_POST['txtusername']) && isset($_POST['txtcpf']) && !empty($_POST['txtcpf']) && 
                        isset($_POST['txtemail']) && !empty($_POST['txtemail'])){
                        $usuario = new Usuario();
                        
                        $usuario->id_usuario = $id;
                        $usuario->login = $_POST['txtusername'];
                        $usuario->cpf = $_POST['txtcpf'];
                        $usuario->email = $_POST['txtemail'];
                        
                        if(Validacoes::validaCPF($usuario->cpf)){
                                ?>
                                <script type="text/javascript">
                                    alert('CPF inválido.');
                                    history.go(-1);
                                </script>
                                <?php
                            }else{
                                if(!Validacoes::validaEmail($usuario->email)){
                                    ?>
                                    <script type="text/javascript">
                                        alert('E-mail inválido.');
                                        history.go(-1);
                                    </script>
                                    <?php
                                }else{
                                    $dao = new UsuarioDAO();
                                    if($dao->update_usuario_basico($usuario)){
                                        ?>
                                        <script type="text/javascript">
                                            alert('Dados do usuário alterados com sucesso!.');
                                            history.go(-1);
                                        </script>
                                        <?php
                                    }else{
                                        ?>
                                        <script type="text/javascript">
                                            alert('Erro ao alterar dados do usuário.');
                                            history.go(-1);
                                        </script>
                                        <?php
                                    }
                                }
                            }
                    }else{
                        
                    }
                }
            }else{
                if($tipo == 'adm'){
                    if(isset($_POST['txtusername']) && !empty($_POST['txtusername']) && isset($_POST['txtpassword']) && !empty($_POST['txtpassword']) && isset($_POST['txtconfirm_password']) && !empty($_POST['txtconfirm_password'])){
                        
                    }else{
                        if(isset($_POST['txtusername']) && !empty($_POST['txtusername'])){
                            
                        }
                    }
                }
            }
            break;

        default:
            break;
    }
}
?>

