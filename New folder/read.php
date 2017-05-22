<a href="form_ktp.php">INPUT DATA SISWA</a>
<?php
//1 membuat koneksi
$koneksi = mysqli_connect("localhost","root","","daftar") ;

//2 membuat perintah SQL / query
$sql = "select * from siswa" ;

//3 menjalankan SQL / query 
$hasil = mysqli_query($koneksi, $sql) ;

//4 membaca hasil menjadi array
?>
	<h1>DAFTAR CALON SISWA</h1>
	<table border="1">
		<tr>
			<th>Nomor Pendaftaran</th>
			<th>Nama Lengkap</th>
			<th>Nisn</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Usia</th>
			<th>Nomor Hp</th>
			<th>Asal Sekolah</th>
			<th>Alamat</th>
			<th>Agama</th>
			<th>Kewarganegaraan</th>
		</tr>
	<?php
	while($baris = mysqli_fetch_assoc($hasil)){
		echo "<tr>" ;
		//5 tampilkan datanya
		echo "<td>" . $baris["nomor"]."</td>" ;
		echo "<td>" . $baris["nama"]."</td>" ;
		echo "<td>" . $baris["nisn"]."</td>" ;
		echo "<td>" . $baris["jenis_kelamin"]."</td>" ;
		echo "<td>" . $baris["tempat"]."</td>" ;
		echo "<td>" . $baris["usia"]."</td>" ;
		echo "<td>" . $baris["telepon"]."</td>" ;
		echo "<td>" . $baris["sekolah"]."</td>" ;
		echo "<td>" . $baris["alamat"]."</td>" ;
		echo "<td>" . $baris["agama"]."</td>" ;
		echo "<td>" . $baris["kewarganegaraan"]."</td>" ;
		echo "</tr>";
	}	
	?>	
	</table>
<?php
//6 tutup koneksi
mysqli_close($koneksi) ;
?>