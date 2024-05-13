<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../CSS/Public.css">
        <link rel="stylesheet" href="../CSS/Auth/Base.css">
        <link rel="stylesheet" href="../CSS/Auth/Register.css">
        <title>Login</title>
</head>
<body>
    <div class="container">
        <img src="../Image/FlouseText.svg" alt="logo" class="image-modifier-logo">
        <div class="form">
            <div class="main-form">
                <h1 class="welcome-text">Create Account</h1>
                <div class="input-box name">
                    <input required="" type="text" name="name-text" class="input-text name">
                    <label class="input-label name">Full Name</label>
                </div>
                <div class="input-box email">
                    <input required="" type="text" name="email-text" class="input-text email">
                    <label class="input-label email">Email</label>
                </div>
                <div class="input-box pass">
                    <input required="" type="password" name="pass-text" class="input-text pass">
                    <label class="input-label pass">Password</label>
                </div>
                <div class="input-box re-pass">
                    <input required="" type="password" name="re-pass-text" class="input-text re-pass">
                    <label class="input-label re-pass">Re-enter Password</label>
                </div>
                <div class="text-under">
                    <div class="remember-me">
                        <input type="checkbox" name="cbox-agree" class="checkbox-agree">
                        <label for="cbox-agree" class="cbox-label">I agree to Flouse's
                            <a href="" class="linked-text terms">Terms and Conditions</a></label>
                            and
                            <a href="" class="linked-text privacy">Privacy Policy</a></label>
                    </div>
                </div>
            </div>
            <div class="submit">
                <a href="/home"><button class="submit-button">Sign In</button></a>
            </div>
        </div>
        <p class="copyright">© 2024 Flouse</p>
    </div>
</body>
</html>