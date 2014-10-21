<div class="confirm">
  <section class="container">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
      <div class="content-panel">
        <h3>Users</h3>
        <table class="table table-striped table-hover">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Gender</th>
                  <th>Birthday</th>
                  <th>Applied at</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
              <td><?php echo link_to($user, '@user_show?id='.$user->getId()) ?></td>
              <td><?php echo $user->getEmail() ?></td>
              <td><?php echo $user->getPhoneNumber() ?></td>
              <td><?php echo $user->getGender() ?></td>
              <td><?php echo $user->getBirthday() ?></td>
              <td><?php echo $user->getCreatedAt() ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>