<?php
  include 'lib/library.php';

  cekLogin();

  $sql = 'SELECT * FROM siswa';

  //SEARCHING
  $search = @$_GET['search'];
  if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%'";

  //ORDERING
  $order_field = @$_GET['sort'];
  $order_mode = @$_GET['order'];
  if (!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";

  $listSiswa = $mysqli ->query($sql);

  include 'views/v_index.php';
?>
