<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<link rel="stylesheet" href="<?php echo base_url('assets/index/') ?>css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url('assets/index/') ?>css/style.css"> <!-- Resource style -->
	<script src="<?php echo base_url('assets/index/') ?>js/modernizr.js"></script> <!-- Modernizr -->
	<title>Connect Money | Um clube de ajuda mútua.</title>
</head>
<body>

<div class="text-center py-5">
	<h1><img class="mx-auto" width="300" src="<?php echo base_url('assets/img/logo.png') ?>" /></h1>
</div>
<header class="text-center">
	<div class="container">
		<div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0tUhNU1PN_Y" frameborder="0" allowfullscreen></iframe>
      	</div>
	</div>
</header>

<section class="py-5">
	<div class="container text-center py-3">
		<a href="<?php echo base_url('cadastro') ?>" class="btn btn-spr btn-primary">CADASTRAR AGORA</a>
	</div>
	<div class="container text-center">
		<a href="<?php echo base_url('backoffice/login') ?>">Já tenho conta. Entrar.</a>
	</div>
</section>
<section class="cd-faq">
	<ul class="cd-faq-categories">
		<!-- <li><a class="selected" href="#basics">Introdução</a></li> -->
		<li><a href="#mobile">Introdução</a></li>
		<li><a href="#account">O Backoffice</a></li>
		<li><a href="#payments">Regras da casa</a></li>
		<!-- <li><a href="#privacy">Privacy</a></li>
		<li><a href="#delivery">Delivery</a></li> -->
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Introdução</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Principios da ajuda mútua</a>
				<div class="cd-faq-content">
					<p>O primeiro principio que acreditamso que deve ser atendido é DOAR E RECEBER.</p>
					<p>Toda ajuda mútua é composta de pessoas comprometidas com a realidade dos membros do grupo. Ele se preocupa.</p>
					<p>Toda doação feita deve ser atendida com o recebimento como resposta.</p>
					<p>Os caloteiros, os atrasados não tem vez. Precisamos ser punidos.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Como funciona?</a>
				<div class="cd-faq-content">
					<p>Cada doação equivale a 3 recebimentos diretos.</p>
					<p>Cada nível abre a possibilidade de obter novos posicionamentos.</p>
					<p>As doações acontecem via PicPay, um aplicativo gratuito.</p>
				</div> <!-- cd-faq-content -->
			</li>

			
		</ul> <!-- cd-faq-group -->

		<ul id="mobile" class="cd-faq-group">
			<li class="cd-faq-title"><h2>O backoffice</h2></li>
			

			<li>
				<a class="cd-faq-trigger" href="#0">Como cadastrar?</a>
				<div class="cd-faq-content">
					<p>O Cadastro segue a seguinte etapa: </p>
					<p>
					<ol>
						<li>1. Cadastre o seu celular</li>
						<li>2. Valide seu celular com o código recebido via SMS.</li> 
						<li>3. Complete seu cadastro.</li>
					</ol>
					</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Como cadastrar meu PicPay no meu backoffice?</a>
				<div class="cd-faq-content">
					 
					<p>
					<ol>
						<li>1. Se você está no celular clique no menu</li>
						<li>2. Clique na opção Conta.</li> 
						<li>3. Escolha a opção pagamento.</li>
						<li>3. Digite seu endereço Picpay. Somente o endereço Ex: 'meuendereco' Não coloque o @ que vem junto com o endereço.</li>
					</ol>
					</p>
				</div> <!-- cd-faq-content -->
			</li>
			
			<li>
				<a class="cd-faq-trigger" href="#0">Como doar?</a>
				<div class="cd-faq-content">
					<p>
					<ol>
						<li>1. Clique no botão POSICIONAR e aguarde o sistema alocar você na rede.</li>
						<li>2. Quando o sistema finalizar encontre a sessão Pagamentos.</li> 
						<li>3. Clique em pagar para ver os dados do Recebedor. Você terá o nome, whatsapp, o endereço do PicPay e o QR Code do recebedor.</li>
						<li>4. Abra seu PicPay e escolha o modo que você achar mais fácil. Digitar o nome da pessoa ou ler o QR Code do receber.</li>
						<li>5. Em seguida preencha com o valor de 50,00 e conclua. Pronto. Sua doação foi feita.</li>
						<li>6. Entre em contato com o seu recebedor ou envie o comprovante pelo painel.</li>
						<li>7. Para enviar o comprovante basta pritar a tela e inserir no backoffice.</li>
					</ol>
					</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">Como inserir o comprovante?</a>
				<div class="cd-faq-content">
					<p>
					<ol>
						<li>1. Clique no botão PAGAR.</li>
						<li>2. Na janela que abriu, desça a pagina até ver a opção ENVIAR COMPROVANTE.</li> 
						<li>3. Clique para INSERIR IMAGEM</li>
						<li>4. Escolha a imagem e clique em enviar.</li>
						<li>5. Aguarde o recebedor confirmar a doação.</li>
					</ol>
					</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">Tempo para doar</a>
				<div class="cd-faq-content">
					<p>Todos os posicionamentos tem 24 horas para doar e para as doações serem aceitas. Quanto mais rápido melhor.</p>
					<p>O PicPay funciona 24horas e não depende do horário bancário. Por isso você pode doar quando quiser. É INSTANTÂNEO.</p>
				</div> <!-- cd-faq-content -->
			</li>
			<li>
				<a class="cd-faq-trigger" href="#0">Como são os níveis?</a>
				<div class="cd-faq-content">
					<p>Cada atitude dentro da plataforma faz o doador subir 1 nível. Cada nível alcançado libera mais opções:</p>

					<p>Atitudes</p>
					<p>	<ul>
							<li>✅ Cada 10 doações</li>
							<li>✅ Cada 10 recebimentos </li>
							<li>✅ Cada 10 indicações ativas</li>
						</ul>
					</p>
					
					<p>Níveis</p>
					<p>	<ul>
							<li>Nível 1: Libera 1 posicionamento para 3 recebimentos</li>
							<li>Nível 2: Libera a abertura de até 2 posicionamentos para 6 recebimentos</li>
							<li>Nível 3: Libera a abertura de até 4 posicionamentos para 12 recebimentos</li>
							<li>Nível 4: Libera a abertura de até 8 posicionamentos para 24 recebimentos</li>
							<li>Nível 5: Libera a abertura de até 16 posicionamentos para 48 recebimentos 2400</li>
							<li>Nível 6: Libera posicionamentos livres</li>
							
						</ul>
					</p>
					 
				</div> <!-- cd-faq-content -->
			</li>
			
		</ul> <!-- cd-faq-group -->

		<ul id="account" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Regras da casa</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Nos grupos de Whatsapp Oficiais</a>
				<div class="cd-faq-content">
					<p>Não coloque comprovantes no grupo. Isso acaba com a vida de quem tem pouca memória no celular.</p>
					<p>Evite conversar o desnecessário. Tudo que você falar que seja para motivar o grupo.</p>
					<p>Não coloque seu link de indicação no grupo. Falta de ética.</p>
					<p>Seja proativo. Sua indicações beneficiam o grupo mas também beneficiam você na suas subidas de nível. Esse é realmente um clube de ajuda mutua.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Ao excluir um doador caloteiro</a>
				<div class="cd-faq-content">
					<p>Tente primeiro contato via whatsapp. Somente se não conseguir contato exclua.</p>
					<p>Não exclua de cara. Verifique se realmente o deposito na sua conta PicPay não caiu.</p>
					<p>Se você excluir o individuo você estará bloqueando a conta do membro. Cuidado. O poder está em suas mãos.</p>
				</div> <!-- cd-faq-content -->
			</li>			 
		</ul> <!-- cd-faq-group -->

		 
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="<?php echo base_url('assets/index/') ?>js/jquery-2.1.1.js"></script>
<script src="<?php echo base_url('assets/index/') ?>js/jquery.mobile.custom.min.js"></script>
<script src="<?php echo base_url('assets/index/') ?>js/main.js"></script> <!-- Resource jQuery -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 
</body>
</html>