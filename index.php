<!doctype html>
<html lang="ru">

<head>
    <title>Кино в Иннополисе</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shotrcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


</head>

<body>
    <div class="first-screen__background">
        <div class="container">
            <header>
                <div class="first-screen__logo">
                    <a href="http://university.innopolis.ru/" title="Сайт Иннополис" target="_blank"><img alt="Логотип"
                            src='images/logo.png'></a>
                </div>
                <div class="first-screen__menu">
                    <div class="first-screen__nav-wrap">
                        <div class="first-screen__menu-burger">
                            <span></span>
                        </div>
                        <nav class="navigation">
                            <ul>
                                <li><a class="change-color" href="#order" title="Заказать билет">Заказать билет</a></li>
                                <li><a class="change-color" href="#advantages" title="Преимущества">Преимущества</a>
                                </li>
                                <li><a class="change-color" href="#films" title="Фильмы">Фильмы</a></li>
                                <li><a class="change-color" href="#contacts" title="Контакты">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="first-screen__city">
                    <p><span class="city-text">Ваш город: </span><a id="city-name" href="#">-Не определен-</a>
                    </p>
                </div>

            </header>

            <main>

                <div class="first-screen__main">
                    <h1 class="first-screen__main-row1">Закажите билет в кино</h1>
                    <h2 class="first-screen__main-row2">Всем покупателям подарок!</h2>
                </div>
        </div>
    </div>

    <section class="container second-screen">
        <div class="welcome">
            <h2 class="welcome__head">Добро пожаловать!</h2>
            <p class="simple-text welcome__text">Cumque dolorem eum harum laudantium libero molestias saepe<br>
                soluta?
                Facere minima optio perferendis quibusdam quis<br> reprehenderit, saepe!
                Debitis enim optio saepe voluptatibus.</p>
            <p class="simple-text welcome__text2">Cumque dolorem eum harum laudantium libero molestias saepe<br>
                soluta?
                Facere minima optio perferendis quibusdam quis<br> reprehenderit, saepe!
                Debitis enim optio saepe voluptatibus.</p>
        </div>

        <div id="advantages" class="why-us">
            <h2>Почему мы?</h2>
        </div>

        <div class="advantage-block">

            <div class="advantage">
                <div class="advantage__img-wrap scale">
                    <img class="img-screen" src="images/b2_icon_1.jpg" alt="Экраны">
                </div>
                <h3 class="advantage-head1">Большие экраны</h3>
                <p class="simple-text advantage-text1">Meet the Community you’ve always talked with,<br>
                    in real life! This meetup will be all about authors<br> engaging each other with interesting<br>
                    coversation</p>
            </div>

            <div class="advantage">
                <div class="advantage__img-wrap scale">
                    <img class="img-sound" src="images/b2_icon_2.jpg" alt="Звук">
                </div>
                <h3 class="advantage-head2">Объемный звук</h3>
                <p class="simple-text advantage-text2">In this meetup you will get to know the<br> marketplaces
                    better, because
                    that’s why were all<br> here for right? Learn a few tips and tricks from<br>
                    experienced authors from all over the country.</p>
            </div>

            <div class="advantage">
                <div class="advantage__img-wrap scale">
                    <img class="img-chair" src="images/b2_icon_3.jpg" alt="Кресла">
                </div>
                <h3 class="advantage-head3">Удобные кресла</h3>
                <p class="simple-text advantage-text3">Gather round fellow authors!<br> Hear the stories of success
                    from your
                    favorite<br> authors and learn how they we able to tackle<br> their
                    problems and become successful.</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="movie-list">
            <h2 id="order" class="movie-list__header">Выберите фильм</h2>
            <div class="container">
                <div class="movie-list__table-wrap">
                    <table class="movie-list__table">
                        <thead>
                            <tr>
                                <th class="movie-list__head1"><a href="#">Начало сеанса</a></th>
                                <th class="movie-list__head2"><a href="#">Название фильма</a></th>
                                <th class="movie-list__head3"><a href="#">Жанр</a></th>
                                <th class="movie-list__head4"></th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                        </tbody>
                    </table>
                    <template id="svgPlus"><svg class="plus-icon" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 33 33">
                            <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                                d="M16.505,32.994 C7.393,32.994 0.005,25.607 0.005,16.494 C0.005,7.381 7.393,-0.006 16.505,-0.006 C25.618,-0.006 33.005,7.381 33.005,16.494 C33.005,25.607 25.618,32.994 16.505,32.994 ZM24.214,14.591 L18.356,14.631 L18.356,8.796 L13.958,8.777 L13.958,14.637 L8.083,14.637 L8.083,19.074 L13.958,19.074 L13.958,24.889 L18.336,24.889 L18.307,19.074 L24.231,19.074 L24.214,14.591 Z" />
                        </svg></template>
                </div>
                <div class="simple-text movie-list__text">
                    <p>Please keep in mind that the timings may differ according
                        to the flow of the event. The even is actually day long and
                        we do plan to finish<br> it within our set time but it
                        doesn’t have to be, if we all agree to hangour for some
                        time more, what harm could it do? :)</p>
                </div>
            </div>
        </div>
    </section>

    <div class="present-block__background">
        <section class="container">
            <div class="present-block">
                <div class="present-block__img">
                    <img src="images/podarok.png" alt="Подарок">
                </div>
                <h2 class="present-block__head">Подарок каждому!</h2>
                <div class="simple-text present-block__text">
                    <p>Are you an Elite author in the Envato Marketplaces? If so we are proud of you!
                        We want to give our thanks in<br> achieving great success in the marketplace and we want
                        to make known to the people of our country that<br> you are amazing! Our
                        Elite gifting program includes giving you special merchandize from our community
                        and<br> also promote your works in our community.</p>
                    <p>All you have to do is contact us by clicking the button here and then its just
                        going to the event, saying<br> something motivational and taking that swag while
                        looking amazing infront of thousands of other<br> community members.</p>
                    <p>*Be advised, we will only give you Elite thank you swag for each level of elite
                        you cross.<br>That means if you do not cross to the next elite level before the
                        next event, you cannot claim your prizes.</p>
                </div>
                <div class="present-block__button">
                    <button id="getPresent" class="button">Получить подарок</button>
                </div>
            </div>

        </section>
    </div>
    <div class="container">
        <div class="films-grid__head">
            <h2>Фильмы</h2>
        </div>
        <div class="simple-text films-grid__text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci alias, animi,
                commodi eius ipsum,<br> laudantium neque nihil omnis perferendis sed sequi tempore!
                Ad ea esse ex inventore repudiandae, suscipit!</p>
        </div>

        <section id="films" class="films-grid owl-carousel">
        </section>
    </div>
    <div class="map">
        <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae0b8bb26d8161ee25b4d39dae4dd084e125fd5f1087a7f44254d5855796e21f7&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true">
        </script>
    </div>
    </div>

    </main>

    <footer id="contacts" class="footer">
        <div class="links">
            <a class="footer-link" href="https://fb.com" title="facebook" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 49 49">
                    <defs>
                        <filter filterUnits="userSpaceOnUse" id="Filter_1" x="0px" y="0px" width="48px" height="48px">
                            <feOffset in="SourceAlpha" dx="0" dy="1" />
                            <feGaussianBlur result="blurOut" stdDeviation="1" />
                            <feFlood flood-color="rgb(0, 0, 0)" result="floodOut" />
                            <feComposite operator="atop" in="floodOut" in2="blurOut" />
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.25" />
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>

                    </defs>
                    <g filter="url(#Filter_1)">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M23.500,44.999 C11.073,44.999 1.000,34.926 1.000,22.500 C1.000,10.073 11.073,-0.000 23.500,-0.000 C35.926,-0.000 46.000,10.073 46.000,22.500 C46.000,34.926 35.926,44.999 23.500,44.999 ZM24.044,10.170 C18.962,10.170 20.120,16.199 19.951,18.397 C19.951,18.414 16.844,18.397 16.844,18.397 L16.844,22.488 L19.942,22.488 L19.942,36.884 L25.089,36.884 L25.078,22.488 L28.526,22.488 L29.202,18.375 L25.089,18.420 C25.089,15.500 24.863,14.312 26.570,14.312 C26.723,14.312 29.219,14.306 29.219,14.306 L29.224,10.170 L24.044,10.170 Z" />
                    </g>
                </svg>
            </a>
            <a class="footer-link" href="https://twitter.com" title="twitter" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 49 49">
                    <defs>
                        <filter filterUnits="userSpaceOnUse" id="Filter_1" x="0px" y="0px" width="49px" height="49px">
                            <feOffset in="SourceAlpha" dx="0" dy="1" />
                            <feGaussianBlur result="blurOut" stdDeviation="1" />
                            <feFlood flood-color="rgb(0, 0, 0)" result="floodOut" />
                            <feComposite operator="atop" in="floodOut" in2="blurOut" />
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.25" />
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                        <filter filterUnits="userSpaceOnUse" id="Filter_2" x="0px" y="0px" width="49px" height="49px">
                            <feComposite operator="atop" in="floodOut" in2="blurOut" />
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.25" />
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>

                    </defs>
                    <g filter="url(#Filter_1)">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M24.475,45.975 C12.049,45.975 1.975,35.901 1.975,23.475 C1.975,11.048 12.049,0.975 24.475,0.975 C36.901,0.975 46.975,11.048 46.975,23.475 C46.975,35.901 36.901,45.975 24.475,45.975 ZM36.437,21.249 C34.699,15.199 30.523,15.199 30.523,15.199 C30.523,15.199 32.296,14.193 32.244,13.580 C31.699,13.188 30.605,13.972 30.513,13.972 C30.789,13.778 30.625,13.226 30.267,13.017 C29.739,13.069 29.279,14.040 29.279,14.040 C29.279,14.040 29.020,13.563 28.785,13.563 C25.990,14.330 24.021,20.781 24.030,20.789 C14.903,14.628 14.298,15.813 14.298,15.830 C13.582,17.432 16.360,19.460 16.360,19.460 L15.566,19.484 C15.566,19.484 14.399,19.445 14.654,20.279 C14.914,21.344 16.298,22.448 16.309,22.460 C16.991,22.783 17.843,22.476 17.843,22.476 C17.843,22.476 16.940,22.948 16.368,23.305 C15.426,23.914 16.103,24.454 16.205,24.556 C17.432,25.868 19.360,25.783 19.360,25.783 C19.360,25.783 18.464,26.857 18.457,27.265 C18.457,27.930 19.053,28.340 19.104,28.390 C19.637,28.755 20.427,28.800 20.434,28.800 C15.495,34.032 9.543,28.769 9.543,28.748 C10.208,32.583 15.849,36.282 25.768,34.850 C33.812,33.572 36.386,24.760 36.386,24.760 C36.386,24.760 39.709,24.947 40.084,22.971 C39.045,23.158 37.545,22.852 37.545,22.852 C37.545,22.852 40.101,21.744 40.221,20.414 C38.721,21.573 36.488,21.249 36.437,21.249 Z" />
                    </g>
                    <g filter="url(#Filter_2)">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M24.475,45.975 C12.049,45.975 1.975,35.901 1.975,23.475 C1.975,11.048 12.049,0.975 24.475,0.975 C36.901,0.975 46.975,11.048 46.975,23.475 C46.975,35.901 36.901,45.975 24.475,45.975 ZM36.437,21.249 C34.699,15.199 30.523,15.199 30.523,15.199 C30.523,15.199 32.296,14.193 32.244,13.580 C31.699,13.188 30.605,13.972 30.513,13.972 C30.789,13.778 30.625,13.226 30.267,13.017 C29.739,13.069 29.279,14.040 29.279,14.040 C29.279,14.040 29.020,13.563 28.785,13.563 C25.990,14.330 24.021,20.781 24.030,20.789 C14.903,14.628 14.298,15.813 14.298,15.830 C13.582,17.432 16.360,19.460 16.360,19.460 L15.566,19.484 C15.566,19.484 14.399,19.445 14.654,20.279 C14.914,21.344 16.298,22.448 16.309,22.460 C16.991,22.783 17.843,22.476 17.843,22.476 C17.843,22.476 16.940,22.948 16.368,23.305 C15.426,23.914 16.103,24.454 16.205,24.556 C17.432,25.868 19.360,25.783 19.360,25.783 C19.360,25.783 18.464,26.857 18.457,27.265 C18.457,27.930 19.053,28.340 19.104,28.390 C19.637,28.755 20.427,28.800 20.434,28.800 C15.495,34.032 9.543,28.769 9.543,28.748 C10.208,32.583 15.849,36.282 25.768,34.850 C33.812,33.572 36.386,24.760 36.386,24.760 C36.386,24.760 39.709,24.947 40.084,22.971 C39.045,23.158 37.545,22.852 37.545,22.852 C37.545,22.852 40.101,21.744 40.221,20.414 C38.721,21.573 36.488,21.249 36.437,21.249 Z" />
                    </g>
                </svg>
            </a>
            <a class="footer-link" href="https://www.linkedin.cn" title="linkedin" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 49 49">
                    <defs>
                        <filter filterUnits="userSpaceOnUse" id="Filter_1" x="0px" y="0px" width="49px" height="49px">
                            <feOffset in="SourceAlpha" dx="0" dy="1" />
                            <feGaussianBlur result="blurOut" stdDeviation="1" />
                            <feFlood flood-color="rgb(0, 0, 0)" result="floodOut" />
                            <feComposite operator="atop" in="floodOut" in2="blurOut" />
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.25" />
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>

                    </defs>
                    <g filter="url(#Filter_1)">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M23.535,45.071 C11.109,45.071 1.035,34.997 1.035,22.570 C1.035,10.144 11.109,0.071 23.535,0.071 C35.962,0.071 46.035,10.144 46.035,22.570 C46.035,34.997 35.962,45.071 23.535,45.071 ZM13.873,11.721 C12.424,11.721 11.250,12.896 11.250,14.345 C11.250,15.794 12.424,16.969 13.873,16.969 C15.322,16.969 16.496,15.794 16.496,14.345 C16.496,12.896 15.322,11.721 13.873,11.721 ZM16.653,18.624 L11.562,18.624 L11.562,33.990 L16.653,33.990 L16.653,18.624 ZM29.734,18.249 C26.611,18.280 25.666,20.076 25.182,20.810 L25.182,18.530 L20.026,18.530 L20.026,33.927 L25.179,33.927 L25.179,25.745 C25.179,25.745 24.810,22.590 27.958,22.590 C30.292,22.590 30.332,25.109 30.308,25.452 C30.306,25.291 30.304,25.270 30.301,25.464 C30.301,25.508 30.305,25.498 30.308,25.452 C30.319,26.501 30.301,33.958 30.301,33.958 L35.360,33.974 C35.360,33.974 35.423,25.948 35.423,25.916 C35.423,24.464 35.449,18.249 29.734,18.249 Z" />
                    </g>
                </svg>
            </a>
            <a class="footer-link" href="https://www.google.ru" title="google" alt="google">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 49 49">
                    <defs>
                        <filter filterUnits="userSpaceOnUse" id="Filter_1" x="0px" y="0px" width="49px" height="49px">
                            <feOffset in="SourceAlpha" dx="0" dy="1" />
                            <feGaussianBlur result="blurOut" stdDeviation="1" />
                            <feFlood flood-color="rgb(0, 0, 0)" result="floodOut" />
                            <feComposite operator="atop" in="floodOut" in2="blurOut" />
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.25" />
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>

                    </defs>
                    <g filter="url(#Filter_1)">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M24.475,45.950 C12.049,45.950 1.975,35.876 1.975,23.449 C1.975,11.023 12.049,0.949 24.475,0.949 C36.901,0.949 46.975,11.023 46.975,23.449 C46.975,35.876 36.901,45.950 24.475,45.950 ZM20.724,10.471 C17.281,10.471 15.706,11.388 14.660,12.282 C13.748,13.194 12.533,14.555 12.567,16.800 C12.567,18.741 14.001,22.105 18.103,22.121 C18.373,22.105 18.536,22.116 19.177,22.065 C18.958,22.571 18.862,22.887 18.845,23.359 C18.845,24.220 19.155,24.821 19.847,25.632 C17.872,25.834 15.343,25.941 13.433,27.207 C10.339,29.097 10.665,31.364 10.665,31.330 C10.902,36.309 18.108,36.208 18.086,36.174 C23.869,36.118 26.789,32.936 26.789,29.750 C26.789,28.035 26.104,26.452 24.160,25.048 C23.307,24.271 22.059,23.816 22.064,22.685 C22.064,20.626 25.855,20.183 25.855,16.198 C25.722,13.158 23.672,11.848 23.410,11.679 C23.465,11.679 25.511,11.680 25.511,11.680 L27.683,10.471 C27.683,10.471 20.758,10.471 20.724,10.471 ZM37.758,13.478 L34.586,13.478 L34.586,10.305 L32.470,10.305 L32.470,13.478 L29.297,13.478 L29.297,15.593 L32.470,15.593 L32.470,18.766 L34.586,18.766 L34.586,15.593 L37.758,15.593 L37.758,13.478 ZM19.438,21.208 C16.552,21.049 15.606,16.770 15.606,16.770 C15.606,16.770 14.484,11.716 18.530,11.671 C21.689,11.330 22.771,16.188 22.771,16.188 C22.771,16.188 23.916,21.208 19.438,21.208 ZM24.707,31.122 C24.623,31.257 25.095,34.559 19.694,34.762 C13.889,34.661 13.765,30.982 13.765,30.644 C13.741,26.808 18.910,26.618 20.240,26.576 C21.388,26.723 24.667,28.627 24.707,31.122 Z" />
                    </g>
                </svg>
            </a>
            <a class="footer-link" href="https://www.tumblr.com" title="tumblr" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 49 49">
                    <defs>
                        <filter filterUnits="userSpaceOnUse" id="Filter_1" x="0px" y="0px" width="48px" height="48px">
                            <feOffset in="SourceAlpha" dx="0" dy="1" />
                            <feGaussianBlur result="blurOut" stdDeviation="1" />
                            <feFlood flood-color="rgb(0, 0, 0)" result="floodOut" />
                            <feComposite operator="atop" in="floodOut" in2="blurOut" />
                            <feComponentTransfer>
                                <feFuncA type="linear" slope="0.25" />
                            </feComponentTransfer>
                            <feMerge>
                                <feMergeNode />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>

                    </defs>
                    <g filter="url(#Filter_1)">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M23.499,44.999 C11.073,44.999 0.999,34.926 0.999,22.499 C0.999,10.073 11.073,-0.001 23.499,-0.001 C35.925,-0.001 45.999,10.073 45.999,22.499 C45.999,34.926 35.925,44.999 23.499,44.999 ZM30.994,30.137 C27.117,31.923 24.988,31.312 24.988,28.260 C24.988,26.670 24.992,21.993 24.992,21.993 L30.000,21.993 L30.000,17.981 L24.987,17.984 L24.987,11.959 C24.987,11.959 22.697,11.958 21.588,11.958 C21.402,14.735 20.468,16.307 17.014,18.005 C17.014,19.134 17.011,21.970 17.011,21.970 L20.000,21.970 C20.000,21.970 20.000,29.654 20.000,30.989 C20.000,33.629 22.408,34.654 24.119,34.904 C26.237,35.214 28.874,34.829 30.994,34.132 C30.994,32.886 30.994,31.757 30.994,30.137 Z" />
                    </g>
                </svg>
            </a>
        </div>
        <div class="footer-text">
            <p>Hope we see you at the event!<br>All Rights Reserved. Envato Bangladesh © 2015</p>
        </div>
    </footer>

    <div id="orderFormWrap">

        <form id="orderForm">
            <div id="closeButton">X</div>
            <div class="order-atribute">
                <span>Начало сеанса:</span>
                <span id="orderFilmStart"></span>
            </div>
            <div class="order-atribute">
                <span>Название фильма:</span>
                <span id="orderFilmName"></span>
            </div>
            <div class="order-atribute">
                <span>Жанр:</span>
                <span id="orderFilmGenre"></span>
            </div>
            <div class="order-atribute">
                <span>Выбранное место:</span>
                <span id="orderFilmSeat"></span>
            </div>
            <div class="order-atribute">
                <span>Стоимость билета:</span>
                <span id="orderFilmTotalPrice"></span>
                <span>₽</span>
            </div>
            <div class="order-atribute">
                <span>Имя:</span>
                <input type="text" name="clientName" required id="orderClientName">
            </div>
            <div id="numberInput" class="order-atribute">
                <span>Номер телефона:</span>
                <input type="tel" maxlength="11" name="clientPhone" required pattern="[0-9]{11}" id="orderClientPhone">
            </div>
            <div class="film-order__button">
                <button type="submit" class="button" id="orderFilmButton">Заказать билет</button>
            </div>
        </form>
    </div>



    <div id="thanksForOrderWrap">
        <div id="thanksForOrder">
            Спасибо за заказ! Скоро мы с Вами свяжемся
            <div class="film-order__button">
                <button class="button" id="thanksForOrderClose">Закрыть</button>
            </div>
        </div>
    </div>

    <div class="city-modal" id="cityModal">
        <span>Ваш город </span>
        <span id="formCity"></span>
        <span>, верно?</span>
        <div>
            <button id="cityYes">Да, верно</button>
            <button id="cityNo">Нет, выбрать другой</button>
        </div>
    </div>

    <div id="changeCityModal" class="change-city-modal">
        <div>Выберите Ваш город</div>
        <input type="text" name="chooseCity" id="inputCity" size="40px" placeholder="Начните вводить название города">
        <div id="result"></div>
    </div>

    <div id="presentModalErrorWrap">
    <div class="presentModalError">
        <p id="presentModalErrorText">Кажется что-то пошло не так. Пожалуйста, свяжитесь с нами по телефону 233-21-11</p>
        <button class="button" id="closeError">Ок, закрыть</button>
    </div>
    </div>

    <div id="presentModalSuccessWrap">
    <div class="presentModalSuccess">
        <p id="presentModalSuccessText"></p>
        <button class="button" id="closeSuccess">Класс!</button>
    </div>
    </div>

    <div id="presentModal" class="present-modal">
        
        <form id="presentForm" class="presentForm" enctype="multipart/form-data" method="POST" action="order.php" style="width: 300px;">
        <div id="closePresent" class="close-present">X</div>
            <div class="present-atribute">
                <input type="text" name="name" class="input-form" placeholder="Имя" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : "" ?>" aria-label="Введите имя" required>
                <?php if (isset($_GET['error']) && $_GET['error']) { ?>
                <p style="font-size:12px; color:red;"><?php echo $_GET['error'] ?> </p>
                <?php } ?>
            </div>

            <div class="present-atribute">
                <input type="email" name="email" class="input-form" placeholder="Ваш e-mail" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : "" ?>" aria-label="Введите e-mail" required>
                <?php if (isset($_GET['error']) && $_GET['error']) { ?>
                <p style="font-size:12px; color:red;"><?php echo $_GET['error'] ?> </p>
                <?php } ?>
                <?php if (isset($_GET['error_email']) && $_GET['error_email']) { ?>
                <p style="font-size:12px; color:red;"><?php echo $_GET['error_email'] ?> </p>
                <?php } ?>
            </div>

            <div class="present-atribute">
                <input type="text" name="phone" class="input-form" placeholder="Ваш номер телефона" value="<?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : "" ?>" aria-label="Введите e-mail" required>
                <?php if (isset($_GET['error']) && $_GET['error']) { ?>
                <p style="font-size:12px; color:red;"><?php echo $_GET['error'] ?> </p>
                <?php } ?>
            </div>

            <div class="present-atribute">
                <input id="radio1" type="radio" required value="Поход в трогательный зоопарк" name="present">
                <label for="radio1">Поход в трогательный зоопарк</label>
            </div>

            <div class="present-atribute">
                <input id="radio2" type="radio" required value="Бесплатный поп-корн" name="present">
                <label for="radio2">Бесплатный поп-корн</label>
                
            </div>

            <div class="present-atribute">
                <input id="radio3" type="radio" required value="Бесплатный напиток" name="present">
                <label for="radio3">Бесплатный напиток</label>
                
            </div>

            <div class="present-atribute">
                <textarea placeholder="Ваш комментарий" name="comment" class="textarea-form" aria-label="Введите комментарий"></textarea>
            </div>

            <div class="present-atribute">
                <input type="hidden" class="input-checkbox" name="agree" value="off">
                <input id="checkbox" type="checkbox" name="agree" required>
                <label for="checkbox">Я согласен на обработку персональных данных</label>
            </div>

            <div class="order-atribute">
                <input type="file" multiple accept="image/jpeg,image/png,image/gif" name="file" aria-label="Выберите файл">
            </div>

            <button class="button-present" type="submit">Отправить</button>
        </form>
    </div>

    

    <script type="text/babel" src="js/jquery-3.4.1.js"></script>
    <script type="text/babel" src="js/films.js"></script>
    <script type="text/babel" src="js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script type="text/babel" src="js/navigation.js"></script>
    <script type="text/babel" src="js/owl.js"></script>
    <script type="text/babel" src="js/ajax.js?1"></script>
    <script type="text/babel" src="js/present.js"></script>


</body>

</html>