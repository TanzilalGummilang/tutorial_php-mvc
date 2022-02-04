<div class="row">
  <div class="col-6">
    

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formModalLabel">
  Tambah Data Pemain
</button>


    <h3>Daftar Pemain</h3>

    <ul class="list-group">
      <?php foreach ($data['players'] as $players) : ?>
        <li class="list-group-item">
          <?= $players['player_name']; ?>
          <a href="<?= BASEURL; ?>/players/detail/<?= $players['player_code']; ?>" class="badge bg-light text-primary float-start">#<?= $players['player_number']; ?></a>
          <a href="<?= BASEURL; ?>/players/detail/<?= $players['player_code']; ?>" class="badge bg-info text-dark float-end">Detail</a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

