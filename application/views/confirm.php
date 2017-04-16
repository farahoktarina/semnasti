<!DOCTYPE HTML>
<html>
<head>
  <?php include_once('master.php'); ?>
</head>
<body>
<?php include_once('layouts/partials/navigation.php');  ?>

<div id="intro">
  <div class="intro-text">
    <div class="container wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
      <div class="row">
      <div class="col-md-12">
        <div class="brand">
          <h1>Welcome to <div id="semnasti" style="width:100%"></div></h1>
          <div class="line-spacer"></div>
          <h6 style="color:#faad35">Rise Your Imagination with <br>
            Augmented Reality and Virtual Reality Technology
          </h6>
          </div>
          <div class="line-spacer"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-md-offset-4" style="margin-top:40px">
      <h3 style="padding-bottom:10px">TIME REMAINING</h3>
      <h4 style="color:#f9ad35; border:2px solid #dcebf1; padding:5px" id="demo"></h4>
    </div>
  </div>
</div>
<div id="alur" class="home-section wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s" style="background-color:#7bb2ca">
  <!-- <div class="container"> -->
    <!-- <div class="row">
      <div class="col-md-12 wow fadeInDown " data-wow-duration=".8s" data-wow-delay=".2s"> -->
        <img src="<?php echo base_url();?>assets/images/alur.png" alt="Alur Pendaftaran SEMNASTI" width="100%">
      <!-- </div>
    </div> -->
  <!-- </div> -->
</div>
<div class="home-section bg-white" id="confirm">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="section-heading">
        <h2>KETERANGAN</h2>
        <p style="text-align:justify; font-size:16px">Peserta SEMNASTI 2017 yang akan hadir di hari pelaksanaan
        WAJIB mengisi form <strong>KONFIRMASI KEHADIRAN </strong> guna memudahkan pendataan peserta.
        Silahkan<strong> input email </strong>yang Anda gunakan ketika register untuk mendapatkan
        <strong>QRCode</strong> Anda. QRCode ini digunakan saat registrasi ulang SEMNASTI 2017.
      </p>
      </div>
      <form class="" action="<?php echo base_url('Confirm/store');?>" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <!--  @include('layouts.partials.message')
           -->
           <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Your Email"  style="text-align:center"/>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <input type="submit" name="confirm" value="Confirm & Get Your QRCode" class="btn btn-lg btn-block btn-primary">
            </div>
          </div>
      </form>
    </div>
  </div>
</div>
<?php include_once('layouts/partials/footer.php');  ?>
</body>
</html>
