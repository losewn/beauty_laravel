@extends('layouts.app')

@section('title-block')
    Головна
@endsection()

@section('content')
    <h4>Вас вітає Beauty Laravel</h4>
    <form method="get" action="/appointment">
        <div class="mb-3">
        <select required name="salon" class="form-select form-select-sm" aria-label="Вкажіть салон, куди б хотіли завітати">
            <option selected disabled>Вкажіть салон, куди б хотіли завітати</option>
            <option value="salon1">One</option>
            <option value="salon2">Two</option>
            <option value="salon3">Three</option>
        </select>
        </div>
        <div class="mb-3">
        <select required name="service" class="form-select form-select-sm" aria-label="Виберіть послугу">
            <option selected disabled>Виберіть послугу</option>
            <option value="service1">One</option>
            <option value="service2">Two</option>
            <option value="service3">Three</option>
        </select>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" required sclass="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Ознайомлений/-на з правилами</label>
        </div>
        <button type="submit" class="btn btn-primary">Далі</button>
    </form>
@endsection()
