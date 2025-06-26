<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.edit', $post) }}">✏️ Edit</a>
    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">🗑️ Delete</button>
    </form>
    <br><a href="{{ route('posts.index') }}">← Back to All Posts</a>
</body>
</html>
