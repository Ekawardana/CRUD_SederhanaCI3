<!-- Container -->
<div class="container">
    <div class="jumbotron mt-3">
        <h1 class="display-4"> Selamat Datang <b><?= $admin['nama']; ?></b></h1>
        <p class="lead">Website ini digunakan untuk mengelola data mahasiswa seperti menambah, mengubah, menghapus sampai mencari data mahasiswa</p>
        <hr class="my-4">

        <!-- Tombol -->
        <a class="btn btn-primary btn-lg" href="<?= base_url('mahasiswa'); ?>" role="button">
            <i class="fa-solid fa-right-to-bracket ml-2"></i> Data Mahasiswa
        </a>
    </div>
</div>
<!-- End Of Container -->