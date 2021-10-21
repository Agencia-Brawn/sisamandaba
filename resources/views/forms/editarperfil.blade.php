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
                                            <span class="nav-link-text ms-1">Cuidado <br> dos Pés</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <span class="nav-link-text ms-1">Cuidado <br> dos Pés</span>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
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
                                    <h2>Questionário Para Editar Perfil do Paciente</h2>
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
                                                            <legend>Qual o seu nome completo (nome do entrevistado - responsável pela família)? (SOLICITE O RG OU OUTRO DOCUMENTO COM O NOME)</legend>
                                                            <input class="form-control"   type="text" name="perfilnome" value="{{$usuario->name?$usuario->name:''}}" >
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Qual o seu CPF ? (SOLICITE O CPF OU OUTRO DOCUMENTO COM O CPF)</legend>
                                                            <input class="form-control"  type="text"  id="cpf" name="perfilcpf" value="{{$usuario->cpf}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Qual a data do seu nascimento? (SOLICITE O RG OU OUTRO DOCUMENTO COM A DATA DO NASCIMENTO)</legend>
                                                            <input type="date" name="perfilnasc" value="{{date('Y-m-d', strtotime($usuario->datanasc))}}" class="form-control"  >
                                                        </div>

                                                        <fieldset>
                                                            <legend>Gênero</legend>
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
                                                            <legend>Qual o nome da sua mãe? (SOLICITE O RG OU OUTRO DOCUMENTO COM O NOME)</legend>
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
                                                            <legend>Nome Familiar</legend>
                                                            <input class="form-control" value="{{$usuario->perfilnomefamiliar}}"  type="text" name="perfilnomefamiliar">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Grau de Parentesco</legend>
                                                            <input class="form-control" value="{{$usuario->perfilparentescofamiliar}}"  type="text" name="perfilparentescofamiliar">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Telefone Familiar</legend>
                                                            <input class="form-control" value="{{$usuario->telfamiliar}}"  type="text" name="perfiltelefonefamiliar" id="telefonefamiliar" >
                                                        </div>

                                                        
                                                        <h3 class="text-left mt-5">Dados de Endereço (SOLICITE UM COMPROVANTE DE ENDEREÇO)</h3>
                                                        

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
                                                                <legend>Número da Casa </legend>
                                                                <input class="form-control"  type="text" name="perfilcasa" value="{{$usuario->numcasa}}">
                                                            </div>
                                                        </fieldset>
                                                        



                                                        <h3 class="text-left mt-5">Outros dados para localização</h3>


                                                        <div class="form-group">
                                                            <legend>ID Número</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilid" value="{{$usuario->idnumero}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Número da Equipe</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilequipe" value="{{$usuario->numequipe}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Número da Microárea</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilmircoarea" value="{{$usuario->microarea}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <legend>Número da Família/Casa</legend>
                                                            <input class="form-control"  min="0" type="number" name="perfilfamilia" value="{{$usuario->numfamilia}}">
                                                        </div>
                                                        
                                                        <fieldset>
                                                            <legend>Distrito</legend>
                                                            <div class="form-group">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="perfildistrito"  value="Guamá" {{$usuario->perfildistrito=='Guamá'?'checked':''}} >
                                                                            Guamá
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




                                                        <fieldset>
                                                            <div class="form-group">
                                                            <legend>Unidade:</legend>
                                                                <select class="form-control" name="perfilunidade" id="exampleFormControlSelect2">
                                                                    <option >Selecionar Unidade</option>
                                                                    @foreach($unidades as $unidade)
                                                                        <option {{$unidade->id==$usuario->unidade?'selected':''}} value="{{$unidade->id}}">{{$unidade->nome}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>                                                            
                                                        </fieldset>

                                                    <!-- <fieldset>
                                                        <legend>Unidade da Estratégia de Saúde da Família</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Condor" >
                                                                    Condor
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Combú" required>
                                                                    Combú
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Pq. Amazônia I" required>
                                                                    Pq. Amazônia I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Pq. Amazônia II" required>
                                                                    Pq. Amazônia II
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Portal da Amazônia" required>
                                                                    Portal da Amazônia
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
                                                                    <input type="radio" name="perfilunidade" value="Carmelândia" required>
                                                                    Carmelândia
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
                                                                    <input type="radio" name="perfilunidade" value="Mangueirão" required>
                                                                    Mangueirão
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
                                                                    <input type="radio" name="perfilunidade" value="Tapanã I" required>
                                                                    Tapanã I
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="perfilunidade" value="Tapanã II" required>
                                                                    Tapanã II
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
                    
                    <script>
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

            </div>
        </div>

    </div>


 



@endsection
