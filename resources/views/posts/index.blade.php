<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/posts/index.css">
  <title>Boad一覧</title>
</head>
<body>
  <header>
    <a href="/" class="title">Boad</a>
    <input class="search">
    <button class="search-btn">検索</button>
    <div class="header-menu accbox">
      <label for="label1">メニュー</label>
      <input type="checkbox" id="label1" class="accordion cssacc"/>
        <ul id="accshow">
          <li><a href="#" class="user menu-btn">自分の投稿一覧</a></li>
          <li> <a href="#" class="post-new menu-btn">新規投稿</a></li>
          <li><a href="#" class="end menu-btn">ログアウト</a></li>
        </ul>
    </div>
  </header>
</body>
</html>

  <!--ラベル1-->
    <label for="label1">クリックして表示1</label>
    <input type="checkbox" id="label1" class="cssacc" />
    <div class="accshow">
      <!--ここに隠す中身-->
      <p>
        こんにちは1
      </p>
    </div> 

    .accbox {
      margin: 2em 0;
      padding: 0;
      max-width: 400px;
  }
  
  
  .accbox label {
      display: block;
      margin: 1.5px 0;
      padding : 11px 12px;
      color :#2f8fcf;
      font-weight: bold;
      background :#a4cbf3;
      cursor :pointer;
      transition: all 0.5s;
  }
  
  .accbox label:hover {
     
  }
  
  .accbox input {
      
  }
  
  .accbox .accshow {
      
  }
  
  .cssacc:checked + .accshow {
      
  }