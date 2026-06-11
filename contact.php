<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak – WEB TI GIF 2026</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="gif.php">Profil</a></li>
    <li><a href="contact.php" class="active">Kontak</a></li>
    <li><a href="mahasiswa.php">Mahasiswa</a></li>
  </ul>
</nav>

<div class="page">
  <div class="page-header">
    <span class="badge">Formulir Mahasiswa</span>
    <h1>Formulir Mahasiswa</h1>
    <p>Isi formulir di bawah untuk menambahkan data mahasiswa.</p>
  </div>

  <div class="card">
    <form action="#" method="post">
      <div class="form-grid">

        <!-- Nama -->
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <!-- NIM -->
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="number" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa">
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="••••••••">
        </div>

        <!-- Email -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="nama@email.com">
        </div>

        <!-- No HP -->
        <div class="form-group">
          <label for="hp">No. HP</label>
          <input type="tel" id="hp" name="hp" placeholder="+62 8xx-xxxx-xxxx">
        </div>

        <!-- Website -->
        <div class="form-group">
          <label for="website">Website Pribadi</label>
          <input type="url" id="website" name="website" placeholder="https://example.com">
        </div>

        <!-- Tanggal Lahir -->
        <div class="form-group">
          <label for="tgl_lahir">Tanggal Lahir</label>
          <input type="date" id="tgl_lahir" name="tanggal_lahir">
        </div>

        <!-- Warna Favorit -->
        <div class="form-group">
          <label for="warna">Warna Favorit</label>
          <input type="color" id="warna" name="warna" value="#64ffda">
        </div>

        <!-- Tingkat Kepuasan -->
        <div class="form-group full">
          <label for="kepuasan">Tingkat Kepuasan: <span id="kepuasanVal">50</span>%</label>
          <input type="range" id="kepuasan" name="kepuasan" min="0" max="100" value="50"
            oninput="document.getElementById('kepuasanVal').textContent = this.value">
        </div>

        <!-- Jenis Kelamin -->
        <div class="form-group full">
          <label>Jenis Kelamin</label>
          <div class="radio-group">
            <label><input type="radio" name="jk" value="laki"> Laki-laki</label>
            <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
          </div>
        </div>

        <!-- Hobi -->
        <div class="form-group full">
          <label>Hobi</label>
          <div class="check-group">
            <label><input type="checkbox" name="hobi" value="musik"> Musik</label>
            <label><input type="checkbox" name="hobi" value="olahraga"> Olahraga</label>
            <label><input type="checkbox" name="hobi" value="game"> Game</label>
          </div>
        </div>

        <!-- Upload Foto -->
        <div class="form-group full">
          <label for="foto">Upload Foto</label>
          <input type="file" id="foto" name="foto" accept="image/*">
        </div>

        <!-- Alamat -->
        <div class="form-group full">
          <label for="alamat">Alamat</label>
          <textarea id="alamat" name="alamat" placeholder="Jalan, Kota, Provinsi..."></textarea>
        </div>

        <!-- Jurusan -->
        <div class="form-group full">
          <label for="jurusan">Jurusan</label>
          <select id="jurusan" name="jurusan">
            <option value="">-- Pilih Jurusan --</option>
            <option value="TI">Teknologi Informasi</option>
            <option value="SI">Sistem Informasi</option>
            <option value="DKV">Desain Komunikasi Visual</option>
          </select>
        </div>

        <!-- Submit -->
        <div class="form-group full" style="margin-top: 8px;">
          <button type="submit" class="btn-submit">Kirim Data →</button>
        </div>

      </div>
    </form>
  </div>
</div>

</body>
</html>
