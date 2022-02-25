
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <style>
    .card {
        border: none;
        height: 320px;
        background-color: black;
        margin: 20px auto;
    }

    .forms-inputs {
        position: relative;
    }

        body {
            font-family: poppins;
            background-color: wheat;
        }

        .bayar {
          color: white;  
        }
    </style>

    <title>Konfirmasi</title>
  </head>
  <body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data text-center" v-if="!submitted">
                        <div class="forms-inputs mb-4">
                         <p class="bayar">Terima Kasih Sudah Memesan</p> 
                            <img src="/img/centang.png" width="100px" height="100px" alt="">
                        </div> 
                        <div class="row">
                            <p class="bayar text-center">Silahkan Klik Konfirmasi Jika Sudah Menerima Pesanan</p>
                        </div> 
                        <div class="row">
                            <form action="/konfirmasi">
                            <button type="submit" id="tombolSaya" data-loading-text="Loading..." class="btn btn-primary" autocomplete="off">Konfirmasi</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('#tombolSaya').click(function(){
                $(this).delay(300);
            });
        });
    </script>
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>
