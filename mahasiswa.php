<?php

  require 'fungsi.php';

  $query = "SELECT * FROM mahasiswa";

  $mahasiswas = tampildata($query); //ambil data (fetch) dari mahasiswa


 ///ambil data (fetch) dari mahasiswa
 

 /// mysqli_fetch_row ///numerik
 /// mysqli_fetch_assoc ///associative
 /// mysqli_fetch_array ///numerric & associative
 /// mysqli_fetch_object ///nanti di framework lebih banyak pakai object

  
?>





<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa – WEB TI GIF 2026</title>
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
    <span class="badge">UNIMUS</span>
    <h1>Data Mahasiswa</h1>
    <p>Daftar dan tabel data mahasiswa Universitas Muhammadiyah Semarang.</p>
  </div>

  <!-- Tabel 1: Data Nama -->
  <div class="card" style="margin-bottom: 28px;">
    <h2>Daftar Anggota</h2>
    <div class="table-wrap">
      <a href="contact.php"><button>tambah data mahasiswa</button></a>
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>no. hp</th>
            <th>foto</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
           $no = 1;
           foreach ($mahasiswas as $mhs):
          ?>
         <tr>
           <td><?= $no++; ?></td>
           <td><?= $mhs['nama']; ?></td>
           <td><?= $mhs['nim']; ?></td>
           <td><?= $mhs['email']; ?></td>
           <td><?= $mhs['prodi']; ?></td>
           <td><?= $mhs['no_hp']; ?></td>
           <td>
             <img src="foto/<?= $mhs['foto']; ?>" alt="Foto <?= $mhs['nama']; ?>" width="50">
           </td>
           <td>
              <a href="editdata.php?id=<?= $mhs['id']; ?>">
            <button>Edit</button>
            </a>
              <a href="hapusdata.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">
               <button>Hapus</button>
             </a>
           </td>
          </tr>
          <?php endforeach; ?>
       </tbody>
      </table>
    </div>
  </div>

  <!-- Tabel 2: Grid dengan colspan & rowspan -->
  <div class="card">
    <h2>Tabel Grid</h2>
    <p style="color: var(--text-muted); font-size:0.85rem; margin-bottom: 16px;">
      Contoh penggunaan <code style="color:var(--accent)">colspan</code> dan <code style="color:var(--accent)">rowspan</code> pada tabel HTML.
    </p>
    <div class="table-wrap">
      <table>
        <tbody>
          <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
          </tr>
          <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2"><br></td>
            <td>2,4</td>
          </tr>
          <tr>
            <td>3,1</td>
            <td>3,4</td>
          </tr>
          <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
          </tr>
        </tbody>
      </table>
        </tbody>
      </table>
    </div>
  </div>
</div>

</body>
</html>