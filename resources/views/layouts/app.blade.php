<!DOCTYPE html>
<html lang="ru">
    
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Paws - Груминг для кошек и собак</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <style>
        /* Основные стили */
        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            padding-top: 90px; 
        }

        /* Стили для фиксированного хедера */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95); */
            backdrop-filter: blur(8px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 15px 0;
        }

        /* Контейнер для содержимого хедера */
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px; 
        }

        /* Логотип */
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #e88409;
            text-decoration: none;
            margin-right: 20px;
        }

        /* Горизонтальное меню */
        .main-nav {
            display: flex;
            gap: 30px; 
        }

        .nav-link {
            text-decoration: none;
            color: #0a0a0a;
            font-size: 18px;
            font-weight: 600;
            transition: color 0.3s;
            /* padding: 5px 10px; */
            border-radius: 4px;
            padding-left: 10px; 
        }

        .nav-link:hover {
            /* color: #e88409; */
            background: rgba(232, 132, 9, 0.1);
            padding-left: 10px;
        }

        /* Основной контент */
        .main-content {
            /* max-width: 1200px; */
            margin: 0 auto;
            padding: 20px;
            width: 100%;
        }

        /* Адаптация для мобильных устройств
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }
            
            .header-container {
                flex-direction: column;
                padding: 10px;
            }
            
            .main-nav {
                gap: 15px;
                margin-top: 10px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-link {
                font-size: 16px;
                padding: 5px 8px;
            } */
        
    </style>
    @yield('head')
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <a href="{{ route('main.index') }}" class="logo">Elite Paws</a>
            <nav class="main-nav">
                <a href="{{ route('records.create') }}" class="nav-link">Услуги</a>
                <a href="{{ route('records.index') }}" class="nav-link">Запись</a>
                <a href="{{ route('contact.index') }}" class="nav-link">О нас</a>
                <a href="{{ route('service.index') }}" class="nav-link">Контакты</a>
            </nav>
        </div>
    </header>
    
    <main class="main-content">
        @yield('content')
    </main>
</body>
</html>
    </style>
<footer>
    <div class="container">
        <div class="footer__grid">
            <div class="footer__contacts">
                <h3 class="footer__title">Контакты</h3>
                <p class="footer__text">7 (912) 345–67–89</p>
                <p class="footer__text">г. Челябинск, ул. Пушкистая, 15</p>
                <p class="footer__text">Email: hello@elitepaws.ru</p>
                <p class="footer__text">Часы работы:<br>Пн-Пт: 10:00–20:00<br>Сб-Вс: 9:00–18:00</p>
            </div>
            
            <div class="footer__social">
                <h3 class="footer__title">Соцсети – следите за нами!</h3>
                <div class="social-links">
                    <a href="#" class="social-link">ВКонтакте</a>
                    <a href="#" class="social-link">Instagram</a>
                    <a href="#" class="social-link">Telegram</a>
                </div>
            </div>
        </div>
        
        <div class="footer__copyright">
            © 2025 ElitePaws. Все права защищены.
        </div>
    </div>
<style>
    /* Footer */
<style>
    .footer {
    background-color: #e7ae63;
    color: rgb(10, 10, 10);
    padding: 2rem 0 1rem; 
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
}


.footer__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 1.5rem; 
    border-top: 1px solid rgba(235, 141, 11, 0.937);
    padding-top: 2rem;
}

/* Стили для блока контактов */
.footer__contacts {
    max-width: 350px; 
}

/* Стили для блока соцсетей */
.footer__social {
    max-width: 350px; 
    margin-left: auto; 
}

.footer__title {
    font-family: 'Roboto Slab', serif;
    font-size: 1.2rem; 
    margin-bottom: 0.8rem; 
    color: var(--secondary);
}

.footer__text {
    margin-bottom: 0.4rem; 
    font-size: 0.9rem; 
    line-height: 1.4;
}

/* Стили для соцсетей */
.social-links {
    display: flex;
    flex-wrap: wrap;
    gap: 0.8rem; 
    margin-top: 0.5rem;
}

