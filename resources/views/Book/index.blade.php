<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Perpustakaan UNESA</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0f172a;
      color: #f1f5f9;
      min-height: 100vh;
    }

    .navbar {
      background-color: #0f172a;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #1e293b;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      font-weight: 600;
      font-size: 20px;
      color: #f8fafc;
    }

    .navbar-logo img {
      height: 40px;
      width: 40px;
      object-fit: contain;
    }

    .navbar-menu {
      display: flex;
      gap: 24px;
    }

    .navbar-menu a {
      text-decoration: none;
      color: #cbd5e1;
      font-weight: 500;
      padding: 8px 16px;
      border-radius: 20px;
      transition: background-color 0.3s, color 0.3s;
    }

    .navbar-menu a:hover {
      background-color: #1e293b;
      color: #f43f5e;
    }

    .hero {
      padding: 60px 40px;
      text-align: center;
      background: linear-gradient(135deg, #0f172a, #1e293b);
      color: white;
      position: relative;
    }

    .logo.floating {
      position: absolute;
      left: 40px;
      bottom: 0;
      height: 180px;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .container {
      padding: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .book-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 24px;
      padding: 20px;
    }

    .book-card {
      background: linear-gradient(145deg, #1e293b, #0f172a);
      border-radius: 16px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 10px 25px rgba(255, 255, 255, 0.03);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 1px solid #1e293b;
      cursor: pointer;
    }

    .book-card:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 20px 40px rgba(244, 63, 94, 0.25);
    }

    .book-card img {
      width: 100%;
      max-width: 140px;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 15px;
      background-color: #1e293b;
      box-shadow: 0 4px 10px rgba(255, 255, 255, 0.05);
    }

    .book-card p {
      font-size: 0.9rem;
      color: #e2e8f0;
      margin: 0;
    }

    footer {
      text-align: center;
      padding: 30px;
      color: #94a3b8;
      background: #0f172a;
      margin-top: 50px;
      border-top: 1px solid #1e293b;
    }

    @media screen and (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
      }

      .navbar-menu {
        flex-direction: column;
        width: 100%;
      }

      .navbar-menu a {
        padding-left: 0;
      }
    }
  </style>
</head>
<body>
<header class="navbar">
  <a href="/" class="navbar-logo">
  <img src="{{ asset('storage/book_images/logounesa.png') }}" alt="Logo">
    <span>Perpustakaan UNESA</span>
  </a>
  <nav class="navbar-menu">
    <a href="{{ route('book.create') }}">Tambah Buku</a>
    <a href="{{ route('peminjam.index') }}">Peminjam</a>
    <a href="{{ route('pegawai.index') }}">Pegawai</a>
    <a href="{{ route('rakbuku.index') }}">Rak Buku</a>
  </nav>
</header>

<section class="hero">
  <h2 style="font-size: 38px; font-weight: bold; margin-bottom: 10px;">
    Looking for a <span style="color: #f43f5e; font-style: italic;">particular book</span>?
  </h2>
  <p style="font-size: 16px; color: #cbd5e1;">Temukan berbagai buku dan sumber daya untuk mendukung studi dan penelitian Anda.</p>
  <img src="{{ asset('storage/book_images/logounesa.png') }}" alt="Girl Left" class="logo floating" />
 
</section>

<div class="container">
  <div class="book-container">
    @foreach ($books as $book)
      <div class="book-card">
        <img src="{{ asset('storage/' . $book->book_image) }}" alt="{{ $book->title }}" />
        <p><strong>{{ $book->title }}</strong></p>
        <p>{{ $book->author }}</p>
      </div>
    @endforeach
  </div>
</div>

<footer>
  <p>© 2025 Perpustakaan UNESA</p>
</footer>
</body>
</html>
