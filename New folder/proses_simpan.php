<?php
//1) buat koneksi
$koneksi = mysqli_connect("localhost","root","","daftar") ;

//2) tangkap data dari form
$nomor = $_POST["nomor"] ;
$nama = $_POST["nama"] ;
$nisn = $_POST["nisn"] ;
$jenis_kelamin = $_POST["jenis_kelamin"] ;
$tempat = $_POST["tempat"] ;
$usia = $_POST["usia"] ;
$telepon = $_POST["telepon"] ;
$sekolah = $_POST["sekolah"] ;
$alamat = $_POST["alamat"] ;
$agama = $_POST["agama"] ;
$kewarganegaraan = $_POST["kewarganegaraan"] ;

//3) siapakan sql insert
$sql = "insert into siswa (nomor, nama, nisn, jenis_kelamin, tempat, usia, telepon, sekolah, alamat, agama, kewarganegaraan) 
values ('$nomor','$nama','$nisn','$jenis_kelamin','$tempat','$usia','$telepon','$sekolah','$alamat','$agama','$kewarganegaraan') " ;

//4) menjalankan query
$hasil = mysqli_query($koneksi,$sql) ;

if($hasil){
	header("Location: read.php") ;
}else{
	echo "Gagal disimpan" ;
}

//5) tutup koneksi
mysqli_close($koneksi) ;
?>