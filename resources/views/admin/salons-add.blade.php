@extends('admin/layouts.app')

@section('title-block')
    Додати салон
@endsection()

@section('content')
    <h4>Запис</h4>
    <form action="{{ route('admin-add-salons') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
            <label for="mashineName" class="form-label">Машинне ім'я</label>
            <input  type="text" class="form-control" id="mashineName" aria-describedby="mashineName" name="mashineName">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Назва</label>
            <input  type="text" class="form-control" id="name" aria-describedby="name" name="name">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Назва</label>
            <input  type="text" class="form-control" id="address" aria-describedby="address" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@endsection()
