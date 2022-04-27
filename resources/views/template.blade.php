<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>TIKET.com x Wonderful Indonesia</title>
  <title>@yield('title')</title>
</head>
<!--Membuat navbar-->

<body>
  <nav class="navbar navbar-expand-lg navbar-blue bg-blue">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><b>TIKET.COM</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/tambahdata">Reservasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/tampildata">Riwayat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" style="margin-left : 55vw">Tsani Aflah 2008107010015</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Membuat carousel-->
  <style>
    .carousel-item {
      height: 25rem;
      background: black;
      position: relative;
    }

    .container {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding-bottom: 40px;
    }

    .overlay-image {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      background-position: center;
      background-size: cover;
      opacity: 0.97;
    }
  </style>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay-image" style="background-image:url(./img/Pict1.jpg);opacity: 0.99;"></div>
        <div class="container">
          <h1><b>TIKET.com x Wonderful Indonesia</b></h1>
          <p>Perusahaan perdagangan elektronik yang menyediakan
            layanan pemesanan hotel, vila, dan apartemen, juga
            nikmati pemesanan yang praktis hemat waktu.
            TIKET.com yang berbasis aplikasi dan situs web untuk desktop dan mobile.
            Sahabat perjalananmu? TIKET.com tentunya.
          </p>
        </div>
      </div>
      <div class="carousel-item" style="color:white">
        <div class="overlay-image" style="background-image:url(./img/Pict2.jpg); opacity: 0.5;"></div>
        <div class="container">
          <h1><b>Jelajah Indonesia</b></h1>
          <p>Entah itu hotel, resort, wisma, vila, atau apartemen,
            jadikan semua jenis akomodasi Anda hunian terbaik
            bersama TIKET.com. Jangkau lebih banyak tamu sekarang juga.
            Tunggu apalagi daftarkan akomodasi anda sekarang!
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<h3>@yield('judul')</h3>
@yield('konten')
<br>

</html>