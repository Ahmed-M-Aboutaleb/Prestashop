<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Meta -->
<!-- Title -->
    <title>Prestashop</title>
<!-- Title -->
<!-- Link -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="./assets/css/index.css">
<!-- Link -->
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-black">
    <a class="navbar-brand" href="#">Presta<span style="color:gray">shop</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav navbar-center">
            <li class="nav-item">
                <a class="nav-link" href="#">PSP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PS Vita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PlayStation 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PlayStation 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">XBOX 360</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nintendo Wii</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nintendo DS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cart.php">Cart</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Navbar -->
<!-- Slider -->
<div class="container">
    <div class="row">
        <div class="col-8 no-padding">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/img/1.png" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="h4-slide">PLAYSTAtion 4</h4>
                            <h2>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="h4-slide">XBox 360</h4>
                            <h2>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/img/3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="h4-slide">PLAYSTAtion 3</h4>
                            <h2>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-4 main-anim-slider no-padding"><div class="html-content"><img src="./assets/img/1-2.jpg" width="100%" height="100%" class="header-img"></div> <div class="text-html"><h4>All</h4><h2>Games</h2><h3>on sale</h3></div></div>
    </div>
</div>
<!-- Slider -->
<!-- Console -->
<div class="container">
    <div class="row">
        <div class="col"><img class="img-responsive" src="./assets/img/ps.png"><h3 class="item-title">PlayStation 4</h3></div>
        <div class="col"><img class="img-responsive" src="./assets/img/xbox.png"><h3 class="item-title class-xbox">Xbox 360 New</h3></div>
        <div class="col"><img class="img-responsive" src="./assets/img/wii.png"><h3 class="item-title">Nintendo Wii</h3></div>
        <div class="col"><img class="img-responsive" src="./assets/img/psv.png"><h3 class="item-title">PS Vita</h3></div>
    </div>
    <div class="row">
        <div class="col"><img class="img-responsive" src="./assets/img/ps3.png"><h3 class="item-title">PlayStation 3</h3></div>
        <div class="col"><img class="img-responsive" src="./assets/img/xbox360.png"><h3 class="item-title">Xbox 360</h3></div>
        <div class="col"><img class="img-responsive" src="./assets/img/nm.png"><h3 class="item-title">Nintendo mini</h3></div>
        <div class="col"><img class="img-responsive" src="./assets/img/nds.png"><h3 class="item-title">Nintendo DS</h3></div>
    </div>
</div>
<!-- Console -->
<!-- Products -->
<hr>
<div class="container">
    <h1 class="text-center">Products</h1>
    <div class="row" id="display_item">
    </div>
    <button type="button" name="add_to_cart" id="add_to_cart" class="btn btn-success btn-xs">Add to Cart</button>
</div>
<hr>
<!-- Products -->
<!-- wm -->
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6 wm">
                <div class="html-content">
                    <img src="./assets/img/wm.jpg" class="img-responsive" alt="" srcset="">
                    <div class="text-html">
                        <h5>PLAYstation 3</h5>
                        <p>Sed do eiusmod tempor incidi dunt ut labore et dolore</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wm">
                <div class="html-content">
                    <img src="./assets/img/wm2.jpg" class="img-responsive" alt="" srcset="">
                    <div class="text-html">
                        <h5>XBOX 360</h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing</p>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- wm -->
<!-- features -->
<div class="container features">
    <div class="row">
        <div class="col-sm">
            <h4>FOLLOW US ON FACEBOOK</h4>
        </div>
        <div class="col-sm">
            <div class="row">
                <div class="col">
                    <div class="icon">
                        <img src="./assets/svg/delivery-truck.svg" class="img1" alt="" srcset="">
                    </div>
                    <div class="type-text">
                        <h3>FREE SHIPPING</h3>
                        <p>Donec vitae diam ut purus luctus filisis. Nullectus non eros tristique ultric.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="icon">
                        <img src="./assets/svg/support.svg" class="img2" alt="" srcset="">
                    </div>
                    <div class="type-text">
                        <h3>Online support</h3>
                        <p>Donec vitae diam ut purus luctus filisis. Nullectus non eros tristique ultric.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="icon">
                        <img src="./assets/svg/gift.svg" class="img3" alt="" srcset="">
                    </div>
                    <div class="type-text">
                        <h3>GIFT CARDS</h3>
                        <p>Donec vitae diam ut purus luctus filisis. Nullectus non eros tristique ultric.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <h4>Useful links</h4>
            <p class="list_link"><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=3&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Vestibulum id elementum massa</a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=4&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Curabitur cursus vel eros </a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=5&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Suspendisse dapibus ullamcorper</a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=6&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Eleifend pharetra </a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=7&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Donec ultrices quam nec erat males </a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=8&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Etiam ornare nisi non interdum</a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=9&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Phasellus eget ultrices dolor</a><br><a href="https://livedemo00.template-help.com/prestashop_52518/index.php?id_category=10&amp;controller=category&amp;live_configurator_token=7a0285e22ee14a17d2f85739baebcfe1&amp;id_shop=1&amp;id_employee=2&amp;theme=&amp;theme_font=">Ut viverra urna eu</a></p>
        </div>
    </div>
</div>
<!-- features -->
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<script src="./assets/js/main.js"></script>
<!-- Javascript -->
</body>
</html>