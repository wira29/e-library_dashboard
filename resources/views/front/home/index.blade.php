@extends('layouts.front') @section('content')
<!--************************************
				Home Slider Start
		*************************************-->
<div id="tg-homeslider" class="tg-homeslider tg-haslayout owl-carousel">
    <div
        class="item"
        data-vide-bg="poster: images/slider/img-01.jpg"
        data-vide-options="position: 0% 50%"
    >
        <div class="container">
            <div class="row">
                <div
                    class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2"
                >
                    <div class="tg-slidercontent">
                        <figure class="tg-authorimg">
                            <a href="javascript:void(0);"
                                ><img
                                    src="{{ asset('assets') }}/front/images/author/imag-01.jpg"
                                    alt="image description"
                            /></a>
                        </figure>
                        <h1>Jude Morphew</h1>
                        <h2>Latest 2017 Release</h2>
                        <div class="tg-description">
                            <p>
                                Consectetur adipisicing elit sed do eiusmod
                                tempor incididunt ut labore tolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamcoiars nisi ut aliquip
                                commodo.
                            </p>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn" href="javascript:void(0);"
                                >buy now</a
                            >
                            <a class="tg-btn" href="javascript:void(0);"
                                >read more</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="item"
        data-vide-bg="poster: images/slider/img-01.jpg"
        data-vide-options="position: 0% 50%"
    >
        <div class="container">
            <div class="row">
                <div
                    class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-8 col-lg-push-2"
                >
                    <div class="tg-slidercontent">
                        <figure class="tg-authorimg">
                            <a href="javascript:void(0);"
                                ><img
                                    src="{{ asset('assets') }}/front/images/author/imag-01.jpg"
                                    alt="image description"
                            /></a>
                        </figure>
                        <h1>Jude Morphew</h1>
                        <h2>Latest 2017 Release</h2>
                        <div class="tg-description">
                            <p>
                                Consectetur adipisicing elit sed do eiusmod
                                tempor incididunt ut labore tolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamcoiars nisi ut aliquip
                                commodo.
                            </p>
                        </div>
                        <div class="tg-btns">
                            <a class="tg-btn" href="javascript:void(0);"
                                >buy now</a
                            >
                            <a class="tg-btn" href="javascript:void(0);"
                                >read more</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
				Home Slider End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
					All Status Start
			*************************************-->
    <section class="tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-allstatus">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div
                            class="tg-parallax tg-bgbookwehave"
                            data-z-index="2"
                            data-appear-top-offset="600"
                            data-parallax="scroll"
                            data-image-src="images/parallax/bgparallax-01.jpg"
                        >
                            <div class="tg-status">
                                <div class="tg-statuscontent">
                                    <span class="tg-statusicon"
                                        ><i class="icon-book"></i
                                    ></span>
                                    <h2>
                                        Books we have<span>24,179,213</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div
                            class="tg-parallax tg-bgtotalmembers"
                            data-z-index="2"
                            data-appear-bottom-offset="600"
                            data-parallax="scroll"
                            data-image-src="images/parallax/bgparallax-02.jpg"
                        >
                            <div class="tg-status">
                                <div class="tg-statuscontent">
                                    <span class="tg-statusicon"
                                        ><i class="icon-user"></i
                                    ></span>
                                    <h2>
                                        Total members<span>15,179,213</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div
                            class="tg-parallax tg-bghappyusers"
                            data-z-index="2"
                            data-appear-top-offset="600"
                            data-parallax="scroll"
                            data-image-src="images/parallax/bgparallax-03.jpg"
                        >
                            <div class="tg-status">
                                <div class="tg-statuscontent">
                                    <span class="tg-statusicon"
                                        ><i class="icon-heart"></i
                                    ></span>
                                    <h2>Happy users<span>1,267,539</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					All Status End
			*************************************-->
    <!--************************************
					Best Selling Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-sectionhead">
                        <h2><span>People’s Choice</span>Bestselling Books</h2>
                        <a class="tg-btn" href="javascript:void(0);"
                            >View All</a
                        >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div
                        id="tg-bestsellingbooksslider"
                        class="tg-bestsellingbooksslider tg-bestsellingbooks owl-carousel"
                    >
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-01.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-01.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-themetagbox">
                                        <span class="tg-themetag">sale</span>
                                    </div>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Help Me Find My Stomach</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-02.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-02.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-themetagbox">
                                        <span class="tg-themetag">sale</span>
                                    </div>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Drive Safely, No Bumping</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook tg-notag">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-03.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-03.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Let The Good Times Roll Up</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-04.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-04.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-themetagbox">
                                        <span class="tg-themetag">sale</span>
                                    </div>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Our State Fair Is A Great State
                                                Fair</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook tg-notag">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-05.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-05.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Put The Petal To The Metal</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-06.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-06.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-themetagbox">
                                        <span class="tg-themetag">sale</span>
                                    </div>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Help Me Find My Stomach</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tg-postbook tg-notag">
                                <figure class="tg-featureimg">
                                    <div class="tg-bookimg">
                                        <div class="tg-frontcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-03.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                        <div class="tg-backcover">
                                            <img
                                                src="{{ asset('assets') }}/front/images/books/img-03.jpg"
                                                alt="image description"
                                            />
                                        </div>
                                    </div>
                                    <a
                                        class="tg-btnaddtowishlist"
                                        href="javascript:void(0);"
                                    >
                                        <i class="icon-heart"></i>
                                        <span>add to wishlist</span>
                                    </a>
                                </figure>
                                <div class="tg-postbookcontent">
                                    <ul class="tg-bookscategories">
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Adventure</a
                                            >
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                                >Fun</a
                                            >
                                        </li>
                                    </ul>
                                    <div class="tg-booktitle">
                                        <h3>
                                            <a href="javascript:void(0);"
                                                >Let The Good Times Roll Up</a
                                            >
                                        </h3>
                                    </div>
                                    <span class="tg-bookwriter"
                                        >By:
                                        <a href="javascript:void(0);"
                                            >Angela Gunning</a
                                        ></span
                                    >
                                    <span class="tg-stars"><span></span></span>
                                    <span class="tg-bookprice">
                                        <ins>$25.18</ins>
                                        <del>$27.20</del>
                                    </span>
                                    <a
                                        class="tg-btn tg-btnstyletwo"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-shopping-basket"></i>
                                        <em>Add To Basket</em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					Best Selling End
			*************************************-->
    <!--************************************
					New Release Start
			*************************************-->
    <section class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="tg-newrelease">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="tg-sectionhead">
                            <h2>
                                <span>Taste The New Spice</span>New Release
                                Books
                            </h2>
                        </div>
                        <div class="tg-description">
                            <p>
                                Consectetur adipisicing elit sed do eiusmod
                                tempor incididunt labore toloregna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation
                                ullamcoiars nisiuip commodo consequat aute irure
                                dolor in aprehenderit aveli esseati cillum dolor
                                fugiat nulla pariatur cepteur sint occaecat
                                cupidatat.
                            </p>
                        </div>
                        <div class="tg-btns">
                            <a
                                class="tg-btn tg-active"
                                href="javascript:void(0);"
                                >View All</a
                            >
                            <a class="tg-btn" href="javascript:void(0);"
                                >Read More</a
                            >
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="tg-newreleasebooks">
                                <div
                                    class="col-xs-4 col-sm-4 col-md-6 col-lg-4"
                                >
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover">
                                                    <img
                                                        src="{{ asset('assets') }}/front/images/books/img-07.jpg"
                                                        alt="image description"
                                                    />
                                                </div>
                                                <div class="tg-backcover">
                                                    <img
                                                        src="{{ asset('assets') }}/front/images/books/img-07.jpg"
                                                        alt="image description"
                                                    />
                                                </div>
                                            </div>
                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <ul class="tg-bookscategories">
                                                <li>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Adventure</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Fun</a
                                                    >
                                                </li>
                                            </ul>
                                            <div class="tg-booktitle">
                                                <h3>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Help Me Find My
                                                        Stomach</a
                                                    >
                                                </h3>
                                            </div>
                                            <span class="tg-bookwriter"
                                                >By:
                                                <a href="javascript:void(0);"
                                                    >Kathrine Culbertson</a
                                                ></span
                                            >
                                            <span class="tg-stars"
                                                ><span></span
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-xs-4 col-sm-4 col-md-6 col-lg-4"
                                >
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover">
                                                    <img
                                                        src="{{ asset('assets') }}/front/images/books/img-08.jpg"
                                                        alt="image description"
                                                    />
                                                </div>
                                                <div class="tg-backcover">
                                                    <img
                                                        src="{{ asset('assets') }}/front/images/books/img-08.jpg"
                                                        alt="image description"
                                                    />
                                                </div>
                                            </div>
                                            <a
                                                class="tg-btnaddtowishlist"
                                                href="javascript:void(0);"
                                            >
                                                <i class="icon-heart"></i>
                                                <span>add to wishlist</span>
                                            </a>
                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <ul class="tg-bookscategories">
                                                <li>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Adventure</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Fun</a
                                                    >
                                                </li>
                                            </ul>
                                            <div class="tg-booktitle">
                                                <h3>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Drive Safely, No
                                                        Bumping</a
                                                    >
                                                </h3>
                                            </div>
                                            <span class="tg-bookwriter"
                                                >By:
                                                <a href="javascript:void(0);"
                                                    >Sunshine Orlando</a
                                                ></span
                                            >
                                            <span class="tg-stars"
                                                ><span></span
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-xs-4 col-sm-4 col-md-3 col-lg-4 hidden-md"
                                >
                                    <div class="tg-postbook">
                                        <figure class="tg-featureimg">
                                            <div class="tg-bookimg">
                                                <div class="tg-frontcover">
                                                    <img
                                                        src="{{ asset('assets') }}/front/images/books/img-09.jpg"
                                                        alt="image description"
                                                    />
                                                </div>
                                                <div class="tg-backcover">
                                                    <img
                                                        src="{{ asset('assets') }}/front/images/books/img-09.jpg"
                                                        alt="image description"
                                                    />
                                                </div>
                                            </div>
                                            <a
                                                class="tg-btnaddtowishlist"
                                                href="javascript:void(0);"
                                            >
                                                <i class="icon-heart"></i>
                                                <span>add to wishlist</span>
                                            </a>
                                        </figure>
                                        <div class="tg-postbookcontent">
                                            <ul class="tg-bookscategories">
                                                <li>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Adventure</a
                                                    >
                                                </li>
                                                <li>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Fun</a
                                                    >
                                                </li>
                                            </ul>
                                            <div class="tg-booktitle">
                                                <h3>
                                                    <a
                                                        href="javascript:void(0);"
                                                        >Let The Good Times Roll
                                                        Up</a
                                                    >
                                                </h3>
                                            </div>
                                            <span class="tg-bookwriter"
                                                >By:
                                                <a href="javascript:void(0);"
                                                    >Elisabeth Ronning</a
                                                ></span
                                            >
                                            <span class="tg-stars"
                                                ><span></span
                                            ></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--************************************
					New Release End
			*************************************-->
    <!--************************************
					Collection Count Start
			*************************************-->
    <section
        class="tg-parallax tg-bgcollectioncount tg-haslayout"
        data-z-index="-100"
        data-appear-top-offset="600"
        data-parallax="scroll"
        data-image-src="images/parallax/bgparallax-04.jpg"
    >
        <div class="tg-sectionspace tg-collectioncount tg-haslayout">
            <div class="container">
                <div class="row">
                    <div
                        id="tg-collectioncounters"
                        class="tg-collectioncounters"
                    >
                        <div class="tg-collectioncounter tg-drama">
                            <div class="tg-collectioncountericon">
                                <i class="icon-bubble"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Drama</h2>
                                <h3
                                    data-from="0"
                                    data-to="6179213"
                                    data-speed="8000"
                                    data-refresh-interval="50"
                                >
                                    6,179,213
                                </h3>
                            </div>
                        </div>
                        <div class="tg-collectioncounter tg-horror">
                            <div class="tg-collectioncountericon">
                                <i class="icon-heart-pulse"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Horror</h2>
                                <h3
                                    data-from="0"
                                    data-to="3121242"
                                    data-speed="8000"
                                    data-refresh-interval="50"
                                >
                                    3,121,242
                                </h3>
                            </div>
                        </div>
                        <div class="tg-collectioncounter tg-romance">
                            <div class="tg-collectioncountericon">
                                <i class="icon-heart"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Romance</h2>
                                <h3
                                    data-from="0"
                                    data-to="2101012"
                                    data-speed="8000"
                                    data-refresh-interval="50"
                                >
                                    2,101,012
                                </h3>
                            </div>
                        </div>
                        <div class="tg-collectioncounter tg-fashion">
                            <div class="tg-collectioncountericon">
                                <i class="icon-star"></i>
                            </div>
                            <div class="tg-titlepluscounter">
                                <h2>Fashion</h2>
                                <h3
                                    data-from="0"
                                    data-to="1158245"
                                    data-speed="8000"
                                    data-refresh-interval="50"
                                >
                                    1,158,245
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--************************************
				Main End
		*************************************-->
@endsection
