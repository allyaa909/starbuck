@extends('layouts.orderlay')
@section('content')

    <section class="home">
        <div class="text">Favorites Menu</div>
        <div class="row text">
          <div class="col">
            <div class="card">
              <img src="/img/kopi1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>Caramel Machiato</p>
                <p>Rp. 30.000</p>
                <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                <select class="ml-5">
                  <option value="1">XL</option>
                  <option value="2">M</option>
                  <option value="3">S</option>
                </select>
                <input type="number" min="0" max="100" class="ml-5">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="/img/cbagel.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>Cheddar Bagel</p>
                <p>Rp. 15.000</p>
                <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                <input type="number" min="0" max="100" class="ml-5">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="/img/kopi2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p>Brown Suggar</p>
                <p>Rp. 30.000</p>
                <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                <select class="ml-5">
                  <option value="1">XL</option>
                  <option value="2">M</option>
                  <option value="3">S</option>
                </select>
                <input type="number" min="0" max="100" class="ml-5">
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <div class="card">
                <img src="/img/kopi3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p>Cappucino Moka</p>
                <p>Rp. 30.000</p>
                  <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                  <select class="ml-5">
                    <option value="1">XL</option>
                    <option value="2">M</option>
                    <option value="3">S</option>
                  </select>
                  <input type="number" min="0" max="100" class="ml-5">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/img/pbagel.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p>Plain Bagel</p>
                <p>Rp. 20.000</p>
                  <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                    <input type="number" min="0" max="100" class="ml-5">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="/img/kopi4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p>Cold Brew</p>
                <p>Rp. 30.000</p>
                  <a href="#" class="btn btn-danger"><i class='bx bxs-cart-add'></i></a>
                  <select class="ml-5">
                    <option value="1">XL</option>
                    <option value="2">M</option>
                    <option value="3">S</option>
                  </select>
                  <input type="number" min="0" max="100" class="ml-5">
                </div>
              </div>  
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <a href="/checkout" class="btn btn-primary checkO">Checkout</a>
          </div>
        </div>
    </section>
@endsection
    
