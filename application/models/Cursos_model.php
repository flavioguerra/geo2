<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos_model extends CI_Model {

	public function getCursos()
	{
		$query = $this->db->get('curso');
		return $query->result();
	}


	public function atualizarcusros($dados=null)
	{
		if ($dados != null) {
			$this->db->update('cursos',$dados)
		}
	}

	
	public function adicionarcurso($dados=null)
	{
		if ($dados != null) {
			$this->db->insert('cursos',$dados)
		}
	}

	public function deletarcursos($id=null)
	{
		if ($id != null) {
			$this->db->delete('curos',$id)
		}
	}

}
