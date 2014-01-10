<?php
class Ticket extends Doctrine_Record {

	public function setTableDefinition() {
        $this->hasColumn('name', 'string', 255);
        $this->hasColumn('value', 'string', 255);
        $this->hasColumn('avatar', 'string', 65535);
        
        $this->hasColumn('card_id', 'integer', 4);
		$this->hasColumn('user_id', 'integer', 4);
	}

	public function setUp() {
        $this->setTableName('ticket');
		$this->actAs('Timestampable');
        
        $this->hasOne('Card', array(
			'local' => 'card_id',
			'foreign' => 'id'
		));
        $this->hasOne('User', array(
			'local' => 'user_id',
			'foreign' => 'id'
		));
	}

}