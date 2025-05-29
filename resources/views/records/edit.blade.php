@extends('layouts.app')

@section('content')
<div class="container mt-4">
  <div class="record-form-container">
    <h3 class="record-form-title">Найти запись</h3>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('records.find') }}" method="post" class="record-form">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input
          type="text"
          id="name"
          name="name"
          class="form-control"
          placeholder="Введите ваше имя"
          value="{{ old('name') }}"
          required>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Телефон</label>
        <input
          type="tel"
          id="phone"
          name="phone"
          class="form-control"
          placeholder="+7 (XXX) XXX-XX-XX"
          value="{{ old('phone') }}"
          required>
      </div>

      <button type="submit" class="btn btn-primary">Найти</button>
    </form>
  </div>
</div>

<style>
  .record-form-container {
    max-width: 500px;
    margin: 0 auto;
    padding: 25px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.record-form-title {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
    font-weight: 600;
}

.record-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-control {
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #4a90e2;
    box-shadow: 0 0 0 0.2rem rgba(74, 144, 226, 0.25);
    outline: none;
}

.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #555;
}

.btn-primary {
    background-color: #4a90e2;
    border: none;
    padding: 12px;
    border-radius: 6px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary:hover {
    background-color: #3a7bc8;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
    padding: 12px 15px;
    border-radius: 6px;
    margin-bottom: 20px;
}
</style>

@endsection