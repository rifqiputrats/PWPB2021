<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 18, Rifqi Putra T S XI RPL 2</title>
    <link rel="stylesheet" type="text/css" href="assets/akai.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
</head>
<body>
    <h1 class="centertext">Database Siswa</h1>
    <h2>Aksi yang bisa dilakukan</h2>
    <a class="btn add" href="tambah.php">Tambah Data</a>
    <a class="btn fright danger" href="logout.php">Log out</a>
    <form action="index.php" method="GET">
    Cari berdasarkan NIS atau nama
    <input type="text" name="search" value="<?= $search ?>">
    <button type="submit">Cari</button>
    </form>
    <form action="index.php">
        <div class="reset-container">
            <button class="reset-btn" type="submit">
                <a href="index.php">Reset List</a>
            </button>
        </div>
    </form>    
    <h2>Data yang ada</h2>
    <table class="styleTable">
        <thead>
           <tr>
                <th scope="col">NO</th>
                <th scope="col">NIS
                <a href="index.php?sort=nis&order=asc">▲</a>
                <a href="index.php?sort=nis&order=desc">▼</a>
                </th>
                <th scope="col">Nama Lengkap
                <a href="index.php?sort=nama_lengkap&order=asc">▲</a>
                <a href="index.php?sort=nama_lengkap&order=desc">▼</a>
                </th>
                <th scope="col">Gender
                <a href="index.php?sort=jenis_kelamin&order=asc">▲</a>
                <a href="index.php?sort=jenis_kelamin&order=desc">▼</a>
                </th>
                <th scope="col">Kelas
                <a href="index.php?sort=kelas&order=asc">▲</a>
                <a href="index.php?sort=kelas&order=desc">▼</a>
                </th>
                <th scope="col">Jurusan
                <a href="index.php?sort=jurusan&order=asc">▲</a>
                <a href="index.php?sort=jurusan&order=desc">▼</a>
                </th>
                <th scope="col">Alamat</th>
                <th scope="col">Gol Darah
                <a href="index.php?sort=gol_darah&order=asc">▲</a>
                <a href="index.php?sort=gol_darah&order=desc">▼</a>
                </th>
                <th scope="col">Nama Orang Tua</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                while ($siswa = $listSiswa->fetch_array()) {
            ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $siswa['nis']; ?></td>
                <td><?= $siswa['nama_lengkap']; ?></td>
                <td><?= $siswa['jenis_kelamin']; ?></td>
                <td><?= $siswa['kelas']; ?></td>
                <td><?= $siswa['jurusan']; ?></td>
                <td><?= $siswa['alamat']; ?></td>
                <td><?= $siswa['gol_darah']; ?></td>
                <td><?= $siswa['nama_ortu']; ?></td>
                <td>
                    <a href="edit.php?nis=<?= $siswa["nis"]; ?>" class="btn badge primary">Edit</a>
                    <a href="delete.php?nis=<?= $siswa["nis"]; ?>" class="btn badge danger" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut ?')">Delete</a></td>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
</body>
</html>