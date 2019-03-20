<?php	
	SESSION_START();
?>
<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/personalizado.css">
		<link rel="icon" type="imagem/png" href="../View/imagem/maos.png" />
		<title>Devfenas</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top menu">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#servicos">Serviços</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#sobre-empresa">Sobre Empresa</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contato">Contato</a>
							</li>
						</ul>
						<form class="form-inline mt-2 mt-md-12">
							<a href="login.php" class="btn btn-light">Administrador</a>
						</form>
					</div>
				</div>
			</nav>
		</header>
		<main role="main" class="carousel-topo" id="home">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="first-slide img-fluid" src="imagem/imagem_um.jpg" alt="First slide">
						<div class="container">
							<div class="carousel-caption text-left">
								<h1 class="d-none d-md-block">Fale com nossa central de atendimento.</h1>
								<p class="d-none d-md-block">Atendemos em horário comercial, entre em contato.</p>
								<!--<p class="d-none d-md-block"><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="second-slide img-fluid" src="imagem/voo.jpg" alt="Second slide">
						<div class="container">
							<div class="carousel-caption">
								<h1 class="d-none d-md-block">Vá atrás dos seus sonhos.</h1>
								<p class="d-none d-md-block">Não tenha medo de voar e ir o mais alto que puder, nós podemos te ajudar a chegar ao seu ápice.</p>
								<!--<p class="d-none d-md-block"><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<img class="third-slide img-fluid" src="imagem/imagem_dois.jpg" alt="Third slide">
						<div class="container">
							<div class="carousel-caption text-right">
								<h1 class="d-none d-md-block">Venha conhecer nossa empresa.</h1>
								<p class="d-none d-md-block">Hopedagem por nossa conta, venha e conheça nosso trabalho pessoalmente.</p>
								<!--<p class="d-none d-md-block"><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</main>
		
		<div class="jumbotron servicos" id="servicos">
			<div class="container">
			<h3 class="text-center">Alguns dos nosso Clientes</h3><br><br>
				<div class="card-group">
					<div class="card card-ani-um">
						<img class="card-img-top" src="imagem/servico_um.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Metalúrgica</h5>
							<p class="card-text">Metalurgica Alfenas, uma das primeiras empresas a confiar no nosso trabalho, para controlar toda a produção de e controle de materias.</p>
						</div>
					</div>
					<div class="card card-ani-dois">
						<img class="card-img-top" src="imagem/servico_dois.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Engenharia</h5>
							<p class="card-text">Engenheiros usando software para controle de funcionários responsavel pela manutenção de estágios de todo o Brasil.</p>					  
						</div>
					</div>
					<div class="card card-ani-tres">
						<img class="card-img-top" src="imagem/servico_tres.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Reforma</h5>
							<p class="card-text">Reforma de pontes feitas em todo o Brasil com o controle de softwares feito com toda a nossa tecnologia e da capacitação dos nossos profissionais.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="jumbotron sobre-empresa" id="sobre-empresa"><br><br><br>
			<div class="container">
				<div class="row featurette">
					<div class="col-md-7 emp-ani-text">
						<h2 class="featurette-heading">Nossa <a style="color:red">missão</a> é trazer o <a style="color:blue;">melhor</a> para <a style="color:black">você</a>.</h2>
						<p class="lead">Nossa equipe qualifica trabalha a disposição dos nossos clientes para ter o melhor atendimento sempre, tudo é feito para trazer benefícios de diversas formas, com nossas teclogias de alta qualidade e desenvolvedores de alta patente.</p>
					</div>
					<div class="col-md-5 emp-ani-img">
						<img class="featurette-image img-fluid mx-auto" src="imagem/pc.jpg" alt="Generic placeholder image">
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="jumbotron contato" id="contato">
			<div class="container">
				<h2 class="text-center">Formulário de contato</h2><br><br>
				<form  action='../PHP/valida_mensagem.php' method="POST">
					<div class="form-row">
						<div class="form-group col-md-6 form-ani-nome">
							<label>Nome</label>
							<input type="text" class="form-control" placeholder="Nome completo" name="nome">
						</div>
						<div class="form-group col-md-6 form-ani-email">
							<label>E-mail</label>
							<input type="email" class="form-control" placeholder="Seu melhor e-mail" name="email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 form-ani-tel">
							<label>Telefone</label>
							<input type="text" class="form-control" placeholder="(99) 99999-9999" name="telefone">
						</div>
						<div class="form-group col-md-6 form-ani-ass">
							<label>Assunto</label>
							<input type="text" class="form-control" placeholder="Assunto da mensagem" name="assunto">
						</div>
					</div>
					<div class="form-row form-ani-msg">
						<label>Mensagem</label>
						<textarea  class="form-control" rows="5" name="mensagem"></textarea>
					</div><br>
					<?php 
						if(isset($_SESSION['CamposVazios'])){ ?>
						<a style="color:red;">	 <?php echo "Campos Vazios"; ?> </a>
					<?php		
						unset($_SESSION['CamposVazios']);}
					?><br>
					<button type="submit" class="btn btn-primary">Enviar</button> 
					
				</form>
			</div>
		</div>
		
		
		<div class="jumbotron rodape">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<h5>Página</h5>
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="#servicos">Serviços</a></li>
							<li><a href="#sobre-empresa">Sobre a Empresa</a></li>
							<li><a href="#contato">Contato</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-4">
						<h5>Contato</h5>
						<p>
							(35) 98845-9952  <br>
                            Amélio da Silva Gomes, 480 - Bosque dos Ypês<br>
                            CEP 37131-415 - Alfenas / MG<br>
						</p>
					</div>
					<div class="col-12 col-md-4">
						<h5>Redes Sociais</h5>
						<ul>
							<li><a href="https://www.facebook.com/samuel.soaresguimaraes">Facebook</a></li>
                            <li><a href="https://www.instagram.com/samu_aeho/?hl=pt-br">Instagram</a></li>
                            <!--<li><a href="#">Google +</a></li>
                            <li><a href="#">YouTube</a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
					
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/personalizado.js"></script>	
		<script src="js/scrollreveal.min.js"></script>
		
		<script>
			window.sr = ScrollReveal({ reset: true });
			sr.reveal('.card-ani-um',{
				duration: 1000,
				origin: 'left',
				distance: '20px'
			});
			sr.reveal('.card-ani-dois',{
				duration: 1000,
				origin: 'bottom',
				distance: '20px'
			}); 
			sr.reveal('.card-ani-tres',{
				duration: 1000,
				origin: 'right',
				distance: '20px'
			});
			sr.reveal('.emp-ani-text',{
				duration: 1000,
				origin: 'left',
				distance: '20px'
			});
			sr.reveal('.emp-ani-img',{
				duration: 1000,
				origin: 'right',
				distance: '20px'
			});
			sr.reveal('.form-ani-nome',{
				duration: 1000,
				origin: 'left',
				distance: '20px'
			});
			sr.reveal('.form-ani-email',{
				duration: 1000,
				origin: 'right',
				distance: '20px'
			});
			sr.reveal('.form-ani-tel',{
				duration: 1000,
				origin: 'left',
				distance: '20px'
			});
			sr.reveal('.form-ani-ass',{
				duration: 1000,
				origin: 'right',
				distance: '20px'
			});
			sr.reveal('.form-ani-msg',{
				duration: 1000,
				origin: 'right',
				distance: '20px'
			});
		</script>
		
		<?php
			if(isset($_SESSION['sucesso'])){
		?>
				<script type="text/javascript">

				$(document).ready(function() {
					$('#modalsucesso').modal('show');
				})
			</script>
		<?php
			unset($_SESSION['sucesso']);}
		?>
			

		<div class="modal fade" id="modalsucesso" tabindex="-1" role="dialog" aria-
			labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						Mensagem enviada com sucesso, Agradecemos!

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
			</div>
	    </div>
	</body>
</html>