<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global</title>
  <!-- CSS -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!---BOOTSTRAP 4--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <!---JQUERY AND DATATABLES--->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

  <!-----ChartJS---->
</head>

<body>
  <header>
    <nav class="other-navbar">
      <img src="../assets/logo.png" alt="" class="other-navbar__img">
      <div class="other-navbar__link">
        <a href="/">HOME</a>
        <a href="/graph">GRAPH</a>
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
        <a href="/graph">GRAPH</a>
        <a href="/pencegahan">PENCEGAHAN</a>
      </div>

    </div>
    <div class="container-table">
      <div class="table table-internasional" id="global">
        <div class="graph-info">
          <h3>Data Table Internasional</h3>
          <p>Kasus covid-19 menyebar luas dan terjadi di setiap negara, dapat dilihat negara-negara apa saja yang terkena dampak covid-19 pada table dibawah ini </p>
          <br>
        </div>

      <table id="glob" class="table table-striped table-bordered">
        <thead class="thead-dark">

          <tr>
            <th scope="col">Negara</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>

        </thead>
        <tbody>

          @foreach ($global as $p)
          <tr>
            <td>{{ $p['attributes']['Country_Region'] }}</td>
            <td>{{ $p['attributes']['Active'] }}</td>
            <td>{{ $p['attributes']['Recovered'] }}</td>
            <td>{{ $p['attributes']['Deaths'] }}</td>
          </tr>
          @endforeach

        </tbody>
        <tfoot class="thead-dark">

            <tr>
              <th scope="col">Negara</th>
              <th scope="col">Positif</th>
              <th scope="col">Sembuh</th>
              <th scope="col">Meninggal</th>
            </tr>

        </tfoot>
        </table>

      </div>
    </div>
  </main>
  <script>
    $(document).ready(function() {
      $('#glob').DataTable();
    });
  </script>
  <script src="{{ asset('javascript/burger.js') }}"></script>
</body>

</html>
