<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo site_url('assets/logoamikom.png'); ?>" type="image/x-icon">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        input, textarea {
            width: 95%;
            padding: 5px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            margin-top: 10px;
        }
    </style>

</head>

<body style="font-family: roboto;">

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #7430a9;">
        <div class="container-fluid">
            <div class="p-2">
                <a class="p-2" href="#"><img src="<?php echo site_url('assets/amikom.png'); ?>" alt="" style="width: 34px;"></a>
                <a class="navbar-brand px-2" href="#" style="font-size: 16px;">UNIVERSITAS AMIKOM YOGYAKARTA</a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="<?php echo site_url('login/logout'); ?>" type="button" class="btn btn-danger px-3 py-1 mx-2">Logout</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row" style="min-height: 100vh;">
            <div class="col-3 m-0 p-0 bg-body-secondary">
                <div class=" text-center">
                    <img src="<?php echo base_url('assets/kopi.jpg'); ?>" alt="" width="130px" class="my-3 rounded-circle">
                    <h6><?php echo $this->session->userdata('name'); ?></h6>
                    
                    <!-- <a href="#" class="btn btn-warning text-light mb-3">LIHAT PROFIL</a>
                    <a href="#" class="btn btn-primary mb-3">FOTO PROFIL</a> -->
                </div>
                <div class="nav nav-item flex-column text-center my-3">
                    <a href="<?php echo base_url('home/index'); ?>" class="text-decoration-none text-dark my-2">Dashboard</a>
                    <a href="<?php echo base_url('home/create'); ?>" class="bg-primary text-decoration-none text-light p-2">Create RPS</a>
                    <a href="<?php echo base_url('rps/index'); ?>" class="text-decoration-none text-dark my-2">List RPS</a>
                    <a href="" class="text-decoration-none text-dark my-2">Info</a>
                </div>
            </div>
            <div class="col bg-dark-subtle">
                <div class="container m-4">
                    <h3 class="mt-3">CREATE RPS</h3>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#headerrps">Header RPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu2">Gambaran Umum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu3">Capaian Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu4">Prasyarat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu5">Unit-Unit Pembelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu6">Tugas/Aktivitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu7">Referensi</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <form action="<?php echo base_url('rps/create'); ?>" method="POST">
                        <div class="tab-content">
                            <div id="headerrps" class="container tab-pane active"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI HEADER RPS</h5>
                                        </div>
                                        <div class="card-body">

                                            <h2>Form Input Data Pengadaan</h2>
                                            <form action="#" method="post">
                                                <table>
                                                    <!-- kolom ke satu -->
                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Rekening:</td>
                                                        <td><input type="text" id="sel1" name="program_studi" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="kode_matkul" required></td>
                                                    </tr>
                                                    
                                                    <!-- <tr>
                                                        <td>Spesifikasi:</td>
                                                        <td><textarea id="text2" name="nama_matkul" rows="4" required></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kuantitas:</td>
                                                        <td><input type="number" id="text1" name="semester" min="1" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Satuan:</td>
                                                        <td><input type="text" id="text4" name="sks" required></td>
                                                    </tr> -->
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="nama_matkul" min="0" required></td>
                                                    </tr>
                                                    <!-- kolom 2 -->
                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Rekening:</td>
                                                        <td><input type="text" id="sel1" name="semester" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="sks" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="deskripsi" min="0" required></td>
                                                    </tr>
                                                    <div class="card-body">
                                            <!-- kolom ke tiga -->
                                            <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Rekening:</td>
                                                        <td><input type="text" id="sel1" name="gambaran_umum" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="capaian_pembelajaran" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="prasyarat" min="0" required></td>
                                                    </tr>
                                                    <div class="card-body">
                                             <!-- kolom ke empat -->
                                             <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Rekening:</td>
                                                        <td><input type="text" id="sel1" name="kemampuan" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="indikator" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="bahan_kajian" min="0" required></td>
                                                    </tr>
                                                    <!-- kolom ke lima -->
                                             <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Rekening:</td>
                                                        <td><input type="text" id="sel1" name="metode_pembelajaran" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="waktu" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="metode_penilaian" min="0" required></td>
                                                    </tr>
                                                     <!-- kolom ke enam -->
                                             <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Kode Rekening:</td>
                                                        <td><input type="text" id="sel1" name="bahan_ajar" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="aktivitas" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="waktu_tugas" min="0" required></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="bobot" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="kriteria" min="0" required></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="indikator_penilaian" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="referensi" min="0" required></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="uraian1" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Koefisien:</td>
                                                        <td><input type="text" id="text3" name="koefisen1" min="0" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Satuan:</td>
                                                        <td><input type="text" id="text1" name="satuan" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>harga</td>
                                                        <td><input type="text" id="text3" name="harga" min="0" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ppn</td>
                                                        <td><input type="text" id="text1" name="ppn1" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="jumlah1" min="0" required></td>
                                                    </tr>

                                                    <tr>
                                                        <th>Field</th>
                                                        <th>Input</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Uraian:</td>
                                                        <td><input type="text" id="text1" name="uraian2" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Koefisien:</td>
                                                        <td><input type="text" id="text3" name="koefisen2" min="0" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Satuan:</td>
                                                        <td><input type="text" id="text1" name="satuan2" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>harga</td>
                                                        <td><input type="text" id="text3" name="harga2" min="0" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ppn</td>
                                                        <td><input type="text" id="text1" name="ppn2" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah (Rp):</td>
                                                        <td><input type="text" id="text3" name="jumlah2" min="0" required></td>
                                                    </tr>
                                            <!-- <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Prasyarat dan Pengetahuan Awal</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="prasyarat"></textarea>
                                            </div> -->
                                        </div>
                                            <!-- <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Capaian Pembelajaran</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="capaian_pembelajaran"></textarea>
                                            </div> -->
                                        </div>
                                                    
                                                </table>
                                                
                                                <!-- <button type="submit">Submit</button> -->
                                            </form>

                                            <!-- <label for="sel1">Program Studi (select one):</label>
                                            <select class="form-control mb-3" id="sel1" name="program_studi">
                                                <option>D3 Teknik Informatika</option>
                                                <option>D3 Manajemen Informatika</option>
                                                <option>S1 Informatika</option>
                                                <option>S1 Sistem Informasi</option>
                                            </select>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Kode Matakuliah</label>
                                                <input type="text" class="form-control" id="text1" name="kode_matkul">
                                            </div>
                                            <div class="my-3">
                                                <label for="text1" class="form-label">Nama Matakuliah</label>
                                                <input type="text" class="form-control" id="text2" name="nama_matkul">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text1" class="form-label">Semester</label>
                                                <input type="text" class="form-control" id="text1" name="semester">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Bobot SKS</label>
                                                <input type="text" class="form-control" id="text4" name="sks">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text3" class="form-label">Deskripsi</label>
                                                <input type="text" class="form-control" id="text3" name="deskripsi">
                                            </div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="container tab-pane fade"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI GAMBARAN UMUM RPS</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- kolom ke dua -->
                                                     
                                            <!-- <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Gambaran Umum</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="gambaran_umum"></textarea>
                                            </div> -->
                                            <!-- </label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu3" class="container tab-pane fade"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI CAPAIAN PEMBELAJARAN RPS</h5>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="menu4" class="container tab-pane fade"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI PRASYARAT RPS</h5>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div id="menu5" class="container tab-pane fade"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI UNIT-UNIT PEMBELAJARAN RPS</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- <div class="mb-3">
                                                <label for="text2" class="form-label">Kemampuan Akhir yang Diharapkan</label>
                                                <input type="text" class="form-control" id="text1" name="kemampuan">
                                            </div> -->
                                             

                                            <!-- <div class="mb-3">
                                                <label for="text2" class="form-label">Indikator</label>
                                                <input type="text" class="form-control" id="text1" name="indikator">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Bahan Kajian</label>
                                                <input type="text" class="form-control" id="text1" name="bahan_kajian">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Metode Pembelajaran</label>
                                                <input type="text" class="form-control" id="text1" name="metode_pembelajaran">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Waktu</label>
                                                <input type="text" class="form-control" id="text1" name="waktu">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Metode Penilaian</label>
                                                <input type="text" class="form-control" id="text1" name="metode_penilaian">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Bahan Ajar</label>
                                                <input type="text" class="form-control" id="text1" name="bahan_ajar">
                                            </div>-->
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div id="menu6" class="container tab-pane fade"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI TUGAS/AKTIVITAS RPS</h5>
                                        </div>
                                        
                                        <div class="card-body">
                                            
                                            <!-- <div class="mb-3">
                                                <label for="text2" class="form-label">Tugas/Aktivitas</label>
                                                <input type="text" class="form-control" id="text1" name="aktivitas">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Waktu Tugas</label>
                                                <input type="text" class="form-control" id="text1" name="waktu_tugas">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Bobot</label>
                                                <input type="text" class="form-control" id="text1" name="bobot">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Kriteria Penilaian</label>
                                                <input type="text" class="form-control" id="text1" name="kriteria">
                                            </div>
                                            <div class="mb-3">
                                                <label for="text2" class="form-label">Indikator Penilaian</label>
                                                <input type="text" class="form-control" id="text1" name="indikator_penilaian">
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu7" class="container tab-pane fade"><br>
                                <div class="container">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">INFORMASI REFERENSI RPS</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- <div class="mb-3">
                                                <label for="text2" class="form-label">Referensi</label>
                                                <textarea name="referensi" class="form-control" type="text" rows="3" name="referensi"></textarea>
                                            </div> -->
                                            <input class="btn btn-primary" type="submit" value="Create" name="create" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>