<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['list'] = $this->model->getall('users');
		$this->view(array('users/index' => $this->data));
	}

  public function edit($id)
	{
		$this->data['asd'] = 'asdas';
		echo $id;
		$this->load->view('login', $this->data);
	}

}
