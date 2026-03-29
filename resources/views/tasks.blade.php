<!DOCTYPE html>
<html>
<head>
    <title>Laravel Project1</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Tugas" required>
        <button type="submit">Simpan</button>
    </form>

    <hr>

    <h2>Daftar Data</h2>
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</body>
</html>