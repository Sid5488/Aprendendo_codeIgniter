<?php $this->load->view('header'); ?>
<div class="home">
	<p>Contato</p>
	<?php 
		if($formerror) {
			echo('<p>'.$formerror.'</p>');
		}
		echo(form_open('pagina/contato'));
		echo(form_label('Seu nome:', 'nome'));
		echo(form_input('nome', set_value('nome')));
		echo(form_label('Seu email:', 'email'));
		echo(form_input('email', set_value('email')));
		echo(form_submit('enviar', 'Enviar', array('class' => 'botao')));
		echo(form_close());
	?>
</div>
<?php $this->load->view('footer'); ?>