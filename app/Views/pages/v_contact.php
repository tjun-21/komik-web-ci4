<?= $this->extend('layouts/v_templates') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>
                Contact Us
            </h3>

            <?php foreach ($dataa as $d) { ?>
                <hr>
                <ul>
                    <li><?= $d['nama'] ?></li>
                    <li><?= $d['alamat'] ?></li>
                    <li><?= $d['email'] ?></li>
                </ul>

            <?php } ?>
            <hr>

        </div>
    </div>
</div>
<?= $this->endSection() ?>