<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid bg-success p-3">
        <a class="navbar-brand text-light fw-bold fs-2" href="../manajemen_toko0053/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-light fs-4" href="index.php?move=barang">Barang</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light fs-4" href="index.php?move=pelanggan">Pelanggan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-light fs-4" href="index.php?move=transaksi">Transaksi</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-success">Data Transaksi</h1>
        <a href="index.php?&action_trs=tambah" class="btn btn-success btn-sm m-1">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th> 
                    <th scope="col">ID TRANSAKSI</th>
                    <th scope="col">KODE BARANG</th>
                    <th scope="col">ID PELANGGAN</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">BAYAR</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($transaksi)): // Cek apakah ada pengguna ?>
                    <?php $nomor = 1; ?>
                    <?php foreach ($transaksi as $transaksi): ?>
                        <tr>
                            <th scope="row"><?php echo $nomor++; ?></th> 
                            <td><?php echo $transaksi['id']; ?></td>
                            <td><?php echo $transaksi['kode_barang']; ?></td>
                            <td><?php echo $transaksi['id_pelanggan']; ?></td>
                            <td><?php echo $transaksi['jumlah']; ?></td>
                            <td><?php echo number_format($transaksi['bayar'],0, '.','.')?></td>
                            <td><?php echo $transaksi['tanggal']; ?></td>
                            <td>
                                <a href="index.php?id=<?php echo $transaksi['id']; ?>&action_trs=edit" class="btn btn-warning btn-sm m-1">Edit</a>
                                <a href="index.php?id=<?php echo $transaksi['id']; ?>&action_trs=hapus" class="btn btn-danger btn-sm m-1" onclick="return confirm('Apakah ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Pelanggan kosong</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
