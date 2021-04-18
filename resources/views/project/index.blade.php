<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    
    <link rel="stylesheet" href="onlineshop.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--TweenMax animation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
</head>

<body>
    <div class="navigation">
        <!--header part started-->
        <div class="logo">
            <img src="img/logotype.png" alt="logotype" class="logotype">
        </div>

        <div class="nav-menu">
            <ul class="menu">
                <li class="nav-item"><a href="#" class="nav-link">Мужчины</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Женщины</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Парни</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Девушки</a></li>
            </ul>
        </div>
        <div class="search-block">
            <div class="search">
                <input type="text" class="search-form" placeholder="Поиск">
                <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
            </div>
        </div>
        <div class="personal-item">
            <div class="auth">
                <div class="login"><a href="#" class="auth-link signIn"><i class="fas fa-user-circle"></i>Войти</a>
                </div>
                <div class="car"><a href=" {{ route('welcome') }} " class="auth-link"><i class="fas fa-shopping-cart"></i>Корзина</a></div>
            </div>
        </div>
    </div>
    <!--header part ended-->

    <div class="sign-block">
        <div class="sign">
            <a href="#" class="exit"><i class="fas fa-times"></i></a>
            <h4 class="sign-head">Вход</h4>

            <div class="input-data">
                <input type="text" placeholder="Введите логин" id="">
            </div>
            <div class="input-data">
                <input type="password" placeholder="Введите пароль" id="">
            </div>
            <div class="input-btn">
                <input type="submit" value="Войти" id="">
            </div>

            <p class="notReg">Еще не зарегистрированы?</p>
            <div class="input-btn notReg-btn">
                <input type="submit" class="signUp_Button" value="Зарегистрироваться">
            </div>

        </div>
    </div>

    <div class="signUp-block">
        <div class="signUp">
            <a href="#" class="exit"><i class="fas fa-times"></i></a>
            <h4 class="sign-head">Регистрация</h4>

            <div class="input-data">
                <input type="text" placeholder="Придумайте логин" id="">
            </div>
            <div class="input-data">
                <input type="password" placeholder="Придумайте пароль" id="">
                <input type="password" placeholder="Подтвердите пароль" id="">
            </div>
            <div class="input-btn">
                <input type="submit" value="Зарегистрироваться">
            </div>

        </div>
    </div>

    <!--mobile version-->
    <div class="mobile-navigation">
        <a href="#" class="burger-link">
            <span></span>
        </a>
        <div class="mobile-nav">
            <ul class="mobile-menu">
                <li class="menu-item">
                    <a href="#" class="menu-link signInMobile">Войти</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Мужчины</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Женщины</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Парни</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">Девушки</a>
                </li>
            </ul>
        </div>
    </div>
    <!--mobile version ended-->

    <div class="main-information">
        <div class="text-inform">
            <h1>The new <strong>990</strong></h1>
            <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <div class="inform-link">
                <div class="inform-btn read">for project back</div>
                <div class="inform-btn shop">Купить сейчас</div>
            </div>
        </div>
        <div class="photo-model">
            <img src="img/model.png" alt="model">
        </div>
    </div>

    <div class="social">
        <div class="find">
            <a href="#" class="findStore"><i class="fas fa-map-marker-alt"></i>Найти магазин</a>
        </div>
        <div class="social-menu">
            <h4 class="connect">оставайся на связи</h4>

            <ul class="social-icon">
                <li><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-vk"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-google"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="maps-block">
        <div class="maps">
            <a href="#" class="exit exitMaps"><i class="fas fa-times"></i></a>
            <iframe class="mapStore"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23260.622517713142!2d76.90676453862898!3d43.21834368965263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f02727fa5fd%3A0xaf3983a493e72211!2sNew%20Balance!5e0!3m2!1sru!2skz!4v1617625170025!5m2!1sru!2skz"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            /*TweenMax.from(".text-inform h1", 1, {
                delay: .4,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".tagline", 1, {
                delay: .7,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".inform-btn", 1, {
                delay: 1,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".photo-model", 1, {
                delay: .4,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".logo", 1, {
                delay: 1.8,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".menu", 1, {
                delay: 2.0,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".search-block", 1, {
                delay: 2.2,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".personal-item", 1, {
                delay: 2.4,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".find", 1, {
                delay: 2.6,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".connect", 1, {
                delay: 2.8,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".social-icon", 1, {
                delay: 3.0,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".burger-link", 1, {
                delay: 3,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });*/

            var link = $('.burger-link');
            var link_active = $('.burger-link_active');
            var navigation = $('.mobile-nav');
            var nav_active = $('.nav-active');
            
            var sign = $('.signIn');
            var signBlock = $('.sign-block');
            var signBlock_active = $('.sign-block_active');
            var exit = $('.exit');
            var signInMobile = $('.signInMobile');

            var signUp = $('.signUp_Button');
            var signUpBlock = $('.signUp-block');
            var signUpBlock_active = $('.signUp-block_active');   
            var signUpMobile = $('.signInMobile');
            

            var findStore = $('.findStore');
            var mapsBlock = $('.maps-block');
            var mapsBlock_active = ('.maps-block_active');


            link.click(function () {
                link.toggleClass('burger-link_active');
                navigation.toggleClass('nav-active');
            });

            link_active.click(function () {
                navigation.removeClass('nav-active');
            });
            //sign-block active
            sign.click(function () {
                signBlock.toggleClass('sign-block_active');
            });

            signInMobile.click(function () {
                signBlock.toggleClass('sign-block_active');
                navigation.removeClass('nav-active');
                link.removeClass('burger-link_active');
            });
            exit.click(function () {
                signBlock.removeClass('sign-block_active');
            });
           

            findStore.click(function () {
                mapsBlock.toggleClass('maps-block_active');
            });
            exit.click(function () {
                signBlock.removeClass('sign-block_active');
                mapsBlock.removeClass('maps-block_active');
            });
        
        });
    </script>

</body>

</html>