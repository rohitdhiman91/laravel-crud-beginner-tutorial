<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}" required>
        <textarea name="body" required>{{ $post->body }}</textarea>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('posts.index') }}">← Back to All Posts</a>
</body>
</html>
