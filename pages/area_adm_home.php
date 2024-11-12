<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema Pedagógico</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="../css/layout.css"/>
        <link rel="stylesheet" type="text/css" href="../css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
        <link rel="stylesheet" type="text/css" href="../css/form.css"/>
        <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    </head>
    <script>
        function deletar(id_adm){
            if(confirm('Tem certeza de que deseja deletar sua conta?')){
                document.location.href='../controller/homeBO.php?acao=deletar&id='+id_adm+'&tipo=adm';
            }
        }
    </script>
    <?php $id_adm = $_GET['id_adm']; ?>
    <body>
        <main class="corpo">
            <header>
                <section id="sectionHeader2">
                    <article id="articleHeaderLogo">
                        <a href="./area_adm_home.php?id_adm=<?php echo $id_adm; ?>"><img class="imgLogo" src="../img/senac_logo_new.png" alt="senac_logo" title="Senac Logo" /></a>
                    </article>
                    <article id="articleHeaderTitle">
                        <h1 class="h1">Área do Administrador</h1>
                    </article>
                </section>
            </header>
            <hr id="hr1" />
            <input type="checkbox" id="bt_menu" />
            <label for="bt_menu">&#9776;</label>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="./area_adm_home.php?id_adm=<?php echo $id_adm; ?>">Início</a>
                    </li>
                <li>
                    <a>Gerenciar</a>
                    <ul>
                        <li>
                            <a href="./gerenciar_usuario.php?id_adm=<?php echo $id_adm; ?>">Usuários</a>
                        </li>
                        <li>
                            <a href="../controller/verifica_cargoBO.php?id_adm=<?php echo $id_adm; ?>&pag=gerenciar-adm">Administradores</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../controller/verifica_cargoBO.php?id_adm=<?php echo $id_adm; ?>&pag=cad-adm">Cadastrar Adm.</a>
                </li>
                <li>
                    <a href="../controller/verifica_cargoBO.php?id_adm=<?php echo $id_adm; ?>&pag=log">Log</a>
                </li>
                <li>
                    <a href="./login.php">Sair</a>
                </li>
                </ul>
            </nav>
            <hr id="hr2" />
            <section id="sectionMeio">
                <article id="articleTitulo">
                    <h2 class="h2Titulo" id="nomeUsuario">Informações Pessoais</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form name="frmAdmHome" action="../controller/homeBO.php" method="post">
                            <?php
                                include_once '../model/database/AdmDAO.php';
                                $dao = new AdmDAO();
                                $info_adm = $dao->get_info($id_adm);
                                foreach ($info_adm as $adm_obj){
                            ?>
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco2">
                                    <div class="dados">
                                        <div id="same_line">
                                            <label id="label_cargo">Nível de acesso: <?php echo $adm_obj->cargo; ?></label>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nome:</label>
                                        <input type="text" name="txtusername" maxlength="40" value="<?php echo $adm_obj->user_adm; ?>" required />
                                        <input type="hidden" name="acao" value="alterar"/>
                                        <input type="hidden" name="id" value="<?php echo $id_adm; ?>"/>
                                        <input type="hidden" name="tipo" value="adm"/>
                                    </div>
                                </fieldset>
                                
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Senha:</label>
                                        <p class="reqSenha">Mínimo 6 caracteres (3 letras, 2 números e 1 caracter especial)</p>
                                        <input type="password" name="txtpassword" maxlength="70" />
                                        <input type="checkbox" name="ver_senha" hidden="True" />
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Confirme sua senha:</label>
                                        <input type="password" name="txtconfirm_password" maxlength="70" />
                                        <input type="checkbox" name="ver_senhaC" hidden="True" />
                                    </div>
                                </fieldset>
                            </fieldset>
                            <article id="articleButtonFlex">
                                    <p class="pCenter" id="btns"><input type="submit" class="botao" id="btnAlterarDados" name="btnAlterar_Dados_Adm" value="Alterar Dados"/></p>
                                    <p class="pCenter" id="btns"><input onclick="javascript:deletar(<?php echo $id_adm ?>)" class="botao" id="btnDeletarConta" name="btnDeletar_Dados_Adm" value="Deletar Conta"/></p>
                            </article>
                            <?php
                                    }
                                ?>
                        </form>
                    </div>
                </article>
            </section>
            <hr id="hr1" />
            <footer>
                <section id="sectionFooter">
                    <hr id="hr3"/>
                </section>
            </footer>
        </main>
        <script>
            const checkbox = document.getElementById('ver_senha');
            const senha = document.getElementById('txtpassword');
            checkbox.addEventListener('change',
            function(){
                if(checkbox.checked){
                    senha.type = 'text';
                }else{
                    senha.type = 'password';
                }
            });
        </script>
        <script>
            const checkbox2 = document.getElementById('ver_senhaC');
            const senha2 = document.getElementById('txtconfirm_password');
            checkbox.addEventListener('change',
            function(){
                if(checkbox.checked){
                    senha.type = 'text';
                }else{
                    senha.type = 'password';
                }
            });
        </script>
    </body>
</html>