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
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            投稿者
            <select name="author_id">
                <option value="">選択してください</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                        {{ $author->author_name }}
                    </option>
                @endforeach
            </select>
            @error('author_id')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            本文
            <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea>
            @error('content')
                <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" value="登録">
    </form>
</body>
</html>