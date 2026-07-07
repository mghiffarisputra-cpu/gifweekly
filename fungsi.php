<?php

$koneksi = mysqli_connect("localhost", "root", "", "gifweekly");

function tampildata($query)
{
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    $rows = [];

    while($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }

    return $rows;
}

function hapusdata($id)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");

    return mysqli_affected_rows($koneksi);
}

function tambahdata($data, $files)


{
    global $koneksi;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $prodi = htmlspecialchars($data['jurusan']);
    $no_hp = htmlspecialchars($data['hp']);
    
    $namafoto = $_FILES['foto']['name'];
    $tmpfoto = $_FILES['foto']['tmp_name'];

    $path = "foto/" . $namafoto;
}
    if (move_uploaded_file($tmpfoto, $path)) {
     {
                $query = "INSERT INTO mahasiswa SET
                            nama='$nama',
                            nim='$nim',
                            email='$email',
                            prodi='$prodi',
                            no_hp='$no_hp',
                            foto='$path'
                        WHERE id=$id";

                mysqli_query($koneksi, $query);
     }
    return mysqli_affected_rows($koneksi);


function editdata($data, $id)
{
    global $koneksi;

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $prodi = htmlspecialchars($data['jurusan']);
    $no_hp = htmlspecialchars($data['hp']);

    $query = "UPDATE mahasiswa SET
                nama='$nama',
                nim='$nim',
                email='$email',
                prodi='$prodi',
                no_hp='$no_hp'
              WHERE id=$id";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}
 ?>