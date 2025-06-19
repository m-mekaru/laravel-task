<!DOCTYPE html>
<html>
<head>
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>

    <a href="{{ route('posts.create') }}">新規投稿</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                <p>{{ $post->content }}</p>

                <form action="{{ route('posts.edit', $post->id) }}" method="GET" style="display:inline;">
                    <button type="submit">編集</button>
                </form>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>