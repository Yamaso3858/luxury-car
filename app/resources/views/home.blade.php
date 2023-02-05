<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>luxury-car</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    nav {
      background-color: #181818;
      position: relative;
      z-index: 3;
      padding: 1.6rem 6rem;
      height: 94px;
      align-items: center;
      display: flex;
    }
    ul {
      height: fit-content;
      padding: 0;
      margin: 0;
      list-style: none;
      display: flex;
      color: white;
      gap: 2.6rem;
    }
    nav a {
      padding: 0.7rem;
      border-radius: 10px;
    }
    nav a:hover {
      background-color: #666666;
    }
  </style>
</head>
<body>
  <header class="">
    <nav>
      <ul>
        <li>
          <a href="/lamborghini">
            <span>ランボルギーニ</span>
          </a>
        </li>
        <li>
          <a href="/ferrari">
            <span>フェラーリ</span>
          </a>
        </li>
        <li>
          <a href="/mclaren">
            <span>マクラーレン</span>
          </a>
        </li>
        <li>
          <a href="/aston martin">
            <span>アストンマーチン</span>
          </a>
        </li>
        <li>
          <a href="/bentley">
            <span>ベントレー</span>
          </a>
        </li>
        <li>
          <a href="/rolls royce">
            <span>ロールス・ロイス</span>
          </a>
        </li>
        @foreach($manufacturers as $manufacturer)
        <li>
          <a href="/{{ $manufacturer->code }}">
            <span>{{ $manufacturer->name }}</span>
            
          </a>
        </li>
        @endforeach
      </ul>
    </nav>
  </header>
  @foreach($manufacturers as $manufacturer)
  <div>
    <div>
      <h2>NAME:{{ $manufacturer->name }}</h2>
      <p>URL:<a target="_blank" href="{{ $manufacturer->url }}">ホームページ</a></p>
      <p>CODE:{{ $manufacturer->code }}</p>
    </div>
  </div>
  @endforeach
</body>
</html>