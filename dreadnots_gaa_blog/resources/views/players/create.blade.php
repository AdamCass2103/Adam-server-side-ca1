<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Create Player</title>
</head>
<body>
    <h1>Create New Player</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="position">Position</label>
        <input type="text" name="position" id="position" required>
        <br>
        <label for="age">Age</label>
        <input type="text" name="age" id="age" required>
        <br>
        <button type="submit">Save Player</button>
    </form>
</body>
</html>
