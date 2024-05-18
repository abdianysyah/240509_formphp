
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Title -->
    <title>PPDB SMA Lorem Ipsum!</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- SweetAlert2 -->
    <script src="/ppdb_sekolah/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="/ppdb_sekolah/css/style.css">
</head>
<body>
    <nav class="navbar navbar-light bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">
        <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> -->
        SMA LOREM IPSUM
        </a>
        
    </div>
    
    </nav>
    <div class="heading position-absolute top-50 start-50 translate-middle">
        <h1>Selamat Datang di PPDB</h1>
        <h2>SMA LOREM IPSUM 12</h2>

        <!-- <div class="menu">
            <ul><a href=""></a></ul>
            <ul><a href=""></a>Bantuan</ul>
        </div> -->
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                </div>
                <div class="col-lg-4">
                    <div class="button position-absolute top-60 start-50 bottom-0 translate-middle">
                        <button type="button" class="btn btn-outline-primary"><a href="form.php" class="text-decoration-none">CASISWA</a></button>
                        <button type="button" class="btn btn-outline-primary" onclick="location.href='/auth/login.php'">ADMIN</button>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>

        </div>
        
    </div>
</body>
</html>

<?php if(isset($_GET['status'])): ?>
        <?php
            if($_GET['status'] == 'sukses'){ 
                    echo "<script>Swal.fire({
                        title: 'Sukses!',
                        text: 'Pendaftaran kamu berhasil!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                      });</script>";
            } else {
                echo "<script>
                    Swal.fire({
                        title: 'Ups!',
                        text: 'Ada Form kosong, silahkan isi form kembali dengan benar:D',
                        icon: 'error',
                        focusConfirm: false,
                        // confirmButtonText: 'OK',
                        confirmButtonText: 'Hubungi Admin',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'form.php';
                        }
                    });
                </script>";
            }
        ?>
<?php endif; ?>