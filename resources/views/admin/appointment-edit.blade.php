@extends('admin/layouts.app')

@section('title-block')
    Запис
@endsection()

@section('content')
    <h4>Запис</h4>
    <form action="{{ route('admin-update-appointment', $item->id) }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
            <select required name="salon" class="form-select form-select-sm" aria-label="Вкажіть салон, куди б хотіли завітати">
                <option selected disabled>Вкажіть салон, куди б хотіли завітати</option>
                @foreach($salons as $salon)
                    <option value="{{ $salon->mashine_name }}">{{ $salon->mashine_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select required name="service" class="form-select form-select-sm" aria-label="Виберіть послугу">
                <option selected disabled>Виберіть послугу</option>
                @foreach($services as $service)
                    <option value="{{ $service->mashine_name }}">{{ $service->mashine_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nameClient" class="form-label">Введіть ваше ім'я</label>
            <input  type="text" class="form-control" id="nameClient" aria-describedby="nameClientHelp" name="name" value="{{ $item->name }}">
        </div>
        <div class="mb-3">
            <label for="phoneClient" class="form-label">Ваш телефон</label>
            <input  type="text" class="form-control" id="phoneClient" aria-describedby="phoneClienttHelp" name="phone" value="{{ $item->phone }}">
        </div>
        <div class="mb-3">
            <label for="dateAppointment" class="form-label">Виберіть дату</label>
            <input  class="form-control" type="datetime-local" id="dateAppointment" name="dateAppointment" value="{{ $item->datetime }}"/>
        </div>
        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>

@endsection()
