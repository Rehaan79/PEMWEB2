<?php

    //array asosiatif
    $ns1 = ['id' =>1, 'nim'=>'01101', 'uts'=>80, 'uas'=>90, 'tugas'=>100];
    $ns2 = ['id' =>2, 'nim'=>'01105', 'uts'=>88, 'uas'=>80, 'tugas'=>85];
    $ns3 = ['id' =>3, 'nim'=>'01201', 'uts'=>92, 'uas'=>90, 'tugas'=>90];
    $ns4 = ['id' =>4, 'nim'=>'01103', 'uts'=>79, 'uas'=>80, 'tugas'=>80];
    $ns5 = ['id' =>5, 'nim'=>'01102', 'uts'=>80, 'uas'=>95, 'tugas'=>97];
    $ns6 = ['id' =>6, 'nim'=>'01109', 'uts'=>85, 'uas'=>80, 'tugas'=>95];

    $ar_nilai =[$ns1, $ns2, $ns3, $ns4, $ns5, $ns6];

    foreach($ar_nilai as $hasil)

    
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>TABEL NILAI</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>

    <?php

         $nomor = 1;

        foreach($ar_nilai as $ns){

        $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3 ;


    ?>

        <tr>
            <td> <?= $nomor        ?>  </td>
            <td> <?= $ns['nim']    ?>  </td>
            <td> <?= $ns['uts']    ?>  </td>
            <td> <?= $ns['uas']    ?>  </td>
            <td> <?= $ns['tugas']  ?>  </td>
            <td> <?= number_format($nilai_akhir,2 ,',',',')   ?>  </td>
        </tr>


    <?php
        $nomor++;
        }

    ?>
    




</tbody>
</table>
    