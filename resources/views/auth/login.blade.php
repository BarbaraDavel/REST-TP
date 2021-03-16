<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>REST</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>body {
                font-family: 'Varela Round', sans-serif;
            }
            .modal-login {		
                color: #636363;
                width: 350px;
            }
            .modal-login .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
            }
            .modal-login .modal-header {
                border-bottom: none;   
                position: relative;
                justify-content: center;
            }
            .modal-login h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -15px;
            }
            .modal-login .form-control:focus {
                border-color: #70c5c0;
            }
            .modal-login .form-control, .modal-login .btn {
                min-height: 40px;
                border-radius: 3px; 
            }
            .modal-login .close {
                position: absolute;
                top: -5px;
                right: -5px;
            }	
            .modal-login .modal-footer {
                background: #ecf0f1;
                border-color: #dee4e7;
                text-align: center;
                justify-content: center;
                margin: 0 -20px -20px;
                border-radius: 5px;
                font-size: 13px;
            }
            .modal-login .modal-footer a {
                color: #999;
            }		
            .modal-login .avatar {
                position: absolute;
                margin: 0 auto;
                left: 0;
                right: 0;
                top: -70px;
                width: 95px;
                height: 95px;
                border-radius: 50%;
                z-index: 9;
                background: #39AD47;
                padding: 15px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .modal-login .avatar img {
                width: 100%;
            }
            .modal-login.modal-dialog {
                margin-top: 80px;
            }
            .modal-login .btn, .modal-login .btn:active {
                color: #fff;
                border-radius: 4px;
                background: #39AD47 !important;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                border: none;
            }
            .modal-login .btn:hover, .modal-login .btn:focus {
                background: #45aba6 !important;
                outline: none;
            }
            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }
        </style>
    </head>

    <body>
    

         <div class="text-center">
	        <a href="#myModal" class="trigger-btn" data-toggle="modal">LOGIN</a>
        </div>
            <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="avatar">
                            <img src="/examples/images/avatar.png" alt="Avatar">
                        </div>				
                        <h4 class="modal-title">Member Login</h4>	
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Email" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">	
                            </div>        
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>     
     
         <!--@extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ingresar') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection-->
    </body>
</html>
