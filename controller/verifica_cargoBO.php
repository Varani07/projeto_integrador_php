<?php
    include_once '../model/database/AdmDAO.php';

    if (isset($_GET['id_adm']) && isset($_GET['pag']) && !empty($_GET['id_adm']) && !empty($_GET['pag'])){
        $pag = $_GET['pag'];
        $id = $_GET['id_adm'];

        $dao = new AdmDAO();
        $info_adm = $dao->get_info($id);
        foreach ($info_adm as $obj){
            switch ($pag){
                case "gerenciar-adm":
                    if ($obj->cargo>0){
                        header('location: ../pages/gerenciar_adm.php?id='.$id);
                    }else{
                        ?>
                        <script type="text/javascript">
                            alert('Acesso negado.');
                            history.go(-1);
                        </script>
                        <?php
                    }
                    break;
                case "cad-adm":
                    if ($obj->cargo>1){
                        header('location: ../pages/cadastrar_adm.php?id='.$id);
                    }else{
                        ?>
                        <script type="text/javascript">
                            alert('Acesso negado.');
                            history.go(-1);
                        </script>
                        <?php
                    }
                    break;
                case "log":
                    if ($obj->cargo>2){
                        header('location: ../pages/log_eventos.php?id='.$id);
                    }else{
                        ?>
                        <script type="text/javascript">
                            alert('Acesso negado.');
                            history.go(-1);
                        </script>
                        <?php
                    }
                    break;
            }
        }

        
    }

?>