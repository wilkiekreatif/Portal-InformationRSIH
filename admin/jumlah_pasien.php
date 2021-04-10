<?php
  include('../config.php');
  $q1 = mysqli_query($connect,"SELECT * FROM referensi WHERE id=1");
  $q2 = mysqli_query($connect,"SELECT * FROM info WHERE id=1");
  $q1data = mysqli_fetch_array($q1);
  $q2data = mysqli_fetch_array($q2);
  $periode = $q1data['periode'];
  $tahun = $q1data['tahun'];

  $qtotal = mysqli_query($connect,"SELECT SUM(jml_berkas) AS total FROM pemberkasan WHERE periode='$periode' AND tahun='$tahun'");
  $totaldata= mysqli_fetch_array($qtotal);

  $total = $totaldata['total'];

?>
<div class="row no-gutters align-items-center">
  <div class="col mr-2">
    <div class="text-xs font-weight-bold text-default text-uppercase mb-1">Jumlah Pasien Periode <?php
        echo($periode.' '.$tahun);
    ?></div>
    <div class="row no-gutters align-items-center">
      <div class="col-auto">
        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
          //menampilkan total Berkas
          echo($q1data['jml_pasien'].' <small>Orang</small>');
        ?></div>
      </div>
    </div>
  </div>
  <div class="col-auto">
    <i class="fas fa-users fa-2x text-gray-300"></i>
  </div>
</div>