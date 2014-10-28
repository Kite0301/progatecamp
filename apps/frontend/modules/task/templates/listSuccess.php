<section class="container">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
    <div class="content-panel">
      <h3>Tasks</h3>
      <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>タスク名</th>
                <th>詳細</th>
                <th>期限</th>
                <th>達成人数</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($tasks as $task): ?>
          <tr>
            <td><?php echo $task ?></td>
            <td><?php echo $task->getBody() ?></td>
            <td><?php echo $task->getDueDate() ?></td>
            <td><?php echo $task->getCompletedUsers() ?></td>
            <?php if (!$task): ?>
              <td>達成済</td>
            <?php else: ?>
              <td class="set-completed" data-task-id="<?php echo $task->getId() ?>">完了にする</td>
            <?php endif; ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<script>

$(function() {

  $('.set-completed').click(function() {

    var task_id = $(this).attr('data-task-id');

    var completed_td = $(this);

    var ajax_url = "<?php echo url_for('@task_ajax') ?>";

    $.ajax({
      url: ajax_url,
      type: 'POST',
      data: 'task_id=' + task_id,
    }).success(function(data){
      completed_td.html('達成済み');
    }).error(function(data){
      console.log('ajax error');
    });
  });

});

</script>