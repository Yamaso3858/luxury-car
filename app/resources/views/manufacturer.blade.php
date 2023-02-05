<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メーカー登録</title>
</head>
<body>
  <h1>メーカー登録</h1>
  <form action="{{ route('manufacturers.store') }}" method="post">
    @csrf
    <div>
      <label for="url" style="width: 5rem; display: inline-block;">URL</label>
      <input type="text" name="url">
    </div>
    <div>
      <label for="code" style="width: 5rem; display: inline-block;">コード</label>
      <input type="text" name="code">
    </div>
    <div>
      <label for="name" style="width: 5rem; display: inline-block;">名前</label>
      <input type="text" name="name">
    </div>
    <button type="submit">登録</button>
  </form>
  @foreach($manufacturers as $manufacturer)
  <div>
    <div>
      <h2>NAME:{{ $manufacturer->name }}</h2>
      <p>URL:<a target="_blank" href="{{ $manufacturer->url }}">ホームページ</a></p>
      <p>CODE:{{ $manufacturer->code }}</p>
      <form action="{{ route('manufacturers.destroy', $manufacturer) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">削除</button>
      </form>
    </div>
  </div>
  @endforeach
</body>
</html>