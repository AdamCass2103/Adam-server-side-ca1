<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dreadnots GAA Blog</title>
</head>
<body>
    <h1>Dreadnots GAA Blog</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>