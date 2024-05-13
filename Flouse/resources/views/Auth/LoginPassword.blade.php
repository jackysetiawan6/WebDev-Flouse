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
                    <input required="" type="password" class="input-text password" id="pass-text">
                    <svg class="show-hide-pass" id="pass-toggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="#262b36" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
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
    <script src="../JS/Auth/ShowHidePass.js"></script>
</body>
</html>