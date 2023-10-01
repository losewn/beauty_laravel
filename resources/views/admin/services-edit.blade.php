@extends('admin/layouts.app')

@section('title-block')
    Редагувати сервіс
@endsection()

@section('content')
    <h4>Редагувати сервіс</h4>
    <form action="{{ route('admin-update-services', $item->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
            <label for="mashineName" class="form-label">Машинне ім'я</label>
            <input type="text" class="form-control" id="mashineName" aria-describedby="mashineName" name="mashineName" value="{{ $item->mashine_name }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Назва</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{ $item->name }}">
        </div>
{{--        <div class="mb-3">--}}
{{--            <label for="salon" class="form-label">Салон</label>--}}
{{--            <input  type="text" class="form-control" id="salon" aria-describedby="salon" name="salon" value="{{ $item->salon }}">--}}
{{--        </div>--}}
        <div class="mb-3">
            <label for="salon" class="form-label">Салон</label>
            <select name="salon" class="form-select form-select-sm" aria-label="Салон">
                <option selected disabled>Салон</option>

                @foreach($salons as $salon)
                    <option value="{{ $salon->mashine_name }}">{{ $salon->mashine_name }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>

@endsection()
