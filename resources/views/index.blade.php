<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sebaran Covid-19</title>
  <!-- CSS -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!-- FONTAWESOME -->
  <script src="https://kit.fontawesome.com/f96113016a.js" crossorigin="anonymous"></script>

</head>

<body>
  <main>
    <section class="home">
      <aside class="home__left">
        <header>
          <nav class="nav">
            <div class="nav-logo">
              <img src="{{ asset('assets/logo.png') }}" alt="">
            </div>

            <div class="nav-menu">
              <div class="nav-menu__item">
                <a href="" class="nav-menu__link active">HOME</a>
              </div>
              <div class="nav-menu__item">
                <a href="" class="nav-menu__link">GRAPH</a>
              </div>
              <div class="nav-menu__item">
                <a href="" class="nav-menu__link">PENCEGAHAN</a>
              </div>
            </div>
          </nav>
        </header>

        <article class="home-info">
          <div class="home-info__title">
            <h5>COVID-19</h5>
          </div>
          <div class="home-info__paraf">
            <p>Infeksi virus Corona atau COVID-19 disebabkan oleh coronavirus,
              yaitu kelompok virus yang menginfeksi sistem pernapasan.
              Pada sebagian besar kasus, coronavirus hanya menyebabkan
              infeksi pernapasan ringan sampai sedang, seperti flu.
              Akan tetapi, virus ini juga bisa menyebabkan infeksi
              pernapasan berat, seperti pneumonia.</p>
          </div>
          <div class="home-info__button">
            <a href="#indonesia">INFO INDONESIA</a>
          </div>
        </article>
      </aside>

      <aside class="home__right">
        <img src="{{ asset('assets/bg-corona.png') }}" alt="" class="home-aside__img">
      </aside>
    </section>

    <section class="indonesia" id="indonesia">
      <article class="indonesia-left">
        <div class="indonesia-left__header">
          <h5>INDONESIA</h5>
          <div class="line"></div>
        </div>

        <div class="indonesia-left__content">
          <div class="card card-positif">
            <img src="{{ asset('assets/char-positif.png') }}" alt="" class="card-img">
            <h6 class="card-title">POSITIF</h6>
            <div class="card-number">
              <h6>192</h6>
            </div>
          </div>

          <div class="card card-sembuh">
            <img src="{{ asset('assets/char-sembuh.png') }}" alt="" class="card-img">
            <h6 class="card-title">SEMBUH</h6>
            <div class="card-number">
              <h6>192</h6>
            </div>
          </div>

          <div class="card card-meninggal">
            <img src="{{ asset('assets/char-meninggal.png') }}" alt="" class="card-img">
            <h6 class="card-title">MENINGGAL</h6>
            <div class="card-number">
              <h6>192</h6>
            </div>
          </div>
        </div>
      </article>

      <aside class="indonesia-right">
        <div class="info-indonesia">
          <img src="{{ asset('assets/map-indonesia.png') }}" alt="" class="info-indonesia__img">
          <div class="info-indonesia__paraf">
            <h4>LAPORAN KASUS CORONA INDONESIA</h4>
            <p>Cukup banyak kasus corona
              terjadi di Indonesia dengan
              begitu data lengkap dari beberapa
              provinsi dapat dilihat pada
              data table dibawah ini</p>
          </div>
          <a href="">Lihat Table &nbsp;<i class="fas fa-chevron-right"></i></a>
        </div>
      </aside>
    </section>
  </main>

</body>

</html>