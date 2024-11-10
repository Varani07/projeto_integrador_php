<?php

include_once '../util/Validacoes.php';
include_once '../model/database/UsuarioDAO.php';
include_once '../model/database/AdmDAO.php';
include_once '../model/Usuario.php';
include_once '../model/Adm.php';

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
                            if(!Validacoes::validaCPF($usuario->cpf)){
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
                                            alert('Dados do usuário alterados com sucesso!');
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
                        
                        if(!Validacoes::validaCPF($usuario->cpf)){
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
                        $adm = new Adm();
                        $adm->id_usuario = $id;
                        $adm->user_adm = $_POST['txtusername'];
                        $adm->password_adm = $_POST['txtpassword'];
                        $senhaC = $_POST['txtconfirm_password'];

                        if($adm->password_adm != $senhaC){
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
                                $dao = new AdmDAO();
                                if($dao->update_adm_all($adm)){
                                    ?>
                                    <script type="text/javascript">
                                        alert('Dados do adm alterados com sucesso!.');
                                        history.go(-1);
                                    </script>
                                    <?php
                                }else{
                                    ?>
                                    <script type="text/javascript">
                                        alert('Erro ao alterar dados do adm.');
                                        history.go(-1);
                                    </script>
                                    <?php
                                }
                            }
                        }
                    }else{
                        if(isset($_POST['txtusername']) && !empty($_POST['txtusername'])){
                            $adm = new Adm();
                            $adm->id_usuario = $id;
                            $adm->user_adm = $_POST['txtusername'];

                            $dao = new AdmDAO();
                            if($dao->update_adm_all($adm)){
                                ?>
                                <script type="text/javascript">
                                    alert('Dados do adm alterados com sucesso!.');
                                    history.go(-1);
                                </script>
                                <?php
                            }else{
                                ?>
                                <script type="text/javascript">
                                    alert('Erro ao alterar dados do adm.');
                                    history.go(-1);
                                </script>
                                <?php
                            }
                        }
                    }
                }
            }
            break;
            
        case 'inserir':
            if ($tipo == 'usuario'){
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
                            if(!Validacoes::validaCPF($usuario->cpf)){
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
                                    if($dao->cadastrar_usuario($usuario)){
                                        $get_id = new UsuarioDAO();
                                        $novo_id = $get_id->get_id_by_cpf($usuario->cpf);
                                        foreach ($novo_id as $id){
                                            $n_id = $id->id_usuario;
                                        }
                                        ?>
                                        <script type="text/javascript">
                                            alert('Entrada permitida!');
                                            location.href = '../pages/area_usuario_home.php?id_usuario=<?php echo $n_id; ?>';
                                        </script>
                                        <?php
                                    }else{
                                        ?>
                                        <script type="text/javascript">
                                            alert('Erro ao efetuar cadastro.');
                                            history.go(-1);
                                        </script>
                                        <?php
                                    }
                                }
                            }
                        }
                    }
                    
                }
            }
            break;
        
        case 'deletar':
            break;

        default:
            break;
    }
}
?>

