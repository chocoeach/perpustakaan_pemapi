<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Data Rak Buku - Perpustakaan UNESA</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #0f0f0f;
      color: #f1f5f9;
      margin: 0;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 40px;
      background: #111827;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .navbar-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      color: #fff;
      font-size: 20px;
      font-weight: 600;
    }

    .navbar-menu a {
      color: #e0e0e0;
      text-decoration: none;
      padding: 8px 18px;
      margin-left: 10px;
      border-radius: 9999px;
      background: linear-gradient(135deg, #f97316, #f43f5e);
      transition: transform 0.2s ease;
      font-weight: 500;
    }

    .navbar-menu a:hover {
      transform: scale(1.05);
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      background: rgba(255, 255, 255, 0.03);
      border-radius: 20px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(255, 98, 0, 0.2);
    }

    h1 {
      font-size: 32px;
      font-weight: 700;
      color: #f97316;
      text-align: center;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255, 255, 255, 0.02);
      border-radius: 12px;
      overflow: hidden;
    }

    th, td {
      padding: 16px;
      text-align: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    th {
      background-color: #1f2937;
      color: #f97316;
      text-transform: uppercase;
    }

    tr:hover {
      background-color: rgba(255, 255, 255, 0.04);
    }

    .btn, .btn-delete {
      padding: 8px 14px;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.3s;
    }

    .btn {
      background: linear-gradient(135deg, #fb923c, #f97316);
      color: #fff;
    }

    .btn:hover {
      transform: scale(1.05);
    }

    .btn-delete {
      background: linear-gradient(135deg, #ef4444, #dc2626);
      color: #fff;
    }

    .btn-delete:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    <a href="#" class="navbar-logo">📚 Perpustakaan UNESA</a>
    <div class="navbar-menu">
      <a href="{{ route('book.index') }}">📘 Buku</a>
      <a href="{{ route('rakbuku.create') }}">➕ Tambah Rak</a>
    </div>
  </header>

  <!-- Konten -->
  <div class="container">
    <h1>📚 Data Rak Buku Perpustakaan UNESA 📚</h1>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>No Rak</th>
          <th>Nama Rak</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rakbukus as $rakbuku)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $rakbuku->kode_rak }}</td>
            <td>{{ $rakbuku->nama_rak }}</td>
            <td>
              <a href="{{ route('rakbuku.edit', $rakbuku->id) }}" class="btn">✏️ Edit</a>
              <form action="{{ route('rakbuku.destroy', $rakbuku->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-delete">🗑 Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>
