<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Form Nilai -->
<h2 style="text-align: center; margin-bottom: 2rem;margin-top: 2rem;">Form Nilai Siswa</h2>
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
$proses = $_POST['proses'];
$nama = $_POST['nama_lengkap'];
$matkul = $_POST['mata_kuliah'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];

echo '<div class="container">';
    echo 'Nilai Mahasiswa';
    echo '<br/>Proses : '.$proses;
    echo '<br/>Nama : '.$nama;
    echo '<br/>Mata Kuliah : '.$matkul;
    echo '<br/>NilaiUTS: '.$uts;
    echo '<br/>Nilai UAS : '.$uas;
    echo '<br/>Nilai Tugas Praktikum : '.$tugas;
echo '</div>';

?>