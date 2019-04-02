<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <form action="/diaries/create" method="post">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="body">本文</label>
            <input type="text" class="form-control" name="body" id="body">
        </div>

        <div class="text-right">
            <button type="submit" class="btn btn-primary">投稿</button>
        </div>

    </form>
</body>
</html>





