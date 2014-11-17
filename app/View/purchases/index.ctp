<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td>id</td>
		<td>カテゴリー</td>
		<td>タイトル</td>
		<td>評価数</td>
		<td>投稿日時</td>		
	</tr>
	<?php foreach ($purchases as $purchase): ?>
		<tr>
			<td><?php echo $purchase['Purchase']['id']; ?></td>
			<td></td>
			<td>
            	<?php echo $this->Html->link($purchase['Purchase']['name'],
            		array('controller' => 'purchases', 'action' => 'view',
            		$purchase['Purchase']['id'])); ?>
            </td>	
			<td><?php echo $purchase['Purchase']['money']; ?></td>
			<td><?php echo $purchase['Purchase']['created']; ?></td>
			<td>編集</td>
			<td>削除</td>
		</tr>
	<?php endforeach; ?>
</table>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'purchases', 'action' => 'add')
); ?>