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
    <form action="{{ route('admin.updatecoffee') }}" enctype="multipart/form-data">
    <input type="file" name="img"> 
    <input type="text" name = "nama">
    <input type="number" name = "harga">
    <input type="number" name = "stok">
    <input type="hidden" name = "kategori" value = "{{ $kategori_id }}">
    <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
</body>
</html>