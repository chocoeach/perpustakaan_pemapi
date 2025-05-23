<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pegawai</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F4F6FB;
            text-align: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            padding: 30px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: 700;
            color: #2E4A7D;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            display: block;
            text-align: left;
            margin: 10px 0 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            width: 100%;
            padding: 10px;
            color: white;
            background: #2E4A7D;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
            font-size: 16px;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #FFD700;
            color: #2E4A7D;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Pegawai</h1>
        <hr>
        <form action="{{ route('pegawai.update', $pegawais->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="nip">NIP</label>
            <input type="number" name="nip" value="{{ $pegawais->nip}}">

            <label for="nama">Nama</label>
            <input type="text" name="nama" value="{{ $pegawais->nama}}">

            <label for="jabatan">Pilih Jabatan</label>
            <select name="jabatan" id="jabatan">
                <option value="kepala" {{ $pegawais->jabatan == 'kepala' ? 'selected' : '' }}>Kepala</option>
                <option value="admin" {{ $pegawais->jabatan == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
