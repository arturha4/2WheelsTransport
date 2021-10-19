<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/registration/css/styles.css">
  <title>Страница регистрации</title>
</head>
<body>
  <div class="main-image _ibg">
    <img src="registration/img/main.png" alt="main">
  </div>
  <div class="wrapper">
    <div class="logo">LOGO</div>
    <div class="text-container _container">
      <h1 class="text-container__title">Создать аккаунт</h1>
      <div class="text-container__subtitle">Уже есть аккаунт? <a href="#" class="text-container__subtitle entrance">Войти<a></div>
    </div>
    <div class="form-fields _container">
      <div class="form-field form-field__email">
        <form action="">
          <input type="email" placeholder="E-mail" name = 'email'>
        </form>   
      </div>
      <div class="form-field__fullname">
        <div class="form-field form-field__name">
          <form action="">
            <input type="text" placeholder="Имя">
          </form>
        </div>
        <div class="form-field form-field__lastname">
          <form action="">
            <input type="text" placeholder="Фамилия">
          </form>  
        </div>
      </div>      
        <div class="form-field form-field__password">
          <form action="">
            <input type="password" placeholder="Пароль">
          </form>         
        </div>
      </div>
      <div class="form-buttons _container">
        <a class="form-button form-button__createacc">Создать аккаунт</a>
        <div class="divider">или</div>
        <a href="#" class="form-button form-button__google"><img src="registration/img/01.svg" alt="google">Войти с помощью Google</a>
        <a href="#" class="form-button form-button__vk"><img src="registration/img/02.svg" alt="vk">Войти с помощью ВКонтакте</a>
      </div>
    </div>
  <!--<script src="/registration/js/script.js"></script>-->
</body>
</html>
