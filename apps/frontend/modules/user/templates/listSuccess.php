<section class="container">
  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
    <div class="content-panel">
      <h3>Users</h3>
      <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>総学習時間</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
          <tr>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>