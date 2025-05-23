<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Library of UNIVERSITAS SURABAYA</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            color: #f1f5f9;
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        h1 {
            font-size: 36px;
            font-weight: 700;
            color: #f97316;
            margin-bottom: 30px;
        }
        form {
            background: rgba(255, 255, 255, 0.03);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            text-align: left;
            width: 100%;
            max-width: 400px;
        }
        label {
            font-weight: 600;
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #f1f5f9;
        }
        button {
            margin-top: 15px;
            background: linear-gradient(135deg, #fb923c, #f97316);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }
        button:hover {
            background: #FFD700;
            color: #2E4A7D;
        }
    </style>
</head>
<body>
    <h1>📚 Welcome to Library of UNESA 📚</h1>
    <form action="{{ route('peminjam.store') }}" method="POST">
        @csrf
        <label for="nisn">NIM</label>
        <input type="text" name="nisn" required>
        <label for="nama">Nama</label>
        <input type="text" name="nama" required>
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" required>
        <label for="no_hp">No HP</label>
        <input type="number" name="no_hp" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
