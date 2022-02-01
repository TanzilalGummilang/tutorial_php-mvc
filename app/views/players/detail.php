<div class="card" style="width: 18rem;">
  <div class="card-body">

    <img src="<?= BASEURL; ?>/img/<?= $data['players']['player_image']; ?>" class="card-img-top" alt="<?= $data['players']['player_name']; ?>">

    <h5 class="card-title mt-3"><?= $data['players']['player_name']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['players']['player_code']; ?></h6>
    <p class="card-text mb-1"><?= $data['players']['nationality']; ?></p>
    <p class="card-text"><?= $data['players']['position']; ?></p>
    <p class="card-text">#<?= $data['players']['player_number']; ?></p>
    <p class="card-text mb-1"><?= $data['players']['birth_place']; ?></p>
    <p class="card-text mb-1"><?= $data['players']['birth_date']; ?></p>
    <p class="card-text mb-1"><?= $data['players']['height']; ?> cm</p>
    <p class="card-text mb-1"><?= $data['players']['position_detail']; ?></p>
    <p class="card-text">&pound<?= $data['players']['salary']; ?> /weekly</p>
    
    <a href="<?= BASEURL; ?>/players" class="card-link">Kembali</a>
  </div>
</div>