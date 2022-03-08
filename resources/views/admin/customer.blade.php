<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <table>
    @foreach ($order as $o)
    <tr>
    <td>
  <p>{{ $o->kode_cash }}</p>
  </td>
  <td>
   @foreach ($meja as $item)
       <p>{{ $item->name }}</p>
   @endforeach
  </td>
</tr>
@endforeach
  </table>
</body>
</html>