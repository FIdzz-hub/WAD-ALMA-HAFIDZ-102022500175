<?php
// echo "Aku adalah database, dan database adalah aku ";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Sistem Informasi Inventaris</title>
</head>

<style>
  body {
    background-color: whitesmoke;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }

  .container {
    max-width: 1200px;
  }

  .card {
    border: none;
    border-radius: 10px;
  }

  h2 {
    font-weight: 600;
  }

  .table {
    vertical-align: middle;
  }

  .btn {
    border-radius: 6px;
  }
</style>

<body>
  <div class="page-container">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <div class="brand-title">Modul Katalog Barang</div>
        <p class="brand-desc">Pengelolaan data barang, kategori, spesifikasi, satuan, dan stok gudang.</p>
      </div>

      <a href="tambah.php" class="btn btn-add">
        + Tambah Barang
      </a>
    </div>

    <!-- Tabel Barang -->
    <div class="inventory-card">

      <div class="card-header-custom">
        <div class="card-title">Data Barang Gudang</div>
        <div class="card-subtitle">Daftar seluruh barang yang tersimpan dalam sistem inventaris.</div>
      </div>

      <div class="table-responsive">

        <table class="table table-bordered table-hover">

          <thead>

            <tr>
              <th>No</th>
              <th>Kode Barang</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Spesifikasi</th>
              <th>Satuan</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>

          </thead>

          <tbody>

            <!-- Contoh data sementara -->

            <tr>
                <td>1</td>
                <td>BRG001</td>
                <td>Kabel LAN Cat6</td>
                <td>Elektronik</td>
                <td>305 Meter</td>
                <td>Meter</td>
                <td>50</td>

                <td>
                  <a href="#" class="btn btn-action btn-edit">
                    Edit
                  </a>

                  <a href="#" class="btn btn-action btn-delete">
                    Hapus
                  </a>
                </td>
              </tr>


              <tr>
                <td>2</td>
                <td>BRG002</td>
                <td>Mouse Logitech</td>
                <td>Elektronik</td>
                <td>Wireless</td>
                <td>Unit</td>
                <td>20</td>

                <td>
                  <a href="#" class="btn btn-action btn-edit">
                    Edit
                  </a>

                  <a href="#" class="btn btn-action btn-delete">
                    Hapus
                  </a>
                </td>
              </tr>

            <!-- Konfigurasi data aseli -->

          </tbody>

        </table>

      </div>

    </div>

  </div>
  </div>
</body>

</html>