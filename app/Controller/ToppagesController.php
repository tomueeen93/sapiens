<?php
class ToppagesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = array('Article','User');
	
	public function index(){
		// $this->set('users', $this->User->find('all'));
		$allArticles = $this->Article->find('all');
		 
		$this->set('articles',$this->Article->find('all'));
	}
}
