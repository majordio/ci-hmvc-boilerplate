<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* HODController
*/
class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['content'] = 'asdas';
		$this->view(array('dashboard'=> $this->data));
	}
}

/* End of file HODController.php */
/* Location: ./application/modules/hod/controller/HODController.php */
