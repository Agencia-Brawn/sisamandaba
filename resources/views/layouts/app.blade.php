<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema Amandaba</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->

    <!-- =============== BOOTSTRAP TEMPLATE  =============== -->

    <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
    <!-- <link rel="icon" type="image/png" href="/assets/img/favicon.png"> -->

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"  media="print" onload="this.media='all'; this.onload=null;"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;">

    <!-- Nucleo Icons -->
    <link  href="/assets/css/nucleo-icons.css" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;"/>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;"/>

    <!-- Font Awesome Icons -->
    <script async src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;"/>

    <!-- CSS Files -->
    <link  id="pagestyle" href="/assets/css/soft-ui-dashboard.css" rel="stylesheet"/>

    <!-- DATATABLES -->
    <link id="pagestyle" href="/css/datatables.min.css" rel="stylesheet" media="print" onload="this.media='all'; this.onload=null;"/>

    <!-- LIB JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'  media="print" onload="this.media='all'; this.onload=null;">

    <!-- =============== FIM BOOTSTRAP TEMPLATE  =============== -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>

<body>
    <div id="app">
        <nav style="z-index: 1000;" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 15px; font-weigth: 500;">
                    <img src="img/logo-menu.png" style="max-width: 175px;" alt="Sistema Amandaba" class="logo-menu" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <!-- <span class="navbar-toggler-icon"></span> -->

                    <i class="fas fa-user"></i>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto " style="text-align: center;">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                                <li class="nav-item">
                               
                                <a class="nav-link" href="{{ route('login') }}">

                                <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                                {{ __('Login') }}
                                
                                </a>
                            </li> 
                           

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <i class="fas fa-address-card"></i>    
                                    {{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
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

        <main>
            <!-- Modal Em Breve -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title mx-auto" id="exampleModalLabel">Em Breve</h2>
                            </button>
                        </div>
                        <div class="modal-footer mx-auto">
                            <button type="button" class="btn bg-gradient-secondary " data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </main>
    </div>

    <!-- SCRIPT PARA LIMPAR CAMPOS -->
    <!-- <script>
        function limpaCampos() {
            // LIMPAR CAMPOS
                var campos = document.getElementsByClassName("form-control");
            for(var x=0; x<campos.length; x++){
                                campos[x].value= ' ';
            }
            // LIMPAR RADIOS
            var inputs = document.querySelectorAll('input[type="radio"]');
            for (var i = 0, l = inputs.length; i < l; i++){
                inputs[i].checked = false;
            }
        }
    </script> -->
        
         <!-- MASK JQUERY -->
        <script src="/js/jquery.mask.js"  media="print" onload="this.media='all'; this.onload=null;"></script>

        <!-- DATATABLE -->
        <script src="/css/datatables.min.js"></script>

        <!-- BOOTSTRAP -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>      

</body>
   
</html>
