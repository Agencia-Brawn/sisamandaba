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
                                        <a class="nav-link active" href="{{route('usuario',['usuario'=>$usuario->id])}}">
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
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <a class="nav-link active" href="{{route('usuario',['usuario'=>$usuario->id])}}">
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formul??rio MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formul??rio Press??o</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>         
        </div>  
        <!-- FIM MENU MAIOR QUE 767PX --> 
            
            
            <div class="col-md-9 col-lg-10 col-xl-10 col-12">
                    <div class="row justify-content-center row-painel-controle ps-5">
                        <div class="col-md-12 pt-5" >
                            <div class="card">
                                <div class="card-header text-center"> 
                                    <h2>Question??rio Para Editar Perfil do Paciente</h2>
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
 

                                                <form action="{{route('post.editar.perfil', ['usuario'=>$usuario->id])}}" method="post">
                                                    @csrf

                                                    <h3 class="text-left">Dados Pessoais</h3>
                                                        <div class="form-group">
                                                            <legend>Qual o seu nome completo (nome do entrevistado - respons??vel pela fam??lia)? (SOLICITE O RG OU OUTRO DOCUMENTO COM O NOME)</legend>
                                                            <input class="form-control"   type="text" name="perfilnome" value="{{$usuario->name?$usuario->name:''}}" >
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Qual o seu CPF ? (SOLICITE O CPF OU OUTRO DOCUMENTO COM O CPF)</legend>
                                                            <input class="form-control"  type="text"  id="cpf" name="cpf" value="{{$usuario->cpf?$usuario->cpf:''}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Qual o seu RG ? (SOLICITE O RG OU OUTRO DOCUMENTO COM O RG)</legend>
                                                            <input class="form-control"  type="text"  name="rg" value="{{$usuario->rg?$usuario->rg:''}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Qual a data do seu nascimento? (SOLICITE O RG OU OUTRO DOCUMENTO COM A DATA DO NASCIMENTO)</legend>
                                                            <input type="date" name="perfilnasc" value="{{date('Y-m-d', strtotime($usuario->datanasc))}}" class="form-control"  >
                                                        </div>

                                                        <fieldset>
                                                            <legend>G??nero</legend>
                                                            <div class="form-group">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input {{$usuario->genero==1?'checked':''}} type="radio" name="perfilgenero" value="1" >
                                                                            Feminino
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input {{$usuario->genero==2?'checked':''}} type="radio" name="perfilgenero" value="2" >
                                                                            Masculino
                                                                        </label>
                                                                    </div>

                                                            </div>
                                                        </fieldset>
                                                        
                                                        <fieldset>
                                                            <legend>Qual o nome da sua m??e? (SOLICITE O RG OU OUTRO DOCUMENTO COM O NOME)</legend>
                                                            <div class="form-group">
                                                                <input class="form-control" value="{{$usuario->mae}}"  type="text" name="perfilmae"  id="example-date-input">
                                                            </div>
                                                        </fieldset>

                                                        <h3 class="text-left mt-5">Dados de Contato</h3>

                                                        <div class="form-group">
                                                            <legend>E-mail</legend>
                                                            <input class="form-control"  type="text" name="perfilemail" value="{{$usuario->email}}"  id="example-email-input">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Telefone</legend>
                                                            <input class="form-control"  maxlength="15"  type="text" name="perfiltelefone" id="telefone" value="{{$usuario->telefone}}" >
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Telefone Fixo</legend>
                                                            <input class="form-control"  maxlength="15"  type="text" name="perfiltelefonefixo" id="telefonefixo" value="{{$usuario->telefonefixo}}" >
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Telefone do Familiar Mais Pr??ximo</legend>
                                                            <input class="form-control" value="{{$usuario->telfamiliar}}"  type="text" name="perfiltelefonefamiliar" id="telefonefamiliar" >
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Nome do Familiar do Telefone Informado</legend>
                                                            <input class="form-control" value="{{$usuario->perfilnomefamiliar}}"  type="text" name="perfilnomefamiliar">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Grau de Parentesco de Familiar do Telefone Informado</legend>
                                                            <input class="form-control" value="{{$usuario->perfilparentescofamiliar}}"  type="text" name="perfilparentescofamiliar">
                                                        </div>
                                                        
                                                        <h3 class="text-left mt-5">Dados de Endere??o (SOLICITE UM COMPROVANTE DE ENDERE??O)</h3>
                                                        

                                                        <fieldset>
                                                            <div class="form-group">
                                                                <legend>Estado </legend>
                                                                <input class="form-control"  type="text" name="perfilestado" value="{{$usuario->estado}}">
                                                            </div>
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-group">
                                                                <legend>Cidade </legend>
                                                                <input class="form-control"  type="text" name="perfilcidade" value="{{$usuario->cidade}}">
                                                            </div>
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-group">
                                                                <legend>Bairro </legend>
                                                                <input class="form-control"  type="text" name="perfilbairro" value="{{$usuario->bairro}}">
                                                            </div>
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-group">
                                                                <legend>CEP </legend>
                                                                <input class="form-control" id="cep" type="text" name="perfilcep" value="{{$usuario->cep}}">
                                                            </div>
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-group">
                                                                <legend>Nome da Rua </legend>
                                                                <input class="form-control"  type="text" name="perfilrua" value="{{$usuario->rua}}">
                                                            </div>
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-group">
                                                                <legend>N??mero da Casa </legend>
                                                                <input class="form-control"  type="text" name="perfilcasa" value="{{$usuario->numcasa}}">
                                                            </div>
                                                        </fieldset>

                                                        <!-- HOR??RIO CIRCULO DE CULTURA -->
                                                        <h3 class="text-left mt-5">Prefer??ncias para o Circulo de Cultura</h3>
                                                        
                                                        <br><br>
                                                        <!-- <select onchange="verifica(this.value)">
                                                            <option name="status" id="status" value="0">Selecione o Hor??rio</option>
                                                            <option name="manha" id="manha" value="1">Das 9h as 11h</option>
                                                            <option name="tarde" id="tarde" value="2">Das 15h as 18h</option>
                                                            <option name="noite" id="noite" value="3">Das 17h as 19h</option>
                                                        </select> -->

                                                        <!-- SCRIPT OPTIONS -->
                                                        
                                                        
                                                        <fieldset>
                                                            <div class="form-group">
                                                            <legend>Escolha o melhor hor??rio para voc?? participar das reuni??es (C??rculos de Cultura):</legend>
                                                                <select onchange="verifica(this.value)" class="form-control" name="horareuniao" id="exampleFormControlSelect2">
                                                                    <option name="status" id="status" value="0">Selecione sua 1?? prefer??ncia de hor??rio</option>
                                                                    <option name="manha" id="manha" value="1">Das 9h as 11h</option>
                                                                    <option name="tarde" id="tarde" value="2">Das 15h as 18h</option>
                                                                    <option name="noite" id="noite" value="3">Das 17h as 19h</option>
                                                                </select>
                                                                <br>
                                                                <select onchange="verifica(this.value)" class="form-control" name="horareuniao" id="exampleFormControlSelect2">
                                                                    <option name="status" id="status" value="0">Selecione sua 2?? prefer??ncia de hor??rio</option>
                                                                    <option name="manha" id="manha" value="1">Das 9h as 11h</option>
                                                                    <option name="tarde" id="tarde" value="2">Das 15h as 18h</option>
                                                                    <option name="noite" id="noite" value="3">Das 17h as 19h</option>
                                                                </select>
                                                                <br>
                                                                <select onchange="verifica(this.value)" class="form-control" name="horareuniao" id="exampleFormControlSelect2">
                                                                    <option name="status" id="status" value="0">Selecione sua 3?? prefer??ncia de hor??rio</option>
                                                                    <option name="manha" id="manha" value="1">Das 9h as 11h</option>
                                                                    <option name="tarde" id="tarde" value="2">Das 15h as 18h</option>
                                                                    <option name="noite" id="noite" value="3">Das 17h as 19h</option>
                                                                </select>
                                                            </div>                                                            
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="form-group">
                                                            <legend>Escolha o melhor dia da semana para participar das reuni??es (C??rculos de Cultura) de acordo com a sua prefer??ncia:</legend>
                                                                <select class="form-control" name="diareuniao" id="exampleFormControlSelect2">
                                                                    <option>Selecionar Dia</option>                                                                        
                                                                    <option>Segunda-Feira</option>
                                                                    <option>Ter??a-Feira</option>
                                                                    <option>Quarta-Feira</option>
                                                                    <option>Quinta-Feira</option>
                                                                    <option>Sexta-Feira</option>
                                                                    <option>Sab??do</option>
                                                                    <option>Domingo</option>
                                                                </select>
                                                            </div>                                                            
                                                        </fieldset>

                                                        <h3 class="text-left mt-5">Outros dados para localiza????o</h3>

                                                        <div class="form-group">
                                                            <legend>N??mero do SUS</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilsus" value="{{$usuario->sus}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>ID N??mero</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilid" value="{{$usuario->idnumero}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>N??mero da Equipe</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilequipe" value="{{$usuario->numequipe}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>N??mero da Micro??rea</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilmircoarea" value="{{$usuario->microarea}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>N??mero da Fam??lia/Casa</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilfamilia" value="{{$usuario->numfamilia}}">
                                                        </div>
                                                        
                                                        <fieldset>
                                                            <legend>Distrito</legend>
                                                            <div class="form-group">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="perfildistrito"  value="Guam??" {{$usuario->perfildistrito=='Guam??'?'checked':''}} >
                                                                            Guam??
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="perfildistrito" value="Bengui" {{$usuario->perfildistrito=='Bengui'?'checked':''}}>
                                                                            Bengui
                                                                        </label>
                                                                    </div>
                                    
                                                            </div>
                                                        </fieldset>

                                                       
                                                        <fieldset id="bengui" >
                                                            <div class="form-group" id="bloquear">
                                                            <legend>Selecionar Unidade da Estrat??gia de Sa??de da Fam??lia do Distrito Bengui (selecione um distrito primeiro)</legend>
                                                                <select class="form-control" name="unidadeestrategia" id="opcao1">
                                                                    <option value="" {{$usuario->unidadeestrategia==''?'selected':''}}>Selecione unidades do Distrito Bengui</option>
                                                                    <option value="1" {{$usuario->unidadeestrategia=='1'?'selected':''}}>1</option>
                                                                    <option value="2" {{$usuario->unidadeestrategia=='2'?'selected':''}}>2</option>
                                                                </select>
                                                            </div>                                                            
                                                        </fieldset>

                                                        <fieldset id="guama">
                                                            <div class="form-group" >
                                                            <legend>Selecionar Unidade da Estrat??gia de Sa??de da Fam??lia do Distrito Guam??  (selecione um distrito primeiro)</legend>
                                                                <select class="form-control" name="unidadeestrategia2" id="opcao2">
                                                                    <option value="" {{$usuario->unidadeestrategia2==''?'selected':''}}>Selecione unidades do Distrito Guam??</option>
                                                                    <option value="1" {{$usuario->unidadeestrategia2=='1'?'selected':''}}>1</option>
                                                                    <option value="2" {{$usuario->unidadeestrategia2=='2'?'selected':''}}>2</option>
                                                                </select>
                                                            </div>                                                            
                                                        </fieldset>

                                                        <!-- CONEX??O COM UNIDADES -->
                                                        <!-- <fieldset>
                                                            <div class="form-group">
                                                            <legend>Unidade:</legend>
                                                                <select class="form-control" name="perfilunidade" id="exampleFormControlSelect2">
                                                                    <option >Selecionar Unidade</option>
                                                                    @foreach($unidades as $unidade)
                                                                        <option {{$unidade->id==$usuario->unidade?'selected':''}} value="{{$unidade->id}}">{{$unidade->nome}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>                                                            
                                                        </fieldset> -->

                                                    <!-- <fieldset>
                                                        <legend>Unidade da Estrat??gia de Sa??de da Fam??lia</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Condor" >
                                                                    Condor
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Comb??" required>
                                                                    Comb??
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Pq. Amaz??nia I" required>
                                                                    Pq. Amaz??nia I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Pq. Amaz??nia II" required>
                                                                    Pq. Amaz??nia II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Portal da Amaz??nia" required>
                                                                    Portal da Amaz??nia
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Radional" required>
                                                                    Radional
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Riacho Doce" required>
                                                                    Riacho Doce
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Terra Firme" required>
                                                                    Terra Firme
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Bengui" required>
                                                                    Bengui
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Carmel??ndia" required>
                                                                    Carmel??ndia
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Cristo Redentor" required>
                                                                    Cristo Redentor
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Mangueir??o" required>
                                                                    Mangueir??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Panorama XXI" required>
                                                                    Panorama XXI
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Parque Verde" required>
                                                                    Parque Verde
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Pratinha I" required>
                                                                    Pratinha I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Pratinha II" required>
                                                                    Pratinha II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Tapan?? I" required>
                                                                    Tapan?? I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Tapan?? II" required>
                                                                    Tapan?? II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Una" required>
                                                                    Una
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset> -->
                                                        
                                                        <div class="text-center">
                                                            <button class="btn btn-primary" type="submit">EDITAR PERFIL</button>
                                                        </div>
                                                </form>
                                                
                                            </div>

                                        </div>          

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- FIM FORMUL??RIO -->
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
                        function verifica(value)
                        {
                            var manha = document.getElementById("manha");
                            var tarde = document.getElementById("tarde");
                            var noite = document.getElementById("noite");

                            if(value == 1){
                                manha.disabled = true;
                                tarde.disabled = false;
                                noite.disabled = false;
                            }else if(value == 2){
                                manha.disabled = false;
                                tarde.disabled = true;
                                noite.disabled = false;
                            }else if(value == 3){
                                manha.disabled = false;
                                tarde.disabled = false;
                                noite.disabled = true;
                            }else if(value == 0){
                                manha.disabled = false;
                                tarde.disabled = false;
                                noite.disabled = false;
                            }
                        };
                        $(document).ready(function($){
                            $('#cpf').mask('000.000.000-00', {reverse: true});
                            $('#datanasc').mask('00/00/0000');
                            $('#altura').mask('0.00');


                            $('#telefone').mask('(00) 00000-0000');
                            $('#telefonefamiliar').mask('(00) 00000-0000');
                            $('#telefonefixo').mask('(00) 0000-0000');

                            $('#cep').mask('00000-000');
                        });

                        
                    </script>

                    <script>
                        $(document).ready(function($){
                            $('input:radio[name="perfildistrito"]').on("change", function() {
                                if (this.checked && this.value == 'Guam??') { 
                                    $("#bengui").hide();
                                    $("#guama").show();
                                } else if (this.checked && this.value == 'Bengui') {
                                    $("#guama").hide();
                                    $("#bengui").show();
                                } 
                                else {
                                    $("#guama").hide();
                                    $("#bengui").hide();
                                }
                            });  
                        });
                    </script>

            </div>
        </div>

    </div>


 



@endsection
