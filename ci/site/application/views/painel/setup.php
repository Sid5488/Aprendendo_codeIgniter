<html>
	<head>
		<title><?php echo($titulo); ?></title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	</head>
	<body>
		<div class="linha">
			<div class="coluna col3">&nbsp;</div>
			<div class="coluna col6">
				<h2>echo($h2);</h2>
				<?php
					if ($msg = get_msg()) {
						echo('<div class="msg-box">'.$msg.'</div>');	
					}
					echo(form_open());
					echo(form_label('Nome para login', 'login'));
					echo(form_input('login', set_value('login'), array('autofocus' => 'autofocus')));
					echo(form_label('Email do administrador do site', 'email'));
					echo(form_input('email', set_value('email')));
					echo(form_label('Senha', 'senha'));
					echo(form_input('senha', set_value('senha')));
					echo(form_label('Repita a senha', 'senha2'));
					echo(form_input('senha2', set_value('senha2')));
					echo(form_submit('enviar', 'Salvar dados', array('class' => 'botao')));
					echo(form_close());
				?>
			</div>
			<div class="coluna col3">&nbsp;</div>
		</div>
	</body>
</html>