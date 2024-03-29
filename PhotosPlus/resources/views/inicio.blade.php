<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PhotoPlus</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>
<body>
<!-- partial:index.partial.html -->

  <!-- Banner para el ingreso al sistema -->
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Principal</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   PHOTOSPLUS
                </div>

                <div class="links">
                    
                </div>
            </div>
        </div>

<article class='gallery'>
  <a class='gallery-link' href='https://unsplash.it/1200/1000?image=1081'>
    <figure class='gallery-image'>
      <img height='1000' src='https://unsplash.it/1200/1000?image=1081' width='1200'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1200/1000?image=1014'>
    <figure class='gallery-image'>
      <img height='1000' src='https://unsplash.it/1200/1000?image=1014' width='1200'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1000/1600?image=267'>
    <figure class='gallery-image'>
      <img height='1600' src='https://unsplash.it/1000/1600?image=267' width='1000'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1200/1600?image=266'>
    <figure class='gallery-image'>
      <img height='1600' src='https://unsplash.it/1200/1600?image=266' width='1200'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1200/1200?image=634'>
    <figure class='gallery-image'>
      <img height='1200' src='https://unsplash.it/1200/1200?image=634' width='1200'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1000/1400?image=923'>
    <figure class='gallery-image'>
      <img height='1400' src='https://unsplash.it/1000/1400?image=923' width='1000'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1200/1000?image=682'>
    <figure class='gallery-image'>
      <img height='1000' src='https://unsplash.it/1200/1000?image=682' width='1200'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1000/1400?image=173'>
    <figure class='gallery-image'>
      <img height='1400' src='https://unsplash.it/1000/1400?image=173' width='1000'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
  <a class='gallery-link' href='https://unsplash.it/1000/1400?image=943'>
    <figure class='gallery-image'>
      <img height='1400' src='https://unsplash.it/1000/1400?image=943' width='1000'>
      <figcaption>Photo caption</figcaption>
    </figure>
  </a>
</article>
<footer id='footer' role='contentinfo'>
  <div class='container'>
    <a class='logo' href='https://codepen.io/collection/XRoxGR' rel='home'>PhotoPlus</a>
    <a class='copy' href='https://mobilemarkup.com' target='_blank'>&copy; Steven Illanes</a>
  </div>
</footer>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script><script  src="./script.js"></script>

</body>
</html>
