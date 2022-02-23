<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-block mb-2">
                    <center class="mt-4">
                        <img src="<?= base_url('assets/img/profile/') . $mahasiswa['image']; ?>" class="rounded-circle" width="150" />
                        <h4 class="card-title text-dark mt-3"><?= $mahasiswa['nama']; ?></h4>
                        <h6 class="card-subtitle mt-2 mb-4 text-primary"><?= $mahasiswa['email']; ?></h6>
                    </center>
                </div>
            </div>
        </div>


        <!-- Tampilan Detail -->
        <div class="col-lg-6 col-xlg-3 col-md-5">
            <div class="card">
                <!-- Header Card -->
                <div class="card-header">
                    <h2 class="h3 text-gray-800">Detail</h2>
                </div>
                <div class="card-block mx-3 my-2">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">NIM : <?= $mahasiswa['nim']; ?></li>
                        <li class="list-group-item">Nama Mahasiswa : <?= $mahasiswa['nama']; ?></li>
                        <li class="list-group-item">Email : <?= $mahasiswa['email']; ?></li>
                        <li class="list-group-item">Jurusan : <?= $mahasiswa['jurusan']; ?></li>
                    </ul>
                </div>
            </div>

            <a href="<?= base_url('mahasiswa'); ?>" class="btn btn-danger mt-3">
                <i class="fa-solid fa-rotate-left"></i>
                Kembali
            </a>
        </div>


    </div>
    <!-- End Row -->
</div>
<!-- /.container -->

</div>
<!-- End of Main Content -->