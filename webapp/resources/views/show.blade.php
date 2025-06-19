<!DOCTYPE html>
<html>
<head>
    <title>投稿編集</title>
</head>
<body>
    <h1>投稿編集</h1>

    <form action="{{ route('posts.update',$post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">タイトル</label><br>
        <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" required><br><br>

        <label for="content">内容</label><br>
        <textarea id="content" name="content" rows="5">{{ old('content', $post->content) }}</textarea><br><br>

        <button type="submit">更新する</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">投稿一覧に戻る</a>
</body>
</html>
