<?php
class ArticlesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('articles', $this->Article->find('all'));
    }
}
?>