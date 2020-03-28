<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!---BOOTSTRAP 4--->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
     <!---JQUERY AND DATATABLES--->
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <title>Sebaran Covid-19</title>

    <style>

        body{
            background-color: #ddd;
            color: black;
            box-sizing: border-box;
        }

        .container{
            margin-top: 50px;
        }


    </style>
</head>

<body>

    <div class="container" id="Global">
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="text-center">Laporan Kasus Corona Global Update</h2>
            </div>
        </div>
        <div class="row align-items-center">
            {{-- <div class="col-12 "> --}}
                {{-- @foreach ($indonesia as $id) --}}
                {{-- @foreach ($positif as $ps) --}}
                <div class="col-xl-4">
                    <div class="card">

                      <div class="card-body">
                        <h5 class="card-title">Positif</h5>
                        <h3 class="card-text">{{ $positif['value'] }}</h3>
                      </div>
                      <div class="card-header align-items-center">
                        <img src="https://img.icons8.com/cute-clipart/100/000000/sad.png" alt="" width="75" height="75">
                      </div>

                    </div>
                </div>
                {{-- @endforeach --}}

                {{-- @foreach ($sembuh as $nt) --}}
                <div class="col-xl-4">
                    <div class="card">

                      <div class="card-body">
                        <h5 class="card-title">Sembuh</h5>
                        <h3 class="card-text">{{ $sembuh['value'] }}</h3>
                      </div>
                      <div class="card-header align-items-center">
                        <img src="https://img.icons8.com/cute-clipart/100/000000/happy.png" alt="" width="75" height="75">
                      </div>

                    </div>
                </div>
                {{-- @endforeach --}}

                {{-- @foreach ($mati as $mt) --}}
                    <div class="col-xl-4">
                        <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Meninggal</h5>
                            <h3 class="card-text">{{ $meninggal['value'] }}</h3>
                        </div>
                        <div class="card-header align-items-center">
                            <img src="https://img.icons8.com/cute-clipart/100/000000/crying.png" alt="" width="75" height="75">
                        </div>

                        </div>
                    </div>
                {{-- @endforeach --}}


                {{-- @endforeach --}}
            {{-- </div> --}}
        </div>
    </div>

    <div class="container" id="global">

        <table id="glob" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">

                <tr>
                    {{-- <th scope="col">No</th> --}}
                    <th scope="col">Negara</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                  </tr>

            </thead>
            <tbody>

                @foreach ($global as $p)
                    <tr>
                        {{-- <td>$no</td> --}}
                        <td>{{ $p['attributes']['Country_Region'] }}</td>
                        <td>{{ $p['attributes']['Active'] }}</td>
                        <td>{{ $p['attributes']['Recovered'] }}</td>
                        <td>{{ $p['attributes']['Deaths'] }}</td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot  class="thead-dark">
                <tr>
                    <th scope="col">Negara</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                </tr>
            </tfoot>
        </table>

    </div>

    <div class="container" id="Indonesia">
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="text-center">Laporan Kasus Corona Indonesia Update</h2>
            </div>
        </div>
        <div class="row align-items-center">
            {{-- <div class="col-12 "> --}}
                @foreach ($indonesia as $id)

                <div class="col-xl-4">
                    <div class="card">

                      <div class="card-body">
                        <h5 class="card-title">Positif</h5>
                        <h3 class="card-text">{{ $id['positif'] }}</h3>
                      </div>
                      <div class="card-header align-items-center">
                        <img src="https://img.icons8.com/cute-clipart/100/000000/sad.png" alt="" width="75" height="75">
                      </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">

                      <div class="card-body">
                        <h5 class="card-title">Sembuh</h5>
                        <h3 class="card-text">{{ $id['sembuh'] }}</h3>
                      </div>
                      <div class="card-header align-items-center">
                        <img src="https://img.icons8.com/cute-clipart/100/000000/happy.png" alt="" width="75" height="75">
                      </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">

                      <div class="card-body">
                        <h5 class="card-title">Meninggal</h5>
                        <h3 class="card-text">{{ $id['meninggal'] }}</h3>
                      </div>
                      <div class="card-header align-items-center">
                        <img src="https://img.icons8.com/cute-clipart/100/000000/crying.png" alt="" width="75" height="75">
                      </div>

                    </div>
                </div>

                @endforeach
            {{-- </div> --}}
        </div>
    </div>

    <div class="container" id="provinsi">

        <table id="indo" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-dark">

                <tr>
                    {{-- <th scope="col">No</th> --}}
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                  </tr>

            </thead>
            <tbody>

                @foreach ($provinsi as $p)
                    <tr>
                        {{-- <td>$no</td> --}}
                        <td>{{ $p['attributes']['Provinsi'] }}</td>
                        <td>{{ $p['attributes']['Kasus_Posi'] }}</td>
                        <td>{{ $p['attributes']['Kasus_Semb'] }}</td>
                        <td>{{ $p['attributes']['Kasus_Meni'] }}</td>
                    </tr>
                @endforeach

            </tbody>
            <tfoot  class="thead-dark">
                <tr>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Sembuh</th>
                    <th scope="col">Meninggal</th>
                </tr>
            </tfoot>
        </table>

    </div>

    <script>
        $(document).ready(function() {
            $('#indo').DataTable();
            $('#glob').DataTable();
        } );
    </script>

</body>
</html>
