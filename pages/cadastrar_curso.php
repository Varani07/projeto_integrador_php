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
                        <a href="./area_usuario_home.php?id_usuario=<?php echo $id_usuario; ?>">Início</a>
                    </li>
                <li>
                    <a>Cadastrar</a>
                    <ul>
                        <li>
                            <a href="./cadastrar_curso.php?id_usuario=<?php echo $id_usuario; ?>">Curso</a>
                        </li>
                        <li>
                            <a href="./cadastrar_modulo.php?id_usuario=<?php echo $id_usuario; ?>">Módulo</a>
                        </li>
                        <li>
                            <a href="./cadastrar_uc.php?id_usuario=<?php echo $id_usuario; ?>">Unidade Curricular</a>
                        </li>
                        <li>
                            <a href="./cadastrar_turma.php?id_usuario=<?php echo $id_usuario; ?>">Turma</a>
                        </li>
                        <li>
                            <a href="./cadastrar_aluno.php?id_usuario=<?php echo $id_usuario; ?>">Aluno</a>
                        </li>
                        <li>
                            <a href="./cadastrar_professor.php?id_usuario=<?php echo $id_usuario; ?>">Professor</a>
                        </li>
                        <li>
                            <a href="./cadastrar_cronograma.php?id_usuario=<?php echo $id_usuario; ?>">Cronograma</a>
                        </li>
                        <li>
                            <a href="./cadastrar_professor_uc.php?id_usuario=<?php echo $id_usuario; ?>">Professor em UC</a>
                        </li>
                        <li>
                            <a href="./cadastrar_aluno_turma.php?id_usuario=<?php echo $id_usuario; ?>">Aluno em Turma</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./cronogramas.php?id_usuario=<?php echo $id_usuario; ?>">Cronogramas</a>
                </li>
                <li>
                    <a href="./ver_alterar.php?id_usuario=<?php echo $id_usuario; ?>">Alterar</a>
                </li>
                <li>
                    <a href="./login.php">Sair</a>
                </li>
                </ul>
            </nav>
            <hr id="hr2" />
            <section id="sectionMeio">
                <article id="articleTitulo">
                    <h2 class="h2Titulo">Cadastrar Curso</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form action="../controller/acoes_usuarioBO.php" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nome:</label>
                                        <input type="text" name="nome_curso" maxlength="35" required />
                                        <input type="hidden" name="acao" value="inserir"/>
                                        <input type="hidden" name="objeto" value="curso"/>
                                        <input type="hidden" name="id" value="<?php echo $id_usuario; ?>"/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Sigla:</label>
                                        <input type="text" name="sigla" maxlength="10" required />
                                    </div>
                                </fieldset>
                            </fieldset>
                        </form>
                    </div>
                </article>
                <article id="articleButtonCadCurso">
                    <p class="pCenter" id="btns"><button type="submit" class="botao" id="btnLogin" name="btnCadastrar_Curso">Cadastrar</button></p>
                </article>
            </section>
            <hr id="hr1" />
            <footer>
                <section id="sectionFooter">
                    <hr id="hr3"/>
                </section>
            </footer>
        </main>
    </body>
</html>