<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/PageRegistration/css/styles.css">
  <title>Страница входа</title>
</head>
<body>
  <div class="main-image _ibg">
    <img src="PageRegistration/img/main.png" alt="main">
  </div>
  <div class="wrapper">
    <div class="logo">LOGO</div>
    <div class="text-container _container">
      <h1 class="text-container__title">Войти в аккаунт</h1>
        <div class="text-container__subtitle">Еще нет аккаунта? <a href="{{route('registration')}}" class="text-container__subtitle entrance">Зарегистрироваться</a></div>
    </div>
    <div class="form-fields _container">
        <form action="{{'login'}}" method="post">
      <div class="form-field form-field__email">
          <input type="email" placeholder="E-mail" name = 'Login'>
      </div>
        <div class="form-field form-field__password">
            <input type="password" placeholder="Пароль" name="Password">
        </div>
        </form>
      </div>
      <div class="form-buttons _container">
        <a class="form-button form-button__createacc">Войти</a>
        <div class="divider">или</div>
        <a href="#" class="form-button form-button__google"><img src="PageRegistration/img/01.svg" alt="google">Войти с помощью Google</a>
        <a href="#" class="form-button form-button__vk"><img src="PageRegistration/img/02.svg" alt="vk">Войти с помощью ВКонтакте</a>
      </div>
    </div>
  <!--<script src="/registration/js/script.js"></script>-->
</body>
</html>
