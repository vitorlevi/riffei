<?php
class Card extends Doctrine_Record {

	public function setTableDefinition() {
        $this->hasColumn('title', 'string', 255);
		$this->hasColumn('description', 'string', 65535);
        $this->hasColumn('tags', 'string', 65535);
        $this->hasColumn('category', 'string', 255);
        $this->hasColumn('value', 'string', 255);
        $this->hasColumn('expiration', 'timestamp');
        $this->hasColumn('images', 'string', 65535);
        
		$this->hasColumn('user_id', 'integer', 4);
	}

	public function setUp() {
        $this->setTableName('card');
		$this->actAs('Timestampable');
        
        $this->hasMany('Ticket as Tickets', array(
			'local' => 'id',
			'foreign' => 'card_id'
		));
        
		$this->hasOne('User', array(
			'local' => 'user_id',
			'foreign' => 'id'
		));
	}

}