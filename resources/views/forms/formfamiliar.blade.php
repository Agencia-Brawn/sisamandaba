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
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formulário Familiar</a></li>
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
                                <li><a class="dropdown-item nav-link active" href="{{route('form.familiar',['usuario'=>$usuario->id])}}">Formulário Familiar</a></li>
                                <li><a class="dropdown-item" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formulário Antropometria</a></li>
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
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

                                                <!-- FAMILIAR (names ok) -->
                                                <form action="{{route('post.form.familiar',['usuario'=>$usuario->id])}}" id="form2" method="POST">
                                                   @csrf 
                                                    <fieldset>
                                                        <h2>Questionário Familiar<br></h2>
                                                    </fieldset>   

                                                    <fieldset>
                                                        <legend>1. Nome do entrevistador</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar1" type="text" value="Nome do entrevistador:">
                                                            <input type="text" name="respostafamiliar1" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar1:''}}">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>2. Data da entrevista</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar2" type="text" value="Data da entrevista:">
                                                            <input type="date" name="respostafamiliar2" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar2:''}}">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <br>
                                                        <div class="form-group">
                                                            <h4 class="help-block">
                                                                Agora vamos falar um pouco sobre as pessoas que moram com você. 
                                                                Vamos incluir também crianças e bebês.
                                                            </h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>3. Além de você, alguém mais mora em sua casa (inclua cônjuge/companheiro(a), filhos(as) e enteados, pais,irmãos (as), cunhado(a), sogro(a), outros parentes, amigos, agregados, pessoas ausentes temporariamente e empregados que durmam na casa)?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar3" type="text" value="Além de você, alguém mais mora em sua casa (inclua cônjuge/companheiro(a), filhos(as) e enteados, pais,irmãos (as), cunhado(a), sogro(a), outros parentes, amigos, agregados, pessoas ausentes temporariamente e empregados que durmam na casa):">
                                                                    <input type="radio" name="respostafamiliar3" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar3=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar3" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar3=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset id="salto2">
                                                        <legend>4. Quantas pessoas ao todo moram em sua casa?</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntafamiliar4" type="text" value="Quantas pessoas ao todo moram em sua casa:">
                                                            <input type="text" name="respostafamiliar4" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar4:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>5. Alguma pessoa da sua família, que mora com você adoeceu de COVID-19? (SE INFORMAR SIM, PERGUNTE QUANTAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar5" type="text" value="Alguma pessoa da sua família, que mora com você adoeceu de COVID-19 (SE INFORMAR SIM, PERGUNTE QUANTAS):">
                                                                    <input type="radio" name="respostafamiliar5" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar5=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar5" value="Sim, uma" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar5=='Sim, uma'?'checked':'':''}}>
                                                                    Sim, uma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar5" value="Sim, duas" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar5=='Sim, duas'?'checked':'':''}}>
                                                                    Sim, duas
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar5" value="Sim, mais de três" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar5=='Sim, mais de três'?'checked':'':''}}>
                                                                    Sim, mais de três.
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>6. Alguma pessoa da sua família, que morava com você faleceu de COVID-19? (SE INFORMAR SIM, PERGUNTE QUANTAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar6" type="text" value="Alguma pessoa da sua família, que morava com você faleceu de COVID-19 (SE INFORMAR SIM, PERGUNTE QUANTAS):">
                                                                    <input type="radio" name="respostafamiliar6" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar6=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar6" value="Sim, uma" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar6=='Sim, uma'?'checked':'':''}}>
                                                                    Sim, uma
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar6" value="Sim, duas" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar6=='Sim, duas'?'checked':'':''}}>
                                                                    Sim, duas
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar6" value="Sim, mais de três" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar6=='Sim, mais de três'?'checked':'':''}}>
                                                                    Sim, mais de três
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <h4>Localização: (DESCREVER DE MANEIRA MAIS COMPLETA POSSÍVEL A LOCALIZAÇÃO DA 
                                                            CASA,PARA PERMITIR ENCONTRAR A RESIDÊNCIA NOVAMENTE, PEÇA AJUDA PARA O PARTICIPANTE 
                                                            E INCLUA PONTOS DE REFERÊNCIA)
                                                        </h4>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>7. Há quantos anos você mora neste endereço? (SE MENOR DO QUE 01 MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar7" type="text" value="Há quantos anos você mora neste endereço? (SE MENOR DO QUE 01 MARQUE 00):">
                                                            <input type="text" name="respostafamiliar7" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar7:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>8. Morou sempre no mesmo município? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar8" type="text" value="Morou sempre no mesmo município:">
                                                                    <input type="radio" name="respostafamiliar8" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar8=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar8" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar8=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset id="salto1">
                                                        <legend>9. Qual o município onde você morou antes?</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar9" type="text" value="Qual o município onde você morou antes:">
                                                            <input type="text" name="respostafamiliar9" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar9:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <div class="form-group">
                                                            <h4 class="help-block">
                                                                Agora vou fazer algumas perguntas sobre sua casa e família
                                                            </h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>10. Em sua casa trabalha alguma empregada doméstica mensalista ou caseiro para o qual vocêpague salário? (SE NÃO TIVER MARQUE 00 SE TIVER INFORME A QUANTIDADE)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar10" type="text" value="Em sua casa trabalha alguma empregada doméstica mensalista ou caseiro para o qual vocêpague salário? (SE NÃO TIVER MARQUE 00 SE TIVER INFORME A QUANTIDADE):">
                                                            <input type="text" name="respostafamiliar10" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar10:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>11. Qual a situação do imóvel em que você mora? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar11" type="text" value="Qual a situação do imóvel em que você mora? (LER AS ALTERNATIVAS):">
                                                                    <input type="radio" name="respostafamiliar11" value="Alugado"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Alugado'?'checked':'':''}}>
                                                                    Alugado
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar11" value="Próprio - já pago"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Próprio - já pago'?'checked':'':''}}>
                                                                    Próprio - já pago
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar11" value="Próprio - ainda pagando"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Próprio - ainda pagando'?'checked':'':''}}>
                                                                    Próprio - ainda pagando
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar11" value="Próprio - área de ocupação"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Próprio - área de ocupação'?'checked':'':''}}>
                                                                    Próprio - área de ocupação
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar11" value="Próprio - propriedade rural"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Próprio - propriedade rural'?'checked':'':''}}>
                                                                    Próprio - propriedade rural
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar11" value="Cedido por pessoa/empresa" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Cedido por pessoa/empresa'?'checked':'':''}}>
                                                                    Cedido por pessoa/empresa
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar11" value="Outros (Especifique na proxíma pergunta)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar11=='Outros (Especifique na proxíma pergunta)'?'checked':'':''}}>
                                                                    Outros (Especifique na proxíma pergunta)
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!-- EXTRA -->
                                                    <fieldset>
                                                        <legend>12. Especifique qual a situação do imóvel em que você mora (caso tenha marcado outros)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar39" type="text" value="Quantos cômodos têm a casa:">
                                                            <input type="text" name="respostafamiliar39" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar39:''}}">
                                                        </div>
                                                    </fieldset>
                                                    <!-- FIM EXTRA -->

                                                    <fieldset>
                                                        <legend>13. Quantos cômodos têm a casa?</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar12" type="text" value="Quantos cômodos têm a casa:">
                                                            <input type="text" name="respostafamiliar12" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar12:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>14. A casa é feita de que material? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar13" type="text" value="A casa é feita de que material? (LER AS ALTERNATIVAS):">
                                                                    <input type="radio" name="respostafamiliar13" value="Tijolo ou bloco (alvenaria)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar13=='Tijolo ou bloco (alvenaria)'?'checked':'':''}}>
                                                                    Tijolo ou bloco (alvenaria)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar13" value="Madeira" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar13=='Madeira'?'checked':'':''}}>
                                                                    Madeira
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar13" value="Mista de alvenaria e madeira" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar13=='Mista de alvenaria e madeira'?'checked':'':''}}>
                                                                    Mista de alvenaria e madeira
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar13" value="Barro ou mista com barro" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar13=='Barro ou mista com barro'?'checked':'':''}}>
                                                                    Barro ou mista com barro
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar13" value="Materiais reciclados" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar13=='Materiais reciclados (Especifique na proxíma pergunta)'?'checked':'':''}}>
                                                                    Materiais reciclados
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar13" value="Outros (Especifique na proxíma pergunta)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar13=='Outros (Especifique na proxíma pergunta)'?'checked':'':''}}>
                                                                    Outros (Especifique na proxíma pergunta)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    
                                                    <!-- PERGUNTA EXTRA -->
                                                    <fieldset>
                                                        <legend>14. Especifique o material utilizado </legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar40" type="text" value="A casa tem sanitário, ou seja, vaso sanitário com fossa ou escoadouro para a rede de esgoto?(SE NÃO TIVER MARQUE 00 E PULE PARA QUESTÃO 30. SE TIVER INFORME A QUANTIDADE, EM CASO DÚVIDA, SOLICITE VER O SANITÁRIO):">
                                                            <input type="text" name="respostafamiliar40" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar40:''}}">
                                                        </div>
                                                    </fieldset>
                                                    <!-- FIM PERGUNTA EXTRA -->


                                                    <fieldset>
                                                        <legend>15. A casa tem sanitário, ou seja, vaso sanitário com fossa ou escoadouro para a rede de esgoto?(SE NÃO TIVER MARQUE 00 E PULE PARA QUESTÃO 30. SE TIVER INFORME A QUANTIDADE, EM CASO DÚVIDA, SOLICITE VER O SANITÁRIO)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar14" type="text" value="A casa tem sanitário, ou seja, vaso sanitário com fossa ou escoadouro para a rede de esgoto?(SE NÃO TIVER MARQUE 00 E PULE PARA QUESTÃO 30. SE TIVER INFORME A QUANTIDADE, EM CASO DÚVIDA, SOLICITE VER O SANITÁRIO):">
                                                            <input type="text" name="respostafamiliar14" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar14:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>16. O sanitário é de uso apenas da sua família, ou seja, dos moradores da casa?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar15" type="text" value="O sanitário é de uso apenas da sua família, ou seja, dos moradores da casa:">
                                                                    <input type="radio" name="respostafamiliar15" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar15=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar15" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar15=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>17. De onde vem a água utilizada na casa? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar16" type="text" value="De onde vem a água utilizada na casa? (LER AS ALTERNATIVAS):">
                                                                    <input type="radio" name="respostafamiliar16" value="Poço aberto" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar16=='Poço aberto'?'checked':'':''}}>
                                                                    Poço aberto
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar16" value="Poço fechado com bomba" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar16=='Poço fechado com bomba'?'checked':'':''}}>
                                                                    Poço fechado com bomba
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar16" value="Rede geral de distribuição" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar16=='Rede geral de distribuição'?'checked':'':''}}>
                                                                    Rede geral de distribuição
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar16" value="Outros (Especifique na proxíma pergunta)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar16=='Outros (Especifique na proxíma pergunta)'?'checked':'':''}}>
                                                                    Outros (Especifique na proxíma pergunta)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!-- PERGUNTA EXTRA -->
                                                    <fieldset>
                                                        <legend>18. Especifique de onde vem a água utilizada na casa</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar41" type="text" value="A casa tem sanitário, ou seja, vaso sanitário com fossa ou escoadouro para a rede de esgoto?(SE NÃO TIVER MARQUE 00 E PULE PARA QUESTÃO 30. SE TIVER INFORME A QUANTIDADE, EM CASO DÚVIDA, SOLICITE VER O SANITÁRIO):">
                                                            <input type="text" name="respostafamiliar41" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar41:''}}">
                                                        </div>
                                                    </fieldset>
                                                    <!-- FIM PERGUNTA EXTRA -->


                                                    <fieldset>
                                                        <legend>19. A água de beber recebe algum tratamento? (SE INFORMAR SIM, LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar17" type="text" value="A água de beber recebe algum tratamento? (SE INFORMAR SIM, LER AS ALTERNATIVAS):">
                                                                    <input type="radio" name="respostafamiliar17" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar17=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar17" value="Sim, com hipoclorito"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar17=='Sim, com hipoclorito'?'checked':'':''}}>
                                                                    Sim, com hipoclorito
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar17" value="Sim, com fervura"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar17=='Sim, com fervura'?'checked':'':''}}>
                                                                    Sim, com fervura
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar17" value="Sim, com filtro"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar17=='Sim, com filtro'?'checked':'':''}}>
                                                                    Sim, com filtro
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar17" value="Sim, água mineral"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar17=='Sim, água mineral'?'checked':'':''}}>
                                                                    Sim, água mineral
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar17" value="Outros (Especifique na proxíma pergunta)"  {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar17=='Outros (Especifique na proxíma pergunta)'?'checked':'':''}}>
                                                                    Outros (Especifique na proxíma pergunta)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!-- PERGUNTA EXTRA -->
                                                    <fieldset>
                                                        <legend>20. Especifique qual tipo de tratamento é realizado</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar42" type="text" value="A casa tem sanitário, ou seja, vaso sanitário com fossa ou escoadouro para a rede de esgoto?(SE NÃO TIVER MARQUE 00 E PULE PARA QUESTÃO 30. SE TIVER INFORME A QUANTIDADE, EM CASO DÚVIDA, SOLICITE VER O SANITÁRIO):">
                                                            <input type="text" name="respostafamiliar42" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar42:''}}">
                                                        </div>
                                                    </fieldset>
                                                    <!-- FIM PERGUNTA EXTRA -->

                                                    <fieldset>
                                                        <legend>21. Qual o destino do esgoto da casa? (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar18" type="text" value="Qual o destino do esgoto da casa? (LER AS ALTERNATIVAS):">
                                                                    <input type="radio" name="respostafamiliar18" value="Rio ou igarapé" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar18=='Rio ou igarapé'?'checked':'':''}}>
                                                                    Rio ou igarapé
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar18" value="Céu aberto" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar18=='Céu aberto'?'checked':'':''}}>
                                                                    Céu aberto
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar18" value="Fossa" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar18=='Fossa'?'checked':'':''}}>
                                                                    Fossa
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar18" value="Rede de esgoto" >
                                                                    Rede de esgoto
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>22. O trecho da rua de sua casa é: (LER AS ALTERNATIVAS)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar19" type="text" value="O trecho da rua de sua casa é: (LER AS ALTERNATIVAS):">
                                                                    <input type="radio" name="respostafamiliar19" value="Asfaltado ou pavimentado" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar19=='Asfaltado ou pavimentado'?'checked':'':''}}>
                                                                    Asfaltado ou pavimentado
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar19" value="De terra ou cascalho" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar19=='De terra ou cascalho'?'checked':'':''}}>
                                                                    De terra ou cascalho
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <h4>
                                                            Vou lhe apresentar um conjunto de itens e gostaria de saber quais você tem em sua casa. Para cada item que você responder sim, vou lhe perguntar a quantidade.
                                                        </h4>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>23. Vídeo-cassete/ DVD? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar20" type="text" value="Vídeo-cassete/ DVD? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar20" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar20:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>24. Automóvel? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar20" type="text" value="Automóvel? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar20" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar20:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>25. Máquina de lavar louça? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar21" type="text" value="Máquina de lavar louça? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar21" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar21:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>26. Microondas? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar22" type="text" value="Microondas? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar22" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar22:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>27. Secadora de roupa? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar23" type="text" value="Secadora de roupa? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar23" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar23:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>28. Moto? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar24" type="text" value="Moto? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar24" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar24:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>29. Máquina de lavar roupa (exceto tanquinho)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar25" type="text" value="Máquina de lavar roupa (exceto tanquinho)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):">
                                                            <input type="text" name="respostafamiliar25" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar25:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>30. Geladeira simples? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar26" type="text" value="Geladeira simples? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):"> 
                                                            <input type="text" name="respostafamiliar26" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar26:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>31. Geladeira duplex (com freezer)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar27" type="text" value="Geladeira duplex (com freezer)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):"> 
                                                            <input type="text" name="respostafamiliar27" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar27:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>32. Freezer?  (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntafamiliar28" type="text" value="Freezer?  (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):"> 
                                                            <input type="text" name="respostafamiliar28" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar28:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>33. Computador (incluindo notebook)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar29" type="text" value="Computador (incluindo notebook)? (INFORME A QUANTIDADE, SE NÃO TIVER MARQUE 00):"> 
                                                            <input type="text" name="respostafamiliar29" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar29:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>34. A família recebe Bolsa-Família? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar30" type="text" value="A família recebe Bolsa-Família:"> 
                                                                    <input type="radio" name="respostafamiliar30" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar30=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar30" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar30=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>35. A família recebe aposentadoria?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar31" type="text" value="A família recebe aposentadoria:"> 
                                                                    <input type="radio" name="respostafamiliar31" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar31=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar31" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar31=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>36. A família recebe pensão?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar32" type="text" value="A família recebe pensão:"> 
                                                                    <input type="radio" name="respostafamiliar32" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar32=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar32" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar32=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>37. A família recebe auxílio defeso? </legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar33" type="text" value="A família recebe auxílio defeso:"> 
                                                                    <input type="radio" name="respostafamiliar33" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar33=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar33" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar33=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>38. A família recebe auxílio-doença?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar34" type="text" value="A família recebe auxílio-doença:"> 
                                                                    <input type="radio" name="respostafamiliar34" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar34=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar34" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar34=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <!-- EXTRA -->
                                                    <fieldset>
                                                        <legend>39. O Morador solicitou auxílio emergencial?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar43" type="text" value="Morador solicitou auxílio emergencial?"> 
                                                                    <input type="radio" name="respostafamiliar43" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar43=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar43" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar43=='Sim'?'checked':'':''}}>
                                                                    Sim 
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset >
                                                        <legend>40. A família recebeu auxílio emergencial no início da epidemia de COVID-19?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar35" type="text" value="A família recebeu auxílio emergencial no início da epidemia de COVID-19:"> 
                                                                    <input type="radio" name="respostafamiliar35" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar35=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar35" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar35=='Sim'?'checked':'':''}}>
                                                                    Sim (Se sim, especificar a quantidade de pedidos na proxíma pergunta)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                   
                                                    <!-- EXTRA -->
                                                    <fieldset id="salto3">
                                                        <legend>41. Se Sim, informar quantas vezes recebeu o auxílio: </legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar44" type="text" value="Quantas vezes recebeu o auxílio:"> 
                                                            <input type="text" name="respostafamiliar44" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar44:''}}">
                                                        </div>
                                                    </fieldset>


                                                    <fieldset id="salto5">
                                                        <legend>42. A família está recebendo auxílio emergencial atualmente devido à COVID-19?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar36" type="text" value="A família está recebendo auxílio emergencial atualmente devido à COVID-19:"> 
                                                                    <input type="radio" name="respostafamiliar36" value="Não" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar36=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar36" value="Sim" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar36=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>43. No MÊS PASSADO, qual foi aproximadamente sua renda familiar LÍQUIDA, isto é, a soma de rendimentos, já com descontos(por ex., INSS, Imposto de Renda etc.), de todas as pessoas que contribuem regularmente para as despesas de sua casa?(MOSTRAR A LISTA COM AS CATEGORIAS DE RENDA NO CELULAR)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntafamiliar37" type="text" value="No MÊS PASSADO, qual foi aproximadamente sua renda familiar LÍQUIDA, isto é, a soma de rendimentos, já com descontos(por ex., INSS, Imposto de Renda etc.), de todas as pessoas que contribuem regularmente para as despesas de sua casa?(MOSTRAR A LISTA COM AS CATEGORIAS DE RENDA NO CELULAR):"> 
                                                                    <input type="radio" name="respostafamiliar37" value="Sem renda familiar" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Sem renda familiar'?'checked':'':''}}>
                                                                    Sem renda familiar
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Menos do que 250,00 reais" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Menos do que 250,00 reais'?'checked':'':''}}>
                                                                    Menos do que 250,00 reais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Menos do que 550,00 reais" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Menos do que 550,00 reais'?'checked':'':''}}>
                                                                    Menos do que 550,00 reais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Menos de 1100,00 reais" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Menos de 1100,00 reais'?'checked':'':''}}>
                                                                    Menos de 1100,00 reais
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="1100 reais (até um salário mínimo)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='1100 reais (até um salário mínimo)'?'checked':'':''}}>
                                                                    1100 reais (até um salário mínimo)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Entre 1100,00 e 1650, reais ( até 1,5 SM)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Entre 1100,00 e 1650, reais ( até 1,5 SM)'?'checked':'':''}}>
                                                                    Entre 1100,00 e 1650, reais ( até 1,5 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Entre 1651,00 e 2200,00 reais (até 2,0 SM)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Entre 1651,00 e 2200,00 reais (até 2,0 SM)'?'checked':'':''}}>
                                                                    Entre 1651,00 e 2200,00 reais (até 2,0 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Entre 2201 e 3300,00 reais (até 3 SM)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Entre 2201 e 3300,00 reais (até 3 SM)'?'checked':'':''}}>
                                                                    Entre 2201 e 3300,00 reais (até 3 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Entre 3301,00 e 4400,00 reais (até 4 SM)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Entre 3301,00 e 4400,00 reais (até 4 SM)'?'checked':'':''}}>
                                                                    Entre 3301,00 e 4400,00 reais (até 4 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Entre 4401,00 e 5500,00 reais (até 5 SM)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Entre 4401,00 e 5500,00 reais (até 5 SM)'?'checked':'':''}}>
                                                                    Entre 4401,00 e 5500,00 reais (até 5 SM)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostafamiliar37" value="Acima de 5500,00 reais ou mais (mais que 5 SM)" {{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar37=='Acima de 5500,00 reais ou mais (mais que 5 SM)'?'checked':'':''}}>
                                                                    Acima de 5500,00 reais ou mais (&gt;5 SM)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>44. Quantas pessoas (adultos e crianças), INCLUINDO O(A) SR.(A), dependem dessa renda para viver?</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntafamiliar38" type="text" value="Quantas pessoas (adultos e crianças), INCLUINDO O(A) SR.(A), dependem dessa renda para viver:"> 
                                                            <input type="text" name="respostafamiliar38" class="form-control" value="{{$usuario->formfamiliar()?$usuario->formfamiliar()->respostafamiliar38:''}}">
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
                                        © 
                                        <script>
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

    <script>
        $(document).ready(function() {
            // SALTO 1 
            $('input:radio[name="respostafamiliar8"]').on("change", function() {
                if (this.checked && this.value == 'Sim') { // CONDIÇÃO PARA O SALTO
                    $("#salto1").hide(); // OCULTAR
                } else {
                    $("#salto1").show(); // EXIBIR
                }
            });   
            
            // SALTO 2
            $('input:radio[name="respostafamiliar3"]').on("change", function() {
                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                    $("#salto2").hide(); // OCULTAR
                } else {
                    $("#salto2").show(); // EXIBIR
                }
            });  

            // SALTO 3
            $('input:radio[name="respostafamiliar35"]').on("change", function() {
                if (this.checked && this.value == 'Não') { // CONDIÇÃO PARA O SALTO
                    $("#salto3").hide(); // OCULTAR
                } else {
                    $("#salto3").show(); // EXIBIR
                }
            });  
        });                     
    </script>
@endsection
