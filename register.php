<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/sample2.css">
</head>
<body>
 <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check">
      </div>
    <form name="form1" method="post" action="register_act.php">
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input" name="name" placeholder="Username"/>
        </div>
        <div class="login__row">
          <svg class="login__icon mail svg-icon" viewBox="0 0 20 20">
            <path d="M0,8 0,20 20,20 20,8 0,8z M0,8 10,14 20,8 " />
          </svg>
          <input type="email" class="login__input" name="lid" placeholder="email"/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input" name="lpw" placeholder="Password"/>
        </div>
        <button type="button" class="login__submit">Sign up</button>
        <p class="login__signup">Have your account? &nbsp;<a href="sample.php">Sign in</a></p>
      </div>
      </form>
    </div>