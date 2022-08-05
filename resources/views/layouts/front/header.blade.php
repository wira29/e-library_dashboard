<header id="tg-header" class="tg-header tg-haslayout">
    <div class="tg-middlecontainer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <strong class="tg-logo"
                        ><a href="index-2.html"
                            ><img
                                src="{{
                                    asset('assets')
                                }}/front/images/logo.png"
                                alt="company name here" /></a
                    ></strong>
                    <div class="tg-wishlistandcart">
                        
                        @if(Auth::check())
                        <div
                            class="dropdown tg-themedropdown tg-wishlistdropdown"
                        >
                            <a
                                href="javascript:void(0);"
                                id="tg-wishlisst"
                                class="tg-btnthemedropdown"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <span class="tg-themebadge">3</span>
                                <i class="icon-cart"></i>
                                <span class="mr-3">$123.00</span>
                            </a>
                            <div
                                class="dropdown-menu tg-themedropdownmenu"
                                aria-labelledby="tg-minicart"
                            >
                                <div class="tg-minicartbody">
                                    <div class="tg-minicarproduct">
                                        <figure>
                                            <img
                                                src="{{
                                                    asset('assets')
                                                }}/front/images/products/img-01.jpg"
                                                alt="image description"
                                            />
                                        </figure>
                                        <div class="tg-minicarproductdata">
                                            <h5>
                                                <a href="javascript:void(0);"
                                                    >Our State Fair Is A Great
                                                    Function</a
                                                >
                                            </h5>
                                            <h6>
                                                <a href="javascript:void(0);"
                                                    >$ 12.15</a
                                                >
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="tg-minicarproduct">
                                        <figure>
                                            <img
                                                src="{{
                                                    asset('assets')
                                                }}/front/images/products/img-02.jpg"
                                                alt="image description"
                                            />
                                        </figure>
                                        <div class="tg-minicarproductdata">
                                            <h5>
                                                <a href="javascript:void(0);"
                                                    >Bring Me To Light</a
                                                >
                                            </h5>
                                            <h6>
                                                <a href="javascript:void(0);"
                                                    >$ 12.15</a
                                                >
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="tg-minicarproduct">
                                        <figure>
                                            <img
                                                src="{{
                                                    asset('assets')
                                                }}/front/images/products/img-03.jpg"
                                                alt="image description"
                                            />
                                        </figure>
                                        <div class="tg-minicarproductdata">
                                            <h5>
                                                <a href="javascript:void(0);"
                                                    >Have Faith In Your Soul</a
                                                >
                                            </h5>
                                            <h6>
                                                <a href="javascript:void(0);"
                                                    >$ 12.15</a
                                                >
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-minicartfoot">
                                    <a
                                        class="tg-btnemptycart"
                                        href="javascript:void(0);"
                                    >
                                        <i class="fa fa-trash-o"></i>
                                        <span>Clear Your Cart</span>
                                    </a>
                                    <span class="tg-subtotal"
                                        >Subtotal: <strong>35.78</strong></span
                                    >
                                    <div class="tg-btns">
                                        <a
                                            class="tg-btn tg-active"
                                            href="javascript:void(0);"
                                            >View Cart</a
                                        >
                                        <a
                                            class="tg-btn"
                                            href="javascript:void(0);"
                                            >Checkout</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div
                            class="dropdown tg-themedropdown tg-wishlistdropdown"
                        >
                            <a
                                href="{{ route('login') }}"
                                class="tg-btnthemedropdown"
                            >
                                <span>Login</span>
                            </a>
                        </div>
                        @endif
                        @if(Auth::check())
                        <div
                            class="dropdown tg-themedropdown tg-minicartdropdown"
                        >
                            <a
                                href="javascript:void(0);"
                                id="tg-minicart"
                                class="tg-btnthemedropdown"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <span>Admin</span>
                            </a>
                            <div
                                class="dropdown-menu tg-themedropdownmenu"
                                aria-labelledby="tg-wishlisst"
                            >
                                <div class="tg-description">
                                    <a class="tg-btnthemedropdown" href="{{ route('logout') }} " onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                                    <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none"
                                >
                                    @csrf
                                </form>
                                </div>
                            </div>
                        </div>
                        @else
                        <div
                            class="dropdown tg-themedropdown tg-minicartdropdown"
                        >
                            <a
                                href="{{ route('register') }}"
                                class="tg-btnthemedropdown"
                            >
                                <span>Register</span>
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="tg-searchbox">
                        <form class="tg-formtheme tg-formsearch">
                            <fieldset>
                                <input
                                    type="text"
                                    name="search"
                                    class="typeahead form-control"
                                    placeholder="Search by title, author, keyword, ISBN..."
                                />
                                <button type="submit">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tg-navigationarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-row">
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button
                                type="button"
                                class="navbar-toggle collapsed"
                                data-toggle="collapse"
                                data-target="#tg-navigation"
                                aria-expanded="false"
                            >
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div
                            id="tg-navigation"
                            class="collapse navbar-collapse tg-navigation"
                        >
                            <ul>
                                <li
                                    class="{{ request()->is('home*') ? 'current-menu-item' : '' }}"
                                >
                                    <a href="{{ route('home') }}">Beranda</a>
                                </li>
                                <li class="{{ request()->is('book*') ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('bookPage') }}">Buku</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);"
                                        >Kategori</a
                                    >
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="newslist.html"
                                                >News List</a
                                            >
                                        </li>
                                        <li>
                                            <a href="newsgrid.html"
                                                >News Grid</a
                                            >
                                        </li>
                                        <li>
                                            <a href="newsdetail.html"
                                                >News Detail</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="products.html">Tentang Kami</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
