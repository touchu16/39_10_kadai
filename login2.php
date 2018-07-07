<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ログイン</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>


<body>
<div class="col-xs-6 col-xs-offset-3">
<form name="form1" method="post" action="login_act2.php">
  <h1>ログインフォーム</h1>
  <div class="form-group">
    <input type="text"  class="form-control" name="lid" placeholder="ID" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="lpw" placeholder="パスワード" required />
  </div>
  <button type="submit" class="btn btn-default" value="login">ログインする</button>
  <a href="resister.php">会員登録はこちら</a>
</form>

</div>
</body>
</html>