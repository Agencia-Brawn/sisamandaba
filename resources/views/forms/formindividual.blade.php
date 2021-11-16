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
                                            <span class="nav-link-text ms-1">Cuidado <br> dos Pés</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <i class='bx bx-user-circle p-2'></i>
                                            </div>
                                        Formulários
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #fff; margin-top: -16px; margin-left: 15px;">
                                            <li><a class="dropdown-item" href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}">Formulário Laboratório</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.iciq',['usuario'=>$usuario->id])}}">Formulário ICIQ-KHQ</a></li>
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formulário Individual</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formulário Familiar</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formulário Antropometria</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
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
                                <span class="nav-link-text ms-1">Cuidado <br> dos Pés</span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                    <i class='bx bx-user-circle p-2'></i>
                                </div>
                               Formulários
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="margin-top: -40px; margin-left: 15px;">
                                <li><a class="dropdown-item" href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}">Formulário Laboratório</a></li>
                                <li><a class="dropdown-item" href="{{route('form.iciq',['usuario'=>$usuario->id])}}">Formulário ICIQ-KHQ</a></li>
                                <li><a class="dropdown-item nav-link active" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formulário Individual</a></li>
                                <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formulário Familiar</a></li>
                                <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formulário Antropometria</a></li>
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
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
                                       <h2>Questionário Individual<br><small></small></h2>
                                    </fieldset>                          

                                    <div class="accordion-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12 mx-auto">
                                                    <div class="accordion" id="accordionRental">

                                                        <div class="accordion-item mb-3">
                                                            <h5 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button border-bottom font-weight-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
                                                                                            <h4>Vamos começar com alguns de seus dados pessoais</h4>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    
                                                                                    <fieldset>
                                                                                        <legend class="mt-0">3. Você tem Smartphone?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual3" type="text" value="3. Você tem Smartphone:">
                                                                                                    <input type="radio" name="respostaindividual3" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual3=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual3" value="Não" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual3=='Não'?'checked':'':''}}>
                                                                                                    Não
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset>
                                                                                        <br>
                                                                                        <div class="form-group">
                                                                                            <h4>
                                                                                                As próximas perguntas se referem à sua história pessoal ou suas condições de vida
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>
                                
                                                                                    
                                                                                    <fieldset id="respostaindividual4"> 
                                                                                        <legend class="mt-0">4. Você sabe ler e escrever?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual4" type="text" value="16. Você sabe ler e escrever:">
                                                                                                    <input type="radio" id="respostaindividual4" name="respostaindividual4" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual4=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual4" name="respostaindividual4" value="Não" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual4=='Não'?'checked':'':''}}>
                                                                                                    Não ( PULAR PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual5" >
                                                                                        <legend>5. Você aprendeu a ler na escola?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual5" type="text" value="17. Você aprendeu a ler na escola:">
                                                                                                    <input type="radio" id="respostaindividual5" name="respostaindividual5" value="Sim" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual5=='Sim'?'checked':'':''}}>
                                                                                                    Sim
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual5" name="respostaindividual5" value="Não" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual5=='Não'?'checked':'':''}}>
                                                                                                    Não ( PULAR PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual6" >
                                                                                        <legend>6. Você terminou o primeiro grau?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual6" type="text" value="19. Você terminou o primeiro grau:">
                                                                                                    <input type="radio" id="respostaindividual6" name="respostaindividual6" value="Não" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual6=='Não'?'checked':'':''}}>
                                                                                                    Não
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
                                                                                        <legend>7. Qual a última série/ano cursada(o) com aprovação? (A PARTIR DE 2009 SÃO 9 ANOS INICIANDO COM 6 ANOS DE IDADE, ANTES DE 2009 ERAM 8 SERIES INICIANDO COM 7 ANOS - APÓS RESPONDER PULAR PARA O HLS-14)</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual7" type="text" value="18. Qual a última série/ano cursada(o) com aprovação? (A PARTIR DE 2009 SÃO 9 ANOS INICIANDO COM 6 ANOS DE IDADE, ANTES DE 2009 ERAM 8 SERIES INICIANDO COM 7 ANOS - APÓS RESPONDER PULAR PARA O HLS-14):">
                                                                                                    <input type="radio"  name="respostaindividual7" value="1ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='1ª Série/ano'?'checked':'':''}}>
                                                                                                    1ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="2ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='2ª Série/ano'?'checked':'':''}}>
                                                                                                    2ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="3ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='3ª Série/ano'?'checked':'':''}}>
                                                                                                    3ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="4ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='4ª Série/ano'?'checked':'':''}}>
                                                                                                    4ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="5ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='5ª Série/ano'?'checked':'':''}}>
                                                                                                    5ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="6ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='6ª Série/ano'?'checked':'':''}}>
                                                                                                    6ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="7ª Série/ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='7ª Série/ano'?'checked':'':''}}>
                                                                                                    7ª Série/ano
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio"  name="respostaindividual7" value="8º ano" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual7=='8ª ano'?'checked':'':''}}>
                                                                                                    8º ano
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual8" >
                                                                                        <legend>8. Qual seu grau de instrução?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual8" type="text" value="20. Qual seu grau de instrução:">
                                                                                                    <input type="radio" id="respostaindividual8"  name="respostaindividual8" value="1 grau completo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='1 grau completo'?'checked':'':''}}>
                                                                                                    1º grau completo (PULE PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="2 grau incompleto" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='2 grau completo'?'checked':'':''}}>
                                                                                                    2º grau incompleto (PULE PARA O HLS-14)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="2º grau completo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='2º grau completo'?'checked':'':''}}>
                                                                                                    2º grau completo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="Universitário incompleto" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='Universitário incompleto'?'checked':'':''}}>
                                                                                                    Universitário incompleto
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="Universitário completo" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='Universitário completo'?'checked':'':''}}>
                                                                                                    Universitário completo
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" id="respostaindividual8" name="respostaindividual8" value="Pós-graduação" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual8=='Pós-graduação'?'checked':'':''}}>
                                                                                                    Pós-graduação
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual9" >
                                                                                        <legend>9. Com que idade você terminou o 2º grau (NÃO ACEITAR NÚMERO &lt; 14)</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual9" type="text" value="21. Com que idade você terminou o 2º grau (NÃO ACEITAR NÚMERO 14):">
                                                                                            <input type="text" id="respostaindividual9" name="respostaindividual9" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual9:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual10">
                                                                                        <br>
                                                                                        <h3>Questionário 14 - ITEMS HEALTH LITERACY SCALE (HLS-14)</h3>
                                                                                        <div class="form-group">
                                                                                            <h4>Nesse bloco as questões estão relacionadas a sua capacidade acessar 
                                                                                                e utilizar informações de saúde. Não existem respostas certas ou erradas, 
                                                                                                você deve escolher apenas uma das alternativas de resposta. (MOSTRE O CARTÃO RESPOSTA)
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual10">
                                                                                        <br><br>
                                                                                        <div class="form-group">
                                                                                            <h4>
                                                                                                Quando você lê receitas médicas ou bulas de remédio, o quanto você concorda ou discorda 
                                                                                                com as seguintes afirmações:
                                                                                            </h4>
                                                                                        </div>
                                                                                    </fieldset>

                                                                                    <fieldset id="respostaindividual10">
                                                                                        <legend class="mt-0">10. "EU ENCONTRO PALAVRAS QUE NÃO CONSIGO LER."</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual10" type="text" value="22. EU ENCONTRO PALAVRAS QUE NÃO CONSIGO LER:">
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
                                                                                        <legend>11. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;O TAMANHO DA LETRA É MUITO PEQUENA PARA MIM&quot; (apesar de eu usar óculos).</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual11" type="text" value="23. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação):">
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
                                                                                        <legend>12. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;O CONTEÚDO É MUITO DIFÍCIL DE ENTENDER.&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual12" type="text" value="24. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) O CONTEÚDO É MUITO DIFÍCIL DE ENTENDER:">
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
                                                                                        <legend>13. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;DEMORO MUITO PARA LER AS INSTRUÇÕES&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual13" type="text" value="25. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) DEMORO MUITO PARA LER AS INSTRUÇÕES:">
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
                                                                                        <legend>14. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação) &quot;EU PRECISO QUE ALGUÉM ME AJUDE A LER&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual14" type="text" value="26. (Quando você lê receitas médicas ou bulas de remédio o quanto você concorda com a afirmação)  EU PRECISO QUE ALGUÉM ME AJUDE A LER.:">
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
                                                                                            Se você foi diagnosticado com uma doença, 
                                                                                            e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda 
                                                                                            ou discorda com as seguintes afirmações:
                                                                                        </h4>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual15">
                                                                                        <legend>15. Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença 
                                                                                            e seu tratamento, de que maneira você concorda com a afirmação &quot;EU PROCURO INFORMAÇÕES 
                                                                                            EM VÁRIOS LUGARES&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                <input hidden name="perguntaindividual15" type="text" value="27. Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença 
                                                                                            e seu tratamento, de que maneira você concorda com a afirmação &quot;EU PROCURO INFORMAÇÕES 
                                                                                            EM VÁRIOS LUGARES&quot;.">
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
                                                                                        <legend>16. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU ENCONTRO A INFORMAÇÃO QUE PRECISO&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual16" type="text" value="28. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU ENCONTRO A INFORMAÇÃO QUE PRECISO&quot;:">
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
                                                                                        <legend>17. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU ENTENDO A INFORMAÇÃO ENCONTRADA&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual17" type="text" value="29. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU ENTENDO A INFORMAÇÃO ENCONTRADA&quot;:">
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
                                                                                        <legend>18. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU FALO MINHA OPINIÃO SOBRE A DOENÇA AO MEU MÉDICO, FAMILIARES OU AMIGOS&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual18" type="text" value="30. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU FALO MINHA OPINIÃO SOBRE A DOENÇA AO MEU MÉDICO, FAMILIARES OU AMIGOS&quot;:">
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
                                                                                        <legend>19. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU COLOCO EM PRÁTICA AS INFORMAÇÕES ENCONTRADAS NO MEU DIA A DIA.&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual19" type="text" value="31. (Se você foi diagnosticado com uma doença, e não tem muitas informações sobre a doença e seu tratamento, de que maneira você concorda com a afirmação) &quot;EU COLOCO EM PRÁTICA AS INFORMAÇÕES ENCONTRADAS NO MEU DIA A DIA.&quot;:">
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
                                                                                            Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com relação as seguintes perguntas:
                                                                                        </h4>
                                                                                    </fieldset>


                                                                                    <fieldset id="respostaindividual20">
                                                                                        <legend class="mt-0">20. Se você for diagnosticado com uma doença e você pode conseguir mais informações 
                                                                                            sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação &quot;EU SEI QUANDO 
                                                                                            AS INFORMAÇÕES SÃO BOAS PARA O MEU CASO&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                <input hidden name="perguntaindividual20" type="text" value="32. Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda"> 
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
                                                                                        <legend>21. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU LEVO EM CONTA SE AS INFORMAÇÕES SÃO VERDADEIRAS&quot;</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual21" type="text" value="33. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU LEVO EM CONTA SE AS INFORMAÇÕES SÃO VERDADEIRAS&quot;:">
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
                                                                                        <legend>22. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU TENHO CONHECIMENTO PARA JULGAR SE AS INFORMAÇÕES SÃO CONFIÁVEIS&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual22" type="text" value="34. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU TENHO CONHECIMENTO PARA JULGAR SE AS INFORMAÇÕES SÃO CONFIÁVEIS&quot;:">
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
                                                                                        <legend>23. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU PEGO INFORMAÇÕES QUE ME AJUDAM A TOMAR DECISÕES DE COMO MELHORAR MINHA SAÚDE&quot;.</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual23" type="text" value="35. (Se você for diagnosticado com uma doença e você pode conseguir mais informações sobre a doença e seu tratamento, de que maneira você concorda com  a afirmação) &quot;EU PEGO INFORMAÇÕES QUE ME AJUDAM A TOMAR DECISÕES DE COMO MELHORAR MINHA SAÚDE&quot;:">
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
                                                                                        <legend class="mt-0">24. Você é um trabalhador ativo ou aposentado?</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual24" type="text" value="36. Você é um trabalhador ativo ou aposentado:">
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
                                                                                        <legend>25. Você é ou era: (LER AS ALTERNATIVAS)</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual25" type="text" value="37. Você é ou era: (LER AS ALTERNATIVAS):">
                                                                                                    <input type="radio" name="respostaindividual25" value="Empregado(a)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Empregado(a)'?'checked':'':''}}>
                                                                                                    Empregado(a)
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Trabalha(ou) sem remuneração"  {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Trabalha(ou) sem remuneração'?'checked':'':''}}>
                                                                                                    Trabalha(ou) sem remuneração
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual25" value="Trabalha(ou) por conta própria" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Trabalha(ou) por conta própria'?'checked':'':''}}>
                                                                                                    Trabalha(ou) por conta própria
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
                                                                                                    <input type="radio" name="respostaindividual25" value="Empregada(o) doméstica(o)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual25=='Empregada(o) doméstica(o)'?'checked':'':''}}>
                                                                                                    Empregada(o) doméstica(o)
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual26">
                                                                                        <legend>26. Sua atividade principal na maior parte de sua vida é ou foi em que setor: (MOSTRAR AS ALTERNATIVAS NO CELULAR).</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual26" type="text" value="38. Sua atividade principal na maior parte de sua vida é ou foi em que setor: (MOSTRAR AS ALTERNATIVAS NO CELULAR):">
                                                                                                    <input type="radio" name="respostaindividual26" value="no comércio" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no comércio'?'checked':'':''}}>
                                                                                                    no comércio
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na indústria" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no indústria'?'checked':'':''}}>
                                                                                                    na indústria
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na saúde" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na saúde'?'checked':'':''}}>
                                                                                                    na saúde
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na educação" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na educação'?'checked':'':''}}>
                                                                                                    na educação
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
                                                                                                    <input type="radio" name="respostaindividual26" value="na cultura, comunicação ou esporte" >{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na cultura, comunicação ou esporte'?'checked':'':''}}
                                                                                                    na cultura, comunicação ou esporte
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no setor de alimentos e culinária" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no setor de alimentos e culinária'?'checked':'':''}}>
                                                                                                    no setor de alimentos e culinária
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
                                                                                                    <input type="radio" name="respostaindividual26" value="no cuidado doméstico" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no cuidado doméstico'?'checked':'':''}}>
                                                                                                    no cuidado doméstico
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na construção civil" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no construção civil'?'checked':'':''}}>
                                                                                                    na construção civil
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no setor de água e energia" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no setor de água e energia'?'checked':'':''}}>
                                                                                                    no setor de água e energia
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="nas forças armadas e polícias" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='nas forças armadas e polícias'?'checked':'':''}}>
                                                                                                    nas forças armadas e polícias
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no judiciário" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no judiciário'?'checked':'':''}}>
                                                                                                    no judiciário
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="no setor de manutenção e reparação" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='no setor de manutenção e reparação'?'checked':'':''}}>
                                                                                                    no setor de manutenção e reparação
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input type="radio" name="respostaindividual26" value="na agricultura(lavoura ou plantação de vegetais)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na agricultura(lavoura ou plantação de vegetais)'?'checked':'':''}}>
                                                                                                    na agricultura(lavoura ou plantação de vegetais)
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
                                                                                                    <input type="radio" name="respostaindividual26" value="na pecuária (criação ou cuidado de rebanhos ou granjas)" {{$usuario->formindividual()?$usuario->formindividual()->respostaindividual26=='na pecuária (criação ou cuidado de rebanhos ou granjas)'?'checked':'':''}}>
                                                                                                    na pecuária (criação ou cuidado de rebanhos ou granjas)
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
                                                                                        <legend>27. Há quantos anos você tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00)</legend>
                                                                                        <div class="form-group">
                                                                                            <input hidden name="perguntaindividual27" type="text" value="39. Há quantos anos você tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00):">
                                                                                            <input type="text" name="respostaindividual27" value="{{$usuario->formindividual()?$usuario->formindividual()->respostaindividual27:''}}" class="form-control" >
                                                                                        </div>
                                                                                    </fieldset>


                                                                                    <fieldset id="individual28">
                                                                                        <legend>28. De um modo geral, em comparação a pessoas da sua idade, como você considera o seu estado de saúde? (LER AS ALTERNATIVAS)</legend>
                                                                                        <div class="form-group">
                                                                                            <div class="radio">
                                                                                                <label>
                                                                                                    <input hidden name="perguntaindividual28" type="text" value="39. Há quantos anos você tem essa atividade? (SE MENOR DO QUE 01 ANO MARQUE 00):">
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
                                                            <h5 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
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
                                                                                            Alguma vez um médico lhe informou que você teve ou tem alguma das seguintes doenças?
                                                                                        </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual29">
                                                                                    <legend class="mt-0">29. Hipertensão (Pressão alta?)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual29" type="text" value="41. Hipertensão (Pressão alta?):">
                                                                                                <input type="radio" name="respostaindividual29" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual29=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>30. Infarto do miocárdio (ataque do coração)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual30" type="text" value="42. Infarto do miocárdio (ataque do coração):">
                                                                                                <input type="radio" name="respostaindividual30" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual30=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>31. Angina de peito (isquemia ou má circulação no coração)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual31" type="text" value="43. Angina de peito (isquemia ou má circulação no coração):">
                                                                                                <input type="radio" name="respostaindividual31" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual31=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>32. Insuficiência cardíaca (coração grande ou dilatado)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual32" type="text" value="44. Insuficiência cardíaca (coração grande ou dilatado):">
                                                                                                <input type="radio" name="respostaindividual32" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual32=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>33. Febre reumática? (válvula entupida ou sopro no coração que exige controle médico e, quando jovem, uso de antibiótico por muitos anos)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual33" type="text" value="45. Febre reumática? (válvula entupida ou sopro no coração que exige controle médico e, quando jovem, uso de antibiótico por muitos anos):">
                                                                                                <input type="radio" name="respostaindividual33" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual33=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>34. Doença de Chagas?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual34" type="text" value="25. Doença de Chagass:">
                                                                                                <input type="radio" name="respostaindividual34" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual34=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual35" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual35=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>36. Doença do rim (p. ex. insuficiência, pedra ou cálculo, nefrite, doença policística)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual36" type="text" value="27. Doença do rim (p. ex. insuficiência, pedra ou cálculo, nefrite, doença policística):">
                                                                                                <input type="radio" name="respostaindividual36" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual36=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>37. Hanseníase?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual37" type="text" value="28. Hanseníase:">
                                                                                                <input type="radio" name="respostaindividual37" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual37=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual38" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual38=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>39. Malária?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual39" type="text" value="30. Malária:">
                                                                                                <input type="radio" name="respostaindividual39" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual39=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual40" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual40=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual41" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual41=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual42" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual42=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual43" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual43=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>44. Enfisema, bronquite crônica ou doença pulmonar obstrutiva crônica (DPOC)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual44" type="text" value="35. Enfisema, bronquite crônica ou doença pulmonar obstrutiva crônica (DPOC):">
                                                                                                <input type="radio" name="respostaindividual44" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual44=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>45. Asma (bronquite asmática)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual45" type="text" value="36. Asma (bronquite asmática):">
                                                                                                <input type="radio" name="respostaindividual45" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual45=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>46. Artrite reumatóide ou lupus eritematoso?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual46" type="text" value="37. Artrite reumatóide ou lupus eritematoso:">
                                                                                                <input type="radio" name="respostaindividual46" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual46=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>47. Cirrose do fígado, hepatite?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual47" type="text" value="38. Cirrose do fígado, hepatite:">
                                                                                                <input type="radio" name="respostaindividual47" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual47=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>48. Câncer?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual48" type="text" value="39. Câncer:">
                                                                                                <input type="radio" name="respostaindividual48" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual48=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                                <input type="radio" name="respostaindividual49" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual49" value="Sim, diagnóstico clínico, só pelos sintomas" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Sim, diagnóstico clínico, só pelos sintomas'?'checked':'':''}}>
                                                                                                Sim, diagnóstico clínico, só pelos sintomas
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual49" value="Sim, diagnóstico por RT-PCR ou exame com swab no nariz" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Sim, diagnóstico por RT-PCR ou exame com swab no nariz'?'checked':'':''}}>
                                                                                                Sim, diagnóstico por RT-PCR ou exame com swab no nariz
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual49" value="Sim, diagnóstico por sorologia ou exame do sangue" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual49=='Sim, diagnóstico por sorologia ou exame do sangue'?'checked':'':''}}>
                                                                                                Sim, diagnóstico por sorologia ou exame do sangue
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual50"> 
                                                                                    <legend>50. Você foi vacinado (a) contra COVID-19?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual50" type="text" value="41. Você foi vacinado (a) contra COVID-19:">
                                                                                                <input type="radio" id="respostaindividual50" name="respostaindividual50" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual50=='Não'?'checked':'':''}}>
                                                                                                Não ( PULAR PARA 43)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual50" name="respostaindividual50" value="Sim, só a primeira dose" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual50=='Sim, só a primeira dose'?'checked':'':''}}>
                                                                                                Sim, só a primeira dose ( PULAR PARA 43)
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
                                                                                    <legend>51. Você teve COVID-19 após a segunda dose da vacina? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual51" type="text" value="42. Você teve COVID-19 após a segunda dose da vacina:">
                                                                                                <input type="radio" name="respostaindividual51" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual51=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend class="mt-0">52. Há quantos anos você convive com o diabetes? (SE MENOR DO QUE 01 ANO MARQUE 00)</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual52" type="text" value="43. Há quantos anos você convive com o diabetes? (SE MENOR DO QUE 01 ANO MARQUE 00):">
                                                                                        <input type="text" name="respostaindividual52" class="form-control" value="{{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual52:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual53">
                                                                                    <legend>53. Você já teve lesão ou ferida no pé provocada pelo Diabetes?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual53" type="text" value="44. Você já teve lesão ou ferida no pé provocada pelo Diabetes:">
                                                                                                <input type="radio" name="respostaindividual53" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual53=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>54. Em quantos dos últimos SETE DIAS seguiu uma dieta saudável?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual54" type="text" value="45. Em quantos dos últimos SETE DIAS seguiu uma dieta saudável:">
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
                                                                                    <legend>55. Durante o último mês, QUANTOS DIAS POR SEMANA, seguiu a orientação alimentar, dada por um profissional de saúde?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual55" type="text" value="46. Durante o último mês, QUANTOS DIAS POR SEMANA, seguiu a orientação alimentar, dada por um profissional de saúde:">
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
                                                                                    <legend>56. Em quantos dos últimos SETE DIAS comeu cinco ou mais porções de frutas e/ou vegetais?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual56" type="text" value="47. Em quantos dos últimos SETE DIAS comeu cinco ou mais porções de frutas e/ou vegetais:">
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
                                                                                    <legend>57. Em quantos dos últimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou alimentos com leite integral ou derivados?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual57" type="text" value="48. Em quantos dos últimos SETE DIAS comeu alimentos ricos em gordura, como carnes vermelhas ou alimentos com leite integral ou derivados:">
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
                                                                                    <legend>58. Em quantos dos últimos sete dias comeu doces?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual58" type="text" value="50. Em quantos dos últimos sete dias comeu doces:">
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
                                                                                    <legend>59. Em quantos dos últimos SETE DIAS realizou atividade física durante pelo menos 30 minutos (minutos totais de atividade contínua, inclusive andar)</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual59" type="text" value="51. Em quantos dos últimos SETE DIAS realizou atividade física durante pelo menos 30 minutos (minutos totais de atividade contínua, inclusive andar):">
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
                                                                                    <legend>60. Em quantos dos últimos SETE DIAS praticou algum tipo de exercício físico específico (nadar, caminhar,andar de bicicleta), sem incluir suas atividades em casa ou em seu trabalho?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual60" type="text" value="52. Em quantos dos últimos SETE DIAS praticou algum tipo de exercício físico específico (nadar, caminhar,andar de bicicleta), sem incluir suas atividades em casa ou em seu trabalho:">
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
                                                                                    <legend>61. Em quantos dos últimos SETE DIAS examinou os seus pés?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual61" type="text" value="53. Em quantos dos últimos SETE DIAS examinou os seus pés:">
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
                                                                                    <legend>62. Em quantos dos últimos SETE DIAS examinou dentro dos sapatos antes de calçá-los?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual62" type="text" value="54. Em quantos dos últimos SETE DIAS examinou dentro dos sapatos antes de calçá-los:">
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
                                                                                    <legend>63. Em quantos dos últimos SETE DIAS secou os espaços entre os dedos dos pés depois de lavá-los?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                        <input hidden name="perguntaindividual63" type="text" value="55. Em quantos dos últimos SETE DIAS secou os espaços entre os dedos dos pés depois de lavá-los:">
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
                                                                                    <legend>64. Em quantos dos últimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi recomendado?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual64" type="text" value="56. Em quantos dos últimos SETE DIAS tomou seus medicamentos do diabetes, conforme foi recomendado:">
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
                                                                                    <legend>65. Em quantos dos últimos SETE DIAS tomou suas injeções de insulina, conforme foi recomendado?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual65" type="text" value="57. Em quantos dos últimos SETE DIAS tomou suas injeções de insulina, conforme foi recomendado:">
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
                                                                                    <legend>66. Em quantos dos últimos SETE DIAS tomou o número indicado de comprimidos do diabetes?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual66" type="text" value="58. Em quantos dos últimos SETE DIAS tomou o número indicado de comprimidos do diabetes:">
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
                                                                                    <legend>67. Algum médico ou enfermeiro solicitou que você realizasse em casa o exame de açúcar no sangue na pontado dedo</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual67" type="text" value="59. Algum médico ou enfermeiro solicitou que você realizasse em casa o exame de açúcar no sangue na pontado dedo:">
                                                                                                <input type="radio" name="respostaindividual67" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual67=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>68. Você tem o aparelho para realizar o exame de açúcar no sangue na ponta do dedo?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual68" type="text" value="60. Você tem o aparelho para realizar o exame de açúcar no sangue na ponta do dedo:">
                                                                                                <input type="radio" name="respostaindividual68" value="Não" {{$usuario->formindividualprimeiro()?$usuario->formindividualprimeiro()->respostaindividual68=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>69. Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual69" type="text" value="61. Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue:">
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
                                                                                    <legend>70. Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue o número de vezes recomendado pelo médico ou enfermeiro?</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                        <label class="radio-inline">
                                                                                            <input hidden name="perguntaindividual70" type="text" value="62. Em quantos dos últimos SETE DIAS avaliou o açúcar no sangue o número de vezes recomendado pelo médico ou enfermeiro:">
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
                                                                                <!-- FIM 2 - FORMULÁRIO INDIVIDUAL  -->

                                                                                <div class="text-center">
                                                                                    <button class="btn btn-primary mt-5" type="submit" >SALVAR E CONTINUAR </button>
                                                                                </div>
                                                                </form>
                                                                <!-- FIM FORMULÁRIO 2 -->
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item mb-3">
                                                            <h5 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                                                                                    <h4 class="pt-5">Agora gostaria de fazer algumas perguntas sobre cansaço ou falta de ar</h4>
                                                                                </fieldset>

                                                                                <fieldset id="respostaindividual71">
                                                                                    <legend>71. Você consegue subir um lance de escadas de 8 degraus carregando peso (± 10Kg) ou caminhar rápido no terreno plano ou subir ladeiras sem ter que parar por cansaço ou falta de ar?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual71" type="text" value="63. Você consegue subir um lance de escadas de 8 degraus carregando peso (± 10Kg) ou caminhar rápido no terreno plano ou subir ladeiras sem ter que parar por cansaço ou falta de ar:">
                                                                                                <input type="radio" id="respostaindividual71" name="respostaindividual71" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual71=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULE PARA QUESTÃO 66)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual71" name="respostaindividual71" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual71=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual72">
                                                                                    <legend>72. Você consegue caminhar devagar no terreno plano ou arrumar a casa ou tomar banho sem ter que parar por cansaço ou falta de ar?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual72" type="text" value="64. Você consegue caminhar devagar no terreno plano ou arrumar a casa ou tomar banho sem ter que parar por cansaço ou falta de ar:">
                                                                                                <input type="radio" id="respostaindividual72" name="respostaindividual72" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual72=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULE PARA QUESTÃO 66)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual72" name="respostaindividual72" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual72=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual73" >
                                                                                    <legend>73. Você tem cansaço ou falta de ar quando está comendo, sentado ou deitado?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual73" type="text" value="65. Você tem cansaço ou falta de ar quando está comendo, sentado ou deitado:">
                                                                                                <input type="radio" id="respostaindividual73" name="respostaindividual73" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual73=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual73" name="respostaindividual73" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual73=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual74">
                                                                                    <legend>74.  Você tem sentido dor ou desconforto no peito (tórax)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual74" type="text" value="66.  Você tem sentido dor ou desconforto no peito (tórax):">
                                                                                                <input type="radio" id="respostaindividual74" name="respostaindividual74" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual74=='Não'?'checked':'':''}}>
                                                                                                Não (PULE PARA A QUESTÃO 69)
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
                                                                                    <legend>75. Você sente essa dor no peito quando você está andando no terreno plano?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual75" type="text" value="67. Você sente essa dor no peito quando você está andando no terreno plano:">
                                                                                                <input type="radio" id="respostaindividual75" name="respostaindividual75" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual75=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>76. Você sente essa dor no peito quando você sobe uma ladeira, um lance de escadas ou caminha rápido no plano?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual76" type="text" value="68. Você sente essa dor no peito quando você sobe uma ladeira, um lance de escadas ou caminha rápido no plano:">
                                                                                                <input type="radio" id="respostaindividual76" name="respostaindividual76" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual76=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>77. Você foi submetido à cirurgia de ponte safena ou mamária ou angioplastia ou implantação de stent na artéria coronária?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual77" type="text" value="69. Você foi submetido à cirurgia de ponte safena ou mamária ou angioplastia ou implantação de stent na artéria coronária:">
                                                                                                <input type="radio" id="respostaindividual77" name="respostaindividual77" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual77=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>78. Você teve ou tem outra doença que não lhe foi perguntada? (ANOTAR O NOME DA DOENÇA, SE RESPOSTA NEGATIVA, INFORMAR 00)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual78" type="text" value="70. Você teve ou tem outra doença que não lhe foi perguntada? (ANOTAR O NOME DA DOENÇA, SE RESPOSTA NEGATIVA, INFORMAR 00):">
                                                                                        <input type="text" name="respostaindividual78" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual78:''}}">
                                                                                    </div>
                                                                                </fieldset>

                                                                                
                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>
                                                                                        As próximas perguntas estão relacionadas ao cuidado com a sua saúde
                                                                                    </h4>
                                                                                </fieldset>


                                                                                <fieldset id="individual79">
                                                                                    <legend class="mt-0">79. Você possui plano de saúde?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual79" type="text" value="71. Você possui plano de saúde:">
                                                                                                <input type="radio" name="respostaindividual79" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual79=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend >80. Qual o tipo de unidade de saúde na qual você faz tratamento? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual80" type="text" value="72. Qual o tipo de unidade de saúde na qual você faz tratamento? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" name="respostaindividual80" value="1. Estratégia de Saúde da Família ou casa família do bairro do SUS" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='1. Estratégia de Saúde da Família ou casa família do bairro do SUS'?'checked':'':''}}>
                                                                                                1. Estratégia de Saúde da Família ou casa família do bairro do SUS
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="2. Unidade Básica de Saúde no bairro do SUS" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='2. Unidade Básica de Saúde no bairro do SUS'?'checked':'':''}}>
                                                                                                2. Unidade Básica de Saúde no bairro do SUS
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
                                                                                                <input type="radio" name="respostaindividual80" value="5. Ambulatório especializado em Diabetes fora do bairro do SUS" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='5. Ambulatório especializado em Diabetes fora do bairro do SUS'?'checked':'':''}}>
                                                                                                5. Ambulatório especializado em Diabetes fora do bairro do SUS
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual80" value="6. Ambulatório do plano de saúde" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual80=='6. Ambulatório do plano de saúde'?'checked':'':''}}>
                                                                                                6. Ambulatório do plano de saúde
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend>81. Quantas vezes você fez consulta com o médico dessa unidade nos últimos 12 meses?</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual81" type="text" value="73. Quantas vezes você fez consulta com o médico dessa unidade nos últimos 12 meses:">
                                                                                        <input type="text" name="respostaindividual81" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual81:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend>82. O Censo Brasileiro (IBGE) usa os termos ‘preta’, ‘parda’, ‘branca’, ‘amarela’ e ‘indígena’ para classificara cor ou raça das pessoas. Se o(a) Sr.(a) tivesse que responder ao Censo do IBGE hoje, como se classificaria a respeito de sua cor ou raça? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual82" type="text" value="74. O Censo Brasileiro (IBGE) usa os termos ‘preta’, ‘parda’, ‘branca’, ‘amarela’ e ‘indígena’ para classificara cor ou raça das pessoas. Se o(a) Sr.(a) tivesse que responder ao Censo do IBGE hoje, como se classificaria a respeito de sua cor ou raça:">
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
                                                                                                <input type="radio" name="respostaindividual82" value="5. Indígena" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual82=='5. Indígena'?'checked':'':''}}>
                                                                                                5. Indígena
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <!--  -->
                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>
                                                                                        As próximas perguntas se referem à sua vida familiar
                                                                                    </h4>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <legend class="mt-0">83. Qual é a sua situação conjugal atual? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual83" type="text" value="75. Qual é a sua situação conjugal atual? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" name="respostaindividual83" value="1. Casada/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='1. Casada/o'?'checked':'':''}}>
                                                                                                1. Casada/o
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual83" value="2. União consensual (sem casamento civil)" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='2. União consensual (sem casamento civil)'?'checked':'':''}}>
                                                                                                2. União consensual (sem casamento civil)
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
                                                                                                <input type="radio" name="respostaindividual83" value="6. Viúva/o" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual83=='6. Viúva/o'?'checked':'':''}}>
                                                                                                6. Viúva/o
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual84">
                                                                                    <legend>84. Você tem filhos (considere todos os filhos vivos naturais ou adotivos)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual84" type="text" value="76. Você tem filhos (considere todos os filhos vivos naturais ou adotivos):">
                                                                                                <input type="radio" id="respostaindividual84"  name="respostaindividual84" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual84=='Não'?'checked':'':''}}>
                                                                                                Não (PULE PARA QUESTÃO 78)
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
                                                                                    <legend>85. Quantos filhos você tem? </legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual85" type="text" value="77. Quantos filhos você tem:">
                                                                                        <input type="text" name="respostaindividual85" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual85:''}}">
                                                                                    </div>
                                                                                </fieldset>
                                                                                

                                                                                <fieldset id="respostaindividual86">
                                                                                    <legend >86. Você é ou já foi fumante, ou seja, já fumou pelo menos 100 cigarros (cinco maços de cigarros) ao longo da sua vida?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual86" type="text" value="78. Você é ou já foi fumante, ou seja, já fumou pelo menos 100 cigarros (cinco maços de cigarros) ao longo da sua vida:">
                                                                                                <input type="radio" id="respostaindividual86" name="respostaindividual86" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual86=='Não'?'checked':'':''}}>
                                                                                                Não (PULE PARA QUESTÃO 92)
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
                                                                                    <legend >87. Com que idade você começou a fumar?</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual87" type="text" value="79. Com que idade você começou a fumar:">
                                                                                        <input id="respostaindividual87" type="text" name="respostaindividual87" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual87:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual88">
                                                                                    <legend>88. Você fuma cigarros atualmente?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual88" type="text" value="80. Você fuma cigarros atualmente:">
                                                                                                <input type="radio" id="respostaindividual88" name="respostaindividual88" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual88=='Não'?'checked':'':''}}>
                                                                                                Não  
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual88" name="respostaindividual88" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual88=='Sim'?'checked':'':''}}>
                                                                                                Sim (PULAR PARA QUESTÃO 83)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual89">
                                                                                    <legend>89. Quando fumou o seu último cigarro?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual89" type="text" value="81. Quando fumou o seu último cigarro:">
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Hoje" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Hoje'?'checked':'':''}}>
                                                                                                Hoje
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="No último mês" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='No último mês'?'checked':'':''}}>
                                                                                                No último mês
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Um a três meses atrás" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Um a três meses atrás'?'checked':'':''}}>
                                                                                                Um a três meses atrás
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Quatro a doze meses atrás" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Quatro a doze meses atrás'?'checked':'':''}}>
                                                                                                Quatro a doze meses atrás
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Um a dois anos atrás" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Um a dois anos atrás'?'checked':'':''}}>
                                                                                                Um a dois anos atrás
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual89" name="respostaindividual89" value="Há mais de dois anos atrás" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual89=='Há mais de dois anos atrás'?'checked':'':''}}>
                                                                                                Há mais de dois anos atrás
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual90">
                                                                                    <legend>90. Com que idade você parou de fumar pela última vez?</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual90" type="text" value="82. Com que idade você parou de fumar pela última vez:">
                                                                                        <input id="respostaindividual90" type="text" name="respostaindividual90" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual91:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual91">
                                                                                    <legend>91. Em geral, quantos cigarros por dia você fuma (ou fumava)? (SE &lt;01&#x3D;00)</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual91" type="text" value="83. Em geral, quantos cigarros por dia você fuma (ou fumava)? (SE &lt;01&#x3D;00):">
                                                                                        <input id="respostaindividual91" type="text" name="respostaindividual91" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual91:''}}" class="form-control">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual92">
                                                                                    <legend>92. Ao todo, durante quantos anos você fumou ou fuma? (Desconte os períodos em que você deixou defumar) (SE &lt;01&#x3D; 00 -FAZER O CÁLCULO JUNTO COM O PARTICIPANTE)</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual92" type="text" value="84. Ao todo, durante quantos anos você fumou ou fuma? (Desconte os períodos em que você deixou defumar) (SE &lt;01&#x3D; 00 -FAZER O CÁLCULO JUNTO COM O PARTICIPANTE):">
                                                                                        <input id="respostaindividual92" type="text" name="respostaindividual92" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual91:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual93">
                                                                                    <legend>93. Você fumou hoje? (SE O PARTICIPANTE PAROU DE FUMAR, NÃO FAÇA ESSA PERGUNTA, PULE PARA QUESTÃO 92)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual93" type="text" value="85. Você fumou hoje? (SE O PARTICIPANTE PAROU DE FUMAR, NÃO FAÇA ESSA PERGUNTA, PULE PARA QUESTÃO 92):">
                                                                                                <input type="radio" id="respostaindividual93" name="respostaindividual93" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual93=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual93" name="respostaindividual93" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual93=='Não'?'checked':'':''}}>
                                                                                                Não (PULE PARA QUESTÃO 92)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual94">
                                                                                    <legend>94. Você fumou um cigarro − ainda que só uma tragada − durante os últimos sete dias?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual94" type="text" value="86. Você fumou um cigarro − ainda que só uma tragada − durante os últimos sete dias:">
                                                                                                <input type="radio" name="respostaindividual94" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual94=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>95. Quanto tempo você demora para fumar seu primeiro cigarro depois de se levantar pela manhã?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual95" type="text" value="87. Quanto tempo você demora para fumar seu primeiro cigarro depois de se levantar pela manhã:">
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
                                                                                    <legend>96. Para você é difícil abster-se e não fumar naqueles lugares onde está proibido (por exemplo: um hospital,biblioteca, igreja, ônibus etc.)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual96" type="text" value="88. Para você é difícil abster-se e não fumar naqueles lugares onde está proibido (por exemplo: um hospital,biblioteca, igreja, ônibus etc.):">

                                                                                                <input type="radio" name="respostaindividual96" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual96=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual96" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual96=='Não'?'checked':'':''}}>
                                                                                                Não
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

                                                                                                <input type="radio" name="respostaindividual97" value="O primeiro da manhã" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual97=='O primeiro da manhã'?'checked':'':''}}>
                                                                                                O primeiro da manhã
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
                                                                                    <legend>98.Habitualmente você fuma mais durante as primeiras horas do dia que durante o resto do dia?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual98" type="text" value="90.Habitualmente você fuma mais durante as primeiras horas do dia que durante o resto do dia:">

                                                                                                <input type="radio" name="respostaindividual98" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual98=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual98" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual98=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual99">
                                                                                    <legend>99. Você fuma estando doente ou na cama?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual99" type="text" value="91. Você fuma estando doente ou na cama:">
                                                                                                <input type="radio"  name="respostaindividual99" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual99=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual99" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual99=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <h4>
                                                                                        Vamos conversar sobre atividade física
                                                                                    </h4>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual100">
                                                                                    <legend class="mt-0">100. De um modo geral, qual das alternativas define melhor os seus hábitos diários em relação à prática de atividade física ?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual100" type="text" value="92. De um modo geral, qual das alternativas define melhor os seus hábitos diários em relação à prática de atividade física:">
                                                                                                <input type="radio" name="respostaindividual100" value="1. Passo a maior parte do dia sentado" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='1. Passo a maior parte do dia sentado'?'checked':'':''}}>
                                                                                                1. Passo a maior parte do dia sentado
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="2. Não ando muito durante o dia" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='2. Não ando muito durante o dia'?'checked':'':''}}>
                                                                                                2. Não ando muito durante o dia
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="3. Caminho ou fico de pé bastante durante o dia, mas não carrego ou levanto coisas com frequência" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='3. Caminho ou fico de pé bastante durante o dia, mas não carrego ou levanto coisas com frequência'?'checked':'':''}}>
                                                                                                3. Caminho ou fico de pé bastante durante o dia, mas não carrego ou levanto coisas com frequência
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="4. Carrego pesos leves/subo escadas com frequência/faço exercícios regulares" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='4. Carrego pesos leves/subo escadas com frequência/faço exercícios regulares'?'checked':'':''}}>
                                                                                                4. Carrego pesos leves/subo escadas com frequência/faço exercícios regulares
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" name="respostaindividual100" value="5. Faço trabalho pesado ou exercícios pesados regularmente" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100=='5. Faço trabalho pesado ou exercícios pesados regularmente'?'checked':'':''}}>
                                                                                                5. Faço trabalho pesado ou exercícios pesados regularmente
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset>
                                                                                    <div class="form-group">
                                                                                        <h4>
                                                                                            Agora, gostaríamos de saber um pouco sobre aspectos religiosos da sua vida
                                                                                        </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual101">
                                                                                    <legend class="mt-0">101. Atualmente, você possui alguma religião ou culto? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual101" type="text" value="93. Atualmente, você possui alguma religião ou culto:">
                                                                                                <input type="radio" id="respostaindividual101" name="respostaindividual101" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual101=='Não'?'checked':'':''}}>
                                                                                                Não (PULAR PARA QUESTÃO 95)
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
                                                                                    <legend>102. Atualmente, qual é a sua religião ou culto? (aquela com que você mais se identifica) (MOSTRAR A LISTA NO CELULAR)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual102" type="text" value="94. Atualmente, qual é a sua religião ou culto? (aquela com que você mais se identifica) (MOSTRAR A LISTA NO CELULAR):">
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="1. Adventista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='1. Adventista'?'checked':'':''}}>
                                                                                                1. Adventista
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="2. Assembléia de Deus" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='2. Assembléia de Deus'?'checked':'':''}}>
                                                                                                2. Assembléia de Deus
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
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="6. Candomblé" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='6. Candomblé'?'checked':'':''}}>
                                                                                                6. Candomblé
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="7. Casa da Benção" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='7. Casa da Benção'?'checked':'':''}}>
                                                                                                7. Casa da Benção
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="8. Católica" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='8. Católica'?'checked':'':''}}>
                                                                                                8. Católica
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="9. Congregação Cristã do Brasil" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='9. Congregação Cristã do Brasil'?'checked':'':''}}>
                                                                                                9. Congregação Cristã do Brasil
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="10. Espírita Kardecista" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='10. Espírita Kardecista'?'checked':'':''}}>
                                                                                                10. Espírita Kardecista
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
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="14. Messiânica" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='14. Messiânica'?'checked':'':''}}>
                                                                                                14. Messiânica
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
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="17. Testemunha de Jeová" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='17. Testemunha de Jeová'?'checked':'':''}}>
                                                                                                17. Testemunha de Jeová
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
                                                                                                <input type="radio" id="respostaindividual102" name="respostaindividual102" value="Outras (Especificar na proxíma pergunta)" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual102=='Outras (Especificar na proxíma pergunta)'?'checked':'':''}}>
                                                                                                Outras (Especificar na proxíma pergunta)
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
                                                                                            As próximas perguntas se referem ao consumo de cerveja, 
                                                                                            chope, vinho, uísque, cachaça ou outros destilados, licores, 
                                                                                            batidas ou qualquer outro tipo de bebida alcoólica, seja consumida 
                                                                                            em refeições ou fora dela, em situações especiais ou apenas para relaxar.
                                                                                        </h4>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual103">
                                                                                    <legend class="mt-0">103. O(a) Sr(a) já consumiu bebidas alcoólicas? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual103" type="text" value="95. O(a) Sr(a) já consumiu bebidas alcoólicas:">
                                                                                                <input type="radio" id="respostaindividual103" name="respostaindividual103" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual103=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual103" name="respostaindividual103" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual103=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual104">
                                                                                    <legend>104. Atualmente, o(a) Sr(a) consome bebidas alcoólicas?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual104" type="text" value="96. Atualmente, o(a) Sr(a) consome bebidas alcoólicas:">
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="Sim" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="Não, parei a menos de 1 ano" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='Não, parei a menos de 1 ano'?'checked':'':''}}>
                                                                                                Não, parei a menos de 1 ano (PULAR PARA QUESTÃO 107)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="Não, parei entre 1 a 2 anos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='Não, parei entre 1 a 2 anos'?'checked':'':''}}>
                                                                                                Não, parei entre 1 a 2 anos (PULAR PARA QUESTÃO 107)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual104" name="respostaindividual104" value="Não, parei há mais de 2 anos" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual104=='Não, parei há mais de 2 anos'?'checked':'':''}}>
                                                                                                Não, parei há mais de 2 anos (PULAR PARA QUESTÃO 107)
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
                                                                                                <input type="radio" id="respostaindividual105" name="respostaindividual105" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual105=='Não'?'checked':'':''}}>
                                                                                                Não (PULAR PARA QUESTÃO 99)
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
                                                                                    <legend>106. Quantas taças de VINHO TINTO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual106" type="text" value="98. Quantas taças de VINHO TINTO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0):">
                                                                                        <input id="respostaindividual106" type="text" name="respostaindividual106" class="form-control" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual98:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual107">
                                                                                    <legend>107. O Sr(a) consome VINHO BRANCO?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual107" type="text" value="99. O Sr(a) consome VINHO BRANCO:">
                                                                                                <input type="radio" id="respostaindividual107" name="respostaindividual107" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual107=='Não'?'checked':'':''}}>
                                                                                                Não (PULAR PARA QUESTÃO 101)
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
                                                                                    <legend>108. Quantas taças de VINHO BRANCO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual108" type="text" value="100. Quantas taças de VINHO BRANCO o(a) Sr(a) consome POR SEMANA? (SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0):">
                                                                                        <input id="respostaindividual108" type="text" name="respostaindividual108" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual100:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual109">
                                                                                    <legend>109. O Sr(a) consome CERVEJA ou CHOPP ?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual109" type="text" value="101. O Sr(a) consome CERVEJA ou CHOPP:">
                                                                                                <input type="radio" id="respostaindividual109" name="respostaindividual109" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual109=='Não'?'checked':'':''}}>
                                                                                                Não (PULAR PARA A QUESTÃO 103)
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
                                                                                    <legend>110. Quantas latas, garrafas ou copos de CERVEJA ou CHOPP o(a) Sr(a) consome POR SEMANA?(NÃO LEIA AS OPÇÕES, ADEQUE A RESPOSTA DADA ÀS ALTERNATIVAS. SE O PARTICIPANTE DISSER QUE TOMA POUCO OU TOMA IRREGULARMENTE, MARQUE 0 - INFORMAR QUANTIDADE E TIPO)</legend>
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
                                                                                    <legend>111. ENTREVISTADOR: escreva a quantidade referente à pergunta anterior</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual111" type="text" value="102. ENTREVISTADOR: escreva a quantidade referente à pergunta anterior:">
                                                                                        <input id="respostaindividual111" type="text" name="respostaindividual111" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual111:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual112">
                                                                                    <legend>112. O Sr(a) consome DESTILADOS (tais como uísque, vodka, tequila, rum, aguardente ou cachaça) oubebidas misturadas preparadas com esses destilados (caipirinha, coquetéis, drinks)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual112" type="text" value="103. O Sr(a) consome DESTILADOS (tais como uísque, vodka, tequila, rum, aguardente ou cachaça) oubebidas misturadas preparadas com esses destilados (caipirinha, coquetéis, drinks):">

                                                                                                <input type="radio" id="respostaindividual112" name="respostaindividual112" value="Não" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual112=='Não'?'checked':'':''}}>
                                                                                                Não (PULAR PARA QUESTÃO 105)
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
                                                                                    <legend>113. Quantas doses (1 DOSE&#x3D; 50 mL &#x3D; 1 xícara de cafezinho) de DESTILADOS (tais como uísque, vodka, tequila, rum aguardente ou cachaça) ou bebidas misturadas preparadas com esses destilados (caipirinha,coquetéis, drinks), o(a) Sr(a) consome POR SEMANA?</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual113" type="text" value="Quantas doses (1 DOSE= 50 mL = 1 xícara de cafezinho) de DESTILADOS (tais como uísque, vodka, tequila, rum aguardente ou cachaça) ou bebidas misturadas preparadas com esses destilados (caipirinha,coquetéis, drinks), o(a) Sr(a) consome POR SEMANA:">
                                                                                        <input id="respostaindividual113" type="text" name="respostaindividual113" value="{{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual113:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual114">
                                                                                    <h4>
                                                                                        ENTREVISTADOR: SEGUEM AS DEFINIÇÕES PARA A PRÓXIMA PERGUNTA.
                                                                                    </h4>
                                                                                    <div class="form-group">
                                                                                        <p class="help-block">
                                                                                            *1 dose <br>
                                                                                            1 lata/long neck de cerveja (350 mL) <br>
                                                                                            1 taça de vinho (120-150 mL) <br>
                                                                                            1 dose de bebida destilada (50mL) <br>
                                                                                            * 2 doses <br>
                                                                                            1 garrafa de cerveja (620mL) <br>
                                                                                            1 dose dupla de bebida destilada (100mL) <br>
                                                                                            * 3 doses = 1 garrafa de cerveja (1L) <br>
                                                                                        </p>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual114">
                                                                                    <legend>114. Nos ÚLTIMOS 12 MESES, com que frequência o(a) Sr(a) consumiu 5 ou mais doses* de qualquer tipo de bebida alcoólica em um período de 2 horas? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual114" type="text" value="105. Nos ÚLTIMOS 12 MESES, com que frequência o(a) Sr(a) consumiu 5 ou mais doses* de qualquer tipo de bebida alcoólica em um período de 2 horas? (LER AS ALTERNATIVAS):">
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
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Duas ou três vezes por mês" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Duas ou três vezes por mês'?'checked':'':''}}>
                                                                                                Duas ou três vezes por mês
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual114" name="respostaindividual114" value="Somente em ocasiões especiais" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual114=='Somente em ocasiões especiais'?'checked':'':''}}>
                                                                                                Somente em ocasiões especiais
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
                                                                                    <legend>115. Do total de bebidas alcoólicas que o(a) Sr(a) consome, com que frequência o(a) Sr(a) ingere junto às refeições?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual115" type="text" value="106. Do total de bebidas alcoólicas que o(a) Sr(a) consome, com que frequência o(a) Sr(a) ingere junto às refeições:">
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Sempre ou quase sempre com as refeições" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Sempre ou quase sempre com as refeições'?'checked':'':''}}>
                                                                                                Sempre ou quase sempre com as refeições
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Maior parte junto a refeições" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Maior parte junto a refeições'?'checked':'':''}}>
                                                                                                Maior parte junto a refeições
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Tanto junto quanto fora das refeições" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Tanto junto quanto fora das refeições'?'checked':'':''}}>
                                                                                                Tanto junto quanto fora das refeições
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Maior parte fora das refeições" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Maior parte fora das refeições'?'checked':'':''}}>
                                                                                                Maior parte fora das refeições
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual115" name="respostaindividual115" value="Nunca ou quase nunca com as refeições" {{$usuario->formindividualsegundo()?$usuario->formindividualsegundo()->respostaindividual115=='Nunca ou quase nunca com as refeições'?'checked':'':''}}>
                                                                                                Nunca ou quase nunca com as refeições
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
                                                        
                                                        <div class="accordion-item mb-3">
                                                            <h5 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
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
                                                                                    <div class="form-group">
                                                                                        <h4>Vamos falar agora sobre os medicamentos que o(a) Sr(a) usa.</h4>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <fieldset >
                                                                                    <legend class="mt-0">116. O(a) Sr(a) toma medicamentos para Diabetes ou açúcar alto no sangue?: (SE O PARTICIPANTE NÃO SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual116" type="text" value="107. O(a) Sr(a) toma medicamentos para Diabetes ou açúcar alto no sangue:">
                                                                                                <input type="radio" id="respostaindividual116" name="respostaindividual116" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual116=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual116" name="respostaindividual116" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual116=='Não'?'checked':'':''}}>
                                                                                                Não
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

                                                                                                <input type="radio" id="respostaindividual117" name="respostaindividual117" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual117=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual117" name="respostaindividual117" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual117=='Não'?'checked':'':''}}>
                                                                                                Não
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

                                                                                                <input type="radio" id="respostaindividual118" name="respostaindividual118" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual118=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual118" name="respostaindividual118" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual118=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual118">
                                                                                    <legend>119. O(a) Sr(a) toma medicamentos para Hipertensão ou pressão alta?: (SE O PARTICIPANTE NÃO SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual119" type="text" value="110. O(a) Sr(a) toma medicamentos para Hipertensão ou pressão alta?: (SE O PARTICIPANTE NÃO SOUBER SOLICITE A RECEITA OU A CAIXA DO MEDICAMENTO):">

                                                                                                <input type="radio" id="respostaindividual119" name="respostaindividual119" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual119=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual119" name="respostaindividual119" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual119=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>

                                                                                <!--  -->
                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>SE A PARTICIPANTE FOR MULHER PREENCHA O QUESTIONÁRIO PARA MULHERES.</h4>
                                                                                    <div class="form-group">
                                                                                        <p class="help-block">
                                                                                            SE O PARTICIPANTE FOR HOMEM AGRADEÇA E INFORME QUE SERÁ REALIZADA A MEDIDA DA PRESSÃO, PESO,
                                                                                            ALTURA E CIRCUNFERÊNCIA ABDOMINAL E AINDA AVALIAÇÃO DOS PÉS.
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
                                                                                                Sim (PULE PARA A QUESTÃO 115)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual122" name="respostaindividual122" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual122=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual123">
                                                                                    <legend>122. Que idade a Sra. tinha quando sua menstruação parou definitivamente?</legend>
                                                                                    <div class="form-group">
                                                                                    <input hidden name="perguntaindividual123" type="text" value="113. Que idade a Sra. tinha quando sua menstruação parou definitivamente:">
                                                                                        <input id="respostaindividual123" type="text" name="respostaindividual123" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual123:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset  id="respostaindividual124">
                                                                                    <legend>123. Por que não menstrua mais? (LEIA AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual124" type="text" value="114. Por que não menstrua mais? (LEIA AS ALTERNATIVAS):">
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="1. Menopausa natural" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='1. Menopausa natural'?'checked':'':''}}>
                                                                                                1. Menopausa natural
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="2. Cirurgia para retirada de útero (histerectomia)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='2. Cirurgia para retirada de útero (histerectomia)'?'checked':'':''}}>
                                                                                                2. Cirurgia para retirada de útero (histerectomia)
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="3. Cirurgia para retirada de dois ovários" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='3. Cirurgia para retirada de dois ovários'?'checked':'':''}}>
                                                                                                3. Cirurgia para retirada de dois ovários
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="4. Cirurgia para retirada de dois ovários e útero" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='4. Cirurgia para retirada de dois ovários e útero'?'checked':'':''}}>
                                                                                                4. Cirurgia para retirada de dois ovários e útero
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual124" name="respostaindividual124" value="5. Outros tratamentos (hormônios, quimioterapia ou radiação)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual124=='5. Outros tratamentos (hormônios, quimioterapia ou radiação)'?'checked':'':''}}>
                                                                                                5. Outros tratamentos (hormônios, quimioterapia ou radiação)
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
                                                                                    <legend class="mt-0">124. A Sra. já esteve grávida? Considere todas as gestações, incluindo aquelas que resultaram em filho nascido vivo ou morto, em aborto espontâneo/perda, aborto provocado e gravidez ectópica/nas trompas.</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual125" type="text" value="115. A Sra. já esteve grávida? Considere todas as gestações, incluindo aquelas que resultaram em filho nascido vivo ou morto, em aborto espontâneo/perda, aborto provocado e gravidez ectópica/nas trompas:">
                                                                                                <input type="radio" id="respostaindividual125" name="respostaindividual125" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual125=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual125" name="respostaindividual125" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual125=='Não'?'checked':'':''}}>
                                                                                                Não (PULE PARA A QUESTÃO 122)
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
                                                                                    <legend>126. Considerando todas as suas gestações, quantas terminaram com Nascidos-vivos:</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual127" type="text" value="117. Considerando todas as suas gestações, quantas terminaram com Nascidos-vivos:">
                                                                                        <input type="text" id="respostaindividual127" name="respostaindividual127" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual127:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual128">
                                                                                    <legend>127. Considerando todas as suas gestações, quantas terminaram com Nascidos-mortos:</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual128" type="text" value="118. Considerando todas as suas gestações, quantas terminaram com Nascidos-mortos:">
                                                                                        <input type="text" id="respostaindividual128" name="respostaindividual128" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual128:''}}" class="form-control" >
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual129">
                                                                                    <legend>128. Considerando todas as suas gestações, quantas terminaram com Abortos:</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual129" type="text" value="119. Considerando todas as suas gestações, quantas terminaram com Abortos:">
                                                                                        <input type="text" id="respostaindividual129" name="respostaindividual129" class="form-control" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual129:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual130">
                                                                                    <legend>129. Considerando todas as suas gestações, quantas terminaram com outras ocorrências como gravidez tubária (nas trompas), mola, etc.)</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual130" type="text" value="120. Considerando todas as suas gestações, quantas terminaram com outras ocorrências como gravidez tubária (nas trompas), mola, etc.):">
                                                                                        <input type="text" id="respostaindividual130" name="respostaindividual130" class="form-control" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual130:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual131">
                                                                                    <legend>130. Apenas confirmando o número total de vezes que a Sra. engravidou foi  |_| _| gestações</legend>
                                                                                    <div class="form-group">
                                                                                        <input hidden name="perguntaindividual131" type="text" value="121. Apenas confirmando o número total de vezes que a Sra. engravidou foi  |_| _| gestações:">
                                                                                        <input type="text" id="respostaindividual131" name="respostaindividual131" class="form-control" value="{{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual131:''}}">
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual129">
                                                                                    <legend>131. Mantendo relações sexuais com frequência, alguma vez a Sra. já tentou engravidar durante um ano completo ou mais e não conseguiu?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual132" type="text" value="122. Mantendo relações sexuais com frequência, alguma vez a Sra. já tentou engravidar durante um ano completo ou mais e não conseguiu:">
                                                                                                <input type="radio" id="respostaindividual132" name="respostaindividual132" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual132=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual132" name="respostaindividual132" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual132=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual130">
                                                                                    <legend>132. Algum médico já lhe deu o diagnóstico de síndrome de ovários policísticos? (LER AS ALTERNATIVAS)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual133" type="text" value="123. Algum médico já lhe deu o diagnóstico de síndrome de ovários policísticos? (LER AS ALTERNATIVAS):">
                                                                                                <input type="radio" id="respostaindividual133" name="respostaindividual133" value="Sim, com base em exame clínico" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual133=='Sim, com base em exame clínico'?'checked':'':''}}>
                                                                                                Sim, com base em exame clínico
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
                                                                                                <input type="radio" id="respostaindividual133" name="respostaindividual133" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual133=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="individual131">
                                                                                    <legend>133. A Sra. fez Ligadura/laqueadura de trompas (esterilização feminina)</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual134" type="text" value="124. A Sra. fez Ligadura/laqueadura de trompas (esterilização feminina):">
                                                                                                <input type="radio" id="respostaindividual134" name="respostaindividual134" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual134=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>134. O seu parceiro fez vasectomia (esterilização masculina)?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual135" type="text" value="125. O seu parceiro fez vasectomia (esterilização masculina):">
                                                                                                <input type="radio" id="respostaindividual135" name="respostaindividual135" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual135=='Não'?'checked':'':''}}>
                                                                                                Não
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
                                                                                    <legend>135. A Sra. (ou seu marido/parceiro) usa ou já usou algum outro método para evitar a gravidez?</legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input hidden name="perguntaindividual136" type="text" value="126. A Sra. (ou seu marido/parceiro) usa ou já usou algum outro método para evitar a gravidez:">
                                                                                                <input type="radio" id="respostaindividual136" name="respostaindividual136" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual136=='Sim'?'checked':'':''}}>
                                                                                                Sim
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual136" name="respostaindividual136" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual136=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>


                                                                                <fieldset id="respostaindividual137">
                                                                                    <legend>136. Qual método anticoncepcional que a Sra. (ou seu marido/parceiro) usa ou usou? Se for o caso, escolha mais de uma opção de resposta. (MOSTRE A LISTA NO CELULAR)</legend>
                                                                                    <div class="form-group">
                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input hidden name="perguntaindividual137" type="text" value="Qual método anticoncepcional que a Sra. (ou seu marido/parceiro) usa ou usou? Se for o caso, escolha mais de uma opção de resposta. (MOSTRE A LISTA NO CELULAR):">
                                                                                                <input type="checkbox" name="respostaindividual137" value="1. Pílula (comprimido oral)"  {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137=='1. Pílula (comprimido oral)'?'checked':'':''}}>
                                                                                                1. Pílula (comprimido oral)
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137a" value="2. Injeções contraceptivas"   {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137a=='2. Injeções contraceptivas'?'checked':'':''}}>
                                                                                                2. Injeções contraceptivas
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
                                                                                                <input type="checkbox" name="respostaindividual137d" value="5. DIU com hormônio (Mirena)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137d=='5. DIU com hormônio (Mirena)'?'checked':'':''}}>
                                                                                                5. DIU com hormônio (Mirena)
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137e" value="6. DIU sem hormônio" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137e=='6. DIU sem hormônio'?'checked':'':''}}>
                                                                                                6. DIU sem hormônio
                                                                                            </label>
                                                                                        </div>

                                                                                        <div>
                                                                                            <label class="radio-inline">
                                                                                                <input type="checkbox" name="respostaindividual137f" value="7. DIU não especificado" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137f=='7. DIU não especificado'?'checked':'':''}}>
                                                                                                7. DIU não especificado
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
                                                                                                <input type="checkbox" name="respostaindividual137i" value="Outras (Especifique na proxíma pergunta)" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual137i=='Outras (Especifique na proxíma pergunta)'?'checked':'':''}}>
                                                                                                Outras (Especifique na proxíma pergunta)
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
                                                                                    <legend>137. A Sra. apresentou perda urinária semanal nos últimos três meses? </legend>
                                                                                    <div class="form-group">
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                            <input hidden name="perguntaindividual138" type="text" value="128. A Sra. apresentou perda urinária semanal nos últimos três meses:">

                                                                                                <input type="radio" id="respostaindividual138" name="respostaindividual138" value="Não" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual138=='Não'?'checked':'':''}}>
                                                                                                Não
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="radio">
                                                                                            <label>
                                                                                                <input type="radio" id="respostaindividual138" name="respostaindividual138" value="Sim" {{$usuario->formindividualterceiro()?$usuario->formindividualterceiro()->respostaindividual138=='Sim'?'checked':'':''}}>
                                                                                                Sim (APLIQUE OS QUESTIONÁRIOS: ICIQ-SF E QUESTIONÁRIO DE QUALIDADE DE VIDA EM INCONTINÊNCIA URINÁRIA (KHQ)
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </fieldset>
                                                                                    
                                                                                <div class="text-center">
                                                                                        <button class="btn btn-primary mt-5" type="submit" id="nav-profile-tab" >ENVIAR FORMULÁRIO </button>
                                                                                </div>

                                                                                <fieldset>
                                                                                    <br>
                                                                                    <h4>
                                                                                        SE A PARTICIPANTE RESPONDEU NÃO, AGRADEÇA E INFORME QUE SERÁ REALIZADA A MEDIDA DA PRESSÃO, 
                                                                                        PESO,ALTURA E CIRCUNFERÊNCIA ABDOMINAL E AINDA AVALIAÇÃO DOS PÉS.
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
                                                © <script>
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

                    <!-- SALTOS DO FORMUÇÁRIO -->
                    <script> 
                       $(document).ready(function() {
                            // SALTO 1 
                            $('input:radio[name="respostaindividual6"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });                           

                            // SALTO 2
                            $('input:radio[id="respostaindividual4"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual5, #respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9, #respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual5, #respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9, #respostaindividual10, #respostaindividual11, #respostaindividual12, #respostaindividual13, #respostaindividual14, #respostaindividual15, #respostaindividual16, #respostaindividual17, #respostaindividual18, #respostaindividual19, #respostaindividual20, #respostaindividual21, #respostaindividual22, #respostaindividual23").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 3
                            $('input:radio[id="respostaindividual5"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual6, #respostaindividual7, #respostaindividual8, #respostaindividual9").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 3.1
                            $('input:radio[id="respostaindividual6"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual7").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
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
                                if (this.checked && this.value == '1 grau completo' || this.checked && this.value == '2 grau incompleto') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual9").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual9").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 5
                            $('input:radio[id="respostaindividual50"]').on("change", function() {
                                if (this.checked && this.value == 'Não' || this.checked && this.value == 'Sim, só a primeira dose') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual51").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual51").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 6
                            $('input:radio[id="respostaindividual71"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual72, #respostaindividual73").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual72, #respostaindividual73").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 7
                            $('input:radio[id="respostaindividual72"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual73").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual73").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 8
                            $('input:radio[id="respostaindividual74"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual75, #respostaindividual76").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual75, #respostaindividual76").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 9
                            $('input:radio[id="respostaindividual84"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual85").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual85").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 10
                            $('input:radio[id="respostaindividual86"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual87, #respostaindividual88, #respostaindividual89, #respostaindividual90, #respostaindividual91, #respostaindividual92, #respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual87, #respostaindividual88, #respostaindividual89, #respostaindividual90, #respostaindividual91, #respostaindividual92, #respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO
                            $('input:radio[id="respostaindividual88"]').on("change", function()  {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual93, #respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 11
                            $('input:radio[id="respostaindividual88"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual89, #respostaindividual90").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual89, #respostaindividual90").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 12
                            $('input:radio[id="respostaindividual93"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual94, #respostaindividual95, #respostaindividual96, #respostaindividual97, #respostaindividual98, #respostaindividual99").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 13
                            $('input:radio[id="respostaindividual101"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual102, #respostaindividualsegundo116").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual102, #respostaindividualsegundo116").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 14
                            $('input:radio[id="respostaindividual103"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual104, #respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual104, #respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 15 (CONDIÇÃO INVERSA)
                            $('input:radio[id="respostaindividual104"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                } else {
                                    $("#respostaindividual105, #respostaindividual106, #respostaindividual107, #respostaindividual108, #respostaindividual109, #respostaindividual110, #respostaindividual111, #respostaindividual112, #respostaindividual113, #respostaindividual114, #respostaindividual115").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                }
                            });

                            // SALTO 16
                            $('input:radio[id="respostaindividual105"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual106").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual106").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 17
                            $('input:radio[id="respostaindividual107"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual108").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual108").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 18
                            $('input:radio[id="respostaindividual109"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual110, #respostaindividual111").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual110, #respostaindividual111").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 19
                            $('input:radio[id="respostaindividual112"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual113").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual113").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 20
                            $('input:radio[id="respostaindividual122"]').on("change", function() {
                                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual123, #respostaindividual124, #respostaindividual139").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual123, #respostaindividual124, #respostaindividual139").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 21
                            $('input:radio[id="respostaindividual125"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual126, #respostaindividual127, #respostaindividual128, #respostaindividual129, #respostaindividual130, #respostaindividual131").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
                                } else {
                                    $("#respostaindividual123, #respostaindividual127, #respostaindividual128, #respostaindividual129, #respostaindividual130, #respostaindividual131").show(); // CASO NEGATIVO EXIBIR ESSAS 
                                }
                            });

                            // SALTO 22
                            $('input:radio[id="respostaindividual136"]').on("change", function() {
                                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                                    $("#respostaindividual137, #respostaindividual140").hide(); // QUESTÕES QUE SERÃO OCULTAS CASO POSITIVO PARA SALTO
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