<?php
class User extends Doctrine_Record {
    
	public function setTableDefinition() {
        $this->hasColumn('name', 'string', 255);
        $this->hasColumn('lastname', 'string', 255);
        $this->hasColumn('age', 'string', 3);
        $this->hasColumn('address', 'string', 255);
        $this->hasColumn('state', 'string', 255);
        $this->hasColumn('phone', 'string', 255);
        $this->hasColumn('avatar', 'string', 65535);
        
        $this->hasColumn('flag', 'string', 255);
        $this->hasColumn('cardnumber', 'string', 16);
        $this->hasColumn('securitycode', 'string', 3);
        $this->hasColumn('valid', 'string', 7);
        
		$this->hasColumn('username', 'string', 255, array('unique' => 'true'));
		$this->hasColumn('password', 'string', 255);
		$this->hasColumn('email', 'string', 255, array('unique' => 'true'));
        
		
	}
	
	public function setUp() {
		$this->setTableName('user');
		$this->actAs('Timestampable');
		$this->hasMutator('password', '_encrypt_password');
       // $this->hasMutator('cardnumber', '_encrypt_password');
       //$this->hasMutator('securitycode', '_encrypt_password');
        
		$this->hasMany('Card as Cards', array(
			'local' => 'id',
			'foreign' => 'user_id'
		));
        
        $this->hasMany('Ticket as Tickets', array(
			'local' => 'id',
			'foreign' => 'user_id'
		));
	}

	protected function _encrypt_password($value) {
		$salt = '#*seCrEt!@-*%';
		$this->_set('password', md5($salt . $value));
	}
}
