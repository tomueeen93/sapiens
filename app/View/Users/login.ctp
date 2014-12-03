<!-- <div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('name');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div> -->

<!-- WEBコピー -->
<!-- <div class="hero-unit">
	<?php echo $this->Session->flash('Auth'); ?>
	<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Form->input('User.mail', array('label' => 'メールアドレス')); ?>
	<?php echo $this->Form->input('User.password', array('label' => 'パスワード')); ?>
	<?php echo $this->Form->end('login'); ?>
	
	<a href="useradd" id="switch" class="label btn-primary">新規登録</a>
</div> -->

<!-- 動画参考 -->
<h1>Login</h1>
<?php echo $this->Session->flash('Auth'); ?>
<?php echo $this->Form->create('User', array('action' => 'login')); ?>
<?php echo $this->Form->input('username'); ?>
<?php echo $this->Form->input('password'); ?>
<?php echo $this->Form->end(__('Login',TRUE)); ?>
