@extends('shop::layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/shop.css') }}">
@stop
@section('content')
    <main>
        <section class="main__section mt-5" id="best-seller">
            <div class="section-wapper container wrapper">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h3 class="text-center">BÁN CHẠY NHẤT</h3>
                    </div>
                </div>
                <div class="row">
                    @for($i =0 ; $i < 4; $i ++)
                        <div class="col-md-3">
                            <div class="item text-center">
                                <img src="https://dynamic.zacdn.com/J8VVNUGfkf0GRPzqHy-zEJ1SO3s=/fit-in/224x327/filters:quality(95):fill(ffffff)/http://static.sg.zalora.net/p/cotton-on-4048-978088-1.jpg" alt="">
                                <div class="item-brand mt-2">
                                    <strong>Nixon Kimono</strong>
                                </div>
                                <div class="item-name">
                                    Nixon Kimono
                                </div>
                                <div class="item-meta">
                                    <div class="item-price price-old">
                                        <del class="text-muted">S$ 34.95</del>
                                    </div>
                                    <div class="item-price price-new">
                                        S$ 34.95
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <div class="col-md-12 text-center mt-5">
                        <a href="" class="btn btn-outline-dark btn-dark-hover-custome no-radius">Xem thêm sản phẩm bán chạy</a>
                    </div>
                </div>
            </div>
            <div class="mb-5"></div>
        </section>

        <section class="main__section mt-5" id="top-brand">
            <div class="section-wapper container wrapper">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h3 class="text-center">HOT NHẤT TUẦN</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 pr-2">
                        <div class="brand">
                            <div class="brand-thumb">
                                <img src="https://static-sg.zacdn.com/cms/DY/Oct18/GUESS-OCT18-M-N1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="brand-info">
                                <p class="font-weight-bold mb-1">GUEST</p>
                                <p class="mb-2 brand-desc">
                                    Unapologetically bold and exuding rugged Americana style.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 pl-2">
                        <div class="brand">
                            <div class="brand-thumb">
                                <img src="https://static-sg.zacdn.com/cms/DY/Oct18/TEESANDSHIRTSUPTO60OFF-OCT18-M-N2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="brand-info" style="right: 0">
                                <p class="font-weight-bold mb-1">GUEST</p>
                                <p class="mb-2 brand-desc">
                                    Unapologetically bold and exuding rugged Americana style.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 pr-2">
                        <div class="brand">
                            <div class="brand-thumb">
                                <img src="https://static-sg.zacdn.com/cms/DY/Oct18/STREETWEARUPTO60OFF-OCT18-M-N2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="brand-info">
                                <p class="font-weight-bold mb-1">GUEST</p>
                                <p class="mb-2 brand-desc">
                                    Unapologetically bold and exuding rugged Americana style.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pl-2">
                        <div class="brand">
                            <div class="brand-thumb">
                                <img src="https://static-sg.zacdn.com/cms/DY/Oct18/BOTTOMSUPTO60OFF-OCT18-M-N1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="brand-info">
                                <p class="font-weight-bold mb-1">GUEST</p>
                                <p class="mb-2 brand-desc">
                                    Unapologetically bold and exuding rugged Americana style.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="main__section mt-5" id="top-brand">
            <div class="section-wapper container wrapper">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h3 class="text-center">MỚI NHẤT DÀNH CHO BẠN</h3>
                    </div>
                </div>
                <div class="row">
                    @for($i =0 ; $i < 4; $i ++)
                        <div class="col-md-3">
                            <div class="item text-center">
                                <img src="https://dynamic.zacdn.com/J8VVNUGfkf0GRPzqHy-zEJ1SO3s=/fit-in/224x327/filters:quality(95):fill(ffffff)/http://static.sg.zalora.net/p/cotton-on-4048-978088-1.jpg" alt="">
                                <div class="item-brand mt-2">
                                    <strong>Nixon Kimono</strong>
                                </div>
                                <div class="item-name">
                                    Nixon Kimono
                                </div>
                                <div class="item-meta">
                                    <div class="item-price price-old">
                                        <del class="text-muted">S$ 34.95</del>
                                    </div>
                                    <div class="item-price price-new">
                                        S$ 34.95
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <div class="col-md-12 text-center mt-5">
                        <a href="" class="btn btn-outline-dark btn-dark-hover-custome no-radius">Xem thêm sản phẩm bán chạy</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" style="margin-top: 200px">
            <div class="container">
                <h4>SHOP ONLINE FOR THE LATEST IN MEN’S FASHION</h4>
                <p>
                    ZALORA is at the forefront of men’s fashion trends, carrying thousands of items ranging from t-shirts , baju melayu moden to jeans, sneakers to formal shoes and wallets to belts. We have the latest designer labels and high street brands, covering a broad spectrum of styles from modern minimalist, polished professional to weekend casual, and more. Our comprehensive selection covers you from top to bottom, meaning you can find shirts in classic and contemporary styles, pants of every size and colour, jumpers for all types of weather, and even sports lifestyle gear such as performance wear, running shoes and training gear.
                </p>
                <p>
                    Besides apparel, we also stock a plethora of accessories for the discerning shopper. Need to know the time? We have all kinds of watches, from cutting-edge smart watches to luxury and classic timepieces. Our collection of bags start from basic backpacks to work-ready laptop cases and even heavy-duty travel luggages. ZALORA also caters to men’s grooming needs, carefully sourcing skin and hair care products from the globe, as well as shaving needs and fragrances. Men’s eyewear are also readily available and shoppers can choose from a host of trendy sunglasses or functional glasses.
                </p>
                <p>
                    If you’re a man who’s intent on making the best impression through your sophisticated style, you won’t want to miss out on all that ZALORA has in store for you.
                </p>
            </div>
        </section>


        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h6 class="font-weight-bold">TOP BRANDS</h6>
                        <div class="item-recommendation">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h6 class="font-weight-bold">TOP SEARCHES</h6>
                        <div class="item-recommendation">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="nav flex-column">
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/abercrombie-fitch" title="Abercrombie &amp; Fitch">
                                                Abercrombie &amp; Fitch                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/adidas" title="adidas">
                                                adidas                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/aldo" title="ALDO">
                                                ALDO                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/birkenstock" title="Birkenstock">
                                                Birkenstock                                            </a>
                                        </li>
                                        <li>
                                            <a class="b-footer__topSearches--item" href="/converse" title="Converse">
                                                Converse                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop
