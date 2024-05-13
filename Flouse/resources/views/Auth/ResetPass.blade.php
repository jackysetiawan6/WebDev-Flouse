<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../CSS/Public.css">
        <link rel="stylesheet" href="../CSS/Auth/Base.css">
        <link rel="stylesheet" href="../CSS/Auth/ResetPass.css">
        <title>Login</title>
</head>
<body>
    <div class="container">
        <img src="../Image/FlouseText.svg" alt="logo" class="image-modifier-logo">
        <div class="form">
            <div class="main-form">
                <h1 class="welcome-text">Reset your password</h1>
                <p>Let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                <div class="input-box email">
                    <input required="" type="text" name="email-text" class="input-text email">
                    <label class="input-label email">Email</label>
                    <p class="error-msg">We can’t find any user with that email address</p>
                    <p class="success-msg">We’ve emailed your password reset link </p>
                </div>
            </div>
            <div class="submit">
                <a href=""><button class="submit-button">Request reset link</button></a>
                <a href="/login" class="linked-text back-login">Back to login</a>
            </div>
        </div>
        <p class="copyright">© 2024 Flouse</p>
    </div>
</body>
</html>