<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>rumahsakit/tambah" class="btn btn-primary">Tambah
                Data Rumah Sakit</a>
        </div>
    </div>
    <h3 class="text-center">Daftar Rumah Sakit</h3>
        <table class="table">
        <thead>
        <th> No </th>
        <th> Nama Rumah Sakit </th>
        <th> Nama Pendiri </th>
        <th> Alamat </th>
        <th> Tahun Berdiri  </th>
        <th> Perizinan </th>
        <th> No Hp </th>
        <th> Aksi </th>
    </thead>
            <?php if (empty($rumahsakit)) : ?>
                <div class="alert alert-danger" role="alert">
                data Rumahsakit tidak ditemukan.
                </div>
            <?php endif; ?>
                <?php $no =1 ?>
                <?php foreach ($rumahsakit as $rsk) : ?>
                        <tbody>
                        <td><?= $no ?></td>
                        <td><?= $rsk['nama_rs']; ?></td>
                        <td><?= $rsk['nama_pendiri']; ?></td>
                        <td><?= $rsk['alamat']; ?></td>
                        <td><?= $rsk['tahun_berdiri']; ?></td>
                        <td><?= $rsk['izin']; ?></td>
                        <td><?= $rsk['no_hp']; ?></td>
                   <td> <a href="<?= base_url(); ?>rumahsakit/hapus/<?= $rsk['id']; ?>"
                        class="badge badge-danger tombol-hapus">Hapus</a>
                    <a href="<?= base_url(); ?>rumahsakit/ubah/<?= $rsk['id']; ?>"
                        class="badge badge-success ">Ubah</a></td>
                <?php $no++; endforeach; ?>

</div>