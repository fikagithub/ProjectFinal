<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title','Sistem Halaman Penjualan')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">BY_MOODD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('menuHome')" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('menuProfile')" aria-current="page" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @yield('menuProduct')" aria-current="page" href="/product">Product</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link @yield('menuContact')" aria-current="page" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @show
<div class="alert alert-primary text-center">Sistem Halaman Penjualan BY_MOODD</div>
    @yield('content')
    <footer class="bg-dark py-2 text-white mt-4">
        <div class="container">
            Sistem Halaman Penjualan | Copyright &copy; {{date("Y")}} BY_MOODD
        </div>
    </footer>
</body>
</html>