<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="{{ url('css/homepage.css') }}">
    <title>Homepage | Complaint Page</title>
</head>
<body>

<nav class="nav__container">
    <div class="nav__links">
        <a href="#" class="active">Home</a>
        <a href="#">Categories</a>
        <a href="#">Community</a>
    </div>

    <div class="nav__search">
        <div class="search__container">
            <input type="search" name="" id="search" placeholder="search">
            <span class="material-symbols-outlined"> search </span>
        </div>
        <input type="button" value="Login" class="btn login-btn" >
    </div>
</nav>

<!-- Main Moto Sectoin -->
<section class="main">
    <div class="left__container">
        <h1 class="our__moto">This is what we intend to do..</h1>
        <p class="msg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sit illo cupiditate, quae voluptas eius autem nostrum optio ex
            Illo, aliquam? Et reprehenderit illum
            Ex, deleniti tempora ab beatae neque </p>
    </div>
    <div class="right__img__container">
    </div>
</section>

<section class="trending">

    <h2>Trending</h2>

    <div class="trending__container">
        <!-- Individual complaint box -->
        <div class="trending__item">
            <div class="trending__profile">
                <div class="img__container">
                    <img src="{{ url('img/rating001-01 1.png') }}" alt="a good looking man" srcset="">
                </div>
                <div class="user__info">
                    <h3 class="user__name">Sandeep Basnet</h3>
                    <span class="pub__date">2022-12-02</span>
                </div>
            </div>

            <div class="trending__content">
                <span class="trending__category">Canteen</span>
                <div class="trending__complaint">K ho yesto jpt</div>
            </div>

            <div class="trending__cta">
                <button type="submit">Read Full Review</button>
            </div>
        </div>
        <!-- Individual complaint box -->
        <div class="trending__item">
            <div class="trending__profile">
                <div class="img__container">
                    <img src="./img/default_profile.png" alt="a good looking man" srcset="">
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
        <!-- Individual complaint box -->
        <div class="trending__item">
            <div class="trending__profile">
                <div class="img__container">
                    <img src="./img/default_profile.png" alt="a good looking man" srcset="">
                </div>
                <div class="user__info">
                    <h3 class="user__name">Abhi Kafle</h3>
                    <span class="pub__date">2022-12-02</span>
                </div>
            </div>

            <div class="trending__content">
                <span class="trending__category">Class Room</span>
                <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
            </div>

            <div class="trending__cta">
                <button type="submit">Read Full Review</button>
            </div>
        </div>
        <!-- Individual complaint box -->
        <div class="trending__item">
            <div class="trending__profile">
                <div class="img__container">
                    <img src="./img/default_profile.png" alt="a good looking man" srcset="">
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
        <!-- Individual complaint box -->
        <div class="trending__item">
            <div class="trending__profile">
                <div class="img__container">
                    <img src="./img/default_profile.png" alt="a good looking man" srcset="">
                </div>
                <div class="user__info">
                    <h3 class="user__name">Abhi Kafle</h3>
                    <span class="pub__date">2022-12-02</span>
                </div>
            </div>

            <div class="trending__content">
                <span class="trending__category">Class Room</span>
                <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
            </div>

            <div class="trending__cta">
                <button type="submit">Read Full Review</button>
            </div>
        </div>
        <!-- Individual complaint box -->
        <div class="trending__item">
            <div class="trending__profile">
                <div class="img__container">
                    <img src="./img/default_profile.png" alt="a good looking man" srcset="">
                </div>
                <div class="user__info">
                    <h3 class="user__name">Abhi Kafle</h3>
                    <span class="pub__date">2022-12-02</span>
                </div>
            </div>

            <div class="trending__content">
                <span class="trending__category">Class Room</span>
                <div class="trending__complaint">There has been problem related to AC. Instead of cold air AC has been giving stream of cold water..</div>
            </div>

            <div class="trending__cta">
                <button type="submit">Read Full Review</button>
            </div>
        </div>
    </div>
</section>

</body>
</html>
