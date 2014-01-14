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
    
    public function create()
	{
        $this->load->view('card/create');
    }
    
    
    public function save()
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
            $t->user_id	= $c->user_id ;
            $t->value	= $c->value / $unity ;
        
            $t->save();
            
        }
        redirect('/cards/'.$t->card_id);
	}
    
    public function checkout()
	{
        $user_id     = $this->input->post('user_id');
        $items       = $this->input->post('items');
        
        
        $pieces = explode(",", $items);
        $arrayLength = count($pieces);
        
        $arrayLength = $arrayLength -1;
        for ($i = 0; $i <= $arrayLength; $i++){
            echo $user_id." -> ".$pieces[$i]."<br>";
            

            $u = Doctrine::getTable('Ticket')->find($pieces[$i]);
            
            $u->user_id = $user_id;
            
            $u->save();
        }
    
    }
}

/* End of file cards.php */
/* Location: ./system/application/controllers/cards.php */


 