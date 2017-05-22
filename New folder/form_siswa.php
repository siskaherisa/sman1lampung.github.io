<h1>INPUT DATA CALON SISWA</h1>
<form action="proses_simpan.php" method="post">
	Nomor Pendaftaran <br/> <input type="text" name="nomor" /> <br/>
	Nama Lengkap <br/> <input type="text" name="nama" /> <br/>
	Nisn <br/> <input type="text" name="nisn" /> <br/>
	Jenis Kelamin <br/> 
	<input type="radio" value="L" name="jenis_kelamin" /> Laki-laki
	<input type="radio" value="P" name="jenis_kelamin" /> Perempuan <br/>
	Tempat Lahir  <br/> <input type="text" name="tempat" /> <br/>
	Usia <br/> <input type="text" name="usia" /> <br/>
	Nomor Hp <br/> <input type="text" name="telepon" /> <br/>
	Asal Sekolah <br/> <input type="text" name="sekolah" /> <br/>
	Alamat <br/> <textarea cols="50" rows="2" name="alamat"></textarea> <br/>
	Agama <br/>
	<select name="agama">
		<option value="">Silahkan Pilih</option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Hudha">Hudha</option>
		<option value="Hindu">Hindu</option>
		<option value="Katolik">Katolik</option>
	</select> <br/>
	Kewarganegaraan <br/> <input type="text" name="kewarganegaraan" /> <br/>
	<input type="submit" value="SIMPAN" />
	<input type="reset" value="BATAL" />
</form>