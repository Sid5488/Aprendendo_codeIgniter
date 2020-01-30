<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	</head>
	<body>
		<nav>
			<p>
				<?= $this->option->get_option('nome_site', 'Falta configurar'); ?>
			 </p>
			<ul>
				<li><a href="<?php echo(base_url('')); ?>">Home</a></li>
				<li><a href="<?php echo(base_url('clientes')); ?>">Clientes</a></li>
				<li><a href="<?php echo(base_url('servicos')); ?>">Serviços</a></li>
				<li><a href="<?php echo(base_url('sobre')); ?>">Sobre</a></li>
				<li><a href="<?php echo(base_url('contato')); ?>">Contato</a></li>
			</ul>
		</nav>
	</body>
</html>