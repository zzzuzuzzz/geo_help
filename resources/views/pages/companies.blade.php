@extends('layouts.main')
@section('mainContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Компании</h3>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Адрес</th>
                                    <th>Название</th>
                                    <th>Просмотрено</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{ $company->address }}</td>
                                        <td>
                                            <a href="{{ route('company', $company) }}">
                                                {{ $company->name }}
                                            </a>
                                        </td>
                                        <td>{{ $company->viewed == 0 ? 'Не просмотрено' : 'Просмотрено' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
