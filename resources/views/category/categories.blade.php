<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{url('css/homepage.css')}}">
    <link rel="stylesheet" href="{{url('css/categories.css')}}">
    <title>Categories | Wash Room</title>
</head>
<body>


<nav class="nav__container">
    <div class="nav__links">
        <a href="{{route('admin.homepage')}}" >home</a>
        <a href="{{route('auth.category')}}" class="active">categories</a>
        <a href="#">community</a>
    </div>

    <div class="nav__search">
        <div class="search__container">
            <input type="search" name="" id="search" placeholder="search">
            <span class="material-symbols-outlined"> search </span>
        </div>
        @if(!$LoggedUserInfo)
        <input type="submit" value="login" class="btn login-btn" >

        @endif
        @if($LoggedUserInfo)
        <div class="nav__profile">
            <div class="img__container">

                <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
            </div>

            <div class="tooltip__container hidden" id="tooltip">
                <a href="">Logout</a>
            </div>
        </div>
        @endif
        <!-- <span class="material-icons"> menu </span> -->
    </div>
</nav>

<div class="grid__container">
    <section class="categories__container">
        <div class="category__title">CATEGORY</div>

         <a href="#"class="category active__category">College</a>
        <a href="#"class="category">Hospital</a>
        <a href="#"class="category">Hotel</a>
        <a href="#"class="category">Movie Hall</a>
        <a href="#"class="category">Shopping centers</a>
        <a href="#"class="category">E-commerce / Offline Marts </a>
        </section>

    <!-- This is to adjust grid item  -->
    <div class="adjust"></div>
    <section class="categories__content__container">
        @if($LoggedUserInfo)

            @foreach($info as $category)
                @if($category["category_name"]=="College")

        <div class="trending__container">
            <!-- Individual complaint box -->
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">{{$category['full_name']}}</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">{{$category['title']}}</span>
                    <div class="trending__complaint">{{$category['content']}}</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
            @endif
            @endforeach

            @endif
            <!-- Individual complaint box -
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Sonam Lama</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been leakage from last month. Whole area is ...</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
             Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anvesha Giri</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
             Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Sonam Lama</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been leakage from last month. Whole area is ...</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
             Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Bibek Adhikari</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
             Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Abhi Kafle</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
             Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Ganesh Acharya</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
            Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Sonam Lama</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been leakage from last month. Whole area is ...</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
             Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Sunil Bista</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
            Individual complaint box
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Abhi Kafle</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <button type="submit">Read Full Review</button>
                </div>
            </div>
            -->
        </div>
    </section>


</div>

<!-- Footer -->
<footer class="footer__container">
    <div class="top__container">
        <div class="more__info">
            <h4 class="info__tilte">More About Us</h4>
            <p class="short__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus saepe ipsa nisi reiciendis nesciunt reprehenderit quo autem minus,
                ratione vitae quia facilis? Nulla sed deserunt voluptate delectus vel neque doloremque.
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

<!-- for logout tooltip -->
<script src="{{url('js/homepage.js')}}"></script>

</body>
</html>
