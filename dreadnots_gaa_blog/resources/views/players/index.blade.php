<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Stats</title>
</head>
<body>
<h1>Dreadnots GAA Player Stats</h1>
<a href="{{ route('players.create') }}">Add New Player</a>

<ul>
    @foreach ($players as $player)
        <li>
            {{ $player->name }} | Age: {{ $player->age }} | Position: {{ $player->position }}
        </li>
    @endforeach
</ul>
</body>
</html>