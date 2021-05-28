<div class="containre">
    <div class="row">
    <div class="col-md-6">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Hak Akses</th>
      <th scope="col">**</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $i = 1;
    foreach($role as $role) : ?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
      <td><?= $role['menu'] ?></td>
      <td>
        <a href="rolehakakses/<?=$role['role_menu']?>" class="badge badge-warning">Edit</a>
      </td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
    </div>
</div></div>