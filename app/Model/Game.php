<?php 

class Game extends AppModel {
	public $validate = array(
		'location' => array(
			'rule' => 'notEmpty'),

		'buyin' => array(
			'rule' => 'notEmpty'),

		'cashout' =>array(
			'rule' => 'notEmpty')
		);
}
