<?php

    $ns1 = [id => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = [id => 1, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = [id => 1, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = [id => 1, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

    $array_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


<h2 style="text-align: center; padding: 1rem;">DAFTAR NILAI SISWA</h2>
<div class="card" style="margin: 1rem;">
    <div class="card-body">
    <table class="table table-striped" style="text-align: center;">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>NILAI AKHIR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($array_nilai as $nilai_siswa){
            echo '<tr>';
            echo '<td>'.$nomor.'</td>';
            echo '<td>'.$nilai_siswa['nim'].'</td>';
            echo '<td>'.$nilai_siswa['uts'].'</td>';
            echo '<td>'.$nilai_siswa['uas'].'</td>';
            echo '<td>'.$nilai_siswa['tugas'].'</td>';
            $nilai_akhir  = ($nilai_siswa['uts'] + $nilai_siswa['uas']+$nilai_siswa['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.');
            echo '</tr>';

            $nomor++;
        }
        ?>
    </tbody>
</table>
    </div>
</div>