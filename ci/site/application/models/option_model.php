<?php 

	defined('BASEPATH') OR exit('No direct script acess allowed');

	class Option_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function get_option($option_name) {
			$this->db->where('option_name', $option_name, $default_value=NULL);
			$query = $this->db->get('option', 1);
			if($query->num_rows() == 1) {
				$row = $query->row();
				return $row->option_value;
			} else {
				return $default_value;
			}
		}

		public function update_option($option_name, $option_value) {
			$this->db->where('option_name', $option_name);
			$query = $this->db->get('option', 1);
			if($query->num_rows() == 1) {
				// Opção já existe, devo atualizar
				$this->db->set('option_value', $option_value);
				$this->db->where('option_name', $option_name);
				$this->db->update('option');
				return $this->db->affected_rows();
			} else {
				// Opção não existe, devo inserir
				$dados = array(
					'option_name' => $option_name,
					'option_value' => $option_value
				);
				$this->db->insert('option', $dados);
				return $this->db->insert_id();
			}
		}
	}

?>