<?php

App::uses('AppModel','Model');
App::uses('SimplePasswordHasher','Controller/Component/Auth');

class User extends AppModel {
	public $displayField = 'name';
	
	public $validate = array(
		'name'=> array(
			'Please enter your name.' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required'
			)
		),
		'username'=>array(
			'The username must be beetween 5 and 15 characters.'=>array(
				'rule' => array('between',5,15),
				'message'=>'The username must be beetween 5 and 15 characters.'
			),
			'That username has already been taken.' => array(
				'rule'=>'isUnique',
				'message'=>'That username has already been taken.'
			)
		),
		'password'=> array(
			'The password must be between 5 and 15 characters.' => array(
				'rule'=>array('between',5,15),
				'message'=>'The password must be between 5 and 15 characters.'
			),
			'The passwords do not match' => array(
				'rule' => array('matchPasswords'),
				'message'=>'The passwords do not match'
			)
		)
	);
	
	function matchPasswords($data){
		if($data['password'] == $this->data['User']['password_confirmation']){
			return TRUE;
		}
		$this->invalidate('password_confirmation','The passwords do not match');
		return FALSE;
	}
	
	public function beforeSave($options=array()) {
		if(isset($this->data[$this->alias]['password'])){
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}
	
	/*
	 * 以下動画参考
	 */
	
	function hashPassword($data){
		if(isset($this->data['User']['password'])){
			$this->data['User']['password'] = Security::hash($this->data['User']['password'],NULL,TRUE);
			return $data;
		}
		return $data;
	}
}
?>