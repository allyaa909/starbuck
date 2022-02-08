<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center">Daftar Pesanan</h2>
        <div class="row">
            <div class="col">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Nama</th>
                        <th scope="col">Size</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        {{-- <th scope="row">1</th> --}}
                        <td>Stabrak 1</td>
                        <td><p><input type='radio' name='medium' value='medium' checked='checked' />Medium</p>
                            <p><input type='radio' name='large' value='large' />Large</p>
                        </td>
                        <td>Rp. 1.000.000</td>
                        <td>2 Pcs.</td>
                      </tr>
                      <tr>
                        {{-- <th scope="row">2</th> --}}
                        <td>Stabrak 2</td>
                        <td><p><input type='radio' name='jenis_kelamin' value='pria' checked='checked' />Pria</p>
                            <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
                        </td>
                        <td>Rp. 2.000.000</td>
                        <td>3 Pcs.</td>
                      </tr>
                      <tr>
                        {{-- <th scope="row">3</th> --}}
                        <td>Stabrak 3</td>
                        <td><p><input type='radio' name='jenis_kelamin' value='pria' checked='checked' />Pria</p>
                            <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
                        </td>
                        <td>Rp. 5.000.000</td>
                        <td>10 Pcs.</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>