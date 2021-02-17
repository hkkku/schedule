<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  />
  <!-- reset css link -->
  <link rel="stylesheet" href="/myschedule/css/reset.css" />
  <style>
    .authwrap{width: 100%; height: 100vh; background: #edf7f0; display: flex; justify-content: center; align-items: center;} 
    .authwrap .authForm input{width: 200px; height: 40px; border: 1px solid #12595b; outline: 0; padding: 5px;}
    .authwrap .authForm button{width: 100px; height: 40px; border: 1px solid #12595b; background: #12595b; color: #fff; text-align: center;}
  </style>
</head>

<body>
  <div class="authwrap">
    <form action="/myschedule/php/auth.php" name="authForm" class="authForm">
      <input type="password" placeholder="인증 코드를 입력해 주세요." name="authCode">
      <button type="submit"><i class="fa fa-arrow-right"> Enter</i></button>
    </form>
  </div>
</body>
</html>