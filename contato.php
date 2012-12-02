<?php include 'includes/header.php'; ?>

<div class="container">
	<header class="row">
		<div class="span10 offset1 header">
			<div class="span5 encomendas">
				<img src="img/encomendas.png" alt="Encomendas">
			</div>
			<div class="logo">
				<img src="img/logo.png" alt="Sabor di Amore">
			</div>
			<div class="siga-nos">
				<img src="img/siga-nos.png" alt="Siga-nos">
				<a href="#">
					<img src="img/twitter.png" alt="Twitter">
				</a>
				<a href="#">
					<img src="img/facebook.png" alt="Facebook">
				</a>
			</div>
		</div>
		<div class="span12">
			<menu class="no-margin">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Produtos</a></li>
					<li><a href="">Serviços</a></li>
					<li style="padding-right: 56px;"><a href="">Galeria</a></li>
					<li><a href="">Quem somos</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</menu>
		</div>
	</header>
    <section class="section-contato">
        <div class="span5 form-contato">
            <h4>Contato</h4>
            <div class="form-contato-info">
                <p>Fone: <span>47 3028.3848|47 9631.0999</span></p>
                <p>email: atendimento@sabordlamore.com.br</p>
                <p>Endereço: Rua Corupá,nº138-Joinville/SC</p>
                <p class="destaque">Atendimento com hora Marcada!</p>
            </div>
            <form class="form-horizontal" action="#" method="post">
                    <label>Nome:</label>
                    <input type="text" name="name" class="input-block-level"/>
                    <label>Email:</label>
                    <input type="text" name="email" class="input-block-level"/>
                    <label>Mensagem:</label>
                    <textarea name="message" class="input-block-level textarea-footer"></textarea>
                    <br />
                    <input type="submit" value="Enviar" class="form-contato-submit"/>

             </form>
        </div>
        <div class="span5">
            <h4>Localização</h4>
            <div class="form-contato-maps"></div>
            <button>Exibir mapa Ampliado</button>
        </div>
    </section>
</div>
<?php include 'includes/footer-contato.php';