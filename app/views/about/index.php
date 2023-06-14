<style type="text/css">
  *{
  }
</style>
<br>
<div class="container">

  <div class="p-2 mb-1 bg-light rounded-3">
    <div class="container-fluid py-1">
      <h1 class="display-5 fw-bold">Selamat Datang Di Website Saya</h1>
      <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron</p>
      <a class="btn btn-primary" href="#" role="button">Klik Disini</a>
    </div>
  </div>
<br><br>
  <img src="<?= BASEURL; ?>/img/MINE.png" alt="Naufal Harits" width="25%" class="foto" style="float: left;">
  <h1 style=" position:relative;left: 20px;margin-top: 60px;"> 
 About Me</h1>
  <p style="position: relative; left: 20px;">
    Halo, Nama Saya <?= $data['nama']; ?> , Umur Saya <?= $data['umur']; ?> , Pekerjaan Saya <?= $data['pekerjaan']; ?></p>
</div>
<br><br><br>

<!-- SLIDE -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= BASEURL; ?>/img/fotosatu.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= BASEURL; ?>/img/fotodua.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= BASEURL; ?>/img/fototiga.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
