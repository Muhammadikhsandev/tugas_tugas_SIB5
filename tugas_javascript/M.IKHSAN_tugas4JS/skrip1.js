function hitungTransaksi() {
    var nama = document.getElementById("nama").value;
    var produk = document.getElementById("produk").value;
    var jumlah = document.getElementById("jumlah").value;
    var hargaSatuan = 0;

    switch (produk) {
        case "TV":
            hargaSatuan = 2000000;
            break;
        case "AC":
            hargaSatuan = 3000000;
            break;
        case "Kulkas":
            hargaSatuan = 4000000;
            break;
        default:
            alert("Produk tidak valid");
            return;
    }

    var hargaKotor = hargaSatuan * jumlah;
    var diskon = 0;
    var ppn = 0;

    if (produk === "Kulkas" && jumlah >= 3) {
        diskon = 0.3 * hargaKotor;
    } else if (produk === "AC" && jumlah >= 3) {
        diskon = 0.2 * hargaKotor;
    } else {
        diskon = 0.1 * hargaKotor;
    }

    ppn = (0.1 * hargaKotor) - diskon;

    var hargaBayar = hargaKotor - diskon + ppn;

    alert("Nama Pelanggan: " + nama +
        "\nProduk yang Dibeli: " + produk +
        "\nHarga Satuan: " + hargaSatuan +
        "\nJumlah Item Produk yang Dibeli: " + jumlah +
        "\nHarga Kotor: " + hargaKotor +
        "\nDiskon: " + diskon +
        "\nPPN: " + ppn +
        "\nHarga Bayar: " + hargaBayar);
}