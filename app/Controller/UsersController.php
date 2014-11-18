<?php

class UsersController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('users', $this->User->find('all'));
    }
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $user = $this->User->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('user', $user);
    }
}

?>