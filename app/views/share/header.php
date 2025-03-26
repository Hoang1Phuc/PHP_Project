<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web Bán Hàng</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .add-btn {
            display: inline-block;
            padding: 10px 15px;
            margin-bottom: 15px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .add-btn:hover {
            background: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .action-btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin: 2px;
            display: inline-block;
        }
        .edit-btn {
            background: #ffc107;
            color: black;
        }
        .edit-btn:hover {
            background: #e0a800;
        }
        .delete-btn {
            background: #dc3545;
            color: white;
        }
        .delete-btn:hover {
            background: #c82333;
        }

        /* Custom Header Styles */
        header {
            background: linear-gradient(135deg, #6d28d9, #a855f7);
            padding: 15px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar {
            padding: 0 20px;
        }
        .navbar-brand {
            color: white;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 1px;
            transition: transform 0.2s;
        }
        .navbar-brand:hover {
            transform: scale(1.05);
            color: #f3e8ff;
        }
        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 20px;
            transition: all 0.3s;
        }
        .navbar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #f3e8ff;
        }
        .navbar-nav .nav-item.active .nav-link {
            background: #ffffff;
            color: #6d28d9;
        }
        .navbar-toggler {
            border: none;
            padding: 5px;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Trang Chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Sinh Viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/BAIKIEMTRA/HocPhan">Học Phần</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Auth">Đăng Nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">