.social-link {
    color: rgb(5, 5, 5);
    text-decoration: none;
    transition: color 0.3s;
    font-size: 0.9rem; 
}

.social-link:hover {
    color: var(--secondary);
}

.footer__copyright {
    text-align: center;
    padding-top: 2rem;
    border-top: 1px solid rgba(235, 141, 11, 0.937);
    width: 100%; 
    max-width: 1200px; 
    margin: 0 auto; 
    min-height: 80px; 
    box-sizing: border-box; 
}

@media (max-width: 768px) {
    .header__inner {
        flex-direction: column;
    }
    
    .nav {
        margin-top: 1rem;
    }
    
    .hero__title {
        font-size: 2rem;
    }
}

.location-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 30px 20px;
    }
    
    .location-header {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .location-header h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 15px;
    }
    
    .location-header p {
        font-size: 1.1rem;
        color: #7f8c8d;
        max-width: 700px;
        margin: 0 auto;
    }
    
    #map {
        width: 100%;
        height: 500px;
        margin: 30px 0;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: none;
    }
    
    .map-error {
        color: #e74c3c;
        padding: 30px;
        text-align: center;
        background: #f9f9f9;
        border-radius: 8px;
        margin: 30px 0;
    }
    
    .map-error p {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    
    .btn-primary {
        display: inline-block;
        padding: 12px 25px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }
    
    .btn-primary:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .contact-info {
        /* background: #f8f9fa; */
        padding: 40px;
        border-radius: 8px;
        margin-top: 40px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .contact-card {
        flex: 1;
        min-width: 250px;
        margin: 10px;
        padding: 20px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .contact-card h3 {
        color: #2c3e50;
        margin-bottom: 15px;
        font-size: 1.3rem;
    }
    
    .contact-card p {
        color: #7f8c8d;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .location-header h1 {
            font-size: 2rem;
        }
        
        #map {
            height: 350px;
        }
        
        .contact-info {
            flex-direction: column;
        }
    }
    </style>




<style>
    .search-container {
      max-width: 600px;
      margin: 4px auto;
      padding: 3px;
      background: #fff;
      border-radius: 1px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
      text-align: center;
      margin-top: 0px;
  }
  
  .search-title {
      font-size: 1.8rem;
      color: #2c3e50;
      margin-bottom: 30px;
      font-weight: 600;
  }
  
  .search-form {
      text-align: left;
      margin-top: 2px;
  }
  
  .form-label {
    display: block;
    margin-bottom: 12px;  
    font-weight: 60;    
    color: #000000;      
    font-size: 1.05rem;  
    display: center;
}
  
  .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
      transition: all 0.3s ease;
      margin-bottom: 20px;
  }
  
  .form-control:focus {
      border-color: #3498db;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
      outline: none;
  }
  
  .form-control::placeholder {
      color: #95a5a6;
  }
  
  .btn-primary {
      width: 100%;
      padding: 12px;
      background-color: #3498db;
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 1rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
  }
  
  .btn-primary:hover {
      background-color: #2980b9;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(41, 128, 185, 0.3);
  }
  
  .alert-danger {
      background-color: #f8d7da;
      color: #721c24;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 25px;
      text-align: left;
  }
  
  .alert-danger ul {
      padding-left: 20px;
      margin-bottom: 0;
  }
  
  @media (max-width: 768px) {
      .search-container {
          padding: 20px;
          margin: 20px 15px;
      }
      
      .search-title {
          font-size: 1.5rem;
          margin-bottom: 20px;
      }
  }
  </style>
{{-- <style>
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
        /* border-radius: 12px; */
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
        /* transform: translateY(-2px); */
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

<style>
    /* Фон всей страницы */
    body {
        background-image: url('/images/paws-background.png'); /* Путь к вашему изображению */
        background-size: cover; /* Растягиваем на весь экран */
        background-attachment: fixed; /* Фон фиксированный при прокрутке */
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh; /* Минимальная высота на весь экран */
    }

    /* Полупрозрачный слой поверх фона для лучшей читаемости */
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

    /* Стили для формы */
    .booking-form-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 30px;
        background-color: #e7ae63;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    
    .form-control, .form-select {
        width: 100%;
        max-width: 400px;
        margin: 0 auto 15px;
        display: block;
        background-color: rgba(255, 255, 255, 0.8);
    }
    
        .submit-btn {
        display: block;
        width: 200px;
        margin: 30px auto 0;
        padding: 12px 24px;
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border: none;
        border-radius: 30px; /* Закругленные углы */
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #ed770f; /* Коралловый */
        color: white;
        border-color: #ed770f; /* Цвет рамки */

        background: linear-gradient(to right, #ed770f, #e7ae63);
        color: white;
        border: none;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        background-color: #ed770f; /* Темнее при наведении */
        border-color: #ed770f;

        background: linear-gradient(to right,  #ed770f, #e7ae63);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    /* Обновленный стиль для контейнера услуг */
.services-container {
    max-width: 450px; /* Фиксированная ширина */
    margin: 0 auto; /* Центрирование */
    padding: 15px;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 10px;
}

/* Стиль для чекбоксов */
.form-check {
    padding: 8px 15px;
    margin-bottom: 8px;
    /* чbackground-color: white; */
    border-radius: 6px;
    transition: all 0.3s ease;
}

.form-check:hover {
    background-color: #f8f9fa;
    transform: translateX(5px);
}

/* Стили для чекбоксов */
.form-check-input {
    width: 1.2em;
    height: 1.2em;
    margin-top: 0.3em;
    cursor: pointer;
}

/* Цвет рамки невыбранного чекбокса */
.form-check-input:not(:checked) {
    border-color: #e67e22; /* Оранжевая рамка */
}

 /* Стиль для выбранного чекбокса */
.form-check-input:checked {
    background-color: #e67e22; /* Оранжевый фон */
    border-color: #e67e22; /* Оранжевая рамка */
} 

/* Стиль при наведении */
.form-check-input:hover:not(:checked) {
    border-color: #d35400; /* Темно-оранжевая рамка */
}

.form-check-label {
    margin-left: 8px;
    font-size: 15px;
}

/* Центрирование заголовков */
h5.text-center {
    margin: 25px 0 15px;
    color: #5a3e36;
    font-weight: 600;
}

/* Обновленный стиль формы */
.booking-form-container {
    max-width: 600px;
    margin: 30px auto;
    padding: 30px;
    border: 1px solid #e7ae63;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

input[type="date"] {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ddd;
}
</style> --}}

<style>
    body {
        background-image: url('/images/paws-background.png'); 
        background-size: cover; 
        background-attachment: fixed; 
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh; 
    }
    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.85); 
        z-index: -1; 
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
      margin-bottom: 10px;
      font-weight: 60;
  }
  
  .record-form {
      text-align: left;
  }
  
  .form-label {
    display: block;
    margin-bottom: 10px;  
    font-weight: 60;    
    color: #000000;      
    font-size: 1.05rem;  
}
  
  .form-control {
      width: 100%;
      /* padding: 12px 15px; */
      /* border: 1px solid #e0e0e0; */
      border-radius: 8px;
      font-size: 1rem;
      transition: all 0.3s ease;
      margin-bottom: 10px;
      background-color: #eeb974;
      border-radius: 10px; /* Закругленные углы */
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
      padding: 10px;
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
      margin-bottom: 20px;
      text-align: left;
      border: 1px solid #ef9a9a;
  }
  
  .alert-danger ul {
      padding-left: 20px;
      margin-bottom: 0;
  }
  
  @media (max-width: 768px) {
      .record-form-container {
          padding: 10px;
          margin: 10px 10px;
      }
      
      .record-form-title {
          font-size: 1.5rem;
          margin-bottom: 10px;
      }
  }
</style>

    @yield('footer')
</footer>
</html>

