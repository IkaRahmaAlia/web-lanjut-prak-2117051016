<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
</head>
<body>
    <div class="container">
        <form action="<?=base_url('user/store')?>" method="post">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Nama</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nama" placeholder="Masukkan nama">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">NPM</label>
                </div>
                <div class="col-75">
                    <input type="text" name="npm" placeholder="Masukkan NPM">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Kelas</label>
                </div>
                <div class="col-75">
                    <input type="text" name="kelas" placeholder="Kelas">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
    <table>
        <!-- <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr> -->
        <!-- <tr>
            <td>NPM</td>
            <td>:</td>
            <td><input type="text" name="npm"></td>
        </tr>
         <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas"></td>
        </tr>
         <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr> 
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr> -->
    </table>
</body>
</html>