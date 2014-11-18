<?php
class ToppagesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = array('Article');
	
	public function index(){
		// $this->set('users', $this->User->find('all'));
		$allArticles = $this->Article->find('all');
		 
		$this->set('articles',$this->Article->find('all'));
	}
	
	public function view($id){
		 if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $article = $this->Article->findById($id);
        if (!$article) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('article', $article);
	}
}
