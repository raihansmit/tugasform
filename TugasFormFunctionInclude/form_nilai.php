<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Form Nilai -->
<h2 style="text-align: center; margin-bottom: 2rem;margin-top: 2rem;">FORM NILAI MAHASISWA</h2>
<form action="form_nilai.php" method="post">
<div class="container">
    <div class="row mb-3 mt-3">
        <div class="col-sm-2 col-form-label">
            <label for="nama_lengkap">Nama Lengkap</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col-sm-2 col-form-label">
            <label for="mata_kuliah">Mata Kuliah</label>
        </div>
        <div class="col-sm-10">
            <select name="mata_kuliah" id="mata_kuliah" class="form-select">
                <option value="DDP">Dasar Dasar Pemrograman</option>
                <option value="BASDAT 1">Basis Data 1</option>
                <option value="WEB">Web 1</option>
            </select>
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col-sm-2 col-form-label">
            <label for="uts">Nilai UTS</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="uts" id="uas" class="form-control">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col-sm-2 col-form-label">
            <label for="uas">Nilai UAS</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="uas" id="uas" class="form-control">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col-sm-2 col-form-label">
            <label for="tugas">Nilai Tugas/Praktikum</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="tugas" id="tugas" class="form-control">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-10">
            <input type="submit" value="Simpan" class="btn btn-primary" name="proses">
        </div>
    </div>
</div>
</form>


<!-- Form Proccessing -->
<?php

require_once 'libfungsi.php';

$proses = $_POST['proses'];
$nama = $_POST['nama_lengkap'];
$matkul = $_POST['mata_kuliah'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$persen_uts = (30/100)*$uts;
$persen_uas = (35/100)*$uas;
$persen_tugas = (35/100)*$tugas;
$nilai_akhir = $persen_uts + $persen_uas + $persen_tugas;


// echo '<div class="container">';
//     echo 'Nilai Mahasiswa';
//     echo '<br/>Proses : '.$proses;
//     echo '<br/>Nama : '.$nama;
//     echo '<br/>Mata Kuliah : '.$matkul;
//     echo '<br/>Nilai UTS: '.$uts;
//     echo '<br/>Nilai UAS : '.$uas;
//     echo '<br/>Nilai Tugas Praktikum : '.$tugas;
//     echo '<br/>Nilai Akhir : '.$nilai_akhir;
// echo '</div>';
echo '<div class=container>';

// INI SECARA MANUAL
// if ($nilai_akhir >= 55){
//     echo 'Selamat Anda Lulus<br/>';
// } else {
//     echo 'Maaf Anda Belum Lulus<br/>';
// }


// if ($nilai_akhir <= 35){
//     echo 'E';
//     $nilai_akhir = 'E';
// } elseif ($nilai_akhir <= 55){
//     echo 'D';
//     $nilai_akhir = 'D';
// } elseif ($nilai_akhir <= 69){
//     echo 'C';
//     $nilai_akhir = 'C';
// } elseif ($nilai_akhir <= 84){
//     echo 'B';
//     $nilai_akhir = 'B';
// } elseif ($nilai_akhir <= 100){
//     echo 'A';
//     $nilai_akhir = 'A';
// }
// switch ($_grade){
//     case 'E' :
//         echo '<br/>SANGAT KURANG';
//         break;
//     case 'D' :
//         echo '<br/>KURANG';
//         break;
//     case 'C' :
//         echo '<br/>CUKUP';
//         break;
//     case 'B' :
//         echo '<br/>MEMUASKAN';
//         break;
//     case 'A' :
//         echo '<br/>SANGAT MEMUASKAN';
//         break;
//     default:
//         echo '<br/>Tidak Valid';
//         break;
// }

// INI MENGGUNAKAN FUNGSI

$_nilai = $nilai_akhir;
$_grade = $nilai_akhir;
$hasil_ujian = kelulusan($_nilai);
$hasil_grade = grade($_grade);
$_predikat = $hasil_grade;
$hasil_predikat = predikat($_predikat);


// echo 'ANDA DINYATAKAN'.$hasil_ujian.'dengan grade nilai : '.$hasil_grade;
// echo $hasil_predikat;


// echo '</div>;'
?>



<!-- TABLE DATA -->
<h2 class="text-center m-3 mt-4">HASIL PENILAIAN MAHASISWA</h2>
<table class="table table-striped table-hover" style="text-align: center;">
    <thead>
        <tr class="table-primary">
            <th>NO</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Tugas Praktikum</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><?=$nama?></td>
            <td><?=$matkul?></td>
            <td><?=$uts?></td>
            <td><?=$uas?></td>
            <td><?=$tugas?></td>
            <td><?=$nilai_akhir?></td>
        </tr>
        <tr>
            <td colspan="7"><?='ANDA DINYATAKAN'.$hasil_ujian?></td>
        </tr>
        <tr>
            <td colspan="6" style="text-align: left;">GRADE</td>
            <td style="text-align: left; font-weight: bold"><?=$hasil_grade?></td>
        </tr>
        <tr>
            <td rowspan="2" colspan="6" style="text-align: left; vertical-align: middle;">PREDIKAT</td>
            <td style="text-align: left; font-weight:bold; vertical-align: middle;"><?=$hasil_predikat?></td>
        </tr>
    </tbody>
</table>