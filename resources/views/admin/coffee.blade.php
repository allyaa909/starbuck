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
  <section class="home">
 
    <div class="text">Bakery</div>
    <a href="{{ route('admin.addcoffee') }}">TAMBAH</a>
    <div class="row text">
      @foreach ($kopi as $item)
      <div class="col-4 lg-3">
        <div class="card mt-3">
          <img src="/img/{{ $item->img }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>{{ $item->nama }}</p>
            <input type="hidden" value="{{ $item->harga }}" name = "harga">{{ $item->harga }}</p>
            <select class="ml-5"  name="size">
              @foreach ($size as $s)
              <option value="{{ $s->id }}">{{ $s->ukuran }}</option>
              @endforeach
            </select>
           
            <button type="submit" class="btn btn-danger"><i class='bx bxs-cart-add'></i></button>
              <input type="number" name = "jumlah" min="1" max="{{ $item->stok }}" value="1" class="ml-5">
          </div>
        </div>
     
      </div>
        @endforeach
        
      
      {{-- <div class="col">
        <div class="card">
          <img src="/img/pbagel.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p>Plain Bagel</p>
            <p>Rp. 30.000</p>
            <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                    <input type="number" min="0" max="100" class="ml-5">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="/img/crbagel.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p> Raisin Bagel</p>
            <p>Rp. 30.000</p>
            <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                    <input type="number" min="0" max="100" class="ml-5">
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <img src="/img/ebagel.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p>Everything Bagel</p>
            <p>Rp. 30.000</p>
              <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                    <input type="number" min="0" max="100" class="ml-5">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="/img/aspread.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p>Avocado Spread</p>
            <p>Rp. 30.000</p>
            <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
            <input type="number" min="0" max="100" class="ml-5">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="/img/croissant.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p>Croissant</p>
            <p>Rp. 30.000</p>
              <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                    <input type="number" min="0" max="100" class="ml-5">
            </div>
          </div>  
        </div>
      </div> --}}
    </div>
  </div>
</section>
</body>
</html>