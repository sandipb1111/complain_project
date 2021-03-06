<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ url('css/registration.css') }}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Register Here</title>
</head>
<body>
<form action="" method="post" class="form">
    <div class="form-header">
        <h1 class="form-title">Create a new Account</h1>
        <div class="social-icons">
            <div class="single-icon facebook"></div>
            <div class="single-icon google"></div>
            <div class="single-icon twitter"></div>

        </div>
    </div>

    <div class="line">OR</div>
    <div class="placeholder-container valid__theme">
        <input type="text" name="username" id="" class="input-element" placeholder=" " autocomplete="off">
        <label for="username" class="placeholder">Username</label>
        <!-- Additional details -->
        <span class="material-symbols-outlined valid__icons"> done </span>
    </div>
    <div class="placeholder-container invalid__theme">
        <input type="email" name="email" id="" class="input-element" placeholder=" " autocomplete="off">
        <label for="email" class="placeholder">Email</label>
        <span class="material-symbols-outlined valid__icons"> close </span>
    </div>
    <span class="error-msg">Not a valid email !</span>

    <div class="placeholder-container">
        <input type="password" name="password" id="" class="input-element" placeholder=" ">
        <label for="password" class="placeholder">Password</label>
    </div>

    <div class="placeholder-container">
        <input type="password" name="password" id="" class="input-element" placeholder=" ">
        <label for="password" class="placeholder">Confirm password</label>
    </div>

    <div class="form-submit">
        <input type="submit" value="Sign up" class="btn login-btn">
    </div>

    <div class="links">
        <span>Already have an account?</span>
        <a href="{{ route('auth.login') }}" rel="noopener noreferrer">-Log In</a>

    </div>
</form>

</body>
</html>
