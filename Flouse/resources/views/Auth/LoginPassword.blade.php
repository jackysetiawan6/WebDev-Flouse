<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../CSS/Public.css">
        <link rel="stylesheet" href="../CSS/Auth/Base.css">
        <link rel="stylesheet" href="../CSS/Auth/LoginPass.css">
        <title>Login</title>
</head>
<body>
    <div class="container">
        <img src="../Image/FlouseText.svg" alt="logo" class="image-modifier-logo">
        <div class="form">
            <div class="main-form">
                <h1 class="welcome-text">Enter your password</h1>
                <div class="input-text">
                    <!-- <input required="" type="text" name="text" class="input-text email"> -->
                    <p>ichsanilyasa13@gmail.com</p>
                    <a href="/login" class="linked-text">Edit</a>
                </div>
                <div class="input-box password">
                    <input required="" type="password" name="pass-text" class="input-text password">
                    <label class="input-label password">Password</label>
                </div>
                <div class="text-under">
                    <div class="remember-me">
                        <input type="checkbox" name="cbox-agree" class="checkbox-agree">
                        <label for="cbox-agree" class="cbox-label">Remember me in this device</label>
                    </div>
                    <a href="/login/password-reset" class="linked-text forgot">Forgot your password?</a>
                </div>
            </div>
            <div class="submit">
                <a href="/"><button class="submit-button">Sign In</button></a>
            </div>
        </div>
        <p class="copyright">© 2024 Flouse</p>
    </div>
</body>
</html>