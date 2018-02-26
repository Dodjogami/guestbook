<?php
include 'includes/auth.php';
include 'template/_header.php';

if (empty($_SESSION['login'])){
?>

    <header>
        <h1>Доступ запрещен!</h1>
    </header>
    <p>Авторизуйтесь, чтобы просматривать информацию на этой странице</p>

<?php
    die();
    include 'template/_footer.php';
} else {
?>

    <header>
        <h1>Заголовок страницы 2</h1>
    </header>
    <p>Вы зашли, поэтому можете видеть информацию на этой странице</p>

<?php
}
include 'template/_footer.php';
?>
