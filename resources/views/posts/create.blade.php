<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p> <!-- -->
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf <!-- Keamanan perlindungan dari CSRF[cite: 43] -->
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red">{{ $message }}</p> <!--[cite: 43] -->
            @enderror
        </div>

        <div>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
            @error('content')
                <p style="color: red">{{ $message }}</p> <!--[cite: 43] -->
            @enderror
        </div>

        <button type="submit">Create Post</button> <!--[cite: 43] -->
    </form>
</body>
</html>