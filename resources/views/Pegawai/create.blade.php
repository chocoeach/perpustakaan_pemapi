<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pegawai</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #0f172a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #f1f5f9;
            margin: 0;
        }
        .container {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.1);
            width: 350px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #f43f5e;
            margin-bottom: 20px;
        }
        label {
            display: block;
            text-align: left;
            margin-top: 10px;
            font-weight: 600;
            color: #e2e8f0;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #1e293b;
            border-radius: 10px;
            background-color: #f8fafc;
            color: #1e293b;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #1d4ed8;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #2563eb;
            color: #f1f5f9;
        }
       
    </style>
</head>
<body>

    <div class="container">
        <h1>Tambah Pegawai</h1>
        <hr>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <label for="nip">NIP</label>
            <input type="text" name="nip" required>
            
            <label for="nama">Nama</label>
            <input type="text" name="nama" required>
            
            <label for="jabatan">Pilih jabatan anda:</label>
            <select name="jabatan" id="jabatan" required>
                <option value="kepala">Kepala</option>
                <option value="admin">Admin</option>
            </select> 
            
            <button type="submit">Simpan</button>
        </form>
    </div>

   

</body>
</html>
