<div class="container">

  <div class="row">
    <div class="col-6">
      <h3 class="mt-4">Daftar Pemain</h3>
      
      <?php foreach ($data['players'] as $players) : ?>
        <ul>
          <li><?= $players['player_code']; ?></li>
          <li><?= $players['player_name']; ?></li>
          <li><?= $players['player_number']; ?></li>
          <li><?= $players['position']; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>

</div>