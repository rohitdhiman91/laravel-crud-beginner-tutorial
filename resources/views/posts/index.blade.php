<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/style.css">
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">+ Create New</a>
    <ul>
    @foreach($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong> - 
            <a href="{{ route('posts.show', $post) }}">View</a>
        </li>
    @endforeach
    </ul>
</body>
</html>
