@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row row-login" >
        <div class="col-md-4 col-lg-6 col-sm-6 col-img-login">
            <img class="img-fluid" src="img/img_login_fundo.webp" alt="">       
        </div>
        
        <!-- div para afastar -->

        <div class="col-md-6 col-lg-6 col-sm-12 col-12 col-form-login">
            <div class="card" >
                <!-- <div class="card-header">{{ __('Login') }}</div> -->
                <img  class="img-fluid logo-login" src="img/logo_verde.png" alt="">


                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-sm-12 col-form-label text-md-right">{{ __('E-Mail:') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Senha:') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- LEMBRAR SENHA -->
                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar Senha') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <span class="espaco"><br></span>

                                @if (Route::has('password.request'))
                                    <a style="padding: 0px;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha ?') }}
                                    </a>
                                @endif
                                

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row section-apoio">
        <h1>
            APOIO
        </h1>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 col-apoio" >
            <img class="apoio-login img-fluid" src="img/apoio.webp" alt="">
        </div>

    <!-- 
        <div class="col-lg-2" style="margin: auto; padding-left: 73px;">
            <img style="max-width: 80px;" class="img-fluid" src="img/ufpa.png" alt="">
        </div>
                    
        <div class="col-lg-2" style="margin: auto;  ">
            <img style="max-width: 150px;" class="img-fluid" src="img/cnpq.png" alt="">
        </div>

        <div class="col-lg-2" style="margin: auto;  ">
            <img style="max-width: 150px;" class="img-fluid" src="img/ppg-sas.jpeg" alt="">
        </div> 
    -->

    </div>

</div>
@endsection
