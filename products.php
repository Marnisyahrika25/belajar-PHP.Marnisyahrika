<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing Produk</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS eksternal -->
</head>
<body>
    <div class="container">
        <?php
        // Simulasi data produk dari database
        $produk1 = array(
            'nama' => 'Sepatu A',
            'gambar' => 'poto/gambar1.png',
            'deskripsi' => 'Didesain untuk kenyamanan dan performa maksimal, sepatu olahraga kami menggabungkan teknologi terbaru untuk mendukung aktivitas Anda.',
            'harga' => 100000,
        );

        $produk2 = array(
            'nama' => 'Sepatu B',
            'gambar' => 'poto/gambar2.png',
            'deskripsi' => 'Didesain untuk kenyamanan dan performa maksimal, sepatu olahraga kami menggabungkan teknologi terbaru untuk mendukung aktivitas Anda.',
            'harga' => 75000,
        );

        $produk3 = array(
            'nama' => 'Sepatu C',
            'gambar' => 'poto/gambar3.png',
            'deskripsi' => 'Didesain untuk kenyamanan dan performa maksimal, sepatu olahraga kami menggabungkan teknologi terbaru untuk mendukung aktivitas Anda.',
            'harga' => 120000,
        );

        $produk4 = array(
            'nama' => 'Sepatu D',
            'gambar' => 'poto/gambar4.png',
            'deskripsi' => 'Didesain untuk kenyamanan dan performa maksimal, sepatu olahraga kami menggabungkan teknologi terbaru untuk mendukung aktivitas Anda.',
            'harga' => 90000,
        );

        $produk5 = array(
            'nama' => 'Sepatu E',
            'gambar' => 'poto/gambar5.png',
            'deskripsi' => 'Didesain untuk kenyamanan dan performa maksimal, sepatu olahraga kami menggabungkan teknologi terbaru untuk mendukung aktivitas Anda.',
            'harga' => 80000,
        );

        $produk6 = array(
            'nama' => 'Sepatu F',
            'gambar' => 'poto/gambar6.png',
            'deskripsi' => 'Didesain untuk kenyamanan dan performa maksimal, sepatu olahraga kami menggabungkan teknologi terbaru untuk mendukung aktivitas Anda.',
            'harga' => 110000,
        );

        // Simpan data produk dalam array
        $daftarProduk = array($produk1, $produk2, $produk3, $produk4, $produk5, $produk6);

        // Tampilkan produk ke dalam HTML
        foreach ($daftarProduk as $produk) {
            echo '<div class="product">';
            echo '<img src="' . $produk['gambar'] . '" alt="' . $produk['nama'] . '">';
            echo '<h3>' . $produk['nama'] . '</h3>';
            echo '<p>' . $produk['deskripsi'] . '</p>';
            echo '<p class="price">Rp ' . number_format($produk['harga'], 0, ',', '.') . '</p>';
            echo '<a href="#" class="btn">Beli Sekarang</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
