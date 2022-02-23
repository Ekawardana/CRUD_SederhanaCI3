<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
            <h3 class="pb-3">Data Mahasiswa</h3>

            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary mr-1 mb-3">
                <i class="fas fa-plus-circle"></i> Tambah Data Mahasiswa
            </a>

            <!-- Search -->
            <div class="row mt-2">
                <div class="col-md">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Data Mahasiswa...." name="keyword" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-magnifying-glass"></i>
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Search -->

            <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                    Mahasiswa Tidak Ditemukan....!
                </div>
            <?php endif; ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $mhs['nama']; ?></td>
                            <td>
                                <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id']; ?>" title="Detail Mahasiswa" class="btn btn-outline-warning mr-1 btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>

                                <a href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id']; ?>" title="Ubah Mahasiswa" class="btn btn-outline-success mr-1 btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id']; ?>" title="Hapus Mahasiswa" class="btn btn-outline-danger btn-sm tombol-hapus">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>