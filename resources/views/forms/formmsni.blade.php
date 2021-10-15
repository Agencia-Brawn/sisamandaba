@extends('layouts.app')

@section('content')

<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

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
                                            <li><a class="dropdown-item" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formulário Individual</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formulário Familiar</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formulário Antropometria</a></li>
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
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
                                <li><a class="dropdown-item" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formulário Individual</a></li>
                                <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formulário Familiar</a></li>
                                <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formulário Antropometria</a></li>
                                <li><a class="dropdown-item  nav-link active" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>         
        </div>  
        <!-- FIM MENU MAIOR QUE 767PX --> 
            

        <div class="col-md-9 col-lg-10 col-xl-10 col-12 ps-5">
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

                                                
                                                <!-- MSNI - Avaliação dos pés (names ok) -->
                                                <form action="{{route('post.form.msni',['usuario'=>$usuario->id])}}" id="form4" method="POST">
                                                    @csrf
                                                    <fieldset>
                                                        <h2>
                                                            MSNI - Avaliação dos pés<br>
                                                            <small>Oliveira FB et al. Cross-cultural adaptation MNSI-Brazil - 2016</small>
                                                        </h2>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Nome do avaliador</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni1" type="text" value="Nome do avaliador:">
                                                            <input type="text" name="respostamsni1" class="form-control" value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni1:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Data da entrevista</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni2" type="text" value="Data da entrevista:">
                                                            <input type="date" name="respostamsni2" class="form-control" value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni2:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <h4>História do Paciente</h4>
                                                        <div class="form-group">
                                                            <h6>
                                                                Iremos tirar alguns minutos para responder as seguintes perguntas sobre a sensibilidade de suas pernas e pés. 
                                                                Responda sim ou não baseado em como você usualmente se sente. 
                                                            </h6>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>1. Você sente que suas pernas e/ou pés estão dormentes?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni3" type="text" value="Você sente que suas pernas e/ou pés estão dormentes:">
                                                                    <input type="radio" name="respostamsni3" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni3=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni3" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni3=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>2. Você já sentiu alguma dor em queimação em suas pernas e/ou pés?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni4" type="text" value="Você já sentiu alguma dor em queimação em suas pernas e/ou pés:">
                                                                    <input type="radio" name="respostamsni4" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni4=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni4" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni4=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>3. Os seus pés estão muito sensíveis ao toque?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni5" type="text" value="Os seus pés estão muito sensíveis ao toque:">
                                                                    <input type="radio" name="respostamsni5" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni5=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni5" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni5=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>4. Você tem câimbras nos músculos de suas pernas e/ou pés?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni6" type="text" value="Você tem câimbras nos músculos de suas pernas e/ou pés:">
                                                                    <input type="radio" name="respostamsni6" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni6=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni6" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni6=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>5. Você já teve sensações de formigamento em suas pernas e/ou pés?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni7" type="text" value="Você já teve sensações de formigamento em suas pernas e/ou pés:">
                                                                    <input type="radio" name="respostamsni7" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni7=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni7" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni7=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>6. Suas pernas e/ou pés doem quando o cobertor toca sua pele?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni8" type="text" value="Suas pernas e/ou pés doem quando o cobertor toca sua pele:">
                                                                    <input type="radio" name="respostamsni8" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni8=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni8" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni8=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>7. Quando você entra na banheira ou no chuveiro, você é capaz de dizer se a água está quente ou fria?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni9" type="text" value="Quando você entra na banheira ou no chuveiro, você é capaz de dizer se a água está quente ou fria:">
                                                                    <input type="radio" name="respostamsni9" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni9=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni9" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni9=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>8. Você já teve uma ferida aberta em seu pé?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni10" type="text" value="Você já teve uma ferida aberta em seu pé:">
                                                                    <input type="radio" name="respostamsni10" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni10=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni10" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni10=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>9. Seu médico já te disse que você tem neuropatia diabética?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni11" type="text" value="Seu médico já te disse que você tem neuropatia diabética:">
                                                                    <input type="radio" name="respostamsni11" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni11=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni11" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni11=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>10. Você se sente fraco a maior parte do tempo?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni12" type="text" value="Você se sente fraco a maior parte do tempo:">
                                                                    <input type="radio" name="respostamsni12" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni12=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni12" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni12=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>11. Seus sintomas pioram durante a noite?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni13" type="text" value="Seus sintomas pioram durante a noite:">
                                                                    <input type="radio" name="respostamsni13" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni13=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni13" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni13=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>12. Suas pernas doem quando você caminha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni14" type="text" value="Suas pernas doem quando você caminha:">
                                                                    <input type="radio" name="respostamsni14" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni14=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni14" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni14=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>13. Você é capaz de sentir seus pés enquanto caminha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni15" type="text" value="Você é capaz de sentir seus pés enquanto caminha:">
                                                                    <input type="radio" name="respostamsni15" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni15=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni15" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni15=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>14. A pele de seu pé fica seca que chega a rachar-se?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni16" type="text" value="A pele de seu pé fica seca que chega a rachar-se:">
                                                                    <input type="radio" name="respostamsni16" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni16=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni16" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni16=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>15. Você já fez uma amputação?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni17" type="text" value="Você já fez uma amputação:">
                                                                    <input type="radio" name="respostamsni17" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni17=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni17" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni17=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <h4>Avaliação física</h4>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>1. Aparência do pé direito</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>a. Normal: </span> <br>
                                                                <label class="radio-inline">
                                                                <input hidden name="perguntamsni18" type="text" value="Aparência do pé direito:">

                                                                    <input type="radio" name="respostamsni18" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni18=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni18" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni18=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>b. Se não, assinale todas que se aplicam:</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Deformidades: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni19" type="text" value="Se não, assinale todas que se aplicam:">
                                                                    <input type="checkbox" name="respostamsni19" value="Deformidades"  {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19=='Deformidades'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pele seca, calosidades: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni19a" value="Pele seca, calosidades"   {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19a=='Pele seca, calosidades'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Infecção: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni19b" value="Infecção" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19b=='Infecção'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Fissuras: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni19c" value="Fissuras" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19c=='Fissuras'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Outras (*descrever na próxima pergunta): </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni19d" value="Outras (*descrever na próxima pergunta)" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19d=='Outras (*descrever na próxima pergunta)'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!-- PERGUNTA EXTRA -->
                                                    <fieldset>
                                                        <legend>Outras:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni31" type="text" value="Outras:">
                                                            <input type="text" name="respostamsni31"  value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni31:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>
                                                    <!-- FIM PERGUNTA EXTRA -->


                                                    <fieldset>
                                                        <legend>1.1 Aparência do pé esquerdo</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>a. normal: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni20" type="text" value="Aparência do pé esquerdo:">
                                                                    <input type="radio" name="respostamsni20" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni20=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni20" value="Não" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni20=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>b. Se não, assinale todas que se aplicam:</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Deformidades: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni21" type="text" value="Se não, assinale todas que se aplicam:">
                                                                    <input type="checkbox" name="respostamsni21" value="Deformidades" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21=='Deformidades'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pele seca, calosidades: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni21a" value="Pele seca, calosidades" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21a=='Pele seca, calosidades'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Infecção: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni21b" value="Infecção" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21b=='Infecção'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Fissuras: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni21c" value="Fissuras" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21c=='Fissuras'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Outras (*descrever na próxima pergunta): </span>
                                                                <label >
                                                                    <input type="checkbox" name="respostamsni21d" value="Outras (*descrever na próxima pergunta)" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21d=='Outras (*descrever na próxima pergunta)'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Outras:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni22" type="text" value="Outras:">
                                                            <input type="text" name="respostamsni22" value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni22:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Ulceração</legend>
                                                        
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni23a" type="text" value="Ulceração:">

                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni23" type="text" value="Pé direito:">
                                                                    <input type="radio" name="respostamsni23" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni23=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni23" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni23=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                            </div>

                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni24" type="text" value="Pé esquerdo:">
                                                                    <input type="radio" name="respostamsni24" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni24=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni24" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni24=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Reflexos do tornozelo</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni25a" type="text" value="Reflexos do tornozelo:">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni25" type="text" value="Pé direito:">
                                                                    <input type="radio" name="respostamsni25" value="Presente"  {{$usuario->formmsni()?$usuario->formmsni()->respostamsni25=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni25" value="Presente/Reforço" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni25=='Presente/Reforço'?'checked':'':''}}>
                                                                    Presente/Reforço
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni25" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni25=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni26" type="text" value="1. Data do Exame:">
                                                                    <input type="radio" name="respostamsni26" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni26=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni26" value="Presente/Reforço" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni26=='Presente/Reforço'?'checked':'':''}}>
                                                                    Presente/Reforço
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni26" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni26=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Percepção de vibração no hálux</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni27a" type="text" value="Percepção de vibração no hálux:">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni27" type="text" value="Pé direito:">
                                                                    <input type="radio" name="respostamsni27" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni27=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni27" value="Diminuída" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni27=='Diminuída'?'checked':'':''}}>
                                                                    Diminuída
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni27" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni27=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni28" type="text" value="Pé esquerdo:">
                                                                    <input type="radio" name="respostamsni28" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni28=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni28" value="Diminuída" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni28=='Diminuída'?'checked':'':''}}>
                                                                    Diminuída
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni28" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni28=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>Monofilamentos</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni29a" type="text" value="Monofilamentos:">
                                                            <div>
                                                                <span>Pé direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni29" type="text" value="Pé direito:">
                                                                    <input type="radio" name="respostamsni29" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni29=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni29" value="Reduzido" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni29=='Reduzido'?'checked':'':''}}>
                                                                    Reduzido
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni29" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni29=='Ausente'?'checked':'':''}}>
                                                                    Ausent
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>Pé esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni30" type="text" value="Pé esquerdo:">
                                                                    <input type="radio" name="respostamsni30" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni30=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni30" value="Reduzido" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni30=='Reduzido'?'checked':'':''}}>
                                                                    Reduzido
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni30" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni30=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <div class="text-center">
                                                        <button class="btn btn-primary mt-5" type="submit" >ENVIAR FORMULÁRIO </button>
                                                    </div>
                                                </form>
                                                <!-- FIM -->                                        
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


                </div>
        </div>

    </div>
@endsection
