<?php
session_start();

include 'db.php';

$salt = 'fgoptnyeghcknv';

if (isset($_POST['submit'])) {
    if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($dbh)) {
        $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING); //фильтрация переменной, фильр уладяет теги
        $password = crypt(filter_var($_POST['password'], FILTER_SANITIZE_STRING), $salt); //crypt возвращает хешированную строку

        $stmt = $dbh->prepare('SELECT id,login,password FROM users WHERE login = ? LIMIT 1');
        $stmt->bindParam(1, $login, PDO::PARAM_STR);
        $stmt->execute();

        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        $rowsPassword = crypt(filter_var($rows['password'], FILTER_SANITIZE_STRING), $salt); //хеширование пароля из бд, т.к. там хранится 'голый пароль'
        if(!empty($rows)) {
            if(hash_equals($password, $rowsPassword)) { //сравнение строк, нечувствительное к атакам по времени
                $_SESSION['login'] = $_POST['login'];
                header('Location: ../index.php');
            } else {
                echo '<h3 style="color:red;">Неправильный логин или пароль!</h3>';
            }
        } else {
            echo '<h3 style="color:red;">Такого пользователя не существует</h3>';
        }
    }
}

if (!empty($_SESSION['login'])) {
    echo 'Привет, '.$_SESSION['login'].'!<br/>';
    echo '<a href="includes/logout.php">Выход</a>';
}
