<?= $error; ?>
<?= form_open_multipart('buku/do_upload'); ?>
<div class="mb-3">
    <label for="gambar" class="form-label">Upload Gambar</label>
    <input type="file" name="gambar" class="form-control" id="gambar">
</div>
<button type="submit" class="btn btn-primary">Upload</button>
<?= form_close(); ?>