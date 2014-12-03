<?php

class UsersController extends AppController {
	public function index() {
		$this -> User -> recursive = 0;
		$this -> set('users', $this -> paginate());
	}

	public function view($id = null) {
		$this -> User -> id = $id;
		if (!$this -> User -> exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this -> set('user', $this -> User -> read(null, $id));
	}

	public function add() {
		if ($this -> request -> is('post')) {
			$this -> User -> create();
			if ($this -> User -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The user has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this -> User -> id = $id;
		if (!$this -> User -> exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> User -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The user has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The user could not be saved. Please try again.'));
			}
		} else {
			$this -> request -> data = $this -> User -> read(null, $id);
			unset($this -> request -> data['User']['password']);
		}
	}

	public function delete($id = null) {
		$this -> request -> onlyAllow('post');

		$this -> User -> id = $id;
		if (!$this -> User -> exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this -> user -> delete()) {
			$this -> Session -> setFlash(__('User deleted'));
			$this -> redirect(array('action' => 'index'));
		}
		$this -> Session -> setFlash(__('User was not deleted'));
		$this -> redirect(array('action' => 'index'));
	}

	// public function login() {
		// if ($this -> request -> is('post')) {
			// if ($this -> Auth -> login()) {
				// $this -> redirect($this -> Auth -> redirect());
			// } else {
				// $this -> Session -> setFlash(__('Invalid username or password, try again'));
			// }
		// }
	// }

	// public function logout() {
		// $this -> redirect($this -> Auth -> logout());
	// }
	/*
	 * WEBコピー
	 */
	 
	// public function beforeFilter(){//login処理の設定
			// parent::beforeFilter();
		 	// $this->Auth->allow('login','logout','useradd','add');//ログインしないで、アクセスできるアクションを登録する
		 	// $this->set('user',$this->Auth->user()); // ctpで$userを使えるようにする 。
	// }
	
	// public function login() {//ログイン
		// if ($this -> request -> is('post')) {//POST送信なら
			// if ($this -> Auth -> login()) {//ログイン成功なら
				// //$this->Session->delete('Auth.redirect'); //前回ログアウト時のリンクを記録させない
				// return $this -> redirect($this -> Auth -> redirect());
				// //Auth指定のログインページへ移動
			// } else {//ログイン失敗なら
				// $this -> Session -> setFlash(__('ユーザ名かパスワードが違います'),'default',array());
			// }
		// }
	// }

	// public function logout() {
		// $this -> Auth -> logout();
		// $this -> Session -> destroy();
		// //セッションを完全削除
		// $this -> Session -> setFlash(__('ログアウトしました'));
		// $this -> redirect(array('action' => 'login'));
	// }

	public function useradd() {
		//POST送信なら
		if ($this -> request -> is('post')) {
			//パスワードとパスチェックの値をハッシュ値変換
			$this -> request -> data['User']['password'] = AuthComponent::password($this -> request -> data['User']['password']);
			$this -> request -> data['User']['pass_check'] = AuthComponent::password($this -> request -> data['User']['pass_check']);
			//入力したパスワートとパスワードチェックの値が一致
			if ($this -> request -> data['User']['pass_check'] === $this -> request -> data['User']['password']) {
				$this -> User -> create();
				//ユーザーの作成
				$mse = ($this -> User -> save($this -> request -> data)) ? '新規ユーザーを追加しました' : '登録できませんでした。やり直して下さい';
				$this -> Session -> setFlash(__($mes));
			} else {
				$this -> Session -> setFlash(__('パスワード確認の値が一致しません．'));
			}
			$this -> redirect(array('action' => 'login'));
			//リダイレクト
		}
	}
	
	/**
	 * 動画参考
	 */
	 function beforeFilter(){
	 	parent::beforeFilter();
		$this->Auth->allow('add','logout');
		$this->Auth->fields = array(
			'username' => 'username', 
			'password' => 'password'
		);
		
		if($this->action == 'add' || $this->action == 'edit'){
			// $this->Auth->authenticate=array(
				// 'Form'=>array(
					// 'userModel'=>'User'
				// )
			// );
		}
	 }
	 
	 function login(){
	 	if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        } else {
	        	// $message="{$this->request->data['User']['username']} , {$this->request->data['User']['password']}";
		 		// $this->Session->setFlash(__($message));
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
		}
	 }
	 
	 function logout(){
	 	$this->redirect($this->Auth->logout());
	 }
	 
}
?>