<?php

class Home extends Controller {

	public function __construct() {

		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */