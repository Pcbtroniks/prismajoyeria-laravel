@extends('layouts.app')

@section('content')
    
    <div class="fullwidth-template">
    <div class="slide-home-06">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
             data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
             data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">

             @foreach ($images as $image)
                <div class="slide-wrap">
                    <img class="hero-image-size" src="/storage/{{ $image->image_src }}" alt="{{ $image->image_alt }}">
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
             @endforeach
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
        </div>
    </div>
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
            <div class="kaycee-instagram style-01" id="instaGrid_x">
                <div class="instagram-owl owl-slick"
                     data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                     data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                    @if (isset($instagramPosts))
                    @foreach ($instagramPosts as $post)                         
                    <div class="rows-space-0">
                        <a target="_blank" href="{{$post->permalink}}" class="item"
                           tabindex="0">
                            <img class="img-responsive lazy" src="{{$post->media_url}}" alt="{{$post->caption}}">
                            <span class="instagram-info">
                                <span class="social-wrap">
                                    <span class="social-info" style="color:#ffffff;">
                                    <svg style="height: 2rem; fill: #ffffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    @endforeach
                    @else

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

                    @endif
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

</div>
</div>
@endsection

@section('css')
    
@stop