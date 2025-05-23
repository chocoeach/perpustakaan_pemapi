<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Rak Buku</title>
    <style>
        body {
            background: linear-gradient(to right, #fce4ec, #f8bbd0);
            font-family: 'Poppins', sans-serif;
            color: #5a5a5a;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 6px 15px rgba(0,0,0,0.15);
            width: 90%;
            max-width: 500px;
            margin: auto;
        }
        h1 {
            color: #c2185b;
            font-size: 24px;
            font-weight: bold;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #c2185b;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-sizing: border-box;
        }
        button {
            background: #f48fb1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
        }
        button:hover {
            background: #d81b60;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Rak Buku</h1>
        <form action="{{ route('rakbuku.update', $rakbukus->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="kode_rak">Kode Rak</label>
            <input type="text" name="kode_rak" value="{{ $rakbukus->kode_rak}}" required>
            <label for="nama_rak">Nama Rak</label>
            <input type="text" name="nama_rak" value="{{ $rakbukus->nama_rak}}" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
