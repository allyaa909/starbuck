<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style2.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
    <div class="row text">
        <div class="col-4">
          <div class="card mt-3">
              
                  
             
            <img src="/img/{{ $kopi}}" class="card-img-top" alt="...">
          
            <div class="card-body">
              <p>Coffee</p>
              <a href="bakery/{{ $kopi_id }}" class="btn btn-danger">TAMBAH ITEM</a>
                     
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card mt-3">
             
            <img src="/img/{{ $bakery }}" class="card-img-top" alt="...">
      
            <div class="card-body">
              <p>Bakery</p>
             
              <a href="bakery/{{ $bakery_id }}" class="btn btn-danger">TAMBAH ITEM</a>
            
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card mt-3">
             
            <img src="/img/{{ $snack }}" class="card-img-top" alt="...">
      
            <div class="card-body">
              <p>Snack</p>
             
              <a href="bakery/{{ $snack_id }}" class="btn btn-danger">TAMBAH ITEM</a>
            
            </div>
          </div>
        </div>
    </div>
</body>
</html>