@extends('layouts.app')

@section('content')

<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script> -->


    <!-- MENU MOBILE (767PX) -->
    <div class="menu-lateral">
                <input type="checkbox" id="check">
                <label id="iconebar" for="check">
                    <i style="font-size: 25px;" aria-hidden="true" class="fas fa-bars"></i>
                </label>

                <div class="barra">
                    <div>
                        <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  ps--active-y" id="sidenav-main">
                            <div  class=" mt-5 collapse navbar-collapse w-auto max-height-vh-100 h-100 ps" id="sidenav-collapse-main">
                                <ul class=" navbar-nav navbar-menu-web" >
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('home')}}">
                                            <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class='bx bx-home-alt p-2' ></i>
                                            </div>
                                            <span class="nav-link-text ms-1">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('usuario',['usuario'=>$usuario->id])}}">
                                            <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class='bx bx-user-circle p-2'></i>
                                            </div>
                                            <span class="nav-link-text ms-1">Perfil</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class='bx bx-user-circle p-2'></i>
                                            </div>
                                            <span class="nav-link-text ms-1">Cuidado <br> dos P??s</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class='bx bx-user-circle p-2'></i>
                                            </div>
                                        Formul??rios
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #fff; margin-top: -16px; margin-left: 15px;">
                                            <li><a class="dropdown-item" href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}">Formul??rio Laborat??rio</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.iciq',['usuario'=>$usuario->id])}}">Formul??rio ICIQ-KHQ</a></li>
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formul??rio Individual</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formul??rio Familiar</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formul??rio Antropometria</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formul??rio MSNI</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formul??rio Press??o</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
    </div>
    <!-- FIM MENU MOBILE -->

    <div class="row">

        <!-- MENU MAIOR QUE 767PX -->
        <div  class=" col-md-3 col-lg-3 col-xl-2 menu-web" >
            <aside class=" sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  ps--active-y" id="sidenav-main">
                <div  class=" mt-5 collapse navbar-collapse w-auto max-height-vh-100 h-100 ps" id="sidenav-collapse-main">
                    <ul class=" navbar-nav navbar-menu-web " >
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">
                                <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class='bx bx-home-alt p-2' ></i>
                                </div>
                                <span class="nav-link-text ms-1">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('usuario',['usuario'=>$usuario->id])}}">
                                <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class='bx bx-user-circle p-2'></i>
                                </div>
                                <span class="nav-link-text ms-1">Perfil</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class='bx bx-user-circle p-2'></i>
                                </div>
                                <span class="nav-link-text ms-1">Cuidado <br> dos P??s</span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class='bx bx-user-circle p-2'></i>
                                </div>
                               Formul??rios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-top: -40px; margin-left: 15px;">
                                <li><a class="dropdown-item" href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}">Formul??rio Laborat??rio</a></li>
                                <li><a class="dropdown-item" href="{{route('form.iciq',['usuario'=>$usuario->id])}}">Formul??rio ICIQ-KHQ</a></li>
                                <li><a class="dropdown-item nav-link active" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formul??rio Individual</a></li>
                                <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formul??rio Familiar</a></li>
                                <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formul??rio Antropometria</a></li>
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formul??rio MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formul??rio Press??o</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>         
        </div>  
        <!-- FIM MENU MAIOR QUE 767PX --> 
            

        <div class="col-md-9 col-lg-10 col-xl-10 col-12 col-painel-header">
                <div class="container painel-controle" >
                    <div class="row justify-content-center row-painel-controle">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header"> 
                                    <h2>{{$usuario->name}}</h2>
                                </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif         

                                    <fieldset>
                                       <h2>Question??rio Individual<br><small></small></h2>
                                    </fieldset>                          

                                    <div class="accordion-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 mx-auto">
                                                    <div class="accordion" id="accordionRental">

                                                        <div class="accordion-item mb-3">
                                                                <div class="progress-wrapper">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-md font-weight-bold">
                                                                                Quatidade de Perguntas Respondidas:
                                                                              
                                                                                {{number_format($formindividual?$contadorformulario1/$formindividual->qtdperguntas*100:0)}}%

                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="{{$contadorformulario1}}" aria-valuemin="0" aria-valuemax="{{$formindividual?$formindividual->qtdperguntas:0}}" style="width: {{$formindividual?$contadorformulario1/$formindividual->qtdperguntas*100:0}}%;"></div>
                                                                    </div>
                                                                </div>
                                                            <h5 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button border font-weight-bold collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                                    PARTE 1
                                                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                </button>
                                                            </h5>
                                                            
                                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionRental" style="">
                                                                <div class="accordion-body text-sm opacity-8">
                                                                    <!-- 1 - FORMULARIO -->
                                                                    <form action="{{route('post.form.individual',['usuario'=>$usuario->id])}}" id="form1" method="POST">
                                                                                    @csrf
                                                                                    <fieldset>
                                                                                        <legend class="mt-3">1. Nome do entrevistador</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual1" type="text" value="1. Nome do entrevistador:">
                                                                                            <input type="text" name="respostaindividual1" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual1:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset> 
                                                                                        <legend>2. Data da entrevista</legend>
                                                                                        <div class="form-group">
                                                                                        <input hidden name="perguntaindividual2" type="text" value="2. Data da entrevista:">
                                                                                            <input type="date" name="respostaindividual2" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual2:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset>
                                                                                        <br>
                                                                                        <div class="form-group">
                                                                                            <h4>Vamos come??ar com alguns de seus dados pessoais</h4>
                                                                                            {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual79=='Sim'?'checked':'':''}}
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    
                                                                                    <fieldset>
                                                                                        <legend class="mt-0">3. Voc?? tem Smartphone?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual3" type="text" value="3. Voc?? tem Smartphone:">
                                                                                                    <input type="radio" name="respostaindividual3" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual3=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual3" value="N??o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual3=='N??o'?'checked':'':''}}>
                                                                                                    N??o
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset>
                                                                                        <br>
                                                                                        <div class="form-group">
                                                                                            <h4>
                                                                                                As pr??ximas perguntas se referem ?? sua hist??ria pessoal ou suas condi????es de vida
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>
                                
                                                                                    
                                                                                    <fieldset id="respostaindividual4"> 
                                                                                        <legend class="mt-0">4. Voc?? sabe ler e escrever?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual4" type="text" value="16. Voc?? sabe ler e escrever:">
                                                                                                    <input type="radio" id="respostaindividual4" name="respostaindividual4" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual4=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual4" name="respostaindividual4" value="N??o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual4=='N??o'?'checked':'':''}}>
                                                                                                    N??o ( PULAR PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual5" >
                                                                                        <legend>5. Voc?? aprendeu a ler na escola?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual5" type="text" value="17. Voc?? aprendeu a ler na escola:">
                                                                                                    <input type="radio" id="respostaindividual5" name="respostaindividual5" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual5=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual5" name="respostaindividual5" value="N??o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual5=='N??o'?'checked':'':''}}>
                                                                                                    N??o ( PULAR PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual6" >
                                                                                        <legend>6. Voc?? terminou o primeiro grau?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual6" type="text" value="19. Voc?? terminou o primeiro grau:">
                                                                                                    <input type="radio" id="respostaindividual6" name="respostaindividual6" value="N??o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual6=='N??o'?'checked':'':''}}>
                                                                                                    N??o
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual6" name="respostaindividual6" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual6=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual7" >
                                                                                        <legend>7. Qual a ??ltima s??rie/ano cursada(o) com aprova????o? (A PARTIR DE 2009 S??O 9 ANOS INICIANDO COM 6 ANOS DE IDADE, ANTES DE 2009 ERAM 8 SERIES INICIANDO COM 7 ANOS - AP??S RESPONDER PULAR PARA O HLS-14)</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual7" type="text" value="18. Qual a ??ltima s??rie/ano cursada(o) com aprova????o? (A PARTIR DE 2009 S??O 9 ANOS INICIANDO COM 6 ANOS DE IDADE, ANTES DE 2009 ERAM 8 SERIES INICIANDO COM 7 ANOS - AP??S RESPONDER PULAR PARA O HLS-14):">
                                                                                                    <input type="radio"  name="respostaindividual7" value="1?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='1?? S??rie/ano'?'checked':'':''}}>
                                                                                                    1?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="2?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='2?? S??rie/ano'?'checked':'':''}}>
                                                                                                    2?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="3?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='3?? S??rie/ano'?'checked':'':''}}>
                                                                                                    3?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="4?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='4?? S??rie/ano'?'checked':'':''}}>
                                                                                                    4?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="5?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='5?? S??rie/ano'?'checked':'':''}}>
                                                                                                    5?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="6?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='6?? S??rie/ano'?'checked':'':''}}>
                                                                                                    6?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="7?? S??rie/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='7?? S??rie/ano'?'checked':'':''}}>
                                                                                                    7?? S??rie/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="8?? ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='8?? ano'?'checked':'':''}}>
                                                                                                    8?? ano
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual8" >
                                                                                        <legend>8. Qual seu grau de instru????o?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual8" type="text" value="20. Qual seu grau de instru????o:">
                                                                                                    <input type="radio" id="respostaindividual8"  name="respostaindividual8" value="1 grau completo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='1 grau completo'?'checked':'':''}}>
                                                                                                    1?? grau completo (PULE PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="2 grau incompleto" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='2 grau incompleto'?'checked':'':''}}>
                                                                                                    2?? grau incompleto (PULE PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="2?? grau completo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='2?? grau completo'?'checked':'':''}}>
                                                                                                    2?? grau completo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="Universit??rio incompleto" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='Universit??rio incompleto'?'checked':'':''}}>
                                                                                                    Universit??rio incompleto
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="Universit??rio completo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='Universit??rio completo'?'checked':'':''}}>
                                                                                                    Universit??rio completo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="P??s-gradua????o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='P??s-gradua????o'?'checked':'':''}}>
                                                                                                    P??s-gradua????o
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual9" >
                                                                                        <legend>9. Com que idade voc?? terminou o 2?? grau (N??O ACEITAR N??MERO &lt; 14)</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual9" type="text" value="21. Com que idade voc?? terminou o 2?? grau (N??O ACEITAR N??MERO 14):">
                                                                                            <input type="text" id="respostaindividual9" name="respostaindividual9" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual9:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual10">
                                                                                        <br>
                                                                                        <h3>Question??rio 14 - ITEMS HEALTH LITERACY SCALE (HLS-14)</h3>
                                                                                        <div class="form-group">
                                                                                            <h4>Nesse bloco as quest??es est??o relacionadas a sua capacidade acessar 
                                                                                                e utilizar informa????es de sa??de. N??o existem respostas certas ou erradas, 
                                                                                                voc?? deve escolher apenas uma das alternativas de resposta. (MOSTRE O CART??O RESPOSTA)
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual10">
                                                                                        <br><br>
                                                                                        <div class="form-group">
                                                                                            <h4>
                                                                                                Quando voc?? l?? receitas m??dicas ou bulas de rem??dio, o quanto voc?? concorda ou discorda 
                                                                                                com as seguintes afirma????es:
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual10">
                                                                                        <legend class="mt-0">10. "EU ENCONTRO PALAVRAS QUE N??O CONSIGO LER."</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual10" type="text" value="22. EU ENCONTRO PALAVRAS QUE N??O CONSIGO LER:">
                                                                                                    <input type="radio" id="respostaindividual10" name="respostaindividual10" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual10=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual10" name="respostaindividual10" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual10=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual10" name="respostaindividual10" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual10=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual10" name="respostaindividual10" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual10=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual10" name="respostaindividual10" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual10=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual11">
                                                                                        <legend>11. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o) &quot;O TAMANHO DA LETRA ?? MUITO PEQUENA PARA MIM&quot; (apesar de eu usar ??culos).</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual11" type="text" value="23. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o):">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual11" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual11=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual11" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual11=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual11" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual11=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual11" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual11=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual11" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual11=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual12">
                                                                                        <legend>12. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o) &quot;O CONTE??DO ?? MUITO DIF??CIL DE ENTENDER.&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual12" type="text" value="24. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o) O CONTE??DO ?? MUITO DIF??CIL DE ENTENDER:">
                                                                                                    <input type="radio" name="respostaindividual12" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual12=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual12" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual12=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual12" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual12=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual12" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual12=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual12" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual12=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual13">
                                                                                        <legend>13. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o) &quot;DEMORO MUITO PARA LER AS INSTRU????ES&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual13" type="text" value="25. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o) DEMORO MUITO PARA LER AS INSTRU????ES:">
                                                                                                    <input type="radio" name="respostaindividual13" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual13=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual13" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual13=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual13" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual13=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual13" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual13=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual13" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual13=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual14">
                                                                                        <legend>14. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o) &quot;EU PRECISO QUE ALGU??M ME AJUDE A LER&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual14" type="text" value="26. (Quando voc?? l?? receitas m??dicas ou bulas de rem??dio o quanto voc?? concorda com a afirma????o)  EU PRECISO QUE ALGU??M ME AJUDE A LER.:">
                                                                                                    <input type="radio" name="respostaindividual14" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual14=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual14" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual14=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual14" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual14=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual14" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual14=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual14" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual14=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual15">
                                                                                        <br>
                                                                                        <div class="form-group">
                                                                                        <h4>
                                                                                            Se voc?? foi diagnosticado com uma doen??a, 
                                                                                            e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda 
                                                                                            ou discorda com as seguintes afirma????es:
                                                                                        </h4>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual15">
                                                                                        <legend>15. Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a 
                                                                                            e seu tratamento, de que maneira voc?? concorda com a afirma????o &quot;EU PROCURO INFORMA????ES 
                                                                                            EM V??RIOS LUGARES&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                <input hidden name="perguntaindividual15" type="text" value="27. Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a 
                                                                                            e seu tratamento, de que maneira voc?? concorda com a afirma????o &quot;EU PROCURO INFORMA????ES 
                                                                                            EM V??RIOS LUGARES&quot;.">
                                                                                                    <input type="radio" name="respostaindividual15" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual15=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual15" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual15=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual15" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual15=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual15" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual15=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual15" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual15=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual16">
                                                                                        <legend>16. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU ENCONTRO A INFORMA????O QUE PRECISO&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual16" type="text" value="28. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU ENCONTRO A INFORMA????O QUE PRECISO&quot;:">
                                                                                                    <input type="radio" name="respostaindividual16" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual16=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual16" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual16=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual16" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual16=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual16" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual16=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual16" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual16=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual17">
                                                                                        <legend>17. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU ENTENDO A INFORMA????O ENCONTRADA&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual17" type="text" value="29. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU ENTENDO A INFORMA????O ENCONTRADA&quot;:">
                                                                                                    <input type="radio" name="respostaindividual17" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual17=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual17" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual17=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual17" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual17=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual17" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual17=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual17" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual17=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual18">
                                                                                        <legend>18. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU FALO MINHA OPINI??O SOBRE A DOEN??A AO MEU M??DICO, FAMILIARES OU AMIGOS&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual18" type="text" value="30. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU FALO MINHA OPINI??O SOBRE A DOEN??A AO MEU M??DICO, FAMILIARES OU AMIGOS&quot;:">
                                                                                                    <input type="radio" name="respostaindividual18" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual18=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual18" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual18=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual18" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual18=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual18" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual18=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual18" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual18=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual19">
                                                                                        <legend>19. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU COLOCO EM PR??TICA AS INFORMA????ES ENCONTRADAS NO MEU DIA A DIA.&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual19" type="text" value="31. (Se voc?? foi diagnosticado com uma doen??a, e n??o tem muitas informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com a afirma????o) &quot;EU COLOCO EM PR??TICA AS INFORMA????ES ENCONTRADAS NO MEU DIA A DIA.&quot;:">
                                                                                                    <input type="radio" name="respostaindividual19" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual19=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual19" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual19=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual19" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual19=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual19" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual19=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual19" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual19=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual20">
                                                                                        <br>
                                                                                        <h4>
                                                                                            Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com rela????o as seguintes perguntas:
                                                                                        </h4>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual20">
                                                                                        <legend class="mt-0">20. Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es 
                                                                                            sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o &quot;EU SEI QUANDO 
                                                                                            AS INFORMA????ES S??O BOAS PARA O MEU CASO&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                <input hidden name="perguntaindividual20" type="text" value="32. Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda"> 
                                                                                                    <input  type="radio" name="respostaindividual20" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual20=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual20" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual20=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual20" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual20=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual20" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual20=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual20" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual20=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual21">
                                                                                        <legend>21. (Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o) &quot;EU LEVO EM CONTA SE AS INFORMA????ES S??O VERDADEIRAS&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual21" type="text" value="33. (Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o) &quot;EU LEVO EM CONTA SE AS INFORMA????ES S??O VERDADEIRAS&quot;:">
                                                                                                    <input  type="radio" name="respostaindividual21" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual21=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual21" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual21=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual21" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual21=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual21" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual21=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual21" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual21=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual22">
                                                                                        <legend>22. (Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o) &quot;EU TENHO CONHECIMENTO PARA JULGAR SE AS INFORMA????ES S??O CONFI??VEIS&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual22" type="text" value="34. (Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o) &quot;EU TENHO CONHECIMENTO PARA JULGAR SE AS INFORMA????ES S??O CONFI??VEIS&quot;:">
                                                                                                    <input  type="radio" name="respostaindividual22" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual22=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual22" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual22=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual22" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual22=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual22" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual22=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual22" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual22=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual23">
                                                                                        <legend>23. (Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o) &quot;EU PEGO INFORMA????ES QUE ME AJUDAM A TOMAR DECIS??ES DE COMO MELHORAR MINHA SA??DE&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual23" type="text" value="35. (Se voc?? for diagnosticado com uma doen??a e voc?? pode conseguir mais informa????es sobre a doen??a e seu tratamento, de que maneira voc?? concorda com  a afirma????o) &quot;EU PEGO INFORMA????ES QUE ME AJUDAM A TOMAR DECIS??ES DE COMO MELHORAR MINHA SA??DE&quot;:">
                                                                                                    <input  type="radio" name="respostaindividual23" value="Concordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual23=='Concordo muito'?'checked':'':''}}>
                                                                                                    Concordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual23" value="Concordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual23=='Concordo'?'checked':'':''}}>
                                                                                                    Concordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual23" value="Nem concordo, nem discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual23=='Nem concordo, nem discordo'?'checked':'':''}}>
                                                                                                    Nem concordo, nem discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual23" value="Discordo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual23=='Discordo'?'checked':'':''}}>
                                                                                                    Discordo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual23" value="Discordo muito" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual23=='Discordo muito'?'checked':'':''}}>
                                                                                                    Discordo muito
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset>
                                                                                        <div class="form-group">
                                                                                            <h4>
                                                                                                Neste bloco, as perguntas se referem aos aspectos de seu trabalho.
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual24">
                                                                                        <legend class="mt-0">24. Voc?? ?? um trabalhador ativo ou aposentado?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual24" type="text" value="36. Voc?? ?? um trabalhador ativo ou aposentado:">
                                                                                                    <input type="radio" name="respostaindividual24" value="Ativo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual24=='Ativo'?'checked':'':''}}>
                                                                                                    Ativo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual24" value="Aposentado" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual24=='Aposentado'?'checked':'':''}}>
                                                                                                    Aposentado
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual25">
                                                                                        <legend>25. Voc?? ?? ou era: (LER AS ALTERNATIVAS)</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual25" type="text" value="37. Voc?? ?? ou era: (LER AS ALTERNATIVAS):">
                                                                                                    <input type="radio" name="respostaindividual25" value="Empregado(a)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Empregado(a)'?'checked':'':''}}>
                                                                                                    Empregado(a)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Trabalha(ou) sem remunera????o"  {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Trabalha(ou) sem remunera????o'?'checked':'':''}}>
                                                                                                    Trabalha(ou) sem remunera????o
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Trabalha(ou) por conta pr??pria" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Trabalha(ou) por conta pr??pria'?'checked':'':''}}>
                                                                                                    Trabalha(ou) por conta pr??pria
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Empregador(a) - com menos de 25 empregados" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Empregador(a) - com menos de 25 empregados'?'checked':'':''}}>
                                                                                                    Empregador(a) - com menos de 25 empregados
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Empregador(a) - com 25 empregados ou mais" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Empregador(a) - com 25 empregados ou mais'?'checked':'':''}}>
                                                                                                    Empregador(a) - com 25 empregados ou mais
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Desempregado(a)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Desempregado(a)'?'checked':'':''}}>
                                                                                                    Desempregado(a)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Pensionista" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Pensionista'?'checked':'':''}}>
                                                                                                    Pensionista
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Dono(a) de casa" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Dono(a) de casa'?'checked':'':''}}>
                                                                                                    Dono(a) de casa
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Empregada(o) dom??stica(o)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Empregada(o) dom??stica(o)'?'checked':'':''}}>
                                                                                                    Empregada(o) dom??stica(o)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual26">
                                                                                        <legend>26. Sua atividade principal na maior parte de sua vida ?? ou foi em que setor: (MOSTRAR AS ALTERNATIVAS NO CELULAR).</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual26" type="text" value="38. Sua atividade principal na maior parte de sua vida ?? ou foi em que setor: (MOSTRAR AS ALTERNATIVAS NO CELULAR):">
                                                                                                    <input type="radio" name="respostaindividual26" value="no com??rcio" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no com??rcio'?'checked':'':''}}>
                                                                                                    no com??rcio
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na ind??stria" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no ind??stria'?'checked':'':''}}>
                                                                                                    na ind??stria
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na sa??de" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na sa??de'?'checked':'':''}}>
                                                                                                    na sa??de
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na educa????o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na educa????o'?'checked':'':''}}>
                                                                                                    na educa????o
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no transporte" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no transporte'?'checked':'':''}}>
                                                                                                    no transporte
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na cultura, comunica????o ou esporte" >{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na cultura, comunica????o ou esporte'?'checked':'':''}}
                                                                                                    na cultura, comunica????o ou esporte
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no setor de alimentos e culin??ria" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no setor de alimentos e culin??ria'?'checked':'':''}}>
                                                                                                    no setor de alimentos e culin??ria
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no artesanato" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no artesanato'?'checked':'':''}}>
                                                                                                    no artesanato
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no cuidado dom??stico" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no cuidado dom??stico'?'checked':'':''}}>
                                                                                                    no cuidado dom??stico
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na constru????o civil" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no constru????o civil'?'checked':'':''}}>
                                                                                                    na constru????o civil
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no setor de ??gua e energia" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no setor de ??gua e energia'?'checked':'':''}}>
                                                                                                    no setor de ??gua e energia
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="nas for??as armadas e pol??cias" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='nas for??as armadas e pol??cias'?'checked':'':''}}>
                                                                                                    nas for??as armadas e pol??cias
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no judici??rio" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no judici??rio'?'checked':'':''}}>
                                                                                                    no judici??rio
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no setor de manuten????o e repara????o" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no setor de manuten????o e repara????o'?'checked':'':''}}>
                                                                                                    no setor de manuten????o e repara????o
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na agricultura(lavoura ou planta????o de vegetais)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na agricultura(lavoura ou planta????o de vegetais)'?'checked':'':''}}>
                                                                                                    na agricultura(lavoura ou planta????o de vegetais)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no extrativismo mineral (garimpo)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no extrativismo mineral (garimpo)'?'checked':'':''}}>
                                                                                                    no extrativismo mineral (garimpo)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na pecu??ria (cria????o ou cuidado de rebanhos ou granjas)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na pecu??ria (cria????o ou cuidado de rebanhos ou granjas)'?'checked':'':''}}>
                                                                                                    na pecu??ria (cria????o ou cuidado de rebanhos ou granjas)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na pesca" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no pesca'?'checked':'':''}}>
                                                                                                    na pesca
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="outro - (especifique)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='outro - (especifique)'?'checked':'':''}}>
                                                                                                    outro - (especifique)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="individual27">
                                                                                        <legend class="mt-0">26 - Especifique</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaespecifique26" type="text" value="26 - Especifique:">
                                                                                            <input type="text" name="respostaespecifique26" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaespecifique26:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual27">
                                                                                        <legend>27. H?? quantos anos voc?? tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00)</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual27" type="text" value="39. H?? quantos anos voc?? tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00):">
                                                                                            <input type="text" name="respostaindividual27" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual27:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual28">
                                                                                        <legend>28. De um modo geral, em compara????o a pessoas da sua idade, como voc?? considera o seu estado de sa??de? (LER AS ALTERNATIVAS)</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual28" type="text" value="39. H?? quantos anos voc?? tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00):">
                                                                                                    <input type="radio" name="respostaindividual28" value="Muito bom" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual28=='Muito bom'?'checked':'':''}}>
                                                                                                    Muito bom
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual28" value="Bom" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual28=='Bom'?'checked':'':''}}>
                                                                                                    Bom
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual28" value="Regular" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual28=='Regular'?'checked':'':''}}>
                                                                                                    Regular
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual28" value="Ruim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual28=='Ruim'?'checked':'':''}}>
                                                                                                    Ruim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual28" value="Muito ruim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual28=='Muito ruim'?'checked':'':''}}>
                                                                                                    Muito ruim
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <div class="text-center">
                                                                                        <button class="btn btn-primary mt-5" type="submit" id="nav-profile-tab" >SALVAR E CONTINUAR </button>
                                                                                    </div>
                                                                    </form>
                                                                    <!-- FIM -->    
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item mb-3">
                                                                <div class="progress-wrapper">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-md font-weight-bold">
                                                                                Quatidade de Perguntas Respondidas:
                                                                              
                                                                                {{number_format($formindividual2?$contadorformulario2/$formindividual2->qtdperguntas*100:0)}}%

                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="{{$contadorformulario2}}" aria-valuemin="0" aria-valuemax="{{$formindividual2?$formindividual2->qtdperguntas:0}}" style="width: {{$formindividual2?$contadorformulario2/$formindividual2->qtdperguntas*100:0}}%;"></div>
                                                                    </div>
                                                                </div>
                                                            <h5 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button border font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    PARTE 2
                                                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                </button>
                                                            </h5>
                                                            
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionRental">
                                                            <div class="accordion-body text-sm opacity-8">
                                                                <!-- 2 - FORMULARIO -->
                                                                <form action="{{route('post.form.individual.primeiro',['usuario'=>$usuario->id])}}" id="form1" method="POST">
                                                                            @csrf
                                                                                <fieldset>
                                                                                    <div class="form-group">
                                                                                        <br>
                                                                                        <h4>
                                                                                            Alguma vez um m??dico lhe informou que voc?? teve ou tem alguma das seguintes doen??as?
                                                                                        </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual29">
                                                                                    <legend class="mt-0">29. Hipertens??o (Press??o alta?)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual29" type="text" value="41. Hipertens??o (Press??o alta?):">
                                                                                                <input type="radio" name="respostaindividual29" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual29=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual29" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual29=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual30">
                                                                                    <legend>30. Infarto do mioc??rdio (ataque do cora????o)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual30" type="text" value="42. Infarto do mioc??rdio (ataque do cora????o):">
                                                                                                <input type="radio" name="respostaindividual30" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual30=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual30" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual30=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual31">
                                                                                    <legend>31. Angina de peito (isquemia ou m?? circula????o no cora????o)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual31" type="text" value="43. Angina de peito (isquemia ou m?? circula????o no cora????o):">
                                                                                                <input type="radio" name="respostaindividual31" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual31=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual31" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual31=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual32">
                                                                                    <legend>32. Insufici??ncia card??aca (cora????o grande ou dilatado)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual32" type="text" value="44. Insufici??ncia card??aca (cora????o grande ou dilatado):">
                                                                                                <input type="radio" name="respostaindividual32" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual32=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual32" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual32=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual33">
                                                                                    <legend>33. Febre reum??tica? (v??lvula entupida ou sopro no cora????o que exige controle m??dico e, quando jovem, uso de antibi??tico por muitos anos)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual33" type="text" value="45. Febre reum??tica? (v??lvula entupida ou sopro no cora????o que exige controle m??dico e, quando jovem, uso de antibi??tico por muitos anos):">
                                                                                                <input type="radio" name="respostaindividual33" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual33=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual33" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual33=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual34">
                                                                                    <legend>34. Doen??a de Chagas?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual34" type="text" value="25. Doen??a de Chagass:">
                                                                                                <input type="radio" name="respostaindividual34" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual34=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual34" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual34=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual35">
                                                                                    <legend>35. Acidente vascular cerebral (derrame)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual35" type="text" value="26. Acidente vascular cerebral (derrame):">
                                                                                                <input type="radio" name="respostaindividual35" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual35=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual35" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual35=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual36">
                                                                                    <legend>36. Doen??a do rim (p. ex. insufici??ncia, pedra ou c??lculo, nefrite, doen??a polic??stica)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual36" type="text" value="27. Doen??a do rim (p. ex. insufici??ncia, pedra ou c??lculo, nefrite, doen??a polic??stica):">
                                                                                                <input type="radio" name="respostaindividual36" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual36=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual36" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual36=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual37">
                                                                                    <legend>37. Hansen??ase?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual37" type="text" value="28. Hansen??ase:">
                                                                                                <input type="radio" name="respostaindividual37" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual37=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual37" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual37=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual38">
                                                                                    <legend>38. Tuberculose?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual38" type="text" value="29. Tuberculose:">
                                                                                                <input type="radio" name="respostaindividual38" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual38=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual38" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual38=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual39">
                                                                                    <legend>39. Mal??ria?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual39" type="text" value="30. Mal??ria:">
                                                                                                <input type="radio" name="respostaindividual39" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual39=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual39" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual39=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual40">
                                                                                    <legend>40. Dengue, Zica, Chikungunha?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual40" type="text" value="31. Dengue, Zica, Chikungunha:">
                                                                                                <input type="radio" name="respostaindividual40" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual40=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual40" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual40=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual41">
                                                                                    <legend>41. Febre amarela? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual41" type="text" value="32. Febre amarela:">
                                                                                                <input type="radio" name="respostaindividual41" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual41=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual41" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual41=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual42">
                                                                                    <legend>42. Leishmaniose? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual42" type="text" value="33. Leishmaniose:">
                                                                                                <input type="radio" name="respostaindividual42" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual42=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual42" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual42=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual43">
                                                                                    <legend>43. Trombose ou embolia?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual43" type="text" value="34. Trombose ou embolia:">
                                                                                                <input type="radio" name="respostaindividual43" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual43=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual43" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual43=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual44">
                                                                                    <legend>44. Enfisema, bronquite cr??nica ou doen??a pulmonar obstrutiva cr??nica (DPOC)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual44" type="text" value="35. Enfisema, bronquite cr??nica ou doen??a pulmonar obstrutiva cr??nica (DPOC):">
                                                                                                <input type="radio" name="respostaindividual44" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual44=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual44" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual44=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual45">
                                                                                    <legend>45. Asma (bronquite asm??tica)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual45" type="text" value="36. Asma (bronquite asm??tica):">
                                                                                                <input type="radio" name="respostaindividual45" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual45=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual45" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual45=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual46">
                                                                                    <legend>46. Artrite reumat??ide ou lupus eritematoso?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual46" type="text" value="37. Artrite reumat??ide ou lupus eritematoso:">
                                                                                                <input type="radio" name="respostaindividual46" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual46=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual46" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual46=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual47">
                                                                                    <legend>47. Cirrose do f??gado, hepatite?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual47" type="text" value="38. Cirrose do f??gado, hepatite:">
                                                                                                <input type="radio" name="respostaindividual47" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual47=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual47" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual47=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual48">
                                                                                    <legend>48. C??ncer?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual48" type="text" value="39. C??ncer:">
                                                                                                <input type="radio" name="respostaindividual48" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual48=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual48" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual48=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual49">
                                                                                    <legend>49. COVID-19?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual49" type="text" value="40. COVID-19:">
                                                                                                <input type="radio" name="respostaindividual49" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual49" value="Sim, diagn??stico cl??nico, s?? pelos sintomas" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Sim, diagn??stico cl??nico, s?? pelos sintomas'?'checked':'':''}}>
                                                                                                Sim, diagn??stico cl??nico, s?? pelos sintomas
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual49" value="Sim, diagn??stico por RT-PCR ou exame com swab no nariz" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Sim, diagn??stico por RT-PCR ou exame com swab no nariz'?'checked':'':''}}>
                                                                                                Sim, diagn??stico por RT-PCR ou exame com swab no nariz
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual49" value="Sim, diagn??stico por sorologia ou exame do sangue" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Sim, diagn??stico por sorologia ou exame do sangue'?'checked':'':''}}>
                                                                                                Sim, diagn??stico por sorologia ou exame do sangue
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual50"> 
                                                                                    <legend>50. Voc?? foi vacinado (a) contra COVID-19?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual50" type="text" value="41. Voc?? foi vacinado (a) contra COVID-19:">
                                                                                                <input type="radio" id="respostaindividual50" name="respostaindividual50" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual50=='N??o'?'checked':'':''}}>
                                                                                                N??o ( PULAR PARA 52)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual50" name="respostaindividual50" value="Sim, s?? a primeira dose" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual50=='Sim, s?? a primeira dose'?'checked':'':''}}>
                                                                                                Sim, s?? a primeira dose ( PULAR PARA 52)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual50" name="respostaindividual50" value="Sim, as duas doses" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual50=='Sim, as duas doses'?'checked':'':''}}>
                                                                                                Sim, as duas doses
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual51">
                                                                                    <legend>51. Voc?? teve COVID-19 ap??s a segunda dose da vacina? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual51" type="text" value="42. Voc?? teve COVID-19 ap??s a segunda dose da vacina:">
                                                                                                <input type="radio" name="respostaindividual51" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual51=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual51" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual51=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset >
                                                                                    <div class="form-group">
                                                                                        <br>
                                                                                        <h4>Vamos falar sobre Diabetes e autocuidado</h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual52">
                                                                                    <legend class="mt-0">52. H?? quantos anos voc?? convive com o diabetes? (SE MENOR DO QUE 01 ANO MARQUE 00)</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual52" type="text" value="43. H?? quantos anos voc?? convive com o diabetes? (SE MENOR DO QUE 01 ANO MARQUE 00):">
                                                                                        <input type="text" name="respostaindividual52" class="form-control" value="{{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual52:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual53">
                                                                                    <legend>53. Voc?? j?? teve les??o ou ferida no p?? provocada pelo Diabetes?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual53" type="text" value="44. Voc?? j?? teve les??o ou ferida no p?? provocada pelo Diabetes:">
                                                                                                <input type="radio" name="respostaindividual53" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual53=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual53" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual53=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual54">
                                                                                    <legend>54. Em quantos dos ??ltimos SETE DIAS seguiu uma dieta saud??vel?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual54" type="text" value="45. Em quantos dos ??ltimos SETE DIAS seguiu uma dieta saud??vel:">
                                                                                            <input type="radio" name="respostaindividual54" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual54" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual54=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual55">
                                                                                    <legend>55. Durante o ??ltimo m??s, QUANTOS DIAS POR SEMANA, seguiu a orienta????o alimentar, dada por um profissional de sa??de?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual55" type="text" value="46. Durante o ??ltimo m??s, QUANTOS DIAS POR SEMANA, seguiu a orienta????o alimentar, dada por um profissional de sa??de:">
                                                                                            <input type="radio" name="respostaindividual55" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual55" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual55=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual56">
                                                                                    <legend>56. Em quantos dos ??ltimos SETE DIAS comeu cinco ou mais por????es de frutas e/ou vegetais?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual56" type="text" value="47. Em quantos dos ??ltimos SETE DIAS comeu cinco ou mais por????es de frutas e/ou vegetais:">
                                                                                            <input type="radio" name="respostaindividual56" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual56" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual56=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual57">
                                                                                    <legend>57. Em quantos dos ??ltimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou alimentos com leite integral ou derivados?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual57" type="text" value="48. Em quantos dos ??ltimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou alimentos com leite integral ou derivados:">
                                                                                            <input type="radio" name="respostaindividual57" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual57" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual57=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual58">
                                                                                    <legend>58. Em quantos dos ??ltimos sete dias comeu doces?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual58" type="text" value="50. Em quantos dos ??ltimos sete dias comeu doces:">
                                                                                            <input type="radio" name="respostaindividual58" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual58" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual58=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual59">
                                                                                    <legend>59. Em quantos dos ??ltimos SETE DIAS realizou atividade f??sica durante pelo menos 30 minutos (minutos totais de atividade cont??nua, inclusive andar)</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual59" type="text" value="51. Em quantos dos ??ltimos SETE DIAS realizou atividade f??sica durante pelo menos 30 minutos (minutos totais de atividade cont??nua, inclusive andar):">
                                                                                            <input type="radio" name="respostaindividual59" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual59" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual59=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual60">
                                                                                    <legend>60. Em quantos dos ??ltimos SETE DIAS praticou algum tipo de exerc??cio f??sico espec??fico (nadar, caminhar,andar de bicicleta), sem incluir suas atividades em casa ou em seu trabalho?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual60" type="text" value="52. Em quantos dos ??ltimos SETE DIAS praticou algum tipo de exerc??cio f??sico espec??fico (nadar, caminhar,andar de bicicleta), sem incluir suas atividades em casa ou em seu trabalho:">
                                                                                            <input type="radio" name="respostaindividual60" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual60" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual60=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual61">
                                                                                    <legend>61. Em quantos dos ??ltimos SETE DIAS examinou os seus p??s?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual61" type="text" value="53. Em quantos dos ??ltimos SETE DIAS examinou os seus p??s:">
                                                                                            <input type="radio" name="respostaindividual61" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual61" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual61=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual62">
                                                                                    <legend>62. Em quantos dos ??ltimos SETE DIAS examinou dentro dos sapatos antes de cal????-los?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual62" type="text" value="54. Em quantos dos ??ltimos SETE DIAS examinou dentro dos sapatos antes de cal????-los:">
                                                                                            <input type="radio" name="respostaindividual62" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual62" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual62=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual63">
                                                                                    <legend>63. Em quantos dos ??ltimos SETE DIAS secou os espa??os entre os dedos dos p??s depois de lav??-los?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual63" type="text" value="55. Em quantos dos ??ltimos SETE DIAS secou os espa??os entre os dedos dos p??s depois de lav??-los:">
                                                                                            <input type="radio" name="respostaindividual63" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual63" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual63=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual64">
                                                                                    <legend>64. Em quantos dos ??ltimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi recomendado?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual64" type="text" value="56. Em quantos dos ??ltimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi recomendado:">
                                                                                            <input type="radio" name="respostaindividual64" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual64" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual64=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual65">
                                                                                    <legend>65. Em quantos dos ??ltimos SETE DIAS tomou suas inje????es de insulina, conforme foi recomendado?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual65" type="text" value="57. Em quantos dos ??ltimos SETE DIAS tomou suas inje????es de insulina, conforme foi recomendado:">
                                                                                            <input type="radio" name="respostaindividual65" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual65" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual65=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual66">
                                                                                    <legend>66. Em quantos dos ??ltimos SETE DIAS tomou o n??mero indicado de comprimidos do diabetes?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual66" type="text" value="58. Em quantos dos ??ltimos SETE DIAS tomou o n??mero indicado de comprimidos do diabetes:">
                                                                                            <input type="radio" name="respostaindividual66" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual66" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual66=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual67">
                                                                                    <legend>67. Algum m??dico ou enfermeiro solicitou que voc?? realizasse em casa o exame de a????car no sangue na pontado dedo</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual67" type="text" value="59. Algum m??dico ou enfermeiro solicitou que voc?? realizasse em casa o exame de a????car no sangue na pontado dedo:">
                                                                                                <input type="radio" name="respostaindividual67" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual67=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual67" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual67=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual68">
                                                                                    <legend>68. Voc?? tem o aparelho para realizar o exame de a????car no sangue na ponta do dedo?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual68" type="text" value="60. Voc?? tem o aparelho para realizar o exame de a????car no sangue na ponta do dedo:">
                                                                                                <input type="radio" name="respostaindividual68" value="N??o" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual68=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual68" value="Sim" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual68=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual69">
                                                                                    <legend>69. Em quantos dos ??ltimos SETE DIAS avaliou o a????car no sangue?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual69" type="text" value="61. Em quantos dos ??ltimos SETE DIAS avaliou o a????car no sangue:">
                                                                                            <input type="radio" name="respostaindividual69" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual69" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual69=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual70">
                                                                                    <legend>70. Em quantos dos ??ltimos SETE DIAS avaliou o a????car no sangue o n??mero de vezes recomendado pelo m??dico ou enfermeiro?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual70" type="text" value="62. Em quantos dos ??ltimos SETE DIAS avaliou o a????car no sangue o n??mero de vezes recomendado pelo m??dico ou enfermeiro:">
                                                                                            <input type="radio" name="respostaindividual70" value="0" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='0'?'checked':'':''}}>
                                                                                            0
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="1" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='1'?'checked':'':''}}>
                                                                                            1
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="2" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='2'?'checked':'':''}}>
                                                                                            2
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="3" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='3'?'checked':'':''}}>
                                                                                            3
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="4" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='4'?'checked':'':''}}>
                                                                                            4
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="5" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='5'?'checked':'':''}}>
                                                                                            5
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="6" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='6'?'checked':'':''}}>
                                                                                            6
                                                                                        </label>
                                                                                        <label class="radio-inline">
                                                                                            <input type="radio" name="respostaindividual70" value="7" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual70=='7'?'checked':'':''}}>
                                                                                            7
                                                                                        </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </fieldset>
                                                                                <!-- FIM 2 - FORMUL??RIO INDIVIDUAL  -->

                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-5" type="submit" >SALVAR E CONTINUAR </button>
                                                                                </div>
                                                                </form>
                                                                <!-- FIM FORMUL??RIO 2 -->
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item mb-3">
                                                                <div class="progress-wrapper">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-md font-weight-bold">
                                                                                Quatidade de Perguntas Respondidas:
                                                                              
                                                                                {{number_format($formindividual3?$contadorformulario3/$formindividual3->qtdperguntas*100:0)}}%

                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="{{$contadorformulario3}}" aria-valuemin="0" aria-valuemax="{{$formindividual3?$formindividual3->qtdperguntas:0}}" style="width: {{$formindividual3?$contadorformulario3/$formindividual3->qtdperguntas*100:0}}%;"></div>
                                                                    </div>
                                                                </div>
                                                            <h5 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button border font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    PARTE 3
                                                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                </button>
                                                            </h5>
                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionRental">
                                                            <div class="accordion-body text-sm opacity-8">
                                                                <!-- 3 - FORMULARIO INDIVIDUAL  -->
                                                                <form action="{{route('post.form.individual.segundo',['usuario'=>$usuario->id])}}" id="form2" method="POST">
                                                                    @csrf
                                                                                <fieldset>
                                                                                    <h4 class="pt-5">Agora gostaria de fazer algumas perguntas sobre cansa??o ou falta de ar</h4>
                                                                                </fieldset>

                                                                                <fieldset id="respostaindividual71">
                                                                                    <legend>71. Voc?? consegue subir um lance de escadas de 8 degraus carregando peso (?? 10Kg) ou caminhar r??pido no terreno plano ou subir ladeiras sem ter que parar por cansa??o ou falta de ar?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual71" type="text" value="63. Voc?? consegue subir um lance de escadas de 8 degraus carregando peso (?? 10Kg) ou caminhar r??pido no terreno plano ou subir ladeiras sem ter que parar por cansa??o ou falta de ar:">
                                                                                                <input type="radio" id="respostaindividual71" name="respostaindividual71" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual71=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULE PARA QUEST??O 66)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual71" name="respostaindividual71" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual71=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual72">
                                                                                    <legend>72. Voc?? consegue caminhar devagar no terreno plano ou arrumar a casa ou tomar banho sem ter que parar por cansa??o ou falta de ar?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual72" type="text" value="64. Voc?? consegue caminhar devagar no terreno plano ou arrumar a casa ou tomar banho sem ter que parar por cansa??o ou falta de ar:">
                                                                                                <input type="radio" id="respostaindividual72" name="respostaindividual72" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual72=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULE PARA QUEST??O 66)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual72" name="respostaindividual72" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual72=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual73" >
                                                                                    <legend>73. Voc?? tem cansa??o ou falta de ar quando est?? comendo, sentado ou deitado?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual73" type="text" value="65. Voc?? tem cansa??o ou falta de ar quando est?? comendo, sentado ou deitado:">
                                                                                                <input type="radio" id="respostaindividual73" name="respostaindividual73" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual73=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual73" name="respostaindividual73" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual73=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual74">
                                                                                    <legend>74.  Voc?? tem sentido dor ou desconforto no peito (t??rax)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual74" type="text" value="66.  Voc?? tem sentido dor ou desconforto no peito (t??rax):">
                                                                                                <input type="radio" id="respostaindividual74" name="respostaindividual74" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual74=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULE PARA A QUEST??O 69)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual74" name="respostaindividual74" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual74=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual75">
                                                                                    <legend>75. Voc?? sente essa dor no peito quando voc?? est?? andando no terreno plano?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual75" type="text" value="67. Voc?? sente essa dor no peito quando voc?? est?? andando no terreno plano:">
                                                                                                <input type="radio" id="respostaindividual75" name="respostaindividual75" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual75=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual75" name="respostaindividual75" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual75=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual76">
                                                                                    <legend>76. Voc?? sente essa dor no peito quando voc?? sobe uma ladeira, um lance de escadas ou caminha r??pido no plano?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual76" type="text" value="68. Voc?? sente essa dor no peito quando voc?? sobe uma ladeira, um lance de escadas ou caminha r??pido no plano:">
                                                                                                <input type="radio" id="respostaindividual76" name="respostaindividual76" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual76=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual76" name="respostaindividual76" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual76=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual77">
                                                                                    <legend>77. Voc?? foi submetido ?? cirurgia de ponte safena ou mam??ria ou angioplastia ou implanta????o de stent na art??ria coron??ria?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual77" type="text" value="69. Voc?? foi submetido ?? cirurgia de ponte safena ou mam??ria ou angioplastia ou implanta????o de stent na art??ria coron??ria:">
                                                                                                <input type="radio" id="respostaindividual77" name="respostaindividual77" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual77=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual77" name="respostaindividual77" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual77=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual78">
                                                                                    <legend>78. Voc?? teve ou tem outra doen??a que n??o lhe foi perguntada? (ANOTAR O NOME DA DOEN??A, SE RESPOSTA NEGATIVA, INFORMAR 00)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual78" type="text" value="70. Voc?? teve ou tem outra doen??a que n??o lhe foi perguntada? (ANOTAR O NOME DA DOEN??A, SE RESPOSTA NEGATIVA, INFORMAR 00):">
                                                                                        <input type="text" name="respostaindividual78" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual78:''}}">
                                                                                    </div>
                                                                                </fieldset>

                                                                                
                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>
                                                                                        As pr??ximas perguntas est??o relacionadas ao cuidado com a sua sa??de
                                                                                    </h4>
                                                                                </fieldset>


                                                                                <fieldset id="individual79">
                                                                                    <legend class="mt-0">79. Voc?? possui plano de sa??de?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual79" type="text" value="71. Voc?? possui plano de sa??de:">
                                                                                                <input type="radio" name="respostaindividual79" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual79=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual79" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual79=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend >80. Qual o tipo de unidade de sa??de na qual voc?? faz tratamento? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual80" type="text" value="72. Qual o tipo de unidade de sa??de na qual voc?? faz tratamento? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" name="respostaindividual80" value="1. Estrat??gia de Sa??de da Fam??lia ou casa fam??lia do bairro do SUS" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='1. Estrat??gia de Sa??de da Fam??lia ou casa fam??lia do bairro do SUS'?'checked':'':''}}>
                                                                                                1. Estrat??gia de Sa??de da Fam??lia ou casa fam??lia do bairro do SUS
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="2. Unidade B??sica de Sa??de no bairro do SUS" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='2. Unidade B??sica de Sa??de no bairro do SUS'?'checked':'':''}}>
                                                                                                2. Unidade B??sica de Sa??de no bairro do SUS
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="3. Pronto Socorro ou UPA" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='3. Pronto Socorro ou UPA'?'checked':'':''}}>
                                                                                                3. Pronto Socorro ou UPA
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="4. Hospital" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='4. Hospital'?'checked':'':''}}>
                                                                                                4. Hospital
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="5. Ambulat??rio especializado em Diabetes fora do bairro do SUS" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='5. Ambulat??rio especializado em Diabetes fora do bairro do SUS'?'checked':'':''}}>
                                                                                                5. Ambulat??rio especializado em Diabetes fora do bairro do SUS
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="6. Ambulat??rio do plano de sa??de" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='6. Ambulat??rio do plano de sa??de'?'checked':'':''}}>
                                                                                                6. Ambulat??rio do plano de sa??de
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend>81. Quantas vezes voc?? fez consulta com o m??dico dessa unidade nos ??ltimos 12 meses?</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual81" type="text" value="73. Quantas vezes voc?? fez consulta com o m??dico dessa unidade nos ??ltimos 12 meses:">
                                                                                        <input type="text" name="respostaindividual81" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual81:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend>82. O Censo Brasileiro (IBGE) usa os termos ???preta???, ???parda???, ???branca???, ???amarela??? e ???ind??gena??? para classificara cor ou ra??a das pessoas. Se o(a) Sr.(a) tivesse que responder ao Censo do IBGE hoje, como se classificaria a respeito de sua cor ou ra??a? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual82" type="text" value="74. O Censo Brasileiro (IBGE) usa os termos ???preta???, ???parda???, ???branca???, ???amarela??? e ???ind??gena??? para classificara cor ou ra??a das pessoas. Se o(a) Sr.(a) tivesse que responder ao Censo do IBGE hoje, como se classificaria a respeito de sua cor ou ra??a:">
                                                                                                <input type="radio" name="respostaindividual82" value="1. Preta" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual82=='1. Preta'?'checked':'':''}}>
                                                                                                1. Preta
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual82" value="2. Parda" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual82=='2. Parda'?'checked':'':''}}>
                                                                                                2. Parda
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual82" value="3. Branca" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual82=='3. Branca'?'checked':'':''}}>
                                                                                                3. Branca
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual82" value="4. Amarela" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual82=='4. Amarela'?'checked':'':''}}>
                                                                                                4. Amarela
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual82" value="5. Ind??gena" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual82=='5. Ind??gena'?'checked':'':''}}>
                                                                                                5. Ind??gena
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <!--  -->
                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>
                                                                                        As pr??ximas perguntas se referem ?? sua vida familiar
                                                                                    </h4>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend class="mt-0">83. Qual ?? a sua situa????o conjugal atual? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual83" type="text" value="75. Qual ?? a sua situa????o conjugal atual? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" name="respostaindividual83" value="1. Casada/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='1. Casada/o'?'checked':'':''}}>
                                                                                                1. Casada/o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual83" value="2. Uni??o consensual (sem casamento civil)" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='2. Uni??o consensual (sem casamento civil)'?'checked':'':''}}>
                                                                                                2. Uni??o consensual (sem casamento civil)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual83" value="3. Solteira/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='3. Solteira/o'?'checked':'':''}}>
                                                                                                3. Solteira/o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual83" value="4. Separada/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='4. Separada/o'?'checked':'':''}}>
                                                                                                4. Separada/o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual83" value="5. Desquitada/o ou divorciada/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='5. Desquitada/o ou divorciada/o'?'checked':'':''}}>
                                                                                                5. Desquitada/o ou divorciada/o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual83" value="6. Vi??va/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='6. Vi??va/o'?'checked':'':''}}>
                                                                                                6. Vi??va/o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual84">
                                                                                    <legend>84. Voc?? tem filhos (considere todos os filhos vivos naturais ou adotivos)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual84" type="text" value="76. Voc?? tem filhos (considere todos os filhos vivos naturais ou adotivos):">
                                                                                                <input type="radio" id="respostaindividual84"  name="respostaindividual84" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual84=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULE PARA QUEST??O 78)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual84" name="respostaindividual84" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual84=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual85">
                                                                                    <legend>85. Quantos filhos voc?? tem? </legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual85" type="text" value="77. Quantos filhos voc?? tem:">
                                                                                        <input type="text" name="respostaindividual85" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual85:''}}">
                                                                                    </div>
                                                                                </fieldset>
                                                                                

                                                                                <fieldset id="respostaindividual86">
                                                                                    <legend >86. Voc?? ?? ou j?? foi fumante, ou seja, j?? fumou pelo menos 100 cigarros (cinco ma??os de cigarros) ao longo da sua vida?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual86" type="text" value="78. Voc?? ?? ou j?? foi fumante, ou seja, j?? fumou pelo menos 100 cigarros (cinco ma??os de cigarros) ao longo da sua vida:">
                                                                                                <input type="radio" id="respostaindividual86" name="respostaindividual86" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual86=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULE PARA QUEST??O 92)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual86" name="respostaindividual86" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual86=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual87">
                                                                                    <legend >87. Com que idade voc?? come??ou a fumar?</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual87" type="text" value="79. Com que idade voc?? come??ou a fumar:">
                                                                                        <input id="respostaindividual87" type="text" name="respostaindividual87" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual87:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual88">
                                                                                    <legend>88. Voc?? fuma cigarros atualmente?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual88" type="text" value="80. Voc?? fuma cigarros atualmente:">
                                                                                                <input type="radio" id="respostaindividual88" name="respostaindividual88" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual88=='N??o'?'checked':'':''}}>
                                                                                                N??o  
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual88" name="respostaindividual88" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual88=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULAR PARA QUEST??O 83)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual89">
                                                                                    <legend>89. Quando fumou o seu ??ltimo cigarro?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="No ??ltimo m??s" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='No ??ltimo m??s'?'checked':'':''}}>
                                                                                                No ??ltimo m??s
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Um a tr??s meses atr??s" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Um a tr??s meses atr??s'?'checked':'':''}}>
                                                                                                Um a tr??s meses atr??s
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Quatro a doze meses atr??s" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Quatro a doze meses atr??s'?'checked':'':''}}>
                                                                                                Quatro a doze meses atr??s
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Um a dois anos atr??s" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Um a dois anos atr??s'?'checked':'':''}}>
                                                                                                Um a dois anos atr??s
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="H?? mais de dois anos atr??s" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='H?? mais de dois anos atr??s'?'checked':'':''}}>
                                                                                                H?? mais de dois anos atr??s
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual90">
                                                                                    <legend>90. Com que idade voc?? parou de fumar pela ??ltima vez?</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual90" type="text" value="82. Com que idade voc?? parou de fumar pela ??ltima vez:">
                                                                                        <input id="respostaindividual90" type="text" name="respostaindividual90" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual91:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual91">
                                                                                    <legend>91. Em geral, quantos cigarros por dia voc?? fuma (ou fumava)? (SE &lt;01&#x3D;00)</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual91" type="text" value="83. Em geral, quantos cigarros por dia voc?? fuma (ou fumava)? (SE &lt;01&#x3D;00):">
                                                                                        <input id="respostaindividual91" type="text" name="respostaindividual91" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual91:''}}" class="form-control">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual92">
                                                                                    <legend>92. Ao todo, durante quantos anos voc?? fumou ou fuma? (Desconte os per??odos em que voc?? deixou defumar) (SE &lt;01&#x3D; 00 -FAZER O C??LCULO JUNTO COM O PARTICIPANTE)</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual92" type="text" value="84. Ao todo, durante quantos anos voc?? fumou ou fuma? (Desconte os per??odos em que voc?? deixou defumar) (SE &lt;01&#x3D; 00 -FAZER O C??LCULO JUNTO COM O PARTICIPANTE):">
                                                                                        <input id="respostaindividual92" type="text" name="respostaindividual92" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual91:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual93">
                                                                                    <legend>93. Voc?? fumou hoje? (SE O PARTICIPANTE PAROU DE FUMAR, N??O FA??A ESSA PERGUNTA)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual93" type="text" value="85. Voc?? fumou hoje? (SE O PARTICIPANTE PAROU DE FUMAR, N??O FA??A ESSA PERGUNTA):">
                                                                                                <input type="radio" id="respostaindividual93" name="respostaindividual93" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual93=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual93" name="respostaindividual93" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual93=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual94">
                                                                                    <legend>94. Voc?? fumou um cigarro ??? ainda que s?? uma tragada ??? durante os ??ltimos sete dias?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual94" type="text" value="86. Voc?? fumou um cigarro ??? ainda que s?? uma tragada ??? durante os ??ltimos sete dias:">
                                                                                                <input type="radio" name="respostaindividual94" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual94=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual94" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual94=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual95">
                                                                                    <legend>95. Quanto tempo voc?? demora para fumar seu primeiro cigarro depois de se levantar pela manh???</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual95" type="text" value="87. Quanto tempo voc?? demora para fumar seu primeiro cigarro depois de se levantar pela manh??:">
                                                                                                <input type="radio" name="respostaindividual95" value="1. Menos de 5 minutos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual95=='1. Menos de 5 minutos'?'checked':'':''}}>
                                                                                                1. Menos de 5 minutos
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual95" value="2. Entre 6 e 30 minutos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual95=='2. Entre 6 e 30 minutos'?'checked':'':''}}>
                                                                                                2. Entre 6 e 30 minutos
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual95" value="3. Entre 31 e 60 minutos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual95=='3. Entre 31 e 60 minutos'?'checked':'':''}}>
                                                                                                3. Entre 31 e 60 minutos
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual95" value="4. Mais de 60 minutos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual95=='4. Mais de 60 minutos'?'checked':'':''}}>
                                                                                                4. Mais de 60 minutos
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual96">
                                                                                    <legend>96. Para voc?? ?? dif??cil abster-se e n??o fumar naqueles lugares onde est?? proibido (por exemplo: um hospital,biblioteca, igreja, ??nibus etc.)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual96" type="text" value="88. Para voc?? ?? dif??cil abster-se e n??o fumar naqueles lugares onde est?? proibido (por exemplo: um hospital,biblioteca, igreja, ??nibus etc.):">

                                                                                                <input type="radio" name="respostaindividual96" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual96=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual96" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual96=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual97">
                                                                                    <legend>97. Se tivesse de escolher, que cigarro lhe custaria mais deixar de fumar?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual97" type="text" value="89. Se tivesse de escolher, que cigarro lhe custaria mais deixar de fumar:">

                                                                                                <input type="radio" name="respostaindividual97" value="O primeiro da manh??" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual97=='O primeiro da manh??'?'checked':'':''}}>
                                                                                                O primeiro da manh??
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual97" value="Todos os demais" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual97=='Todos os demais'?'checked':'':''}}>
                                                                                                Todos os demais
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual98">
                                                                                    <legend>98.Habitualmente voc?? fuma mais durante as primeiras horas do dia que durante o resto do dia?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual98" type="text" value="90.Habitualmente voc?? fuma mais durante as primeiras horas do dia que durante o resto do dia:">

                                                                                                <input type="radio" name="respostaindividual98" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual98=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual98" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual98=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual99">
                                                                                    <legend>99. Voc?? fuma estando doente ou na cama?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual99" type="text" value="91. Voc?? fuma estando doente ou na cama:">
                                                                                                <input type="radio"  name="respostaindividual99" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual99=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual99" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual99=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <h4>
                                                                                        Vamos conversar sobre atividade f??sica
                                                                                    </h4>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual100">
                                                                                    <legend class="mt-0">100. De um modo geral, qual das alternativas define melhor os seus h??bitos di??rios em rela????o ?? pr??tica de atividade f??sica ?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual100" type="text" value="92. De um modo geral, qual das alternativas define melhor os seus h??bitos di??rios em rela????o ?? pr??tica de atividade f??sica:">
                                                                                                <input type="radio" name="respostaindividual100" value="1. Passo a maior parte do dia sentado" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='1. Passo a maior parte do dia sentado'?'checked':'':''}}>
                                                                                                1. Passo a maior parte do dia sentado
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="2. N??o ando muito durante o dia" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='2. N??o ando muito durante o dia'?'checked':'':''}}>
                                                                                                2. N??o ando muito durante o dia
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="3. Caminho ou fico de p?? bastante durante o dia, mas n??o carrego ou levanto coisas com frequ??ncia" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='3. Caminho ou fico de p?? bastante durante o dia, mas n??o carrego ou levanto coisas com frequ??ncia'?'checked':'':''}}>
                                                                                                3. Caminho ou fico de p?? bastante durante o dia, mas n??o carrego ou levanto coisas com frequ??ncia
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="4. Carrego pesos leves/subo escadas com frequ??ncia/fa??o exerc??cios regulares" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='4. Carrego pesos leves/subo escadas com frequ??ncia/fa??o exerc??cios regulares'?'checked':'':''}}>
                                                                                                4. Carrego pesos leves/subo escadas com frequ??ncia/fa??o exerc??cios regulares
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="5. Fa??o trabalho pesado ou exerc??cios pesados regularmente" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='5. Fa??o trabalho pesado ou exerc??cios pesados regularmente'?'checked':'':''}}>
                                                                                                5. Fa??o trabalho pesado ou exerc??cios pesados regularmente
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <div class="form-group">
                                                                                        <h4>
                                                                                            Agora, gostar??amos de saber um pouco sobre aspectos religiosos da sua vida
                                                                                        </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual101">
                                                                                    <legend class="mt-0">101. Atualmente, voc?? possui alguma religi??o ou culto? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual101" type="text" value="93. Atualmente, voc?? possui alguma religi??o ou culto:">
                                                                                                <input type="radio" id="respostaindividual101" name="respostaindividual101" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual101=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULAR PARA QUEST??O 95)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual101" name="respostaindividual101" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual101=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual102">
                                                                                    <legend>102. Atualmente, qual ?? a sua religi??o ou culto? (aquela com que voc?? mais se identifica) (MOSTRAR A LISTA NO CELULAR)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual102" type="text" value="94. Atualmente, qual ?? a sua religi??o ou culto? (aquela com que voc?? mais se identifica) (MOSTRAR A LISTA NO CELULAR):">
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="1. Adventista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='1. Adventista'?'checked':'':''}}>
                                                                                                1. Adventista
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="2. Assembl??ia de Deus" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='2. Assembl??ia de Deus'?'checked':'':''}}>
                                                                                                2. Assembl??ia de Deus
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="3. Batista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='3. Batista'?'checked':'':''}}>
                                                                                                3. Batista
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="4. Batuque" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='4. Batuque'?'checked':'':''}}>
                                                                                                4. Batuque
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="5. Budista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='5. Budista'?'checked':'':''}}>
                                                                                                5. Budista
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="6. Candombl??" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='6. Candombl??'?'checked':'':''}}>
                                                                                                6. Candombl??
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="7. Casa da Ben????o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='7. Casa da Ben????o'?'checked':'':''}}>
                                                                                                7. Casa da Ben????o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="8. Cat??lica" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='8. Cat??lica'?'checked':'':''}}>
                                                                                                8. Cat??lica
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="9. Congrega????o Crist?? do Brasil" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='9. Congrega????o Crist?? do Brasil'?'checked':'':''}}>
                                                                                                9. Congrega????o Crist?? do Brasil
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="10. Esp??rita Kardecista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='10. Esp??rita Kardecista'?'checked':'':''}}>
                                                                                                10. Esp??rita Kardecista
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="11. Evangelho Quadrangular" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='11. Evangelho Quadrangular'?'checked':'':''}}>
                                                                                                11. Evangelho Quadrangular
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="12. Judaica" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='12. Judaica'?'checked':'':''}}>
                                                                                                12. Judaica
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="13. Luterana" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='13. Luterana'?'checked':'':''}}>
                                                                                                13. Luterana
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="14. Messi??nica" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='14. Messi??nica'?'checked':'':''}}>
                                                                                                14. Messi??nica
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="15. Metodista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='15. Metodista'?'checked':'':''}}>
                                                                                                15. Metodista
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="16. Prebisteriana" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='16. Prebisteriana'?'checked':'':''}}>
                                                                                                16. Prebisteriana
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="17. Testemunha de Jeov??" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='17. Testemunha de Jeov??'?'checked':'':''}}>
                                                                                                17. Testemunha de Jeov??
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="18. Umbanda" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='18. Umbanda'?'checked':'':''}}>
                                                                                                18. Umbanda
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="19. Universal do Reino de Deus" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='19. Universal do Reino de Deus'?'checked':'':''}}>
                                                                                                19. Universal do Reino de Deus
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="Outras (Especificar na prox??ma pergunta)" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='Outras (Especificar na prox??ma pergunta)'?'checked':'':''}}>
                                                                                                Outras (Especificar na prox??ma pergunta)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>
                                                                                
                                                                                <!-- EXTRA -->
                                                                                <fieldset id="respostaindividualsegundo116">
                                                                                    <legend class="mt-0">102. Outras</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividualsegundo116" type="text" value="Outras:">
                                                                                        <input type="text" id="respostaindividualsegundo116" name="respostaindividualsegundo116" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividualsegundo116:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <div class="form-group">
                                                                                        <h4>
                                                                                            As pr??ximas perguntas se referem ao consumo de cerveja, 
                                                                                            chope, vinho, u??sque, cacha??a ou outros destilados, licores, 
                                                                                            batidas ou qualquer outro tipo de bebida alco??lica, seja consumida 
                                                                                            em refei????es ou fora dela, em situa????es especiais ou apenas para relaxar.
                                                                                        </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual103">
                                                                                    <legend class="mt-0">103. O(a) Sr(a) j?? consumiu bebidas alco??licas? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual103" type="text" value="95. O(a) Sr(a) j?? consumiu bebidas alco??licas:">
                                                                                                <input type="radio" id="respostaindividual103" name="respostaindividual103" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual103=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual103" name="respostaindividual103" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual103=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual104">
                                                                                    <legend>104. Atualmente, o(a) Sr(a) consome bebidas alco??licas?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual104" type="text" value="96. Atualmente, o(a) Sr(a) consome bebidas alco??licas:">
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="N??o, parei a menos de 1 ano" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='N??o, parei a menos de 1 ano'?'checked':'':''}}>
                                                                                                N??o, parei a menos de 1 ano (PULAR PARA QUEST??O 107)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="N??o, parei entre 1 a 2 anos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='N??o, parei entre 1 a 2 anos'?'checked':'':''}}>
                                                                                                N??o, parei entre 1 a 2 anos (PULAR PARA QUEST??O 107)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="N??o, parei h?? mais de 2 anos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='N??o, parei h?? mais de 2 anos'?'checked':'':''}}>
                                                                                                N??o, parei h?? mais de 2 anos (PULAR PARA QUEST??O 107)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual105">
                                                                                    <legend>105. O Sr(a) consome VINHO TINTO?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual105" type="text" value="97. O Sr(a) consome VINHO TINTO:">
                                                                                                <input type="radio" id="respostaindividual105" name="respostaindividual105" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual105=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULAR PARA QUEST??O 99)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual105" name="respostaindividual105" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual105=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual106">
                                                                                    <legend>106. Quantas ta??as de VINHO TINTO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual106" type="text" value="98. Quantas ta??as de VINHO TINTO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0):">
                                                                                        <input id="respostaindividual106" type="text" name="respostaindividual106" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual98:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual107">
                                                                                    <legend>107. O Sr(a) consome VINHO BRANCO?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual107" type="text" value="99. O Sr(a) consome VINHO BRANCO:">
                                                                                                <input type="radio" id="respostaindividual107" name="respostaindividual107" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual107=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULAR PARA QUEST??O 101)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual107" name="respostaindividual107" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual107=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual108">
                                                                                    <legend>108. Quantas ta??as de VINHO BRANCO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual108" type="text" value="100. Quantas ta??as de VINHO BRANCO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0):">
                                                                                        <input id="respostaindividual108" type="text" name="respostaindividual108" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual109">
                                                                                    <legend>109. O Sr(a) consome CERVEJA ou CHOPP ?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual109" type="text" value="101. O Sr(a) consome CERVEJA ou CHOPP:">
                                                                                                <input type="radio" id="respostaindividual109" name="respostaindividual109" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual109=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULAR PARA A QUEST??O 103)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual109" name="respostaindividual109" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual109=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual110">
                                                                                    <legend>110. Quantas latas, garrafas ou copos de CERVEJA ou CHOPP o(a) Sr(a) consome POR SEMANA?(N??O LEIA AS OP????ES, ADEQUE A RESPOSTA DADA ??S ALTERNATIVAS. SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0 - INFORMAR QUANTIDADE E TIPO)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual110" type="text" value="102. Quantas latas, garrafas ou copos de CERVEJA ou CHOPP o(a) Sr(a) consome POR SEMANA:">
                                                                                                <input type="radio" id="respostaindividual110" name="respostaindividual110" value="Copos pequenos (100-150mL)" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual110=='Copos pequenos (100-150mL)'?'checked':'':''}}>
                                                                                                Copos pequenos (100-150mL)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual110" name="respostaindividual110" value="Tulipas, latas ou garrafas long neck (garrafa pequena)" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual110=='Tulipas, latas ou garrafas long neck (garrafa pequena)'?'checked':'':''}}>
                                                                                                Tulipas, latas ou garrafas long neck (garrafa pequena)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual110" name="respostaindividual110" value="Garrafas de 620mL" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual110=='Garrafas de 620mL'?'checked':'':''}}>
                                                                                                Garrafas de 620mL
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual110" name="respostaindividual110" value="Garrafas de 1L" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual110=='Garrafas de 1L'?'checked':'':''}}>
                                                                                                Garrafas de 1L
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual111">
                                                                                    <legend>111. ENTREVISTADOR: escreva a quantidade referente ?? pergunta anterior</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual111" type="text" value="102. ENTREVISTADOR: escreva a quantidade referente ?? pergunta anterior:">
                                                                                        <input id="respostaindividual111" type="text" name="respostaindividual111" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual111:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual112">
                                                                                    <legend>112. O Sr(a) consome DESTILADOS (tais como u??sque, vodka, tequila, rum, aguardente ou cacha??a) oubebidas misturadas preparadas com esses destilados (caipirinha, coquet??is, drinks)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual112" type="text" value="103. O Sr(a) consome DESTILADOS (tais como u??sque, vodka, tequila, rum, aguardente ou cacha??a) oubebidas misturadas preparadas com esses destilados (caipirinha, coquet??is, drinks):">

                                                                                                <input type="radio" id="respostaindividual112" name="respostaindividual112" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual112=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULAR PARA QUEST??O 105)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual112" name="respostaindividual112" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual112=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual113">
                                                                                    <legend>113. Quantas doses (1 DOSE&#x3D; 50 mL &#x3D; 1 x??cara de cafezinho) de DESTILADOS (tais como u??sque, vodka, tequila, rum aguardente ou cacha??a) ou bebidas misturadas preparadas com esses destilados (caipirinha,coquet??is, drinks), o(a) Sr(a) consome POR SEMANA?</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual113" type="text" value="Quantas doses (1 DOSE= 50 mL = 1 x??cara de cafezinho) de DESTILADOS (tais como u??sque, vodka, tequila, rum aguardente ou cacha??a) ou bebidas misturadas preparadas com esses destilados (caipirinha,coquet??is, drinks), o(a) Sr(a) consome POR SEMANA:">
                                                                                        <input id="respostaindividual113" type="text" name="respostaindividual113" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual113:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual114">
                                                                                    <h4>
                                                                                        ENTREVISTADOR: SEGUEM AS DEFINI????ES PARA A PR??XIMA PERGUNTA.
                                                                                    </h4>
                                                                                    <div class="form-group">
                                                                                        <p class="help-block">
                                                                                            *1 dose <br>
                                                                                            1 lata/long neck de cerveja (350 mL) <br>
                                                                                            1 ta??a de vinho (120-150 mL) <br>
                                                                                            1 dose de bebida destilada (50mL) <br>
                                                                                            * 2 doses <br>
                                                                                            1 garrafa de cerveja (620mL) <br>
                                                                                            1 dose dupla de bebida destilada (100mL) <br>
                                                                                            * 3 doses = 1 garrafa de cerveja (1L) <br>
                                                                                        </p>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual114">
                                                                                    <legend>114. Nos ??LTIMOS 12 MESES, com que frequ??ncia o(a) Sr(a) consumiu 5 ou mais doses* de qualquer tipo de bebida alco??lica em um per??odo de 2 horas? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual114" type="text" value="105. Nos ??LTIMOS 12 MESES, com que frequ??ncia o(a) Sr(a) consumiu 5 ou mais doses* de qualquer tipo de bebida alco??lica em um per??odo de 2 horas? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Duas vezes por dia ou mais" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Duas vezes por dia ou mais'?'checked':'':''}}>
                                                                                                Duas vezes por dia ou mais
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Praticamente todos os dias" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Praticamente todos os dias'?'checked':'':''}}>
                                                                                                Praticamente todos os dias
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Uma a duas vezes por semana" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Uma a duas vezes por semana'?'checked':'':''}}>
                                                                                                Uma a duas vezes por semana
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Duas ou tr??s vezes por m??s" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Duas ou tr??s vezes por m??s'?'checked':'':''}}>
                                                                                                Duas ou tr??s vezes por m??s
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Somente em ocasi??es especiais" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Somente em ocasi??es especiais'?'checked':'':''}}>
                                                                                                Somente em ocasi??es especiais
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Nunca" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Nunca'?'checked':'':''}}>
                                                                                                Nunca
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual115">
                                                                                    <legend>115. Do total de bebidas alco??licas que o(a) Sr(a) consome, com que frequ??ncia o(a) Sr(a) ingere junto ??s refei????es?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual115" type="text" value="106. Do total de bebidas alco??licas que o(a) Sr(a) consome, com que frequ??ncia o(a) Sr(a) ingere junto ??s refei????es:">
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Sempre ou quase sempre com as refei????es" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Sempre ou quase sempre com as refei????es'?'checked':'':''}}>
                                                                                                Sempre ou quase sempre com as refei????es
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Maior parte junto a refei????es" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Maior parte junto a refei????es'?'checked':'':''}}>
                                                                                                Maior parte junto a refei????es
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Tanto junto quanto fora das refei????es" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Tanto junto quanto fora das refei????es'?'checked':'':''}}>
                                                                                                Tanto junto quanto fora das refei????es
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Maior parte fora das refei????es" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Maior parte fora das refei????es'?'checked':'':''}}>
                                                                                                Maior parte fora das refei????es
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Nunca ou quase nunca com as refei????es" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Nunca ou quase nunca com as refei????es'?'checked':'':''}}>
                                                                                                Nunca ou quase nunca com as refei????es
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <fieldset>
                                                                                    <div class="form-group">
                                                                                        <h4>Vamos falar agora sobre os medicamentos que o(a) Sr(a) usa.</h4>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <fieldset >
                                                                                    <legend class="mt-0">116. O(a) Sr(a) toma medicamentos para Diabetes ou a????car alto no sangue?: (SE O PARTICIPANTE N??O SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual117" type="text" value="107. O(a) Sr(a) toma medicamentos para Diabetes ou a????car alto no sangue:">
                                                                                                <input type="radio" id="respostaindividual116" name="respostaindividual116" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual116=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual116" name="respostaindividual116" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual116=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual116">
                                                                                    <legend>117. O(a) Sr(a) toma comprimido para o Diabetes?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual117" type="text" value="108. O(a) Sr(a) toma comprimido para o Diabetes:">

                                                                                                <input type="radio" id="respostaindividual117" name="respostaindividual117" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual117=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual117" name="respostaindividual117" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual117=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual117">
                                                                                    <legend>118. O(a) Sr(a) utiliza insulina para o Diabetes?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual118" type="text" value="109. O(a) Sr(a) utiliza insulina para o Diabetes:">

                                                                                                <input type="radio" id="respostaindividual118" name="respostaindividual118" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual118=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual118" name="respostaindividual118" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual118=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual118">
                                                                                    <legend>119. O(a) Sr(a) toma medicamentos para Hipertens??o ou press??o alta?: (SE O PARTICIPANTE N??O SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual119" type="text" value="110. O(a) Sr(a) toma medicamentos para Hipertens??o ou press??o alta?: (SE O PARTICIPANTE N??O SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO):">

                                                                                                <input type="radio" id="respostaindividual119" name="respostaindividual119" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual119=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual119" name="respostaindividual119" value="N??o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual119=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <div class="text-center">
                                                                                        <button class="btn btn-primary mt-5" type="submit" id="nav-profile-tab" >SALVAR E CONTINUAR </button>
                                                                                </div>
                                                                </form>
                                                                <!-- FIM 3 - FORMULARIO INDIVIDUAL -->                                                                    

                                                            </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="accordion-item mb-3" {{$usuario->genero == 2 ? 'hidden' : ''}}>
                                                                <div class="progress-wrapper">
                                                                    <div class="progress-info">
                                                                        <div class="progress-percentage">
                                                                            <span class="text-md font-weight-bold">
                                                                                Quatidade de Perguntas Respondidas:
                                                                              
                                                                                {{number_format($formindividual4?$contadorformulario4/$formindividual4->qtdperguntas*100:0)}}%

                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="{{$contadorformulario4}}" aria-valuemin="0" aria-valuemax="{{$formindividual4?$formindividual4->qtdperguntas:0}}" style="width: {{$formindividual4?$contadorformulario4/$formindividual4->qtdperguntas*100:0}}%;"></div>
                                                                    </div>
                                                                </div>
                                                            <h5 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button border font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    PARTE 4
                                                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3" aria-hidden="true"></i>
                                                                </button>
                                                            </h5>
                                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRental">
                                                                <div class="accordion-body text-sm opacity-8">
                                                                    <!-- 4 - FORMULARIO INDIVIDUAL -->
                                                                    <form action="{{route('post.form.individual.terceiro',['usuario'=>$usuario->id])}}" id="form2" method="POST">
                                                                            @csrf

                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>SE A PARTICIPANTE FOR MULHER PREENCHA O QUESTION??RIO PARA MULHERES.</h4>
                                                                                    <div class="form-group">
                                                                                        <p class="help-block">
                                                                                            SE O PARTICIPANTE FOR HOMEM AGRADE??A E INFORME QUE SER?? REALIZADA A MEDIDA DA PRESS??O, PESO,
                                                                                            ALTURA E CIRCUNFER??NCIA ABDOMINAL E AINDA AVALIA????O DOS P??S.
                                                                                        </p>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <!-- EXTRA -->
                                                                                <fieldset id="extra1">
                                                                                    <legend class="mt-0">120. Que idade a Sra. tinha quando menstruou pela primeira vez?</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual121" type="text" value="111. Que idade a Sra. tinha quando menstruou pela primeira vez:">
                                                                                        <input type="text" id="respostaindividual121" name="respostaindividual121" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual121:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual122">
                                                                                    <legend>121. A Sra. ainda menstrua?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual122" type="text" value="112. A Sra. ainda menstrua:">

                                                                                                <input type="radio" id="respostaindividual122" name="respostaindividual122" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual122=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULE PARA A QUEST??O 115)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual122" name="respostaindividual122" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual122=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual123">
                                                                                    <legend>122. Que idade a Sra. tinha quando sua menstrua????o parou definitivamente?</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual123" type="text" value="113. Que idade a Sra. tinha quando sua menstrua????o parou definitivamente:">
                                                                                        <input id="respostaindividual123" type="text" name="respostaindividual123" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual123:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset  id="respostaindividual124">
                                                                                    <legend>123. Por que n??o menstrua mais? (LEIA AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual124" type="text" value="114. Por que n??o menstrua mais? (LEIA AS ALTERNATIVAS):">
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="1. Menopausa natural" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='1. Menopausa natural'?'checked':'':''}}>
                                                                                                1. Menopausa natural
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="2. Cirurgia para retirada de ??tero (histerectomia)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='2. Cirurgia para retirada de ??tero (histerectomia)'?'checked':'':''}}>
                                                                                                2. Cirurgia para retirada de ??tero (histerectomia)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="3. Cirurgia para retirada de dois ov??rios" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='3. Cirurgia para retirada de dois ov??rios'?'checked':'':''}}>
                                                                                                3. Cirurgia para retirada de dois ov??rios
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="4. Cirurgia para retirada de dois ov??rios e ??tero" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='4. Cirurgia para retirada de dois ov??rios e ??tero'?'checked':'':''}}>
                                                                                                4. Cirurgia para retirada de dois ov??rios e ??tero
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="5. Outros tratamentos (horm??nios, quimioterapia ou radia????o)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='5. Outros tratamentos (horm??nios, quimioterapia ou radia????o)'?'checked':'':''}}>
                                                                                                5. Outros tratamentos (horm??nios, quimioterapia ou radia????o)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="Outras (Especifique na proxima pergunta)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='Outras (Especifique na proxima pergunta)'?'checked':'':''}}>
                                                                                                Outras (Especifique na proxima pergunta)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <fieldset id="respostaindividual139">
                                                                                    <legend class="mt-0">123. Outras</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual139" type="text" value="Outras:">
                                                                                        <input id="respostaindividual139" type="text" name="respostaindividual139" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual139:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>

                                                                                <!--  -->
                                                                                <fieldset id="respostaindividual125">
                                                                                    <div class="form-group">
                                                                                        <h4>Agora vamos falar sobre gravidez. </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual125">
                                                                                    <legend class="mt-0">124. A Sra. j?? esteve gr??vida? Considere todas as gesta????es, incluindo aquelas que resultaram em filho nascido vivo ou morto, em aborto espont??neo/perda, aborto provocado e gravidez ect??pica/nas trompas.</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual125" type="text" value="115. A Sra. j?? esteve gr??vida? Considere todas as gesta????es, incluindo aquelas que resultaram em filho nascido vivo ou morto, em aborto espont??neo/perda, aborto provocado e gravidez ect??pica/nas trompas:">
                                                                                                <input type="radio" id="respostaindividual125" name="respostaindividual125" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual125=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual125" name="respostaindividual125" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual125=='N??o'?'checked':'':''}}>
                                                                                                N??o (PULE PARA A QUEST??O 122)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual126">
                                                                                    <legend>125. Que idade a Sra. tinha quando engravidou pela primeira vez?</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual126" type="text" value="116. Que idade a Sra. tinha quando engravidou pela primeira vez:">
                                                                                        <input type="text" id="respostaindividual126" name="respostaindividual126" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual126:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual127">
                                                                                    <legend>126. Considerando todas as suas gesta????es, quantas terminaram com Nascidos-vivos:</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual127" type="text" value="117. Considerando todas as suas gesta????es, quantas terminaram com Nascidos-vivos:">
                                                                                        <input type="text" id="respostaindividual127" name="respostaindividual127" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual127:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual128">
                                                                                    <legend>127. Considerando todas as suas gesta????es, quantas terminaram com Nascidos-mortos:</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual128" type="text" value="118. Considerando todas as suas gesta????es, quantas terminaram com Nascidos-mortos:">
                                                                                        <input type="text" id="respostaindividual128" name="respostaindividual128" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual128:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual129">
                                                                                    <legend>128. Considerando todas as suas gesta????es, quantas terminaram com Abortos:</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual129" type="text" value="119. Considerando todas as suas gesta????es, quantas terminaram com Abortos:">
                                                                                        <input type="text" id="respostaindividual129" name="respostaindividual129" class="form-control" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual129:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual130">
                                                                                    <legend>129. Considerando todas as suas gesta????es, quantas terminaram com outras ocorr??ncias como gravidez tub??ria (nas trompas), mola, etc.)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual130" type="text" value="120. Considerando todas as suas gesta????es, quantas terminaram com outras ocorr??ncias como gravidez tub??ria (nas trompas), mola, etc.):">
                                                                                        <input type="text" id="respostaindividual130" name="respostaindividual130" class="form-control" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual130:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual131">
                                                                                    <legend>130. Apenas confirmando o n??mero total de vezes que a Sra. engravidou foi  |_| _| gesta????es</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual131" type="text" value="121. Apenas confirmando o n??mero total de vezes que a Sra. engravidou foi  |_| _| gesta????es:">
                                                                                        <input type="text" id="respostaindividual131" name="respostaindividual131" class="form-control" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual131:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual129">
                                                                                    <legend>131. Mantendo rela????es sexuais com frequ??ncia, alguma vez a Sra. j?? tentou engravidar durante um ano completo ou mais e n??o conseguiu?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual132" type="text" value="122. Mantendo rela????es sexuais com frequ??ncia, alguma vez a Sra. j?? tentou engravidar durante um ano completo ou mais e n??o conseguiu:">
                                                                                                <input type="radio" id="respostaindividual132" name="respostaindividual132" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual132=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual132" name="respostaindividual132" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual132=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual130">
                                                                                    <legend>132. Algum m??dico j?? lhe deu o diagn??stico de s??ndrome de ov??rios polic??sticos? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual133" type="text" value="123. Algum m??dico j?? lhe deu o diagn??stico de s??ndrome de ov??rios polic??sticos? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" id="respostaindividual133" name="respostaindividual133" value="Sim, com base em exame cl??nico" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual133=='Sim, com base em exame cl??nico'?'checked':'':''}}>
                                                                                                Sim, com base em exame cl??nico
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual133" name="respostaindividual133" value="Sim, confirmado por ultrassom" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual133=='Sim, confirmado por ultrassom'?'checked':'':''}}>
                                                                                                Sim, confirmado por ultrassom
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual133" name="respostaindividual133" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual133=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual131">
                                                                                    <legend>133. A Sra. fez Ligadura/laqueadura de trompas (esteriliza????o feminina)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual134" type="text" value="124. A Sra. fez Ligadura/laqueadura de trompas (esteriliza????o feminina):">
                                                                                                <input type="radio" id="respostaindividual134" name="respostaindividual134" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual134=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual134" name="respostaindividual134" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual134=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual132">
                                                                                    <legend>134. O seu parceiro fez vasectomia (esteriliza????o masculina)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual135" type="text" value="125. O seu parceiro fez vasectomia (esteriliza????o masculina):">
                                                                                                <input type="radio" id="respostaindividual135" name="respostaindividual135" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual135=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual135" name="respostaindividual135" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual135=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual133">
                                                                                    <legend>135. A Sra. (ou seu marido/parceiro) usa ou j?? usou algum outro m??todo para evitar a gravidez?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual136" type="text" value="126. A Sra. (ou seu marido/parceiro) usa ou j?? usou algum outro m??todo para evitar a gravidez:">
                                                                                                <input type="radio" id="respostaindividual136" name="respostaindividual136" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual136=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual136" name="respostaindividual136" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual136=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual137">
                                                                                    <legend>136. Qual m??todo anticoncepcional que a Sra. (ou seu marido/parceiro) usa ou usou? Se for o caso, escolha mais de uma op????o de resposta. (MOSTRE A LISTA NO CELULAR)</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input hidden name="perguntaindividual137" type="text" value="Qual m??todo anticoncepcional que a Sra. (ou seu marido/parceiro) usa ou usou? Se for o caso, escolha mais de uma op????o de resposta. (MOSTRE A LISTA NO CELULAR):">
                                                                                                <input type="checkbox" name="respostaindividual137" value="1. P??lula (comprimido oral)"  {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137=='1. P??lula (comprimido oral)'?'checked':'':''}}>
                                                                                                1. P??lula (comprimido oral)
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137a" value="2. Inje????es contraceptivas"   {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137a=='2. Inje????es contraceptivas'?'checked':'':''}}>
                                                                                                2. Inje????es contraceptivas
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137b" value="3. Implante hormonal" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137b=='3. Implante hormonal'?'checked':'':''}}>
                                                                                                3. Implante hormonal
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137c" value="4. Anel (contraceptivo hormonal intravaginal)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137c=='4. Anel (contraceptivo hormonal intravaginal)'?'checked':'':''}}>
                                                                                                4. Anel (contraceptivo hormonal intravaginal)
                                                                                            </label>
                                                                                        </div>
                                                                                        
                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137d" value="5. DIU com horm??nio (Mirena)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137d=='5. DIU com horm??nio (Mirena)'?'checked':'':''}}>
                                                                                                5. DIU com horm??nio (Mirena)
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137e" value="6. DIU sem horm??nio" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137e=='6. DIU sem horm??nio'?'checked':'':''}}>
                                                                                                6. DIU sem horm??nio
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137f" value="7. DIU n??o especificado" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137f=='7. DIU n??o especificado'?'checked':'':''}}>
                                                                                                7. DIU n??o especificado
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137g" value="8. Camisinha masculina (condom)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137g=='8. Camisinha masculina (condom)'?'checked':'':''}}>
                                                                                                8. Camisinha masculina (condom)
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137h" value="9. Camisinha feminina" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137h=='9. Camisinha feminina'?'checked':'':''}}>
                                                                                                9. Camisinha feminina
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137i" value="Outras (Especifique na prox??ma pergunta)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137i=='Outras (Especifique na prox??ma pergunta)'?'checked':'':''}}>
                                                                                                Outras (Especifique na prox??ma pergunta)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <fieldset id="respostaindividual140">
                                                                                    <legend class="mt-0">136. Outras</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual140" type="text" value="Outras:">
                                                                                        <input type="text" name="respostaindividual140" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual140:''}}" class="form-control">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual135">
                                                                                    <legend>137. A Sra. apresentou perda urin??ria semanal nos ??ltimos tr??s meses? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual138" type="text" value="128. A Sra. apresentou perda urin??ria semanal nos ??ltimos tr??s meses:">

                                                                                                <input type="radio" id="respostaindividual138" name="respostaindividual138" value="N??o" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual138=='N??o'?'checked':'':''}}>
                                                                                                N??o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual138" name="respostaindividual138" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual138=='Sim'?'checked':'':''}}>
                                                                                                Sim (APLIQUE OS QUESTION??RIOS: ICIQ-SF E QUESTION??RIO DE QUALIDADE DE VIDA EM INCONTIN??NCIA URIN??RIA (KHQ)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>
                                                                                    
                                                                                <div class="text-center">
                                                                                        <button class="btn btn-primary mt-5" type="submit" id="nav-profile-tab" >ENVIAR FORMUL??RIO </button>
                                                                                </div>

                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>
                                                                                        SE A PARTICIPANTE RESPONDEU N??O, AGRADE??A E INFORME QUE SER?? REALIZADA A MEDIDA DA PRESS??O, 
                                                                                        PESO,ALTURA E CIRCUNFER??NCIA ABDOMINAL E AINDA AVALIA????O DOS P??S.
                                                                                    </h4>
                                                                                    
                                                                                </fieldset>
                                                                                
                                                                    </form>
                                                                    <!-- 4 - FIM FORMULARIO INDIVIDUAL -->
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

                    <footer class="footer pt-3  ">
                        <div class="container-fluid">
                                    <div class="row align-items-center justify-content-lg-between ">
                                        <div class="col-lg-12 col-12 pb-4  text-center">
                                            <div class="copyright mx-auto text-center text-sm text-muted text-lg-start">
                                                ?? <script>
                                                document.write(new Date().getFullYear())
                                                </script>, desenvolvido pela equipe <a href="https://www.instagram.com/upceurg.ufpa/"> Upceurg - UFPA</a>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </footer>   

                    <script>
                        $(document).ready(function($){
                            $('#data').mask('00/00/0000');
                        });
                    </script>

                    <!-- SALTOS DO FORMU????RIO -->
                    <script> 
                       $(document).ready(function() {
                            // SALTO 1 
                            $('input:radio[name="respostaindividual6"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });                           

                            // SALTO 2
                            $('input:radio[id="respostaindividual4"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual5, #respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9, #respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual5, #respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9, #respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 3
                            $('input:radio[id="respostaindividual5"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 3.1
                            $('input:radio[id="respostaindividual6"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual7").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual7").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 3.2
                            $('input:radio[name="respostaindividual7"]').on("change", function() {
                                if (this.checked && this.value == '') { 
                                    $("#respostaindividual8, #respostaindividual9").show(); 
                                } else {
                                    $("#respostaindividual8, #respostaindividual9").hide(); 
                                }
                            });

                            // SALTO 4
                            $('input:radio[id="respostaindividual8"]').on("change", function() {
                                if (this.checked && this.value == '1 grau completo' || this.checked && this.value == '2 grau incompleto') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual9").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual9").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 5
                            $('input:radio[id="respostaindividual50"]').on("change", function() {
                                if (this.checked && this.value == 'N??o' || this.checked && this.value == 'Sim, s?? a primeira dose') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual51").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual51").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 6
                            $('input:radio[id="respostaindividual71"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual72, #respostaindividual73").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual72, #respostaindividual73").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 7
                            $('input:radio[id="respostaindividual72"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual73").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual73").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 8
                            $('input:radio[id="respostaindividual74"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual75, #respostaindividual76").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual75, #respostaindividual76").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 9
                            $('input:radio[id="respostaindividual84"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual85").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual85").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 10
                            $('input:radio[id="respostaindividual86"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual87, #respostaindividual88, #respostaindividual89, #respostaindividual90, #respostaindividual91, #respostaindividual92, #respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual87, #respostaindividual88, #respostaindividual89, #respostaindividual90, #respostaindividual91, #respostaindividual92, #respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO
                            $('input:radio[id="respostaindividual88"]').on("change", function()  {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 11
                            $('input:radio[id="respostaindividual88"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual89, #respostaindividual90").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual89, #respostaindividual90").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 12
                            // $('input:radio[id="respostaindividual93"]').on("change", function() {
                            //     if (this.checked && this.value == 'N??o') { 
                            //         $("#respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").hide(); 
                            //     } else {
                            //         $("#respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").show(); 
                            //     }
                            // });

                            // SALTO 13
                            $('input:radio[id="respostaindividual101"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual102, #respostaindividualsegundo116").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual102, #respostaindividualsegundo116").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 14
                            $('input:radio[id="respostaindividual103"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual104, #respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual104, #respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 15 (CONDI????O INVERSA)
                            $('input:radio[id="respostaindividual104"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                } else {
                                    $("#respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                }
                            });

                            // SALTO 16
                            $('input:radio[id="respostaindividual105"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual106").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual106").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 17
                            $('input:radio[id="respostaindividual107"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual108").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual108").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 18
                            $('input:radio[id="respostaindividual109"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual110, #respostaindividual111").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual110, #respostaindividual111").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 19
                            $('input:radio[id="respostaindividual112"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual113").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual113").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 20
                            $('input:radio[id="respostaindividual122"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual123, #respostaindividual124, #respostaindividual139").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual123, #respostaindividual124, #respostaindividual139").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 21
                            $('input:radio[id="respostaindividual125"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual126, #respostaindividual127, #respostaindividual128, #respostaindividual129, #respostaindividual130, #respostaindividual131").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual123, #respostaindividual127, #respostaindividual128, #respostaindividual129, #respostaindividual130, #respostaindividual131").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 22
                            $('input:radio[id="respostaindividual136"]').on("change", function() {
                                if (this.checked && this.value == 'N??o') { // CONDI????O PARA O SALTO
                                    $("#respostaindividual137, #respostaindividual140").hide(); // QUEST??ES QUE SER??O OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual137, #respostaindividual140").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });


                        });                                 
                    </script>
                </div>
        </div>
    </div>


@endsection