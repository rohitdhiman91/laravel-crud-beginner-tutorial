<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Title" required>
        <textarea name="body" placeholder="Body" required></textarea>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('posts.index') }}">← Back to All Posts</a>
</body>
</html>
