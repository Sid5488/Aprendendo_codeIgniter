<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	</head>
	<body>
		<p>Header Config</p>
		<nav>
			<ul>
				<li><a target="_blank" href="<?php echo(base_url('')); ?>">Ver site</a></li>
				<li><a href="<?php echo(base_url('noticia')); ?>">Noticia</a></li>
				<li><a href="<?php echo(base_url('setup')); ?>">Config</a></li>
				<li><a href="<?php echo(base_url('setup/logout')); ?>">Sair</a></li>
			</ul>
		</nav>
	</body>
</html>