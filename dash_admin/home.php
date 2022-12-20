<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <div class="callout callout-info">
    <h4 style="text-transform: uppercase;"><?php echo "$i[sekolah] "; ?></h4>
    Selamat datang di <?php echo "$i[nama] "; ?>
      <strong class="pull-right btn btn-sm bg-orange"><?php
      $tanggal = date ("d");
      $bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
      $bulan = $bulan[date("n")];
      $tahun = date("Y");
      echo $tanggal ." ". $bulan ." ". $tahun;
      date_default_timezone_set('Asia/Jakarta');
      $jam=date("H:i");
      echo " | ". $jam." "."";
      $a = date ("H");
      if (($a>=1) && ($a<=10)){
        echo ", Selamat Pagi";
      }
      else if(($a>10) && ($a<=13))
      {
        echo ", Selamat Siang";
      }
      else if (($a>13) && ($a<=15))
      {
        echo ", Selamat Sore";
      }
      else if (($a>15) && ($a<=17))
      {
        echo ", Selamat Petang";
      }
      else { echo ", Selamat Malam";
    }
    ?></strong>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <!-- Apply any bg-* class to to the info-box to color it -->
  <!-- /.info-box -->
  <!-- Small boxes (Stat box) -->
  <div class="row">
    </div>

    <div class="col-md-12">
      <div class="box box-solid">
        <!-- /.box-header -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="../assets/img/slide/slide-1.png" alt="First slide" class="img-thumbnail">
              <div class="carousel-caption">
                <h4>SELAMAT DATANG DI APLIKASI <?php echo "$i[nama] "; ?></h4>
              </div>
            </div>
            <div class="item">
              <img src="../assets/img/slide/slide-2.png" alt="Second slide" class="img-thumbnail">
              <div class="carousel-caption">
                <h4>TETAPLAH BELAJAR HINGGA AKHIR HAYATMU</h4>
              </div>
            </div>
            <div class="item">
              <img src="../assets/img/slide/slide-3.png" alt="tree slide" class="img-thumbnail">
              <div class="carousel-caption">
                <h4>TEKNOLOGI MENJADI PENGGERAK KEHIDUPAN</h4>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>

        <!-- ./col -->
  </div>
</section>
</div>
