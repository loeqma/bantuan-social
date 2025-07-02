<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Bantuan Sosial</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #fff9c4, #ffe082);
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #FB8C00;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .card {
            background-color: #ffffff;
            border-left: 5px solid #FDD835;
        }

        .btn-warning,
        .btn-outline-warning {
            background-color: #FDD835;
            border: none;
            color: #000;
        }

        .btn-warning:hover,
        .btn-outline-warning:hover {
            background-color: #FB8C00;
            color: #fff;
        }

        .table-warning thead {
            background-color: #FFF176;
        }

        .badge-layak {
            background-color: #FDD835;
            color: #000;
        }

        .badge-tidak {
            background-color: #FFB300;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('beneficiaries.index') }}">
            ☀️ Bantuan Sosial
        </a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
