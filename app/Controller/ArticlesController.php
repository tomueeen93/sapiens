<?php
class ArticlesController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$article = $this -> Article -> findById($id);
		if (!$article) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this -> set('article', $article);
	}

	// app/Controller/PostsController.php
	public function add() {
		if ($this -> request -> is('post')) {
			// $this -> request -> data['Article']['user_id'] = $this -> Auth -> user('id');//Added this line
			if ($this -> Post -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('Your post has been saved.'));
				$this -> redirect(array('action' => 'index'));
			}
		}
	}
}
?>