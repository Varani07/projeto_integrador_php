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
                    <h2 class="h2Titulo">Cadastrar Professor</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form action="#" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nome:</label>
                                        <input type="text" name="nome_professor" maxlength="50" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Sobrenome:</label>
                                        <input type="text" name="sobrenome_professor" maxlength="50" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nome do pai:</label>
                                        <input type="text" name="nome_pai_professor" maxlength="100" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nome da mãe:</label>
                                        <input type="text" name="nome_mae_professor" maxlength="100" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Número para contato:</label>
                                        <input type="number" name="celular_professor" maxlength="11" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>E-mail:</label>
                                        <input type="email" name="email_professor" maxlength="50" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Data de nascimento:</label>
                                        <input type="date" name="data_nascimento_professor" maxlength="10" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>CPF:</label>
                                        <input type="text" name="cpf_professor" maxlength="14" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco2">
                                    <div class="dados">
                                        <div id="same_line">
                                            <label id="labelGenero">Gênero:</label>
                                            <div id="divGenero"> 
                                                <div id="divRadioGenero">
                                                    <input type="radio" name="sexo_professor" value="M" checked />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">Masculino</label>
                                                </div>
                                            </div>
                                            <div id="divGenero">
                                                <div id="divRadioGenero">
                                                    <input type="radio" name="sexo_professor" value="F" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">Feminino</label>
                                                </div>
                                            </div>
                                            <div id="divGenero">
                                                <div id="divRadioGenero">
                                                    <input type="radio" name="sexo_professor" value="O" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">Outro</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Grau de Instrução:</label>
                                        <select name="grau_de_instrucao_professor">
                                            <option value="Ensino Fundamental - Em Andamento" selected>Ensino Fundamental - Em Andamento</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Etnia:</label>
                                        <select name="etnia_professor">
                                            <option value="Amarela" selected>Amarela</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Endereço:</label>
                                        <input type="text" name="endereco_professor" maxlength="60" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Número Residencial:</label>
                                        <input type="number" name="numero_professor" maxlength="6" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Bairro:</label>
                                        <input type="text" name="bairro_professor" maxlength="35" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Cidade:</label>
                                        <input type="text" name="cidade_professor" maxlength="50" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Estado:</label>
                                        <select name="estado_professor">
                                            <option value="estado1" selected>Preencher com Estados</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Estado Civil:</label>
                                        <select name="estado_civil_professor">
                                            <option value="Solteiro" selected>Solteiro</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Religião:</label>
                                        <input type="text" name="religiao_professor" maxlength="50" required/>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco2">
                                    <div class="dados">
                                        <div id="same_line">
                                            <label id="labelGenero">Turnos</label>
                                            <div id="divTurno"> 
                                                <div id="divCheckboxTurno">
                                                    <input type="checkbox" name="turno_manha_professor" value="" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">Manhã</label>
                                                </div>
                                            </div>
                                            <div id="divTurno">
                                                <div id="divCheckboxTurno">
                                                    <input type="checkbox" name="turno_tarde_professor" value="" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">Tarde</label>
                                                </div>
                                            </div>
                                            <div id="divTurno">
                                                <div id="divCheckboxTurno">
                                                    <input type="checkbox" name="turno_noite_professor" value="" />
                                                </div>
                                                <div id="divLabelGenero">
                                                    <label id="genero">Noite</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </fieldset>
                        </form>
                    </div>
                </article>
                <article id="articleButtonCadCronograma">
                    <p class="pCenter" id="btns"><button type="submit" class="botao" id="btnLogin" name="btnCadastrar_Professor">Cadastrar</button></p>
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