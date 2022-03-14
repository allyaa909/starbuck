<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('admin.update') }}" method="POST" enctype="multipart/form-data">
    @foreach ($view as $item)
      @csrf
    <img src="/img/{{ $item->img1 }}" alt="">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="img1"> 
      </div>
    <img src="/img/{{ $item->img2 }}" alt="">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="img2"> 
      </div>
    <img src="/img/{{ $item->img3 }}" alt="">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="img3"> 
      </div>
    <img src="/img/{{ $item->logo }}" alt="">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="logo"> 
      </div>
  
    <p>{{ $item->tittle }}</p>
    <input type="text" name="title" value="{{ $item->title }}">
    <input type="text" name="brand" value="{{ $item->brand }}">
    <input type="textarea" name="desc" value="{{ $item->desc }}">
    <button type="sumbit">simpan </button>
  </form>
@endforeach

</body>
</html>



    
