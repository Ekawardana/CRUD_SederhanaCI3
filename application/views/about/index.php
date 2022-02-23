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
                        <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" class="rounded-circle" width="150" />
                        <h4 class="card-title text-dark mt-3"><?= $admin['nama']; ?></h4>
                        <h6 class="card-subtitle mt-2 mb-4 text-primary"><?= $admin['email']; ?></h6>
                    </center>
                </div>
            </div>
        </div>
    </div>

</div>