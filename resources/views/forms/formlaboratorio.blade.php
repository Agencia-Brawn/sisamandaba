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
                                            <li><a class="dropdown-item nav-link active" href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}">Formulário Laboratório</a></li>
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
                                <li><a class="dropdown-item nav-link active" href="{{route('form.laboratorio',['usuario'=>$usuario->id])}}">Formulário Laboratório</a></li>
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
        <!-- FIM MENU WEB --> 
            

        <div class="col-md-9 col-lg-9 col-xl-10 col-12 col-painel-header">
                <div class="container painel-controle" >
                    <div class="row justify-content-center ">
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
                                            <!-- QUEST. LABORATÓRIO (names ok)-->
                                            <form action="{{route('post.form.laboratorio',['usuario'=>$usuario->id])}}" id="form6" method="POST">
                                                @csrf
                                                    <fieldset>
                                                        <h2>Questionário Laboratório<br><small></small></h2>
                                                    </fieldset>                                                    

                                                    <!-- EXTRA 1 -->
                                                    <fieldset>
                                                        <legend >1. Nome do Entrevistador</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio16" type="text" value="Nome do Entrevistador:">
                                                            <input name="respostalaboratorio16" type="text" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio16:''}}"  class="form-control" >
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend >2. Data do Exame</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio1" type="text" value="1. Data do Exame:">
                                                            <input name="respostalaboratorio1" type="date" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio1:''}}"  class="form-control" >
                                                        </div>
                                                    </fieldset>

                                                    <!-- SUB-TITULO -->
                                                    <fieldset>
                                                        <h3>Critérios para coleta:</h3>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>3. O participante está ou esteve doente com febre ou vômitos nos últimos 7 dias? (SE SIM, REAGENDAR A COLETA)</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntalaboratorio2" type="text" value="2. O participante está ou esteve doente com febre ou vômitos nos últimos 7 dias? (SE SIM, REAGENDAR A COLETA):">
                                                                    <input required name="respostalaboratorio2" type="radio" value="Não" {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio2=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input name="respostalaboratorio2" type="radio" value="Sim" {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio2=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>4. Fez atividade física moderada ou pesada durante as últimas 12 horas?</legend>
                                                        <div class="form-group">
                                                            <div class="radio">
                                                                <label>
                                                                    <input hidden name="perguntalaboratorio3" type="text" value="3. Fez atividade física moderada ou pesada durante as últimas 12 horas:">
                                                                    <input type="radio" name="respostalaboratorio3" value="Não" {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio3=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostalaboratorio3" value="Sim" {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio3=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>5. Qual o horário da última ingestão de alimentos? (SE MENOS DO QUE 12 HORAS, AGUARDAR COMPLETAR O TEMPO PARA A COLETA, SE MAIS DE 14 HORAS, INFORMAR COORDENAÇÃO) </legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio4" type="text" value="4. Qual o horário da última ingestão de alimentos? (SE MENOS DO QUE 12 HORAS, AGUARDAR COMPLETAR O TEMPO PARA A COLETA, SE MAIS DE 14 HORAS, INFORMAR COORDENAÇÃO):">
                                                            <input required type="time" name="respostalaboratorio4" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio4:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>6. Qual o horário da ingestão de líquidos, incluindo café?</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio5" type="text" value="5. Qual o horário da ingestão de líquidos, incluindo café:">
                                                            <input required type="time" name="respostalaboratorio5" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio5:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>7. Qual o horário do último cigarro? (SE MENOS DO QUE 1 HORA, AGUARDAR COMPLETAR 1 HORA PARA INICIAR COLETA)</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio6" type="text" value="6. Qual o horário do último cigarro? (SE MENOS DO QUE 1 HORA, AGUARDAR COMPLETAR 1 HORA PARA INICIAR COLETA):">
                                                            <input required type="time" name="respostalaboratorio6" id="" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio6:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>8. Qual o horário da primeira urina da manhã?</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio7" type="text" value="7. Qual o horário da primeira urina da manhã:">
                                                            <input required type="time" name="respostalaboratorio7" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio7:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>9. Qual o horário da coleta de urina para o projeto?</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio8" type="text" value="8. Qual o horário da coleta de urina para o projeto:">
                                                            <input required type="time" name="respostalaboratorio8" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio8:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>10. INÍCIO DA COLETA ÀS:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio9" type="text" value="9. INÍCIO DA COLETA ÀS:">
                                                            <input required type="time" name="respostalaboratorio9" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio9:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>11. FIM DA COLETA ÀS:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio10" type="text" value="10. FIM DA COLETA ÀS:">
                                                            <input required type="time" name="respostalaboratorio10" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio10:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>12. Colheu as amostras em jejum? </legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio11" type="text" value="11. Colheu as amostras em jejum:">
                                                            <div clrequired ass="radio">
                                                                <label>
                                                                    <input type="radio" name="respostalaboratorio11" value="Não" {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio11=='Não'?'checked':'':''}}>
                                                                    Não
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="respostalaboratorio11" value="Sim" {{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio11=='Sim'?'checked':'':''}}>
                                                                    Sim
                                                                </label>
                                                            </div>
                            
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>13. Nome do técnico que coletou:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio12" type="text" value="12. Nome do técnico que coletou:">
                                                            <input required type="text" name="respostalaboratorio12" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio12:''}}" class="form-control" >
                                                        </div>
                                                    </fieldset>
                                                    
                                                    <fieldset>
                                                        <legend>14. Impressão do resultado, data:</legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio13" type="text" value="13. Impressão do resultado, data:">
                                                            <input type="date" name="respostalaboratorio13" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio13:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>15. Entrega do resultado ao participante, data: </legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio14" type="text" value="14. Entrega do resultado ao participante, data:">
                                                            <input type="date" name="respostalaboratorio14" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio14:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <fieldset>
                                                        <legend>16. Entrega do resultado na ESF, data: </legend>
                                                        <div class="form-group">
                                                            <input hidden name="perguntalaboratorio15" type="text" value="15. Entrega do resultado na ESF, data:">
                                                            <input type="date" name="respostalaboratorio15" value="{{$usuario->formlaboratorio()?$usuario->formlaboratorio()->respostalaboratorio15:''}}" class="form-control">
                                                        </div>
                                                    </fieldset>

                                                    <div class="text-center">
                                                        <button id="formlaboratorio" class="btn btn-primary mt-5" type="submit" > ENVIAR FORMULÁRIO </button>                                                    
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

                </div>
        </div>

    </div>
    
@endsection
