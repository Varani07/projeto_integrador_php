<?php

include_once '../util/Validacoes.php';
include_once '../model/database/UsuarioDAO.php';

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
                    $nome = $_POST['txtusername'];
                    $cpf = $_POST['txtcpf'];
                    $email = $_POST['txtemail'];
                    $senha = $_POST['txtpassword'];
                    $senhaC = $_POST['txtconfirm_password'];
                    
                    if($senha != $senhaC){
                        ?>
                        <script type="text/javascript">
                            alert('A senha deve ser a mesma em ambos os campos.');
                            history.go(-1);
                        </script>
                        <?php
                    }else{
                        if(!Validacoes::validaSenha($senha)){
                            ?>
                            <script type="text/javascript">
                                alert('Senha inválida.');
                                history.go(-1);
                            </script>
                            <?php
                        }else{
                            if(!Validacoes::validaCPF($cpf)){
                                ?>
                                <script type="text/javascript">
                                    alert('CPF inválido.');
                                    history.go(-1);
                                </script>
                                <?php
                            }else{
                                if(!Validacoes::validaEmail($email)){
                                    ?>
                                    <script type="text/javascript">
                                        alert('E-mail inválido.');
                                        history.go(-1);
                                    </script>
                                    <?php
                                }else{
                                    $dao = new UsuarioDAO();
                                    
                                }
                            }
                        }
                    }
                    
                }else{
                    if(isset($_POST['txtusername']) && !empty($_POST['txtusername']) && isset($_POST['txtcpf']) && !empty($_POST['txtcpf']) && 
                        isset($_POST['txtemail']) && !empty($_POST['txtemail'])){
                        $nome = $_POST['txtusername'];
                        $cpf = $_POST['txtcpf'];
                        $email = $_POST['txtemail'];
                        
                        if(!Validacoes::validaCPF($cpf)){
                                ?>
                                <script type="text/javascript">
                                    alert('CPF inválido.');
                                    history.go(-1);
                                </script>
                                <?php
                            }else{
                                if(!Validacoes::validaEmail($email)){
                                    ?>
                                    <script type="text/javascript">
                                        alert('E-mail inválido.');
                                        history.go(-1);
                                    </script>
                                    <?php
                                }else{
                                    
                                }
                            }
                    }else{
                        
                    }
                }
            }else{
                
            }
            break;

        default:
            break;
    }
}
?>

