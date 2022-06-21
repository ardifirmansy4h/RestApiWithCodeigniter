<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                     Tambah Data Rumah Sakit
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_rs">Nama Rumah Sakit</label>
                            <input type="text" name="nama_rs" class="form-control" id="nama_rs">
                            <small class="form-text text-danger"><?= form_error('nama_rs'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_pendiri">Nama Pendiri</label>
                            <input type="text" name="nama_pendiri" class="form-control" id="nama_pendiri">
                            <small class="form-text text-danger"><?= form_error('nama_pendiri'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri">
                            <small class="form-text text-danger"><?= form_error('tahun_berdiri'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="izin">Izin</label>
                            <input type="text" name="izin" class="form-control" id="izin">
                            <small class="form-text text-danger"><?= form_error('izin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Telepon</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>