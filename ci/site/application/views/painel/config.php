<?php $this->load->view('painel/header'); ?>
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
			echo(form_label('Senha (deixe em branco para não alterar)', 'senha'));
			echo(form_input('senha'));
			echo(form_label('Repita a senha', 'senha2'));
			echo(form_input('senha2'));
			echo(form_label('Nome do site:', 'nome_site'));
			echo(form_input('nome_site', set_value('nome_site')));
			echo(form_submit('enviar', 'Salvar dados', array('class' => 'botao')));
			echo(form_close());
		?>
	</div>
	<div class="coluna col3">&nbsp;</div>
</div>
<?php $this->load->view('painel/footer'); ?>