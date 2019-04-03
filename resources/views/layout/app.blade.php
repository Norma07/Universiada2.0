  <!DOCTYPE html>
  <html lang = "es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Universiada 2019</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


      <link href="{{asset('css/app.css')}}" rel = "stylesheet">
      <link href="{{asset('css/menu.css')}}" rel = "stylesheet">

  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-12 wrapper-img-top">
                <img src="{{asset('images/wraper.jpg')}}" alt="" class="img-fluid">
              </div>
          </div>
      </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light" id = "barra">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca De</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disciplinas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cronograma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hospedaje</a>
                </li>
                <li class="nav-item">  
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                </ul>
            </div>
        </nav>
                <div id="bandgold" class ="col-12">
                </div>


    <main>
        @yield('content')
    </main>

  <footer class="bd-footer text-muted text-center ">
      <div class="container-fluid">
          <div class="row">
              <div class ="col-12">
                <img src="{{asset('images/LogoConade.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/logosep.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/logofisu.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/logoconde.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/universiada.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/uady.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/logoyucatan.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/logomerida.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/jaguar.png')}}" alt="" id="patrocinadores">
                <img src="{{asset('images/logounies.png')}}" alt="" id="patrocinadores">
              </div>
          </div>
      </div>
            
            
            <div id="bandgold">

            </div>    


        <div id="foot">
            <a href="https://www.facebook.com/UniversiadaMX/">
                <img src="{{asset('images/faceb.png')}}" alt="" id="redes">
            </a>
            <a href =" https://www.instagram.com/universiadamx/">
                <img src="{{asset('images/instab.png')}}" alt="" id="redes">
            </a>
            <a href=" https://twitter.com/universiadamx">
            <img src="{{asset('images/twiterb.png')}}" alt="" id="redes">
            </a>

                <p>© Todos los Derechos Reservados, UADY 2019. Esta página puede ser reproducida con fines no lucrativos,
                    siempre y cuando no se mutile, se cite la fuente completa y su dirección electrónica, de otro forma
                    requiere permiso previo por escrito de la institución.</p>
        </div>        
                
    </footer>
  </body>

  </html>