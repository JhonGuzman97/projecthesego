@extends('layouts.template')

@section('title','Login')

@section('content')
<div id="login">
    <h2 class="text-center texthesego pt-5"> GESTION DE ORDENES OPERATIVAS OOC</h2>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="{{route('login.login')}}" method="post">
                        @csrf
                        @include('layouts.partials.messages')
                        <h3 class="text-center texthesego">Login</h3>
                        <div class="form-group">
                            <label for="username" class="texthesego">Usuario:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="password" class="texthesego">Contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group d-grid gap-2 mb-2">
                            <button type="submit" class="btn btn-md text-white" style="background:#009999" >Iniciar Sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
