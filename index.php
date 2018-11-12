<!DOCTYPE html>
<html lang="en">

  <head>

    <?php include 'template/head.php'; ?>
    <title>Unifaetec</title>

  </head>

  <body id="page-top">
    <?php include 'template/body-nav.php'; ?>

	<!-- Corpo Section -->
    <section id="Corpo">
      <div class="container">
	  <br>
        <h3 class="text-center text-uppercase text-secondary mb-0">Login</h3>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">

			<!-- Início form-->
            <form action="principal.php" name="sentMessage" id="contactForm" novalidate="novalidate">

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label for="login">Login</label>
                  <input class="form-control" id="login" name="login" type="number" placeholder="Login" required="required" data-validation-required-message="Preencha o campo.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label for="senha">Senha</label>
                  <input class="form-control" id="senha" name="senha" type="password" placeholder="Senha" required="required" data-validation-required-message="Preencha o campo.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Entrar</button>

				<a href="cadastrogeral.html">
				<button type="button" class="btn btn-primary btn-xl" id="sendMessageButton">Cadastro Geral</button>
				</a>
              </div>
            </form>
        <?php
        if ($_POST) {
                require 'UsuarioDAO.class.php';

                $usuario = new UsuarioDAO();

                $login = addslashes($_POST['login']);
                $senha = addslashes($_POST['senha']);


                $user = $usuario->login($senha, $login);

                if ($user == TRUE) {
                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['senha'] = $senha;
                    header("location: principal.php");
                    exit;
                } else {
                    header("location: index.php?erro=senha");
                }
            }
        ?>
        <?php
         if ($_GET) {
                if (isset($_GET['erro'])) {
                    echo "Usuário ou senha inválidos!";
                }
            }
         ?>
        <?php
         if ($_GET) {
                if (isset($_GET['erro'])) {
                    echo "Usuário ou senha inválidos!";
                }
            }
         ?>
			<!-- Fim form -->

          </div>
        </div>
      </div>
    </section>
   <!-- FIM Corpo Section -->

   <?php include 'template/body-footer.php'; ?>
   <?php include 'template/body-js.php'; ?>

  </body>

</html>
