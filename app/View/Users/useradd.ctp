<div id="hero-unit">
	新規ユーザー登録
	<?php echo $this->Session->flash('Auth'); ?>
	<?php echo $this->Form->create('User', array('url' => 'useradd')); ?>
	<?php echo $this->Form->input('User.name',array('label'=>'ユーザ名')); ?>
	<?php echo $this->Form->input('User.password',array('label'=>'パスワード')); ?>
	<?php echo $this->Form->input('User.pass_check',array('label'=>'パスワード確認','type'=>"password")); ?>
	<?php echo $this->Form->input('User.mail',array('label'=>'メールアドレス'));?>
	<?php echo $this->Form->end('新規ユーザを作成する'); ?>
	<a href="login" id="switch2" class="label btn-primary">ログインへ</a>
</div>