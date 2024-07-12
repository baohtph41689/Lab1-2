<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
            <a class="nav-link" href="booklist">Sản phẩm</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </nav>
          <h3>Danh sách các danh mục</h3>
          <ul>
            <li><a href="{{ url('/Get_book/1') }}">Danh mục 1</a></li>
            <li><a href="{{ url('/Get_book/2') }}">Danh mục 2</a></li>
            <li><a href="{{ url('/Get_book/3') }}">Danh mục 3</a></li>
            <li><a href="{{ url('/Get_book/4') }}">Danh mục 4</a></li>
            <li><a href="{{ url('/Get_book/5') }}">Danh mục 5</a></li>
        
            <!-- Thêm các danh mục khác nếu cần -->
        </ul>
        <div class="cao">
            @yield('content')
        </div>
        <div class="thap">
            @yield('content2')
        </div>
        <div class="thap">
            @yield('content3')
        </div>
        <div class="thap">
            @yield('content4')
        </div>
    </div>
</body>

</html>
