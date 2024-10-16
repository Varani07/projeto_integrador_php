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
        <link rel="stylesheet" type="text/css" href="../css/tables.css"/>
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
                    <h2 class="h2Titulo">Cadastrar Cronograma</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form action="#" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Data de Início</label>
                                        <input type="date" name="data_escolhida" value="" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Até</label>
                                        <label id="labelExplicacao">(campo preenchido automáticamente ao escolher Unidade Currícular)</label>
                                        <input type="text" name="data_escolhida" value="" disabled/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Curso</label>
                                        <select name="curso_escolhido">
                                            <option value="curso1" selected>Preencher com os cursos disponíveis</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Turma</label>
                                        <select name="turma_escolhida">
                                            <option value="turma1" selected>Preencher com as turmas disponíveis</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco2">
                                    <div class="dados">
                                        <div id="same_line">
                                            <label id="labelGenero">Módulo</label>
                                            <div id="divModulo"> 
                                                <div id="divRadioModulo">
                                                    <input type="radio" name="modulo" value="a" checked />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">A</label>
                                                </div>
                                            </div>
                                            <div id="divModulo">
                                                <div id="divRadioModulo">
                                                    <input type="radio" name="modulo" value="b" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">B</label>
                                                </div>
                                            </div>
                                            <div id="divModulo">
                                                <div id="divRadioModulo">
                                                    <input type="radio" name="modulo" value="c" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">C</label>
                                                </div>
                                            </div>
                                            <div id="divModulo">
                                                <div id="divRadioModulo">
                                                    <input type="radio" name="modulo" value="d" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">D</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco2_cadastrar_cronogramas">
                                    <div class="dados_table">
                                        <table id="cadastrar_cronogramas">
                                            <caption>
                                                Criar Cronograma
                                            </caption>
                                            <tr>
                                                <th>UC</th>
                                                <th>Professor</th>
                                                <th>Data Início</th>
                                                <th>Data Fim</th>
                                            </tr>
                                            <tr>
                                                <td>unidade curricular 1</td>
                                                <td>professor 1</td>
                                                <td>07/07/2023</td>
                                                <td>07/12/2023</td>
                                            </tr>
                                            <tr>
                                                <td>unidade curricular 2</td>
                                                <td>professor 2</td>
                                                <td>07/07/2023</td>
                                                <td>07/12/2023</td>
                                            </tr>
                                            <tr>
                                                <td>unidade curricular 3</td>
                                                <td>professor 3</td>
                                                <td>07/07/2023</td>
                                                <td>07/12/2023</td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label id="labelExplicacao">Clique na tabela para preenche-lá com os professores que aparecerem na caixinha abaixo</label>
                                        <select name="professor_escolhido">
                                            <option value="professor1" selected>Preencher com os professores disponíveis</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <article id="articleButtonCadCronograma">
                                    <p class="pCenter" id="btns"><button type="submit" class="botao2" id="btnEscolherProfessor" name="btnEscolherProfessor">Criar Cronograma</button></p>
                                </article>
                            </fieldset>
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
    </body>
</html>