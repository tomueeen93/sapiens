<?php
class CommentsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('comments', $this->Comment->find('all'));
    }
}
?>