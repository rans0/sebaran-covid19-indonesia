<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sebaran Covid-19</title>
    <!-- CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
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
            <a href="">INFO INDONESIA</a>
          </div>
        </article>
      </aside>

      <aside class="home__right">
        <img src="{{ asset('assets/bg-corona.png') }}" alt="" class="home-aside__img">
      </aside>
    </section>
  </main>

</body>

</html>