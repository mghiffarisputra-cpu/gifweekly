<?php

require 'fungsi.php';

$id = $_GET['id'];

$mahasiswa = tampildata("SELECT * FROM mahasiswa WHERE id = $id")[0];

if(isset($_POST["submit"])){

    if(editdata($_POST, $id) > 0){

        echo "
        <script>
            alert('Data berhasil diubah!');
            document.location.href='mahasiswa.php';
        </script>
        ";

    }else{

        echo "
        <script>
            alert('Data gagal diubah!');
            document.location.href='mahasiswa.php';
        </script>
        ";

    }

}

?>

<!DOCTYPE html>
   <html lang="id">
         <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Data Mahasiswa</title>

      <link rel="stylesheet" href="style.css">

         </head>

<body>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gif.php">Profil</a></li>
        <li><a href="contact.php">Kontak</a></li>
        <li><a href="mahasiswa.php" class="active">Mahasiswa</a></li>
    </ul>
</nav>

       <div class="page">

       <div class="page-header">

<span class="badge">Edit Data</span>

        <h1>Edit Data Mahasiswa</h1>

          <p>Silakan ubah data mahasiswa kemudian simpan perubahan.</p>

         </div>

         <div class="card">

        <form action="" method="post">

        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">

       <div class="form-grid">

<div class="form-group">
<label>Nama</label>
<input
type="text"
name="nama"
required
value="<?= $mahasiswa['nama']; ?>">
</div>

<div class="form-group">
<label>NIM</label>
<input
type="text"
name="nim"
required
value="<?= $mahasiswa['nim']; ?>">
</div>

<div class="form-group">
<label>Email</label>
<input
type="email"
name="email"
required
value="<?= $mahasiswa['email']; ?>">
</div>

<div class="form-group">
<label>No HP</label>
<input
type="text"
name="hp"
required
value="<?= $mahasiswa['no_hp']; ?>">
</div>

<div class="form-group full">

<label>Program Studi</label>

<select name="jurusan">

<option value="Teknologi Informasi"
<?= ($mahasiswa['prodi']=="Teknologi Informasi") ? "selected" : ""; ?>>
Teknologi Informasi
</option>

<option value="Sistem Informasi"
<?= ($mahasiswa['prodi']=="Sistem Informasi") ? "selected" : ""; ?>>
Sistem Informasi
</option>

<option value="Desain Komunikasi Visual"
<?= ($mahasiswa['prodi']=="Desain Komunikasi Visual") ? "selected" : ""; ?>>
Desain Komunikasi Visual
</option>

</select>

</div>

<div class="form-group full">

<label>Foto Saat Ini</label>

<img
src="foto/<?= $mahasiswa['foto']; ?>"
width="120"
style="border-radius:10px; margin-top:10px;">

</div>

<div class="form-group full">

<button
type="submit"
name="submit"
class="btn-submit">

💾 Simpan Perubahan

         </button>

        </div>

      </div>

</form>

      </div>
</div>
         </body>
</html>