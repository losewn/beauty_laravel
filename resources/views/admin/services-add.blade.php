@extends('admin/layouts.app')

@section('title-block')
    Додати сервіс
@endsection()

@section('content')
    <h4>Додати сервіс</h4>
    <form action="{{ route('admin-add-services') }}" method="post">
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
            <label for="salon" class="form-label">Салон</label>
            <select name="salon" class="form-select form-select-sm" aria-label="Салон">
                <option selected disabled>Салон</option>

                @foreach($items as $item)
                    <option value="{{ $item->mashine_name }}">{{ $item->mashine_name }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>

@endsection()
