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
    </head>
    <body>
        <main>
            <header>
                <section id="sectionHeader">
                    <article id="articleHeaderLogo">
                        <a href="./login.php"><img class="imgLogo" src="../img/senac_logo_new.png" alt="senac_logo" title="Senac Logo" /></a>
                    </article>
                    <article id="articleHeaderTitle">
                        <h1 class="h1">Sistema Pedagógico Senac Tech</h1>
                    </article>
                </section>
            </header>
            <hr id="hr1" />
            <section id="sectionMeio">
                <article id="articleBanner">
                    <img class="imgBanner" src="../img/Senac.jpg" alt="banner" title="Banner" /> 
                </article>
                <article id="articleTitulo">
                    <h2 class="h2Titulo">Login</h2>
                </article>
                <article id="articleInput">
                    <div id="divLabel">
                        <form name="frmLogin" action="../controller/loginBO.php" method="post">
                            <fieldset id="fieldsetLabel">
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Usuário:</label>
                                        <input type="text" name="txtusername" maxlength="40" required />
                                        <input type="hidden" name="acao" value="efetuar_login"/>
                                        <select name="entry_type" required>
                                            <option value="usuario" selected>Usuário</option>
                                            <option value="administrador">Administrador</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset id="bloco">
                                    <div class="dados">
                                        <label>Senha:</label>
                                        <input type="password" name="txtpassword" maxlength="70" required />
                                        <input type="checkbox" name="ver_senha" hidden="True" />
                                    </div>
                                </fieldset>
                            </fieldset>
                            <article id="articleButton">
                                <p class="pCenter"><button type="submit" class="botao" id="btnLogin" name="btnLoginName" value="Login" name="btnLogIn">Login</button></p>
                            </article>
                        </form>
                    </div>
                </article>
                <article id="articleSignin">
                    <p class="pLeft">Não possui uma conta? <a href="./signin.php"><button class="botao" id="btnSignin" name="btnSignIn">Sign In</button></a></p>
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
    </body>
</html>