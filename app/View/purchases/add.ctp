<h1>Add Post</h1>
<?php
echo $this->Form->create('Purchase');
echo $this->Form->input('name');
echo $this->Form->input('money');
echo $this->Form->end('Save Post');
?>