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
  body {
        background-image: url('/images/paws-background.png'); /* Путь к вашему изображению */
        background-size: cover; /* Растягиваем на весь экран */
        background-attachment: fixed; /* Фон фиксированный при прокрутке */
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh; /* Минимальная высота на весь экран */
    }
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.85); /* Белый с прозрачностью */
        z-index: -1; /* Под основным контентом */
    }
  .record-form-container {
      margin-top: 0px;
      max-width: 500px;
      margin: 40px auto;
      padding: 30px;
      background: #e7ae63;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
  }
  
  .record-form-title {
      font-size: 1.8rem;
      color: #090909;
      margin-bottom: 30px;
      font-weight: 60;
  }
  
  .record-form {
      text-align: left;
  }
  
  .form-label {
    display: block;
    margin-bottom: 12px;  /* Увеличил отступ снизу */
    font-weight: 600;    /* Увеличил жирность (было 500) */
    color: #000000;      /* Чистый черный цвет (было #0b0b0b) */
    font-size: 1.05rem;  /* Слегка увеличил размер шрифта */
}
  
  .form-control {
      width: 100%;
      padding: 12px 15px;
      /* border: 1px solid #e0e0e0; */
      border-radius: 8px;
      font-size: 1rem;
      transition: all 0.3s ease;
      margin-bottom: 20px;
      background-color: #eeb974;
      border-radius: 30px; /* Закругленные углы */
      background-color: white; 
      color: #eeb974; 
      border-color: #ed770f; Цвет рамки 
      
  }
  
  .form-control:focus {
      border-color: #ed770f; /* Цвет рамки */
      
      outline: none;
      /* background-color: #fff; */
  }
  
  .form-control::placeholder {
      color: #010101;
  }
  
  .btn-primary {
      width: 100%;
      padding: 12px;
      /* background-color: #6c8eff; */
      border: none;
      border-radius: 8px;
      /* color: white; */
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
      background: linear-gradient(to right, #ed770f, #e7ae63);
  }
  
  .btn-primary:hover {
     /* ? background-color: #5a7ae8; */
      transform: translateY(-2px);
      /* box-shadow: 0 4px 12px rgba(108, 142, 255, 0.3); */
      border-color: #ed770f; /* Цвет рамки */

        
  }
  
  .alert-danger {
      /* background-color: #ffebee; */
      color: #c62828;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 25px;
      text-align: left;
      border: 1px solid #ef9a9a;
  }
  
  .alert-danger ul {
      padding-left: 20px;
      margin-bottom: 0;
  }
  
  @media (max-width: 768px) {
      .record-form-container {
          padding: 20px;
          margin: 20px 15px;
      }
      
      .record-form-title {
          font-size: 1.5rem;
          margin-bottom: 20px;
      }
  }
</style>

@endsection