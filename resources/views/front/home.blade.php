@extends('layouts.app')

@section('content')
    
    <header id="header" class="header style-03 header-dark header-sticky header-transparent">
        <div class="header-wrap-stick">
            <div class="header-position fixed">
                <div class="header-middle">
                    <div class="kaycee-menu-wapper"></div>
                    <div class="header-middle-inner">
                        <div class="header-menu">
                            <div class="box-header-nav menu-nocenter">
                                <ul id="menu-primary-menu"
                                    class="clone-main-menu kaycee-clone-mobile-menu kaycee-nav main-menu">

                                    <li id="menu-item-230"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="kaycee-menu-item-title" title="Inicio" href="index.html">Inicio</a>
                                    </li>
                                    <li id="menu-item-228"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="kaycee-menu-item-title" title="Shop"
                                           href="https://joyeriaprisma.com/">Tienda</a>
                                        <span class="toggle-submenu"></span>

                                    </li>
                                    <li id="menu-item-229"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="kaycee-menu-item-title" title="Nosotros" href="about.html">Nosotros</a>
                                    </li>
                                    <li id="menu-item-996"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="kaycee-menu-item-title" title="Blog"
                                           href="Contact.html">Contacto</a>
                                    </li>
                                    <li id="menu-item-237"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                        <a class="kaycee-menu-item-title" title="Pages" href="https://wa.link/ihll16">WhatsApp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="block-menu-bar">
                                <a class="menu-bar menu-toggle" href="#">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-logo">
                            <a href="index.html"><img alt="Kaycee"
                                                      src="assets/images/hero/logo.png"
                                                      class="logo"></a></div>
                        <div class="header-control">
                            <div class="header-control-inner">
                                <div class="meta-dreaming">
                                    <ul class="wpml-menu">
                                        <!-- <li class="menu-item kaycee-dropdown block-language">
                                            <a href="#" data-kaycee="kaycee-dropdown">
                                                <img src="assets/images/es.png"
                                                     alt="en" width="18" height="12">
                                                Español
                                            </a>
                                            <span class="toggle-submenu"></span>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">
                                                        <img src="assets/images/it.png"
                                                             alt="it" width="18" height="12">
                                                        English
                                                    </a>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mobile">
            <div class="header-mobile-left">
                <div class="block-menu-bar">
                    <a class="menu-bar menu-toggle" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <div class="header-search kaycee-dropdown">
                    <!-- <div class="header-search-inner" data-kaycee="kaycee-dropdown">
                        <a href="#" class="link-dropdown block-link">
                            <span class="flaticon-magnifying-glass-1"></span>
                        </a>
                    </div> -->
                    <div class="block-search">
                        <form role="search" method="get"
                              class="form-search block-search-form kaycee-live-search-form">
                            <div class="form-content search-box results-search">
                                <div class="inner">
                                    <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value=""
                                           placeholder="Search here..." type="text">
                                </div>
                            </div>
                            <input name="post_type" value="product" type="hidden">
                            <input name="taxonomy" value="product_cat" type="hidden">
                            <div class="category">
                                <select title="product_cat" name="product_cat" id="112546160" class="category-search-option"
                                        tabindex="-1"
                                        style="display: none;">
                                    <option value="0">All Categories</option>
                                    <option class="level-0" value="light">Earrings</option>
                                    <option class="level-0" value="chair">Pendants</option>
                                    <option class="level-0" value="table">Bangles</option>
                                    <option class="level-0" value="bed">Finger Rings</option>
                                    <option class="level-0" value="new-arrivals">New arrivals</option>
                                    <option class="level-0" value="lamp">Chains</option>
                                    <option class="level-0" value="specials">Neckwear</option>
                                    <option class="level-0" value="sofas">Bracelets</option>
                                </select>
                            </div>
                            <button type="submit" class="btn-submit">
                                <span class="flaticon-magnifying-glass-1"></span>
                            </button>
                        </form><!-- block search -->
                    </div>
                </div>
                <ul class="wpml-menu">
                    <li class="menu-item kaycee-dropdown block-language">
                        <a href="#" data-kaycee="kaycee-dropdown">
                            <img src="assets/images/en.png"
                                 alt="en" width="18" height="12">
                            English
                        </a>
                        <span class="toggle-submenu"></span>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#">
                                    <img src="assets/images/it.png"
                                         alt="it" width="18" height="12">
                                    Italiano
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <div class="wcml-dropdown product wcml_currency_switcher">
                            <ul>
                                <li class="wcml-cs-active-currency">
                                    <a class="wcml-cs-item-toggle">USD</a>
                                    <ul class="wcml-cs-submenu">
                                        <li>
                                            <a>EUR</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-mobile-mid">
                <div class="header-logo">
                    <a href="index.html"><img alt="Kaycee"
                                              src="assets/images/hero/logo.png"
                                              class="logo"></a></div>
            </div>
            <div class="header-mobile-right">
                <div class="header-control-inner">
                    <div class="meta-dreaming">
                        <div class="menu-item block-user block-dreaming kaycee-dropdown">
                            <a class="block-link" href=#">
                                <span class="flaticon-profile"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--dashboard is-active">
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="menu-item kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--orders">
                                    <a href="#">Orders</a>
                                </li>
                                <li class="menu-item kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--downloads">
                                    <a href="#">Downloads</a>
                                </li>
                                <li class="menu-item kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--edit-address">
                                    <a href="#">Addresses</a>
                                </li>
                                <li class="menu-item kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--edit-account">
                                    <a href="#">Account details</a>
                                </li>
                                <li class="menu-item kaycee-MyAccount-navigation-link kaycee-MyAccount-navigation-link--customer-logout">
                                    <a href="#">Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="fullwidth-template">
    <div class="slide-home-06">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <!-- <div class="slide-wrap">
                <img src="assets/images/hero/hero-negro.png" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5><span>Hot Deal Product</span></h5>
                            <h1 class="prisma-texto">Prisma®</h1>
                            <h2>Joyeria <span class="prisma-texto">&</span> Diseño</h2>
                            <a href="https://joyeriaprisma.com/">Visítanos </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="assets/images/hero/hero-morado.png" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5 style="color: white;">Trending</h5>
                            <h1 style="color: rgb(222, 224, 51);"><span>Prisma</span>®</h1>
                            <h2 style="color: white;">Stock <span>Limitado</span></h2>
                            <a href="https://joyeriaprisma.com/">Comprar</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="slide-wrap">
                <img src="assets/images/hero/hero-nuevo1.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <!-- <h5 style="color: white;">Trending</h5>
                            <h1 style="color: rgb(222, 224, 51);"><span>Prisma</span>®</h1>
                            <h2 style="color: white;">Stock <span>Limitado</span></h2>
                            <a href="https://joyeriaprisma.com/">Comprar</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="assets/images/hero/hero-nuevo2.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <!-- <h5 style="color: white; visibility: hidden;">Trending</h5>
                            <h1 style="color: rgb(222, 224, 51);"><span>Prisma</span>®</h1>
                            <h2 style="color: white;">Stock <span>Limitado</span></h2> -->
                           <a href="https://joyeriaprisma.com/" style="background-color: #97C046;border-color: #97C046;">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="slide-wrap">
                <img src="assets/images/hero/hero-negro.png" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5><span>Earrings Essential</span></h5>
                            <h1>New Arrivals</h1>
                            <h2>Get <span>25%</span> Off</h2>
                            <a href="https://joyeriaprisma.com/">Shop now</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="section-030">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 ">
                    <div class="kaycee-iconbox style-03">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-startup"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Fast Shipping.</h4>
                                <div class="desc">With sites in 5 languages, ship to over 200 countries</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="kaycee-iconbox style-03">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-padlock"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe delivery</h4>
                                <div class="desc">Pay with the world’s most popular, secure payment.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 ">
                    <div class="kaycee-iconbox style-03">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="flaticon-return-1"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a shopping experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="section-005">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="kaycee-banner style-05 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/caratula/aretes.png"
                                     class="attachment-full size-full" alt="img"></figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <!-- <div class="title-wrap">
                                        <div class="banner-label">TOP STAFF PICK</div>
                                        <h6 class="title">Shop Rings</h6>
                                    </div> -->
                                    <div class="button-wrap">
                                        <!-- <div class="subtitle">
                                            Proin interdum primis <br>
                                            id consequat dict
                                        </div> -->
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <a class="button" target="_self" href="https://joyeriaprisma.com/" style="background-color: #97C046;border-color: #97C046;"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="kaycee-banner style-06 left-center   kaycee_custom_5d67dfcb2178e ">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/caratula/dijes.png"
                                     class="attachment-full size-full" alt="img"></figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <!-- <div class="title-wrap">
                                        <h6 class="title">Maybe You’ve<br>
                                            Earned it</h6>
                                    </div> -->
                                    <div class="button-wrap">
                                        <!-- <div class="subtitle">
                                            Code: <strong>KAYCEE</strong> 25% Off<br>
                                            for all items!
                                        </div> -->
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <a class="button" target="_self" href="https://joyeriaprisma.com/"style="background-color: #97C046;border-color: #97C046;"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001">
        <div class="container">
            <div class="kaycee-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        LO MÁS VENDIDO<span></span></h3>
                    <div class="subtitle">
                        Visita nuestra tienda para saber más.
                    </div>
                </div>
            </div>
            <div class="kaycee-products style-05">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                    <!-- <div class="product-item best-selling style-05 rows-space-0 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/product/01-arete.png"
                                         alt="Modern Platinum" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-11%</span></span>
                                    <span class="onnew"><span class="text">New</span></span></div>
                                
                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Bola Grande</a>
                                </h3>
                            </div>
                        </div>
                    </div> -->
                    <div class="product-item best-selling style-05 rows-space-0 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/product/02-arete.png"
                                         alt="Splendid Diamond" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>


                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Arete Triple Gota Artego</a>
                                </h3>


                            </div>
                        </div>
                    </div>
                    <div class="product-item best-selling style-05 rows-space-0 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/product/03-arete.png"
                                         alt="Gold Chain" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-18%</span></span>
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="0">Arete Cristal al Centro Medio Largo</a>
                                </h3>


                            </div>
                        </div>
                    </div>
                    <!-- <div class="product-item best-selling style-05 rows-space-0 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="0">
                                    <img class="img-responsive"
                                         src="assets/images/product/04-arete.png"
                                         alt="Riona Pearl" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-7%</span></span>
                                    <span class="onnew"><span class="text">New</span></span></div>
                                
                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="0">Bola Grande</a>
                                </h3>
                                
                                
                            </div>
                        </div>
                    </div> -->
                    <div class="product-item best-selling style-05 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link" href="#"
                                   tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/05-arete.png"
                                         alt="Dazzling Earrings" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onsale"><span class="number">-21%</span></span>
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Arete Doble Gota Ardoga</a>
                                </h3>


                            </div>
                        </div>
                    </div>
                    <!-- <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/06-arete.png"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>
                                
                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Arete Cristal al Centro Medio Largo</a>
                                </h3>
                                
                                
                            </div>
                        </div>
                    </div> -->

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/07-arete.png"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="-1">Arete Cristal al Centro Medio Largo</a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/08-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="-1">Arete Bule Arbu</a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/09-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="-1">Arete Cristal al Centro Medio Largo</a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/10-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#"
                                       tabindex="-1">Arete Cristal al Centro Medio Largo</a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/11-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">
                                        Arete Doble Gota Ardoga
                                    </a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/12-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">
                                       Arete Doble Gota Ardoga
                                    </a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/13-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Arete Doble Gota Ardoga</a>
                                </h3>


                            </div>
                        </div>
                    </div>

                    <div class="product-item best-selling style-05 rows-space-0 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                        <div class="product-inner tooltip-right">
                            <div class="product-thumb">
                                <a class="thumb-link"
                                   href="#" tabindex="-1">
                                    <img class="img-responsive"
                                         src="assets/images/product/14-arete.jpg"
                                         alt="Stylised Studs" width="270" height="350">
                                </a>
                                <div class="flash">
                                    <span class="onnew"><span class="text">New</span></span></div>

                            </div>
                            <div class="product-info">
                                <h3 class="product-name product_title">
                                    <a href="#" tabindex="-1">Arete Doble Gota Ardoga</a>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section-032">
        <div class="container">
            <div class="kaycee-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        Síguenos<span></span> </h3>
                    <div class="subtitle">
                        <a href="https://www.instagram.com/prismajoyeria/">
                        @Prisma_Joyeria</a>
                    </div>
                </div>
            </div>
            <div class="kaycee-instagram style-01" id="instaGrid">
                <div class="instagram-owl owl-slick"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item"
                           tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_1.jpg" alt="Home 01">
                            <span class="instagram-info">
                                 <span class="social-wrap">
                                    <span class="social-info">1
                                        <i class="pe-7s-chat"></i>
                                    </span>
                                    <span class="social-info">0
                                        <i class="pe-7s-like2"></i>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_2.jpg" alt="Home 01">
                            <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item"
                           tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_3.jpg" alt="Home 01">
                            <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_4.jpg" alt="Home 01">
                            <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item" tabindex="0">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_1.jpg" alt="Home 01">
                            <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item"
                           tabindex="-1">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_2.jpg" alt="Home 01">
                            <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item"
                           tabindex="-1">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_3.jpg" alt="Home 01">
                            <span class="instagram-info">
                                         <span class="social-wrap">
                                            <span class="social-info">0
                                                <i class="pe-7s-chat"></i>
                                            </span>
                                            <span class="social-info">0
                                                <i class="pe-7s-like2"></i>
                                            </span>
                                        </span>
                                    </span>
                        </a>
                    </div>
                    <div class="rows-space-0">
                        <a target="_blank" href="#" class="item"
                           tabindex="-1">
                            <img class="img-responsive lazy" src="assets/images/insta/insta_4.jpg" alt="Home 01">
                            <span class="instagram-info">
                                     <span class="social-wrap">
                                        <span class="social-info">0
                                            <i class="pe-7s-chat"></i>
                                        </span>
                                        <span class="social-info">0
                                            <i class="pe-7s-like2"></i>
                                        </span>
                                    </span>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

</div>
</div>
@endsection