<?= $this->extend('layouts/v_templates') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h2>
                Detail Komik
            </h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['komik_gambar'] ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['komik_nama'] ?></h5>
                            <p class="card-text"><b>Penulis : </b><?= $komik['penulis'] ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $komik['komik_penerbit'] ?></small></p>

                            <a href="/#" class="btn btn-warning">Edit</a>
                            <a href="/#" class="btn btn-danger">Delete</a>
                            <br>
                            <a href="/komik" class="btn btn-primary mt-2">Kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>