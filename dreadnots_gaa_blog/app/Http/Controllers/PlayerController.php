<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
{
    $players = Player::paginate(10); // Paginate players, 10 per page
    return view('players.index', compact('players'));
}

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'position' => 'required',
            'goals' => 'required|numeric',
            'points' => 'required|numeric',
            'turnovers' => 'required|numeric',
            'possessions_lost' => 'required|numeric',
            'possessions_won' => 'required|numeric',
        ]);

        Player::create([
            'name' => $request->name,
            'age' => $request->age,
            'position' => $request->position,
            'goals' => $request->goals,
            'points' => $request->points,
            'turnovers' => $request->turnovers,
            'possessions_lost' => $request->possessions_lost,
            'possessions_won' => $request->possessions_won,
            'user_id' => $request->user_id,  // Assuming user_id is passed in the request
        ]);

        return redirect()->route('players.index');
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'position' => 'required',
            'goals' => 'required|numeric',
            'points' => 'required|numeric',
            'turnovers' => 'required|numeric',
            'possessions_lost' => 'required|numeric',
            'possessions_won' => 'required|numeric',
        ]);

        $player->update([
            'name' => $request->name,
            'age' => $request->age,
            'position' => $request->position,
            'goals' => $request->goals,
            'points' => $request->points,
            'turnovers' => $request->turnovers,
            'possessions_lost' => $request->possessions_lost,
            'possessions_won' => $request->possessions_won,
        ]);

        return redirect()->route('players.index');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
