@extends('layouts.app')

@section('title-block')
    Запис
@endsection()

@section('content')
    <h4>Запис</h4>
    <form action="{{ route('appointment-form') }}" method="post">
        <div class="form-group">
            <div class="mb-3">
                <label for="nameClient" class="form-label">Введіть ваше ім'я</label>
                <input required type="name" class="form-control" id="nameClient" aria-describedby="nameClientHelp">
            </div>
            <div class="mb-3">
                <label for="calendar" class="form-label">Виберіть дату.</label>
                <input required class="form-control" type="date" id="dateAppointment" name="trip-start"/>
            </div>

            <div class="mb-3" id="blockAppointmentTime">
                <label for="calendar" class="form-label">Виберіть дату.</label>
                <input required class="form-control" type="time" id="timeAppointment" name="trip-start" value="13:30"/>
            </div>

            <button type="submit" class="btn btn-primary">Зробити запис</button>
        </div>
    </form>
    <script>
        var dateAppointment = document.getElementById('dateAppointment');

        dateAppointment.valueAsDate = new Date();

        dateAppointment.onchange = function(){
            console.log(this.value);

            const blockAppointmentTime = document.querySelector('#blockAppointmentTime');
            blockAppointmentTime.style.display = 'block';
        }

    </script>
@endsection()

