<?php
// フォームからデータを登録する場合、複数形(Purchases)になったほうが何かと都合が良い
class PurchasesController extends AppController {
	// モデルの定義
	 public $helpers = array('Html', 'Form','Session');
	 public $components = array('Session');
	// 登録データ一覧
	function index(){
		$this->set('purchases', $this->Purchase->find('all'));
	}
	// データの登録
	function add(){
		if($this->request->is('post')) {
			$this->Purchase->create();
			if($this->Purchase->save($this->request->data)){
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your post'));
		}
	}
	// データの編集
	function edit($id = null){
		
	}
	// データの削除 View無し
	function delete($id){
		
	}
	// データの詳細を見る
	function view($id){
		
	}
}
?>