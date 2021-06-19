<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 20, Rifqi Putra T S XI RPL 2</title>
    <link rel="stylesheet" type="text/css" href="assets/akai.css">
</head>
<body>
    <?php
        $action = 'tambah.php';
        if (!empty($siswa)) $action = 'edit.php'
    ?>
    <form method="POST" enctype="multipart/form-data" action="<?php $action = '$tambah.php'; if (!empty($siswa)) $action = 'edit.php'?>">
        <div>
            <div >
                <span>NIS</span>
            </div>
            <input type="text" placeholder="Masukkan Nomor induk siswa" name="nis" value="<?= @$siswa['nis'] ?>" required>
        </div>
        <div>
            <div>
                <span>Nama Lengkap</span>
            </div>
            <input type="text" placeholder="Masukkan Nama Lengkap" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>" required>
        </div>
        <div>
            <label>
            <h5>Jenis Kelamin :</h5>
                <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?> required> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>> Perempuan
            </label>
        </div>
        <div>
            <div>
                <label>Kelas</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="kelas" required>
                <option value="XI MM" <?= @$siswa['kelas'] == 'XI MM' ? 'selected' : '' ?>>XI MM</option>
                <option value="XI RPL 1" <?= @$siswa['kelas'] == 'XI RPL 1' ? 'selected' : '' ?>>XI RPL 1</option>
                <option value="XI RPL 2" <?= @$siswa['kelas'] == 'XI RPL 2' ? 'selected' : '' ?>>XI RPL 2</option>
                <option value="XI RPL 3" <?= @$siswa['kelas'] == 'XI RPL 3' ? 'selected' : '' ?>>XI RPL 3</option>
                <option value="XI TKJ 1" <?= @$siswa['kelas'] == 'XI TKJ 1' ? 'selected' : '' ?>>XI TKJ 1</option>
                <option value="XI TKJ 2" <?= @$siswa['kelas'] == 'XI TKJ 2' ? 'selected' : '' ?>>XI TKJ 2</option>
                <option value="XI TOI 1" <?= @$siswa['kelas'] == 'XI TOI 1' ? 'selected' : '' ?>>XI TOI 1</option>
                <option value="XI TOI 2" <?= @$siswa['kelas'] == 'XI TOI 2' ? 'selected' : '' ?>>XI TOI 2</option>
                <option value="XI TITL 1" <?= @$siswa['kelas'] == 'XI TITL 1' ? 'selected' : '' ?>>XI TITL 1</option>
                <option value="XI TITL 2" <?= @$siswa['kelas'] == 'XI TITL 2' ? 'selected' : '' ?>>XI TITL 2</option>
                <option value="XI AVI 1" <?= @$siswa['kelas'] == 'XI AVI 1' ? 'selected' : '' ?>>XI AVI 1</option>
                <option value="XI AVI 2" <?= @$siswa['kelas'] == 'XI AVI 2' ? 'selected' : '' ?>>XI AVI 2</option>
                <option value="XI AVI 3" <?= @$siswa['kelas'] == 'XI AVI 3' ? 'selected' : '' ?>>XI AVI 3</option>
                <option value="XI AVI 4" <?= @$siswa['kelas'] == 'XI AVI 4' ? 'selected' : '' ?>>XI AVI 4</option>
            </select>
        </div>
        <div>
            <div>
                <span>Jurusan</span>
            </div>
                <input type="text" placeholder="Masukkan Jurusan anda" name="jurusan" value="<?= @$siswa['jurusan']; ?>" required>
        </div>
        <div>
            <div>
                <span>Alamat</span>
            </div>
            <input type="text" placeholder="Masukkan Alamat Rumah" name="alamat" value="<?= @$siswa['alamat'] ?>" required>
        </div>
        <div>
            <div>
                <label>Golongan Darah</label>
            </div>
            <select name="gol_darah" required>
                <option value="A" <?= @$siswa['gol_darah'] == 'A' ? 'selected' : '' ?>>A</option>
                <option value="B" <?= @$siswa['gol_darah'] == 'B' ? 'selected' : '' ?>>B</option>
                <option value="AB" <?= @$siswa['gol_darah'] == 'AB' ? 'selected' : '' ?>>AB</option>
                <option value="O" <?= @$siswa['gol_darah'] == 'O' ? 'selected' : '' ?>>O</option>
            </select>
        </div>
        <div>
            <div>
                <span>Nama Orang Tua</span>
            </div>
                <input type="text" placeholder="Masukkan Nama Orang Tua Anda" name="nama_ortu" value="<?= @$siswa['nama_ortu']; ?>" required>
        </div>
        <div class="">
            <label>Foto</label>
            <br>
            <?php
            if ($action == "edit.php") {
            ?>
            <img width = "120" heigt = "160" src="<?php echo empty ($siswa ['file']) ?  'assets/images/ava1.png' : 'assets/images/' . $siswa ['file'] ?>" id="output">
            <input type="hidden" name="foto" value="<?= @$siswa['foto']; ?>">
            <?php } else { ?>
            <img src="assets/images/ava1.png" id="output" style="width:120px;height:160px;">
           <?php } ?>
           <input type="file" name="foto"> 
        </div>
        <button type="submit" value="simpan">Simpan</button>
    </form>
    <a href="index.php">Kembali ke data</a>
    <script>
        const del = document.querySelector(".del");
        const overwrite = document.createElement("input");
        const inp = document.querySelector(".inp");
        if (del.value != '') {
            del.setAttribute("type", "hidden");
            overwrite.setAttribute("type", "text");
            overwrite.setAttribute("class", "form-control");
            overwrite.setAttribute("value", "<?= $siswa["nis"]; ?>");
            overwrite.setAttribute("disabled", "");
            inp.appendChild(overwrite);
        }
    </script>
</body>
</html>