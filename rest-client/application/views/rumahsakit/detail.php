<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Rumahsakit
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $rumahsakit['id']; ?></h5>
                    <h5 class="card-title"><?= $rumahsakit['nama_rs']; ?></h5>
                    <h5 class="card-title"><?= $rumahsakit['nama_pendiri']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $rumahsakit['alamat']; ?></h6>
                    <p class="card-text"><?= $rumahsakit['tahun_berdiri']; ?></p>
                    <p class="card-text"><?= $rumahsakit['izin']; ?></p>
                    <p class="card-text"><?= $rumahsakit['no_hp']; ?></p>
                    <a href="<?= base_url(); ?>rumahsakit" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>