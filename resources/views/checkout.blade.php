@extends('layouts.app')

@section('content')
    <title>Checkout</title>
    {{-- <div class="container"> --}}
      
      <div class="cek mr-5 ml-5" >
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-5 mt-5" style="font-family: 'Poppins', sans-serif; font-weight : 600;">Keranjang Belanja</h2>
        </div>
      </div>
      <div class="row">
        <div class="col mt-4" style="margin-left: 70px;">
          <table class="table">
            <thead>
            <tr>
              <th>Produk</th>
              <th>Nama</th>
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
                    
                  </td>
                  <td>{{ $d->kopi->nama}}</td>
                  <td>
                      {{ $d->size->ukuran }}
                  </td>
                  <td>
                    {{ $d->jumlah }}
                  </td>
                  <td>
                   Rp. {{ str_replace(',','.',number_format($d->total)) }}
                  </td>
                  <form action="/trash/{{ $d->id }}">
                  <td style="border: none;">
                    <button type="sumbit"><i class="bi bi-trash-fill"></i></button>
                  </td>
                </form>
                </tr>
            @endforeach
          </tbody>  
          </table>
        </div>
        <div class="col-md-4 ml-3 mt-3">
          <div class="card bg-dark" style="color: aliceblue; width: 23rem;">
            <div class="card-body">
              <h5 class="card-title text-center">Pembayaran</h5>
              <div class="mt-4" style="border-bottom: 1px solid white;"></div>
              <div class="row mt-5">
                <div class="col">
                  <div class="form-check mb-2">
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
              <br>
              <div class="row mt-2">
                <div class="col-md-9">
                  <form action="/confirm" method="post">
                    @csrf
                    <p>Nama Meja :</p>
                </div>
                <div class="col">
                  <input type="hidden" value = "{{ $pesanan }}" name="meja">{{ $pesanan }}
                </div>
              </div>
              <div class="row"  style="border-bottom: 1px solid white;">
                <div class="col-md-9">
                  <p>Jumlah Pesanan : </p>
                </div>
                <div class="col">
                 <input type="hidden" value = "{{ $jumlah }}" name="jumlah">{{ $jumlah }}
                </div>
              </div>
              <div class="row  mt-4">
                <div class="col-md-7">
                 
                 <p style="font-size: 20px;">Total : </p>
         
                </div>
                <div class="col">
                  <input type="hidden" value = "{{ $sum }}" name = "total"> Rp. {{ str_replace(',','.',number_format($sum)) }} 
                </div>
              </div>

            </div>
          </div>
          
          <button type = "submit" class="btn btn-danger mt-2" style="padding-right: 167PX; padding-top: 12px; padding-bottom: 12px;"><span style="margin-left: 135px;">BAYAR!</span></button>
        </form>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <a class="btn btn-primary" href="{{ url('/home') }}">
            Kembali
        </a>
        </div>
      </div>
    </div>
    {{-- </div>\\ --}}
@endsection