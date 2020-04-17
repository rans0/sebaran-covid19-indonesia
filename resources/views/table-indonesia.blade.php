<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indonesia</title>
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
      <div class="table table-indonesia" id="provinsi">
        <div class="graph-info">
          <h3>Data Table Indonesia</h3>
          <p>Kasus covid-19 yang terjadi setiap provinsi indonesia dapat dilihat pada table dibawah ini </p>
          <br>
        </div>
        <table id="indo" class="table table-striped table-bordered">
          <thead class="thead-dark">

          <tr>
            <th scope="col">Provinsi</th>
            <th scope="col">Positif</th>
            <th scope="col">Sembuh</th>
            <th scope="col">Meninggal</th>
          </tr>

          </thead>
          <tbody>
          
          @foreach ($provinsi as $p)
          <tr>
            <td>{{ $p['attributes']['Provinsi'] }}</td>
            <td>{{ $p['attributes']['Kasus_Posi'] }}</td>
            <td>{{ $p['attributes']['Kasus_Semb'] }}</td>
            <td>{{ $p['attributes']['Kasus_Meni'] }}</td>
          </tr>
          @endforeach

          </tbody>
          <tfoot class="thead-dark">
            <tr>
              <th scope="col">Provinsi</th>
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
      $('#indo').DataTable();
    });
  </script>
  <script src="{{ asset('javascript/burger.js') }}"></script>

</body>

</html>
