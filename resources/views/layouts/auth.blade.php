@extends('layouts.app')
@section('content')
    <div style="width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <p class="h1"><b>Geo</b> Help</p>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Авторизация</p>
                    @yield('authContent')
                </div>
            </div>
        </div>
    </div>
@endsection
