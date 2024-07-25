<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        /* Top Navbar Styles */
        .top-navbar {
            background-color: #008CBA;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-container img {
           
        }

        .search-container {
            display: flex;
            margin: 0 auto;
            justify-content: center;
        }

        .search-container input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 5px 0 0 5px;
        }

        .search-container button {
            background-color: #f0f0f0;
            border: none;
            padding: 8px 12px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .profile-container {
            display: flex;
            align-items: center;
        }

        .profile-container img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            margin-left: 10px;
        }

        /* Dashboard Container Styles */
        .dashboard-container {
            display: flex;
            padding: 20px;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: space-between;
        }

        .sidebar ul.menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .sidebar li.active a,
        .sidebar a:hover {
            background-color: #008CBA;
            color: white;
        }

        .sidebar i {
            margin-right: 10px;
            font-size: 1.2em;
            width: 24px;
            text-align: center;
        }

        .sidebar .logout-container{
            margin-top: 20px;
        }

        .sidebar .logout-button {
            background: none;
            border: none;
            padding: 0;
            cursor: pointer;
            color: #dc3545;
            font-family: inherit;
            font-size: inherit;
            text-align: left;
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: flex-start;
        }
        .sidebar li.logout {
            margin-top: auto;
        }

        /* Content Styles */
        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .content h1 {
            margin-bottom: 20px;
        }

        /* Card Container Styles */
        .card-container {
            display: flex;
            gap: 20px;
        }

        /* Card Styles */
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            flex: 1;
            text-align: center;
            border: 3px solid;
        }

        /* Warna Border Kartu */
        .card.total-asset {
            border-color: #1B3B6F; /* Biru Muda */
        }

        .card.pertambahan-asset {
            border-color: #7A7CFF; /* Kuning */
        }

        .card.siap-dipinjam {
            border-color: #7CDF64; /* Hijau Muda */
        }

        .card i {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .card h3 {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        /* Peta Asset Styles */
        .peta-asset {
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            height: 300px; 
        }
    </style>
</head>
<body>
    <div class="top-navbar">
        <div class="logo-container">
            <img src="path/to/your/logo.png" alt="Logo Perusahaan">
        </div>
        <div class="center-container">
            <div class="search-container">
                <input type="text" placeholder="Cari kebutuhan anda...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <div class="profile-container">
            <span>Satria Fatlan</span>
            <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Clipart.png" alt="Foto Profil">
        </div>
    </div>
    

    <div class="dashboard-container">
        <div class="sidebar">
            <ul class="menu">
                <li class="active">
                    <a href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-crown"></i>
                        <span>Master Asset</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-pause-circle"></i>
                        <span>Status Asset</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-people-carry"></i>
                        <span>Peminjaman Asset</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Master Lokasi</span>
                    </a>
                </li>
            </ul>

            <div class="logout-container">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>

        <div class="content">
            <h1>Dashboard</h1>

            <div class="card-container">
                <div class="card total-asset">
                    <i class="fas fa-box"></i>
                    <h3>21</h3>
                    <p>Total Asset</p>
                </div>
                <div class="card pertambahan-asset">
                    <i class="fas fa-chart-line"></i>
                    <h3>1</h3>
                    <p>Pertambahan Asset</p>
                </div>
                <div class="card siap-dipinjam">
                    <i class="fas fa-check-circle"></i>
                    <h3>11/21</h3>
                    <p>Asset Siap Dipinjam</p>
                </div>
            </div>

            <h2>Peta Asset</h2>
            <div class="peta-asset">
                </div>
        </div>
    </div>
</body>
</html>