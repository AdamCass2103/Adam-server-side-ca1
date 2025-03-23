<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Assuming you have a style.css file -->
</head>
<body>
    <h1>All Players</h1>
    <a href="{{ route('players.create') }}">Create New Player</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Goals</th>
                <th>Points</th>
                <th>Turnovers</th>
                <th>Possessions Lost</th>
                <th>Possessions Won</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->goals }}</td>
                    <td>{{ $player->points }}</td>
                    <td>{{ $player->turnovers }}</td>
                    <td>{{ $player->possessions_lost }}</td>
                    <td>{{ $player->possessions_won }}</td>
                    <td>
                        <a href="{{ route('players.show', $player->id) }}">View</a> |
                        <a href="{{ route('players.edit', $player->id) }}">Edit</a> |
                        <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $players->links() }} <!-- Pagination -->
    </div>
</body>
</html>