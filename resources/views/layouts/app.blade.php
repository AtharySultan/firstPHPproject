<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>متجري</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Cairo', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    nav {
      background-color: #34495e;
      display: flex;
      justify-content: center;
      gap: 30px;
      padding: 15px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #f1c40f;
    }

    main {
      padding: 30px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #2c3e50;
      color: white;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <header>
    مرحباً بكم في متجري
  </header>

  <nav>
    <a href="#">الرئيسية</a>
    <a href="{{route('proudcts')}}">المنتجات</a>
    <a href="{{route('aboutUs')}}"> من نحن</a>
    <a href="{{route('CallUs')}}"> تواصل معانا</a>
  </nav>

  <main>
    <!-- يتم هنا وضع محتوى كل صفحة تورث هذا القالب -->
    @yield('content')

  </main>

  <footer>
    &copy; 2025 جميع الحقوق محفوظة لمتجري
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
