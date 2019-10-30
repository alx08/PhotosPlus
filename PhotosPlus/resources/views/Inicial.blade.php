
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PhotoPlus</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>

<link rel="stylesheet" href="{{ asset('css/styleinicial.css') }}" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<div class="wrapper">
  <header class="page-header">
    <nav>
      <h2 class="logo">PhotoPlus</h2>

      <!-- 
      <ul>
        <li>
          <a href="">Work</a>
        </li>
        <li>
          <a href="">Services</a>
        </li>
        <li>
          <a href="">Team</a>
        </li>
        <li>
          <a href="">Careers</a>
        </li>
      </ul>
      -->
      
      @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        

                        <a href="{{ url('/home') }}">
                        <button class="cta-contact">Cuenta</button>


                    @else
                        <a href="{{ route('login') }}">
                        <button class="cta-contact">Ingresar</button>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                            <button class="cta-contact">Registrar</button>
                        @endif
                      </a>
                    @endauth
                </div>
            @endif
    </nav>
  </header>
  <main class="page-main">
    
    <div>
      <h1>Comienza a Editar</h1>
      <p>Solo necesitas imaginarlo para crearlo</p>
      <section id="banner">
      <a href=""> Editar </a>
    </div>
    </section>
  </main>


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
  <footer class="page-footer">
    <small>© PhotoPlus Steven Illanes.</small>
    <ul>
      <li>
        <a href="" target="_blank">
          <i class="icon ion-logo-facebook"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <i class="icon ion-logo-twitter"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <i class="icon ion-logo-linkedin"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank">
          <i class="icon ion-logo-github"></i>
        </a>
      </li>
    </ul>
  </footer>
</div>