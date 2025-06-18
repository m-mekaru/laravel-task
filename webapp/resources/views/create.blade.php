<!DOCTYPE html>
<html>
<head>
    <title>新規投稿作成</title>
</head>
<body>
    <h1>新規投稿作成</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label for="title">タイトル</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="content">内容</label><br>
        <textarea id="content" name="content" rows="5"></textarea><br><br>

        <button type="submit">登録する</button>
    </form>

    <br>
    <a href="{{ route('posts.index') }}">投稿一覧へ戻る</a>
</body>
</html>
