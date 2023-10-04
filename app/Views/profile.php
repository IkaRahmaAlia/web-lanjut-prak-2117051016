<?= $this -> extend('layouts/app') ?>
<?= $this -> section('content') ?>
   <!-- <p>Nama: Ika Rahma Alia</p>
    <p>Kelas: CD</p>
    <p>NPM: 2117051016</p> 
    -->
   
   <div class="d-flex justify-content-center align-items-center flex-column" style="height:100vh;width:100%;">
  <img src="https://avatars.githubusercontent.com/u/92287665?s=400&u=f8c9ce315bf10592bc24ba750f18088bbb3ee8a0&v=4" class="rounded-circle mx-auto d-block py-3" alt="..." width="160" height="190">
    <table class="mx-auto">
      <tr>
        <td>
          <button type="button" class="btn btn-secondary" style="width: 320px"><?= $nama ?></button>
        </td>
      </tr>
      <tr>
      <tr>
        <td>
          <button type="button" class="btn btn-secondary" style="width: 320px"><?= $npm ?></button>
        </td>
      </tr>
      <tr>
        <td>
        <button type="button" class="btn btn-secondary" style="width: 320px"><?= $kelas ?></button>
        </td>
      </tr>
  
    </table>

<?=$this->endSection() ?>
