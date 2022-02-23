<div class="container">

    <!-- Row -->
    <div class="row mt-3">
        <div class="col-md-6">

            <!-- Card -->
            <div class="card">
                <div class="card-header">
                    <h3>Ubah Data Mahasiswa</h3>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?= base_url('mahasiswa/ubah'); ?>" method="post">

                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $mahasiswa['id']; ?>">

                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>"><small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <!-- Foreach untuk menampilkan data jurusan dari tabel jurusan -->
                                <?php foreach ($jurusan as $j) : ?>
                                    <!-- Cek Jurusan Jika Sama Maka Selected -->
                                    <?php if ($j['jurusan'] == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $j['jurusan']; ?>" selected>
                                            <?= $j['jurusan']; ?>
                                        </option>
                                    <?php else : ?>
                                        <!-- jika tidak maka tampil semua data tarif -->
                                        <option value="<?= $j['jurusan']; ?>">
                                            <?= $j['jurusan']; ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary float-right ml-2">
                            <i class="fa-solid fa-square-plus"></i>
                            ubah
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