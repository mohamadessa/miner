@extends('layouts.web')

@section('content')
    <!-- hero section start  -->
    <section class="hero hero-two pos-rel pt-120 mb-160">
        <div class="hero-img" data-background="{{ asset('assets/web/assets/img/bg/hero-bg2.png') }}"></div>
        <div class="hero-shape-two">
            <div class="shape--1">
                <img class="topToBottom" src="{{ asset('assets/web/assets/img/shape/hero-sp_07.svg') }}" alt="">
            </div>
            <div class="shape--2">
                <img class="leftToRight" src="{{ asset('assets/web/assets/img/shape/hero-sp_08.svg') }}" alt="">
            </div>
        </div>
        {{-- <div class="xb-hero-shape">
            <div class="shape shape--1">
                <img class="rotateme2" src="{{ asset('assets/web/assets/img/shape/h_shape1.png') }}" alt="">
            </div>
            <div class="shape shape--2">
                <img class="rotateme" src="{{ asset('assets/web/assets/img/shape/h_shape2.png') }}" alt="">
            </div>
            <div class="shape shape--3">
                <img src="{{ asset('assets/web/assets/img/shape/h_shape3.png') }}" alt="">
            </div>
            <div class="shape shape--4"></div>
        </div> --}}
        <div class="container pos-rel">
            <div class="hero__content-wrap hero-style-two text-center">
                <div class="section-title hero--sec-titlt-two wow fadeInUp" data-wow-duration=".7s">
                    <h2 class="title">Learn, Earn, Understand and get your <br> <span>Equipment</span>All from the same
                        place!</h2>
                </div>
                {{-- <p class="xb-item--content wow fadeInUp" data-wow-duration=".7s" data-wow-delay="150ms">
                    Welcome to our trusted Cryco crypto exchange. Security is paramount. Trade with confidence.
                </p> --}}
                <div class="hero__btn btns pt-60 wow fadeInUp" data-wow-duration=".7s" data-wow-delay="250ms">
                    <a class="them-btn" href="contact.html">
                        <span class="btn_label" data-text="Get Started">Get Started</span>
                        <span class="btn_icon">
                            <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.434 0.999999C14.434 0.447714 13.9862 -8.61581e-07 13.434 -1.11446e-06L4.43396 -3.13672e-07C3.88168 -6.50847e-07 3.43396 0.447715 3.43396 0.999999C3.43396 1.55228 3.88168 2 4.43396 2L12.434 2L12.434 10C12.434 10.5523 12.8817 11 13.434 11C13.9862 11 14.434 10.5523 14.434 10L14.434 0.999999ZM2.14107 13.7071L14.1411 1.70711L12.7269 0.292893L0.726853 12.2929L2.14107 13.7071Z"
                                    fill="white"></path>
                            </svg>
                        </span>
                    </a>

                </div>
            </div>
        </div>

    </section>
    <!-- hero section end  -->



    <!-- feature section start -->
    <section class="feature z-1 pos-rel pt-110">
        <div class="container">
            <div class="section-title pb-100">
                <h1 class="title">what We Provide</h1>
            </div>
            <div class="row mt-none-30">
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('assets/web/assets/img/feature/feature-icon1.png') }}" alt="">
                            </div>
                            <h2 class="xb-item--title">Operational Metrics</h2>
                            <p class="xb-item--content">According to your budget, and your desired ASIC miner
                                you will get an approximate estimate of your future potential revunue</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature top-border pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('assets/web/assets/img/feature/feature-icon2.png') }}" alt="">
                            </div>
                            <h2 class="xb-item--title">Educational Resources</h2>
                            <p class="xb-item--content">YYou will get recommended sources of education where you can learn
                                more about your desired ASIC miners and how they work !</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('assets/web/assets/img/feature/feature-icon3.png') }}" alt="">
                            </div>
                            <h2 class="xb-item--title">Vendors <br> <span>List</span> </h2>
                            <p class="xb-item--content">At the end you will get a list of recommended reputable vendors
                                where you could get your equipment/miners from !</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 feature-col mt-30">
                    <div class="xb-feature top-border pos-rel">
                        <div class="xb-item--holder text-center">
                            <div class="xb-item--img">
                                <img src="{{ asset('assets/web/assets/img/feature/feature-icon1.png') }}" alt="">
                            </div>
                            <h2 class="xb-item--title">Miners recommendation</h2>
                            <p class="xb-item--content">According to your budget, we will tailor the perfect and most
                                suitable miners for you that can make you the most revenue !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="xb-feature-shape">
            <div class="shape shape--1">
                <img src="{{ asset('assets/web/assets/img/shape/h_shape3.png') }}" alt="">
            </div>
            <div class="shape shape--2">
                <img data-parallax='{"y":-70}' src="{{ asset('assets/web/assets/img/shape/f_line_shape.png') }}"
                    alt="">
            </div>
        </div> --}}
    </section>
    <!-- feature section end -->


    <!-- currrency section start -->
    {{-- <section class="currency z-1 pos-rel pt-125 pb-130">
        <div class="container">
            <div class="section-title pb-50 text-center">
                <h1 class="title">exchange any of <br> Bitcoin pairs</h1>
            </div>
            <div class="xb-currency">
                <div class="xb-item--title ul_li">
                    <span>Name</span>
                    <span>Price</span>
                    <span>24h Change</span>
                    <span>Chart</span>
                    <span>Buy</span>
                </div>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image"><img src="{{ asset('web/assets/img/currency/curr-icon01.png') }}"
                                alt=""></span>
                        <span class="xb-item--color-white">Bitcoin</span>
                        <span>BTC</span>
                    </li>
                    <li>36,201.34</li>
                    <li>+1.71%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape01.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-two"><img
                                src="{{ asset('web/assets/img/currency/curr-icon02.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Ethereum</span>
                        <span>ETH</span>
                    </li>
                    <li>$2,605.95</li>
                    <li>+2.04%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape02.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-three"><img
                                src="{{ asset('web/assets/img/currency/curr-icon03.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Tether</span>
                        <span>USDT</span>
                    </li>
                    <li>$939.20</li>
                    <li>-0.74%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape03.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-four"><img
                                src="{{ asset('web/assets/img/currency/curr-icon04.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Ripple</span>
                        <span>XRP</span>
                    </li>
                    <li>$1.02</li>
                    <li>+1.20%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape04.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
                <ul class="xb-item--item ul_li">
                    <li class="xb-item--curr-name d-flex align-items-center">
                        <span class="xb-item--image img-five"><img
                                src="{{ asset('web/assets/img/currency/curr-icon05.png') }}" alt=""></span>
                        <span class="xb-item--color-white">Chainlink</span>
                        <span>LINK</span>
                    </li>
                    <li>$30.56</li>
                    <li>-3.84%</li>
                    <li><img src="{{ asset('web/assets/img/currency/chart-shape05.png') }}" alt="">
                    </li>
                    <li><a class="them-btn xb-item--curr-btn" href="#!">Buy Now</a></li>
                </ul>
            </div>
        </div>
        <div class="currency-shape">
            <img src="{{ asset('web/assets/img/currency/currency-shape.png') }}" alt="">
            <img src="{{ asset('web/assets/img/currency/currency-shape.png') }}" alt="">
        </div>
    </section> --}}
    <!-- currrency section end -->

    <!-- testimonial section start-->
    <section class="testimonial pos-rel z-1 pt-115 ">
        <div class="testimonial-two pt-115 pb-130">
            <div class="tes-shape">
                <div class="shape shape--2">
                    <img class="topToBottom2" src="{{ asset('assets/web/assets/img/shape/tes-shape03.svg') }}"
                        alt="">
                </div>
                <div class="shape shape--3">
                    <img class="topToBottom" src="{{ asset('assets/web/assets/img/shape/tes-shape03.svg') }}"
                        alt="">
                </div>
                <div class="shape shape--4">
                    <img src="{{ asset('assets/web/assets/img/shape/it_shape1.png') }}" alt="">
                </div>
                <div class="shape shape--5">
                    <img src="{{ asset('assets/web/assets/img/shape/it_shape1.png') }}" alt="">
                </div>
            </div>
            <div class="container">
                <div class="section-title pb-55">
                    <h1 class="title">what clients says</h1>
                </div>
                {{-- <div class="xb-review ul_li_between">
                    <div class="xb-item--holder ul_li">
                        <div class="xb-item--img">
                            <img src="{{ asset('assets/web/assets/img/testimonial/tes-icon01.png') }}" alt="">
                        </div>
                        <div class="xb-item--review">
                            <div class="xb-item--star">
                                <img src="{{ asset('assets/web/assets/img/testimonial/review01.png') }}" alt="">
                                <span>5.0</span>
                            </div>
                            <span>26 REVIEWS </span>
                        </div>
                    </div>
                    <div class="xb-item--holder ul_li">
                        <div class="xb-item--img">
                            <img src="{{ asset('assets/web/assets/img/testimonial/tes-icon02.png') }}" alt="">
                        </div>
                        <div class="xb-item--review">
                            <div class="xb-item--star">
                                <img src="{{ asset('assets/web/assets/img/testimonial/review02.png') }}" alt="">
                                <span>4.8</span>
                            </div>
                            <span>15 REVIEWS </span>
                        </div>
                    </div>
                    <div class="xb-item--holder ul_li">
                        <div class="xb-item--img">
                            <img src="{{ asset('assets/web/assets/img/testimonial/tes-icon03.png') }}" alt="">
                        </div>
                        <div class="xb-item--review">
                            <div class="xb-item--star">
                                <img src="{{ asset('assets/web/assets/img/testimonial/review01.png') }}" alt="">
                                <span>5.0</span>
                            </div>
                            <span>22 REVIEWS </span>
                        </div>
                    </div>
                </div> --}}
                <div class="xb-testimonial-wrap">
                    <div class="xb-testimonial-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide ul_li">
                                <div class="xb-item--author text-center">
                                    <div class="xb-item--avater">
                                        <img src="{{ asset('assets/web/assets/img/testimonial/testimonial.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--nationality align-items-center">
                                            <img src="{{ asset('assets/web/assets/img/testimonial/tes-flag.png') }}"
                                                alt="">
                                            <span>Denmark</span>
                                        </div>
                                        <h3 class="xb-item--title">Reynolds Anthony</h3>
                                        <span class="xb-item--sub-title">Cryptocurrency Trader</span>
                                    </div>
                                </div>
                                <div class="xb-item--content">
                                    <p>
                                        "Since I switched to this crypto exchange, my trading experience has been nothing
                                        short of exceptional. The platform's intuitive interface combined with
                                        lightning-fast transaction speeds has significantly enhanced my ability to execute
                                        trades effectively.."
                                    </p>
                                    <div class="xb-item--reating ul_li">
                                        <img src="{{ asset('assets/web/assets/img/testimonial/tes-clint-logo.png') }}"
                                            alt="">
                                        <span>5.0</span>
                                        <img src="assets/img/testimonial/review01.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide ul_li">
                                <div class="xb-item--author text-center">
                                    <div class="xb-item--avater">
                                        <img src="{{ asset('assets/web/assets/img/testimonial/testimonial.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="xb-item--holder">
                                        <div class="xb-item--nationality align-items-center">
                                            <img src="{{ asset('assets/web/assets/img/testimonial/tes-flag.png') }}"
                                                alt="">
                                            <span>Denmark</span>
                                        </div>
                                        <h3 class="xb-item--title">Reynolds Anthony</h3>
                                        <span class="xb-item--sub-title">Cryptocurrency Trader</span>
                                    </div>
                                </div>
                                <div class="xb-item--content">
                                    <p>
                                        "Since I switched to this crypto exchange, my trading experience has been nothing
                                        short of exceptional. The platform's intuitive interface combined with
                                        lightning-fast transaction speeds has significantly enhanced my ability to execute
                                        trades effectively.."
                                    </p>
                                    <div class="xb-item--reating ul_li">
                                        <img src="{{ asset('assets/web/assets/img/testimonial/tes-clint-logo.png') }}"
                                            alt="">
                                        <span>5.0</span>
                                        <img src="{{ asset('assets/web/assets/img/testimonial/review01.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- testimonial section end-->

    <!-- faq start Frequently Asked Questions -->

    <section class="faq pos-rel mt-130 pb-5">
        <div class="faq-shape_two">
            <img src="{{ asset('assets/web/assets/img/shape/faq-shape01.svg') }}" alt="">
            <img src="{{ asset('assets/web/assets/img/shape/faq-shape01.svg') }}" alt="">
            <img class="topToBottom" src="{{ asset('assets/web/assets/img/shape/faq-shape02.svg') }}" alt="">
            <img class="topToBottom2" src="{{ asset('assets/web/assets/img/shape/faq-shape02.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="section-title pb-55">
                <h1 class="title">Frequently Asked Questions</h1>
            </div>
            <div class="faq__blockchain-two">
                <ul class="accordion_box clearfix">
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q1:</span> What is cryptocurrency mining and why is it important?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <ul class="list-item">

                                        Cryptocurrency mining is the process of using specialized hardware to solve
                                        complex mathematical problems that validate and secure transactions on a
                                        blockchain network. This not only introduces new coins into circulation but also
                                        ensures the integrity of the blockchain by preventing fraudulent activities like
                                        double-spending. Mining is important because it maintains the decentralized
                                        nature of cryptocurrencies, enabling a transparent and secure financial system
                                        without the need for central authorities.

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block active-block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q2:</span>How can I start cryptocurrency mining?
                            </div>
                            <div class="acc_body current">
                                <div class="content">
                                    <ul class="list-item">

                                        To begin cryptocurrency mining, you'll need specialized hardware like ASIC miners
                                        for Bitcoin, along with mining software and a secure digital wallet to store your
                                        earnings. Access to affordable electricity and a stable internet connection is
                                        essential for efficient mining operations. We can help you purchase the necessary
                                        equipment and provide the education you need to start your mining journey
                                        successfully.

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q3:</span>Can I mine other cryptocurrencies besides BTC?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <ul class="list-item">

                                        While it is possible to mine other cryptocurrencies, we do not recommend mining
                                        anything other than Bitcoin (BTC). Bitcoin is the most established and stable
                                        cryptocurrency, offering a proven track record and widespread acceptance. Focusing
                                        on Bitcoin mining provides greater security and long-term potential compared to
                                        mining other cryptocurrencies.

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q4:</span>Is cryptocurrency mining allowed?
                            </div>
                            <div class="acc_body">
                                <div class="content">We are not in a position to provide legal advice on this matter, and
                                    we strongly recommend that you consult with relevant legal authorities or professionals
                                    in your jurisdiction to obtain accurate information.

                                    <ul class="list-item">
                                        <p> In many countries, there are no specific laws that prohibit cryptocurrency
                                            mining, making it generally permissible. However, regulations can vary widely
                                            depending on the country or even local jurisdictions within a country. It's
                                            important to research and understand the legal framework in your specific area
                                            before engaging in mining activities.
                                        </p>
                                        <p>
                                            It's also crucial to note that mining cryptocurrencies at workplaces without
                                            explicit permission is illegal and unethical. Utilizing company resources—such
                                            as electricity, hardware, or internet bandwidth—for personal mining activities
                                            without authorization can lead to serious legal consequences, including charges
                                            of theft or fraud. Additionally, attempting to write off the electricity used
                                            for unauthorized mining as a business expense on taxes is illegal and can result
                                            in penalties or prosecution for tax fraud.
                                        </p>

                                    </ul>
                                    We strongly advise you to seek guidance from legal professionals or appropriate
                                    authorities to ensure that your cryptocurrency mining activities comply with all
                                    applicable laws and regulations.
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="accordion block">
                        <div class="accordion-inner">
                            <div class="acc-btn">
                                <span>Q5:</span>What are the costs involved in cryptocurrency mining?
                            </div>
                            <div class="acc_body">
                                <div class="content">
                                    <ul class="list-item">
                                        Cryptocurrency mining requires an initial investment in specialized hardware, such
                                        as ASIC miners for Bitcoin. These devices can be expensive, with prices varying
                                        based on their performance and energy efficiency. In addition to hardware costs, you
                                        need to consider ongoing expenses like electricity consumption, which can be
                                        significant due to the high power requirements of mining equipment. Other costs
                                        include cooling systems to prevent overheating. We can assist you in understanding
                                        these costs and provide guidance on purchasing equipment.
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- faq end  Frequently Asked Questions -->
@endsection
