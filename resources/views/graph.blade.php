<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graph</title>
  <!-- CSS -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!-- FONTAWESOME -->
  <!-- <script src="https://kit.fontawesome.com/f96113016a.js" crossorigin="anonymous"></script> -->
  <!-----ChartJS---->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

</head>

<body>
  <header>
    <nav class="other-navbar">
      <img src="../assets/logo.png" alt="" class="other-navbar__img">
      <div class="other-navbar__link">
        <a href="/">HOME</a>
        <a href="/graph" class="underline">GRAPH</a>
        <a href="/pencegahan">PENCEGAHAN</a>
      </div>

      <div class="other-navbar__btn">
        <div class="menu-btn" id="menu-btn">
          <div class="menu-btn__burger" id="menu-btn__burger"></div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="menu-responsive" id="menu-responsive">
      <div class="menu-responsive__link">
        <a href="/">HOME</a>
        <a href="/graph" class="underline">GRAPH</a>
        <a href="/pencegahan">PENCEGAHAN</a>
      </div>
    </div>

    <div class="container-graph">
      <div class="container-g">
        <div class="graph" id="chart">
          <div class="graph-info">
            <h3>Grafik Covid 19 Provinsi</h3>
            <p>Indonesia</p>
          </div>
          {!! $chart->container() !!}
        </div>
      </div>
    </div>
    {!! $chart->script() !!}
  </main>

  <script src="{{ asset('javascript/burger.js') }}"></script>
</body>

</html>
