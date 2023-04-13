<?php
require_once 'class_bmipasien.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $berat = $_POST['bb'];
    $tinggi = $_POST['tb'];

    
    $pasien = new BMIpasien();
    $pasien->nama = $nama;
    $pasien->umur = $umur;
    $pasien->jk = $jk;
    $pasien->berat = $berat;
    $pasien->tinggi = $tinggi;


    $hasil_bmi = $pasien->hasilBMI();
    $status_bmi = $pasien->statusBMI();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="row">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Berat (KG)</th>
                        <th scope="col">Tinggi (CM)</th>
                        <th scope="col">BMI</th>
                        <th scope="col">Hasil</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No</th>
                        <td> <?= $nama ?> </td>
                        <td> <?= $jk ?> </td>
                        <td> <?= $umur ?> </td>
                        <td> <?= $berat ?> </td>
                        <td> <?= $tinggi ?> </td>
                        <td> <?= $hasil_bmi ?> </td>
                        <td> <?= $status_bmi ?> </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>