<header>
    <h1>Авторизация</h1>
</header>
<div id="authForm">
    <form action="includes/auth.php" method="post">
        <p>
            <input type="text" name="login" value="Логин" onBlur="if(this.value == '')this.value = 'Логин'" onFocus="if(this.value == 'Логин')this.value = ''" required>
        </p>
        <p>
            <input type="password" name="password"  value="Пароль" onBlur="if(this.value == '')this.value = 'Пароль'" onFocus="if(this.value == 'Пароль')this.value = ''" required>
        </p>
        <p>
            <input type="submit" name="submit" value="ВОЙТИ">
        </p>
    </form>
</div>
