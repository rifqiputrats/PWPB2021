<?php
    include 'lib/library.php';

    cekLogin();

    $sql = 'SELECT * FROM siswa INNER JOIN kelas ON (siswa.id_kelas = kelas.id_kelas)';

    // Fitur Searching
    $search = @$_GET['search'];
    if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%'";

    // Fitur Ordering
    $order_field = @$_GET['sort'];  // Field yang akan di order.
    $order_mode = @$_GET['order'];  // Modenya, Ascending atau Descending.

    if (!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";

    $listSiswa = $mysqli ->query($sql);

    include 'views/v_index.php';
?>
