<?php 

  //koneksi ke DB
$conn = mysqli_connect('localhost', 'root', '', 'movloperz');

function query($query) {
  //Query ke tabel movie

global $conn;
$result = mysqli_query($conn, $query);
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
$rows[] = $row;
}
return $rows;
}


function tambah($data) {
  

  global $conn;
  $judul = htmlspecialchars($data['judul']);
  $teks = htmlspecialchars($data['teks']);
  $tahun = htmlspecialchars($data['tahun']);
  $kategori = htmlspecialchars($data['kategori']);

  //Upload gambar
  $gambar = upload();
  if( !$gambar ) {
    return false;
  }

  $query = "INSERT INTO movie
              VALUES 
            (null, '$judul', '$teks', '$tahun', '$gambar', '$kategori')";

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

  move_uploaded_file($tmpName, 'image/' . $namaFileBaru);

  return $namaFileBaru;
 
}

//ubah

function ubah($data) {
  
  global $conn;

  $id = $data['id'];  
  $judul = htmlspecialchars($data['judul']);
  $teks = htmlspecialchars($data['teks']);
  $tahun = htmlspecialchars($data['tahun']);
  $kategori = htmlspecialchars($data['id_kategori']);
  $gambarLama = htmlspecialchars($data['gambarLama']);

  //cek apakah user pilih gambar baru atau tidak
  if( $_FILES['gambar']['error'] === 4 ) {
      $gambar = $gambarLama;
  }else {
    $gambar = upload();
  }


  $query = "UPDATE movie SET
            judul = '$judul',
            teks = '$teks',
            tahun = '$tahun',
            gambar = '$gambar',
            id_kategori = '$kategori'
            WHERE
            id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  
  return mysqli_affected_rows($conn);
}

//register

function registrasi($data) {
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);
  $email = htmlspecialchars($data["email"]);


  //cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM userdata WHERE username = '$username'");

  if( mysqli_fetch_assoc($result)) {
    echo " <script>
              alert('username sudah terdaftar');    
          </script> 
    ";
    return false;
  }

  //cek konfirmasi pass
  if( $password !== $password2 ) {
    echo " <script>
              alert('Konfirmasi password tidak sesuai');    
          </script> 
    ";
    return false;
  }

   //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);
  
  //tambahkan userbaru ke database
  mysqli_query($conn, "INSERT INTO userdata VALUES(null, '$username', '$password', '$email', 'user')");

  return mysqli_affected_rows($conn);
}

//hapus

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM movie WHERE id = $id");

    return mysqli_affected_rows($conn);
};
  

?>