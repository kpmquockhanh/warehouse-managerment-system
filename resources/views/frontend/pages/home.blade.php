@extends('frontend.layouts.app')
@section('main-content')
    @include('frontend.components.banner')

    @include('frontend.components.categories')

    @include('frontend.components.flash_sale')

    @include('frontend.components.flash_sale_featured')
    <!-- end product  -->

    <!-- coupon -->
    @include('frontend.components.coupon')
    <!-- end coupon  -->

    <!-- Goc cua me  -->
    <article class="flash-sale row text-center">
        <div class="col-md-12 mx-0 px-0">
            <h2 class="title text-uppercase flash-sale-product">Góc của mẹ</h2>
            <div class="goc-cua-me-box">
                <div class="row m-0 p-0">
                    <div class="col-md-6 m-0 goc-cua-me-left">
                        <img src={{ asset('assets/frontend/images/goc-cua-me-banner.png') }} class="w-100" alt="">
                    </div>
                    <div class="col-md-6 m-0 justify-content-center align-self-center goc-cua-me-right">
                        <h6 class="color-grey product-title">Praesent ipsum nunc, suscipit quis</h6>
                        <p class="product-des">Nam finibus lectus non nisl vestibulum congue.<br>
                            Pellentesque lectus magna, tincidunt id fringilla ut, tincidunt id mauris. </p>
                        <a href="#" class="color-master text-uppercase"><u>Xem Thêm</u></a>
                    </div>
                    <div class="col-md-4 gcm-chil">
                        <div>
                            <img src={{ asset('assets/frontend/images/an-dam.png') }} class="w-100" alt="">
                            <span class="gcm-m">ăn dặm</span>
                        </div>
                    </div>
                    <div class="col-md-4 gcm-chil">
                        <div>
                            <img src={{ asset('assets/frontend/images/cho-be-ngu.png') }} class="w-100" alt="">
                            <span class=" gcm-m">cho <br>bé ngủ</span>
                        </div>
                    </div>
                    <div class="col-md-4 gcm-chil">
                        <div>
                            <img src={{ asset('assets/frontend/images/cho-be-bu.png') }} class="w-100" alt="">
                            <span class="gcm-m">cho <br>bé bú</span>
                        </div>

                    </div>
                </div>
                <h4 class="htlm-title color-grey">Hành trình làm mẹ</h4>
                <div class="htlm-box row p-0 m-0">
                    <div class="col-md-12 row m-0 p-0">
                        <table class="w-100 table-travel-morther">
                            <tr>
                                <td class="htlm-child col-2 mx-0 px-0">
                                    <img src={{ asset('assets/frontend/images/icons/thu-thai.png') }} alt="">
                                </td>
                                <td class="htlm-child col-2 mx-0 px-0">
                                    <img src={{ asset('assets/frontend/images/icons/mang-thai.png') }} alt="">
                                </td>
                                <td class="htlm-child col-2 mx-0 px-0">
                                    <img class="" src={{ asset('assets/frontend/images/icons/sinh-sau-sinh.png') }} alt="">
                                </td>
                                <td class="htlm-child col-2 mx-0 px-0">
                                    <img class="" src={{ asset('assets/frontend/images/icons/0-12-thang.png') }} alt="">
                                </td>
                                <td class="htlm-child col-2 mx-0 px-0">
                                    <img class="" src={{ asset('assets/frontend/images/icons/be_1_3_tuoi.png') }} alt="">
                                </td>
                                <td class="htlm-child col-2 mx-0 px-0">
                                    <img class="" src={{ asset('assets/frontend/images/icons/be_tren_3_tuoi.png') }} alt="">
                                </td>
                            </tr>

                            <tr>
                                <td><p>Mang Thai</p></td>
                                <td>
                                    <p>Thụ Thai</p>
                                </td>
                                <td><p>Sinh <br>& Sau sinh</p></td>
                                <td>
                                    <p>Bé 0-12 tháng</p>
                                </td>
                                <td>
                                    <p>Bé 1-3 tuổi</p>
                                </td>
                                <td>
                                    <p>Bé trên <br>3 tuổi</p>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- End Goc cua me  -->

    <!-- Đổi quà -->
    <article class="flash-sale text-center">
        <h2 class="title text-uppercase flash-sale-title">Đổi quà
        </h2>
        <div class="col-md-12 row product-box block-change-reward " >
            <div class="col-md-6 p-0 m-0">
                <img src={{ asset('assets/frontend/images/doi-qua.png') }} class="product-img" alt="">
            </div>
            <div class="col-md-6 m-0 p-0 product-right">
                <div id="gift-slider" class="splide" data-splice="">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev btn-slider-left" hidden>
                        </button>
                        <button class="splide__arrow splide__arrow--next btn-slider-right" hidden>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide justify-content-center align-self-center" >
                                <h6 class="product-title">Khăn ướt Mamamy</h6>
                                <p class="product-des">Nam finibus lectus non nisl vestibulum congue. Pellentesque lectus magna, tincidunt id fringilla ut, tincidunt id mauris. </p>
                                <a href="#" class="text-uppercase product-more">XEM THÊM</a>
                            </li>
                            <li class="splide__slide justify-content-center align-self-center" >
                                <h6 class="product-title">Khăn ướt Mamamy</h6>
                                <p class="product-des">Nam finibus lectus non nisl vestibulum congue. Pellentesque lectus magna, tincidunt id fringilla ut, tincidunt id mauris. </p>
                                <a href="#" class="text-uppercase product-more">XEM THÊM</a>
                            </li>
                            <li class="splide__slide justify-content-center align-self-center" >
                                <h6 class="product-title">Khăn ướt Mamamy</h6>
                                <p class="product-des">Nam finibus lectus non nisl vestibulum congue. Pellentesque lectus magna, tincidunt id fringilla ut, tincidunt id mauris. </p>
                                <a href="#" class="text-uppercase product-more">XEM THÊM</a>
                            </li>
                            <li class="splide__slide justify-content-center align-self-center" >
                                <h6 class="product-title">Khăn ướt Mamamy</h6>
                                <p class="product-des">Nam finibus lectus non nisl vestibulum congue. Pellentesque lectus magna, tincidunt id fringilla ut, tincidunt id mauris. </p>
                                <a href="#" class="text-uppercase product-more">XEM THÊM</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center rate-box">
            <div class="col-md-4">
                <div style="background-image:url({{ asset('assets/frontend/images/avatar1.png') }});" class="avatar">
                </div>
                <p class="username-rate">Liên Trần</p>
                <p class="comment-rate">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Cras ut enim condimentum, sodales massa eu, scelerisque velit.
                    Aenean id bibendum felis. Nulla erat elit, blandit at sem in, sodales mattis massa. Integer nec est urna.
                </p>
            </div>
            <div class="col-md-4">
                <div style="background-image:url({{ asset('assets/frontend/images/avatar2.png') }});" class="avatar">
                </div>
                <p class="username-rate">Hạnh Nguyễn</p>
                <p class="comment-rate">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Cras ut enim condimentum, sodales massa eu, scelerisque velit.
                    Aenean id bibendum felis. Nulla erat elit, blandit at sem in, sodales mattis massa. Integer nec est urna.
                </p>
            </div>
            <div class="col-md-4">
                <div style="background-image:url({{ asset('assets/frontend/images/avatar3.png') }});" class="avatar">
                </div>
                <p class="username-rate">Thu Hiền</p>
                <p class="comment-rate">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Cras ut enim condimentum, sodales massa eu, scelerisque velit.
                    Aenean id bibendum felis. Nulla erat elit, blandit at sem in, sodales mattis massa. Integer nec est urna.
                </p>
            </div>
        </div>
    </article>
    <!-- End Đổi quà -->

    <article class="flash-sale">
        <div class="block-service row mx-0 px-0 text-center">
            <div class="col-md-4">
                <div class="service">
                    <img src={{ asset('assets/frontend/images/free-ship.png') }} alt="">
                </div>

                <p class="service-des">Freeship toàn quốc</p>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <img src={{ asset('assets/frontend/images/doi-tra-hang-mien-phi.png') }} alt="">
                </div>

                <p class="service-des">Đổi trả hàng miễn phí</p>
            </div>
            <div class="col-md-4">
                <div class="service">
                    <img src={{ asset('assets/frontend/images/mien-phi-dung-thu.png') }}  alt="">
                </div>
                <p class="service-des">Miễn phí dùng thử</p>
            </div>
        </div>
    </article>

    <!-- lien he  -->
    <article class="flash-sale">
        <div class="row mx-0 px-0 product-box">
            <div class="col-md-6 mx-0 px-0">
                <img src={{ asset('assets/frontend/images/banner-contact.png') }} class="w-100" alt="">
            </div>
            <div class="col-md-6 text-center justify-content-center align-self-center">
                <p class="title-register">Đăng ký ngay</p>
                <p class="register-to">Để nhận nhiều ưu đãi từ Mamamy</p>

                <a class="register-block register-fb">
                    <span class="register-button-img"><img src={{ asset('assets/frontend/images/icons/fb-contact.png') }} class="" alt=""></span>
                    <span class="register-button-text">Đăng ký bằng Facebook</span>
                </a>

                <a class="register-block register-zl">
                    <span class="register-button-img"><img src={{ asset('assets/frontend/images/icons/zalo-contact.png') }} class="" alt=""></span>
                    <span class="register-button-text">Đăng ký bằng Zalo</span>
                </a>

                <p class="register-or">hoặc</p>

                <a class="register-block form-email">
                    <span class="register-button-img"><img src={{ asset('assets/frontend/images/icons/email-contact.png') }} alt=""></span>
                    <span class="register-button-text"><input type="text" class="" placeholder="Email"></span>
                </a>

                <a class="register-block form-phone">
                    <span class="register-button-img"><img src={{ asset('assets/frontend/images/icons/phone-contact.png') }} alt=""></span>
                    <span class="register-button-text"><input type="text" class="" placeholder="Số điện thoại"></span>
                </a>

                <button class="register-now">Đăng ký ngay</button>
                <!-- <div ></div> 3690d9 -->
            </div>
        </div>
    </article>
    <!-- end lien he  -->
