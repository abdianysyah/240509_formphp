<?php

// include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['submit'])){

    // ambil data dari formulir

    // $nama = $_POST['nama'];
    // $asal_sekolah = $_POST['asalsekolah'];
    // $tgl_lahir = $_POST['tgl_lahir'];
    // $jenis_kelamin = $_POST['jenis_kelamin'];
    // $jurusan = $_POST['jurusan'];
    // $no_telepon = $_POST['no_telepon'];
    // $nama_ayah = $_POST['nama_ayah'];
    // $nama_ibu = $_POST['nama_ibu'];
    // $nama_wali = $_POST['nama_wali'];
    // $no_telpon_ortu = $_POST['no_tel_ortu'];
    // $no_telpon_wali = $_POST['no_tel_wali'];



    // $nama_ibu = $_POST['nama_ibu'];


    // buat query
    // $sql = "INSERT INTO siswa (nama kolom tabel db) VALUE ($nama_table)";
    
    $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>