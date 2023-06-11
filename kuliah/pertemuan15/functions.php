<?php
define('BASE_URL', '/pw2023_223040024/kuliah/pertemuan15 /');

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

  //Upload gambar
  $gambar = upload();
  if( !$gambar ) {
    return false;
  }

  $query = "INSERT INTO mahasiswa 
              VALUES 
            (null, '$nim', '$nama', '$email', '$jurusan', '$gambar')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  
  return mysqli_affected_rows($conn);
}

function upload() {
 
  $namaFile = $_FILES['gambar']['name'];
  $ukuranfile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  //cek apakah tidak ada yg di upload
  if ( $error === 4 ) {
    echo " <script>
            alert('pilih gambar terlebih dahulu!');
    </script>";
    return false;
  }

  //cek apakah yang di upload adalah gambar
  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo " <script>
            alert('yang anda upload bukan gambar!');
    </script>";
    return false;
  }

  //cek jika ukuran terlalu besar
  if ( $ukuranfile > 1000000 ) {
    echo " <script>
            alert('ukuran gambar terlalu besar!');
    </script>";
    return false;
  }
  // lolos pengecekan, gambar siap di upload
  //generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

  return $namaFileBaru;
 
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
  $gambarLama = htmlspecialchars($data['gambarLama']);

  //cek apakah user pilih gambar baru atau tidak
  if( $_FILES['gambar']['error'] === 4 ) {
      $gambar = $gambarLama;
  }else {
    $gambar = upload();
  }

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
