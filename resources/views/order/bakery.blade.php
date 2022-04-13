{{-- @extends('layouts.orderlay')
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style2.css">
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <title>Document</title>
</head>
<body>
  <section class="home">
    <li class="search-box">
      <i class='bx bx-search icon'></i>
      <input type="text" id="example-keyup" name = "search"placeholder="Search...">
  </li>
  
  <div class="keyup">
    <div class="text">Bakery</div>
    <div class="row text">
      @foreach ($kopi as $item)
      <form style="display: flex" action="/checkout/{{ $item->id }}">
      <div class="col-9 lg-3">
        <div class="card mt-3">
          <img src="/img/{{ $item->img }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>{{ $item->nama }}</p>
            <input type="hidden" value="{{ $item->harga }}" name = "harga">{{ $item->harga }}</p>
           
            <button type="submit" class="btn btn-danger"><i class='bx bxs-cart-add'></i></button>
              <input type="number" name = "jumlah" min="1" max="{{ $item->stok }}" value="1" class="ml-5">
          </div>
        </div>
     
      </div>
     </form>
        @endforeach

    </div>
  </div>
  </div>
  </section>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
    {{-- <script>
            $('#example-keyup').on('keyup',function(){
            var value = $(this).val();
            
            $.ajax({
              type: "GET",
              url: "{{ url('search') }}",
              data: "name=" + value,
              success:function(data){
                $('.keyup').html(data)
              }
            });
            
        });
  
    </script> --}}
    
</body>
</html>



{{-- @endsection --}}