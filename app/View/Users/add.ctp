<!-- app/View/Users/add.ctp -->
<!-- <div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('name');
        echo $this->Form->input('mail');
		echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div> -->

<!-- 動画参考 -->
<div class="users form">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend><?php echo __('Register'); ?></legend>
			<?php echo $this->session->flash('auth'); ?>
			<?php
				echo $this->Form->input('name');
				echo $this->Form->input('username');
				echo $this->Form->input('password');
				echo $this->Form->input('password_confirmation',array('type'=>'password'));
				if($admin){
					echo $this->Form->input('roles');
				}
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit',TRUE)); ?>
</div>