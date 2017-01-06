<!DOCTYPE html>
<html>
    <head>
        <title>jNotes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/login.css" type="text/css"/>
        <link rel="stylesheet" href="/css/bootstrap.css" type="text/css"/>
    </head>
    <body>
        <script src="https://use.typekit.net/ayg4pcz.js"></script>
        <script>try {
                Typekit.load({async: true});
            } catch (e) {
            }</script>


        <div class="container">
            <h1 class="welcome text-center">jNotes</h1>
            <div class="card card-container">
                <h2 class='login_title text-center'>Вход</h2>
                <hr>

                <form class="form-signin" method="post" action="/login.php">
                    <span id="reauth-email" class="reauth-email"></span>
                    <p class="input_title">Логин</p>
                    <input type="text" id="inputEmail" name="login" class="login_box" placeholder="Логин" required autofocus>
                    <p class="input_title">Пароль</p>
                    <input type="password" id="inputPassword" name="password" class="login_box" placeholder="******" required>
                    <div id="remember" class="checkbox">
                        <label>

                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary" name="do_login" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </body>
</html>