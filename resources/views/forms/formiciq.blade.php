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
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.iciq',['usuario'=>$usuario->id])}}">Formul??rio ICIQ-KHQ</a></li>
                                            <li><a class="dropdown-item" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formul??rio Individual</a></li>
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
                                <li><a class="dropdown-item nav-link active" href="{{route('form.iciq',['usuario'=>$usuario->id])}}">Formul??rio ICIQ-KHQ</a></li>
                                <li><a class="dropdown-item" href="{{route('form.individual',['usuario'=>$usuario->id])}}">Formul??rio Individual</a></li>
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

                                            <!-- Question??rios ICIQ-KHQ (names ok) -->
                                            <form action="{{route('post.form.iciq',['usuario'=>$usuario->id])}}" id="form5" method="POST">
                                                @csrf
                                                    <fieldset>
                                                        <h2>Question??rios ICIQ-KHQ<br><small></small></h2>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>1. Nome do Entrevistador</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaiciq1" type="text" value="Nome do Entrevistador">
                                                            <input type="text" name="respostaiciq1" value="{{$usuario->formiciq()?$usuario->formiciq()->respostaiciq1:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>2. Data da Entrevista</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaiciq2" type="text" value="Data da Entrevista">
                                                            <input type="date" name="respostaiciq2" value="{{$usuario->formiciq()?$usuario->formiciq()->respostaiciq2:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>



                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>ICIQ -SF. Muitas pessoas perdem urina alguma vez. Estamos
                                                                tentando descobrir quantas pessoas perdem urina e o quanto
                                                                isso as aborrece. Ficar??amos agradecidos se voc?? pudesse 
                                                                nos responder ??s seguintes perguntas, pensando em como voc??
                                                                tem passado, em m??dia, nas ??LTIMAS QUATRO SEMANAS.
                                                            </h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>3. Com que frequ??ncia voc?? perde urina? (assinale uma resposta)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq3" type="text" value="Com que frequ??ncia voc?? perde urina? (assinale uma resposta)">
                                                                    <input type="radio" name="respostaiciq3" value="Nunca 0" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq3=='Nunca 0'?'checked':'':''}}>
                                                                    Nunca 0
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq3" value="Uma vez por semana ou menos 1" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq3=='Uma vez por semana ou menos 1'?'checked':'':''}} >
                                                                    Uma vez por semana ou menos 1
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq3" value="Duas ou tr??s vezes por semana 2" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq3=='Duas ou tr??s vezes por semana 2'?'checked':'':''}} >
                                                                    Duas ou tr??s vezes por semana 2
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq3" value="Uma vez ao dia 3" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq3=='Uma vez ao dia 3'?'checked':'':''}}>
                                                                    Uma vez ao dia 3
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq3" value="Diversas vezes ao dia 4" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq3=='Diversas vezes ao dia 4'?'checked':'':''}} >
                                                                    Diversas vezes ao dia 4
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq3" value="O tempo todo 5" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq3=='O tempo todo 5'?'checked':'':''}}>
                                                                    O tempo todo 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>4. Gostar??amos de saber a quantidade de urina que voc?? pensa que perde(assinale uma resposta)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq4" type="text" value="Gostar??amos de saber a quantidade de urina que voc?? pensa que perde(assinale uma resposta)">
                                                                    <input type="radio" name="respostaiciq4" value="Nenhuma 0" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq4=='Nenhuma 0'?'checked':'':''}}>
                                                                    Nenhuma 0
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq4" value="Uma pequena quantidade 2" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq4=='Uma pequena quantidade 2'?'checked':'':''}} >
                                                                    Uma pequena quantidade 2
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq4" value="Uma moderada quantidade 4" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq4=='Uma pequena quantidade 4'?'checked':'':''}}>
                                                                    Uma moderada quantidade 4
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq4" value="Uma grande quantidade 6" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq4=='Uma pequena quantidade 6'?'checked':'':''}}>
                                                                    Uma grande quantidade 6
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>5. Em geral, quanto que perder urina interfere em sua vida di??ria? Por favor, circuleum n??mero entre 0 (n??o interfere) e 10 (interfere muito)</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntaiciq5" type="text" value="Em geral, quanto que perder urina interfere em sua vida di??ria? Por favor, circuleum n??mero entre 0 (n??o interfere) e 10 (interfere muito)">
                                                            <select name="respostaiciq5" class="form-control">
                                                                <option value="0" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==0?'selected':'':''}}>0</option>
                                                                <option value="1" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==1?'selected':'':''}}>1</option>
                                                                <option value="2" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==2?'selected':'':''}} >2</option>
                                                                <option value="3" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==3?'selected':'':''}} >3</option>
                                                                <option value="4" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==4?'selected':'':''}} >4</option>
                                                                <option value="5" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==5?'selected':'':''}} >5</option>
                                                                <option value="6" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==6?'selected':'':''}} >6</option>
                                                                <option value="7" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==7?'selected':'':''}} >7</option>
                                                                <option value="8" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==8?'selected':'':''}} >8</option>
                                                                <option value="9" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==9?'selected':'':''}} >9</option>
                                                                <option value="10" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq5==10?'selected':'':''}} >10</option>
                                                            </select>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>6. ICIQ Escore: soma dos resultados 1 + 2 + 3 &#x3D;</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaiciq6" type="text" value="ICIQ Escore: soma dos resultados 1 + 2 + 3">
                                                            <input  type="text" name="respostaiciq6" value="{{$usuario->formiciq()?$usuario->formiciq()->respostaiciq6:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>7. Quando voc?? perde urina? (Por favor assinale todas as alternativas que se aplicam a voc??)</legend>
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input hidden name="perguntaiciq7" type="text" value="Quando voc?? perde urina? (Por favor assinale todas as alternativas que se aplicam a voc??)">
                                                                    <input type="checkbox" name="respostaiciq7" value="Nunca" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7=='Nunca'?'checked':'':''}}>
                                                                    Nunca
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7a" value="Perco antes de chegar ao banheiro" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7a=='Perco antes de chegar ao banheiro'?'checked':'':''}}>
                                                                    Perco antes de chegar ao banheiro
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7b" value="Perco quando tusso ou espirro" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7b=='Perco quando tusso ou espirro'?'checked':'':''}}>
                                                                    Perco quando tusso ou espirro
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7c" value="Perco quando estou dormindo" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7c=='Perco quando estou dormindo'?'checked':'':''}}>
                                                                    Perco quando estou dormindo
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7d" value="Perco quando estou fazendo atividades f??sicas" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7d=='Perco quando estou fazendo atividades f??sicas'?'checked':'':''}}>
                                                                    Perco quando estou fazendo atividades f??sicas
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7e" value="Perco quando terminei de urinar e estou me vestindo" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7e=='Perco quando terminei de urinar e estou me vestindo'?'checked':'':''}}>
                                                                    Perco quando terminei de urinar e estou me vestindo
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7f" value="Perco sem raz??o ??bvia" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7f=='Perco sem raz??o ??bvia'?'checked':'':''}}>
                                                                    Perco sem raz??o ??bvia
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="respostaiciq7g" value="Perco o tempo todo" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq7g=='Perco o tempo todo'?'checked':'':''}}>
                                                                    Perco o tempo todo
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                   <fieldset>
                                                        <div class="form-group">
                                                            <h4>KHQ/Question??rio de qualidade de vida em incontin??ncia urin??ria ap??s valida????o</h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>8. Como voc?? avaliaria sua sa??de hoje? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq8" type="text" value="Como voc?? avaliaria sua sa??de hoje:">
                                                                    <input type="radio" name="respostaiciq8" value="Muito boa" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq8=='Muito boa'?'checked':'':''}}>
                                                                    Muito boa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq8" value="Boa" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq8=='Boa'?'checked':'':''}}>
                                                                    Boa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq8" value="Normal" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq8=='Normal'?'checked':'':''}}>
                                                                    Normal
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq8" value="Ruim" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq8=='Ruim'?'checked':'':''}}>
                                                                    Ruim
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq8" value="Muito ruim" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq8=='Muito ruim'?'checked':'':''}}>
                                                                    Muito ruim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>9. Quanto voc?? acha que seu problema de bexiga atrapalha sua vida?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq9" type="text" value="Quanto voc?? acha que seu problema de bexiga atrapalha sua vida:">
                                                                    <input type="radio" name="respostaiciq9" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq9=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq9" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq9=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq9" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq9=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq9" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq9=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!--  -->
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>
                                                            Abaixo est??o algumas atividades que podem ser afetadas pelos problemas de bexiga. Quanto seu problema de bexiga afeta voc??? Gostar??amos que voc?? respondesse todas as perguntas. Simplesmente marque com um ???X??? a alternativa que melhor se aplica a voc??.
                                                            </h4>
                                                        </div>
                                                    </fieldset>

                                                    <!--  -->
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>
                                                            Limita????o no desempenho de tarefas
                                                            </h4>
                                                            <br>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>10. Com que intensidade seu problema de bexiga atrapalha suas tarefas de casa (ex., limpar, lavar, cozinhar, etc.)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq10" type="text" value="Com que intensidade seu problema de bexiga atrapalha suas tarefas de casa (ex., limpar, lavar, cozinhar, etc.)">
                                                                    <input type="radio" name="respostaiciq10" value="nenhuma" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq10=='nenhuma'?'checked':'':''}}>
                                                                    nenhuma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq10" value="um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq10=='um pouco'?'checked':'':''}}>
                                                                    um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq10" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq10=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq10" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq10=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>11. Com que intensidade seu problema de bexiga atrapalha seu trabalho, ou suas atividades di??rias normais fora de casa como: fazer compra, levar filho ?? escola, etc.? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq11" type="text" value="Com que intensidade seu problema de bexiga atrapalha seu trabalho, ou suas atividades di??rias normais fora de casa como: fazer compra, levar filho ?? escola, etc.">
                                                                    <input type="radio" name="respostaiciq11" value="Nenhuma" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq11=='Nenhuma'?'checked':'':''}}>
                                                                    Nenhuma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq11" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq11=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq11" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq11=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq11" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq11=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>Limita????o F??sica/Social</h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>12. Seu problema de bexiga atrapalha suas atividades f??sicas como: fazer caminhada, correr, fazer algum esporte, etc.?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq12" type="text" value="Seu problema de bexiga atrapalha suas atividades f??sicas como: fazer caminhada, correr, fazer algum esporte, etc.">
                                                                    <input type="radio" name="respostaiciq12" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq12=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq12" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq12=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq12" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq12=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq12" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq12=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>13. Seu problema de bexiga atrapalha quando voc?? quer fazer uma viagem?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq13" type="text" value="Seu problema de bexiga atrapalha quando voc?? quer fazer uma viagem">
                                                                    <input type="radio" name="respostaiciq13" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq13=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq13" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq13=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco 
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq13" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq13=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq13" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq13=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>14. Seu problema de bexiga atrapalha quando voc?? vai a igreja, reuni??o, festa?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq14" type="text" value="Seu problema de bexiga atrapalha quando voc?? vai a igreja, reuni??o, festa">
                                                                    <input type="radio" name="respostaiciq14" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq14=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq14" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq14=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq14" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq14=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq14" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq14=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>15. Voc?? deixa de visitar seus amigos por causa do problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq15" type="text" value="Voc?? deixa de visitar seus amigos por causa do problema de bexiga">
                                                                    <input type="radio" name="respostaiciq15" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq15=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq15" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq15=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq15" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq15=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq15" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq15=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!--  -->
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>
                                                            Rela????es pessoais
                                                            </h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>16. Seu problema de bexiga atrapalha sua vida sexual?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq16" type="text" value="Seu problema de bexiga atrapalha sua vida sexual">
                                                                    <input type="radio" name="respostaiciq16" value="N??o se aplica" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq16=='N??o se aplica'?'checked':'':''}}>
                                                                    N??o se aplica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq16" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq16=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq16" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq16=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq16" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq16=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq16" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq16=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>17. Seu problema de bexiga atrapalha sua vida com seu companheiro?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq17" type="text" value="Seu problema de bexiga atrapalha sua vida com seu companheiro">
                                                                    <input type="radio" name="respostaiciq17" value="N??o se aplica" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq17=='N??o se aplica'?'checked':'':''}}>
                                                                    N??o se aplica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq17" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq17=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq17" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq17=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq17" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq17=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq17" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq17=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>18. Seu problema de bexiga incomoda seus familiares? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq18" type="text" value="Seu problema de bexiga incomoda seus familiares">
                                                                    <input type="radio" name="respostaiciq18" value="N??o se aplica" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq18=='N??o se aplica'?'checked':'':''}}>
                                                                    N??o se aplica
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq18" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq18=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq18" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq18=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq18" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq18=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq18" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq18=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!--  -->
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>
                                                                Gostar??amos de saber quais s??o os seus problemas de bexiga e quanto eles afetam voc??. Escolha da lista abaixo APENAS AQUELES PROBLEMAS que voc?? tem no momento.
                                                            </h4>
                                                        </div>
                                                    </fieldset>

                                                    <!--  -->
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>Quanto eles afetam voc???</h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>19. Frequ??ncia: Voc?? vai muitas vezes ao banheiro?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq19" type="text" value="Frequ??ncia: Voc?? vai muitas vezes ao banheiro: ">
                                                                    <input type="radio" name="respostaiciq19" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq19=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq19" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq19=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq19" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq19=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>20. Noct??ria: Voc?? levanta a noite para urinar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq20" type="text" value="Noct??ria: Voc?? levanta a noite para urinar: ">
                                                                    <input type="radio" name="respostaiciq20" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq20=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq20" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq20=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq20" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq20=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>21. Urg??ncia: Voc?? tem vontade forte de urinar e muito dif??cil de controlar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq21" type="text" value="Urg??ncia: Voc?? tem vontade forte de urinar e muito dif??cil de controlar: ">
                                                                    <input type="radio" name="respostaiciq21" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq21=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq21" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq21=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq21" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq21=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>22. Bexiga hiperativa: Voc?? perde urina quando voc?? tem muita vontade de urinar?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq22" type="text" value="Bexiga hiperativa: Voc?? perde urina quando voc?? tem muita vontade de urinar: ">
                                                                    <input type="radio" name="respostaiciq22" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq22=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq22" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq22=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq22" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq22=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>23. Incontin??ncia urin??ria de esfor??o: Voc?? perde urina com atividades f??sicas como: tossir, espirrar, correr?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq23" type="text" value="Incontin??ncia urin??ria de esfor??o: Voc?? perde urina com atividades f??sicas como: tossir, espirrar, correr: ">
                                                                    <input type="radio" name="respostaiciq23" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq23=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq23" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq23=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq23" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq23=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>24. Enurese noturna: Voc?? molha a cama ?? noite?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq24" type="text" value="Enurese noturna: Voc?? molha a cama ?? noite: ">
                                                                    <input type="radio" name="respostaiciq24" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq24=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq24" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq24=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq24" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq24=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>25. Incontin??ncia no intercurso sexual: Voc?? perde urina durante a rela????o sexual?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq25" type="text" value="Incontin??ncia no intercurso sexual: Voc?? perde urina durante a rela????o sexual: ">
                                                                    <input type="radio" name="respostaiciq25" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq25=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq25" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq25=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq25" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq25=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>26. Infec????es frequentes: Voc?? tem muitas infec????es urin??rias?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq26" type="text" value="Infec????es frequentes: Voc?? tem muitas infec????es urin??rias: ">
                                                                    <input type="radio" name="respostaiciq26" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq26=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq26" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq26=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq26" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq26=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>27. Dor na bexiga: Voc?? tem dor na bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq27" type="text" value="Dor na bexiga: Voc?? tem dor na bexiga: ">
                                                                    <input type="radio" name="respostaiciq27" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq27=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq27" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq27=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq27" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq27=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>28. Outros: Voc?? tem algum outro problema relacionado a sua bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq28" type="text" value="Outros: Voc?? tem algum outro problema relacionado a sua bexiga: ">
                                                                    <input type="radio" name="respostaiciq28" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq28=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq28" value="Mais ou menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq28=='Mais ou menos'?'checked':'':''}}>
                                                                    Mais ou menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq28" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq28=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>29. Emo????es Voc?? fica deprimida com seu problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq29" type="text" value="Emo????es Voc?? fica deprimida com seu problema de bexiga: ">
                                                                    <input type="radio" name="respostaiciq29" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq29=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq29" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq29=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq29" value="Mais ou Menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq29=='Mais ou Menos'?'checked':'':''}}>
                                                                    Mais ou Menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq29" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq29=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>30. Voc?? fica ansiosa ou nervosa com seu problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq30" type="text" value="Voc?? fica ansiosa ou nervosa com seu problema de bexiga: ">
                                                                    <input type="radio" name="respostaiciq30" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq30=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq30" value="Um pouco" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq30=='Um pouco'?'checked':'':''}}>
                                                                    Um pouco
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq30" value="Mais ou Menos" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq30=='Mais ou Menos'?'checked':'':''}}>
                                                                    Mais ou Menos
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq30" value="Muito" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq30=='Muito'?'checked':'':''}}>
                                                                    Muito
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>31. Voc?? fica mal com voc?? mesma por causa do seu problema de bexiga?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq31" type="text" value="Voc?? fica mal com voc?? mesma por causa do seu problema de bexiga: ">
                                                                    <input type="radio" name="respostaiciq31" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq31=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq31" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq31=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq31" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq31=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq31" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq31=='Sempre'?'checked':'':''}}>
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>32. Sono/Energia Seu problema de bexiga atrapalha seu sono?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                <input hidden name="perguntaiciq32" type="text" value="Sono/Energia Seu problema de bexiga atrapalha seu sono: ">
                                                                    <input type="radio" name="respostaiciq32" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq32=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq32" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq32=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq32" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq32=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq32" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq32=='Sempre'?'checked':'':''}}>
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>33. Voc?? se sente desgastada ou cansada?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                <input hidden name="perguntaiciq33" type="text" value="Voc?? se sente desgastada ou cansada: ">
                                                                    <input type="radio" name="respostaiciq33" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq33=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq33" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq33=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq33" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq33=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq33" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq33=='Sempre'?'checked':'':''}}>
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!--  -->
                                                    <fieldset>
                                                        <div class="form-group">
                                                            <h4>
                                                                Algumas situa????es abaixo acontecem com voc??? 
                                                                Se tiver o quanto?
                                                            </h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>34. Voc?? usa algum tipo de protetor higi??nico como: fralda, forro, absorvente tipo Modess para manter-se seca?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                <input hidden name="perguntaiciq34" type="text" value="Voc?? usa algum tipo de protetor higi??nico como: fralda, forro, absorvente tipo Modess para manter-se seca: ">
                                                                    <input type="radio" name="respostaiciq34" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq34=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq34" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq34=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq34" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq34=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq34" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq34=='Sempre'?'checked':'':''}}>
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>35. Voc?? controla a quantidade de l??quido que bebe?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq35" type="text" value="Voc?? controla a quantidade de l??quido que bebe: ">
                                                                    <input type="radio" name="respostaiciq35" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq35=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq35" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq35=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq35" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq35=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq35" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq35=='Sempre'?'checked':'':''}}>
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>36. Voc?? precisa trocar sua roupa ??ntima (calcinha), quando fica molhadas?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq36" type="text" value="Voc?? precisa trocar sua roupa ??ntima (calcinha), quando fica molhadas: ">
                                                                    <input type="radio" name="respostaiciq36" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq36=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq36" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq36=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq36" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq36=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq36" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq36=='Sempre'?'checked':'':''}}>
                                                                    Sempre
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>37. Voc?? se preocupa em estar cheirando urina?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaiciq37" type="text" value="Voc?? se preocupa em estar cheirando urina: ">
                                                                    <input type="radio" name="respostaiciq37" value="N??o" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq37=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq37" value="??s vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq37=='??s vezes'?'checked':'':''}}>
                                                                    ??s vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq37" value="V??rias vezes" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq37=='V??rias vezes'?'checked':'':''}}>
                                                                    V??rias vezes
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaiciq37" value="Sempre" {{$usuario->formiciq()?$usuario->formiciq()->respostaiciq37=='Sempre'?'checked':'':''}}>
                                                                    Sempre
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
                </div>
        </div>
    </div>

@endsection
