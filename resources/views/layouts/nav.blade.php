<header id="header">
   <nav class="navbar navbar-default navbar-fixed-top" role="banner">
     <div class="container">
         <div class="navbar-brand">
           <a href=""><h1 margin-left="30px">Portail des Appels d'Offre Marocains</h1></a>
         </div>
        <br/>
        <br/>
        <br/>
        <br/>
    </div>
       <div class="navbar-collapse">
         <div class="menu">
           <ul class="nav nav-tabs" role="tablist">
             <li role="presentation"><a href="appeloffre">Annonces</a></li>
             <li role="presentation"><a href="">Aide</a></li>
             <li role="presentation"><a href="">Sociétés excluses</a></li>
             <li role="presentation"><a href="">Se préparer à répondre</a></li>
             <li role="presentation"><a href="">Documentation</a></li>
           </ul>
         </div>
       </div>

     <!--/.container-->
   </nav>

   <div id="app">
       <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
           <div class="container">


               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto">
                       <!-- Authentication Links -->
                       @guest
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}">{{ __('Se Connecter') }}</a>
                           </li>
                           <li class="nav-item">
                               @if (Route::has('register'))
                                   <a class="nav-link" href="{{ route('register') }}">{{ __('S Enregistrer') }}</a>
                               @endif
                           </li>
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Deconnexion') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                               </div>
                           </li>
                       @endguest
                   </ul>
               </div>
           </div>
       </nav>

   </div>
   <!--/nav-->
 </header>
 <!--/header-->
