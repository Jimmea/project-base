<header class="header">
    {{--segment--}}
    <div class="header__wrapper">
        <div class="wrapper container">
            <div class="header__logo">
            <span class="">
                            <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" class="shop-logo shop-logo--white pts">
                            <polygon points="18.523,1.054 18.518,0.265 0.719,0.265 0.719,1.93 15.282,1.93 0,20.07 0,20.735 18.626,20.735
                        18.626,19.07 3.248,19.07"></polygon>
            <path d="M36.263,0.118l-9.709,20.617h2.081l3.269-6.956h9.838l3.269,6.956h2.081L37.383,0.118H36.263z
                         M40.963,12.114h-8.281l4.126-8.833L40.963,12.114z"></path>
            <polygon points="58.669,0.265 56.686,0.265 56.686,20.735 68.87,20.735 68.87,19.07 58.669,19.07   "></polygon>
            <path d="M88.688,0c-6.217,0-11.087,4.612-11.087,10.5c0,5.888,4.87,10.5,11.087,10.5
                        c6.251,0,11.147-4.612,11.147-10.5C99.836,4.612,94.939,0,88.688,0z M88.749,19.188c-5.071,0-9.044-3.816-9.044-8.688
                        c0-4.872,3.973-8.688,9.044-8.688c5.037,0,8.983,3.816,8.983,8.688C97.732,15.372,93.786,19.188,88.749,19.188z"></path>
            <path d="M119.743,10.567c2.457-0.985,3.702-2.642,3.702-4.93c0-3.363-2.628-5.371-7.031-5.371h-5.487v20.469h1.983
                        v-9.638h2.596c2.432,0,3.181,0.348,5.592,4.042l3.658,5.597h2.33l-4.854-7.242C121.318,12.157,120.58,11.136,119.743,10.567z
                         M112.909,1.93h3.171c3.392,0,5.26,1.327,5.26,3.736c0,2.428-1.846,3.765-5.199,3.765h-3.231V1.93z"></path>
            <path d="M144.291,0.118h-1.121l-9.709,20.617h2.081l3.269-6.956h9.838l3.269,6.956H154L144.291,0.118z
                         M147.871,12.114h-8.281l4.126-8.833L147.871,12.114z"></path>            </svg>
                    </a>
            </span>
            </div>
            <div class="header__segments">
                <ul class="">
                    <li class="header__segment-women">
                        <a class="a-white header__segment-text txt_white" href="/women/?from=header">Nữ</a>
                    </li>
                    <li class="header__segment-men">
                        <a class="a-white header__segment-text txt_white" href="/men/?from=header">Nam</a>
                    </li>
                    <li class="header__segment-men">
                        <a class="a-white header__segment-text txt_white" href="/child/?from=header">Trẻ Em</a>
                    </li>
                </ul>
            </div>
            <div class="header__search">
                <form id="onsiteSearch" action="/catalog/" method="get" autocapitalize="on" autocorrect="on">
                    <input class="header__search-input" name="q" type="text" placeholder="Search for products, trends and brands" autocomplete="off">
                    <select class="header__search-select">
                        <option value="women">Women</option>
                        <option value="men">Men</option>
                    </select>
                    <button class="header__search-button" type="submit">
                        <i class="fa fa-search"></i>
                        <span class="hdSearchButton"></span>
                    </button>
                    <div class="header__search-suggest display-none"></div>
                </form>
            </div>
            <div class="header__util">
                <ul class="">
                    <li class="utils pll">
                        <!-- ACCOUNT DROPDOWN START-->
                        <i class="fa fa-user-circle"></i>
                        <div class="account-menu__popup txtLeft  b-header-shadow" style="display:none">
                            <div class="account-menu__head pal pts txtUpper fontsizeM">
                                Welcome                    </div>
                            <div class="account-menu__body phl pal fontsizeS txtUpper">
                                <ul role="menu" aria-labelledby="dLabel">
                                    <li class="pbm">
                                        <a class="" href="customer/account/login/?from=header" title="Log in" rel="follow">
                                            Log in                                </a>
                                    </li>
                                    <li class="pbm">
                                        <a href="customer/account/create/?from=header" title="Register" rel="follow">
                                            Register                                </a>
                                    </li>
                                    <li class="pbm">
                                        <a href="#boxTrackOrder" class="js-trackOrder" data-toggle="modal" data-target="#boxTrackOrder">
                                            Track My Orders                                </a>
                                    </li>
                                    <li class="pbm">
                                        <a href="https://support.zalora.sg/hc/en-us" target="_blank" title="Help" rel="follow noopener">
                                            Help                                </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- ACCOUNT DROPDOWN END-->
                    </li>
                    <li class="seg-bar__wishlistIcn utils pll">
                        <a class="js-seg-bar__wishlist seg-bar__wishlist icon_favourites" href="/customer/wishlist/?from=header">
                            <i class="fa fa-heart"></i> <div class="seg-bar__wl-count js-seg-bar__wl-count"></div>
                        </a>
                        <div class="wl-info__popup b-header-shadow" style="display:none">
                            <div class="wl-info__head pal pas txtUpper fontsizeM">
                                You have <text class="js-seg-bar__wl-count b-header__text-selected"></text> item(s) in your wishlist                        </div>
                        </div>
                    </li>
                    <!--MINI CART START-->
                    <li class="utils pll js-headBag" id="shoppingBagBlock">
                        <a class="js-seg-bar__cart icon_bag" href="/cart/?from=header">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            <div class="seg-bar__mini-cart-count js-seg-bar__mini-cart-count" id="shopping-bag-qty"></div>
                        </a>
                        <div class="minicart__popup js-shoppingBag txtLeft b-header-shadow" style="display:none">
                            <div class="minicart__head pal pts txtUpper txtLeft fontsizeM">
                                My Bag <text class="js-seg-bar__mini-cart-count-dropdown">0</text> Item    </div>
                            <div id="js-minicart-message-content">
                            </div>
                        </div>
                    </li>
                    <!--MINI CART END-->
                </ul>
            </div>
        </div>
    </div> {{--/segment--}}

    {{--category--}}
    <div class="category__wrapper">
        <div class="wrapper container">
            <style>
                .hr-line {
                    width: 160px;
                    display: block;
                    margin-top: 10px;
                    margin-bottom: 10px;
                    border-top: 1px solid #dfdfdf;
                }
            </style>
            <ul class="category">
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        NEWIN
                    </a>
                    <div class="category__item-mega" style="display: none">
                        <div class="category__item-mega-wapper wrapper">
                            <div class="category__item-mega-box">
                                <ul>
                                    <li class="category__item_mega-group-title">
                                        <a href="/men/premium/?from=header">
                                            Men's Clothing
                                        </a>
                                        <span class="hr-line"></span>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            T-Shirts
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Shirts
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Polos
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Pants
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Shorts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="category__item-mega-box">
                                <ul>
                                    <li class="category__item_mega-group-title">
                                        <a href="/men/premium/?from=header">
                                            Top Brands
                                        </a>
                                        <span class="hr-line"></span>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            T-Shirts
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Shirts
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Polos
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Pants
                                        </a>
                                    </li>
                                    <li class="category__item_mega-group">
                                        <a href="/men/premium/?from=header">
                                            Shorts
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        PREMIUM
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        CLOTHING
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        SHOES
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        BAGS
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        SPORTS
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        BEAUTY
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        BRANDS
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        MODEST WEAR
                    </a>
                </li>
                <li class="category__item" data-value="premium">
                    <a class="category__item-link" href="/men/premium/?from=header">
                        STYLE ADVISOR
                    </a>
                </li>
            </ul>
        </div>
    </div> {{--/category--}}

</header>