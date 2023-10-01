@extends('layouts.app')

@section('title-block')
    Запис
@endsection()

@section('content')
    <h4>Запис</h4>
    <form action="{{ route('appointment-form') }}" method="post">
        <input type="hidden" name="salon" value="{{request()->get('salon')}}" />
        <input type="hidden" name="service" value="{{request()->get('service')}}" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <div class="mb-3">
                <label for="nameClient" class="form-label">Введіть ваше ім'я</label>
                <input required type="text" class="form-control" id="nameClient" aria-describedby="nameClientHelp" name="name">
            </div>
            <div class="mb-3">
                <label for="phoneClient" class="form-label">Ваш телефон</label>
                <input required type="text" class="form-control" id="phoneClient" aria-describedby="phoneClienttHelp" name="phone">
            </div>
            <div class="mb-3">
                <label for="dateAppointment" class="form-label">Виберіть дату</label>
                <input required class="form-control" type="date" id="dateAppointment" name="dateAppointment"/>
            </div>

            <div class="mb-3" id="blockAppointmentTime">
                <label for="timeAppointment" class="form-label">Виберіть час</label>
                <input required class="form-control" type="time" id="timeAppointment" name="timeAppointment" value="13:30"/>
            </div>

            <button type="submit" class="btn btn-primary">Зробити запис</button>
        </div>
    </form>
    <script>
        var dateAppointment = document.getElementById('dateAppointment');
        dateAppointment.valueAsDate = new Date();
        dateAppointment.onchange = function(){
            const blockAppointmentTime = document.querySelector('#blockAppointmentTime');
            blockAppointmentTime.style.display = 'block';
        }

        dateAppointment.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([6,0].includes(day)){
                e.preventDefault();
                this.value = '';
                alert('В вихідні запис недоступний');
            }
        });
    </script>

    <script>
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);

        const salon = urlParams.get('salon');
        const service = urlParams.get('service');
        if(salon == null && service == null){
            window.location = "/";
        }
    </script>

@endsection()
