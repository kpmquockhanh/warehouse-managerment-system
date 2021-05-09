@extends('frontend.layouts.app')

@section('main-content')
    @include('frontend.components.breadcrumb')

    <!-- banner -->
    <article class="banner-home">
        <div class="banner-home-left">
            <div class="banner-home-left-text">
                <h3>MAMAMY STORY</h3>
                <p>Hệ sản phẩm Mamamy - Baby good goods với các sản phẩm có công năng vượt trội và thành phần mới nhất, an toàn cho cả trẻ sơ sinh, chú trọng sử dụng các thành phần thiên nhiên - xu hướng của thế giới để luôn là thương hiệu lựa chọn đầu tiên của mẹ cho bé.</p>
            </div>
        </div>
        <div class="banner-home-right">
            <div class="banner-home-right-img">
                <img src={{ asset('assets/frontend/images/story/banner_story.jpg') }}>
            </div>
        </div>
    </article>

    <article class=" text-center m-0 p-0">
        <div class="col-md-12 row  block-story-slogan text-left m-0 p-0" >
            <div class="col-md-6 m-0 p-0 block-story-slogan-left">
                <div class="block-story-slogan-text text-left">
                    <h3>Sứ mạng & tôn chỉ   </h3>
                    <p>Ra đời vào năm 2007 – cách đây hơn 10 năm, Mamamy với sứ mạng:<br>
                        <strong>“Tạo ra những sản phẩm an toàn, chăm sóc trẻ em tốt nhất”</strong></p>

                    <p>Chúng tôi đã luôn rất khắt khe trong việc lựa chọn các thành phần tạo nên sản phẩm. Đối với sản phẩm chăm sóc trẻ em, mối quan tâm lớn nhất là sự an toàn. Để đảm bảo các sản phẩm 100% an toàn, chúng tôi đã
                        đưa ra tôn chỉ:<br>
                        <strong>“Không sử dụng những thành phần đã bị cấm sử dụng tại các nước tiên tiến trên thế giới – do có khả năng không tốt cho sức khỏe”</strong><br>
                        Dù các thành phần đó chưa bị cấm sử dụng tại Việt Nam.
                    </p>
                </div>
            </div>
            <div class="col-md-6 p-0 m-0">
                <img src={{ asset('assets/frontend/images/story/banner-slogan.jpg') }} class="product-img" alt="">
            </div>
        </div>
    </article>


    <article class="article-certificate text-center">
        <div class="col-md-12 row  block-certificate ">
            <h2 class="block-certificate-title text-uppercase title-main col-md-12">Hệ sản phẩm được kiểm nghiệm <br>& bảo chứng chất lượng </h2>
            <p class="block-certificate-description col-md-12">Làm ra một sản phẩm an toàn cho trẻ thật đấy, nhưng làm sao giúp khách hàng có cơ sở tin vào điều đó để lựa chọn? <br>
                Chúng tôi quyết định chọn cách <strong>“luôn chủ động đưa sản phẩm tới kiểm định tại các tổ chức uy tín hàng đầu trong nước và quốc tế”</strong> với những cái tên như:</p>
            <div class="certificate-detail">
                <a href="javascript:void(0)">
                    <img class="certificate-img" src={{ asset('assets/frontend/images/story/chungchi1.png') }}>
                    <h3 class="certificate-title">HỘI PHỤ SẢN VIỆT NAM </h3>
                    <p class="certificate-description">Khuyên dùng <br>cho cả trẻ sơ sinh.</p>
                </a>
            </div>
            <div class="certificate-detail">
                <a href="javascript:void(0)">
                    <img class="certificate-img" src={{ asset('assets/frontend/images/story/chungchi2.png') }}>
                    <h3 class="certificate-title">HỘI PHỤ SẢN VIỆT NAM </h3>
                    <p class="certificate-description">Khuyên dùng <br>cho cả trẻ sơ sinh.</p>
                </a>
            </div>
            <div class="certificate-detail">
                <a href="javascript:void(0)">
                    <img class="certificate-img" src={{ asset('assets/frontend/images/story/chungchi3.png') }}>
                    <h3 class="certificate-title">HỘI PHỤ SẢN VIỆT NAM </h3>
                    <p class="certificate-description">Khuyên dùng <br>cho cả trẻ sơ sinh.</p>
                </a>
            </div>
            <div class="certificate-detail">
                <a href="javascript:void(0)">
                    <img class="certificate-img" src={{ asset('assets/frontend/images/story/chungchi4.png') }}>
                    <h3 class="certificate-title">HỘI PHỤ SẢN VIỆT NAM </h3>
                    <p class="certificate-description">Khuyên dùng <br>cho cả trẻ sơ sinh.</p>
                </a>
            </div>

        </div>
    </article>

    <article class=" text-center m-0 p-0">
        <div class="col-md-12 row  block-product-system text-left m-0 p-0" >
            <div class="col-md-6 p-0 m-0">
                <img src={{ asset('assets/frontend/images/story/banner-product.jpg') }} class="product-img" alt="">
            </div>
            <div class="col-md-6 m-0 p-0 block-story-slogan-left">
                <div class="block-product-system-text text-left">
                    <h3>Hệ sản phẩm</h3>
                    <h4>VỚI thành phần & CÔNG NĂNG VƯỢT TRỘI</h4>
                    <p>Luôn tâm niệm rằng, đối tượng khách hàng mà Mamamy phục vụ chính là các trẻ nhỏ từ sơ sinh. Nên chúng tôi luôn tìm tòi các thành phần nguyên vật liệu có tính năng chăm sóc vượt trội đưa vào sản phẩm để hỗ trợ bảo vệ, chăm sóc trẻ.</p>

                    <p>Cùng các công năng, những sáng chế, những giải pháp hữu ích độc quyền để khách hàng sử dụng sản phẩm một cách tiện ích nhất, giúp phát huy hiệu quả sản phẩm cao nhất.</p>

                    <p>Cách chúng tôi tạo ra sản phẩm là như thế. Luôn đòi hỏi cao hơn nhu cầu thị trường. Chỉ là bởi chúng tôi mong muốn sản phẩm của Mamamy luôn là những <strong>“SẢN PHẨM CHĂM SÓC”</strong> theo đúng nghĩa của nó.</p>
                </div>
            </div>
        </div>
    </article>

    <article class="article-baby-good row text-left mx-0 px-0">
        <img class="article-baby-good-background" src={{ asset('assets/frontend/images/story/story-background.jpg') }}>
        <div class="article-baby-good-content ">
            <div class="article-baby-good-text ">
                <!-- <h3>&#8220; Tất cả những gì Mamamy làm ra đều tốt cho trẻ! &#8221;</h3> -->
                <h3>Tất cả những gì Mamamy làm ra đều tốt cho trẻ!</h3>
                <p>Hơn 10 năm phục vụ, Mamamy đã luôn nhận được sự tin yêu của khách hàng để rồi <br>
                    hạnh phúc nhận danh hiệu <strong>“Khăn ướt số 1*”.</strong></p>
                <p>Xin gửi lời cảm ơn sâu sắc!</p>
                <p class="article-baby-good-sign">Mamamy - Baby good goods</p>

            </div>
        </div>
        <div class="article-baby-good-note ">
            <i>*Theo báo cáo của Nielsen: MAMAMY LÀ NHÃN HIỆU ĐỨNG ĐẦU THỊ PHẦN về doanh thu và sản lượng bán ra trong ngành Khăn giấy ướt trẻ em<br> tại thị trường 6 thành phố (thành phố Hồ Chí Minh, Hà Nội, Hải Phòng, Đà Nẵng, Nha Trang, Cần Thơ) từ tháng 4/2016 đến tháng 3/2018.</i>
        </div>
    </article>
@endsection
