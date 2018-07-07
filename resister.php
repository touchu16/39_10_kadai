
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<div class="col-xs-6 col-xs-offset-3">
<form method="post" action="resister_act.php">
    <h1>会員登録フォーム</h1>
    <div class="form-group">
    <input type="text" class="form-control" name="name" placeholder="ユーザー名" required />
  </div>
  <div class="form-group">
    <input type="email"  class="form-control" name="lid" placeholder="メールアドレス" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="lpw" placeholder="パスワード" required />
  </div>
   
  <button type="submit" class="btn btn-default" name="signup">会員登録する</button>
  <a href="login2.php">ログインはこちら</a>
</form>




</body>