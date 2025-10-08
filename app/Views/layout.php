<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'ITE311 Project' ?></title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            margin: 0 10px;
        }
        .navbar-nav .nav-link.active {
            color: #fff !important;
        }
    </style>
</head>
<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <i class="bi bi-house me-2"></i>ITE311 Project
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_page ?? '') == 'home' ? 'active' : '' ?>" href="<?= base_url('/') ?>">
                            <i class="bi bi-house-door me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_page ?? '') == 'about' ? 'active' : '' ?>" href="<?= base_url('/about') ?>">
                            <i class="bi bi-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($active_page ?? '') == 'contact' ? 'active' : '' ?>" href="<?= base_url('/contact') ?>">
                            <i class="bi bi-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <div class="main-content">
        <div class="container py-5">
            <?= $content ?? '' ?>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
