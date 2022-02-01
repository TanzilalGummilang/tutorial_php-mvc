<div class="row">
  <div class="col-6">
    <h3>Daftar Pemain</h3>
    
    <?php foreach ($data['players'] as $players) : ?>
      <div class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <?= $players['player_name']; ?>
          <a href="<?= BASEURL; ?>/players/detail/<?= $players['player_code']; ?>" class="badge bg-info text-dark">Detail</a>
        </li>
      </div>
    <?php endforeach; ?>
  </div>
</div>