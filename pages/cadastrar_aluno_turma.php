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
                        <a href="./area_usuario_home.php">Início</a>
                    </li>
                <li>
                    <a>Cadastrar</a>
                    <ul>
                        <li>
                            <a href="./cadastrar_curso.php">Curso</a>
                        </li>
                        <li>
                            <a href="./cadastrar_modulo.php">Módulo</a>
                        </li>
                        <li>
                            <a href="./cadastrar_uc.php">Unidade Curricular</a>
                        </li>
                        <li>
                            <a href="./cadastrar_turma.php">Turma</a>
                        </li>
                        <li>
                            <a href="./cadastrar_aluno.php">Aluno</a>
                        </li>
                        <li>
                            <a href="./cadastrar_professor.php">Professor</a>
                        </li>
                        <li>
                            <a href="./cadastrar_cronograma.php">Cronograma</a>
                        </li>
                        <li>
                            <a href="./cadastrar_professor_uc.php">Professor em UC</a>
                        </li>
                        <li>
                            <a href="./cadastrar_aluno_turma.php">Aluno em Turma</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./cronogramas.php">Cronogramas</a>
                </li>
                <li>
                    <a href="./ver_alterar.php">Alterar</a>
                </li>
                <li>
                    <a href="./login.php">Sair</a>
                </li>
                </ul>
            </nav>
            <hr id="hr2" />
            <section id="sectionMeio">
                <article id="articleTitulo">
                    <h2 class="h2Titulo">Inserir Aluno em Turma</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form action="#" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Aluno:</label>
                                        <select name="nome_aluno">
                                            <option value="aluno1" selected>Preencher com Alunos Cadastrados</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Curso:</label>
                                        <select name="nome_curso">
                                            <option value="curso1" selected>Preencher com Cursos Cadastrados</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Turma:</label>
                                        <select name="nome_turma">
                                            <option value="turma1" selected>Preencher com Turmas Cadastradas</option>
                                        </select>
                                    </div>
                                </fieldset>
                            </fieldset>
                        </form>
                    </div>
                </article>
                <article id="articleButton">
                    <p class="pCenter" id="btns"><button type="submit" class="botao" id="btnLogin" name="btnInserir_aluno_turma">Inserir</button></p>
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