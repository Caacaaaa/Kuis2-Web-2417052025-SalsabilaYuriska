<?php

$nama_toko = "Warung Digital Unila";

function hitungTotal($harga) {
    global $nama_toko;
    echo "<h1>Selamat Datang di $nama_toko</h1><br>";

    static $jumlah_transaksi = 0;
    $jumlah_transaksi++;

    echo "Transaksi ke-$jumlah_transaksi <br>";
    echo "Harga Barang : Rp $harga <br>";
    echo "<hr>";
}

hitungTotal(15000);
hitungTotal(25000);
hitungTotal(50000);

?>