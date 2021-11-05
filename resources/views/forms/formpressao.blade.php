@extends('layouts.app')

@section('content')

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
                                            <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
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
                                <li><a class="dropdown-item" href="{{route('form.msni',['usuario'=>$usuario->id])}}">Formulário MSNI</a></li>
                                <li><a class="dropdown-item nav-link active" href="{{route('form.pressao',['usuario'=>$usuario->id])}}">Formulário Pressão</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>         
        </div>  
        <!-- FIM MENU MAIOR QUE 767PX --> 
            

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

                                         
                                                <!-- QUEST. PRESSÃO ARTERIAL (names ok) -->
                                                <form action="{{route('post.form.pressao',['usuario'=>$usuario->id])}}" id="form7" method="POST">
                                                    @csrf
                                                    <fieldset>
                                                        <h2>Questionário Pressão Arterial<br><small></small></h2>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>1. Data do exame</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntapressao2" type="text" value="Data do exame: ">
                                                            <input type="date" name="respostapressao2" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao2:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>2. Nome do aferidor</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntapressao3" type="text" value="Nome do aferidor: ">
                                                            <input type="text" name="respostapressao3" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao3:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>3. Comprimento do Braço Direito (EM CENTÍMETROS)</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao4" type="text" value="Comprimento do Braço Direito (EM CENTÍMETROS): ">

                                                            <input type="text" name="respostapressao4" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao4:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>4. Circunferência do braço direito (EM CENTÍMETROS)</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao5" type="text" value="Circunferência do braço direito (EM CENTÍMETROS): ">

                                                            <input type="text" name="respostapressao5" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao5:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <br>
                                                        <div class="form-group">
                                                            <h4>Pressão arterial sentada no braço direito</h4>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>5. Tipo de manguito?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                <input hidden name="perguntapressao6" type="text" value="1. Tipo de manguito: ">
                                                                    <input type="radio" name="respostapressao6" value="1. Adulto pequeno – (Circunferência braço menor que 27cm)" {{$usuario->formpressao()?$usuario->formpressao()->respostapressao6=='1. Adulto pequeno – (Circunferência braço menor que 27cm)'?'checked':'':''}}>
                                                                    1. Adulto pequeno – (Circunferência braço &lt;27cm)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostapressao6" value="2. Adulto – (Circunferência braço 27-33cm)" {{$usuario->formpressao()?$usuario->formpressao()->respostapressao6=='2. Adulto – (Circunferência braço 27-33cm)'?'checked':'':''}}>
                                                                    2. Adulto – (Circunferência braço 27-33cm)
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostapressao6" value="3. Adulto grande – (Circunferência braço maior que 33cm)" {{$usuario->formpressao()?$usuario->formpressao()->respostapressao6=='3. Adulto grande – (Circunferência braço maior que 33cm)'?'checked':'':''}}>
                                                                    3. Adulto grande – (Circunferência braço &gt;33cm)
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>6. Marca manguito</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                <input hidden name="perguntapressao7" type="text" value="2. Marca manguito: " >
                                                                    <input type="radio" name="respostapressao7" value="Omron" {{$usuario->formpressao()?$usuario->formpressao()->respostapressao7=='Omron'?'checked':'':''}}>
                                                                    Omron
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostapressao7" value="Aneróide" {{$usuario->formpressao()?$usuario->formpressao()->respostapressao7=='Aneróide'?'checked':'':''}}>
                                                                    Aneróide
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>7. Pressão arterial sistólica 1:</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao8" type="text" value="3. Pressão arterial sistólica 1: ">
                                                            <input type="text" name="respostapressao8" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao8:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>8. Pressão arterial diastólica 1:</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao9" type="text" value="4. Pressão arterial diastólica 1: ">
                                                            <input type="text" name="respostapressao9" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao9:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>9. Pressão arterial sistólica 2: </legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao10" type="text" value="5. Pressão arterial sistólica 2: ">
                                                            <input type="text" name="respostapressao10" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao10:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>10. Pressão arterial diastólica 2:</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao11" type="text" value="6. Pressão arterial diastólica 2: ">
                                                            <input type="text" name="respostapressao11" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao11:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>11. Pressão arterial sistólica 3:</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao12" type="text" value="7. Pressão arterial sistólica 3: ">
                                                            <input type="text" name="respostapressao12" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao12:''}}" class="form-control" class="form-control" >
                                                        </div>
                                                    </fieldset>


                                                    <fieldset>
                                                        <legend>12. Pressão arterial diastólica 3:</legend>
                                                        <div class="form-group">
                                                        <input hidden name="perguntapressao13" type="text" value="8. Pressão arterial diastólica 3:">
                                                            <input type="text" name="respostapressao13" value="{{$usuario->formpressao()?$usuario->formpressao()->respostapressao13:''}}" class="form-control" class="form-control" >
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
                            $('#pressao').mask('0.00');
                        });
                    </script>
                </div>
        </div>
    </div>
@endsection
