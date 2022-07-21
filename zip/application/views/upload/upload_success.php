<h3>Your File was successfully uploaded!</h3>
<ul>
    <?php foreach ($upload_data as $gambar => $value) : ?>
        <li><?= $gambar; ?>: <?= $value; ?></li>
    <?php endforeach; ?>
</ul>
<p><?= anchor('buku/upload', 'Upload Another File'); ?></p>