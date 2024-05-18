<?php

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
         // ambil data dari formulir
        $nama = htmlspecialchars($_POST['nama']);
        $asal_sekolah = htmlspecialchars($_POST['asalsekolah']);
        $tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $jurusan = htmlspecialchars($_POST['jurusan']);
        $no_telepon = htmlspecialchars($_POST['no_telepon']);
        $nama_ayah = htmlspecialchars($_POST['nama_ayah']);
        $nama_ibu = htmlspecialchars($_POST['nama_ibu']);
        $nama_wali = htmlspecialchars($_POST['nama_wali']);
        $no_telpon_ortu = htmlspecialchars($_POST['no_tel_ortu']);
        $no_telpon_wali = htmlspecialchars($_POST['no_tel_wali']);
        
        if (empty($nama) && (empty($asal_sekolah)) && (empty($tgl_lahir)) && (empty($jenis_kelamin)) && (empty($jurusan)) && (empty($no_telepon)) && (empty($nama_ayah)) && (empty($nama_ibu)) && (empty($nama_wali)) && (empty($no_telpon_ortu))) {
            header('Location: index.php?status=form_kosong');
            
            // $no_telpon_wali opsional
            } else {
                $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
                $query = mysqli_query($db, $sql);
                echo "<script>Swal.fire({
                    title: 'Sukses!',
                    text: 'Pendaftaran kamu berhasil!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  });</script>"; 
            }
                // $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
                // $query = mysqli_query($db, $sql);
        
                // apakah query simpan berhasil?
                if( $query ) {
                    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
                    die.header('Location: index.php?status=sukses');
                } else {
                    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                    // header('Location: index.php?status=gagal');
                }
    // if(isset($_POST['submit'])){

    //     // ambil data dari formulir
    //     $nama = $_POST['nama'];
    //     $asal_sekolah = $_POST['asalsekolah'];
    //     $tgl_lahir = $_POST['tgl_lahir'];
    //     $jenis_kelamin = $_POST['jenis_kelamin'];
    //     $jurusan = $_POST['jurusan'];
    //     $no_telepon = $_POST['no_telepon'];
    //     $nama_ayah = $_POST['nama_ayah'];
    //     $nama_ibu = $_POST['nama_ibu'];
    //     $nama_wali = $_POST['nama_wali'];
    //     $no_telpon_ortu = $_POST['no_tel_ortu'];
    //     $no_telpon_wali = $_POST['no_tel_wali'];
    
    //     if (empty($nama) && (empty($asal_sekolah)) && (empty($tgl_lahir)) && (empty($jenis_kelamin)) && (empty($jurusan)) && (empty($no_telepon)) && (empty($nama_ayah)) && (empty($nama_ibu)) && (empty($nama_wali)) && (empty($no_telpon_ortu))) {
    //         header('Location: index.php?status=form_kosong');
    //         // $no_telpon_wali opsional
    //     } else {
    //         $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
    //         $query = mysqli_query($db, $sql); 
    //     }
    //         // $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
    //         // $query = mysqli_query($db, $sql);
    
    //         // apakah query simpan berhasil?
    //         if( $query ) {
    //             // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    //             die.header('Location: index.php?status=sukses');
    //         } else {
    //             // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    //             // header('Location: index.php?status=gagal');
    //         }
    
    // } else {
        
    // }
}
// if(isset($_POST['submit'])){

//     // ambil data dari formulir
//     $nama = $_POST['nama'];
//     $asal_sekolah = $_POST['asalsekolah'];
//     $tgl_lahir = $_POST['tgl_lahir'];
//     $jenis_kelamin = $_POST['jenis_kelamin'];
//     $jurusan = $_POST['jurusan'];
//     $no_telepon = $_POST['no_telepon'];
//     $nama_ayah = $_POST['nama_ayah'];
//     $nama_ibu = $_POST['nama_ibu'];
//     $nama_wali = $_POST['nama_wali'];
//     $no_telpon_ortu = $_POST['no_tel_ortu'];
//     $no_telpon_wali = $_POST['no_tel_wali'];

//     if (empty($nama) && (empty($asal_sekolah)) && (empty($tgl_lahir)) && (empty($jenis_kelamin)) && (empty($jurusan)) && (empty($no_telepon)) && (empty($nama_ayah)) && (empty($nama_ibu)) && (empty($nama_wali)) && (empty($no_telpon_ortu))) {
//         header('Location: index.php?status=form_kosong');
//         // $no_telpon_wali opsional
//     } else {
//         $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
//         $query = mysqli_query($db, $sql); 
//     }
//         // $sql = "INSERT INTO siswa (nama, asal_sekolah, tgl_lahir, jenis_kelamin, jurusan, no_telepon, nama_ayah, nama_ibu, nama_wali, no_telpon_ortu, no_telpon_wali) VALUE ('$nama','$asal_sekolah','$tgl_lahir','$jenis_kelamin','$jurusan','$no_telepon','$nama_ayah','$nama_ibu','$nama_wali','$no_telpon_ortu','$no_telpon_wali')";
//         // $query = mysqli_query($db, $sql);

//         // apakah query simpan berhasil?
//         if( $query ) {
//             // kalau berhasil alihkan ke halaman index.php dengan status=sukses
//             die.header('Location: index.php?status=sukses');
//         } else {
//             // kalau gagal alihkan ke halaman indek.php dengan status=gagal
//             // header('Location: index.php?status=gagal');
//         }

// } else {
    
// }
?>
<script src="/ppdb_sekolah/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>