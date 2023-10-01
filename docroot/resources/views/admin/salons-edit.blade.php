@extends('admin/layouts.app')

@section('title-block')
    Редагувати салон
@endsection()

@section('content')
    <h4>Редагувати салон</h4>
    <form action="{{ route('admin-update-salons', $item->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
            <label for="mashineName" class="form-label">Машинне ім'я</label>
            <input type="text" class="form-control" id="mashineName" aria-describedby="mashineName" name="mashineName" value="{{ $item->mashine_name }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Назва</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ $item->name }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Назва</label>
            <input type="text" class="form-control" id="address" aria-describedby="address" name="address" value="{{ $item->address }}">
        </div>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@endsection()
