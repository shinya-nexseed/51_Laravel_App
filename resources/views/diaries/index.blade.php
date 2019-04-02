<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>日記</h1>
    <a href="{{ route('diary.create') }}" class="btn btn-primary">新規投稿</a>
    @foreach ($diaries as $diary)
        <div class="m-4 p-4 border border-primary">
            {{ $diary['title'] }} : {{ $diary['created_at'] }}
        </div>
    @endforeach
</body>
</html>