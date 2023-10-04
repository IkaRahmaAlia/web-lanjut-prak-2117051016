<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
    <!-- Ini halaman list user -->

<figure>
    <center>
    <h1>WEB LANJUT</h1>
  <blockquote class="blockquote">
    <p>Data User</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Praktikum <cite title="Source Title"></cite>
</center>
  </figcaption>
</figure>
<!-- <a href="tambah.php" class="btn btn-primary">Tambah Data</a> -->

<div class= "container">
<table class="table table-success">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        foreach ($users as $user){
        ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>