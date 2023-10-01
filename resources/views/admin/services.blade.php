@extends('admin/layouts.app')

@section('title-block')
    Всі сервіси
@endsection()

@section('content')
    <h4>Всі сервіси</h4>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Машинне ім'я</th>
            <th scope="col">Послуга</th>
            <th scope="col">Салон</th>
            <th scope="col">Створено</th>
            <th scope="col">
                <button type="button" class="btn btn-danger"><a href="{{ route('admin-add-form-services') }}">Додати</a></button>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->mashine_name }}</td>
                <td>{{ $item->salon }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <button type="button" class="btn btn-warning"><a href="{{ route('admin-edit-services', $item->id) }}">Редагувати</a></button>
                    <br>
                    <button type="button" class="btn btn-warning"><a href="{{ route('admin-remove-services', $item->id) }}">Видалити</a></button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection()
