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
                <div class="container painel-controle" >

                    <div class="row- justify-content-center row-painel-controle">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header-formularios"> 
                                    <h2 class="text-center">Ficha do Usuário: {{$usuario->name}} </h2>
                                    <h4 class="ps-5 pt-5 text-left"><b>Informações Pessoais</b></h4>
                                    <ul class="ps-5 list-group ficha-usuario" >
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Nome Completo:</strong> 
                                            <input type="text" value="{{$usuario->name?$usuario->name:''}}" class="form-control" disabled />

                                        </li>

                                        <li class="list-group-item border-0 ps-0 text-md">
                                            <strong class="text-dark">E-mail:</strong>
                                            <input type="text" value="{{$usuario->email?$usuario->email:''}}" class="form-control" disabled />
                                        </li>
                                        
                                        <li class="list-group-item border-0 ps-0 text-md">
                                            <strong class="text-dark">
                                                CPF:
                                                <input type="text" id="cpf" value="{{$usuario->cpf?$usuario->cpf:''}}" class="form-control" disabled />
                                            </strong>
                                        </li>
                                       
                                        <li class="list-group-item border-0 ps-0 text-md">
                                            <strong class="text-dark">Data de Nascimento:</strong> 
                                               <input type="text" value="{{date('d/m/Y', strtotime($usuario->datanasc?$usuario->datanasc:''))}}" class="form-control" disabled />
                                        </li>
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Nome de sua mãe:</strong> 
                                            <input type="text" value="{{$usuario->mae?$usuario->mae:''}}" class="form-control" disabled />
                                        </li>
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Gênero:</strong> 
                                            <input type="text" value="{{$usuario->genero==1?'Feminino':'Masculino'}}" class="form-control" disabled />
                                        </li>
                                    </ul>

                                    
                                    <ul class="ps-5 list-group ficha-usuario" >
                                        <h4 class="pb-2 pt-5 text-left"><b>Informações de Contato</b></h4>
                                        <li class="list-group-item border-0 ps-0 text-md">
                                            <strong class="text-dark">Telefone:</strong> 
                                            
                                            <input type="text" id="telefone" value="{{$usuario->telefone?$usuario->telefone:''}}" class="form-control" disabled />

                                        </li>

                                        <li class="list-group-item border-0 ps-0 text-md">
                                            <strong class="text-dark">Telefone Fixo:</strong> 
                                            <input type="text" id="telefone" value="{{$usuario->telefonefixo?$usuario->telefonefixo:''}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Telefone de um Familiar:</strong> 
                                            <input type="text" id="telefone2" value="{{$usuario->telfamiliar}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Nome do Familiar:</strong> 
                                            <input type="text" value="{{$usuario->perfilnomefamiliar?$usuario->perfilnomefamiliar:''}}" class="form-control" disabled />
                                        </li>  

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Grau de Parentesco do Familiar:</strong> 
                                            <input type="text" value="{{$usuario->perfilparentescofamiliar?$usuario->perfilparentescofamiliar:''}}" class="form-control" disabled />
                                        </li>  
  
                                    </ul>
                                    
                                    <ul class="ps-5 list-group ficha-usuario" >
                                        <h4 class="pb-2 pt-5 text-left"><b>Informações de Endereço</b></h4>
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Estado:</strong>
                                            <input type="text" value="{{$usuario->estado?$usuario->estado:''}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Cidade:</strong>
                                            <input type="text" value="{{$usuario->cidade?$usuario->cidade:''}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Bairro:</strong>
                                            <input type="text" value="{{$usuario->bairro?$usuario->bairro:''}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">CEP:</strong>
                                            <input type="text" id="cep" value="{{$usuario->cep?$usuario->cep:''}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Nome da Rua:</strong>
                                            <input type="text" value="{{$usuario->rua?$usuario->rua:''}}" class="form-control" disabled />
                                        </li>

                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Nome da Casa:</strong>
                                            <input type="text" value="{{$usuario->numcasa?$usuario->numcasa:''}}" class="form-control" disabled />
                                        </li>
                                    </ul>
                                    
                                    <ul class="ps-5 list-group ficha-usuario" >  
                                        <h4 class="pb-2 pt-5 text-left"><b>Outros Informações Para Localização</b></h4>
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">ID Número:</strong>
                                            <input type="text" value="{{$usuario->idnumero?$usuario->idnumero:''}}" class="form-control" disabled />
                                        </li>
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Número da Equipe:</strong>
                                            <input type="text" value="{{$usuario->numequipe?$usuario->numequipe:''}}" class="form-control" disabled />
                                        </li>
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Número da Microárea:</strong>
                                            <input type="text" value="{{$usuario->microarea?$usuario->microarea:''}}" class="form-control" disabled />

                                            
                                        </li>
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Número da Familía/Casa:</strong>
                                            <input type="text" value="{{$usuario->numfamilia?$usuario->numfamilia:''}}" class="form-control" disabled />
                                        </li>   
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Distrito:</strong>
                                            <input type="text" value="{{$usuario->perfildistrito?$usuario->perfildistrito:''}}" class="form-control" disabled />
                                        </li>  
                                        
                                        <li class="list-group-item border-0 ps-0 pt-0 text-md">
                                            <strong class="text-dark">Unidade da Estratégia de Saúde da Família:</strong>
                                            <input type="text" value="{{$usuario->unidade?$usuario->unidade:''}}" class="form-control" disabled />
                                        </li>
                                        

                                    </ul>

                                    
                                    <div class="ps-5 text-left">
                                        <a href="{{route('editar.perfil',['usuario'=>$usuario->id])}}"><button class="btn btn-primary mt-5"> Editar Usuário </button></a>
                                        
                                    </div>
                                </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif



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
                            $('#cpf').mask('000.000.000-00', {reverse: true});
                            $('#data').mask('00/00/0000');
                            $('#telefone').mask('(00) 00000-0000');
                            $('#telefone2').mask('(00) 00000-0000');
                            $('#cep').mask('00000-000');
                        });
                    </script>


                </div>
        </div>

    </div>
@endsection
