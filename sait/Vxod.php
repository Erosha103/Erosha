<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../CSS/Style2.css">
</head>
<body>
    <header class = "header">
		<div class="wrapper">
			<div class="header_wrapper">
				<div class="header_list">

                    <a href="../Erosha.html" style="text-decoration: none; " class="back">Назад</a>

                    <h1 class="register">
                        Авторизация
                    </h1>
				</div>
			</div>
		</div>
	</header>
    <main class="main">
        <div class="wrapper">
            <div class="form_fields">

                <form >
                    <input type="text" id="login" name="login" class="text" required placeholder="Логин">
                    <input type="password" id="pass" name="pass" class="text" required placeholder="Пароль">


                <div class="form_btn">
                    <button type="submit" class="btn">
                        Войти
                    </button>
                    <p> Ещё нет аккунта ? Нажмите на кнопку </p><a class="text_vxod" href="Reg.php"><br></br>Зарегистрироваться</a>
                    <p class="msg none">Lorem ipsum dolor sit amet.</p>
                    <script src="../js/jquery-3.4.1.min.js"></script>
                    <script src="../js/vxod.js"></script>
                </div>
            </div>
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
