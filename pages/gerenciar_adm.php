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
                <section id="sectionHeader2">
                    <article id="articleHeaderLogo">
                        <a href="./area_adm_home.php"><img class="imgLogo" src="../img/senac_logo_new.png" alt="senac_logo" title="Senac Logo" /></a>
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
                        <a href="./area_adm_home.php">Início</a>
                    </li>
                <li>
                    <a>Gerenciar</a>
                    <ul>
                        <li>
                            <a href="./gerenciar_usuario.php">Usuários</a>
                        </li>
                        <li>
                            <a href="./gerenciar_adm.php">Administradores</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./cadastrar_adm.php">Cadastrar Adm.</a>
                </li>
                <li>
                    <a href="./log_eventos.php">Log</a>
                </li>
                <li>
                    <a href="./login.php">Sair</a>
                </li>
                </ul>
            </nav>
            <hr id="hr2" />
            <section id="sectionMeio">
                <article id="articleTitulo">
                    <h2 class="h2Titulo" id="nomeUsuario">Gerenciar Adm</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form action="#" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nome:</label>
                                        <input type="text" name="username" maxlength="40" required />
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nível de Acesso:</label>
                                        <select name="tipo_pesquisa">
                                            <option value="all" selected>Todos</option>
                                            <option value="any">Com acesso</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco2_table_adm">
                                    <div class="dados_table">
                                        <table id="table_adm">
                                            <caption>
                                                Adm's
                                            </caption>
                                            <tr>
                                                <th>ID</th>
                                                <th>USER</th>
                                                <th>PERM</th>
                                                <th>NÍVEL</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>usuario 1</td>
                                                <td><input type="checkbox" checked disabled></td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>usuario 2</td>
                                                <td><input type="checkbox" disabled></td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>usuario 3</td>
                                                <td><input type="checkbox" checked disabled></td>
                                                <td>3</td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label id="labelExplicacao">Clique em algum adm na tabela para que suas informações completem os campos abaixo.</label>
                                        <label>Nome:</label>
                                        <input type="text" name="nome_usuario" maxlength="40" required />
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Nível de Acesso:</label>
                                        <select name="tipo_pesquisa">
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Senha:</label>
                                        <p class="reqSenha">Mínimo 6 caracteres (3 letras, 2 números e 1 caracter especial)</p>
                                        <input type="password" name="password" maxlength="60" required />
                                        <input type="checkbox" name="ver_senha" />
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Confirme sua senha:</label>
                                        <input type="password" name="confirm_password" maxlength="60" required />
                                        <input type="checkbox" name="ver_senhaC" />
                                    </div>
                                </fieldset>
                            </fieldset>
                        </form>
                    </div>
                </article>
                <article id="articleButtonFlex2">
                    <p class="pCenter" id="btns"><button type="submit" class="botao" id="btnAlterarDados" name="btnAlterar_Dados_Usuarios">Alterar Dados</button></p>
                    <p class="pCenter" id="btns"><button type="submit" class="botao" id="btnDeletarConta" name="btnDeletar_Dados_Usuarios">Deletar Conta</button></p>
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