<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas UI</title>
    <link rel="stylesheet" href="styleT6.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
    <?php 
    //membuat fungsi kali,bagi,tambah, dan kurang untuk digunakan pada kalkulator
    function kali($n1,$n2){
        return $n1*$n2;
    }
    function bagi($n1,$n2){
        return $n1/$n2;
    }
    function tambah($n1,$n2){
        return $n1+$n2;
    }
    function kurang($n1,$n2){
        return $n1-$n2;
    }
    ?>
    <div class="main">
        <div class="submain1">
            <?php 
            //deklarasi variable nilai 1 dan nilai 2
            $nil1= 120;
            $nil2= 20;
            ?>
            <div class="nilai1">
                <span class="ketnil1">Nilai 1 </span>
                <span class="num1"><?php echo $nil1;?></span>
            </div>
            <div class="nilai2">
                <span class="ketnil1">Nilai 2 </span>
                <span class="num1"><?php echo $nil2;?></span>
            </div>
        </div>
        <div class="submain2">        
            <span class="hasil">Hasil</span>
            <div class="dechasil">
                <!-- output hasil fungsi tambah -->
                <span class="kethasil">Penjumlahan </span>
                <span class="numhasil"><?php echo tambah($nil1,$nil2);?></span>
            </div>
            <div class="dechasil">
                <span class="kethasil">Pengurangan </span>
                <span class="numhasil"><?php echo kurang($nil1,$nil2);?></span>
            </div>
            <div class="dechasil">
                <span class="kethasil">Perkalian </span>
                <span class="numhasil"><?php echo kali($nil1,$nil2);?></span>
            </div>
            <div class="dechasil" style="border-bottom: none;">
                <span class="kethasil">Pembagian </span>
                <span class="numhasil"><?php echo bagi($nil1,$nil2);?></span>
            </div>
        </div>
    </div>
</body>
</html>