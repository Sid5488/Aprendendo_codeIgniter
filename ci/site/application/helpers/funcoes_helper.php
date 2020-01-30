<?php 

	defined('BASEPATH') OR exit('No direct script acess allowed');

	if (!function_exists('set_msg')) {
		// Seta uma mensagem via session para ser lida posteriormente
		function set_msg($msg = NULL) {
			$ci = & get_instance();
			$ci->session->set_userdata('aviso', $msg);
		}
	}

	if(!function_exists('get_msg')) {
		function get_msg($destroy = TRUE) {
			$ci = & get_instance();
			$retorno = $ci->session->userdata('aviso');
			if ($destroy) {
				$ci->session->unset_userdata('aviso');
				return $retorno;
			}
		}
	}

	// Verificar login do usuário
	if(!function_exists('cerifica_login')) {
		function verifica_login($direct = 'setup/login') {
			$ci = & get_instance();
			if ($ci->session->userdata('logged') != TRUE) {
				set_msg('<p>Acesso restrito! Faça login para continuar.</p>');
				redirect($redirect, 'refresh');
			}
		}
	}
?>