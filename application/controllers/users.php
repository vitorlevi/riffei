<?php

class Users extends Controller {

	public function __construct()
    {
		parent::Controller();
        $this->load->helper('array');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
	}
	
	public function index($id=1)
	{
		
        
        $u = Doctrine::getTable('User')->find($id);
        
       echo $u->username;

	}
    
    public function register()
	{
		$this->load->helper(array('form','url'));
        $this->load->view('user/create');
	}
    
    public function save()
	{

		$this->form_validation->set_rules('name','name', 'required|min_length[3]');
        
        $this->form_validation->set_rules('lastname', 'lastname', 'required|min_length[3]');
        
        $this->form_validation->set_rules('age', 'age', 'alpha_numeric|min_length[1]');
        
        $this->form_validation->set_rules('address', 'address', 'min_length[3]');
        
        $this->form_validation->set_rules('state', 'state', 'required|min_length[2]');
        
        $this->form_validation->set_rules('phone', 'phone', 'alpha_numeric|min_length[3]');
        
        $this->form_validation->set_rules('avatar', 'avatar', 'min_length[3]');
        
        $this->form_validation->set_rules('flag', 'flag', 'required');
        
        $this->form_validation->set_rules('cardnumber', 'cardnumber', 'required|alpha_numeric|min_length[11]|max_length[11]');
        
        $this->form_validation->set_rules('securitycode', 'securitycode', 'required|alpha_numeric|min_length[3]|max_length[3]');
        
        $this->form_validation->set_rules('valid', 'valid', 'required|min_length[5]');
		
		$this->form_validation->set_rules('username', 'username', 'required|unique[User.email]|unique[User.username]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]|md5');

		$this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]');

		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|unique[User.email]|unique[User.email]');
        
        if ($this->form_validation->run() == FALSE)
		{
            $this->load->view('user/create');
		}
		else
		{
			$this->load->view('user/sucess');
		}
        
        $u = new User();
        
        $u->name        = $this->input->post('name');
        $u->lastname    = $this->input->post('lastname');
        $u->age         = $this->input->post('age');
        $u->address     = $this->input->post('address');
        $u->state       = $this->input->post('state');
        $u->phone       = $this->input->post('phone');
        $u->avatar      = $this->input->post('avatar');
        $u->flag        = $this->input->post('flag');
        $u->cardnumber  = $this->input->post('cardnumber');
        $u->securitycode= $this->input->post('securitycode');
        $u->valid       = $this->input->post('valid');
        $u->username    = $this->input->post('username');
        $u->password    = $this->input->post('password');
        $u->email       = $this->input->post('email');
        
 
        $u->save();
        //$this->load->view('user/sucess');
        redirect('/users/'.$u->id);
        redirect('/login/');
	}
    
    private function _submit_validate() {
        
       $this->form_validation->set_rules('name','name', 'required|min_length[3]');
        
        $this->form_validation->set_rules('lastname', 'lastname', 'required|min_length[3]');
        
        $this->form_validation->set_rules('age', 'age', 'alpha_numeric|min_length[1]');
        
        $this->form_validation->set_rules('address', 'address', 'min_length[3]');
        
        $this->form_validation->set_rules('state', 'state', 'required|min_length[2]');
        
        $this->form_validation->set_rules('phone', 'phone', 'alpha_numeric|min_length[3]');
        
        $this->form_validation->set_rules('avatar', 'avatar', 'min_length[3]');
        
        $this->form_validation->set_rules('flag', 'flag', 'required');
        
        $this->form_validation->set_rules('cardnumber', 'cardnumber', 'required|alpha_numeric|min_length[11]|max_length[11]');
        
        $this->form_validation->set_rules('securitycode', 'securitycode', 'required|alpha_numeric|min_length[3]|max_length[3]');
        
        $this->form_validation->set_rules('valid', 'valid', 'required|min_length[5]');
		// validation rules
		$this->form_validation->set_rules('username', 'username', 'required|unique[User.email]|unique[User.username]');

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]|md5');

		$this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]');

		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|unique[User.email]|unique[User.email]');

		return $this->form_validation->run();

	}
    
}

/* End of file users.php */
/* Location: ./system/application/controllers/users.php */