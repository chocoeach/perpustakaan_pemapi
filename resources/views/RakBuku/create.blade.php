<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library of SMK TI - Tambah Rak</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            color: #f1f5f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            margin: 0;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            color: #f97316;
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: 600;
            margin-top: 10px;
        }
        input {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.2);
        }
        button {
            background: linear-gradient(135deg, #fb923c, #f97316);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: 0.3s;
        }
        button:hover {
            background: #FFD700;
            color: #2E4A7D;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Tambah Rak Buku 📚</h1>
        <form action="{{ route('rakbuku.store') }}" method="POST">
            @csrf
            <label for="kode_rak">Kode Rak</label>
            <input type="text" name="kode_rak" required>
            
            <label for="nama_rak">Nama Rak</label>
            <input type="text" name="nama_rak" required>
            
            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
