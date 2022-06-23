<?php

/*  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);
  $pass_confirm = filter_var(trim($_POST['pass_confirm']),
  FILTER_SANITIZE_STRING);*/

/*  if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
  {
    echo "Недопустимая длинна логина";
    exit();
  }else if(mb_strlen($name) < 3 || mb_strlen($name) > 50)
  {
    echo "Недопустимая длинна имени";
    exit();
  }else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 16)
  {
    echo "Недопустимая длинна пароля(от 3 до 16 символов)";
    exit();
  }

 if($pass === $pass_confirm)
  {

  } else
  {
    $_SESSION['msg'] = 'Пароли не совпадают';
    header('Location:../Reg.php');
  }


  $pass = md5($pass."isdgfiuh124563");
  //$pass_confirm = md5($pass_confirm."isdgfiuh124563");

  $mysql = new mysqli('127.0.0.1', 'root', 'root', 'register-bd');
  $mysql->query("INSERT INTO `users`(`login`, `pass`, `name`)
  VALUES('$login', '$pass', '$name')");

  $mysql->close();
  header('Location: Vxod.php')*/



  session_start();
  require_once 'connect.php';
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $pass_confirm = $_POST['pass_confirm'];
  $name = $_POST['name'];


  $check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

  if (mysqli_num_rows($check_login) > 0) {
      $response = [
          "status" => false,
          "type" => 1,
          "message" => "Такой логин уже существует",
          "fields" => ['login']
      ];

      echo json_encode($response);
      die();
  }

  $error_fields = [];

  if ($login === '') {
      $error_fields[] = 'login';
  }

  if ($pass === '') {
      $error_fields[] = 'pass';
  }

  if ($name === '') {
      $error_fields[] = 'name';
  }


  if ($pass_confirm === '') {
      $error_fields[] = 'pass_confirm';
  }

  if (!empty($error_fields)) {
      $response = [
          "status" => false,
          "type" => 1,
          "message" => "Проверьте правильность полей",
          "fields" => $error_fields
      ];

      echo json_encode($response);

      die();
  }

  if ($pass === $pass_confirm) {


      $pass = md5($pass);

      mysqli_query($connect, "INSERT INTO `users` (`login`, `pass`, `name`)
      VALUES ('$login','$pass', '$name')");

      $response = [
          "status" => true,
          "message" => "Регистрация прошла успешно!",
      ];
      echo json_encode($response);


  } else {
      $response = [
          "status" => false,
          "message" => "Пароли не совпадают",
      ];
      echo json_encode($response);
  }


?>
