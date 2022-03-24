<div class="row text">
    @foreach ($search as $item)
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
