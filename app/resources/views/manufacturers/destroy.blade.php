<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @csrf
  <h1>削除完了しました</h1>
  <a href="{{ route('manufacturers.create') }}">戻る</a>
</body>
</html>