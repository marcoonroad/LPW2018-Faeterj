<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="img/favicon.jpg" />

    <title>Unifaetec</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

  
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
	 <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Unifaetec</a>
		
		 <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
		
		<!-- Menu 1 -->
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Administrativo
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="cadastrogeral.html">Cadastro geral</a>
			<a class="dropdown-item" href="#">Usuário</a>
		  </div>
		</div>
		<!-- Fim -->
		
		<!-- Menu 2 -->
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Atividades
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="cadastroeventext.html">Confirmar Presença</a>
		  </div>
		</div>
		<!-- Fim -->
		
		<!-- Menu 3 -->
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Documentos
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Solicitar</a>
		  </div>
		</div>
		<!-- Fim -->
		
		<!-- Menu 4 -->
		<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Estatística
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Atendimento</a>
			<a class="dropdown-item" href="cadastroeventext.html">Eventos</a>
			<a class="dropdown-item" href="cadastrotrabacad.html">Trabalhos</a>
		  </div>
		</div>
		<!-- Fim -->
			
     </div>
    </nav> 
	<!-- FIM Navigation -->
	
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

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Endereço</h4>
            <p class="lead mb-0">Rua Clarimundo de Melo, 847
				<br>Quintino de Bocaiuva
				<br>CEP: 21311-280</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Unifaetec na web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Contato</h4>
            <p class="lead mb-0">(21) 2332-0000</p>
			<p class="lead mb-0">unifaetec@faetec.com.br</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
