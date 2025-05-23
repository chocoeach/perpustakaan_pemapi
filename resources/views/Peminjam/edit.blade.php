<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Peminjam</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- CSS Styling -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F4F6FB;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            font-weight: 700;
            color: #2E4A7D;
            margin-bottom: 10px;
        }

        .form-container {
            background: white;
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            font-weight: 500;
            margin-top: 10px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            margin-top: 15px;
            padding: 10px 15px;
            border: none;
            background: #2E4A7D;
            color: white;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #FFD700;
            color: #2E4A7D;
        }
    </style>
</head>
<body>
    <h1>Edit Data Peminjam</h1>
    <div class="form-container">
        <form action="{{ route('peminjam.update', $peminjams->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label for="nisn">NISN</label>
            <input type="text" name="nisn" value="{{ $peminjams->nisn }}" required>
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{ $peminjams->nama }}" required>
            
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" value="{{ $peminjams->kelas }}" required>
            
            <label for="no_hp">No HP</label>
            <input type="number" name="no_hp" value="{{ $peminjams->no_hp }}" required>
            
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
