<?php

class List_pengajuan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("jurusan_model");
		if(!$this->jurusan_model->current_user()){
			redirect('jurusan/login');
		}
		
	}
	
	public function index()
	{
		$this->load->view("jurusan/guru/list_pengajuan");
	}

}