<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <a href="<?= site_url('users/add'); ?>" class="btn btn-primary">Add User</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <h3>Users</h3>
      <?php foreach ($list as $usr) : ?>
        <ul class="list-group">
          <li class="list-group-item"><?= $usr->usr_nm; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>