<!-- MODIFIKASI  >      GRADE NILAI -->
<?php
    //PROSES EKSEKUSI NILAI UTS, UAS, TUGAS
    if($_uts && $_uas && $_tugas >= 85    &&  $_uts && $_uas && $_tugas <= 100){
        $grade = "A";
    }elseif($_uts && $_uas && $_tugas >=70     && $_uts && $_uas && $_tugas <= 84){
        $grade = "B";
    }elseif($_uts && $_uas && $_tugas >= 56   &&  $_uts && $_uas && $_tugas <= 69){
        $grade = "C";
    }elseif($_uts && $_uas && $_tugas >= 36   &&  $_uts && $_uas && $_tugas <= 55){
        $grade = "D";
    }elseif($_uts && $_uas && $_tugas >= 0    &&  $_uts && $_uas && $_tugas <= 35){
        $grade = "E";
    }elseif($_uts && $_uas && $_tugas < 0 &&  $_uts && $_uas && $_tugas <= 100){
        $grade = "I";
    }else{
        $grade = "Ada Yang Salah Dengan Penilaian Kamu";
    }
    echo '<br> <br> Grade Nilai Kamu Adalah :   '   .$grade;
?>


<!-- MODIFIKASI  >    PREDIKAT NILAI -->
<?php
    //PROSES EKSEKUSI PREDIKAT NILAI DARI HASIL GRADE
    if($grade == "A"){
        $predikat = "Sangat Memuaskan";
    }elseif($grade == "B"){
        $predikat = "Memuaskan";
    }elseif($grade == "C"){
        $predikat = "Cukup";
    }elseif($grade == "D"){
        $predikat = "Kurang";
    }elseif($grade == "E"){
        $predikat = "Sangat Kurang";
    }elseif($grade == "I"){
        $predikat = "Tidak Ada Grade";
    }else{
        $predikat = "Tidak Ada";
    }
    echo '<br/> Predikat Nilai Kamu    :   ' .$predikat;
    echo '<br>  =================================';
?>