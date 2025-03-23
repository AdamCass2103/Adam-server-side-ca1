<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreadnots GAA Players</title>
</head>
<body>
    <h1>Dreadnots GAA Players</h1>
    <a href="{{ route('players.create') }}">Create New Player</a>

    <ul>
        @foreach ($players as $player)
            <li>
                <a href="{{ route('players.show', $player->id) }}">{{ $player->name }}</a>
                - Position: {{ $player->position }}
                - Goals: {{ $player->goals }}
                - Points: {{ $player->points }}
                - Turnovers: {{ $player->turnovers }}
                - Possessions Lost: {{ $player->possessions_lost }}
                - Possessions Won: {{ $player->possessions_won }}
                <a href="{{ route('players.edit', $player->id) }}">Edit</a>
                <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <!-- Pagination links -->
    <div>
        {{ $players->links() }}
    </div>
</body>
</html>