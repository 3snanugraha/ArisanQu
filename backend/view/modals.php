<!-- Modal Tambah Data Group -->
<div class="modal fade" id="tambah-data-group" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" width="120px" src="../view/assets/img/group.svg" rel="icon">
          </div>

          <h6 class="text-center">Silahkan isi data dengan lengkap di bawah ini. </h6>
          <hr>

          <div class="row mt-2">
            <div class="col-3">
              <label for="group_name">Nama Group</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="group_name" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="group_description">Deskripsi</label>
            </div>
            <div class="col-9">
              <textarea class="form-control rounded-pill" name="group_description" required></textarea>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="group_description">Total</label>
            </div>
            <div class="col-9">
            <input type="text" class="form-control rounded-pill" name="total" required>
            </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batalkan</button>
         <button class="btn btn-brand-primary rounded-pill" type="submit" name="tambahgrup">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Modal Tambah Data Peserta -->
<div class="modal fade" id="tambah-data-participant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Peserta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" width="120px" src="../view/assets/img/group.svg" rel="icon">
          </div>

          <h6 class="text-center">Silahkan isi data dengan lengkap di bawah ini. </h6>
          <hr>

          <div class="row mt-2">
            <div class="col-3">
              <label for="user_id">Nama Pengguna</label>
            </div>
            <div class="col-9">
              <select class="form-control rounded-pill" name="user_id" required>
                <?php
                  $users = getDataPengguna();
                  foreach ($users as $user) {
                    echo "<option value='{$user['id']}'>{$user['name']}</option>";
                  }
                ?>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="group_id">Nama Kelompok</label>
            </div>
            <div class="col-9">
              <select class="form-control rounded-pill" name="group_id" required>
                <?php
                  $groups = getDataKelompok();
                  foreach ($groups as $group) {
                    echo "<option value='{$group['id']}'>{$group['name']}</option>";
                  }
                ?>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="join_date">Tanggal Bergabung</label>
            </div>
            <div class="col-9">
              <input type="date" class="form-control rounded-pill" name="join_date" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="status">Status</label>
            </div>
            <div class="col-9">
              <select class="form-control rounded-pill" name="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="total">Total</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="total" required>
            </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batalkan</button>
        <button class="btn btn-brand-primary rounded-pill" type="submit" name="tambahpeserta">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah Data Peserta -->


<!-- Modal Tambah Data Pengguna -->
<div class="modal fade" id="tambah-data-user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Pengguna</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" width="120px" src="../view/assets/img/group.svg" rel="icon">
          </div>

          <h6 class="text-center">Silahkan isi data dengan lengkap di bawah ini. </h6>
          <hr>

          <div class="row mt-2">
            <div class="col-3">
              <label for="name">Nama Lengkap</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="name" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="username">Username</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="username" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="password">Password</label>
            </div>
            <div class="col-9">
              <input type="password" class="form-control rounded-pill" name="password" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="email">Email</label>
            </div>
            <div class="col-9">
              <input type="email" class="form-control rounded-pill" name="email" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="phone">Nomor Telepon</label>
            </div>
            <div class="col-9">
              <input type="text" class="form-control rounded-pill" name="phone" required>
            </div>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batalkan</button>
        <button class="btn btn-brand-primary rounded-pill" type="submit" name="tambah-pengguna">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah Data Pengguna -->


   <!-- Modal Tambah Transaksi -->
   <div class="modal fade" id="tambah-transaksi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahTransaksiLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahTransaksiLabel">Tambah Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" width="120px" src="../view/assets/img/transaction.png" rel="icon">
          </div>

          <h6 class="text-center">Silahkan isi data dengan lengkap di bawah ini. </h6>
          <hr>

         
          <div class="row mt-2">
            <div class="col-3">
              <label for="nama_anggota">Nama Anggota</label>
            </div>
            <div class="col-9">
              <select class="form-control rounded-pill" name="nama_anggota" id="nama_anggota" required>
                <option value="">Pilih Nama Anggota</option>
                <?php
                $users = getDataPengguna();
                foreach ($users as $user) {
                  echo "<option value='{$user['id']}'>{$user['name']}</option>";
                }

               
                ?>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="group_id">Nama Kelompok</label>
            </div>
            <div class="col-9">
              <select class="form-control rounded-pill" name="group_id" required>
                <?php
                  $groups = getDataKelompok();
                  foreach ($groups as $group) {
                    echo "<option value='{$group['id']}'>{$group['name']}</option>";
                  }
                ?>
              </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="jumlah">Jumlah Pembayaran</label>
            </div>
            <div class="col-9">
              <input type="number" class="form-control rounded-pill" name="jumlah" id="jumlah" required>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-3">
              <label for="tanggal">Tanggal Pembayaran</label>
            </div>
            <div class="col-9">
              <input type="date" class="form-control rounded-pill" name="tanggal" id="tanggal" required>
            </div>
          </div>

          <hr>
          <div class="mt-4 text-center">
            <button class="btn btn-brand-primary rounded-pill" type="submit" name="tambah-transaksi">Simpan</button>
            <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batalkan</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Tambah Transaksi -->




