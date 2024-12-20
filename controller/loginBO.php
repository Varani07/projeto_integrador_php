<?php
    include_once '../model/database/AdmDAO.php';
    include_once '../model/database/UsuarioDAO.php';

    if(isset($_POST['acao'])){
        $acao = $_POST['acao'];
        
        switch ($acao) {
            case 'efetuar_login':
                if(isset($_POST['txtusername']) && !empty($_POST['txtusername']) && isset($_POST['entry_type']) && !empty($_POST['entry_type']) && isset($_POST['txtpassword']) && !empty($_POST['txtpassword'])){
                    $nome = $_POST['txtusername'];
                    $tipo = $_POST['entry_type'];
                    $senha = $_POST['txtpassword'];
                    if($tipo == 'administrador'){
                        $dao = new AdmDAO();
                        $resultado = $dao->autentificacao($nome, $senha);
                        foreach($resultado as $value){
                            $id = $value->id_adm;
                        }
                        if(!empty($id)){
                            ?>
                            <script type="text/javascript">
                                alert('Entrada permitida!');
                                location.href = '../pages/area_adm_home.php?id_adm=<?php echo $id; ?>';
                            </script>
                            <?php
                        }else{
                            ?>
                            <script type="text/javascript">
                                alert('Acesso Negado! Tente novamente.');
                                history.go(-1);
                            </script>
                            <?php
                        }
                    }else{
                        $dao = new UsuarioDAO();
                        $resultado = $dao->autentificacao($nome, $senha);
                        foreach($resultado as $value){
                            $id = $value->id_usuario;
                        }
                        if(!empty($id)){
                            ?>
                            <script type="text/javascript">
                                alert('Entrada permitida!');
                                location.href = '../pages/area_usuario_home.php?id_usuario=<?php echo $id; ?>';
                            </script>
                            <?php
                        }else{
                            ?>
                            <script type="text/javascript">
                                alert('Acesso Negado! Tente novamente.');
                                history.go(-1);
                            </script>
                            <?php
                        }
                    }
                }
                break;
            default:
                break;
            
        }
    }
?>
