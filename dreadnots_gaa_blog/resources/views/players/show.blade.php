@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dreadnots GAA Player Profiles</h1>

    <img src="{{ asset('images/dreadnots-badge.png') }}" alt="Dreadnots Badge" width="150">

    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Goals</th>
                <th>Assists</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->goals }}</td>
                    <td>{{ $player->assists }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection