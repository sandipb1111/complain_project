<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
    <link rel="stylesheet" href="{{url('css/homepage.css')}}">
    <title>homepage | complaint page</title>
    <style>

        h1 {
            padding: 0px;
            margin: 17px;
            margin-left: 500px;
        }
        p.hello {
            margin-left: 500px;
        }
        a.hell {
            margin-left: 500px;
        }
    </style>
</head>
<body>


<nav class="nav__container">
    <div class="nav__links">
        <a href="{{route('admin.homepage')}}" class="active">home</a>
        <a href="{{route('auth.category')}}">categories</a>
        <a href="{{route('auth.community')}}">community</a>
    </div>

    <div class="nav__search">
        <div class="search__container">
            <input type="search" name="" id="search" placeholder="search">
            <span class="material-symbols-outlined"> search </span>
        </div>
        @if(!$LoggedUserInfo)
            <a class="btn login-btn" href="{{route('auth.login')}}"><input type="button" value="login" class="btn login-btn" ></a>
        @endif
        @if($LoggedUserInfo)
            <div class="nav__profile">

                <div class="img__container">

                    <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                </div>



                <div class="tooltip__container hidden" id="tooltip">
                    <a href="{{ route('auth.logout') }}">Logout</a>
                </div>
            </div>
        @endif
    </div>
</nav>








<h1>Work on process !!!</h1>


<h1>Work on process</h1>
<p class ="hello">To have an idea about this page please head to follwing link </p>
<a class = "hell " href="https://www.figma.com/file/GdOqyE6k8vg17Vx0OGRoFp/edu-fair?node-id=0%3A1">Figma</a>


<footer class="footer__container">
    <div class="top__container">
        <div class="more__info">
            <h4 class="info__tilte">More About Us</h4>
            <p class="short__desc">We intend to provide a platform for any individual who wants to make a difference and create a safe and friendly environment.
            </p>
            <div class="social__container">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
        </div>
        <div class="footer__links">
            <h4 class="link__tilte">Useful Links</h4>
            <a href="">F.A.Q</a>
            <a href="">Cookies Policy</a>
            <a href="">Terms of Service</a>
            <a href="">Support</a>
        </div>
        <div class="footer__links">
            <h4 class="link__tilte">Useful Links</h4>
            <a href="">F.A.Q</a>
            <a href="">Cookies Policy</a>
            <a href="">Terms of Service</a>
            <a href="">Support</a>
        </div>
        <div class="newsletter">
            <h4 class="newsletter__tilte">Newsletter</h4>
            <input type="email" name="email" id="email" placeholder="Enter your email here">
            <button type="submit">Subscribe</button>
        </div>
    </div>

    <div class="copyright__info">
        &copy; Copyright <script>let date = new Date(); document.write(`${date.getFullYear()}`)</script>
    </div>

</footer>

<script src="{{url('js/homepage.js')}}"></script>

</body>
</html>

