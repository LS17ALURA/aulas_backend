<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
		$crud=new Grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('usuario');
        $crud->set_subject('usuário');
        $crud->set_field_upload('foto');
		$output = $crud->render();
		$this->load->view('example.php',(array)$output);
	}
}
