<?php 

	defined('BASEPATH') OR exit('No direct script acess allowed');

	class Noticia extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('option_model', 'option');
			$this->load->model('noticia_model', 'option');
		}

		public function index() {
			redirect('noticia/listar', 'refresh');
		}

		public function listar() {
			// Verificar se o usuário está logado
			verifica_login();

			// Carrega view
			$dados['titulo'] = 'RBernardi - Listagem de notícias';
			$dados['h2'] = 'Listagem de notícias';
			$dados['tela'] = 'listar';
			$this->load->view('painel/noticias', $dados);
		}

		public function cadastrar() {
			// Verificar se o usuário está logado
			verifica_login();

			// Regras de validação
			$this->form

			// Carrega view
			$dados['titulo'] = 'RBernardi - Cadastro de notícias';
			$dados['h2'] = 'Cadastro de notícias';
			$dados['tela'] = 'cadastrar';
			$this->load->view('painel/noticias', $dados);
		}
	}
?>