<h1>Users</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Password</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['User']['name'],
            	array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
        </td>
        <td><?php echo $post['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>