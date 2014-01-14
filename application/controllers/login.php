<?php
class Login extends Controller {

	public function __construct() {
		parent::Controller();

		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->view('user/login');
	}

	public function submit() {

		if ($this->_submit_validate() === FALSE) {
			$this->index();
			return;

		}else{
        redirect('home');
        }
        
        
        
	}

	private function _submit_validate() {

		$this->form_validation->set_rules('username', 'username','trim|required|callback_authenticate');

		$this->form_validation->set_rules('password', 'password','trim|required');

		$this->form_validation->set_message('authenticate','Invalid login. Please try again.');

		return $this->form_validation->run();

	}

	public function authenticate() {
        
        //echo "/ autenticate /"+$this->input->post('password');

		return Current_User::login($this->input->post('username'),
									$this->input->post('password'));
	}

}