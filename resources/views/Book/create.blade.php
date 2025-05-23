<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah Buku - Perpustakaan UNESA</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Poppins', sans-serif; background-color: #0f172a; color: #f1f5f9; padding: 20px; min-height: 100vh; }
    
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

    .container {
      padding: 40px;
      max-width: 600px;
      margin: auto;
      background: linear-gradient(145deg, #1e293b, #0f172a);
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
    }

    h1 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 20px;
      color: #f43f5e;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: 600;
      margin-bottom: 10px;
      display: block;
      color: #e2e8f0;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #1e293b;
      background-color: #f8fafc;
      color: #1e293b;
    }

    input[type="file"] {
      padding: 0;
    }

    .button {
      background-color: #1d4ed8;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s;
      width: 100%;
    }

    .button:hover {
      background-color: #2563eb;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #94a3b8;
      background: #0f172a;
      margin-top: 50px;
      border-top: 1px solid #1e293b;
    }

  </style>
</head>
<body>

<header class="navbar">
    <a href="/" class="navbar-logo">
    <img src="{{ asset('storage/book_images/logounesa.png') }}" alt="Logo">
      <span>Perpustakaan UNESA</span>
    </a>
  </header>

  <div class="container">
    <h1>Tambah Buku Baru</h1>

    <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Judul Buku</label>
        <input type="text" id="title" name="title" required placeholder="Masukkan judul buku">
      </div>

      <div class="form-group">
        <label for="author">Nama Penulis</label>
        <input type="text" id="author" name="author" required placeholder="Masukkan nama penulis">
      </div>

      <div class="form-group">
        <label for="book_image">Gambar Buku</label>
        <input type="file" id="book_image" name="book_image" accept="image/*" required>
      </div>

      <button type="submit" class="button">Tambah Buku</button>
    </form>
  </div>

  <footer>
    <p>© 2025 Perpustakaan UNESA</p>
  </footer>

</body>
</html>
