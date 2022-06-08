<?php

function koneksi(){
    $conn = mysqli_connect('localhost', 'root', '', 'pw2022_b_213040046') or die('KONEKSI GAGAL!!');

    return $conn;
}

function query($query){
    $conn = koneksi();
    // Query ke tabel mahasiswa
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // Siapkan data $mahasiswa
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    $conn = koneksi();

    // Cek apakah user tidak mengupload gambar
    if($_FILES['gambar']['error'] == 4){
        // Pilih gambar default
        $gambar = 'yago.jpg';
    } else{
        // Jalankan fungsi upload
        $gambar = upload();
        // Cek jika upload gagal
        if(!$gambar){
            return false;
        }
    }

    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);


    $query = "INSERT INTO mahasiswa VALUES (null, '$npm', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();

    // Query mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

    // cek jika gambar default
    if($mhs['gambar'] !== 'holo1.jpg'){
            // Hapus Gambar
        unlink('img/'.$mhs['gambar']);
    }



    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();

    $id = $data['id'];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "UPDATE mahasiswa SET 
                npm = '$npm',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id;
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upload(){
    // Siapkan darta gambar
    $filename = $_FILES['gambar']['name'];
    $filetmpname = $_FILES['gambar']['tmp_name'];
    $filesize = $_FILES['gambar']['size'];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ['jpg', 'jpeg', 'png'];

    // CEK apakah yang diupload bukan gamabar
     if(!in_array(strtolower($filetype), $allowedtype)){
        echo "<script>
                alert('Yang Anda Upload Bukan Gambar!')
            </script>";
            return false;
     }

    //  Cek apakah gambar terlalu besar
    if($filesize > 1000000){
        echo "<script>
                alert('Yang Anda Upload Bukan Gambar!')
            </script>";
            return false;
    }

    // proses upload gambar
    $newfilename = uniqid().$filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;
}






