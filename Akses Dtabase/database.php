<?php 
 
$koneksi = mysqli_connect("localhost","root","","karyawan");
//  pada parameter pertama, kita mengetikan nama host kita. yaitu localhost.
// dan parameter kedua kita mengetikan username dari mysql kita, defaultnya adalah root
// parameter ketiga kita ketikan pasword mysql kita (jika ada), karena defaulnya kosong.
// jika menggunakan pasword mysql.silakan ketik pasword nya di parameter ke tiga ini. dan terakhir 
// pada parameter ke empat ini kita mengetik nama database yang ingin kita gunakan. atau database yang kita hubungkan.
// isikan sesuai nama database yang ada.


// Check connection
if (mysqli_connect_errno()){
//  disini kita akan mengecek, apakah koneksi berhasil apa tidak.
// fungsi mysqli_connect_errno() berguna untuk
// memeriksa koneksi apakah berhasil atau tidak
 echo "Koneksi database gagal : " . mysqli_connect_error();
}
// fungsi bagian ini berguna untuk menampilkan yang error atau tidak

?>