@extends('layouts.app')

@section('content')
    <title>Checkout</title>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">Keranjang Belanja</h2>
        </div>
      </div>
      <div class="row">
        <div class="col mt-4">
          <table class="table">
            <thead>
            <tr>
              <th>Produk</th>
              <th>Size</th>
              <th>Jumlah</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($detail as $d)
                <tr>                  
                  <td>
                    <img src="/img/{{ $d->kopi->img }}" alt="" width="100px" height="100px">
                    {{ $d->kopi->nama}}
                  </td>
                  <td>
                    <select name="size">
                      <option value="s">{{ $d->total }}</option>
                    </select>
                  </td>
                  <td>
                    <select name="jumlah">
                      @for ($i = 1; $i < 100; $i++)
                          
                      <option value="{{ $i }}">{{ $i }}</option>
                      @endfor
                    </select>
                  </td>
                  <td>
                    {{ $d->kopi->harga }}
                  </td>
                </tr>
            @endforeach
          </tbody>  
          </table>
        </div>
        <div class="col-md-4 ml-3 mt-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Pembayaran</h5>
              <div class="mt-4" style="border-bottom: 1px solid black;"></div>
              <div class="row mt-5">
                <div class="col">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      <i class="fas fa-money-bill"></i> Cash
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      <i class="fab fa-paypal"></i> Paypal
                    </label>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <p>Nama Meja : <br> {{ $pesanan }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                 
                 <p>Total : <br> Rp. 1.000.000 </p>
         
                </div>
              </div>
              <a href="https://shopee.co.id/?gclid=Cj0KCQiAjJOQBhCkARIsAEKMtO1gFNmFpUzumRZvtOaFqjx1hYZQ-XpjSamv-tfBDdi-nGH4mbgr0YkaAqadEALw_wcB" class="btn btn-danger">Bayar!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection