
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
 
<body>
    
            
</body>

  
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