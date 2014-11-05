<?php

class Message extends AppModel
{
	 public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

	public function isOwnedBy($message, $user) {
    return $this->field('id', array('id' => $message, 'user_id' => $user)) !== false;
	}
}
?>