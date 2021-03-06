<?php
// auto-generated by sfPropelCrud
// date: 2014/10/22 16:38:29
?>
<h1>task</h1>

<table>
<thead>
<tr>
  <th>Title</th>
  <th>Body</th>
  <th>Completed users</th>
  <th>Display</th>
  <th>Created at</th>
  <th>Updated at</th>
  <th>Id</th>
</tr>
</thead>
<tbody>
<?php foreach ($tasks as $task): ?>
<tr>
    <td><?php echo $task->getTitle() ?></td>
      <td><?php echo $task->getBody() ?></td>
      <td><?php echo $task->getCompletedUsers() ?></td>
      <td><?php echo $task->getDisplay() ?></td>
      <td><?php echo $task->getCreatedAt() ?></td>
      <td><?php echo $task->getUpdatedAt() ?></td>
      <td><?php echo link_to($task->getId(), 'task/show?id='.$task->getId()) ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'task/create') ?>
