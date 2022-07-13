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

<div class="container">
    <!-- main moto sectoin -->
    <section class="main">
        <div class="left__container">
            <h1 class="our__moto">Speak your heart out..</h1>
            <p class="msg">Tell world what you have faced. Do not hesitate....</p>

            <a href="{{route('auth.complain')}}"><button type="submit" class="btn complaint-btn">FILE A COMPLAINT</button></a>
        </div>
        <div class="right__img__container">
        </div>
    </section>

    <section class="trending">

        <h2>Trending</h2>

        <div class="trending__container">
            <!-- Individual complaint box -->
            @if($LoggedUserInfo)

                @foreach($info as $data )
                    @if($count==3)
                        @break
                    @endif



            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">{{$data['full_name']}}</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">

                    <span class="trending__category">{{$data['title']}}</span>
                    <div class="trending__complaint">{{Str::limit($data["content"],10,$end='...')}}</div>

                </div>

                <div class="trending__cta">
                    <a href="{{route('admin.post',$data['id'])}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>
                    @php
                        $count++;
@endphp



                @endforeach


                @else

@foreach($info as $data)
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">{{$data['title']}}</span>
                    <div class="trending__complaint">{{Str::limit($data['content'],0,$end='Please login to see full content...')}}</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>
            @endforeach
            @endif
            <!--
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Class Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>

            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been leakage from last month. Whole area is ...</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>
                <div class="trending__item">
                    <div class="trending__profile">
                        <div class="img__container">
                            <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                        </div>
                        <div class="user__info">
                            <h3 class="user__name">Anonymous</h3>
                            <span class="pub__date">2022-12-02</span>
                        </div>
                    </div>

                    <div class="trending__content">
                        <span class="trending__category">Class Room</span>
                        <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                    </div>

                    <div class="trending__cta">
                        <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                    </div>
                </div>


                <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Class Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>

            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Class Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>



        </div>
    </section> -->

    <section class="our-service">
        <div class="img__container">
            <img src="{{url('/img/ourService.png')}}" alt="a mobile phone">
        </div>

        <div class="right__content">
            <h1>We are here to Help</h1>
            <p class="listing">We help you on making a difference</p>
            <p class="listing">We help to create an impact</p>
            <p class="listing">We might help to draw an attention of concerned authorities </p>
        </div>
    </section>

    <!-- LATEST COMPLAINTS SECTION -->
    <section class="trending">
        <h2>Latest Complains</h2>
        <div class="trending__container">

            @if($LoggedUserInfo)
                @foreach($info as $data)

            <!-- Individual complaint box -->
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">{{$data['full_name']}}</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">{{$data['title']}}</span>
                    <div class="trending__complaint">{{Str::limit($data['content'],10,$end='...')}}</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('admin.post',$data['id'])}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>


            @endforeach

            @else
            <!-- Individual complaint box -->
                @foreach($info as $data)
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">{{$data['title']}}</span>
                    <div class="trending__complaint ">{{Str::limit($data['content'],0,$end='  Please login to see full content...')}}</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>
                @endforeach
            @endif
            <!--
            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Class Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>

                <div class="trending__item">
                    <div class="trending__profile">
                        <div class="img__container">
                            <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                        </div>
                        <div class="user__info">
                            <h3 class="user__name">Anonymous</h3>
                            <span class="pub__date">2022-12-02</span>
                        </div>
                    </div>

                    <div class="trending__content">
                        <span class="trending__category">Class Room</span>
                        <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                    </div>

                    <div class="trending__cta">
                        <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                    </div>
                </div>

            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Wash Room</span>
                    <div class="trending__complaint">There has been leakage from last month. Whole area is ...</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>

            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Anonymous</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>

            <div class="trending__item">
                <div class="trending__profile">
                    <div class="img__container">
                        <img src="{{url('img/default_profile.png')}}" alt="a good looking man" srcset="">
                    </div>
                    <div class="user__info">
                        <h3 class="user__name">Anonymous</h3>
                        <span class="pub__date">2022-12-02</span>
                    </div>
                </div>

                <div class="trending__content">
                    <span class="trending__category">Class Room</span>
                    <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
                </div>

                <div class="trending__cta">
                    <a href="{{route('auth.post')}}"> <button type="submit">Read Full Review</button> </a>
                </div>
            </div>
            -->
</div>

    </section>
</div>


                <!-- footer -->
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

