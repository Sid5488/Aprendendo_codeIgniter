<?php $this->load->view('painel/header'); ?>
<div class="linha">
	<div class="coluna col2">
		<ul>
			<li><a href="<?php echo(base_url('noticia/cadastrar')); ?>">Inserir</a></li>
			<li><a href="<?php echo(base_url('noticia/listar')); ?>">Listar</a></li>
		</ul>
	</div>
	<div class="coluna col10">
		<h2>echo($h2);</h2>
		<?php
			if ($msg = get_msg()) {
				echo('<div class="msg-box">'.$msg.'</div>');	
			}

			switch ($tela) {
				case 'listar':
					if (isset($noticias) && sizeof($noticias) > 0) { ?>
						<table>
							<thead>
								<th align="left">Título</th>
								<th align="right">Ações</th>
							</thead>
							<tbody>
								<?php 

									foreach ($noticias as $linha) { ?>
										<tr>
											<td class="titulo-noticia">
												<?= $linha->titulo ?>
											</td>
											<td class="acoes">
												<?= ancho('noticia/editar/'.$linha->id, 'Editar') ?> | <?= ancho('noticia/excluir/'.$linha->id, 'Excluir') ?> | <?= ancho('noticia/post/'.$linha->id, 'Ver', array('target' => '_blank')) ?>
											</td>
										</tr> <?php
									} 
								?>
							</tbody>
						</table> <?php
					} else {
						echo "Nenhuma notícia cadastrada";
					}

					break;
				
				case 'cadastrar':
					echo form_open_multipart();
					echo form_label('Título', 'titulo');
					echo form_input('titulo', set_value('titulo'));
					echo form_label('Conteudo', 'conteudo');
					echo form_textarea('conteudo', set_value('conteudo'));
					echo form_label('Imagem da notícia (thumbnail):', 'imagem');
					echo form_upload('imagem');
					echo form_submit('enviar', 'Salvar notícias', array('class' => 'botao'));
					echo form_close();
					break;

				case 'editar':
					echo "Tela de edição";
					break;

				case 'excluir':
					echo "Tela de exclusão";
					break;

				default:
					echo "string";
					break;
			}
		?>
	</div>
</div>
<?php $this->load->view('painel/footer'); ?>