<?php
include 'includes/auth.php';
include 'template/_header.php';

if (empty($_SESSION['login'])) {
    include 'template/formAuth.php';
} else {
?>

    <header>
        <h1>Главная</h1>
    </header>
    <p>Вы зашли</p>

<?php
}
include 'template/_footer.php';
?>
