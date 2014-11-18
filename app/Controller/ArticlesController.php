<?php
class ArticlesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index ($id){
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
?>