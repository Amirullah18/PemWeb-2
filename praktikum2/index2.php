<?php
  //PROSES EKSEKUSI BIODATA
    $_nama = $_POST['nama'] ;
    $_matkul = $_POST['matkul'] ;
    $_uts =  $_POST['uts'] ;
    $_uas = $_POST['uas'] ;
    $_tugas = $_POST['tugas'] ;
    $_total = ($_uts * 30 / 100) + ($_uas * 35 / 100) + ($_tugas * 35 / 100);
    $_range = (($_uts+$_uas+$_tugas)/3);
    echo '<br>  =================================';
    echo '<br> Nama Mahasiswa : ' .$_nama;
    echo '<br> Mata Kuliah :    ' .$_matkul;
    echo '<br> Nilai UTS :  ' .$_uts;
    echo '<br> Nilai UAS :  ' .$_uas;
    echo '<br> Nilai Tugas :    ' .$_tugas;
    echo '<br>  =================================';
?>