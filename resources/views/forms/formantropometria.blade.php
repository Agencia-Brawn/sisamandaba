@extends('layouts.app')

@section('content')

    <!-- MENU MOBILE  -->
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
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formul??rio Antropometria</a></li>
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
        <!-- MENU  -->
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
                            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                <li><a class="dropdown-item nav-link active" href="{{route('form.antropometria',['usuario'=>$usuario->id])}}">Formul??rio Antropometria</a></li>
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formul??rio MSNI</a></li>
                                <li><a class="dropdown-item" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formul??rio Press??o</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>         
        </div>  
        <!-- FIM MENU --> 
            

        <div class="col-md-9 col-lg-10 col-xl-10 col-12 col-painel-header">
                <div class="container painel-controle" >
                    <div class="row justify-content-center row-painel-controle">
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

                                         
                                                <!-- QUEST. Antropometria (names ok) -->
                                                <form action="{{route('post.form.antropometria',['usuario'=>$usuario->id])}}" id="form3" method="POST">
                                                    @csrf
                                                    <fieldset>
                                                        <h2>Question??rios Antropometria<br></h2>
                                                    </fieldset>                                                    

                                                    <!-- <fieldset>
                                                        <legend>Individual</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria1" type="text" value="Individual:">
                                                            <input type="text" name="respostaantropometria1" value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria1:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset> -->

                                                    <fieldset>
                                                        <legend>1. Nome do Aferidor</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria2" type="text" value="Aferidor:">
                                                            <input  type="text" name="respostaantropometria2" value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria2:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>

                                                    <!-- <fieldset>
                                                        <legend>Participante</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria3" type="text" value="Participante:">
                                                            <input  type="text" name="respostaantropometria3" value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria3:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset> -->

                                                    <fieldset>
                                                        <legend>2. Data do Exame</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria4" type="text" value="Data do Exame:">
                                                            <input required type="date" name="respostaantropometria4"  value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria4:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>3. Altura</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria8" type="text" value="Altura:">
                                                            <input type="text" min="0" name="respostaantropometria8" value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria8:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>4. Peso</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria5" type="text" value="Peso:">
                                                            <input type="text" min="0" name="respostaantropometria5" value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria5:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>5. Circunfer??ncia abdominal</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntaantropometria6" type="text" value="Participante:">
                                                            <input  type="text" name="respostaantropometria6" value="{{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria6:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>6. Abdome em avental?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntaantropometria7" type="text" value="Abdome em avental:">
                                                                    <input type="radio" name="respostaantropometria7" value="N??o" {{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria7=='N??o'?'checked':'':''}}>
                                                                    N??o
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostaantropometria7" value="Sim" {{$usuario->formantropometria()?$usuario->formantropometria()->respostaantropometria7=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>                                            

                                                    <div class="text-center">
                                                        <button class="btn btn-primary " type="submit" >ENVIAR FORMUL??RIO </button>
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
                            $('#peso').mask('00.00');
                        });
                    </script>

                </div>
        </div>

    </div>
@endsection
