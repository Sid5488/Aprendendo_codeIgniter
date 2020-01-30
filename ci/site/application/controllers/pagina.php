<?php 

	defined('BASEPATH') OR exit('No direct script acess allowed');

	class Pagina extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('option_model', 'option');
		}

		public function index() {
			$dados['titulo'] = 'RBernadi Desenvolvimento Web';
			$this->load->view('home', $dados);
		}

		public function clientes() {
			$dados['titulo'] = 'Clientes';
			$this->load->view('clientes', $dados);
		}

		public function servicos() {
			$dados['titulo'] = 'Serviços';
			$this->load->view('servicos', $dados);
			$this->load->model('option_model', 'option');
		}

		public function contato() {
			$this->load->helper('form');
			$this->load->library(array('form_validation', 'email'));

			// Regras de validação do formulário
			$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			if($this->form_validation->run() == FALSE) {
				$dados['formerror'] = validation_errors();
			} else {
				$dados_form = $this->input->post();
				$this->email->from($dados_form['email'], $dados_form['nome']);
				$this->email->to('guilhermenoobsaibot@gmail.com');
				$this->email->subject($dados_form['nome']);	// Aqui seria para preencher o campo assunto no email
				$this->email->message($dados_form['email']); // Aqui seria para preencher o campo mensagem no email
				if ($this->email->send()) {
					$dados['formerror'] = 'Email enviado com sucesso!';
				} else {
					$dados['formerror'] = 'Erro ao enviar email, tente novamente em alguns minutos.';
				}
			}

			$dados['titulo'] = 'Contato';
			$this->load->view('contato', $dados);
		}

		public function sobre() {
			$dados['titulo'] = 'Sobre';
			$this->load->view('sobre', $dados);
		}
	}

?>