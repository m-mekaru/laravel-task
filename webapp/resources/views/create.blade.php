<!DOCTYPE html>
<html>
<head>
    <title>新規作成画面</title>
</head>
<body>
    <h1>新規作成画面</h1>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div>
        タイトル
        <input type="text" name="title">
    </div>


    <div>
        投稿者
        <select name="author_id" id="">
            <option value="">選択してください</option>
            @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->author_name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        本文
        <textarea name="content" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit">
</form>
</body>
</html>