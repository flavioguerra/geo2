<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobim extends CI_Controller {

	public function index()
	{
		$this->load->model('cursos_model','cursos');

		$data['cursos'] = $this->cursos->getCursos();

		$this->load->view('layout/topo');
		//$this->load->view('topo');
		//$this->load->view('site/conteudo',$data);
		$this->load->view('conteudo',$data);
		$this->load->view('layout/rodape');		
		//$this->load->view('rodape');		
	}


	public function Adicionar()
	{
		$this->load->model('cursos_model','cursos');

		$this->load->view('addcursos',$data);
	}


	public function Atualizar()
	{

	}


	public function Deletar()
	{
		
	}

}
