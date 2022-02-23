<div class="container">

    <!-- Row -->
    <div class="row mt-3">
        <div class="col-md-6">

            <!-- Card -->
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Data Mahasiswa</h3>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?= base_url('mahasiswa/tambah') ?>" method="post">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM...">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama...">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email..."><small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <!-- Foreach untuk menampilkan data jurusan dari tabel jurusan -->
                                <?php foreach ($jurusan as $j) : ?>
                                    <option value="<?= $j['jurusan']; ?>">
                                        <?= $j['jurusan']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary float-right ml-2">
                            <i class="fa-solid fa-square-plus"></i>
                            Tambah
                        </button>

                        <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-danger float-right">
                            <i class="fa-solid fa-rotate-left"></i>
                            Kembali
                        </a>
                    </form>
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End Card -->
        </div>
    </div>
    <!-- End Row -->

</div>