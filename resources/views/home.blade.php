<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
          <!-- basic -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url('css/responsive.css') }}" >
    <title>@yield('title')</title>
</head>
<body>
<body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ url('Image/loading.gif') }}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <div class="header">
         <div class="container">
            <div class="row d_flex">
               <div class=" col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="{{route('home')}}"><img src="{{ url('Image/log.png') }}" alt="logo tasmim web" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="{{route('home')}}">Accueil</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{route('login')}}">Se connecter</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{route('register')}}">S'identifier</a>
                           </li>
                          
                        </ul>
                     </div>
                  </nav>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end header inner -->
 <!-- top -->
 @yield('content')
      <!-- end guarantee -->
      
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="infoma text_align_left">
                        <h3>Tasmim Web</h3>
                        <ul class="commodo">
                           <li> est une agence web e-marketing marocaine basée à Casablanca. Spécialisé dans le branding, les campagnes e-marketing et la conception et le développement de sites web et d’applications mobiles.</li>
                
                        </ul>
                     </div>
                  </div>

                  
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="infoma text_align_left">
                        <h3>Services.</h3>
                        <ul class="commodo">
                           <li>Développement Site Internet Vitrine</li>
                           <li>Création Logo</li>
                           <li>Création Flyer & Brochure</li>
                           <li>Conception d’Application Web et Mobile </li>
                           <li>Conception Boutique e-Commerce </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="infoma">
                        <h3>infos</h3>
                        <ul class="conta">
                           <li><i class="fa fa-map-marker" aria-hidden="true"></i>Adresse : Rue 14 Amal 2 Imm 2, 3éme Etage N° 8, Sidi Bernoussi - Casablanca
                           </li>
                           <li><i class="fa fa-phone" aria-hidden="true"></i>Tel : +212 6 66 67 16 07​</li>
                           <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href=""> Email : contact@tasmimweb.com​</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

      <!-- sidebar -->
      <script src="{{url('js/custom.js')}}"></script>
   </body>

</body>
</html>