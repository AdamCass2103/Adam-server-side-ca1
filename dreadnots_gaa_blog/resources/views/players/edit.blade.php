<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit Player</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Player</h1>
    <form action="{{ route('players.update', $player->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $player->name }}" required>

        <label for="position">Position</label>
        <input type="text" name="position" id="position" value="{{ $player->position }}" required>

        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="{{ $player->age }}" required>

        <label for="goals">Goals</label>
        <input type="number" name="goals" id="goals" value="{{ $player->goals }}" required>

        <label for="points">Points</label>
        <input type="number" name="points" id="points" value="{{ $player->points }}" required>

        <label for="turnovers">Turnovers</label>
        <input type="number" name="turnovers" id="turnovers" value="{{ $player->turnovers }}" required>

        <label for="possessions_won">Possessions Won</label>
        <input type="number" name="possessions_won" id="possessions_won" value="{{ $player->possessions_won }}" required>

        <label for="possessions_lost">Possessions Lost</label>
        <input type="number" name="possessions_lost" id="possessions_lost" value="{{ $player->possessions_lost }}" required>

        <label for="kickouts_won">Kickouts Won</label>
        <input type="number" name="kickouts_won" id="kickouts_won" value="{{ $player->kickouts_won }}" required>

        <label for="kickouts_lost">Kickouts Lost</label>
        <input type="number" name="kickouts_lost" id="kickouts_lost" value="{{ $player->kickouts_lost }}" required>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
</html>
