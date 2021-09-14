@extends('layouts.app')

@section('content')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- VERSÃO MENOR QUE 767px -->
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
                                    <a class="nav-link  " href="{{route('home')}}">
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
                                    <a class="nav-link  active" href="{{route('cadastro.usuarios')}}">
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
                                        <span class="nav-link-text ms-1">Cadastros</span>
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a class="nav-link  " href="">
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(453.000000, 454.000000)">
                                                    <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                </g>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        </div>
                                        <span class="nav-link-text ms-1">Em Breve</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  " href="">
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>box-3d-50</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(603.000000, 0.000000)">
                                                    <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                    <path class="color-background opacity-6" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"></path>
                                                    <path class="color-background opacity-6" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"></path>
                                                </g>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        </div>
                                        <span class="nav-link-text ms-1">Em Breve</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link  " href="">
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                <g transform="translate(304.000000, 151.000000)">
                                                    <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                    <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                                                    <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                </g>
                                                </g>
                                            </g>
                                            </g>
                                        </svg>
                                        </div>
                                        <span class="nav-link-text ms-1">Em Breve</span>
                                    </a>
                                </li> -->

                            </ul>
                        
                                <!-- <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 583px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 365px;"></div></div> -->
                        </aside>
                    </nav>

                </div>
    </div>
    <!-- FIM -->

    <div class="row">

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
                                        <a class="nav-link  " href="{{route('home')}}">
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
                                        <a class="nav-link active" href="{{route('cadastro.usuarios')}}">
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
                                            <span class="nav-link-text ms-1">Formulário<br> Familiar</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  " href="">
                                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(453.000000, 454.000000)">
                                                        <path class="color-background opacity-6" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                                                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                    </g>
                                                    </g>
                                                </g>
                                                </g>
                                            </svg>
                                            </div>
                                            <span class="nav-link-text ms-1">Formulário<br>dos Pés</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link  " href="">
                                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>box-3d-50</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(603.000000, 0.000000)">
                                                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                        <path class="color-background opacity-6" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"></path>
                                                        <path class="color-background opacity-6" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"></path>
                                                    </g>
                                                    </g>
                                                </g>
                                                </g>
                                            </svg>
                                            </div>
                                            <span class="nav-link-text ms-1">Formulário<br>ICIQ-KHQ</span>
                                        </a>
                                    </li>

                                    <!-- <li class="nav-item">
                                        <a class="nav-link  " href="">
                                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <svg width="12px" height="12px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>settings</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(304.000000, 151.000000)">
                                                        <polygon class="color-background opacity-6" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                        <path class="color-background opacity-6" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"></path>
                                                        <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                    </g>
                                                    </g>
                                                </g>
                                                </g>
                                            </svg>
                                            </div>
                                            <span class="nav-link-text ms-1">Em Breve</span>
                                        </a>
                                    </li> -->

                                </ul>
                            </div>

                </aside>
            </div>  
            
            
            <div class="col-md-9 col-lg-10 col-xl-10 col-12">

                    <!-- MODELO DE FORMULÁRIO -->
                    <div class="row justify-content-center row-painel-controle">
                        <div class="col-md-12 pt-5" >
                            <div class="card">
                                <div class="card-header text-center"> 
                                    <h2>Formulário Básico do Paciente</h2>
                                </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <div class="container" style="padding: 0px;">

                                        <div class="row">

                                            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger" style="background-image: none;">
                                                       
                                                            @foreach ($errors->all() as $error)
                                                                <h5>{{ $error }}</h5>
                                                            @endforeach
                                     
                                                    </div>
                                                @endif


                                                <form action="{{route('formulario.usuarios')}}" method="post">
                                                    @csrf
                                                        <div class="form-group">
                                                            <label for="example-text-input" class="form-control-label">Nome Completo</label>
                                                            <input class="form-control" required  type="text" name="name" id="example-text-input">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="example-number-input" class="form-control-label">CPF</label>
                                                            <input class="form-control" required type="number" name="cpf" id="example-number-input">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="example-date-input" class="form-control-label">Data de Nascimento</label>
                                                            <input class="form-control" required type="date" name="datanasc"  id="example-date-input">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="example-email-input" class="form-control-label">E-mail</label>
                                                            <input class="form-control" required type="email" name="email"  id="example-email-input">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="example-number-input" class="form-control-label">Telefone</label>
                                                            <input class="form-control" required type="number" name="telefone" id="example-number-input">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="example-number-input" class="form-control-label">Altura</label>
                                                            <input class="form-control" required min="0" type="number" name="altura" id="example-number-input">
                                                        </div>
                                                        
                                                        <div class="text-center">
                                                            <button class="btn btn-primary" type="submit">Enviar</button>
                                                        </div>
                                                </form>
                                                
                                            </div>

                                        </div>          

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- FORMULÁRIOS -->
                    <div class="row justify-content-center row-painel-controle">
                        <div class="col-md-12 pt-5" >
                            <div class="card">

                                <div class="card-header text-center"> 
                                    <h2>Questionário Familiar</h2>
                                </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <div class="container" style="padding: 0px;">

                                        <div class="row">

                                            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger" style="background-image: none;">
                                                       
                                                            @foreach ($errors->all() as $error)
                                                                <h5>{{ $error }}</h5>
                                                            @endforeach
                                     
                                                    </div>
                                                @endif

                                                <!-- FAMILIAR -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLScwn4q1b4TQaGE63eAgjU5L40ywYk_5E_ByfAKiR2EvQAWQkg/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">

                                                    <!-- Field type: "short" id: "1204731873" -->
                                                    <fieldset>
                                                        <legend for="1204731873">ID NÚMERO</legend>
                                                        <div class="form-group"> 
                                                            <input id="894933624" type="text" name="entry.894933624" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1776704213" -->
                                                    <fieldset>
                                                        <legend for="1776704213">Nome do entrevistador</legend>
                                                        <div class="form-group">
                                                            <input id="533275677" type="text" name="entry.533275677" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1695365500" -->
                                                    <fieldset>
                                                        <legend for="1695365500">Distrito:</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1658195167" value="Guamá" required>
                                                                    Guamá
                                                                </label>
                                                            </div>

                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1658195167" value="Bengui" required>
                                                                    Bengui
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "318793235" -->
                                                    <fieldset>
                                                        <legend for="318793235">Unidade da Estratégia de Saúde da Família</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Condor" required>
                                                                    Condor
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Combú" required>
                                                                    Combú
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Pq. Amazônia I" required>
                                                                    Pq. Amazônia I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Pq. Amazônia II" required>
                                                                    Pq. Amazônia II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Portal da Amazônia" required>
                                                                    Portal da Amazônia
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Radional" required>
                                                                    Radional
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Riacho Doce" required>
                                                                    Riacho Doce
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Terra Firme" required>
                                                                    Terra Firme
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Bengui" required>
                                                                    Bengui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Carmelândia" required>
                                                                    Carmelândia
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Cristo Redentor" required>
                                                                    Cristo Redentor
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Mangueirão" required>
                                                                    Mangueirão
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Panorama XXI" required>
                                                                    Panorama XXI
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Parque Verde" required>
                                                                    Parque Verde
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Pratinha I" required>
                                                                    Pratinha I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Pratinha II" required>
                                                                    Pratinha II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Tapanã I" required>
                                                                    Tapanã I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Tapanã II" required>
                                                                    Tapanã II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1544680452" value="Una" required>
                                                                    Una
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1179474768" -->
                                                    <fieldset>
                                                        <legend for="1179474768">N. equipe:</legend>
                                                        <div class="form-group">
                                                            <input id="1106361570" type="text" name="entry.1106361570" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "441448955" -->
                                                    <fieldset>
                                                        <legend for="441448955">N. microárea:</legend>
                                                        <div class="form-group">
                                                            <input id="1311005911" type="text" name="entry.1311005911" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1711793824" -->
                                                    <fieldset>
                                                        <legend for="1711793824">N. Família/Casa:</legend>
                                                        <div class="form-group">
                                                            <input id="1048028346" type="text" name="entry.1048028346" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "142457255" -->
                                                    <fieldset>
                                                        <legend for="142457255">Data da entrevista</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1918221126_date" placeholder="11/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "paragraph" id: "895350114" -->
                                                    <fieldset>
                                                        <legend for="895350114">8. Qual o seu nome completo (nome do entrevistado - responsável pela família)? (SOLICITE O RG OU OUTRO DOCUMENTO COM O NOME)</legend>
                                                        <div class="form-group">
                                                            <textarea id="1715295092" name="entry.1715295092" class="form-control" required></textarea>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "paragraph" id: "618434975" -->
                                                    <fieldset>
                                                        <legend for="618434975">9. Qual o nome da sua mãe? (SOLICITE O RG OU OUTRO DOCUMENTO COM O NOME)</legend>
                                                        <div class="form-group">
                                                            <textarea id="1319971312" name="entry.1319971312" class="form-control" required></textarea>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "1363539385" -->
                                                    <fieldset>
                                                        <legend for="1363539385">10. Qual a data do seu nascimento? (SOLICITE O RG OU OUTRO DOCUMENTO COM A DATA DO NASCIMENTO)</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1891631860_date" placeholder="11/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "56266140" -->
                                                    <fieldset>
                                                        <legend for="56266140">11. Gênero: </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2007725862" value="Homem" required>
                                                                    Homem
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2007725862" value="Mulher" required>
                                                                    Mulher
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1270365770" -->
                                                    <fieldset>
                                                        <legend for="1270365770"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Agora vamos falar um pouco sobre as pessoas que moram com você. Vamos incluir também crianças e bebês.</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1272908872" -->
                                                    <fieldset>
                                                        <legend for="1272908872">12. Além de você, alguém mais mora em sua casa (inclua cônjuge/companheiro(a), filhos(as) e enteados, pais,irmãos (as), cunhado(a), sogro(a), outros parentes, amigos, agregados, pessoas ausentes temporariamente e empregados que durmam na casa)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.573222365" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.573222365" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1324615375" -->
                                                    <fieldset>
                                                        <legend for="1324615375"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "435444362" -->
                                                    <fieldset>
                                                        <legend for="435444362">13. Quantas pessoas ao todo moram em sua casa?</legend>
                                                        <div class="form-group">
                                                            <input id="1171112273" type="text" name="entry.1171112273" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2137240014" -->
                                                    <fieldset>
                                                        <legend for="2137240014">Alguma pessoa da sua família, que mora com você adoeceu de COVID-19? (SE INFORMAR SIM, PERGUNTE QUANTAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1853404519" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1853404519" value="Sim, uma" >
                                                                    Sim, uma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1853404519" value="Sim, duas" >
                                                                    Sim, duas
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1853404519" value="Sim, mais de três." >
                                                                    Sim, mais de três.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1393010478" -->
                                                    <fieldset>
                                                        <legend for="1393010478">15. Alguma pessoa da sua família, que morava com você faleceu de COVID-19? (SE INFORMAR SIM, PERGUNTE QUANTAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.685688090" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.685688090" value="Sim, uma" >
                                                                    Sim, uma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.685688090" value="Sim, duas" >
                                                                    Sim, duas
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.685688090" value="Sim, mais de três" >
                                                                    Sim, mais de três
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "846870284" -->
                                                    <fieldset>
                                                        <legend for="846870284"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1051447973" -->
                                                    <fieldset>
                                                        <legend for="1051447973">Agora vou lhe fazer algumas perguntas sobre sua família atual. </legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Qual o endereço atual? (SOLICITE UM COMPROVANTE DE ENDEREÇO)</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "967951821" -->
                                                    <fieldset>
                                                        <legend for="967951821">16. Nome da rua</legend>
                                                        <div class="form-group">
                                                            <input id="937218968" type="text" name="entry.937218968" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1449542258" -->
                                                    <fieldset>
                                                        <legend for="1449542258">17. Número da casa</legend>
                                                        <div class="form-group">
                                                            <input id="1744361163" type="text" name="entry.1744361163" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1673009909" -->
                                                    <fieldset>
                                                        <legend for="1673009909">18. Bairro</legend>
                                                        <div class="form-group">
                                                            <input id="1754504620" type="text" name="entry.1754504620" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1109807457" -->
                                                    <fieldset>
                                                        <legend for="1109807457">19. CEP (INFORME SEM TRAÇO)</legend>
                                                        <div class="form-group">
                                                            <input id="1125587065" type="text" name="entry.1125587065" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "819645788" -->
                                                    <fieldset>
                                                        <legend for="819645788">20. Município</legend>
                                                        <div class="form-group">
                                                            <input id="1609944189" type="text" name="entry.1609944189" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "paragraph" id: "554402331" -->
                                                    <fieldset>
                                                        <legend for="554402331">21. Localização: (DESCREVER DE MANEIRA MAIS COMPLETA POSSÍVEL A LOCALIZAÇÃO DA CASA,PARA PERMITIR ENCONTRAR A RESIDÊNCIA NOVAMENTE, PEÇA AJUDA PARA O PARTICIPANTE E INCLUA PONTOS DE REFERÊNCIA)</legend>
                                                        <div class="form-group">
                                                            <textarea id="224510010" name="entry.224510010" class="form-control" required></textarea>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1243956627" -->
                                                    <fieldset>
                                                        <legend for="1243956627">22. Há quantos anos você mora neste endereço? (SE MENOR DO QUE 01 MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="1896532602" type="text" name="entry.1896532602" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "827645017" -->
                                                    <fieldset>
                                                        <legend for="827645017">23. Morou sempre no mesmo município? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.608502281" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.608502281" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "2064174556" -->
                                                    <fieldset>
                                                        <legend for="2064174556">24. Qual o município onde você morou antes?</legend>
                                                        <div class="form-group">
                                                            <input id="170091377" type="text" name="entry.170091377" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1337120454" -->
                                                    <fieldset>
                                                        <legend for="1337120454"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Agora vou fazer algumas perguntas sobre sua casa e família</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "742772604" -->
                                                    <fieldset>
                                                        <legend for="742772604">25. Em sua casa trabalha alguma empregada doméstica mensalista ou caseiro para o qual vocêpague salário? (SE NÃO TIVER MARQUE 00 SE TIVER INFORME A QUANTIDADE)</legend>
                                                        <div class="form-group">
                                                            <input id="461598676" type="text" name="entry.461598676" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "checkboxes" id: "380338987" -->
                                                    <fieldset>
                                                        <legend for="380338987">26. Qual a situação do imóvel em que você mora? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="Alugado" required>
                                                                    Alugado
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="Próprio - já pago" required>
                                                                    Próprio - já pago
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="Próprio - ainda pagando" required>
                                                                    Próprio - ainda pagando
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="Próprio - área de ocupação" required>
                                                                    Próprio - área de ocupação
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="Próprio - propriedade rural" required>
                                                                    Próprio - propriedade rural
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="Cedido por pessoa/empresa" required>
                                                                    Cedido por pessoa/empresa
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.283955017" value="__other_option__" required>
                                                                </label>
                                                                <input type="text" name="entry.283955017.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1583998654" -->
                                                    <fieldset>
                                                        <legend for="1583998654">27. Quantos cômodos têm a casa?</legend>
                                                        <div class="form-group">
                                                            <input id="1542033871" type="text" name="entry.1542033871" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "516005210" -->
                                                    <fieldset>
                                                        <legend for="516005210">28. A casa é feita de que material? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.834808485" value="Tijolo ou bloco (alvenaria)" required>
                                                                    Tijolo ou bloco (alvenaria)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.834808485" value="Madeira" required>
                                                                    Madeira
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.834808485" value="Mista de alvenaria e madeira" required>
                                                                    Mista de alvenaria e madeira
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.834808485" value="Barro ou mista com barro" required>
                                                                    Barro ou mista com barro
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.834808485" value="Materiais reciclados" required>
                                                                    Materiais reciclados
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.834808485" value="__other_option__" required>
                                                                </label>
                                                                <input type="text" name="entry.834808485.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1810927480" -->
                                                    <fieldset>
                                                        <legend for="1810927480">29. A casa tem sanitário, ou seja, vaso sanitário com fossa ou escoadouro para a rede de esgoto?(SE NÃO TIVER MARQUE 00 E PULE PARA QUESTÃO 30. SE TIVER INFORME A QUANTIDADE, EM CASO DÚVIDA, SOLICITE VER O SANITÁRIO)</legend>
                                                        <div class="form-group">
                                                            <input id="1127331479" type="text" name="entry.1127331479" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1498678101" -->
                                                    <fieldset>
                                                        <legend for="1498678101">30. O sanitário é de uso apenas da sua família, ou seja, dos moradores da casa?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.446700577" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.446700577" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1105372792" -->
                                                    <fieldset>
                                                        <legend for="1105372792">31. De onde vem a água utilizada na casa? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1904037556" value="Poço aberto" required>
                                                                    Poço aberto
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1904037556" value="Poço fechado com bomba" required>
                                                                    Poço fechado com bomba
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1904037556" value="Rede geral de distribuição" required>
                                                                    Rede geral de distribuição
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1904037556" value="__other_option__" required>
                                                                </label>
                                                                <input type="text" name="entry.1904037556.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1067119372" -->
                                                    <fieldset>
                                                        <legend for="1067119372">32. A água de beber recebe algum tratamento? (SE INFORMAR SIM, LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1649582762" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1649582762" value="Sim, com hipoclorito" required>
                                                                    Sim, com hipoclorito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1649582762" value="Sim, com fervura" required>
                                                                    Sim, com fervura
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1649582762" value="Sim, com filtro" required>
                                                                    Sim, com filtro
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1649582762" value="Sim, água mineral" required>
                                                                    Sim, água mineral
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1649582762" value="__other_option__" required>
                                                                </label>
                                                                <input type="text" name="entry.1649582762.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1546047761" -->
                                                    <fieldset>
                                                        <legend for="1546047761">33. Qual o destino do esgoto da casa? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.175510561" value="Rio ou igarapé" required>
                                                                    Rio ou igarapé
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.175510561" value="Céu aberto" required>
                                                                    Céu aberto
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.175510561" value="Fossa" required>
                                                                    Fossa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.175510561" value="Rede de esgoto" required>
                                                                    Rede de esgoto
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2017231413" -->
                                                    <fieldset>
                                                        <legend for="2017231413">34.O trecho da rua de sua casa é: (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1885513809" value="Asfaltado ou pavimentado" required>
                                                                    Asfaltado ou pavimentado
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1885513809" value="De terra ou cascalho" required>
                                                                    De terra ou cascalho
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "888901659" -->
                                                    <fieldset>
                                                        <legend for="888901659">Vou lhe apresentar um conjunto de itens e gostaria de saber quais você tem em sua casa. Para cada item que você responder sim, vou lhe perguntar a quantidade.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1789563234" -->
                                                    <fieldset>
                                                        <legend for="1789563234">35. Vídeo-cassete/ DVD? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="738809694" type="text" name="entry.738809694" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1013077995" -->
                                                    <fieldset>
                                                        <legend for="1013077995">36. Automóvel? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="109055362" type="text" name="entry.109055362" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1141039868" -->
                                                    <fieldset>
                                                        <legend for="1141039868">37. Máquina de lavar louça? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="652243712" type="text" name="entry.652243712" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1707252259" -->
                                                    <fieldset>
                                                        <legend for="1707252259">38. Microondas? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="162190331" type="text" name="entry.162190331" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "174100168" -->
                                                    <fieldset>
                                                        <legend for="174100168">39. Secadora de roupa? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="132565852" type="text" name="entry.132565852" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "2092985036" -->
                                                    <fieldset>
                                                        <legend for="2092985036">40. Moto? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="771665851" type="text" name="entry.771665851" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1361066411" -->
                                                    <fieldset>
                                                        <legend for="1361066411">41. Máquina de lavar roupa (exceto tanquinho)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="225074547" type="text" name="entry.225074547" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "477110902" -->
                                                    <fieldset>
                                                        <legend for="477110902">42. Geladeira simples? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="196641527" type="text" name="entry.196641527" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "421561137" -->
                                                    <fieldset>
                                                        <legend for="421561137">43. Geladeira duplex (com freezer)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="1570044145" type="text" name="entry.1570044145" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "505911464" -->
                                                    <fieldset>
                                                        <legend for="505911464">44. Freezer?  (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="327175582" type="text" name="entry.327175582" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1769425451" -->
                                                    <fieldset>
                                                        <legend for="1769425451">45. Computador (incluindo notebook)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="971140866" type="text" name="entry.971140866" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1539624232" -->
                                                    <fieldset>
                                                        <legend for="1539624232">46. A família recebe Bolsa-Família? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.230610430" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.230610430" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1944876591" -->
                                                    <fieldset>
                                                        <legend for="1944876591">47. A família recebe aposentadoria?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.578974316" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.578974316" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "898290020" -->
                                                    <fieldset>
                                                        <legend for="898290020">48. A família recebe pensão?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.94257164" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.94257164" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "232098959" -->
                                                    <fieldset>
                                                        <legend for="232098959">49. A família recebe auxílio defeso? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.832687094" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.832687094" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "269029948" -->
                                                    <fieldset>
                                                        <legend for="269029948">50. A família recebe auxílio-doença?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.376430858" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.376430858" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "93072627" -->
                                                    <fieldset>
                                                        <legend for="93072627">51. A família recebeu auxílio emergencial no início da epidemia de COVID-19?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.69406191" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.69406191" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "586169783" -->
                                                    <fieldset>
                                                        <legend for="586169783">52. A família está recebendo auxílio emergencial atualmente devido à COVID-19?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.354785242" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.354785242" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "237331982" -->
                                                    <fieldset>
                                                        <legend for="237331982">53. No MÊS PASSADO, qual foi aproximadamente sua renda familiar LÍQUIDA, isto é, a soma de rendimentos, já com descontos(por ex., INSS, Imposto de Renda etc.), de todas as pessoas que contribuem regularmente para as despesas de sua casa?(MOSTRAR A LISTA COM AS CATEGORIAS DE RENDA NO CELULAR)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Sem renda familiar" required>
                                                                    Sem renda familiar
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Menos do que 250,00 reais" required>
                                                                    Menos do que 250,00 reais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Menos do que 550,00 reais" required>
                                                                    Menos do que 550,00 reais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Menos de 1100,00 reais" required>
                                                                    Menos de 1100,00 reais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="1100 reais (até um salário mínimo)" required>
                                                                    1100 reais (até um salário mínimo)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Entre 1100,00 e 1650, reais ( até 1,5 SM)" required>
                                                                    Entre 1100,00 e 1650, reais ( até 1,5 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Entre 1651,00 e 2200,00 reais (até 2,0 SM)" required>
                                                                    Entre 1651,00 e 2200,00 reais (até 2,0 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Entre 2201 e 3300,00 reais (até 3 SM)" required>
                                                                    Entre 2201 e 3300,00 reais (até 3 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Entre 3301,00 e 4400,00 reais (até 4 SM)" required>
                                                                    Entre 3301,00 e 4400,00 reais (até 4 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Entre 4401,00 e 5500,00 reais (até 5 SM)" required>
                                                                    Entre 4401,00 e 5500,00 reais (até 5 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.987823324" value="Acima de 5500,00 reais ou mais (&gt;5 SM)" required>
                                                                    Acima de 5500,00 reais ou mais (&gt;5 SM)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1226517848" -->
                                                    <fieldset>
                                                        <legend for="1226517848">54. Quantas pessoas (adultos e crianças), INCLUINDO O(A) SR.(A), dependem dessa renda para viver?</legend>
                                                        <div class="form-group">
                                                            <input id="1008217533" type="text" name="entry.1008217533" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <input type="hidden" name="fvv" value="1">
                                                    <input type="hidden" name="fbzx" value="1118681258796410409">
                                                    <!--
                                                        CAVEAT: In multipages (multisection) forms, *pageHistory* field tells to google what sections we've currently completed.
                                                        This usually starts as "0" for the first page, then "0,1" in the second page... up to "0,1,2..N" in n-th page.
                                                        Keep this in mind if you plan to change this code to recreate any sort of multipage-feature in your exported form.
                                                        We're setting this to the total number of pages in this form because we're sending all fields from all the section together.
                                                    -->
                                                    <input type="hidden" name="pageHistory" value="0,1,2,3,4">

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->


                                                <!-- MSNI - Avaliação dos pés -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLSdnOe66Yly_quPUwFbstrZLOKcd3eEeuZQu_LPOGEMCcPDL1A/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">
                                                    <fieldset>
                                                        <h2>MSNI - Avaliação dos pés<br><small>Oliveira FB et al. Cross-cultural adaptation MNSI-Brazil - 2016</small></h2>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1229202834" -->
                                                    <fieldset>
                                                        <legend for="1229202834">ID NÚMERO</legend>
                                                        <div class="form-group">
                                                            <input id="187318786" type="text" name="entry.187318786" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1721427014" -->
                                                    <fieldset>
                                                        <legend for="1721427014">Nome do avaliador</legend>
                                                        <div class="form-group">
                                                            <input id="1262833190" type="text" name="entry.1262833190" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "516027379" -->
                                                    <fieldset>
                                                        <legend for="516027379">Data da entrevista</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1570755221_date" placeholder="11/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1743851941" -->
                                                    <fieldset>
                                                        <legend for="1743851941">História do Paciente</legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Iremos tirar alguns minutos para responder as seguintes perguntas sobre a sensibilidade de suas pernas e pés. Responda sim ou não baseado em como você usualmente se sente. </p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "390540414" -->
                                                    <fieldset>
                                                        <legend for="390540414">1. Você sente que suas pernas e/ou pés estão dormentes?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2095973775" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2095973775" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "293402263" -->
                                                    <fieldset>
                                                        <legend for="293402263">2. Você já sentiu alguma dor em queimação em suas pernas e/ou pés?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.316548235" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.316548235" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "938258332" -->
                                                    <fieldset>
                                                        <legend for="938258332">3. Os seus pés estão muito sensíveis ao toque?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.16725943" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.16725943" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "569598640" -->
                                                    <fieldset>
                                                        <legend for="569598640">4. Você tem câimbras nos músculos de suas pernas e/ou pés?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1893458142" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1893458142" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1789617060" -->
                                                    <fieldset>
                                                        <legend for="1789617060">5. Você já teve sensações de formigamento em suas pernas e/ou pés?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2059010818" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2059010818" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1184703426" -->
                                                    <fieldset>
                                                        <legend for="1184703426">6. Suas pernas e/ou pés doem quando o cobertor toca sua pele?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.830952880" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.830952880" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "883268271" -->
                                                    <fieldset>
                                                        <legend for="883268271">7. Quando você entra na banheira ou no chuveiro, você é capaz de dizer se a água está quente ou fria?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1913307101" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1913307101" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2143202514" -->
                                                    <fieldset>
                                                        <legend for="2143202514">8. Você já teve uma ferida aberta em seu pé?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.999898123" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.999898123" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1188422986" -->
                                                    <fieldset>
                                                        <legend for="1188422986">9. Seu médico já te disse que você tem neuropatia diabética?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.881728817" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.881728817" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "734809430" -->
                                                    <fieldset>
                                                        <legend for="734809430">10. Você se sente fraco a maior parte do tempo?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.918717563" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.918717563" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1746510483" -->
                                                    <fieldset>
                                                        <legend for="1746510483">11. Seus sintomas pioram durante a noite?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.803822830" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.803822830" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "895804032" -->
                                                    <fieldset>
                                                        <legend for="895804032">12. Suas pernas doem quando você caminha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.30134705" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.30134705" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "39923171" -->
                                                    <fieldset>
                                                        <legend for="39923171">13. Você é capaz de sentir seus pés enquanto caminha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.979685324" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.979685324" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1330281374" -->
                                                    <fieldset>
                                                        <legend for="1330281374">14. A pele de seu pé fica seca que chega a rachar-se?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1990597491" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1990597491" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1288376342" -->
                                                    <fieldset>
                                                        <legend for="1288376342">15. Você já fez uma amputação?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.236723891" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.236723891" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "746269047" -->
                                                    <fieldset>
                                                        <legend for="746269047">Avaliação física</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "136531760" -->
                                                    <fieldset>
                                                        <legend for="136531760">1. Aparência do pé direito</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>a. Normal: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1863456160" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1863456160" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "991854409" -->
                                                    <fieldset>
                                                        <legend for="991854409">b. Se não, assinale todas que se aplicam:</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Deformidades: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.500485331" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pele seca, calosidades: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.2078056154" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Infecção: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1680679403" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Fissuras: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.982477606" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Outras: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.130210321" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "382791593" -->
                                                    <fieldset>
                                                        <legend for="382791593">1.1 Aparência do pé esquerdo</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>a. normal: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1139396426" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1139396426" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "364852414" -->
                                                    <fieldset>
                                                        <legend for="364852414">b. Se não, assinale todas que se aplicam:</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Deformidades: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1316166854" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pele seca, calosidades: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.357390748" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Infecção: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1894662742" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Fissuras: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1642796551" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Outras* descrever na próxima pergunta: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1673673444" value="Assinale" >
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1345982251" -->
                                                    <fieldset>
                                                        <legend for="1345982251">Outras*</legend>
                                                        <div class="form-group">
                                                            <input id="525607198" type="text" name="entry.525607198" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "1353912835" -->
                                                    <fieldset>
                                                        <legend for="1353912835">2. Ulceração</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1413529357" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1413529357" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1119930496" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1119930496" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "180400235" -->
                                                    <fieldset>
                                                        <legend for="180400235">3. Reflexos do tornozelo</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.512268685" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.512268685" value="Presente/Reforço" required>
                                                                    Presente/Reforço
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.512268685" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.176584011" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.176584011" value="Presente/Reforço" required>
                                                                    Presente/Reforço
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.176584011" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "1214196778" -->
                                                    <fieldset>
                                                        <legend for="1214196778">4. Percepção de vibração no hálux</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.134608861" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.134608861" value="Diminuída" required>
                                                                    Diminuída
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.134608861" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1506193372" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1506193372" value="Diminuída" required>
                                                                    Diminuída
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1506193372" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "grid" id: "871514317" -->
                                                    <fieldset>
                                                        <legend for="871514317">5. Monofilamentos</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.2008316985" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.2008316985" value="Reduzido" required>
                                                                    Reduzido
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.2008316985" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1796891862" value="Presente" required>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1796891862" value="Reduzido" required>
                                                                    Reduzido
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="entry.1796891862" value="Ausente" required>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <input type="hidden" name="fvv" value="1">
                                                    <input type="hidden" name="fbzx" value="854671873962114949">
                                                    <!--
                                                        CAVEAT: In multipages (multisection) forms, *pageHistory* field tells to google what sections we've currently completed.
                                                        This usually starts as "0" for the first page, then "0,1" in the second page... up to "0,1,2..N" in n-th page.
                                                        Keep this in mind if you plan to change this code to recreate any sort of multipage-feature in your exported form.
                                                        We're setting this to the total number of pages in this form because we're sending all fields from all the section together.
                                                    -->
                                                    <input type="hidden" name="pageHistory" value="0">

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->


                                                <!-- Questionários ICIQ-KHQ -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLSfTStiKNIv0Wb-TRAbWPIyoymLoziLjrAf2tpgFDWUtSCpfNQ/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">
                                                    <fieldset>
                                                        <h2>Questionários ICIQ-KHQ<br><small></small></h2>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1358468824" -->
                                                    <fieldset>
                                                        <legend for="1358468824">ID NÚMERO</legend>
                                                        <div class="form-group">
                                                            <input id="934632342" type="text" name="entry.934632342" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "991363013" -->
                                                    <fieldset>
                                                        <legend for="991363013">Nome do Entrevistador</legend>
                                                        <div class="form-group">
                                                            <input id="1330981773" type="text" name="entry.1330981773" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "1509286700" -->
                                                    <fieldset>
                                                        <legend for="1509286700">Data da Entrevista</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="918643869_date" placeholder="11/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "484515720" -->
                                                    <fieldset>
                                                        <legend for="484515720">Vamos começar com alguns dados pessoais</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1156408973" -->
                                                    <fieldset>
                                                        <legend for="1156408973">Qual o seu Nome</legend>
                                                        <div class="form-group">
                                                            <input id="1793359625" type="text" name="entry.1793359625" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "397368524" -->
                                                    <fieldset>
                                                        <legend for="397368524">Qual o Nome da sua Mãe</legend>
                                                        <div class="form-group">
                                                            <input id="578030694" type="text" name="entry.578030694" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "2034575247" -->
                                                    <fieldset>
                                                        <legend for="2034575247">Qual a data de seu Nascimento</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1689056339_date" placeholder="11/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1872606686" -->
                                                    <fieldset>
                                                        <legend for="1872606686">Em que Município você Nasceu</legend>
                                                        <div class="form-group">
                                                            <input id="709603456" type="text" name="entry.709603456" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1182181670" -->
                                                    <fieldset>
                                                        <legend for="1182181670">Em que Estado você Nasceu</legend>
                                                        <div class="form-group">
                                                            <input id="1374048736" type="text" name="entry.1374048736" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "13468657" -->
                                                    <fieldset>
                                                        <legend for="13468657">ICIQ -SF. Muitas pessoas perdem urina alguma vez. Estamos tentando descobrir quantas pessoas perdem urina e o quanto isso as aborrece. Ficaríamos agradecidos se você pudesse nos responder às seguintes perguntas, pensando em como você tem passado, em média, nas ÚLTIMAS QUATRO SEMANAS.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "296172721" -->
                                                    <fieldset>
                                                        <legend for="296172721">1. Com que frequência você perde urina? (assinale uma resposta)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1228961017" value="Nunca 0" required>
                                                                    Nunca 0
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1228961017" value="Uma vez por semana ou menos 1" required>
                                                                    Uma vez por semana ou menos 1
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1228961017" value="Duas ou três vezes por semana 2" required>
                                                                    Duas ou três vezes por semana 2
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1228961017" value="Uma vez ao dia 3" required>
                                                                    Uma vez ao dia 3
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1228961017" value="Diversas vezes ao dia 4" required>
                                                                    Diversas vezes ao dia 4
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1228961017" value="O tempo todo 5" required>
                                                                    O tempo todo 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1529082445" -->
                                                    <fieldset>
                                                        <legend for="1529082445">2. Gostaríamos de saber a quantidade de urina que você pensa que perde(assinale uma resposta)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1829335809" value="Nenhuma 0" required>
                                                                    Nenhuma 0
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1829335809" value="Uma pequena quantidade 2" required>
                                                                    Uma pequena quantidade 2
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1829335809" value="Uma moderada quantidade 4" required>
                                                                    Uma moderada quantidade 4
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1829335809" value="Uma grande quantidade 6" required>
                                                                    Uma grande quantidade 6
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "dropdown" id: "703164669" -->
                                                    <fieldset>
                                                        <legend for="703164669">Em geral, quanto que perder urina interfere em sua vida diária? Por favor, circuleum número entre 0 (não interfere) e 10 (interfere muito)</legend>
                                                        <div class="form-group">
                                                            <select id="703164669" name="entry.172133629" class="form-control">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1600746093" -->
                                                    <fieldset>
                                                        <legend for="1600746093">ICIQ Escore: soma dos resultados 1 + 2 + 3 &#x3D;</legend>
                                                        <div class="form-group">
                                                            <input id="1605141905" type="text" name="entry.1605141905" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "checkboxes" id: "673014146" -->
                                                    <fieldset>
                                                        <legend for="673014146">4. Quando você perde urina? (Por favor assinale todas as alternativas que se aplicam a você)</legend>
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco antes de chegar ao banheiro" >
                                                                    Perco antes de chegar ao banheiro
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco quando tusso ou espirro" >
                                                                    Perco quando tusso ou espirro
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco quando estou dormindo" >
                                                                    Perco quando estou dormindo
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco quando estou fazendo atividades físicas" >
                                                                    Perco quando estou fazendo atividades físicas
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco quando terminei de urinar e estou me vestindo" >
                                                                    Perco quando terminei de urinar e estou me vestindo
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco sem razão óbvia" >
                                                                    Perco sem razão óbvia
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="entry.216318386" value="Perco o tempo todo" >
                                                                    Perco o tempo todo
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "195485715" -->
                                                    <fieldset>
                                                        <legend for="195485715">KHQ/Questionário de qualidade de vida em incontinência urinária após validação</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "408465981" -->
                                                    <fieldset>
                                                        <legend for="408465981">Como você avaliaria sua saúde hoje? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2143774851" value="Muito boa" required>
                                                                    Muito boa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2143774851" value="Boa" required>
                                                                    Boa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2143774851" value="Normal" required>
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2143774851" value="Ruim" required>
                                                                    Ruim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2143774851" value="Muito ruim" required>
                                                                    Muito ruim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "967927685" -->
                                                    <fieldset>
                                                        <legend for="967927685">Quanto você acha que seu problema de bexiga atrapalha sua vida?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.184399135" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.184399135" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.184399135" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.184399135" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1975930813" -->
                                                    <fieldset>
                                                        <legend for="1975930813">Abaixo estão algumas atividades que podem ser afetadas pelos problemas de bexiga. Quanto seu problema de bexiga afeta você? Gostaríamos que você respondesse todas as perguntas. Simplesmente marque com um “X” a alternativa que melhor se aplica a você.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1965591867" -->
                                                    <fieldset>
                                                        <legend for="1965591867">Limitação no desempenho de tarefas</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1463020857" -->
                                                    <fieldset>
                                                        <legend for="1463020857">Com que intensidade seu problema de bexiga atrapalha suas tarefas de casa (ex., limpar, lavar, cozinhar, etc.)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.512930638" value="nenhuma" required>
                                                                    nenhuma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.512930638" value="um pouco" required>
                                                                    um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.512930638" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.512930638" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1807420878" -->
                                                    <fieldset>
                                                        <legend for="1807420878">Com que intensidade seu problema de bexiga atrapalha seu trabalho, ou suas atividades diárias normais fora de casa como: fazer compra, levar filho à escola, etc.? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1870317439" value="Nenhuma" required>
                                                                    Nenhuma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1870317439" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1870317439" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1870317439" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "84158008" -->
                                                    <fieldset>
                                                        <legend for="84158008">Limitação Física/Social</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "240865101" -->
                                                    <fieldset>
                                                        <legend for="240865101">Seu problema de bexiga atrapalha suas atividades físicas como: fazer caminhada, correr, fazer algum esporte, etc.?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.200052518" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.200052518" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.200052518" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.200052518" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1649791687" -->
                                                    <fieldset>
                                                        <legend for="1649791687">Seu problema de bexiga atrapalha quando você quer fazer uma viagem?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1003621367" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1003621367" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1003621367" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1003621367" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "82447486" -->
                                                    <fieldset>
                                                        <legend for="82447486">Seu problema de bexiga atrapalha quando você vai a igreja, reunião, festa?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.937783739" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.937783739" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.937783739" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.937783739" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "881812164" -->
                                                    <fieldset>
                                                        <legend for="881812164">Você deixa de visitar seus amigos por causa do problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.956438926" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.956438926" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.956438926" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.956438926" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "114169413" -->
                                                    <fieldset>
                                                        <legend for="114169413">Relações pessoais</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1973744225" -->
                                                    <fieldset>
                                                        <legend for="1973744225">Seu problema de bexiga atrapalha sua vida sexual?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484604538" value="Não se aplica" required>
                                                                    Não se aplica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484604538" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484604538" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484604538" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484604538" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "937558389" -->
                                                    <fieldset>
                                                        <legend for="937558389">Seu problema de bexiga atrapalha sua vida com seu companheiro?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1422576455" value="Não se aplica" required>
                                                                    Não se aplica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1422576455" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1422576455" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1422576455" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1422576455" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "717826816" -->
                                                    <fieldset>
                                                        <legend for="717826816">Seu problema de bexiga incomoda seus familiares? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.788736458" value="Não se aplica" required>
                                                                    Não se aplica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.788736458" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.788736458" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.788736458" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.788736458" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1407081965" -->
                                                    <fieldset>
                                                        <legend for="1407081965">Gostaríamos de saber quais são os seus problemas de bexiga e quanto eles afetam você. Escolha da lista abaixo APENAS AQUELES PROBLEMAS que você tem no momento.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "877594855" -->
                                                    <fieldset>
                                                        <legend for="877594855">Quanto eles afetam você?</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1641030174" -->
                                                    <fieldset>
                                                        <legend for="1641030174">Frequência: Você vai muitas vezes ao banheiro?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.150295219" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.150295219" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.150295219" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1377042230" -->
                                                    <fieldset>
                                                        <legend for="1377042230">Noctúria: Você levanta a noite para urinar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.395531271" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.395531271" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.395531271" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "658740667" -->
                                                    <fieldset>
                                                        <legend for="658740667">Urgência: Você tem vontade forte de urinar e muito difícil de controlar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.596291972" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.596291972" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.596291972" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1479604000" -->
                                                    <fieldset>
                                                        <legend for="1479604000">Bexiga hiperativa: Você perde urina quando você tem muita vontade de urinar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1616581624" value="Um pouco" required>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1616581624" value="Mais ou menos" required>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1616581624" value="Muito" required>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2145159443" -->
                                                    <fieldset>
                                                        <legend for="2145159443">Incontinência urinária de esforço: Você perde urina com atividades físicas como: tossir, espirrar, correr?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1519098718" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1519098718" value="Mais ou menos" >
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1519098718" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "540649627" -->
                                                    <fieldset>
                                                        <legend for="540649627">Enurese noturna: Você molha a cama à noite?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1706537708" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1706537708" value="Mais ou menos" >
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1706537708" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1549237890" -->
                                                    <fieldset>
                                                        <legend for="1549237890">Incontinência no intercurso sexual: Você perde urina durante a relação sexual?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1154128192" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1154128192" value="Mais ou menos" >
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1154128192" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1564950255" -->
                                                    <fieldset>
                                                        <legend for="1564950255">Infecções frequentes: Você tem muitas infecções urinárias?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1468652466" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1468652466" value="Mais ou menos" >
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1468652466" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2084199850" -->
                                                    <fieldset>
                                                        <legend for="2084199850">Dor na bexiga: Você tem dor na bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.547951254" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.547951254" value="Mais ou menos" >
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.547951254" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1088742278" -->
                                                    <fieldset>
                                                        <legend for="1088742278">Outros: Você tem algum outro problema relacionado a sua bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1764770056" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1764770056" value="Mais ou menos" >
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1764770056" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1472884174" -->
                                                    <fieldset>
                                                        <legend for="1472884174">Emoções Você fica deprimida com seu problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1329359891" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1329359891" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1329359891" value="Mais ou Menos" >
                                                                    Mais ou Menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1329359891" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1856348887" -->
                                                    <fieldset>
                                                        <legend for="1856348887">Você fica ansiosa ou nervosa com seu problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1290957951" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1290957951" value="Um pouco" >
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1290957951" value="Mais ou Menos" >
                                                                    Mais ou Menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1290957951" value="Muito" >
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1008275246" -->
                                                    <fieldset>
                                                        <legend for="1008275246">Você fica mal com você mesma por causa do seu problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.357989084" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.357989084" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.357989084" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.357989084" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "154590973" -->
                                                    <fieldset>
                                                        <legend for="154590973">Sono/Energia Seu problema de bexiga atrapalha seu sono?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2082354848" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2082354848" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2082354848" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2082354848" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1261013" -->
                                                    <fieldset>
                                                        <legend for="1261013">Você se sente desgastada ou cansada?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1355200054" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1355200054" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1355200054" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1355200054" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "211601933" -->
                                                    <fieldset>
                                                        <legend for="211601933">Algumas situações abaixo acontecem com você? Se tiver o quanto?</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "350457711" -->
                                                    <fieldset>
                                                        <legend for="350457711">Você usa algum tipo de protetor higiênico como: fralda, forro, absorvente tipo Modess para manter-se seca?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1825532298" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1825532298" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1825532298" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1825532298" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "690038293" -->
                                                    <fieldset>
                                                        <legend for="690038293">Você controla a quantidade de líquido que bebe?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.725506611" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.725506611" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.725506611" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.725506611" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1875021496" -->
                                                    <fieldset>
                                                        <legend for="1875021496">Você precisa trocar sua roupa íntima (calcinha), quando fica molhadas?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1849166459" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1849166459" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1849166459" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1849166459" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1538166503" -->
                                                    <fieldset>
                                                        <legend for="1538166503">Você se preocupa em estar cheirando urina?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1266172776" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1266172776" value="Às vezes" >
                                                                    Às vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1266172776" value="Várias vezes" >
                                                                    Várias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1266172776" value="Sempre" >
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <input type="hidden" name="fvv" value="1">
                                                    <input type="hidden" name="fbzx" value="-8324560468130768292">
                                                    <!--
                                                        CAVEAT: In multipages (multisection) forms, *pageHistory* field tells to google what sections we've currently completed.
                                                        This usually starts as "0" for the first page, then "0,1" in the second page... up to "0,1,2..N" in n-th page.
                                                        Keep this in mind if you plan to change this code to recreate any sort of multipage-feature in your exported form.
                                                        We're setting this to the total number of pages in this form because we're sending all fields from all the section together.
                                                    -->
                                                    <input type="hidden" name="pageHistory" value="0">

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->


                                                <!-- QUEST. LABORATÓRIO -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLSfTStiKNIv0Wb-TRAbWPIyoymLoziLjrAf2tpgFDWUtSCpfNQ/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">
                                                    <fieldset>
                                                        <h2>Questionários Laboratório<br><small></small></h2>
                                                    </fieldset>                                                    

                                                    <fieldset>
                                                        <legend for="">Participante</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Data do Exame</legend>
                                                        <div class="form-group">
                                                            <input type="date" id=""  class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend for="">Data de Nascimento</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Gênero</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="FEMININO" >
                                                                    Feminino
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="MASCULINO" >
                                                                    Masculino
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">ID Número</legend>
                                                        <div class="form-group">
                                                            <input id="" type="number" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>
  
                                                    <fieldset>
                                                        <legend for="">Equipe</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Microárea</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Família</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Individual</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <h2>Critérios para coleta:<br><small></small></h2>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">1. O participante está ou esteve doente com febre ou vômitos nos últimos 7 dias? (SE SIM, REAGENDAR A COLETA) *</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="" value="NÃO" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="" value="SIM" >
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">2. Fez atividade física moderada ou pesada durante as últimas 12 horas?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="" value="NÃO" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="" value="SIM" >
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">3. Qual o horário da última ingestão de alimentos? (SE MENOS DO QUE 12 HORAS, AGUARDAR COMPLETAR O TEMPO PARA A COLETA, SE MAIS DE 14 HORAS, INFORMAR COORDENAÇÃO) </legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">4. Qual o horário da ingestão de líquidos, incluindo café?</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">5. Qual o horário do último cigarro? (SE MENOS DO QUE 1 HORA, AGUARDAR COMPLETAR 1 HORA PARA INICIAR COLETA)</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">6. Qual o horário da primeira urina da manhã?</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">7. Qual o horário da coleta de urina para o projeto?</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">INÍCIO DA COLETA ÀS:</legend>
                                                        <div class="form-group">
                                                            <input id="" type="time" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">FIM DA COLETA ÀS:</legend>
                                                        <div class="form-group">
                                                            <input id="" type="time" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">8. Colheu as amostras em jejum? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="" value="NÃO" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="" value="SIM" >
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Nome do técnico que coletou:</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>
                                                    
                                                    <fieldset>
                                                        <legend for="">9. Impressão do resultado, data:</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">10. Entrega do resultado ao participante, data: </legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">11. Entrega do resultado na ESF, data: </legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <!-- <input type="hidden" name="fvv" value="1">
                                                    <input type="hidden" name="fbzx" value="-8324560468130768292">

                                                    <input type="hidden" name="pageHistory" value="0"> -->

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->


                                                <!-- QUEST. Antropometria -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLSfTStiKNIv0Wb-TRAbWPIyoymLoziLjrAf2tpgFDWUtSCpfNQ/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">
                                                    <fieldset>
                                                        <h2>Questionários Antropometria<br><small></small></h2>
                                                    </fieldset>                                                    


                                                    <fieldset>
                                                        <legend for="">Data de Nascimento</legend>
                                                        <div class="form-group">
                                                            <input type="date" id=""  class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Gênero</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="FEMININO" >
                                                                    Feminino
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="MASCULINO" >
                                                                    Masculino
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">ID Número</legend>
                                                        <div class="form-group">
                                                            <input id="" type="number" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>
  
                                                    <fieldset>
                                                        <legend for="">Equipe</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Microárea</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Família</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Individual</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Aferidor</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Participante</legend>
                                                        <div class="form-group">
                                                            <input id="" type="text" name="" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Data do Exame</legend>
                                                        <div class="form-group">
                                                            <input type="date" id=""  class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Data de Nascimento</legend>
                                                        <div class="form-group">
                                                            <input type="date" id=""  class="form-control" required>
                                                        </div>
                                                    </fieldset> 

                                                    <fieldset>
                                                        <legend for="">Gênero</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="FEMININO" >
                                                                    Feminino
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="MASCULINO" >
                                                                    Masculino
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Altura</legend>
                                                        <div class="form-group">
                                                            <input type="date" id=""  class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">Peso</legend>
                                                        <div class="form-group">
                                                            <input type="date" id=""  class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend for="">1.4 Abdome em avental?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="FEMININO" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="MASCULINO" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="genero" value="MASCULINO" >
                                                                    Talvez
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>
                                            

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->


                                                <!-- QUEST. INDIVIDUAL -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLSc18s1C5PvU6MT2bD8spUDeEumFfSvwT_yyqehU6XCMon9SBA/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">
                                                    <fieldset>
                                                        <h2>Questionário Individual<br><small></small></h2>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1681298427" -->
                                                    <fieldset>
                                                        <legend for="1681298427">ID NÚMERO</legend>
                                                        <div class="form-group">
                                                            <input id="1175107009" type="text" name="entry.1175107009" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "707396622" -->
                                                    <fieldset>
                                                        <legend for="707396622">1. Nome do entrevistador</legend>
                                                        <div class="form-group">
                                                            <input id="1158256189" type="text" name="entry.1158256189" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "791973567" -->
                                                    <fieldset>
                                                        <legend for="791973567">2. Data da entrevista</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1538695898_date" placeholder="14/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "49418236" -->
                                                    <fieldset>
                                                        <legend for="49418236"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Vamos começar com alguns de seus dados pessoais</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "2053561435" -->
                                                    <fieldset>
                                                        <legend for="2053561435">3. Qual seu nome completo?</legend>
                                                        <div class="form-group">
                                                            <input id="2023031799" type="text" name="entry.2023031799" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "302314649" -->
                                                    <fieldset>
                                                        <legend for="302314649">4. CPF</legend>
                                                        <div class="form-group">
                                                            <input id="2143382153" type="text" name="entry.2143382153" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1772707961" -->
                                                    <fieldset>
                                                        <legend for="1772707961">5. Qual o nome da sua mãe?</legend>
                                                        <div class="form-group">
                                                            <input id="1873070078" type="text" name="entry.1873070078" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "1814872790" -->
                                                    <fieldset>
                                                        <legend for="1814872790">6. Qual a data do seu nascimento</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="50044267_date" placeholder="14/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1262095607" -->
                                                    <fieldset>
                                                        <legend for="1262095607">7. Em que município nasceu?</legend>
                                                        <div class="form-group">
                                                            <input id="1930153856" type="text" name="entry.1930153856" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1209036132" -->
                                                    <fieldset>
                                                        <legend for="1209036132">8. Em que estado você nasceu?</legend>
                                                        <div class="form-group">
                                                            <input id="1252587536" type="text" name="entry.1252587536" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "377674591" -->
                                                    <fieldset>
                                                        <legend for="377674591">10. Gênero</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1989237410" value="Feminino" required>
                                                                    Feminino
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1989237410" value="Masculino" required>
                                                                    Masculino
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "206921300" -->
                                                    <fieldset>
                                                        <legend for="206921300">11. Você tem Smartphone?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.775837183" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.775837183" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "185636824" -->
                                                    <fieldset>
                                                        <legend for="185636824">12. Número de telefone fixo</legend>
                                                        <div class="form-group">
                                                            <input id="1386145812" type="text" name="entry.1386145812" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1746782164" -->
                                                    <fieldset>
                                                        <legend for="1746782164">13. Número de celular</legend>
                                                        <div class="form-group">
                                                            <input id="791037744" type="text" name="entry.791037744" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1879392265" -->
                                                    <fieldset>
                                                        <legend for="1879392265">14. Número de telefone de um familiar, nome e o grau de parentesco:</legend>
                                                        <div class="form-group">
                                                            <input id="227701868" type="text" name="entry.227701868" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1979045732" -->
                                                    <fieldset>
                                                        <legend for="1979045732">15. E-mail:</legend>
                                                        <div class="form-group">
                                                            <input id="1624108659" type="text" name="entry.1624108659" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "723705044" -->
                                                    <fieldset>
                                                        <legend for="723705044">Seção sem título</legend>
                                                        <div class="form-group">
                                                            <p class="help-block">As próximas perguntas se referem à sua história pessoal ou suas condições de vida</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1244151243" -->
                                                    <fieldset>
                                                        <legend for="1244151243">16. Você sabe ler e escrever?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.648990586" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.648990586" value="Não ( PULAR PARA O HLS-14)" required>
                                                                    Não ( PULAR PARA O HLS-14)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "781959904" -->
                                                    <fieldset>
                                                        <legend for="781959904"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "649951575" -->
                                                    <fieldset>
                                                        <legend for="649951575">17. Você aprendeu a ler na escola?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.352726358" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.352726358" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "866953656" -->
                                                    <fieldset>
                                                        <legend for="866953656"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1947195697" -->
                                                    <fieldset>
                                                        <legend for="1947195697">18. Qual a última série/ano cursada(o) com aprovação? (A PARTIR DE 2009 SÃO 9 ANOS INICIANDO COM 6 ANOS DE IDADE, ANTES DE 2009 ERAM 8 SERIES INICIANDO COM 7 ANOS - APÓS RESPONDER PULAR PARA O HLS-14)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="1ª Série/ano" >
                                                                    1ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="2ª Série/ano" >
                                                                    2ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="3ª Série/ano" >
                                                                    3ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="4ª Série/ano" >
                                                                    4ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="5ª Série/ano" >
                                                                    5ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="6ª Série/ano" >
                                                                    6ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="7ª Série/ano" >
                                                                    7ª Série/ano
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1305428145" value="8º ano" >
                                                                    8º ano
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1610330575" -->
                                                    <fieldset>
                                                        <legend for="1610330575">19. Você terminou o primeiro grau?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1937944731" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1937944731" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "168322235" -->
                                                    <fieldset>
                                                        <legend for="168322235"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "777429122" -->
                                                    <fieldset>
                                                        <legend for="777429122">20. Qual seu grau de instrução?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1657705248" value="1º grau completo (PULE PARA O HLS-14)" >
                                                                    1º grau completo (PULE PARA O HLS-14)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1657705248" value="2º grau incompleto (PULE PARA O HLS-14)" >
                                                                    2º grau incompleto (PULE PARA O HLS-14)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1657705248" value="2º grau completo" >
                                                                    2º grau completo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1657705248" value="Universitário incompleto" >
                                                                    Universitário incompleto
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1657705248" value="Universitário completo" >
                                                                    Universitário completo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1657705248" value="Pós-graduação" >
                                                                    Pós-graduação
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1840884653" -->
                                                    <fieldset>
                                                        <legend for="1840884653">21. Com que idade você terminou o 2º grau (NÃO ACEITAR NÚMERO &lt; 14)</legend>
                                                        <div class="form-group">
                                                            <input id="121869382" type="text" name="entry.121869382" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "483397273" -->
                                                    <fieldset>
                                                        <legend for="483397273">Questionário 14-ITEMS HEALTH LITERACY SCALE (HLS-14)</legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Nesse bloco as questões estão relacionadas a sua capacidade acessar e utilizar informações de saúde. Não existem respostas certas ou erradas, você deve escolher apenas uma das alternativas de resposta.</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "245321789" -->
                                                    <fieldset>
                                                        <legend for="245321789">Quando você lê receitas médicas ou bulas de remédio, o quanto você concorda ou discorda com as seguintes afirmações (MOSTRE O CARTÃO):</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1544217004" -->
                                                    <fieldset>
                                                        <legend for="1544217004">22. &quot;EU ENCONTRO PALAVRAS QUE NÃO CONSIGO LER.&quot;</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.458875287" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.458875287" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.458875287" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.458875287" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.458875287" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "505178227" -->
                                                    <fieldset>
                                                        <legend for="505178227">23. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;O TAMANHO DA LETRA É MUITO PEQUENA PARA MIM&quot; (apesar de eu usar óculos).</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1814380395" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1814380395" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1814380395" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1814380395" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1814380395" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "352895939" -->
                                                    <fieldset>
                                                        <legend for="352895939">24. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;O CONTEÚDO É MUITO DIFÍCIL DE ENTENDER.&quot;</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.186664908" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.186664908" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.186664908" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.186664908" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.186664908" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "556998970" -->
                                                    <fieldset>
                                                        <legend for="556998970">25. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;DEMORO MUITO PARA LER AS INSTRUÇÕES&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1523196702" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1523196702" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1523196702" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1523196702" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1523196702" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "826841593" -->
                                                    <fieldset>
                                                        <legend for="826841593">26. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;EU PRECISO QUE ALGUÉM ME AJUDE A LER&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1234260367" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1234260367" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1234260367" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1234260367" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1234260367" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1617066304" -->
                                                    <fieldset>
                                                        <legend for="1617066304">Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda ou discorda com as seguintes perguntas:</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1665547084" -->
                                                    <fieldset>
                                                        <legend for="1665547084">27. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU PROCURO INFORMAÇÕES EM VÁRIOS LUGARES&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1372402843" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1372402843" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1372402843" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1372402843" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1372402843" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "643107442" -->
                                                    <fieldset>
                                                        <legend for="643107442">28. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU ENCONTRO A INFORMAÇÃO QUE PRECISO&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2062287292" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2062287292" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2062287292" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2062287292" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2062287292" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1799836919" -->
                                                    <fieldset>
                                                        <legend for="1799836919">29. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU ENTENDO A INFORMAÇÃO ENCONTRADA&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1912454960" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1912454960" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1912454960" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1912454960" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1912454960" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "450011141" -->
                                                    <fieldset>
                                                        <legend for="450011141">30. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU FALO MINHA OPINIÃO SOBRE A DOENÇA AO MEU MÉDICO, FAMILIARES OU AMIGOS&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1733997227" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1733997227" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1733997227" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1733997227" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1733997227" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1982083839" -->
                                                    <fieldset>
                                                        <legend for="1982083839">31. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU COLOCO EM PRÁTICA AS INFORMAÇÕES ENCONTRADAS NO MEU DIA A DIA.&quot;</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1271877612" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1271877612" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1271877612" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1271877612" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1271877612" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "524077900" -->
                                                    <fieldset>
                                                        <legend for="524077900">Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com relação as seguintes perguntas:</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1014478898" -->
                                                    <fieldset>
                                                        <legend for="1014478898">32. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU SEI QUANDO AS INFORMAÇÕES SÃO BOAS PARA O MEU CASO&quot;</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484469171" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484469171" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484469171" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484469171" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.484469171" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1877811602" -->
                                                    <fieldset>
                                                        <legend for="1877811602">33. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU LEVO EM CONTA SE AS INFORMAÇÕES SÃO VERDADEIRAS&quot;</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1592650990" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1592650990" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1592650990" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1592650990" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1592650990" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1340103307" -->
                                                    <fieldset>
                                                        <legend for="1340103307">34. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU TENHO CONHECIMENTO PARA JULGAR SE AS INFORMAÇÕES SÃO CONFIÁVEIS&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.612434710" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.612434710" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.612434710" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.612434710" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.612434710" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1668965467" -->
                                                    <fieldset>
                                                        <legend for="1668965467">35. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU PEGO INFORMAÇÕES QUE ME AJUDAM A TOMAR DECISÕES DE COMO MELHORAR MINHA SAÚDE&quot;.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1502678533" value="Concordo muito" >
                                                                    Concordo muito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1502678533" value="Concordo" >
                                                                    Concordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1502678533" value="Nem concordo, nem discordo" >
                                                                    Nem concordo, nem discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1502678533" value="Discordo" >
                                                                    Discordo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1502678533" value="Discordo muito" >
                                                                    Discordo muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "211522617" -->
                                                    <fieldset>
                                                        <legend for="211522617"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Neste bloco, as perguntas se referem aos aspectos de seu trabalho.</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1865898726" -->
                                                    <fieldset>
                                                        <legend for="1865898726">36. Você é um trabalhador ativo ou aposentado?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.379356503" value="Ativo" required>
                                                                    Ativo
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.379356503" value="Aposentado" required>
                                                                    Aposentado
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1768590689" -->
                                                    <fieldset>
                                                        <legend for="1768590689">37. Você é ou era: (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Empregado(a)" required>
                                                                    Empregado(a)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Trabalha(ou) sem remuneração" required>
                                                                    Trabalha(ou) sem remuneração
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Trabalha(ou) por conta própria" required>
                                                                    Trabalha(ou) por conta própria
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Empregador(a) - com menos de 25 empregados" required>
                                                                    Empregador(a) - com menos de 25 empregados
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Empregador(a) - com 25 empregados ou mais" required>
                                                                    Empregador(a) - com 25 empregados ou mais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Desempregado(a)" required>
                                                                    Desempregado(a)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Pensionista" required>
                                                                    Pensionista
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Dono(a) de casa" required>
                                                                    Dono(a) de casa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1350539704" value="Empregada(o) doméstica(o)" required>
                                                                    Empregada(o) doméstica(o)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "460188163" -->
                                                    <fieldset>
                                                        <legend for="460188163">38. Sua atividade principal na maior parte de sua vida é ou foi em que setor: (MOSTRAR AS ALTERNATIVAS NO CELULAR).</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no comércio" required>
                                                                    no comércio
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na indústria" required>
                                                                    na indústria
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na saúde" required>
                                                                    na saúde
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na educação" required>
                                                                    na educação
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no transporte" required>
                                                                    no transporte
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na cultura, comunicação ou esporte" required>
                                                                    na cultura, comunicação ou esporte
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no setor de alimentos e culinária" required>
                                                                    no setor de alimentos e culinária
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no artesanato" required>
                                                                    no artesanato
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no cuidado doméstico" required>
                                                                    no cuidado doméstico
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na construção civil" required>
                                                                    na construção civil
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no setor de água e energia" required>
                                                                    no setor de água e energia
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="nas forças armadas e polícias" required>
                                                                    nas forças armadas e polícias
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no judiciário" required>
                                                                    no judiciário
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no setor de manutenção e reparação" required>
                                                                    no setor de manutenção e reparação
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na agricultura(lavoura ou plantação de vegetais)" required>
                                                                    na agricultura(lavoura ou plantação de vegetais)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="no extrativismo mineral (garimpo)" required>
                                                                    no extrativismo mineral (garimpo)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na pecuária (criação ou cuidado de rebanhos ou granjas)" required>
                                                                    na pecuária (criação ou cuidado de rebanhos ou granjas)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="na pesca" required>
                                                                    na pesca
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1247891934" value="outro - (especifique)" required>
                                                                    outro - (especifique)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "892876492" -->
                                                    <fieldset>
                                                        <legend for="892876492">39. Há quantos anos você tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="692960556" type="text" name="entry.692960556" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1203875588" -->
                                                    <fieldset>
                                                        <legend for="1203875588">40. De um modo geral, em comparação a pessoas da sua idade, como você considera o seu estado de saúde? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1291797459" value="Muito bom" required>
                                                                    Muito bom
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1291797459" value="Bom" required>
                                                                    Bom
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1291797459" value="Regular" required>
                                                                    Regular
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1291797459" value="Ruim" required>
                                                                    Ruim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1291797459" value="Muito ruim" required>
                                                                    Muito ruim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1873564433" -->
                                                    <fieldset>
                                                        <legend for="1873564433"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Alguma vez um médico lhe informou que você teve ou tem alguma das seguintes doenças?</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1501792143" -->
                                                    <fieldset>
                                                        <legend for="1501792143">41. Hipertensão (Pressão alta?)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1225997183" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1225997183" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1956903124" -->
                                                    <fieldset>
                                                        <legend for="1956903124">42. Infarto do miocárdio (ataque do coração)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1617715652" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1617715652" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "506537551" -->
                                                    <fieldset>
                                                        <legend for="506537551">43. Angina de peito (isquemia ou má circulação no coração)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1743721280" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1743721280" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "535781911" -->
                                                    <fieldset>
                                                        <legend for="535781911">44. Insuficiência cardíaca (coração grande ou dilatado)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.527929324" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.527929324" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "224539836" -->
                                                    <fieldset>
                                                        <legend for="224539836">45. Febre reumática? (válvula entupida ou sopro no coração que exige controle médico e, quando jovem, uso de antibiótico por muitos anos)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2002447939" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2002447939" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "21620456" -->
                                                    <fieldset>
                                                        <legend for="21620456">25. Doença de Chagas?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1106392246" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1106392246" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1011942763" -->
                                                    <fieldset>
                                                        <legend for="1011942763">26. Acidente vascular cerebral (derrame)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.795349753" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.795349753" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1351864938" -->
                                                    <fieldset>
                                                        <legend for="1351864938">27. Doença do rim (p. ex. insuficiência, pedra ou cálculo, nefrite, doença policística)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1090783598" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1090783598" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1778601974" -->
                                                    <fieldset>
                                                        <legend for="1778601974">28. Hanseníase?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1419245914" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1419245914" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1395745349" -->
                                                    <fieldset>
                                                        <legend for="1395745349">29. Tuberculose?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.736748217" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.736748217" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "928583109" -->
                                                    <fieldset>
                                                        <legend for="928583109">30. Malária?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.25976563" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.25976563" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "628101859" -->
                                                    <fieldset>
                                                        <legend for="628101859">31. Dengue, Zica, Chikungunha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1788664163" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1788664163" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2061258245" -->
                                                    <fieldset>
                                                        <legend for="2061258245">32. Febre amarela? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.311943090" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.311943090" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1241118067" -->
                                                    <fieldset>
                                                        <legend for="1241118067">33. Leishmaniose? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.209902563" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.209902563" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1346291136" -->
                                                    <fieldset>
                                                        <legend for="1346291136">34. Trombose ou embolia?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.148885191" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.148885191" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "847398411" -->
                                                    <fieldset>
                                                        <legend for="847398411">35. Enfisema, bronquite crônica ou doença pulmonar obstrutiva crônica (DPOC)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.286115818" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.286115818" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "992254919" -->
                                                    <fieldset>
                                                        <legend for="992254919">36. Asma (bronquite asmática)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.94234092" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.94234092" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1861794485" -->
                                                    <fieldset>
                                                        <legend for="1861794485">37. Artrite reumatóide ou lupus eritematoso?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1101402585" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1101402585" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1249566825" -->
                                                    <fieldset>
                                                        <legend for="1249566825">38. Cirrose do fígado, hepatite?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.597696947" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.597696947" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "76194800" -->
                                                    <fieldset>
                                                        <legend for="76194800">39. Câncer?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.925326113" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.925326113" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2094386610" -->
                                                    <fieldset>
                                                        <legend for="2094386610">40. COVID-19?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1143187905" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1143187905" value="Sim, diagnóstico clínico, só pelos sintomas" required>
                                                                    Sim, diagnóstico clínico, só pelos sintomas
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1143187905" value="Sim, diagnóstico por RT-PCR ou exame com swab no nariz" required>
                                                                    Sim, diagnóstico por RT-PCR ou exame com swab no nariz
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1143187905" value="Sim, diagnóstico por sorologia ou exame do sangue" required>
                                                                    Sim, diagnóstico por sorologia ou exame do sangue
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2007608406" -->
                                                    <fieldset>
                                                        <legend for="2007608406">41. Você foi vacinado (a) contra COVID-19?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2010162727" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2010162727" value="Sim, só a primeira dose" required>
                                                                    Sim, só a primeira dose
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2010162727" value="Sim, as duas doses" required>
                                                                    Sim, as duas doses
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "420524957" -->
                                                    <fieldset>
                                                        <legend for="420524957"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1823754510" -->
                                                    <fieldset>
                                                        <legend for="1823754510">42. Você teve COVID-19 após a segunda dose da vacina? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1735630105" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1735630105" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "459664792" -->
                                                    <fieldset>
                                                        <legend for="459664792"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Vamos falar sobre Diabetes e autocuidado</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "607098047" -->
                                                    <fieldset>
                                                        <legend for="607098047">43. Há quantos anos você convive com o diabetes? (SE MENOR DO QUE 01 ANO MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input id="1848920023" type="text" name="entry.1848920023" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1899352673" -->
                                                    <fieldset>
                                                        <legend for="1899352673">44. Você já teve lesão ou ferida no pé provocada pelo Diabetes?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.220473051" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.220473051" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "119770761" -->
                                                    <fieldset>
                                                        <legend for="119770761">45. Em quantos dos últimos SETE DIAS seguiu uma dieta saudável?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1347867798" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "1262255126" -->
                                                    <fieldset>
                                                        <legend for="1262255126">46. Durante o último mês, QUANTOS DIAS POR SEMANA, seguiu a orientação alimentar, dada por um profissional de saúde?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.28671272" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "551796483" -->
                                                    <fieldset>
                                                        <legend for="551796483">47. Em quantos dos últimos SETE DIAS comeu cinco ou mais porções de frutas e/ou vegetais?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1168977913" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "186565704" -->
                                                    <fieldset>
                                                        <legend for="186565704">48. Em quantos dos últimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou alimentos com leite integral ou derivados?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1291912878" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "2064766667" -->
                                                    <fieldset>
                                                        <legend for="2064766667">50. Em quantos dos últimos sete dias comeu doces?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.917466295" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "45173867" -->
                                                    <fieldset>
                                                        <legend for="45173867">51. Em quantos dos últimos SETE DIAS realizou atividade física durante pelo menos 30 minutos (minutos totais de atividade contínua, inclusive andar)</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1042428673" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "601178676" -->
                                                    <fieldset>
                                                        <legend for="601178676">52. Em quantos dos últimos SETE DIAS praticou algum tipo de exercício físico específico (nadar, caminhar,andar de bicicleta), sem incluir suas atividades em casa ou em seu trabalho?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.600610644" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "922266671" -->
                                                    <fieldset>
                                                        <legend for="922266671">53. Em quantos dos últimos SETE DIAS examinou os seus pés?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1464829405" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "1878630844" -->
                                                    <fieldset>
                                                        <legend for="1878630844">54. Em quantos dos últimos SETE DIAS examinou dentro dos sapatos antes de calçá-los?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.898333133" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "209411986" -->
                                                    <fieldset>
                                                        <legend for="209411986">55. Em quantos dos últimos SETE DIAS secou os espaços entre os dedos dos pés depois de lavá-los?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.856285860" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "1157263387" -->
                                                    <fieldset>
                                                        <legend for="1157263387">56. Em quantos dos últimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi recomendado?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.602903401" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "1980123813" -->
                                                    <fieldset>
                                                        <legend for="1980123813">57. Em quantos dos últimos SETE DIAS tomou suas injeções de insulina, conforme foi recomendado?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1342929982" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "2095346618" -->
                                                    <fieldset>
                                                        <legend for="2095346618">58. Em quantos dos últimos SETE DIAS tomou o número indicado de comprimidos do diabetes?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.837894501" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1087931693" -->
                                                    <fieldset>
                                                        <legend for="1087931693">59. Algum médico ou enfermeiro solicitou que você realizasse em casa o exame de açúcar no sangue na pontado dedo</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1578368618" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1578368618" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "474860279" -->
                                                    <fieldset>
                                                        <legend for="474860279">60. Você tem o aparelho para realizar o exame de açúcar no sangue na ponta do dedo?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.544784440" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.544784440" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "1777926530" -->
                                                    <fieldset>
                                                        <legend for="1777926530">61. Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1424907547" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "linear" id: "1141634154" -->
                                                    <fieldset>
                                                        <legend for="1141634154">62. Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue o número de vezes recomendado pelo médico ou enfermeiro?</legend>
                                                        <div class="form-group">
                                                            <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="0" required>
                                                                0
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="1" required>
                                                                1
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="2" required>
                                                                2
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="3" required>
                                                                3
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="4" required>
                                                                4
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="5" required>
                                                                5
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="6" required>
                                                                6
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="entry.1926078420" value="7" required>
                                                                7
                                                            </label>
                                                            </div>
                                                            <div>
                                                                <div>0: </div>
                                                                <div>7: </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "761715063" -->
                                                    <fieldset>
                                                        <legend for="761715063">Agora gostaria de fazer algumas perguntas sobre cansaço ou falta de ar</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "665480281" -->
                                                    <fieldset>
                                                        <legend for="665480281">63. Você consegue subir um lance de escadas de 8 degraus carregando peso (± 10Kg) ou caminhar rápido no terreno plano ou subir ladeiras sem ter que parar por cansaço ou falta de ar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2108313718" value="Sim (PULE PARA QUESTÃO 66)" required>
                                                                    Sim (PULE PARA QUESTÃO 66)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2108313718" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1422365686" -->
                                                    <fieldset>
                                                        <legend for="1422365686"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2022676106" -->
                                                    <fieldset>
                                                        <legend for="2022676106">64. Você consegue caminhar devagar no terreno plano ou arrumar a casa ou tomar banho sem ter que parar por cansaço ou falta de ar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1988246343" value="Sim (PULE PARA QUESTÃO 66)" >
                                                                    Sim (PULE PARA QUESTÃO 66)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1988246343" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "2031419629" -->
                                                    <fieldset>
                                                        <legend for="2031419629"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "170754366" -->
                                                    <fieldset>
                                                        <legend for="170754366">65. Você tem cansaço ou falta de ar quando está comendo, sentado ou deitado?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1652327071" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1652327071" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "863255826" -->
                                                    <fieldset>
                                                        <legend for="863255826"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "83962145" -->
                                                    <fieldset>
                                                        <legend for="83962145">66.  Você tem sentido dor ou desconforto no peito (tórax)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.310904486" value="Não (PULE PARA A QUESTÃO 69)" >
                                                                    Não (PULE PARA A QUESTÃO 69)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.310904486" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "307430956" -->
                                                    <fieldset>
                                                        <legend for="307430956"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "261554423" -->
                                                    <fieldset>
                                                        <legend for="261554423">67. Você sente essa dor no peito quando você está andando no terreno plano?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1080238622" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1080238622" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "225974861" -->
                                                    <fieldset>
                                                        <legend for="225974861">68. Você sente essa dor no peito quando você sobe uma ladeira, um lance de escadas ou caminha rápido no plano?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.482514114" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.482514114" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "70274313" -->
                                                    <fieldset>
                                                        <legend for="70274313"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2044155179" -->
                                                    <fieldset>
                                                        <legend for="2044155179">69. Você foi submetido à cirurgia de ponte safena ou mamária ou angioplastia ou implantação de stent na artéria coronária?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1577700351" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1577700351" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1026334789" -->
                                                    <fieldset>
                                                        <legend for="1026334789">70. Você teve ou tem outra doença que não lhe foi perguntada? (ANOTAR O NOME DA DOENÇA, SE RESPOSTA NEGATIVA, INFORMAR 00)</legend>
                                                        <div class="form-group">
                                                            <input id="1639666996" type="text" name="entry.1639666996" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "594178238" -->
                                                    <fieldset>
                                                        <legend for="594178238">As próximas perguntas estão relacionadas ao cuidado com a sua saúde</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "866528091" -->
                                                    <fieldset>
                                                        <legend for="866528091">71. Você possui plano de saúde?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.152448726" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.152448726" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2080847367" -->
                                                    <fieldset>
                                                        <legend for="2080847367">72. Qual o tipo de unidade de saúde na qual você faz tratamento? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331305089" value="1. Estratégia de Saúde da Família ou casa família do bairro do SUS" required>
                                                                    1. Estratégia de Saúde da Família ou casa família do bairro do SUS
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331305089" value="2. Unidade Básica de Saúde no bairro do SUS" required>
                                                                    2. Unidade Básica de Saúde no bairro do SUS
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331305089" value="3. Pronto Socorro ou UPA" required>
                                                                    3. Pronto Socorro ou UPA
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331305089" value="4. Hospital" required>
                                                                    4. Hospital
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331305089" value="5. Ambulatório especializado em Diabetes fora do bairro do SUS" required>
                                                                    5. Ambulatório especializado em Diabetes fora do bairro do SUS
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331305089" value="6. Ambulatório do plano de saúde" required>
                                                                    6. Ambulatório do plano de saúde
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1053253116" -->
                                                    <fieldset>
                                                        <legend for="1053253116">73. Quantas vezes você fez consulta com o médico dessa unidade nos últimos 12 meses?</legend>
                                                        <div class="form-group">
                                                            <input id="1424760136" type="text" name="entry.1424760136" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1546081325" -->
                                                    <fieldset>
                                                        <legend for="1546081325">74. O Censo Brasileiro (IBGE) usa os termos ‘preta’, ‘parda’, ‘branca’, ‘amarela’ e ‘indígena’ para classificara cor ou raça das pessoas. Se o(a) Sr.(a) tivesse que responder ao Censo do IBGE hoje, como se classificaria a respeito de sua cor ou raça? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1613968447" value="1. Preta" required>
                                                                    1. Preta
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1613968447" value="2. Parda" required>
                                                                    2. Parda
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1613968447" value="3. Branca" required>
                                                                    3. Branca
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1613968447" value="4. Amarela" required>
                                                                    4. Amarela
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1613968447" value="5. Indígena" required>
                                                                    5. Indígena
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1368819980" -->
                                                    <fieldset>
                                                        <legend for="1368819980">As próximas perguntas se referem à sua vida familiar.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "231627897" -->
                                                    <fieldset>
                                                        <legend for="231627897">75. Qual é a sua situação conjugal atual? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1662770235" value="1. Casada/o" required>
                                                                    1. Casada/o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1662770235" value="2. União consensual (sem casamento civil)" required>
                                                                    2. União consensual (sem casamento civil)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1662770235" value="3. Solteira/o" required>
                                                                    3. Solteira/o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1662770235" value="4. Separada/o" required>
                                                                    4. Separada/o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1662770235" value="5. Desquitada/o ou divorciada/o" required>
                                                                    5. Desquitada/o ou divorciada/o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1662770235" value="6. Viúva/o" required>
                                                                    6. Viúva/o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "142203523" -->
                                                    <fieldset>
                                                        <legend for="142203523">76. Você tem filhos (considere todos os filhos vivos naturais ou adotivos)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.194035608" value="Não (PULE PARA QUESTÃO 78)" required>
                                                                    Não (PULE PARA QUESTÃO 78)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.194035608" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1209962326" -->
                                                    <fieldset>
                                                        <legend for="1209962326"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1955858408" -->
                                                    <fieldset>
                                                        <legend for="1955858408">77. Quantos filhos você tem? </legend>
                                                        <div class="form-group">
                                                            <input id="1530923623" type="text" name="entry.1530923623" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1374592244" -->
                                                    <fieldset>
                                                        <legend for="1374592244"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1074253899" -->
                                                    <fieldset>
                                                        <legend for="1074253899">78. Você é ou já foi fumante, ou seja, já fumou pelo menos 100 cigarros (cinco maços de cigarros) ao longo da sua vida?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.862421125" value="Não (PULE PARA QUESTÃO 92)" required>
                                                                    Não (PULE PARA QUESTÃO 92)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.862421125" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1747325231" -->
                                                    <fieldset>
                                                        <legend for="1747325231"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "761109736" -->
                                                    <fieldset>
                                                        <legend for="761109736">79. Com que idade você começou a fumar?</legend>
                                                        <div class="form-group">
                                                            <input id="795407551" type="text" name="entry.795407551" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "994364130" -->
                                                    <fieldset>
                                                        <legend for="994364130">80. Você fuma cigarros atualmente?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.133299097" value="Não  (PULAR PARA QUESTÃO 83)" required>
                                                                    Não  (PULAR PARA QUESTÃO 83)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.133299097" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "264851658" -->
                                                    <fieldset>
                                                        <legend for="264851658"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1830799030" -->
                                                    <fieldset>
                                                        <legend for="1830799030">81. Quando fumou o seu último cigarro?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1619955876" value="Hoje" >
                                                                    Hoje
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1619955876" value="No último mês" >
                                                                    No último mês
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1619955876" value="Um a três meses atrás" >
                                                                    Um a três meses atrás
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1619955876" value="Quatro a doze meses atrás" >
                                                                    Quatro a doze meses atrás
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1619955876" value="Um a dois anos atrás" >
                                                                    Um a dois anos atrás
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1619955876" value="Há mais de dois anos atrás" >
                                                                    Há mais de dois anos atrás
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "359962877" -->
                                                    <fieldset>
                                                        <legend for="359962877">82. Com que idade você parou de fumar pela última vez?</legend>
                                                        <div class="form-group">
                                                            <input id="2023804685" type="text" name="entry.2023804685" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1848675707" -->
                                                    <fieldset>
                                                        <legend for="1848675707"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1240065709" -->
                                                    <fieldset>
                                                        <legend for="1240065709">83. Em geral, quantos cigarros por dia você fuma (ou fumava)? (SE &lt;01&#x3D;00)</legend>
                                                        <div class="form-group">
                                                            <input id="1498700318" type="text" name="entry.1498700318" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "81125072" -->
                                                    <fieldset>
                                                        <legend for="81125072">84. Ao todo, durante quantos anos você fumou ou fuma? (Desconte os períodos em que você deixou defumar) (SE &lt;01&#x3D; 00 -FAZER O CÁLCULO JUNTO COM O PARTICIPANTE)</legend>
                                                        <div class="form-group">
                                                            <input id="831291462" type="text" name="entry.831291462" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1000259888" -->
                                                    <fieldset>
                                                        <legend for="1000259888">85. Você fumou hoje? (SE O PARTICIPANTE PAROU DE FUMAR, NÃO FAÇA ESSA PERGUNTA, PULE PARA QUESTÃO 92)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.365994255" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.365994255" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1419809833" -->
                                                    <fieldset>
                                                        <legend for="1419809833">86. Você fumou um cigarro − ainda que só uma tragada − durante os últimos sete dias?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1432458884" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1432458884" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1688738765" -->
                                                    <fieldset>
                                                        <legend for="1688738765">87. Quanto tempo você demora para fumar seu primeiro cigarro depois de se levantar pela manhã?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.378246725" value="1. Menos de 5 minutos" >
                                                                    1. Menos de 5 minutos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.378246725" value="2. Entre 6 e 30 minutos" >
                                                                    2. Entre 6 e 30 minutos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.378246725" value="3. Entre 31 e 60 minutos" >
                                                                    3. Entre 31 e 60 minutos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.378246725" value="4. Mias de 60 minutos" >
                                                                    4. Mias de 60 minutos
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1291710709" -->
                                                    <fieldset>
                                                        <legend for="1291710709">88. Para você é difícil abster-se e não fumar naqueles lugares onde está proibido (por exemplo: um hospital,biblioteca, igreja, ônibus etc.)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.696308552" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.696308552" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1189688379" -->
                                                    <fieldset>
                                                        <legend for="1189688379">89. Se tivesse de escolher, que cigarro lhe custaria mais deixar de fumar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331250586" value="O primeiro da manhã" >
                                                                    O primeiro da manhã
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1331250586" value="Todos os demais" >
                                                                    Todos os demais
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1921979183" -->
                                                    <fieldset>
                                                        <legend for="1921979183">90.Habitualmente você fuma mais durante as primeiras horas do dia que durante o resto do dia?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.633864254" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.633864254" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "339642986" -->
                                                    <fieldset>
                                                        <legend for="339642986">91. Você fuma estando doente ou na cama?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1231983473" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1231983473" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "740442873" -->
                                                    <fieldset>
                                                        <legend for="740442873"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1621896893" -->
                                                    <fieldset>
                                                        <legend for="1621896893">Vamos conversar sobre atividade física</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "42127482" -->
                                                    <fieldset>
                                                        <legend for="42127482">92. De um modo geral, qual das alternativas define melhor os seus hábitos diários em relação à prática de atividade física ?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.630574546" value="1. Passo a maior parte do dia sentado" required>
                                                                    1. Passo a maior parte do dia sentado
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.630574546" value="2. Não ando muito durante o dia" required>
                                                                    2. Não ando muito durante o dia
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.630574546" value="3. Caminho ou fico de pé bastante durante o dia, mas não carrego ou levanto coisas com frequência" required>
                                                                    3. Caminho ou fico de pé bastante durante o dia, mas não carrego ou levanto coisas com frequência
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.630574546" value="4. Carrego pesos leves/subo escadas com frequência/faço exercícios regulares" required>
                                                                    4. Carrego pesos leves/subo escadas com frequência/faço exercícios regulares
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.630574546" value="5. Faço trabalho pesado ou exercícios pesados regularmente" required>
                                                                    5. Faço trabalho pesado ou exercícios pesados regularmente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "571527853" -->
                                                    <fieldset>
                                                        <legend for="571527853"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">
                                                                Agora, gostaríamos de saber um pouco sobre aspectos religiosos da sua vida
                                                            </p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "152649748" -->
                                                    <fieldset>
                                                        <legend for="152649748">93. Atualmente, você possui alguma religião ou culto? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.335781214" value="Não (PULAR PARA QUESTÃO 95)" required>
                                                                    Não (PULAR PARA QUESTÃO 95)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.335781214" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "997408658" -->
                                                    <fieldset>
                                                        <legend for="997408658"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "102478279" -->
                                                    <fieldset>
                                                        <legend for="102478279">94. Atualmente, qual é a sua religião ou culto? (aquela com que você mais se identifica) (MOSTRAR ALISTA NO CELULAR)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="1. Adventista" >
                                                                    1. Adventista
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="2. Assembléia de Deus" >
                                                                    2. Assembléia de Deus
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="3. Batista" >
                                                                    3. Batista
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="4. Batuque" >
                                                                    4. Batuque
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="5. Budista" >
                                                                    5. Budista
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="6. Candomblé" >
                                                                    6. Candomblé
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="7. Casa da Benção" >
                                                                    7. Casa da Benção
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="8. Católica" >
                                                                    8. Católica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="9. Congregação Cristã do Brasil" >
                                                                    9. Congregação Cristã do Brasil
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="10. Espírita Kardecista" >
                                                                    10. Espírita Kardecista
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="11. Evangelho Quadrangular" >
                                                                    11. Evangelho Quadrangular
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="12. Judaica" >
                                                                    12. Judaica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="13. Luterana" >
                                                                    13. Luterana
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="14. Messiânica" >
                                                                    14. Messiânica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="15. Metodista" >
                                                                    15. Metodista
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="16. Prebisteriana" >
                                                                    16. Prebisteriana
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="17. Testemunha de Jeová" >
                                                                    17. Testemunha de Jeová
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="18. Umbanda" >
                                                                    18. Umbanda
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="19. Universal do Reino de Deus" >
                                                                    19. Universal do Reino de Deus
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.948867263" value="__other_option__" >
                                                                </label>
                                                                <input type="text" name="entry.948867263.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "915119201" -->
                                                    <fieldset>
                                                        <legend for="915119201"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "491412643" -->
                                                    <fieldset>
                                                        <legend for="491412643">
                                                            As próximas perguntas se referem ao consumo de cerveja, chope, vinho, uísque, cachaça ou outros destilados, licores, batidas ou qualquer outro tipo de bebida alcoólica, seja consumida em refeições ou fora dela, em situações especiais ou apenas para relaxar.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1804914083" -->
                                                    <fieldset>
                                                        <legend for="1804914083">95. O(a) Sr(a) já consumiu bebidas alcoólicas? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.972826941" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.972826941" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1473479028" -->
                                                    <fieldset>
                                                        <legend for="1473479028"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "238094926" -->
                                                    <fieldset>
                                                        <legend for="238094926">96. Atualmente, o(a) Sr(a) consome bebidas alcoólicas?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.824413734" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.824413734" value="Não, parei a menos de 1 ano (PULAR PARA QUESTÃO 107)" >
                                                                    Não, parei a menos de 1 ano (PULAR PARA QUESTÃO 107)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.824413734" value="Não, parei entre 1 a 2 anos (PULAR PARA QUESTÃO 107)" >
                                                                    Não, parei entre 1 a 2 anos (PULAR PARA QUESTÃO 107)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.824413734" value="Não, parei há mais de 2 anos (PULAR PARA QUESTÃO 107)" >
                                                                    Não, parei há mais de 2 anos (PULAR PARA QUESTÃO 107)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "318763853" -->
                                                    <fieldset>
                                                        <legend for="318763853"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1631818059" -->
                                                    <fieldset>
                                                        <legend for="1631818059">97. O Sr(a) consome VINHO TINTO?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.862197397" value="Não (PULAR PARA QUESTÃO 99)" >
                                                                    Não (PULAR PARA QUESTÃO 99)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.862197397" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "465517118" -->
                                                    <fieldset>
                                                        <legend for="465517118"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1893166798" -->
                                                    <fieldset>
                                                        <legend for="1893166798">98. Quantas taças de VINHO TINTO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0)</legend>
                                                        <div class="form-group">
                                                            <input id="1360988762" type="text" name="entry.1360988762" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1325874846" -->
                                                    <fieldset>
                                                        <legend for="1325874846"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1316457654" -->
                                                    <fieldset>
                                                        <legend for="1316457654">99. O Sr(a) consome VINHO BRANCO?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1364067338" value="Não (PULAR PARA QUESTÃO 101)" >
                                                                    Não (PULAR PARA QUESTÃO 101)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1364067338" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "774030069" -->
                                                    <fieldset>
                                                        <legend for="774030069"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1576733768" -->
                                                    <fieldset>
                                                        <legend for="1576733768">100. Quantas taças de VINHO BRANCO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0)</legend>
                                                        <div class="form-group">
                                                            <input id="1554491309" type="text" name="entry.1554491309" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1618644560" -->
                                                    <fieldset>
                                                        <legend for="1618644560"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1879997708" -->
                                                    <fieldset>
                                                        <legend for="1879997708">101. O Sr(a) consome CERVEJA ou CHOPP ?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2035472958" value="Não (PULAR PARA A QUESTÃO 103)" >
                                                                    Não (PULAR PARA A QUESTÃO 103)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2035472958" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "854619890" -->
                                                    <fieldset>
                                                        <legend for="854619890"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1799201659" -->
                                                    <fieldset>
                                                        <legend for="1799201659">102. Quantas latas, garrafas ou copos de CERVEJA ou CHOPP o(a) Sr(a) consome POR SEMANA?(NÃO LEIA AS OPÇÕES, ADEQUE A RESPOSTA DADA ÀS ALTERNATIVAS. SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0 - INFORMAR QUANTIDADE E TIPO)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1836412943" value="Copos pequenos (100-150mL)" >
                                                                    Copos pequenos (100-150mL)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1836412943" value="Tulipas, latas ou garrafas long neck (garrafa pequena)" >
                                                                    Tulipas, latas ou garrafas long neck (garrafa pequena)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1836412943" value="Garrafas de 620mL" >
                                                                    Garrafas de 620mL
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1836412943" value="Garrafas de 1L" >
                                                                    Garrafas de 1L
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1616724070" -->
                                                    <fieldset>
                                                        <legend for="1616724070">102. ENTREVISTADOR: escreva a quantidade referente à pergunta anterior</legend>
                                                        <div class="form-group">
                                                            <input id="804768804" type="text" name="entry.804768804" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1473803324" -->
                                                    <fieldset>
                                                        <legend for="1473803324"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "904179738" -->
                                                    <fieldset>
                                                        <legend for="904179738">103. O Sr(a) consome DESTILADOS (tais como uísque, vodka, tequila, rum, aguardente ou cachaça) oubebidas misturadas preparadas com esses destilados (caipirinha, coquetéis, drinks)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.598466289" value="Não (PULAR PARA QUESTÃO 105)" >
                                                                    Não (PULAR PARA QUESTÃO 105)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.598466289" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1359092737" -->
                                                    <fieldset>
                                                        <legend for="1359092737"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1606245358" -->
                                                    <fieldset>
                                                        <legend for="1606245358">104. Quantas doses (1 DOSE&#x3D; 50 mL &#x3D; 1 xícara de cafezinho) de DESTILADOS (tais como uísque, vodka, tequila, rum aguardente ou cachaça) ou bebidas misturadas preparadas com esses destilados (caipirinha,coquetéis, drinks), o(a) Sr(a) consome POR SEMANA?</legend>
                                                        <div class="form-group">
                                                            <input id="1177782208" type="text" name="entry.1177782208" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "494640399" -->
                                                    <fieldset>
                                                        <legend for="494640399"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1893803644" -->
                                                    <fieldset>
                                                        <legend for="1893803644">
                                                            ENTREVISTADOR: SEGUEM AS DEFINIÇÕES PARA A PRÓXIMA PERGUNTA.
                                                        </legend>
                                                        <div class="form-group">
                                                            <p class="help-block">
                                                                *1 dose
                                                                1 lata/long neck de cerveja (350 mL)
                                                                1 taça de vinho (120-150 mL)
                                                                1 dose de bebida destilada (50mL)
                                                                * 2 doses
                                                                1 garrafa de cerveja (620mL)
                                                                1 dose dupla de bebida destilada (100mL)
                                                                * 3 doses&#x3D; 1 garrafa de cerveja (1L)
                                                            </p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1263495682" -->
                                                    <fieldset>
                                                        <legend for="1263495682">105. Nos ÚLTIMOS 12 MESES, com que frequência o(a) Sr(a) consumiu 5 ou mais doses* de qualquer tipo de bebida alcoólica em um período de 2 horas? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.638157428" value="Duas vezes por dia ou mais" >
                                                                    Duas vezes por dia ou mais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.638157428" value="Praticamente todos os dias" >
                                                                    Praticamente todos os dias
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.638157428" value="Uma a duas vezes por semana" >
                                                                    Uma a duas vezes por semana
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.638157428" value="Duas ou três vezes por mês" >
                                                                    Duas ou três vezes por mês
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.638157428" value="Somente em ocasiões especiais" >
                                                                    Somente em ocasiões especiais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.638157428" value="Nunca" >
                                                                    Nunca
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1130157977" -->
                                                    <fieldset>
                                                        <legend for="1130157977">106. Do total de bebidas alcoólicas que o(a) Sr(a) consome, com que frequência o(a) Sr(a) ingere junto às refeições?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2085410324" value="Sempre ou quase sempre com as refeições" >
                                                                    Sempre ou quase sempre com as refeições
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2085410324" value="Maior parte junto a refeições" >
                                                                    Maior parte junto a refeições
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2085410324" value="Tanto junto quanto fora das refeições" >
                                                                    Tanto junto quanto fora das refeições
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2085410324" value="Maior parte fora das refeições" >
                                                                    Maior parte fora das refeições
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2085410324" value="Nunca ou quase nunca com as refeições" >
                                                                    Nunca ou quase nunca com as refeições
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1197116146" -->
                                                    <fieldset>
                                                        <legend for="1197116146"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Vamos falar agora sobre os medicamentos que o(a) Sr(a) usa.</p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1122731324" -->
                                                    <fieldset>
                                                        <legend for="1122731324">107. O(a) Sr(a) toma medicamentos para Diabetes ou açúcar alto no sangue?: (SE O PARTICIPANTE NÃO SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1005509829" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1005509829" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1831461590" -->
                                                    <fieldset>
                                                        <legend for="1831461590">108. O(a) Sr(a) toma comprimido para o Diabetes?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.693087878" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.693087878" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "329806221" -->
                                                    <fieldset>
                                                        <legend for="329806221">109. O(a) Sr(a) utiliza insulina para o Diabetes?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1541440927" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1541440927" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "103203355" -->
                                                    <fieldset>
                                                        <legend for="103203355">110. O(a) Sr(a) toma medicamentos para Hipertensão ou pressão alta?: (SE O PARTICIPANTE NÃO SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1756147120" value="Sim" required>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1756147120" value="Não" required>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "1562574106" -->
                                                    <fieldset>
                                                        <legend for="1562574106">SE A PARTICIPANTE FOR MULHER PREENCHA O QUESTIONÁRIO PARA MULHERES.</legend>
                                                        <div class="form-group">
                                                            <p class="help-block">
                                                                SE O PARTICIPANTE FOR HOMEM AGRADEÇA E INFORME QUE SERÁ REALIZADA A MEDIDA DA PRESSÃO, PESO,
                                                                ALTURA E CIRCUNFERÊNCIA ABDOMINAL E AINDA AVALIAÇÃO DOS PÉS.
                                                            </p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "851226950" -->
                                                    <fieldset>
                                                        <legend for="851226950">SÓ PARA MULHERES</legend>
                                                        <div class="form-group">
                                                            <p class="help-block">
                                                                As próximas perguntas são importantes para conhecer aspectos específicos da saúde das mulheres.
                                                                Vamos falar primeiro sobre a sua menstruação.
                                                            </p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "228672153" -->
                                                    <fieldset>
                                                        <legend for="228672153">111. Que idade a Sra. tinha quando menstruou pela primeira vez?</legend>
                                                        <div class="form-group">
                                                            <input id="1688044792" type="text" name="entry.1688044792" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "466692556" -->
                                                    <fieldset>
                                                        <legend for="466692556">112. A Sra. ainda menstrua?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1537143364" value="Sim (PULE PARA A QUESTÃO 115)" >
                                                                    Sim (PULE PARA A QUESTÃO 115)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1537143364" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1463117118" -->
                                                    <fieldset>
                                                        <legend for="1463117118"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "2095798867" -->
                                                    <fieldset>
                                                        <legend for="2095798867">113. Que idade a Sra. tinha quando sua menstruação parou definitivamente?</legend>
                                                        <div class="form-group">
                                                            <input id="559461560" type="text" name="entry.559461560" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "10446701" -->
                                                    <fieldset>
                                                        <legend for="10446701">114. Por que não menstrua mais? (LEIA AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.777971883" value="1. Menopausa natural" >
                                                                    1. Menopausa natural
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.777971883" value="2. Cirurgia para retirada de útero (histerectomia)" >
                                                                    2. Cirurgia para retirada de útero (histerectomia)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.777971883" value="3. Cirurgia para retirada de dois ovários" >
                                                                    3. Cirurgia para retirada de dois ovários
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.777971883" value="4. Cirurgia para retirada de dois ovários e útero" >
                                                                    4. Cirurgia para retirada de dois ovários e útero
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.777971883" value="5. Outros tratamentos (hormônios, quimioterapia ou radiação)" >
                                                                    5. Outros tratamentos (hormônios, quimioterapia ou radiação)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.777971883" value="__other_option__" >
                                                                </label>
                                                                <input type="text" name="entry.777971883.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1333779959" -->
                                                    <fieldset>
                                                        <legend for="1333779959"></legend>
                                                        <div class="form-group">
                                                            <p class="help-block">Agora vamos falar sobre gravidez. </p>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1579479583" -->
                                                    <fieldset>
                                                        <legend for="1579479583">115. A Sra. já esteve grávida? Considere todas as gestações, incluindo aquelas que resultaram em filho nascido vivo ou morto, em aborto espontâneo/perda, aborto provocado e gravidez ectópica/nas trompas.</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.532808638" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.532808638" value="Não (PULE PARA A QUESTÃO 122)" >
                                                                    Não (PULE PARA A QUESTÃO 122)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "71448508" -->
                                                    <fieldset>
                                                        <legend for="71448508"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1473491217" -->
                                                    <fieldset>
                                                        <legend for="1473491217">116. Que idade a Sra. tinha quando engravidou pela primeira vez?</legend>
                                                        <div class="form-group">
                                                            <input id="716741442" type="text" name="entry.716741442" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "29748649" -->
                                                    <fieldset>
                                                        <legend for="29748649">117. Considerando todas as suas gestações, quantas terminaram com Nascidos-vivos:</legend>
                                                        <div class="form-group">
                                                            <input id="228366378" type="text" name="entry.228366378" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1801730951" -->
                                                    <fieldset>
                                                        <legend for="1801730951">118. Considerando todas as suas gestações, quantas terminaram com Nascidos-mortos:</legend>
                                                        <div class="form-group">
                                                            <input id="2081165557" type="text" name="entry.2081165557" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "100184235" -->
                                                    <fieldset>
                                                        <legend for="100184235">119. Considerando todas as suas gestações, quantas terminaram com Abortos:</legend>
                                                        <div class="form-group">
                                                            <input id="609535935" type="text" name="entry.609535935" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "449751781" -->
                                                    <fieldset>
                                                        <legend for="449751781">120. Considerando todas as suas gestações, quantas terminaram com outras ocorrências como gravidez tubária (nas trompas), mola, etc.)</legend>
                                                        <div class="form-group">
                                                            <input id="1329476452" type="text" name="entry.1329476452" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "717769480" -->
                                                    <fieldset>
                                                        <legend for="717769480">121. Apenas confirmando o número total de vezes que a Sra. engravidou foi  |_| _| gestações</legend>
                                                        <div class="form-group">
                                                            <input id="136935965" type="text" name="entry.136935965" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "566183652" -->
                                                    <fieldset>
                                                        <legend for="566183652"></legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1685803382" -->
                                                    <fieldset>
                                                        <legend for="1685803382">122. Mantendo relações sexuais com frequência, alguma vez a Sra. já tentou engravidar durante um ano completo ou mais e não conseguiu?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.763093870" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.763093870" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "164107886" -->
                                                    <fieldset>
                                                        <legend for="164107886">123. Algum médico já lhe deu o diagnóstico de síndrome de ovários policísticos? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1557059473" value="Sim, com base em exame clínico" >
                                                                    Sim, com base em exame clínico
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1557059473" value="Sim, confirmado por ultrassom" >
                                                                    Sim, confirmado por ultrassom
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1557059473" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1053579587" -->
                                                    <fieldset>
                                                        <legend for="1053579587">124. A Sra. fez Ligadura/laqueadura de trompas (esterilização feminina)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1979365676" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1979365676" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1480250430" -->
                                                    <fieldset>
                                                        <legend for="1480250430">125. O seu parceiro fez vasectomia (esterilização masculina)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1127102631" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1127102631" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "765483600" -->
                                                    <fieldset>
                                                        <legend for="765483600">126. A Sra. (ou seu marido/parceiro) usa ou já usou algum outro método para evitar a gravidez?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.411709729" value="Sim" >
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.411709729" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "437050373" -->
                                                    <fieldset>
                                                        <legend for="437050373">127 Qual método anticoncepcional que a Sra. (ou seu marido/parceiro) usa ou usou? Se for o caso, escolha mais de uma opção de resposta. (MOSTRE A LISTA NO CELULAR)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="1. Pílula (comprimido oral)" >
                                                                    1. Pílula (comprimido oral)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="2. Injeções contraceptivas" >
                                                                    2. Injeções contraceptivas
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="3. Implante hormonal" >
                                                                    3. Implante hormonal
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="4. Anel (contraceptivo hormonal intravaginal)" >
                                                                    4. Anel (contraceptivo hormonal intravaginal)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="5. DIU com hormônio (Mirena)" >
                                                                    5. DIU com hormônio (Mirena)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="6. DIU sem hormônio" >
                                                                    6. DIU sem hormônio
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="7. DIU não especificado" >
                                                                    7. DIU não especificado
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="8. Camisinha masculina (condom)" >
                                                                    8. Camisinha masculina (condom)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="9. Camisinha feminina" >
                                                                    9. Camisinha feminina
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.2117919293" value="__other_option__" >
                                                                </label>
                                                                <input type="text" name="entry.2117919293.other_option_response" placeholder="custom value">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1921833558" -->
                                                    <fieldset>
                                                        <legend for="1921833558">128. A Sra. apresentou perda urinária semanal nos últimos três meses? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.667963032" value="Não" >
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.667963032" value="Sim (APLIQUE OS QUESTIONÁRIOS: ICIQ-SF E QUESTIONÁRIO DE QUALIDADE DE VIDA EM INCONTINÊNCIA URINÁRIA (KHQ)" >
                                                                    Sim (APLIQUE OS QUESTIONÁRIOS: ICIQ-SF E QUESTIONÁRIO DE QUALIDADE DE VIDA EM INCONTINÊNCIA URINÁRIA (KHQ)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "title" id: "132237654" -->
                                                    <fieldset>
                                                        <legend for="132237654">SE A PARTICIPANTE RESPONDEU NÃO, AGRADEÇA E INFORME QUE SERÁ REALIZADA A MEDIDA DA PRESSÃO, PESO,ALTURA E CIRCUNFERÊNCIA ABDOMINAL E AINDA AVALIAÇÃO DOS PÉS.</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->


                                                <!-- QUEST. PRESSÃO ARTERIAL -->
                                                <form action="https://docs.google.com/forms/d/e/1FAIpQLSfWsYEhmftz414Bt0TZak4Vgt17zftjFTPlDWqogW7v111qNA/formResponse"
                                                    target="_self"
                                                    id="bootstrapForm"
                                                    method="POST">
                                                    <fieldset>
                                                        <h2>Questionário Pressão Arterial<br><small></small></h2>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1918083725" -->
                                                    <fieldset>
                                                        <legend for="1918083725">ID NÚMERO</legend>
                                                        <div class="form-group">
                                                            <input id="601032914" type="text" name="entry.601032914" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "409697099" -->
                                                    <fieldset>
                                                        <legend for="409697099">Equipe</legend>
                                                        <div class="form-group">
                                                            <input id="2066062532" type="text" name="entry.2066062532" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1886262024" -->
                                                    <fieldset>
                                                        <legend for="1886262024">Microárea</legend>
                                                        <div class="form-group">
                                                            <input id="1578044623" type="text" name="entry.1578044623" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "296535288" -->
                                                    <fieldset>
                                                        <legend for="296535288">Família:</legend>
                                                        <div class="form-group">
                                                            <input id="384524265" type="text" name="entry.384524265" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1335986316" -->
                                                    <fieldset>
                                                        <legend for="1335986316">Individual: </legend>
                                                        <div class="form-group">
                                                            <input id="1691254307" type="text" name="entry.1691254307" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1015508543" -->
                                                    <fieldset>
                                                        <legend for="1015508543">Participante</legend>
                                                        <div class="form-group">
                                                            <input id="307926517" type="text" name="entry.307926517" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "1033906013" -->
                                                    <fieldset>
                                                        <legend for="1033906013">Data do exame</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1649703177_date" placeholder="14/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "date" id: "1657941971" -->
                                                    <fieldset>
                                                        <legend for="1657941971">Data de nascimento</legend>
                                                        <div class="form-group">
                                                            <input type="date" id="1463869021_date" placeholder="14/09/2021" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "1386374066" -->
                                                    <fieldset>
                                                        <legend for="1386374066">Gênero</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.628919324" value="Masculino" required>
                                                                    Masculino
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.628919324" value="Feminino" required>
                                                                    Feminino
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1842577824" -->
                                                    <fieldset>
                                                        <legend for="1842577824">Nome do aferidor</legend>
                                                        <div class="form-group">
                                                            <input id="301818559" type="text" name="entry.301818559" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1253729882" -->
                                                    <fieldset>
                                                        <legend for="1253729882">Comprimento do Braço Direito (EM CENTÍMETROS)</legend>
                                                        <div class="form-group">
                                                            <input id="1187845133" type="text" name="entry.1187845133" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "518951931" -->
                                                    <fieldset>
                                                        <legend for="518951931">Circunferência do braço direito (EM CENTÍMETROS)</legend>
                                                        <div class="form-group">
                                                            <input id="1229024946" type="text" name="entry.1229024946" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "section" id: "1274576282" -->
                                                    <fieldset>
                                                        <legend for="1274576282">Pressão arterial sentada no braço direito</legend>
                                                        <div class="form-group">
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "977499308" -->
                                                    <fieldset>
                                                        <legend for="977499308">1. Tipo de manguito?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1768243175" value="1. Adulto pequeno – (Circunferência braço &lt;27cm)" required>
                                                                    1. Adulto pequeno – (Circunferência braço &lt;27cm)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1768243175" value="2. Adulto – (Circunferência braço 27-33cm)" required>
                                                                    2. Adulto – (Circunferência braço 27-33cm)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.1768243175" value="3. Adulto grande – (Circunferência braço &gt;33cm)" required>
                                                                    3. Adulto grande – (Circunferência braço &gt;33cm)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "choices" id: "2100385868" -->
                                                    <fieldset>
                                                        <legend for="2100385868">2. Marca manguito</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.532988329" value="Omron" required>
                                                                    Omron
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="entry.532988329" value="Aneróide" required>
                                                                    Aneróide
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1378547559" -->
                                                    <fieldset>
                                                        <legend for="1378547559">3. Pressão arterial sistólica 1:</legend>
                                                        <div class="form-group">
                                                            <input id="584293479" type="text" name="entry.584293479" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "626806954" -->
                                                    <fieldset>
                                                        <legend for="626806954">4. Pressão arterial diastólica 1:</legend>
                                                        <div class="form-group">
                                                            <input id="1004267518" type="text" name="entry.1004267518" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "308170499" -->
                                                    <fieldset>
                                                        <legend for="308170499">5. Pressão arterial sistólica 2: </legend>
                                                        <div class="form-group">
                                                            <input id="70645267" type="text" name="entry.70645267" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "889356926" -->
                                                    <fieldset>
                                                        <legend for="889356926">6. Pressão arterial diastólica 2:</legend>
                                                        <div class="form-group">
                                                            <input id="709884190" type="text" name="entry.709884190" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "616242286" -->
                                                    <fieldset>
                                                        <legend for="616242286">7. Pressão arterial sistólica 3:</legend>
                                                        <div class="form-group">
                                                            <input id="164095868" type="text" name="entry.164095868" class="form-control" required>
                                                        </div>
                                                    </fieldset>


                                                    <!-- Field type: "short" id: "1905721718" -->
                                                    <fieldset>
                                                        <legend for="1905721718">8. Pressão arterial diastólica 3:</legend>
                                                        <div class="form-group">
                                                            <input id="163968770" type="text" name="entry.163968770" class="form-control" required>
                                                        </div>
                                                    </fieldset>

                                                    <input type="hidden" name="fvv" value="1">
                                                    <input type="hidden" name="fbzx" value="-363617394934144221">
                                                    <!--
                                                        CAVEAT: In multipages (multisection) forms, *pageHistory* field tells to google what sections we've currently completed.
                                                        This usually starts as "0" for the first page, then "0,1" in the second page... up to "0,1,2..N" in n-th page.
                                                        Keep this in mind if you plan to change this code to recreate any sort of multipage-feature in your exported form.
                                                        We're setting this to the total number of pages in this form because we're sending all fields from all the section together.
                                                    -->
                                                    <input type="hidden" name="pageHistory" value="0,1">

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                                <!-- FIM -->
                                                
                                            </div>

                                        </div>          

                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- FIM FORMULÁRIO -->

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

            </div>
        </div>

    </div>
@endsection
