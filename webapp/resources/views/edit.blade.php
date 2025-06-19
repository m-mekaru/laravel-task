<!DOCTYPE html>
<html>
<head>
    <title>編集画面</title>
</head>
<body>
    <h1>編集画面</h1>
    <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            タイトル
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div>
            投稿者
            <select name="author_id">
                <option value="">選択してください</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $author->id == $post->author_id ? 'selected' : '' }}>
                        {{ $author->author_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            本文
            <textarea name="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
        </div>

        <input type="submit" value="更新">
    </form>
</body>
</html>
