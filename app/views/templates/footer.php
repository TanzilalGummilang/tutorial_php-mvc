</div>


<!-- Modal -->
<div class="modal fade" id="formModalLabel" tabindex="-1" aria-labelledby="titleModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Tambah Data Pemain</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/players/insert" method="post">

          <div class="mb-3">
            <label for="player-code" class="form-label">Kode Pemain</label>
            <input type="text" class="form-control" id="player-code" name="player-code">
            <div class="form-text">dua digit terakhir kode pemain sama dengan no punggung. co: ply015 </div>
          </div>
          <div class="mb-3">
            <label for="player-name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="player-name" name="player-name">
          </div>
          <div class="mb-3">
            <label for="player-number" class="form-label">Nomer Punggung</label>
            <input type="text" class="form-control" id="player-number" name="player-number">
            <div class="form-text">di isi hanya dua digit</div>
          </div>
          <div class="mb-3">
            <label for="position" class="mb-3">Posisi</label>
            <select class="form-select" name="position" id="position">
              <option selected></option>
              <option value="Goalkeeper">Goalkeeper</option>
              <option value="Defender">Defender</option>
              <option value="Midfielder">Midfielder</option>
              <option value="Forward">Forward</option>
            </select>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        
        </form>

      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/public/js/bootstrap.js"></script>


</body>
</html>