@extends('admin/layouts.app')

@section('title-block')
    Всі записи
@endsection()

@section('content')
    <h4>Всі записи</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ім'я</th>
            <th scope="col">Салон</th>
            <th scope="col">Послуга</th>
            <th scope="col">Дата та час</th>
            <th scope="col">Створено</th>
            <th scope="col"> </th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->salon }}</td>
                <td>{{ $item->service }}</td>
                <td>{{ $item->datetime }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <button type="button" class="btn btn-warning"><a href="{{ route('admin-edit-appointment', $item->id) }}">Редагувати</a></button>
                    <br>
                    <button type="button" class="btn btn-warning"><a href="{{ route('admin-remove-appointment', $item->id) }}">Видалити</a></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection()
