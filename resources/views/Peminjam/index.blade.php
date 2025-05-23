<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjam - Perpustakaan UNESA</title>
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

        .navbar-logo img {
            height: 40px;
            width: 40px;
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
            font-size: 28px;
            color: #f8fafc;
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

        footer {
            text-align: center;
            padding: 30px;
            color: #64748b;
            margin-top: 60px;
            background: #111827;
        }
    </style>
</head>
<body>

<header class="navbar">
    <a href="/" class="navbar-logo">
    <img src="{{ asset('storage/book_images/logounesa.png') }}" alt="Logo">
        <span>Perpustakaan UNESA</span>
    </a>
    <div class="navbar-menu">
        <a href="{{ route('book.index') }}">📘 Buku</a>
        <a href="{{ route('peminjam.create') }}">➕ Tambah Peminjam</a>
        <a href="{{ route('pegawai.index') }}">Pegawai</a>
        <a href="{{ route('rakbuku.index') }}">Rak Buku</a>
    </div>
</header>

<div class="container">
    <h1>📍 Data Peminjam</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>No HP</th>
                <th>action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjams as $peminjam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peminjam->nisn }}</td>
                    <td>{{ $peminjam->nama }}</td>
                    <td>{{ $peminjam->kelas }}</td>
                    <td>{{ $peminjam->no_hp }}</td>
                    <td>
                        <a href="{{ route('peminjam.edit', $peminjam->id) }}" class="btn">✏️ Edit</a>
                        <form action="{{ route('peminjam.destroy', $peminjam->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">🗑 Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<footer>
    <p>© 2025 Perpustakaan UNESA. All rights reserved.</p>
</footer>

</body>
</html>
