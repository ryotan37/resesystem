<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>トップページ</h1>

    @if (session('login_msg'))
    <div class="alert alert-success">
      {{ session('login_msg') }}
    </div>
    @endif

    @if (Auth::guard('customers')->check())
    <div>ユーザーID {{ Auth::guard('customers')->user()->userid }}でログイン中</div>
    @else
    <div>ログインしていません</div>
    @endif

    <ul>
      <li>ログイン状態: {{ Auth::check() }}</li>
      <li>管理者（User）ログイン状態: {{ Auth::guard('users')->check() }}</li>
      <li>会員（customers） ログイン状態: {{ Auth::guard('customers')->check() }}</li>
    </ul>

    <div>
      <a href="/admin/logout">ログアウト</a>
    </div>
  </div>
</body>
</html>