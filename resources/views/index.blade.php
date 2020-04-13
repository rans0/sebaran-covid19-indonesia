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
          <div class="home-info__flex">
            <div class="home-info__button">
              <a href="#indonesia">INFO INDONESIA</a>
            </div>

            <div class="home-info__ibutton">
              <a href="#internasional">INFO INTERNASIONAL</a>
            </div>
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
          @foreach ($indonesia as $id)

          <div class="card card-positif">
            <img src="{{ asset('assets/char-positif.png') }}" alt="" class="card-img">
            <h6 class="card-title">POSITIF</h6>
            <div class="card-number">
              <h6>{{ $id['positif'] }}</h6>
            </div>
          </div>

          <div class="card card-sembuh">
            <img src="{{ asset('assets/char-sembuh.png') }}" alt="" class="card-img">
            <h6 class="card-title">SEMBUH</h6>
            <div class="card-number">
              <h6>{{ $id['sembuh'] }}</h6>
            </div>
          </div>

          <div class="card card-meninggal">
            <img src="{{ asset('assets/char-meninggal.png') }}" alt="" class="card-img">
            <h6 class="card-title">MENINGGAL</h6>
            <div class="card-number">
              <h6>{{ $id['meninggal'] }}</h6>
            </div>
          </div>

          @endforeach
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

    <section class="internasional" id="internasional">
      <aside class="internasional-kiri">
        <div class="internasional-kiri__img">
          <img src="{{ asset('assets/map-globe.png') }}">
        </div>
        <div class="internasional-kiri__info">
          <h4>LAPORAN KASUS CORONA INTERNASIONAL</h4>
          <p>Virus ini sudah menyebar luas di seluruh dunia, info lengkap pada table dibawah.</p>
          <a href="#">Lihat Table &nbsp;<i class="fas fa-chevron-right"></i></a>
        </div>
      </aside>

      <article class="internasional-kanan">
        <div class="internasional-kanan__header">
          <div class="line"></div>
          <h5>INTERNASIONAL</h5>
        </div>

        <div class="internasional-kanan__card">
          <div class="card-globe card-globe__positif">
            <img src="{{ asset('assets/char-positif-1.png') }}" class="card-globe__img">
            <h6 class="card-globe__title">POSITIF</h6>
            <div class="card-globe__number">
              <h6>{{ $positif['value'] }}</h6>
            </div>
            <div class="cfooter card-globe__pfooter"></div>
          </div>

          <div class="card-globe card-globe__sembuh">
            <img src="{{ asset('assets/char-sembuh-1.png') }}" class="card-globe__img">
            <h6 class="card-globe__title">SEMBUH</h6>
            <div class="card-globe__number">
              <h6>{{ $sembuh['value'] }}</h6>
            </div>
            <div class="cfooter card-globe__sfooter"></div>
          </div>

          <div class="card-globe card-globe__meninggal">
            <img src="{{ asset('assets/char-meninggal-1.png') }}" class="card-globe__img">
            <h6 class="card-globe__title">MENINGGAL</h6>
            <div class="card-globe__number">
              <h6>{{ $meninggal['value'] }}</h6>
            </div>
            <div class="cfooter card-globe__mfooter"></div>
          </div>
        </div>
      </article>
    </section>
  </main>

  <footer>
    <h3>STAY AT HOME</h3>
    <p>INDONESIA</p>
  </footer>

</body>

</html>