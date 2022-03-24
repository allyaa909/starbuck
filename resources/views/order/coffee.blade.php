@extends('layouts.orderlay')
@section('content')


<section class="home">
 
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
    </form>
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

@endsection