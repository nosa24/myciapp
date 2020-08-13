<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Data Mahasiswa</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?> : <?= $mahasiswa['nrp']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="badge badge-primary float-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>