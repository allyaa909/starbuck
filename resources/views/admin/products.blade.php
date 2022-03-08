<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($view as $item)
    <form action="{{ route('admin.update') }}" method="get">

    <img src="/img/{{ $item->logo }}" alt="">
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="logo"> 
      </div>
    <p>{{ $item->tittle }}</p>
    <input type="text" name="tittle" value="{{ $item->tittle }}">
    <button type="sumbit">simpan </button>
@endforeach



    </form>
</body>
</html>