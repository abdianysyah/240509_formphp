<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Pendaftaran</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-2">

        </div>
        <div class="col-lg-8 p-5 mt-5">
            <form method="post" action="<?php echo($_SERVER["PHP_SELF"]);?>" >
                <div class="title text-align-center justify-content-center">
                    <h1>Halo, Silahkan isi data diri kamu:D</h1>
                </div>
                <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Masukkan nama kamu"/>
                        <small id="helpId" class="form-text text-muted">Isi menggunakan nama lengkap</small>
                    </div>
                    <!-- Asal Sekolah -->
                    <div class="mb-3">
                        <label for="" class="form-label">Asal sekolah</label>
                        <input
                            type="text"
                            class="form-control"
                            name="asalsekolah"
                            id=""
                            aria-describedby="helpId"
                            placeholder="ex.SMAN 1 JEPANG"
                        />
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <!-- Jurusan -->
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select
                        class="form-select form-select-md"
                        name="jurusan"
                        id=""
                    >
                        <option selected>Pilih salah satu</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="BINDO">Bahasa Indonesia</option>
                    </select>
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select
                        class="form-select form-select-md"
                        name="jenis_kelamin"
                        id=""
                    >
                        <option selected></option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        <!-- <option value="">Jakarta</option> -->
                    </select>
                </div>
                <!-- Nomor Telpon -->
                <div class="mb-3">
                    <label for="" class="form-label">Nomor Telpon</label>
                    <input
                        type="tel"
                        class="form-control"
                        name="no_telepon"
                        id=""
                        aria-describedby="helpId"
                        placeholder="ex.0822XXXXXX"
                    />
                    <small id="helpId" class="form-text text-muted">Pastikan nomor yang diisi terhubung dengan Whatsapp</small>
                </div>
                <!-- Tanggal Lahir -->
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input
                        type="date"
                        class="form-control"
                        name="tgl_lahir"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted">bulan/tanggal/tahun</small>
                </div>
                <!-- Nama Ayah -->
                <div class="mb-3">
                    <label for="" class="form-label">Nama Ayah</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nama_ayah"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                </div>
                <!-- Nama Ibu -->
                <div class="mb-3">
                    <label for="" class="form-label">Nama Ibu</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nama_ibu"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                </div>
                <!-- Nama Wali -->
                <div class="mb-3">
                    <label for="" class="form-label">Nama Wali</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nama_wali"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nomor Telpon Ortu</label>
                    <input
                        type="text"
                        class="form-control"
                        name="no_tel_ortu"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <!-- <small id="helpId" class="form-text text-muted"></small> -->
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nomor Telpon Wali</label>
                    <input
                        type="text"
                        class="form-control"
                        name="no_tel_wali"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    /> 
                    <small id="helpId" class="form-text text-muted text-Danger">Boleh dikosongkan!</small>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>