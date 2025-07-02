<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Bantuan Sosial</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons (opsional) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #e9fcd9, #d0f0c0);
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #2e7d32;
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }

        .btn-success,
        .btn-outline-success {
            background-color: #43a047;
            border: none;
        }

        .btn-success:hover,
        .btn-outline-success:hover {
            background-color: #2e7d32;
        }

        .card {
            background-color: #ffffff;
            border-left: 5px solid #66bb6a;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('beneficiaries.index') }}">
            🌿 Aplikasi Bantuan Sosial
        </a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
