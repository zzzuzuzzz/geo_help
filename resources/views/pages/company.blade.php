@extends('layouts.main')
@section('mainContent')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <a class="btn btn-outline-primary" href="{{ route('companies') }}">Вернуться назад</a>
                        <form action="{{ route('company.patch', $company) }}" method="POST" class="w-50 ml-3">
                            @csrf
                            <input style="display: none" name="view">
                            <button type="submit" class="btn {{ $company->viewed == 1 ? 'btn-outline-danger' : 'btn-outline-success' }}">
                                Изменить статус на '{{ $company->viewed == 1 ? 'Не просмотрено' : 'Просмотрено' }}'
                            </button>
                        </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Параметр</th>
                                    <th>Значение</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Название</td>
                                    <td>{{ $company->name }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $company->category }}</td>
                                </tr>
                                <tr>
                                    <td>Адрес</td>
                                    <td>{{ $company->address }}</td>
                                </tr>
                                <tr>
                                    <td>Сайт</td>
                                    <td>{{ $company->site }}</td>
                                </tr>
                                <tr>
                                    <td>Номер телефона</td>
                                    <td>{{ $company->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Статус</td>
                                    <td>{{ $company->viewed == 0 ? 'Не просмотрено' : 'Просмотрено' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
