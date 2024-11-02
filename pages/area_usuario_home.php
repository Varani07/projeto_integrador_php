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
        function deletar(id_usuario){
            if(confirm('Tem certeza de que deseja deletar sua conta?')){
                document.location.href='../controller/homeBO.php?acao=deletar&id='+id_usuario+'&tipo=usuario';
            }
        }
    </script>
    <?php 
    $id_usuario = $_GET['id_usuario'];
    ?>
    <body>
        <main class="corpo">
            <header>
                <section id="sectionHeader">
                    <article id="articleHeaderLogo">
                        <a href="./area_usuario_home.php"><img class="imgLogo" src="../img/senac_logo_new.png" alt="senac_logo" title="Senac Logo" /></a>
                    </article>
                    <article id="articleHeaderTitle">
                        <h1 class="h1">Área do Usuário</h1>
                    </article>
                </section>
            </header>
            <hr id="hr1" />
            <input type="checkbox" id="bt_menu" />
            <label for="bt_menu">&#9776;</label>
            <nav id="menu">
                <ul>
                    <li>
                        <a href="./area_usuario_home.php?id_usuario<?php echo $id_usuario; ?>">Início</a>
                    </li>
                <li>
                    <a>Cadastrar</a>
                    <ul>
                        <li>
                            <a href="./cadastrar_curso.php?id_usuario<?php echo $id_usuario; ?>">Curso</a>
                        </li>
                        <li>
                            <a href="./cadastrar_modulo.php?id_usuario<?php echo $id_usuario; ?>">Módulo</a>
                        </li>
                        <li>
                            <a href="./cadastrar_uc.php?id_usuario<?php echo $id_usuario; ?>">Unidade Curricular</a>
                        </li>
                        <li>
                            <a href="./cadastrar_turma.php?id_usuario<?php echo $id_usuario; ?>">Turma</a>
                        </li>
                        <li>
                            <a href="./cadastrar_aluno.php?id_usuario<?php echo $id_usuario; ?>">Aluno</a>
                        </li>
                        <li>
                            <a href="./cadastrar_professor.php?id_usuario<?php echo $id_usuario; ?>">Professor</a>
                        </li>
                        <li>
                            <a href="./cadastrar_cronograma.php?id_usuario<?php echo $id_usuario; ?>">Cronograma</a>
                        </li>
                        <li>
                            <a href="./cadastrar_professor_uc.php?id_usuario<?php echo $id_usuario; ?>">Professor em UC</a>
                        </li>
                        <li>
                            <a href="./cadastrar_aluno_turma.php?id_usuario<?php echo $id_usuario; ?>">Aluno em Turma</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./cronogramas.php?id_usuario<?php echo $id_usuario; ?>">Cronogramas</a>
                </li>
                <li>
                    <a href="./ver_alterar.php?id_usuario<?php echo $id_usuario; ?>">Alterar</a>
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
                        <form action="../controller/homeBO.php" method="post">
                            <?php 
                                include_once '../model/database/UsuarioDAO.php';
                                $dao = new UsuarioDAO();
                                $info_usuario = $dao->get_info($id_usuario);
                                foreach ($info_usuario as $value){
                            ?>
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Usuário:</label>
                                        <input type="text" name="txtusername" maxlength="40" value="<?php echo $value->login; ?>" required />
                                        <input type="hidden" name="acao" value="alterar"/>
                                        <input type="hidden" name="id" value="<?php echo $id_usuario; ?>"/>
                                        <input type="hidden" name="tipo" value="usuario"/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>CPF:</label>
                                        <input type="text" name="txtcpf" maxlength="15" value="<?php echo $value->cpf; ?>" required />
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>E-mail:</label>
                                        <input type="text" name="txtemail" maxlength="50" value="<?php echo $value->email; ?>" required />
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
                            <?php } ?>
                        </form>
                    </div>
                </article>
                <article id="articleButtonFlex">
                    <p class="pCenter" id="btns"><button type="submit" class="botao" id="btnAlterarDados" name="btnAlterar_Dados_Usuarios">Alterar Dados</button></p>
                    <p class="pCenter" id="btns"><button onclick="javascript:deletar(<?php echo $id_usuario ?>)" class="botao" id="btnDeletarConta" name="btnDeletar_Dados_Usuarios">Deletar Conta</button></p>
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