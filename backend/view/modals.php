<!-- Modal Tambah Data Material -->
<div class="modal fade" id="tambah-data-material" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Material</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" width="120px" src="../view/assets/img/material.png" rel="icon">
          </div>

          <h6 class="text-center">Silahkan isi data dengan lengkap di bawah ini. </h6>
          <hr>

          <div class="row mt-2">
            <div class="col-3">
              <label for="material_name">Nama Material</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="material_name" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="satuan_id">ID Satuan</label>
            </div>
            <div class="col-9">
              <select name="satuan_id" class="form-select rounded-pill" required>
              <option value="">-- Pilih Satuan --</option>
              <?php 
              $data_satuan=getDataSatuan();
              foreach($data_satuan as $fetch_satuan){
              ?>
              <option value="<?= $fetch_satuan['satuan_id'];?>"><?= "#" . $fetch_satuan['satuan_id'] . " - " . $fetch_satuan['satuan_name'];?></option>
              <?php } ?>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="stock">Stock</label>
            </div>
            <div class="col-9">
              <input type="number" class="form-control rounded-pill" name="stock" required>
            </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batalkan</button>
         <button class="btn btn-primary rounded-pill" type="submit" name="tambah-material">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->


<!-- Modal Tambah Data Satuan -->
<div class="modal fade" id="tambah-data-satuan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Satuan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" width="120px" src="../view/assets/img/material.png" rel="icon">
          </div>

          <h6 class="text-center">Silahkan isi data dengan lengkap di bawah ini. </h6>
          <hr>

          <div class="row mt-2">
            <div class="col-3">
              <label for="satuan_name">Nama Satuan</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="satuan_name" required>
            </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batalkan</button>
         <button class="btn btn-primary rounded-pill" type="submit" name="tambah-satuan">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- End modal -->
