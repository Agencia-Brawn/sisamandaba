@extends('layouts.app')

@section('content')

    <!-- MENU MOBILE -->
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
                                            <li><a class="dropdown-item" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formul??rio Individual</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formul??rio Familiar</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formul??rio Antropometria</a></li>
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formul??rio MSNI</a></li>
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

        <!-- MENU WEB -->
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
                                <li><a class="dropdown-item" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formul??rio Individual</a></li>
                                <li><a class="dropdown-item" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formul??rio Familiar</a></li>
                                <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formul??rio Antropometria</a></li>
                                <li><a class="dropdown-item  nav-link active" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formul??rio MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formul??rio Press??o</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>         
        </div>  
        <!-- FIM MENU WEB --> 
            
        <div class="col-md-9 col-lg-10 col-xl-10 col-12 col-painel-header">
                <div class="container painel-controle" >

                    <div class="row justify-content-center">
                        <div class="col-md-12 col-painel">
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
                                                <!-- MSNI - Avalia????o dos p??s (names ok) -->
                                                <form action="{{route('post.form.msni',['usuario'=>$usuario->id])}}" id="form4" method="POST">
                                                    @csrf
                                                    <fieldset>
                                                        <h2>
                                                            MSNI - Avalia????o dos p??s<br>
                                                            <small>Oliveira FB et al. Cross-cultural adaptation MNSI-Brazil - 2016</small>
                                                        </h2>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>1. Nome do avaliador</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni1" type="text" value="Nome do avaliador:">
                                                            <input type="text" name="respostamsni1" class="form-control" value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni1:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>2. Data da entrevista</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni2" type="text" value="Data da entrevista:">
                                                            <input type="date" name="respostamsni2" class="form-control" value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni2:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <h4>Hist??ria do Paciente</h4>
                                                        <div class="form-group">
                                                            <h6>
                                                                Iremos tirar alguns minutos para responder as seguintes perguntas sobre a sensibilidade de suas pernas e p??s. 
                                                                Responda sim ou n??o baseado em como voc?? usualmente se sente. 
                                                            </h6>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>3. Voc?? sente que suas pernas e/ou p??s est??o dormentes?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni3" type="text" value="Voc?? sente que suas pernas e/ou p??s est??o dormentes:">
                                                                    <input type="radio" name="respostamsni3" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni3=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni3" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni3=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>4. Voc?? j?? sentiu alguma dor em queima????o em suas pernas e/ou p??s?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni4" type="text" value="Voc?? j?? sentiu alguma dor em queima????o em suas pernas e/ou p??s:">
                                                                    <input type="radio" name="respostamsni4" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni4=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni4" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni4=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>5. Os seus p??s est??o muito sens??veis ao toque?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni5" type="text" value="Os seus p??s est??o muito sens??veis ao toque:">
                                                                    <input type="radio" name="respostamsni5" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni5=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni5" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni5=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>6. Voc?? tem c??imbras nos m??sculos de suas pernas e/ou p??s?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni6" type="text" value="Voc?? tem c??imbras nos m??sculos de suas pernas e/ou p??s:">
                                                                    <input type="radio" name="respostamsni6" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni6=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni6" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni6=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>7. Voc?? j?? teve sensa????es de formigamento em suas pernas e/ou p??s?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni7" type="text" value="Voc?? j?? teve sensa????es de formigamento em suas pernas e/ou p??s:">
                                                                    <input type="radio" name="respostamsni7" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni7=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni7" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni7=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>8. Suas pernas e/ou p??s doem quando o cobertor toca sua pele?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni8" type="text" value="Suas pernas e/ou p??s doem quando o cobertor toca sua pele:">
                                                                    <input type="radio" name="respostamsni8" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni8=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni8" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni8=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>9. Quando voc?? entra na banheira ou no chuveiro, voc?? ?? capaz de dizer se a ??gua est?? quente ou fria?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni9" type="text" value="Quando voc?? entra na banheira ou no chuveiro, voc?? ?? capaz de dizer se a ??gua est?? quente ou fria:">
                                                                    <input type="radio" name="respostamsni9" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni9=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni9" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni9=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>10. Voc?? j?? teve uma ferida aberta em seu p???</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni10" type="text" value="Voc?? j?? teve uma ferida aberta em seu p??:">
                                                                    <input type="radio" name="respostamsni10" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni10=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni10" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni10=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>11. Seu m??dico j?? te disse que voc?? tem neuropatia diab??tica?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni11" type="text" value="Seu m??dico j?? te disse que voc?? tem neuropatia diab??tica:">
                                                                    <input type="radio" name="respostamsni11" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni11=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni11" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni11=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>12. Voc?? se sente fraco a maior parte do tempo?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni12" type="text" value="Voc?? se sente fraco a maior parte do tempo:">
                                                                    <input type="radio" name="respostamsni12" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni12=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni12" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni12=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>13. Seus sintomas pioram durante a noite?</legend>
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
                                                                    <input type="radio" name="respostamsni13" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni13=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>14. Suas pernas doem quando voc?? caminha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni14" type="text" value="Suas pernas doem quando voc?? caminha:">
                                                                    <input type="radio" name="respostamsni14" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni14=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni14" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni14=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>15. Voc?? ?? capaz de sentir seus p??s enquanto caminha?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni15" type="text" value="Voc?? ?? capaz de sentir seus p??s enquanto caminha:">
                                                                    <input type="radio" name="respostamsni15" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni15=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni15" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni15=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>16. A pele de seu p?? fica seca que chega a rachar-se?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni16" type="text" value="A pele de seu p?? fica seca que chega a rachar-se:">
                                                                    <input type="radio" name="respostamsni16" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni16=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni16" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni16=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>17. Voc?? j?? fez uma amputa????o?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntamsni17" type="text" value="Voc?? j?? fez uma amputa????o:">
                                                                    <input type="radio" name="respostamsni17" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni17=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostamsni17" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni17=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <h4>Avalia????o f??sica</h4>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>18. Apar??ncia do p?? direito</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <legend>18 - a. Normal: </legend> <br>
                                                                <label class="radio-inline">
                                                                <input hidden name="perguntamsni18" type="text" value="Apar??ncia do p?? direito:">

                                                                    <input type="radio" name="respostamsni18" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni18=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni18" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni18=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>18 - b. Se n??o, assinale todas que se aplicam:</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Deformidades: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni19" type="text" value="Se n??o, assinale todas que se aplicam:">
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
                                                                <span>Infec????o: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni19b" value="Infec????o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19b=='Infec????o'?'checked':'':''}}>
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
                                                                <span>Outras (*descrever na pr??xima pergunta): </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni19d" value="Outras (*descrever na pr??xima pergunta)" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni19d=='Outras (*descrever na pr??xima pergunta)'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!-- PERGUNTA EXTRA -->
                                                    <fieldset>
                                                        <legend>18 - Outras:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni31" type="text" value="Outras:">
                                                            <input type="text" name="respostamsni31"  value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni31:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>
                                                    <!-- FIM PERGUNTA EXTRA -->


                                                    <fieldset>
                                                        <legend>19. Apar??ncia do p?? esquerdo</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <legend>19 - a. normal: </legend>  <br>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni20" type="text" value="Apar??ncia do p?? esquerdo:">
                                                                    <input type="radio" name="respostamsni20" value="Sim" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni20=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni20" value="N??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni20=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>19 - b. Se n??o, assinale todas que se aplicam:</legend>
                                                        <div class="form-group">
                                                            <div>
                                                                <span>Deformidades: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni21" type="text" value="Se n??o, assinale todas que se aplicam:">
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
                                                                <span>Infec????o: </span>
                                                                <label class="radio-inline">
                                                                    <input type="checkbox" name="respostamsni21b" value="Infec????o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21b=='Infec????o'?'checked':'':''}}>
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
                                                                <span>Outras (*descrever na pr??xima pergunta): </span>
                                                                <label >
                                                                    <input type="checkbox" name="respostamsni21d" value="Outras (*descrever na pr??xima pergunta)" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni21d=='Outras (*descrever na pr??xima pergunta)'?'checked':'':''}}>
                                                                    Assinale
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>19 - Outras:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni22" type="text" value="Outras:">
                                                            <input type="text" name="respostamsni22" value="{{$usuario->formmsni()?$usuario->formmsni()->respostamsni22:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>20. Ulcera????o</legend>
                                                        
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni23a" type="text" value="Ulcera????o:">

                                                            <div>
                                                                <span>P?? direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni23" type="text" value="P?? direito:">
                                                                    <input type="radio" name="respostamsni23" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni23=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni23" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni23=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                            </div>

                                                            <div>
                                                                <span>P?? esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni24" type="text" value="P?? esquerdo:">
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
                                                        <legend>21. Reflexos do tornozelo</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni25a" type="text" value="Reflexos do tornozelo:">
                                                            <div>
                                                                <span>P?? direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni25" type="text" value="P?? direito:">
                                                                    <input type="radio" name="respostamsni25" value="Presente"  {{$usuario->formmsni()?$usuario->formmsni()->respostamsni25=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni25" value="Presente/Refor??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni25=='Presente/Refor??o'?'checked':'':''}}>
                                                                    Presente/Refor??o
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni25" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni25=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>P?? esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni26" type="text" value="1. Data do Exame:">
                                                                    <input type="radio" name="respostamsni26" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni26=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni26" value="Presente/Refor??o" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni26=='Presente/Refor??o'?'checked':'':''}}>
                                                                    Presente/Refor??o
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni26" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni26=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>22. Percep????o de vibra????o no h??lux</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni27a" type="text" value="Percep????o de vibra????o no h??lux:">
                                                            <div>
                                                                <span>P?? direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni27" type="text" value="P?? direito:">
                                                                    <input type="radio" name="respostamsni27" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni27=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni27" value="Diminu??da" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni27=='Diminu??da'?'checked':'':''}}>
                                                                    Diminu??da
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni27" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni27=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                            <div>
                                                                <span>P?? esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni28" type="text" value="P?? esquerdo:">
                                                                    <input type="radio" name="respostamsni28" value="Presente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni28=='Presente'?'checked':'':''}}>
                                                                    Presente
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni28" value="Diminu??da" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni28=='Diminu??da'?'checked':'':''}}>
                                                                    Diminu??da
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <input type="radio" name="respostamsni28" value="Ausente" {{$usuario->formmsni()?$usuario->formmsni()->respostamsni28=='Ausente'?'checked':'':''}}>
                                                                    Ausente
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>23. Monofilamentos</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntamsni29a" type="text" value="Monofilamentos:">
                                                            <div>
                                                                <span>P?? direito: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni29" type="text" value="P?? direito:">
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
                                                                <span>P?? esquerdo: </span>
                                                                <label class="radio-inline">
                                                                    <input hidden name="perguntamsni30" type="text" value="P?? esquerdo:">
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
                                                        <button class="btn btn-primary mt-5" type="submit" >ENVIAR FORMUL??RIO </button>
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


                </div>
        </div>

    </div>

@endsection
