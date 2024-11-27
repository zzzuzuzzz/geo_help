@extends('layouts.main')
@section('mainContent')
    <div class="container-fluid">
        <form action="{{ route('companies') }}" method="GET" class="card">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="p-2">
                        <div class="input-group mb-2">
                            <label class="input-group-text" for="filter-date">Сортировка по дате</label>
                            <select class="form-select w-50" id="filter-date" name="filter-date">
                                <option selected disabled>Не выбрано</option>
                                <option value="asc">По возрастанию</option>
                                <option value="desc">По убыванию</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="submit" class="btn btn-primary" value="Сохранить">
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
                        <div class="p-2">{{ $companies->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
