@extends('layouts.app')

@section('content')


    <!-- MENU VERSÃO MENOR QUE 767px -->
    <div class="menu-lateral">
                <input type="checkbox" id="check">
                <label id="iconebar" for="check">
                    <i style="font-size: 25px;" aria-hidden="true" class="fas fa-bars"></i>
                </label>

                <div class="barra">

                    <nav>
                        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps ps--active-y" id="sidenav-main">

                            <div class="collapse navbar-collapse w-auto max-height-vh-100 h-100 ps" id="sidenav-collapse-main">
                                <ul class="navbar-nav" style="margin-top: 30px;">

                                    <li class="nav-item">
                                        <a class="nav-link  active" href="{{route('home')}}">

                                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>shop </title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(0.000000, 148.000000)">
                                                                    <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                                    <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>

                                            <span class="nav-link-text ms-1">Dashboard</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('unidades')}}">

                                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>shop </title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(0.000000, 148.000000)">
                                                                    <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                                    <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>

                                            <span class="nav-link-text ms-1">Unidades</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="{{route('cadastro.usuarios')}}">

                                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>office</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                        <g id="office" transform="translate(153.000000, 2.000000)">
                                                            <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                                            <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                                                        </g>
                                                        </g>
                                                    </g>
                                                    </g>
                                                </svg>
                                            </div>

                                            <span class="nav-link-text ms-1">Novo Usuário</span>
                                        </a>
                                    </li>

                                </ul>
                        
                                <!-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 583px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 365px;"></div></div> -->
                        </aside>
                    </nav>

                </div>
    </div>
    <!-- FIM MENU -->

    <div class="row">

        <!-- MENU MAIOR QUE 767PX -->
        <div  class="col-md-3 col-lg-2 col-xl-2 menu-web" >

            <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps ps--active-y" id="sidenav-main">
                        <div class="sidenav-header">
                                <!-- <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                                <a class="navbar-brand m-0" href="https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html" target="_blank">
                                    <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                                    <span class="ms-1 font-weight-bold">Soft UI Dashboard</span>
                                </a> -->
                        </div>

                        <!-- <hr class="horizontal dark mt-0"> -->
                        <div class="collapse navbar-collapse w-auto max-height-vh-100 h-100 ps" id="sidenav-collapse-main">
                            <ul class="navbar-nav navbar-menu-web" >

                                <li class="nav-item">

                                    <a class="nav-link  active" href="{{route('home')}}">

                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>shop </title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(0.000000, 148.000000)">
                                                                <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                                <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>

                                        <span class="nav-link-text ms-1">Dashboard</span>
                                    </a>
                                </li>

                                
                                <li class="nav-item">

                                    <a class="nav-link" href="{{route('unidades')}}">

                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>shop </title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(0.000000, 148.000000)">
                                                                <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                                                                <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>

                                        <span class="nav-link-text ms-1">Unidades</span>
                                    </a>
                                </li>
                                
                                <li class="nav-item">

                                    <a class="nav-link" href="{{route('cadastro.usuarios')}}">

                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>office</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="office" transform="translate(153.000000, 2.000000)">
                                                        <path class="color-background opacity-6" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                                                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                                                    </g>
                                                    </g>
                                                </g>
                                                </g>
                                            </svg>
                                        </div>

                                        <span class="nav-link-text ms-1">Novo Usuário</span>
                                    </a>
                                </li>



                            </ul>
                        </div>

            </aside>

        </div> 
        <!-- FIM MENU -->  
            

        <div class="col-md-9 col-lg-10 col-xl-10 col-12">
                <div class="container painel-controle" >
                    <!-- PAINEL INICIAL -->
                    <div class="row justify-content-center row-painel-controle">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"> 
                                    <h2>Painel de Controle</h2>
                                </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <div class="container" style="padding: 0px;">

                                        <div class="row">


                                            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mx-auto">

                                                <div class="card">
                                                    <div class="card-body p-3">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="numbers">
                                                                    <p class=" text-sm mb-0 text-capitalize font-weight-bold">Usuários</p>
                                                                    <h5 class="font-weight-bolder mb-0">

                                                                        {{$usuarios->count()}}

                                                                        <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-4 text-end">
                                                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">

                                                                    <i style="font-size: 30px;" class='bx bxs-user'></i>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>                                            

                                        </div>          

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TABELA DE USUÁRIOS CADASTRADOS -->
                    <div class="row justify-content-center row-painel-controle">
                        <div class="container-fluid py-4">
                            <div class="row">
                                <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-header text-center pb-0">
                                        <h3>Usuários Cadastrados</h3>
                                    </div>
                                    <div class="card-body px-0 pt-0 pb-2 ml-2 ">
                                        <div class="table-responsive p-0">
                                            <table id="tabelausuarios" class="table align-items-center mb-0 table table-striped" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center; width: 100px;" class="text-secondary">Nome</th>
                                                        <th style="text-align: center;" class="text-secondary">CPF</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> Laboratório</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> ICIQ-KHQ</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> Individual</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> Familiar</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> Antropometria</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> MSNI</th> 
                                                        <th style="text-align: center;" class="text-secondary">Formulário <br> Pressão</th> 
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    @foreach($usuarios as $usuario)
                                                        <tr>
                                                            <!-- NOME DO USUÁRIO -->
                                                            <td>
                                                                <a href="{{route('usuario',['usuario'=>$usuario->id])}}">
                                                                    <div class="d-flex px-2 py-1">
                                                                        <div class="d-flex flex-column justify-content-center">
                                                                            <h6 class="mb-0 text-sm">{{$usuario->name}}</h6>
                                                                        </div>
                                                                    </div>
                                                                </a>                     
                                                            </td>       

                                                                <!-- CPF -->
                                                                <td style="text-align: center;" class="align-middle text-center text-sm">
                                                                    <a href="{{route('usuario',['usuario'=>$usuario->id])}}">
                                                                        <p class="text-xs font-weight-bold mb-0 cpf" id="cpf">{{$usuario->cpf}}</p>
                                                                    </a>
                                                                </td>

                                                                <!-- FORM LABORATORIO -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.laboratorio',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formlaboratorio()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formlaboratorio()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>

                                                                <!-- FORM ICIQ -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.iciq',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formiciq()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formiciq()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>

                                                                <!-- FORM INDIVIDUAL -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.individual',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formindividual()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formindividual()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>

                                                                <!-- FORM FAMILIAR -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.familiar',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formfamiliar()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formfamiliar()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>

                                                                <!-- FORM ANTROPOMETRIA -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.antropometria',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formantropometria()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formantropometria()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>
    
                                                                <!-- FORM MSNI -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.msni',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formmsni()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formmsni()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>

                                                                <!-- FORM PRESSAO -->
                                                                <td class="align-middle text-center text-sm">
                                                                    <a href="{{route('post.form.pressao',['usuario'=>$usuario->id])}}">
                                                                        <span class="badge badge-pill badge-lg bg-gradient-success">
                                                                            {{$usuario->formpressao()?'Prenchido':''}}
                                                                        </span>
                                                                        <span class="badge bg-gradient-danger">
                                                                            {{$usuario->formpressao()?'':'Não Prenchido'}}
                                                                        </span>
                                                                    </a>
                                                                </td>
        
                                                        </tr>      
                                                    @endforeach
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
  
                        </div>
                    </div>

                    <footer class="footer pt-3  ">
                        <div class="container-fluid">
                                    <div class="row align-items-center justify-content-lg-between ">
                                        <div class="col-lg-12 col-12 pb-4  text-center">
                                            <div class="copyright mx-auto text-center text-sm text-muted text-lg-start">
                                                © <script>
                                                document.write(new Date().getFullYear())
                                                </script>, desenvolvido pela equipe <a href="https://www.instagram.com/upceurg.ufpa/"> Upceurg - UFPA</a>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </footer>   



                    <script>
                        $(document).ready(function() {
                            // DATA TABLE
                            $.noConflict();
                            $('#tabelausuarios').DataTable({
                                "language": {
                                    "lengthMenu": "Mostrando _MENU_ registros por página",
                                    "zeroRecords": "Nenhum resultado encontrado",
                                    "info": "Mostrando página _PAGE_ de _PAGES_",
                                    "infoEmpty": "Nenhum registro disponível",
                                    "infoFiltered": "(filtrado de _MAX_ registros no total)",
                                    "search": "Procurar: ",
                                    "Previous": "Anterior",
                                    "Next": "Proxímo"
                                }
                            });

                            // MASKARA
                           
                        } );
                    </script> 
                    
                    <script>
                        $(document).ready(function($){
                            $('.cpf').mask('000.000.000-00');
                            $('#cpf').mask('000.000.000-00');
                        });
                    </script>
                </div>
        </div>

    </div>





@endsection
