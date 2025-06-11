<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Tampilan Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar-brand {
            font-weight: 700;
        }
        
        .dashboard-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 60px 0;
            margin-bottom: 40px;
        }
        
        .welcome-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin-bottom: 15px;
        }
        
        .stat-icon.primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .stat-icon.success {
            background: linear-gradient(135deg, #4ade80 0%, #16a34a 100%);
        }
        
        .stat-icon.warning {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }
        
        .stat-icon.info {
            background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-tachometer-alt me-2"></i>
                Tampilan Admin
            </a>
            
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i>
                        {{ Auth::guard('admin')->user()->username ?? 'Admin' }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="dashboard-header">
        <div class="container">
            <div class="welcome-card">
                <h1 class="display-4 text-dark mb-3">
                    <i class="fas fa-home me-3"></i>
                    Penyesuaian Desain
                </h1>
                <p class="lead text-muted mb-0">
                    Revisi 
                </p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="h4 fw-bold">Total dari Users</h3>
                    <h2 class="text-primary">1,234</h2>
                    <p class="text-muted mb-0">Pengguna yang terdaftar</p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon success">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="h4 fw-bold">Aktiv</h3>
                    <h2 class="text-success">89</h2>
                    <p class="text-muted mb-0">Users aktif saat ini</p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon warning">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="h4 fw-bold">Aktivasi</h3>
                    <h2 class="text-warning">12</h2>
                    <p class="text-muted mb-0">Advokat yang tidak aktif</p>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="stat-card">
                    <div class="stat-icon info">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="h4 fw-bold">Artikel</h3>
                    <h2 class="text-info">2.4 GB</h2>
                    <p class="text-muted mb-0">Jumlah penyimpanan artikel</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <div class="stat-card">
                    <h3 class="h4 fw-bold mb-4">
                        <i class="fas fa-cog me-2"></i>
                        Admin Actions
                    </h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <a href="#" class="btn btn-outline-primary w-100 py-3">
                                <i class="fas fa-user-plus me-2"></i>
                                Menambahkan Advokat
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="btn btn-outline-success w-100 py-3">
                                <i class="fas fa-file-export me-2"></i>
                                Export Arikel
                            </a>
                        </div>
                        <div class="col-md-4 mb-3">
                            <a href="#" class="btn btn-outline-info w-100 py-3">
                                <i class="fas fa-chart-bar me-2"></i>
                                Melihat Laporan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>