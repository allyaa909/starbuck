<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style3.css">
    <title>Starbucks</title>
</head>
<body>
  @foreach ($tampilan as $item)
      
  
    <section>
        <div class="circle">

        </div>
        <header>
            
            <a href="#"><img src="/storage/images/{{ $item->logo }}" alt="" class="logo"></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('login') }}">Menu</a></li>
                <li><a href="#">What's New</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>{{ $item->title }}<br>Ini <span>{{ $item->brand }}</span></h2>
                <p>{{ $item->desc }}</p>
                <a href="#">Learn More</a>
            </div>
            <div class="imgBox">
                <img src="/storage/images/{{ $item->img1 }}" class="starbucks">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="/storage/images/{{ $item->img1 }}" onclick="imgSlider('/storage/images/{{ $item->img1 }}');changeCircleColor('#017143')"></li>
            <li><img src="/storage/images/{{ $item->img2 }}" onclick="imgSlider('/storage/images/{{ $item->img2 }}');changeCircleColor('#eb7495')"></li>
            <li><img src="/storage/images/{{ $item->img3 }}" onclick="imgSlider('/storage/images/{{ $item->img3 }}');changeCircleColor('#d752b1')"></li>
        </ul>
        <ul class="sci">
            <li><a href="#"><img src="/img/facebook.png"></a></li>
            <li><a href="#"><img src="/img/twitter.png"></a></li>
            <li><a href="#"><img src="/img/instagram.png"></a></li>
        </ul>
    </section>
    @endforeach
    <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.starbucks').src = anything;
        }

        function changeCircleColor(color){
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
</body> 
</html>