<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>فرم ثبت نام</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
    font-family sans-serif;
  }
  
  h1 {
    text-align center;
  }
  
  form {
    width 400px;
    margin 0 auto;
    padding 20px;
    border 1px solid #ccc;
  }
  
  label {
    display block;
    margin-bottom 10px;
  }
  
  input {
    width 100%;
    padding 10px;
    border 1px solid #ccc;
  }
  
  input[type=submit] {
    background-color #000;
    color #fff;
    padding 10px 20px;
    border none;
    cursor pointer;
  }
  
  input[type=submit]hover {
    background-color #00aaff;
  }
  
  </style>
</head>
<body>
<h1>فرم ثبت نام</h1>

<form action="process.php" method="post">

  <label for="username">نام کاربری:</label>
  <input type="text" name="username" id="username">

  <label for="name">نام:</label>
  <input type="text" name="name" id="name">

  <label for="family">نام خانوادگی:</label>
  <input type="text" name="family" id="family">

  <label for="email">ایمیل:</label>
  <input type="email" name="email" id="email">

  <label for="password">رمز عبور:</label>
  <input type="password" name="password" id="password">

  <label for="password_confirm">تکرار رمز عبور:</label>
  <input type="password" name="password_confirm" id="password_confirm">

  <input type="submit" value="ثبت نام">

</form>

</body>
</html>