@endsection

@section('scripts')
    <script>
        document.addEventListener( 'DOMContentLoaded', function () {
            let item = 5;
            c = document.querySelector('#card-slider');
            if( c )
                new Splide( '#card-slider', {
                    perPage    : item,
                    breakpoints: {
                        300: {
                            perPage: 1,
                        }
                    },
                    autoplay: true,
                    type: 'loop',
                    classes: {
                        arrows: 'splide__arrows your-class-arrows',
                        arrow : 'splide__arrow your-class-arrow',
                        prev  : 'splide__arrow--prev your-class-prev',
                        next  : 'splide__arrow--next your-class-next',
                    },
                    lazyload: 'loaded',
                    interval: 3000,
                    pagination: false,
                    // autoWidth: true
                } ).mount();

            c = document.querySelector('#product-slider');
            if( c )
                new Splide( '#product-slider', {
                    perPage    : 1,
                    breakpoints: {
                        300: {
                            perPage: 1,
                        }
                    },
                    autoplay: true,
                    type: 'loop',
                    classes: {
                        arrows: 'splide__arrows your-class-arrows',
                        arrow : 'splide__arrow your-class-arrow',
                        prev  : 'splide__arrow--prev your-class-prev',
                        next  : 'splide__arrow--next your-class-next',
                    },
                    lazyload: 'loaded',
                    interval: 3000,
                    // autoWidth: true
                } ).mount();

            // Slide for coupon
            c = document.querySelector('#coupon-slider');
            if( c )
                new Splide( '#coupon-slider', {
                    perPage    : item,
                    breakpoints: {
                        300: {
                            perPage: 1,
                        }
                    },
                    autoplay: true,
                    type: 'loop',
                    classes: {
                        arrows: 'splide__arrows your-class-arrows',
                        arrow : 'splide__arrow your-class-arrow',
                        prev  : 'splide__arrow--prev your-class-prev',
                        next  : 'splide__arrow--next your-class-next',
                    },
                    lazyload: 'loaded',
                    interval: 3000,
                    pagination: false,
                    // autoWidth: true
                } ).mount();

            c = document.querySelector('#gift-slider');
            if( c )
                new Splide( '#gift-slider', {
                    perPage    : 1,
                    breakpoints: {
                        300: {
                            perPage: 1,
                        }
                    },
                    autoplay: true,
                    type: 'loop',
                    classes: {
                        arrows: 'splide__arrows your-class-arrows',
                        arrow : 'splide__arrow your-class-arrow',
                        prev  : 'splide__arrow--prev your-class-prev',
                        next  : 'splide__arrow--next your-class-next',
                    },
                    lazyload: 'loaded',
                    interval: 3000,
                    // autoWidth: true
                } ).mount();

        } );
    </script>
@endsection
