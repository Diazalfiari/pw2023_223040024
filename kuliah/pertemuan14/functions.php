<?php
define('BASE_URL', '/pw2023_223040024/kuliah/pertemuan14 /');

function koneksi() {
  //koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'pw2023_223040024')
or die('DATABASE ERROR');
return $conn;
}

function query($query) {
  //Query ke tabel mahasiswa

$conn = koneksi();
$result = mysqli_query($conn, $query)
or die(mysqli_error($conn));

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}

return $rows;
}


function tambah($data) {
  $conn = koneksi();

  
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO mahasiswa VALUES (null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  
  return mysqli_affected_rows($conn);
}

function hapus($id) {
  $conn = koneksi();
  $query = "DELETE FROM mahasiswa WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  
  return mysqli_affected_rows($conn);
}

function ubah($data) {
  $conn = koneksi();

  $id = $data['id'];  
  $nim = htmlspecialchars($data['nim']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE mahasiswa SET
            nim = '$nim',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE
            id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  
  return mysqli_affected_rows($conn);
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  die;
  echo "</pre>";
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}
