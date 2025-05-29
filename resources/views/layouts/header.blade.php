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
            padding-top: 90px; /* Отступ для фиксированного хедера */
        }

        /* Стили для фиксированного хедера */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            /* background: rgba(255, 255, 255, 0.95); */
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
            gap: 30px; /* Уменьшил расстояние между пунктами */
        }

        .nav-link {
            text-decoration: none;
            color: #0a0a0a;
            font-size: 18px;
            font-weight: 600;
            transition: color 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .nav-link:hover {
            /* color: #e88409; */
            background: rgba(232, 132, 9, 0.1);
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