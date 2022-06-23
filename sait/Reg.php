
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Регистриция</title>
  <link rel="stylesheet" href="../CSS/Style4.css">
  <body>
    <header class = "header">
		  <div class="wrapper">
			  <div class="header_wrapper">
				  <div class="header_list">
            <a href="../Erosha.html" style="text-decoration: none; " class="back">Назад</a>

            <h1 class="register">
              Регистрация
            </h1>
				  </div>
			  </div>
		  </div>
	  </header>


    <main class="main">
      <div class="wrapper">
        <div class="form_fields">
          <form action="../php/check.php" class="form_field" method="post">
              <input type="text" class="text" id="name" name="name" placeholder="Никнейм"><br>
              <input type="text" class="text" id="login" name="login" placeholder="Почта"><br>
              <input type="password" class="text" id="pass" name="pass" placeholder="Пароль"><br>
              <input type="password" id="pass_confirm" name="pass_confirm" class="text"  placeholder="Повторите Пароль"><br>
              <button class="btn btn-success" type="submit">Зарегистрироваться</button>
              <p>Уже есть аккаунт?Нажмите на кнопку</p><a class="text_vxod" href="Vxod.php">Войти</a>
              <p class="msg none">Lorem ipsum dolor sit amet.</p>
          </form>
              <script src="../js/jquery-3.4.1.min.js"></script>
              <script src="../js/main.js"></script>
          </div>
    </main>

    <footer class="foter">
      <div class="wrapper">
        <nav class="footer_nav">
          <ul class="footer_2">
            <h4 class="fot_help">
              Сотрудничество:</br>
              Artem2003ar@mail.ru
            </h4>
            <h4>
              © 2022 Ероша. все права защищены!
            </h4>
          </ul>
        </nav>
      </div>
    </footer>
  </body>
</html>
