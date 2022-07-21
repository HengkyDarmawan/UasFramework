<h1 style="text-align: center;"><?= $title; ?></h1>
<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif ?>
<form action="" method="post">
    <input type="hidden" name="id" value="<?= $buku['id']; ?>">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $buku['nama']; ?>">
    </div>
    <div class="mb-3">
        <label for="pencipta" class="form-label">Pencipta</label>
        <input type="text" name="pencipta" class="form-control" id="pencipta" value="<?= $buku['pencipta']; ?>">
    </div>
    <div class="mb-3">
        <label for="tglterbit" class="form-label">Tanggal Terbit</label>
        <input type="text" name="tglterbit" class="form-control" id="tglterbit" value="<?= $buku['tglterbit']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>