<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jagad Statistik</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <header>
    <img src="{{ asset('img/navbar.png') }}" alt="Logo BPS" style="height: 60px;">
    <nav style="display: flex; gap: 20px; align-items: center;">
      <a href="{{ route('tentang') }}" class="tentang">Tentang</a>
      <a href="https://wa.me/6282170003510" target="_blank" class="chat">Chat CS</a>
      {{-- Dropdown Layanan --}}
      <div class="dropdown">
        <a href="#" class="layanan">Layanan ▾</a>
        <div class="dropdown-content">
          <a href="https://example.com/layanan1" target="_blank">Konsultasi</a>
          <a href="https://example.com/layanan2" target="_blank">Pencarian Data</a>
          <a href="https://example.com/layanan3" target="_blank">Rekomendasi Statistik</a>
        </div>
      </div>
      <a href="{{ route('login.landing') }}" class="login">LOGIN</a>
    </nav>
  </header>
  
  <style>
    nav a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      padding: 10px;
      position: relative;
    }
  
    .dropdown {
      position: relative;
      display: inline-block;
    }
  
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 180px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
      z-index: 1;
      border-radius: 6px;
      top: 38px;
      left: 0;
    }
  
    .dropdown-content a {
      color: #333;
      padding: 10px 14px;
      text-decoration: none;
      display: block;
      font-size: 14px;
    }
  
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
  
    .dropdown:hover .dropdown-content {
      display: block;
    }
  
    .layanan::after {
      content: '';
      margin-left: 4px;
    }
  </style>  
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <img src="{{ asset('img/jagad.png') }}" alt="Logo BPS" class="hero-logo" />
      <div class="hero-text">
        <h1 class="hero-title">Platform<br>Pelayanan<br>Data Terpadu</h1>
        <p class="hero-desc gradient-text">
          Website ini dirancang untuk memudahkan akses pelayanan data bagi siapa saja  mulai dari pelajar, instansi atau organisasi, hingga masyarakat umum. Dengan antarmuka yang ramah pengguna, pengunjung dapat menemukan, mengunduh, dan menganalisis data secara cepat dan akurat.
        </p>
      </div>
    </div>
  </section>
  
  <section class="menu-section">
    <h2>Silakan pilih menu sesuai dengan kebutuhan Anda :</h2>
  
    <div class="menu-cards">
      <div class="menu-card pss">
        <img src="{{ asset('img/tas.png') }}" alt="PSS Icon" class="card-icon" />
        <h3>PSS</h3>
        <p>Temukan informasi statistik yang relevan untuk kebutuhan pribadi dan umum</p>
      </div>
      <div class="menu-card pst">
        <img src="{{ asset('img/orang.png') }}" alt="PST Icon" class="card-icon" />
        <h3>PST</h3>
        <p>Dapatkan data resmi untuk perencanaan dan pengambilan kebijakan yang lebih akurat</p>
      </div>
      <div class="menu-card pojok">
        <img src="{{ asset('img/toga.png') }}" alt="Pojok Statistik Icon" class="card-icon" />
        <h3>POJOK STATISTIK</h3>
        <p>Akses data dan statistik untuk mendukung penelitian dan tugas akademik Anda</p>
      </div>
    </div>
  
    <!-- Tambahin bagian koleksi di bawah card menu -->
    <div class="container">
  
      <!-- Koleksi Digital -->
      <h2 class="section-title">Koleksi Digital</h2>
      <div class="search-container">
        <input type="text" placeholder="Cari koleksi..." />
        <button type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>      
      <div class="koleksi-grid">
        <img src="img/koleksi1.jpg" alt="Koleksi 1" />
        <img src="img/koleksi2.jpg" alt="Koleksi 2" />
        <img src="img/koleksi3.jpg" alt="Koleksi 3" />
      </div>
  
      <!-- Koleksi E-Book -->
      <h2 class="section-title">Koleksi E-Book</h2>
      <div class="koleksi-grid">
        <img src="img/ebook1.jpg" alt="E-Book 1" />
        <img src="img/ebook2.jpg" alt="E-Book 2" />
        <img src="img/ebook3.jpg" alt="E-Book 3" />
      </div>
  
    </div>
  </section>
  

  <footer>
    <div class="footer-top">
      <img src="{{ asset('img/bawah.png') }}" alt="Logo BPS" />
    </div>
    <div class="footer-columns">
      <div>
        <h4>Tentang BPS</h4>
        <p>Informasi umum</p>
        <p>Visi & Misi</p>
        <p>Tugas & Fungsi</p>
      </div>
      <div>
        <h4>Tentang Jagad Statistik</h4>
        <p>Pelayanan Statistik</p>
        <p>Standar Pelayanan</p>
      </div>
      <div>
        <h4>Website</h4>
        <p>Hallo PST</p>
        <p>BPS Kab Banyuwangi</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 1rem">© 2025 BPS Kabupaten Banyuwangi</p>
  </footer>

</body>

</html>
