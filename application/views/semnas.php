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
<div id="about" class="home-section bg-white wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="section-heading">
				 <h2>About SEMNASTI 2017</h2>
         <p style="text-align:justify"><strong>Seminar Nasional Teknik Informatika (SEMNASTI) </strong>adalah salah satu event tahunan terbesar yang diselenggarakan oleh Himpunan Mahasiswa Teknik Informatika (HMTI) Universitas Dian Nuswantoro Semarang.
Dengan adanya SEMNASTI, diharapkan mahasiswa mampu mendapatkan informasi ter-update dari perkembangan Teknologi masa kini. Dan dapat menambah wawasan mahasiswa mengenai Teknologi.
<br><br>
Perkembangan teknologi Augmented Reality dan Virtual Reality sangat berkembang di luar negeri, hingga banyak produk Augmented Reality (AR) dan Virtual Reality (VR) yang berdatangan masuk ke Indonesia dan perkembangan teknologi AR dan VR di luar Indonesia sangat berkembang dengan pesat, sedangkan di Indonesia perkembangan teknologi AR dan VR masih lambat. Hal ini dikarenakan masih banyaknya permasalahan yang menghambat perkembangan teknologi AR dan VR mulai dari infrastruktur hingga sumber daya manusia. Bahkan sampai saat ini perusahaan lokal yang fokus dalam bidang AR dan VR jumlahnya sedikit dibanding perusahaan yang terdapat di luar negeri. Meskipun kita dapat menemukan produk lokal AR dan VR, di dalam pemasarannya masih kalah saing dengan produk luar negeri.
<br><br>
Hal tersebutlah yang mendasari diadakannya <strong>Seminar Nasional Teknik Informatika tahun 2017 </strong>dengan judul <strong>Rise Your Imagination with Augmented Reality and Virtual Reality Technology</strong> yang akan memberikan solusi dari permasalahan – permasalahan yang akan disampaikan pada acara seminar.
</p><br>
<p style="text-align:justify;font-size:16px"><strong>SEMNASTI 2017 akan dilaksanakan pada :</strong></p><br>
          <table style="text-align:justify;">
            <tr>
              <td style="padding-right:10px"><strong>Hari, tanggal</strong></td>
              <td>: Sabtu, 18 Maret 2017</td>
            </tr>
            <tr>
              <td><strong>Tempat</strong></td>
              <td>: Aula Gedung E Universitas Dian Nuswantoro </td>
            </tr>
            <tr>
              <td><strong>Pukul</strong></td>
              <td>: 07.00 - 13.00 WIB </td>
            </tr>
            <tr>
              <td><strong>HTM </strong></td>
              <td>Mahasiswa UDINUS (Rp. 60.000)</td>
            </tr>
            <tr>
              <td></td>
              <td>Umum (Rp. 65.000)</td>
            </tr>
          </table>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="speakers" class="home-section bg-blue wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="section-heading">
         <h2>SPEAKERS</h2>

         <!-- INI YANG DI TAMBAHKAN  -->
        </div>
      </div>
      <img src="<?php echo base_url();?>assets/images/pembicara.png" alt="" class="img-responsive"/>
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

<div id="register" class="home-section bg-white wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s" style="margin-top:-10%">
    <div class="row">
      <div class="col-md-offset-2 col-md-8">
        <div class="section-heading">
          <h2>PENDAFTARAN </h2>
          <p>Mohon Input Data Diri dengan Benar</p>
          <!-- @include('layouts.partials.message') -->
        </div>
      </div>
      <div class="col-md-offset-3 col-md-6">
        <form class="" action="<?php echo base_url('peserta/store');?>" method="post">

          <input type="hidden" name="_token" value=" csrf_token() ">
            <div class="form-group">
              <input type="hidden" name="pin" class="form-control" value="<?php echo substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz",3)),0,5)?>" readonly="true">
            </div>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" />
            </div>
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Email"/>
            </div>
            <div class="form-group">
              <input type="tel" name="telp" class="form-control" placeholder="Phone Number" />
            </div>
             <div class="form-group">
               <label for="kategori" style="font-size:16px"><strong>Kategori</strong></label><br>
               <input type="radio" name="kategori" value="mhs"> Mahasiswa
               <input type="radio" name="kategori" value="umum"> Umum
            </div>
            <div class="form-group" id="instansi" style="display:none">
              <input type="text" name="instansi" class="form-control" placeholder="Instansi" hidden="true" />
            </div>
            <div class="form-group" id="jurusan"  style="display:none">
              <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" hidden="true" />
            </div>
            <div class="form-group" id="alamat"  style="display:none">
              <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap" hidden="true"/>
            </div>
             <div class="text-center">
               <input type="submit" name="Submit" value="Daftar" class="btn btn-lg btn-block btn-primary">
             </div>
          </form>
      </div>
    </div>
