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
                    <h2 class="h2Titulo">Cronogramas Cadastrados</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form action="#" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label id="labelExplicacao">Complete com as informações desejadas nos campos abaixo para filtrar a tabela</label>
                                        <label>Curso</label>
                                        <select name="curso_escolhido">
                                            <option value="" selected>selecione</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Turma</label>
                                        <select name="turma_escolhida">
                                            <option value="" selected>selecione</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Módulo</label>
                                        <select name="modulo_escolhido">
                                            <option value="" selected>selecione</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Unidade Curricular</label>
                                        <select name="uc_escolhida">
                                            <option value="" selected>selecione</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Professor</label>
                                        <select name="professor_escolhido">
                                            <option value="" selected>selecione</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Turno</label>
                                        <select name="turno_escolhido">
                                            <option value="" selected>selecione</option>
                                            <option value="manha">MANHÃ</option>
                                            <option value="tarde">TARDE</option>
                                            <option value="noite">NOITE</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Mês</label>
                                        <select name="mes_escolhido">
                                            <option value="" selected>selecione</option>
                                            <option value="1">Janeiro</option>
                                            <option value="1">Fevereiro</option>
                                            <option value="1">Março</option>
                                            <option value="1">Abril</option>
                                            <option value="1">Maio</option>
                                            <option value="1">Junho</option>
                                            <option value="1">Julho</option>
                                            <option value="1">Agosto</option>
                                            <option value="1">Setembro</option>
                                            <option value="1">Outubro</option>
                                            <option value="1">Novembro</option>
                                            <option value="1">Dezembro</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Ano</label>
                                        <select name="ano_escolhida">
                                            <option value="" selected>selecione</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <article id="articleButtonCadCronograma">
                                    <p class="pCenter" id="btns"><button type="submit" class="botao3" id="btnBuscar" name="btnBuscarCronograma">Buscar</button></p>
                                </article>
                                <fieldset id="bloco2_cronogramas">
                                    <div class="dados_table">
                                        <table id="cronogramas">
                                            <caption>
                                                Cronogramas Cadastrados
                                            </caption>
                                            <tr>
                                                <th>Curso</th>
                                                <th>Turma</th>
                                                <th>Módulo</th>
                                                <th>UC</th>
                                                <th>Professor</th>
                                                <th>Turno</th>
                                                <th>Data Inicial</th>
                                                <th>Data Final</th>
                                            </tr>
                                            <tr>
                                                <td>Curso 1</td>
                                                <td>Turma 1</td>
                                                <td>Módulo 1</td>
                                                <td>UC 1</td>
                                                <td>Professor  1</td>
                                                <td>Turno</td>
                                                <td>07/07/2023</td>
                                                <td>07/12/2023</td>
                                            </tr>
                                            <tr>
                                                <td>Curso 2</td>
                                                <td>Turma 2</td>
                                                <td>Módulo 2</td>
                                                <td>UC 2</td>
                                                <td>Professor  2</td>
                                                <td>Turno</td>
                                                <td>07/07/2023</td>
                                                <td>07/12/2023</td>
                                            </tr>
                                            <tr>
                                                <td>Curso 3</td>
                                                <td>Turma 3</td>
                                                <td>Módulo 3</td>
                                                <td>UC 3</td>
                                                <td>Professor  3</td>
                                                <td>Turno</td>
                                                <td>07/07/2023</td>
                                                <td>07/12/2023</td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>
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