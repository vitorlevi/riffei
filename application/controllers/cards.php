<?php

class Cards extends Controller {

	public function __construct()
    {
		parent::Controller();
        
        $this->load->helper(array('form','url'));
        $this->load->helper('date');

	}
	
	function index($id=0)
	{

        $vars['cards'] = Doctrine::getTable('Card')->findById($id);
        $vars['tickets'] = Doctrine::getTable('Ticket')->findByCard_id($id);
        
        if($id == 0){
            echo "Sorry.No result to show...";
        }else{
		  $this->load->view('card/view', $vars);
        }
	}
    
    function ticket($id)
	{
        
        echo $id;
	}
    
    function create()
	{
        $this->load->view('card/create');
    }
    
    
    function save()
	{
		$c = new Card();
        
        $c->title       = $this->input->post('title');
        $c->description = $this->input->post('description');
        $c->tags        = $this->input->post('tags');
        $c->category    = $this->input->post('category');
        $c->value       = $this->input->post('value');
        $c->expiration  = $this->input->post('expiration');
        $c->images      = $this->input->post('images');
        $c->user_id     = $this->input->post('user_id');
        
        $c->save();
        
        $unity = 20;
        
        for ($i = 1; $i <= $unity; $i++){
            $names = array("name1","name2","name3","name4","name5","name6","name7","name8","name9","name10","name11","name12","name13","name14","name15","name16","name17","name18","name19","name20");
            
            $t = new Ticket();
            $t->name	= $names[$i-1];
            $t->card_id	= $c->id;
            $t->user_id	= "1" ;
            $t->value	= $c->value / $unity ;
        
            $t->save();
            
        }
        redirect('/cards/'.$t->card_id);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/card.php */


 