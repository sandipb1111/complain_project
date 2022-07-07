
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <title>Login</title>
</head>
<body>
<form action="{{ route('auth.check') }}" method="post" class="login-form">
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif
    @csrf
    <div class="form-header">
        <h1 class="form-title">Log In With</h1>
        <div class="social-icons">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg> -->
            <div class="single-icon facebook"></div>
            <div class="single-icon google"></div>
            <div class="single-icon twitter"></div>

        </div>
    </div>

    <div class="line">OR</div>
    <div class="placeholder-container">
        <input type="text" name="email"  class="input-element" placeholder=" " autocomplete="off">
        <label for="email" class="placeholder">Email</label>
        <span class="error-message">@error('email'){{$message}}@enderror</span>

    </div>

    <div class="placeholder-container">
        <input type="password" name="password"  class="input-element" placeholder=" ">
        <label for="password" class="placeholder">Password</label>
        <span class="error-message">@error('password'){{$message}}@enderror</span>

    </div>

    <div class="form-submit">
        <input type="submit" value="Login" class="btn login-btn">
    </div>

    <div class="links">
        <a href=" " >Forgot Password?</a>
        <a href="{{ route('auth.register') }}" >Create a new account</a>
    </div>
</form>

</body>
</html>
