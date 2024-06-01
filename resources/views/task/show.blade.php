<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Detail Tugas</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $task['name'] }}</h5>
                <p class="card-text"><strong>Deadline:</strong> {{ $task['deadline'] }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $task['status'] }}</p>
                <p class="card-text"><strong>Deskripsi:</strong> {{ $task['description'] }}</p>
                <a href="/tasks" class="btn btn-warning">Kembali ke Daftar Tugas</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
