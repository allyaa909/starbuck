@extends('layouts.app')

@section('content')
{{-- <form action="/check" method = "get"> --}}
  <title>Order</title>
  <div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Size</th>
        <th scope="col">Jumlah</th>
      </tr>
    </thead>
    <tbody> 
      @foreach ($kopi as $k)
          
      
     
        <form action="/checkout/{{ $k->id }}" method="GET">
          <tr>
            <td><img src="/img/{{ $k->img }}" alt="" width="100px;" height="100px"></td>
            <td>{{ $k->nama }}</td>
            <td><input type="hidden" value="{{ $k->harga }}" name = "harga">{{ $k->harga }}</td>
          <td><select name="size">
            @foreach ($size as $s)
            <option value="{{ $s->id }}">{{ $s->ukuran }}</option>
            @endforeach
          </select></td>
          <td><select name="jumlah">
            @for ($i = 1; $i < 100; $i++)
            <option value="{{$i}}" name = "jumlah">{{ $i }}</option>
            @endfor
          </select>
        </td>
        <td>
          <button type="submit" class="btn btn-dark mb-3" style="float: right;"><i class="bi bi-cart-plus-fill"></i></button>
        </td>
      </form>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
      <a href="/checkout" class="btn btn-danger mb-3" style="float: right;">Lihat Pesanan</a>
</div>
    </form>
@endsection
