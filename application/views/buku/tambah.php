<h1 class="text-center"><?= $title; ?></h1>
<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
<?php endif; ?>
<form action="" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Buku</label>
        <input type="text" name="nama" class="form-control" id="nama">
    </div>
    <div class="mb-3">
        <label for="pencipta" class="form-label">Pencipta</label>
        <input type="text" name="pencipta" class="form-control" id="pencipta">
    </div>
    <div class="mb-3">
        <label for="tglterbit" class="form-label">Tanggal Terbit</label>
        <input type="text" name="tglterbit" class="form-control" id="tglterbit">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>