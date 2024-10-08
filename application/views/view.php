<!DOCTYPE html>
<html lang="en">

<head>
    <title>View RPS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo site_url('assets/logoamikom.png'); ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row content">
            <div class="p-0 mt-4">
                    <table class="table text-center table-bordered border border-secondary">
                        <tr>
                            <td rowspan="2">
                                <h5>Kode Rekening</h5>
                                <!-- <img src="<?= base_url('assets/logoamikomrps.png'); ?>" width="200" class="my-5"> -->
                            </td>
                            <td rowspan="2">
                                <h5>Uraian</h5>
                                <!-- <h5 class="mt-4">RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
                                <h5 class="text-uppercase">PROGRAM STUDI : <?= $datarps['program_studi']; ?></h5>
                                <h4>MATA KULIAH <?= $datarps['nama_matkul']; ?></h4> -->
                            </td>
                            <td class="main-header" colspan="4">
                                <h5>Rincian Perhitungan</h5>
                            </td>
                            <td rowspan="2">
                                <h5 >Jumlah (Rp)</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><i>Koefisien/ Volume</i></p>
                            </td>
                            <td>
                                <p><i>Satuan</i></p>
                            </td>
                            <td>
                                <p><i>Harga</i></p>
                            </td>
                            <td>
                                <p><i>PPN</i></p>
                            </td>
                            
                        </tr>

                        <!-- Kolom satu -->
                        <tr>
                            <td>
                                <h5><?= $datarps['program_studi']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start"><?= $datarps['kode_matkul']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['nama_matkul']; ?></h5>
                            </td>
                        </tr>

                        <!-- kolom dua -->
                        <tr>
                            <td>
                                <h5><?= $datarps['semester']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start"><?= $datarps['sks']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['deskripsi']; ?></h5>
                            </td>
                        </tr>

                        <!-- kolom tiga -->
                        <tr>
                            <td>
                                <h5><?= $datarps['gambaran_umum']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start"><?= $datarps['capaian_pembelajaran']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['prasyarat']; ?></h5>
                            </td>
                        </tr>

                        <!-- kolom empat -->
                        <tr>
                            <td>
                                <h5><?= $datarps['kemampuan']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start"><?= $datarps['indikator']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['bahan_kajian']; ?></h5>
                            </td>
                        </tr>

                        <!-- kolom lima -->
                        <tr>
                            <td>
                                <h5><?= $datarps['metode_pembelajaran']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start"><?= $datarps['waktu']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['metode_penilaian']; ?></h5>
                            </td>
                        </tr>

                        <!-- kolom enam -->
                        <tr>
                            <td>
                                <h5><?= $datarps['bahan_ajar']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start"><?= $datarps['aktivitas']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['waktu_tugas']; ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">[#]<?= $datarps['bobot']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['kriteria']; ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">[-]<?= $datarps['indikator_penilaian']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['referensi']; ?></h5>
                            </td>
                        </tr>
                        <!-- kolom lengkap -->
                        <tr>
                            <td></td>
                            <td >
                                <h5 class="text-start"><?= $datarps['uraian1']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['koefisen1']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['satuan']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['harga']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['ppn1']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start">Rp<?= $datarps['jumlah1']; ?></h5>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td >
                                <h5 class="text-start"><?= $datarps['uraian2']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['koefisen2']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['satuan2']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['harga2']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['ppn2']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start">Rp<?= $datarps['jumlah2']; ?></h5>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td >
                                <h5 class="text-start"><?= $datarps['uraian3']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['koefisen3']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['satuan3']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['harga3']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['ppn3']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start">Rp<?= $datarps['jumlah3']; ?></h5>
                            </td>
                        </tr>td>
                        </tr>
                        
                        <tr>
                            <td>
                                <h5></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">[#]<?= $datarps['indikator_penilaian']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['referensi']; ?></h5>
                       
                            </tr>
                        <tr>
                            <td>
                                <h5></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">[-]<?= $datarps['indikator_penilaian']; ?></h5>
                            </td>
                            <td colspan="5">
                                <h5 class="text-start">Rp<?= $datarps['referensi']; ?></h5>
                        </tr>

                        <tr>
                            <td></td>
                            <td >
                                <h5 class="text-start"><?= $datarps['uraian4']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['koefisen4']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['satuan4']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['harga4']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['ppn4']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start">Rp<?= $datarps['jumlah4']; ?></h5>
                            </td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td >
                                <h5 class="text-start"><?= $datarps['uraian5']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['koefisen5']; ?></h5>
                            </td>
                            <td >
                                <h5 class="text-start"><?= $datarps['satuan5']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['harga5']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start"><?= $datarps['ppn5']; ?></h5>
                            </td>
                            <td>
                                <h5 class="text-start">Rp<?= $datarps['jumlah5']; ?></h5>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td >
                                <p class="text-start"><?= $datarps['uraian6']; ?></p>
                            </td>
                            <td >
                                <p class="text-start"><?= $datarps['koefisen6']; ?></p>
                            </td>
                            <td >
                                <p class="text-start"><?= $datarps['satuan6']; ?></p>
                            </td>
                            <td>
                                <p class="text-start"><?= $datarps['harga6']; ?></p>
                            </td>
                            <td>
                                <p class="text-start"><?= $datarps['ppn6']; ?></p>
                            </td>
                            <td>
                                <p class="text-start">Rp<?= $datarps['jumlah6']; ?></p>
                            </td>
                        </tr>
                    </table>
                </div>

                <!-- <table class="table-bordered text-center">
                    <tr>
                        <td colspan="4">
                            <h1>RENCANA PEMBELAJARAN SEMESTER (RPS)</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style="padding: 1px;" class="no_doc_rps">
                            <h6>FM-PJM-011/Rev.00/25 Jan 2018</h6>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4"><img src="<?= base_url('assets/logoamikomrps.png'); ?>" width="300"></td>   
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h3>BELANJA DAERAH : <?= $datarps['nama_matkul']; ?> (<?= $datarps['kode_matkul']; ?>)</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h3>Program Studi : <?= $datarps['program_studi']; ?></h3>
                        </td>
                    </tr>
                    <tr>
                        <td>No</td>
                        <td>Tgl Berlaku</td>
                        <td>Tgl Disusun</td>
                        <td>Revisi</td>
                    </tr>
                    <tr>
                        <td> RPS-DT-170</td>
                        <td>2 Juni 2023</td>
                        <td>2 April 2023</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Disetujui oleh
                            <p>Dekan Ilmu Komputer</p>
                        </td>
                        <td>Diperiksa oleh
                            <p>Kaprodi D3TI</p>
                        </td>
                        <td>Disusun oleh
                            <p>Koordinator MK</p>
                        </td>
                        <td>Dikendalikan oleh
                            <p>Sekprodi D3TI</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="<?php echo site_url('assets/ttd.jpg'); ?>" alt="" width="100px" height="100px"></td>
                        <td><img src="<?php echo site_url('assets/ttd.jpg'); ?>" alt="" width="100px" height="100px"></td>
                        <td><img src="<?php echo site_url('assets/ttd.jpg'); ?>" alt="" width="100px" height="100px"></td>
                        <td><img src="<?php echo site_url('assets/ttd.jpg'); ?>" alt="" width="100px" height="100px"></td>
                    </tr>
                    <tr>
                        <td>Firman Asharudin, M.Kom</td>
                        <td>Firman Asharudin, M.Kom</td>
                        <td>Firman Asharudin, M.Kom</td>
                        <td>Firman Asharudin, M.Kom</td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            <h2>UNIVERSITAS AMIKOM YOGYAKARTA</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h2>YOGYAKARTA</h1>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <h2>2023</h1>
                        </td>
                    </tr>

                </table>

                <br>
                <div class="p-0 mt-4">
                    <table class="table text-center table-bordered border border-secondary">
                        <tr>
                            <td rowspan="2">
                                <img src="<?= base_url('assets/logoamikomrps.png'); ?>" width="200" class="my-5">
                            </td>
                            <td rowspan="2">
                                <h5 class="mt-4">RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
                                <h5 class="text-uppercase">PROGRAM STUDI : <?= $datarps['program_studi']; ?></h5>
                                <h4>MATA KULIAH <?= $datarps['nama_matkul']; ?></h4>
                            </td>
                            <td>
                                <p><i>No</i></p>
                                <p><i>Tgl Disusun</i></p>
                                <p><i>Revisi</i></p>
                            </td>
                            <td>
                                <p class="text-start">: <i> RPS-TI-DT170</i></p>
                                <p class="text-start">: <i>2-April-2023</i></p>
                                <p class="text-start">: <i>0</i></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><i>Halaman</i></p>
                            </td>
                            <td class="text-start">: <i>Hal. 1 dari 20</i></td>
                        </tr>
                    </table>
                </div>

                <div class="container p-0">
                    <div style="background-color: #808080">
                        <p class="py-2 mx-4"><b>1. Identitas</b></p>
                    </div>
                </div>

                <div class="container-fluid">
                    <table class="table table-bordered">
                        <tr>
                            <td>Program Studi</td>
                            <td colspan="2"><?= $datarps['program_studi']; ?></td>
                            <td>Semester</td>
                            <td colspan="2"><?= $datarps['semester']; ?></td>
                        </tr>

                        <tr>
                            <td>Nama & Kode Mata Kuliah</td>
                            <td colspan="2"><?= $datarps['nama_matkul']; ?> (<?= $datarps['kode_matkul']; ?>)</td>
                            <td>Bobot SKS</td>
                            <td colspan="2"><?= $datarps['sks']; ?></td>
                        </tr>

                        <tr>
                            <td>Persentase nilai</td>
                            <td colspan="2"><?= $datarps['bobot']; ?></td>
                            <td>Dosen Pengampu</td>
                            <td colspan="2">Firman Asharudin</i></td>
                        </tr>

                        <tr>
                            <td colspan="7" class="text-center">Klasifikasi Nilai:</td>
                        </tr>

                        <tr>
                            <td colspan="2"> >80% = A</td>
                            <td>60 & < 80=B</td>
                            <td>40 & < 60=C</td>
                            <td>20 & < 40=D</td>
                            <td colspan="2">
                                < 20=E</td>
                        </tr>
                    </table>
                </div>
                <div class="container p-0">
                    <div class="box" style="background-color: #808080;">
                        <p class="py-2 mx-4"><b>2. Gambaran Umum</b></p>
                    </div>
                    <div class="gambaran-umum mx-4">
                        <p><?= $datarps['gambaran_umum']; ?></p>

                    </div>
                </div>

                <div class="container p-0">
                    <div class="box" style="background-color: #808080;">
                        <p class="py-2 mx-4"><b>3. Capaian Pembelajaran</b></p>
                    </div>
                    <div class="gambaran-umum mx-4">
                        <p><?= $datarps['capaian_pembelajaran']; ?></p>
                    </div>
                </div>
                <div class="container p-0">
                    <div class="box" style="background-color: #808080">
                        <p class="py-2 mx-4"><b>4. Persyaratan dan Pengetahuan Awal(Prior Knowledge)</b></p>
                    </div>
                    <div class="gambaran-umum mx-4">
                        <p><?= $datarps['prasyarat']; ?></p>

                    </div>
                </div>

                <div class="container p-0 ">
                    <table class="table text-center table-bordered border border-secondary">
                        <tr>
                            <td rowspan="2">
                                <img src="<?= base_url('assets/logoamikomrps.png'); ?>" width="200" class="my-5">
                            </td>
                            <td rowspan="2">
                                <h5 class="mt-4">RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
                                <h5 class="text-uppercase">PROGRAM STUDI : <?= $datarps['program_studi']; ?></h5>
                                <h4>MATA KULIAH <?= $datarps['nama_matkul']; ?></h4>
                            </td>
                            <td>
                                <p><i>No</i></p>
                                <p><i>Tgl Disusun</i></p>
                                <p><i>Revisi</i></p>
                            </td>
                            <td>
                                <p class="text-start">: <i> RPS-TI-DT170</i></p>
                                <p class="text-start">: <i>2-April-2023</i></p>
                                <p class="text-start">: <i>0</i></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><i>Halaman</i></p>
                            </td>
                            <td class="text-start">: <i>Hal. 2 dari 20</i></td>
                        </tr>
                    </table>
                </div>

                <div class="container p-0">
                    <div class="" style="background-color: #808080;">
                        <p class="py-2 mx-4 "><b>5. Unit-Unit Pembelajaran secara Spesifik</b></p>
                    </div>
                    <div class="tabel1">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4" id="table">
                                <thead>
                                    <tr class="text-center" style="background-color: #808080;">
                                        <th scope="col">Kemampuan Akhir yang diharapkan</th>
                                        <th scope="col">Indikator</th>
                                        <th scope="col">Bahan Kajian</th>
                                        <th scope="col">Metode Pembelajaran</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Metode Penilaian</th>
                                        <th scope="col">Bahan Ajar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['indikator']; ?></td>
                                        <td><?= $datarps['bahan_kajian']; ?>
                                        </td>
                                        <td><?= $datarps['metode_pembelajaran']; ?></td>
                                        <td><?= $datarps['waktu']; ?></td>
                                        <td><?= $datarps['metode_penilaian']; ?></td>
                                        <td><?= $datarps['bahan_ajar']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['indikator']; ?></td>
                                        <td><?= $datarps['bahan_kajian']; ?>
                                        </td>
                                        <td><?= $datarps['metode_pembelajaran']; ?></td>
                                        <td><?= $datarps['waktu']; ?></td>
                                        <td><?= $datarps['metode_penilaian']; ?></td>
                                        <td><?= $datarps['bahan_ajar']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['indikator']; ?></td>
                                        <td><?= $datarps['bahan_kajian']; ?>
                                        </td>
                                        <td><?= $datarps['metode_pembelajaran']; ?></td>
                                        <td><?= $datarps['waktu']; ?></td>
                                        <td><?= $datarps['metode_penilaian']; ?></td>
                                        <td><?= $datarps['bahan_ajar']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['indikator']; ?></td>
                                        <td><?= $datarps['bahan_kajian']; ?>
                                        </td>
                                        <td><?= $datarps['metode_pembelajaran']; ?></td>
                                        <td><?= $datarps['waktu']; ?></td>
                                        <td><?= $datarps['metode_penilaian']; ?></td>
                                        <td><?= $datarps['bahan_ajar']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['indikator']; ?></td>
                                        <td><?= $datarps['bahan_kajian']; ?>
                                        </td>
                                        <td><?= $datarps['metode_pembelajaran']; ?></td>
                                        <td><?= $datarps['waktu']; ?></td>
                                        <td><?= $datarps['metode_penilaian']; ?></td>
                                        <td><?= $datarps['bahan_ajar']; ?></td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="container mt-1">
                    <div class="box" style="background-color: #808080;">
                        <p class="py-2 mx-4 "><b>6. Tugas/Aktivitas dan Penilaian</b></p>
                    </div>
                    <div class="tabel2">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4" id="table">
                                <thead>
                                    <tr class="text-center" style="background-color: #808080;">
                                        <th scope="col">Tugas/ <br> Aktivitas</th>
                                        <th scope="col">Kemampuan akhir yang diharapkan</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Bobot</th>
                                        <th scope="col">Kriterian Penilaian</th>
                                        <th scope="col">Indikator Penilaian</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $datarps['aktivitas']; ?></td>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['waktu_tugas']; ?>
                                        </td>
                                        <td><?= $datarps['bobot']; ?></td>
                                        <td><?= $datarps['kriteria']; ?></td>
                                        <td><?= $datarps['indikator_penilaian']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['aktivitas']; ?></td>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['waktu_tugas']; ?>
                                        </td>
                                        <td><?= $datarps['bobot']; ?></td>
                                        <td><?= $datarps['kriteria']; ?></td>
                                        <td><?= $datarps['indikator_penilaian']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['aktivitas']; ?></td>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['waktu_tugas']; ?>
                                        </td>
                                        <td><?= $datarps['bobot']; ?></td>
                                        <td><?= $datarps['kriteria']; ?></td>
                                        <td><?= $datarps['indikator_penilaian']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['aktivitas']; ?></td>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['waktu_tugas']; ?>
                                        </td>
                                        <td><?= $datarps['bobot']; ?></td>
                                        <td><?= $datarps['kriteria']; ?></td>
                                        <td><?= $datarps['indikator_penilaian']; ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $datarps['aktivitas']; ?></td>
                                        <td><?= $datarps['kemampuan']; ?></td>
                                        <td><?= $datarps['waktu_tugas']; ?>
                                        </td>
                                        <td><?= $datarps['bobot']; ?></td>
                                        <td><?= $datarps['kriteria']; ?></td>
                                        <td><?= $datarps['indikator_penilaian']; ?></td>

                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="box" style="background-color: #808080;">
                        <p class="py-2 mx-4"><b>7. Referensi</b></p>
                    </div>
                    <div class="gambaran-umum mx-4">
                        <p><?= $datarps['referensi']; ?>.</p>
                        <p><?= $datarps['referensi']; ?>.</p>


                    </div>
                </div> -->
                 <!-- Rencana Pelaksanaan Pembelajaran  -->
                <!-- <div class="container">
                    <div class="box" style="background-color: #808080;">
                        <p class="py-2 mx-4 "><b>8. Rencana Pelaksanaan Pembelajaran</b></p>
                    </div>

                    <div class="tabel">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Minggu/Pertemuan</th>
                                        <th scope="col">Kemampuan Akhir yang Diharapkan</th>
                                        <th scope="col">Indikator</th>
                                        <th scope="col">Topik & Sub Topik</th>
                                        <th scope="col">Aktivitas dan Strategi Pembelajaran</th>
                                        <th scope="col">Waktu</th>
                                        <th scope="col">Penilaian</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($datamateri as $mhs) : ?>
                                        <tr>
                                            <td><?= $mhs['pertemuan']; ?></td>
                                            <td><?= $mhs['kemampuan_akhir']; ?></td>
                                            <td><?= $mhs['indikator']; ?></td>
                                            <td><?= $mhs['topik']; ?></td>
                                            <td><?= $mhs['aktivitas']; ?></td>
                                            <td><?= $mhs['waktu']; ?> Menit</td>
                                            <td><?= $mhs['penilaian']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
            </div>
        <!-- end rencana pembelajaran  -->
        <div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end d-print-none">
                <a href="<?= base_url('rps/index') ?>" class="btn btn-danger navbar-btn d-print-none"><i class="bi bi-chevron-left"></i></a>
                <a href="javascript:void(0);" id="printButton" class="btn btn-primary border d-print-none">Cetak</a>
            </div>
        </div>

        <script>
            document.getElementById("printButton").addEventListener("click", function() {
                window.print();
            });
        </script>