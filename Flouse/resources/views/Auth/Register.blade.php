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
                    <label class="input-label name">Full Name (Optional)</label>
                </div>
                <div class="input-box email">
                    <input required="" type="text" name="email-text" class="input-text email">
                    <label class="input-label email">Email</label>
                    <p class="error-msg">Invalid email (example: yourname@email.com)</p>
                </div>
                <div class="input-box pass">
                    <input required="" type="password" name="pass-text" class="input-text pass">
                    <label class="input-label pass">Password</label>
                    <p class="error-msg">Must consist of minumum 8 alphanum</p>
                </div>
                <div class="input-box re-pass">
                    <input required="" type="password" name="re-pass-text" class="input-text re-pass">
                    <label class="input-label re-pass">Re-enter Password</label>
                    <p class="error-msg">Passwords do not match</p>
                </div>
            </div>
            <div class="submit">
                <a href="/"><button class="submit-button">Explore Now</button></a>
            </div>
            <div class="continue-with">
                <p class="continue-text">or continue with</p>
            </div>
            <div class="login-with">
                <button class="logwith-button google">
                    <img src="../Image/SignIn/Google.svg" alt="google">
                </button>
                <button class="logwith-button facebook">
                    <img src="../Image/SignIn/Facebook.svg" alt="facebook">
                </button>
                <button class="logwith-button twitter">
                    <img src="../Image/SignIn/Twitter.svg" alt="twitter">
                </button>
                <button class="logwith-button microsoft">
                    <img src="../Image/SignIn/Microsoft.svg" alt="microsoft">
                </button>
            </div>
            <div class="terms-create-account">
                <p>
                    By continuing, you agree to Flouse’s
                    <a href="/about/terms-and-conditions" class="linked-text">Terms and Conditions</a>
                </p>
                <hr class="seperate-line">
                <p>
                    Already have an account?
                    <a href="/login" class="linked-text">Login here</a>
                </p>
            </div>
        </div>
        <p class="copyright">© 2024 Flouse</p>
    </div>
</body>
</html>