</div>

<div id="faq" class="home-section bg-blue wow fadeInDown" data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Frequently Asked Question</h2>
        </div>

        <div class="col-md-8 col-md-offset-2" style="text-align:justify">
          <div onclick="myFunction()" class="faq"><span id="plus"></span>
            Kapan SEMNASTI 2017 dilaksanakan ?
          </div>
          <div id="jawab" class="jawab">
            SEMNASTI 2017 Rise Your Imagination with Augmented Reality and Virtual Reality Technology
            dilaksanakan pada : <br>
            <b>Hari, tanggal	:</b> Sabtu, 18 Maret 2017 <br>
            <b>Tempat	        : </b> Aula Gedung E Universitas Dian Nuswantoro <br>
            <b>Pukul	        : </b> 07.00 - 13.00 WIB
          </div>
          <div onclick="myFunction1()" class="faq"><span id="plus"></span>
            Bagaimana cara mendaftar SEMNASTI 2017 ?
          </div>
          <div id="jawab1" class="jawab">
          Pendaftaran dapat diakses melalui link <b>Semnasti 2017</b>
          <a href="http//:hmti.dinus.ac.id/semnasti" style="color:rgb(249, 172, 52)">
            http//:hmti.dinus.ac.id/semnasti</a> atau dapat langsung datang ke stand pendaftaran
            <b>Semnasti 2017</b> di gedung H lantai 1 dan gedung D lantai 1 <b>Universitas Dian Nuswantoro.</b>
          </div>
          <div onclick="myFunction2()" class="faq"><span id="plus"></span>
            Berapa harga tiket SEMNASTI 2017 ?
          </div>
          <div id="jawab2" class="jawab">
            Harga tiket Seminar Nasional Teknik Informatika 2017 yaitu: <br>
            Mahasiswa UDINUS  : Rp.60.000,- <br>
            UMUM      : Rp.65.000,-<br>
            <b>HTM akan naik Rp.5000,-  per 6 Maret 2017.</b>
          </div>
          <div onclick="myFunction3()" class="faq"><span id="plus"></span>
            Apakah pembayaran dapat melalui transfer Rekening ?
          </div>
          <div id="jawab3" class="jawab">
            Pembayaran melalui rekening dapat dikirim ke :<br>
            <b>No.rek :</b> 1452-01-000529-53-1 <b>(BRI)</b><br>
            <b>An :</b> MUHAMAD GHOFIR
          </div>
          <div onclick="myFunction4()" class="faq"><span id="plus"></span>
            Apakah ada batas waktu pembayaran Tiket SEMNASTI 2017 ?
          </div>
          <div id="jawab4" class="jawab">
            <b>Ada, batas maksimal pembayaran tiket SEMNASTI 2 hari</b>.
            Jika melebihi waktu pembayaran  yang telah ditentukan maka tiket akan
            hangus dan akan dialihkan kepada pendaftar lain.
          </div>
          <div onclick="myFunction5()" class="faq"><span id="plus"></span>
            Kapan pendaftaran Semnasti 2017 mulai DIBUKA ?
          </div>
          <div id="jawab5" class="jawab">
            Pendaftaran Semnasti 2017 dibuka mulai pada :<br>
            Hari, Tanggal : Rabu, 15 Februari 2017
          </div>
          <div onclick="myFunction6()" class="faq"><span id="plus"></span>
            Kapan pendaftaran Semnasti 2017 akan DITUTUP ?
          </div>
          <div id="jawab6" class="jawab">
            Pendaftaran Semnasti 2017 akan ditutup pada :<br>
            Hari, Tanggal : Sabtu, 11 Maret 2017<br>
            <b style="color:rgb(249, 172, 52)">Pendaftaran akan ditutup ketika kuota telah terpenuhi.</b>
          </div>
          <div onclick="myFunction7()" class="faq"><span id="plus"></span>
            Dimana lokasi SEMNASTI 2017 diselenggarakan ?
          </div>
          <div id="jawab7" class="jawab">
            Seminar Nasional Teknik Informatika 2017 diselenggarakan di :<br>
            Aula Gedung E Universitas Dian Nuswantoro<br>
            Jl. Nakula No. 5 – 11 Semarang, Jawa Tengah.
          </div>
          <div onclick="myFunction8()" class="faq"><span id="plus"></span>
            Apa saja fasilitas yang didapat ?
          </div>
          <div id="jawab8" class="jawab">
            Peserta yang telah mendaftar <b>SEMNASTI 2017</b> dan hadir saat acara, akan mendapatkan fasilitas :<br>
            - Sertifikat<br>
            - Snack<br>
            - Lunch Box<br>
            - Seminar Kit<br>
            - Doorprize
          </div>
          <div onclick="myFunction9()" class="faq"><span id="plus"></span>
            Kapan dan di mana pengambilan SERTIFIKAT ?
          </div>
          <div id="jawab9" class="jawab">
            Sertifikat <b>Semnasti 2017</b> akan dibagikan setelah acara selesai hari itu juga. <br>
            Pada    : Sabtu, 18 Maret 2017. <br>
            Tempat  : di Aula Gedung E Universitas Dian Nuswantoro.
          </div>
          <div onclick="myFunction10()" class="faq"><span id="plus"></span>
            Apakah SEMNASTI 2017 hanya ditujukan untuk mahasiswa UDINUS saja ?
          </div>
          <div id="jawab10" class="jawab">
            Tidak, Seminar Nasional Teknik Informatika 2017 ditujukan untuk semua kalangan atau untuk umum.
          </div>
          <div onclick="myFunction11()" class="faq"><span id="plus"></span>
            Official account of SEMNASTI 2017 ?
          </div>
          <div id="jawab11" class="jawab">
            Informasi mengenai Seminar Nasional Teknik Informatika 2017 hanya akan kami infokan melalui official account kami, diantaranya :<br>
            - Web : <a href="http://hmti.dinus.ac.id/semnasti" target="_blank" style="color:rgb(249, 172, 52)">https://hmti.dinus.ac.id/semnasti </a><br>
            - Twittter : <a href="http://twitter.com/semnasti_hmti" target="_blank" style="color:rgb(249, 172, 52)">@semnasti_hmti</a><br>
            - Instagram : <a href="http://www.instagram.com/semnasti/" target="_blank" style="color:rgb(249, 172, 52)"> @semnasti</a><br>
            - Facebook : <a href="http://hmti.dinus.ac.id/semnasti/" target="_blank" style="color:rgb(249, 172, 52)">semnastihmti</a><br>
            - Email : semnasti.hmti@gmail.com
          </div>
        </div>
      </div>
      <!-- FAQ end -->
    </div>
  </div>
</div>

<!-- <div id="sponsor" class="home-section bg-white wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="section-heading">
         <h2>OUR SPONSORS AND MEDIA PARTNERS</h2>
         <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
               <img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
               <h4>My Republik</h4>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
              <div class="box-team wow bounceInDown">
               <img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
               <h4>Kompas</h4>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
              <div class="box-team wow bounceInDown">
               <img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
               <h4>DinusTech</h4>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
              <div class="box-team wow bounceInDown">
               <img src="<?php echo base_url();?>assets/img/team/a.png" alt="" class="img-responsive" />
               <h4>Indoprinting</h4>
              </div>
            </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
 -->
<div id="contact" class="home-section spacer wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="color-light">
          <h2 class="wow bounceInDown" data-wow-delay="0s">MARK YOUR CALENDAR</h2>
          <p class="lead wow bounceInUp" data-wow-delay="1s">18 Maret 2017</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/partials/footer.php');  ?>
</body>
</html>
