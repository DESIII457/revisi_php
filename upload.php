<?php
// Setiap file yang kita upload ke server, filenya akan disimpan di dalam direktori temporer.
// Untuk memindahkan file ini ke dalam direktori aplikasi kita, maka kita membutuhkan sebuah fungsi bernama: move_uploaded_file().
// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}
// Variabel $terupload akan bernilai true apabila file berhasil dipindahkan dan akan bernilai false apabila gagal.
?>