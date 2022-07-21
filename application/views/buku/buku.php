<h2 class="text-center mb-4">Data Buku</h2>
<?php if ($this->session->flashdata('flashdata')) : ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Buku Berhasil di <strong><?= $this->session->flashdata('flashdata'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
<?php endif; ?>
<a href="<?= base_url(); ?>buku/tambah" class="btn btn-outline-success mb-2">Tambah</a>
<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Pencipta</th>
            <th>Tanggal Terbit</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1; ?>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $book['nama']; ?></td>
                <td><?= $book['pencipta']; ?></td>
                <td><?= $book['tglterbit']; ?></td>
                <td>
                    <a href="<?= base_url() ?>buku/update/<?= $book['id']; ?>" class="btn btn-outline-primary">
                        <i class="bi bi-pencil-square"></i> Update
                    </a>
                    <a href="<?= base_url() ?>buku/delete/<?= $book['id']; ?>" class="btn btn-outline-danger" onclick="return confirm('menghapus data ?')">
                        <i class="bi bi-trash"></i> Delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>