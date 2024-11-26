@extends('layouts.app')
@section('content')
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link" data-toggle="dropdown" href="#">--}}
{{--                        <i class="far fa-bell"></i>--}}
{{--                        <span class="badge badge-warning navbar-badge">15</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
{{--                        <span class="dropdown-item dropdown-header">15 Notifications</span>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item">--}}
{{--                            <i class="fas fa-users mr-2"></i> 8 friend requests--}}
{{--                            <span class="float-right text-muted text-sm">12 hours</span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a class="brand-link" href="{{ route('home') }}">
                <span class="brand-text font-weight-light">Geo Help</span>
            </a>

            <div class="sidebar">
{{--                <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--                    <div class="image">--}}
{{--                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--                    </div>--}}
{{--                    <div class="info">--}}
{{--                        <a href="#" class="d-block">Alexander Pierce</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="{{ route('companies') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Компании{{--<span class="right badge badge-danger">New</span>--}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="nav-link">
                                @csrf
                                <button class="btn btn-danger w-75" type="submit">Выйти</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
{{--                        <div class="col-sm-6">--}}
{{--                            <h1 class="m-0">Главная страница</h1>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <ol class="breadcrumb float-sm-right">--}}
{{--                                <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                                <li class="breadcrumb-item active">Dashboard v1</li>--}}
{{--                            </ol>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <section class="content">
                @yield('mainContent')
            </section>
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2024 Geo Help.</strong> Все права защищены.
        </footer>
    </div>
@endsection
