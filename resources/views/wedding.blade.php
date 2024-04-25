@extends('layouts.main')

@section('content')
    <!-- BEGIN HERO SECTION -->
    <section id="hero" class="bg-slideshow section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="hero-wrapper v-center">
                        <h2 data-animation-direction="fade" data-animation-delay="600">Save the Date</h2>

                        <h1 class="hero-title light ">
                            <span class="d-block d-sm-inline" data-animation-direction="from-right" data-animation-delay="300">Nguyễn Phước</span>
                            <small class="d-block d-sm-inline" data-animation-direction="from-top" data-animation-delay="300">&</small>
                            <span class="d-block d-sm-inline" data-animation-direction="from-left" data-animation-delay="300">Mỹ Thùy</span>
                        </h1>

                        <div class="hero-subtitle light" data-animation-direction="fade"
                            data-animation-delay="1000">08 Tháng 07 Năm 2024</div>
                        
                        <div data-animation-direction="fade" data-animation-delay="1000">
                            <a href="#rsvp" class="btn btn-light scrollto">Gửi Lời Chúc</a>
                        </div>
                     </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->


    <!-- BEGIN ABOUT US SECTION -->
    <section id="couple">
        <div class="container">
            <div class="row about-elems-wrapper">
                <div class="element col-md-6 col-xl-4 offset-xl-2" data-animation-direction="from-left"
                    data-animation-delay="300">
                    <div class="image">
                        <img src="{{ asset('images/TNQ06790.JPG') }}" alt="" width="600" height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Nguyễn Văn Phước<small>The Groom</small></h3>
                                <p>Là bác sĩ nha khoa hiện đang công tác tại một phòng khám nha khoa ở Quận 1 thành phồ Hồ Chí Minh. 
                                    Là...<a class="button-see" data-src="{{ asset('images/TNQ06790.JPG') }}" 
                                    data-content="Là bác sĩ nha khoa hiện đang công tác tại một phòng khám nha khoa ở Quận 1 thành phồ Hồ Chí Minh. 
                                    Là một người hiền lành và ít nói. Luôn coi trọng tình cảm và yêu thương gia đình. 
                                    Với anh: “Gia đình là điểm tựa vững chắc nhất và là bến đỗ bình yên không đâu sánh bằng đối với mỗi con người. 
                                    Đó luôn là nơi tràn ngập tình yêu thương để ta trở về.”" 
                                    data-instagram="https://instagram.com" data-twitter="https://twitter.com" 
                                    data-facebook="https://facebook.com" data-name="Nguyễn Văn Phước"
                                    style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a>
                                </p>
                                <ul class="sn-icons">
                                    <li><a href="https://instagram.com"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-about-us" data-animation-direction="fade" data-animation-delay="500">
                    <i class="icon-two-hearts"></i>
                </div>

                <div class="element col-md-6 col-xl-4" data-animation-direction="from-right"
                    data-animation-delay="400">
                    <div class="image">
                        <img src="{{ asset('images/TNQ06278.JPG') }}" alt="" width="600" height="714" />
                        <div class="hover-info neela-style">
                            <div class="content">
                                <h3>Nguyễn Thị Mỹ Thùy<small>The Bride</small></h3>
                                <p>Cô gái đến từ xứ Huế mộng mơ, hiện đang sinh sống và làm việc tại Sài Gòn. Sau khi tốt nghiệp Học vi...<a class="button-see" data-src="{{ asset('images/TNQ06278.JPG') }}" 
                                    data-content="Cô gái đến từ xứ Huế mộng mơ, hiện đang sinh sống và làm việc tại Sài Gòn. 
                                    Sau khi tốt nghiệp Học viện Báo chí và Tuyên truyền, quyết tâm theo đuổi đam mê làm phóng viên du lịch. 
                                    Là một người hay cười nhưng lại sống nội tâm, thích đọc sách, trồng cây và yêu thiên nhiên. 
                                    Ngoài ra còn rất thích vẽ vời, nuôi mèo và nuôi ước mơ có cho mình một vườn hồng khoe sắc." 
                                data-instagram="https://instagram.com" data-twitter="https://twitter.com" 
                                data-facebook="https://facebook.com" data-name="Nguyễn Thị Mỹ Thùy" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a></p>
                                <ul class="sn-icons">
                                    <li><a href="https://instagram.com"><i class="fab fa-instagram-square"></i></a></li>
                                    <li><a href="https://twitter.com"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="https://facebook.com"><i class="fab fa-facebook-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="about-us-desc col-lg-8 offset-lg-2" data-animation-direction="from-bottom" data-animation-delay="300">
                    <h3>We are Getting Married</h3>
                    <p>Thật vui vì được gặp và đón tiếp các bạn trong một dịp đặc biệt như đám cưới của chúng tôi. 
                        Chúng tôi muốn gửi đến bạn những lời cảm ơn sâu sắc nhất và để bạn biết chúng tôi rất hạnh phúc khi thấy bạn ở đó. 
                        Cảm ơn các bạn rất nhiều vì sự hiện diện cùng những lời chúc tốt đẹp mà bạn đã dành cho chúng tôi!</p>
                    <p class="groom-bride-signature"><span>Nguyễn Phước</span> & <span>Mỹ Thùy</span></p>
                    <div class="parent-info-group">
                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">Nguyễn Văn Minh</span></div>
                            
                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">Nguyễn Thị Hoa</span></div>
                        </div>
                        <div class="parent-infos">
                            <div class="parent-info"><span class="parent-title">Con ông:</span> <span class="parent-name">Nguyễn Văn Hiền</span></div>
                            
                            <div class="parent-info"><span class="parent-title">Con bà:</span> <span class="parent-name">Đỗ Thị Nhân</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US SECTION -->

    <!-- BEGIN OUR STORY TITLE SECTION -->
    <section id="our-story-title" class="parallax-background bg-color-overlay section-divider-bottom-2 padding-divider-top" 
    style="background-image: url({{ asset('images/flow.jpg') }})">
        <div class="section-divider-top-1 off-section"></div>
        <!-- The class "section-divider-top-1" can also be applied to the tag <section>. In this case, it was added on a new <div> because the tag <section> have all pseudo elements (::after and ::before) in use. -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">Chuyện Tình Yêu</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- END OUR STORY TITLE SECTION -->

    <!-- BEGIN TIMELINE SECTION -->
    <section id="story">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="timeline">
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">December 12 2015</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <img src="{{ asset('images/TNQ06060.JPG') }}" class="w-100 h-auto" style="max-width:500px;" />
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Bạn có tin vào tình yêu online không?</h4>
                                        <p>Tôi đã từng không tin vào tình yêu online. Đã từng nghĩ làm sao có thể thích một người chưa từng gặp mặt? Vậy mà giờ đây tôi lại đang như vậy, bây giờ tôi đã hiểu: thế giới ảo tình yêu thật đấy!!! Ngày ấy vu vơ đăng một dòng status trên facebook than thở, vu vơ đùa giỡn nói chuyện với một người xa lạ chưa từng quen. Mà nào hay biết, 4 năm sau người ấy lại là chồng mình.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">August 04 2016</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <img src="{{ asset('images/TNQ06121.JPG') }}" alt="Lời tỏ tình dễ thương^^" class="w-100 h-auto" style="max-width:500px;" />
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Lời tỏ tình dễ thương^^</h4>
                                        <p>Ngày ấy, tôi 21! Một mình giữa phố thị nấp tập. Mỗi chiều cuối tuần thường chạy xe vòng quanh qua những con phố, len lỏi trong từng dòng người tấp nập. Hay thậm chí là ghé vào một quán cà phê ven đường để ngồi đó và cảm nhận về cuộc sống của riêng mình. Đôi khi lạc lõng và hơi cô đơn. Nhưng rồi một ngày đẹp trời, người con trai ấy xuất hiện, nắm tay rồi thủ thỉ vào tai: “Hy vọng sau này anh được làm những điều ấy cùng em”.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">May 10 2018</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <img src="{{ asset('images/TNQ06066.JPG') }}" alt="Phút giây cầu hôn" class="w-100 h-auto" style="max-width:500px;" />
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Phút giây cầu hôn</h4>
                                        <p>5 năm bên nhau không phải là quãng thời gian quá dài, nhưng đủ cho chúng ta nhận ra được rất nhiều điều. Yêu nhau, vun vén hạnh phúc và cùng nỗ lực vượt qua những khó khăn trong cuộc sống. Chúng ta từ 2 con người xa lạ mà bước vào cuộc đời nhau. Và giờ đây chúng ta tiếp tục cùng nhau sang trang mới. Giây phút anh ngỏ lời “Làm vợ anh nhé!”, em đã nguyện ý đời này, đi đâu cũng được, miễn là cùng anh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="year" data-animation-direction="from-top" data-animation-delay="250">
                            <span class="neela-style">July 28 2018</span>
                        </div>
                        <div class="gallery-container">
                            <div class="timeline-gallery-wrapper" data-animation-direction="from-left" data-animation-delay="250">
                                <div class="timeline-gallery-del">
                                    <div class="item text-center">
                                        <img src="{{ asset('images/TNQ06135.JPG') }}" alt="Ngày lễ đính hôn" class="w-100 h-auto" style="max-width:500px;" />
                                    </div>
                                </div>
                            </div>

                            <div class="description-wrapper" data-animation-direction="from-bottom" data-animation-delay="250">
                                <div class="description">
                                    <div class="neela-style">
                                        <h4>Ngày lễ đính hôn</h4>
                                        <p>“Tiếng trái tim đôi ta đập thật nhanh. Thì thầm lời yêu thương. Ngày tình về chung đôi...” Sau bao nhiêu chờ đợi, cuối cùng ngày vui của chúng ta cũng tới rồi. Cảm ơn vì mình đã luôn là một phần trong cuộc sống của nhau. Em và anh không chỉ là người yêu mà chúng ta còn là tri kỷ. Ngày hôm nay, em sẽ là cô dâu của anh và sau này sẽ là mẹ của các con anh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline_footer">
                        <div data-animation-direction="from-top" data-animation-delay="250"><i class="icon-diamond-ring"></i></div>
                        <div class="punchline" data-animation-direction="from-bottom" data-animation-delay="250">
                            <small>This is where our FOREVER BEGINS!</small>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END TIMELINE SECTION -->
        
    <!-- BEGIN THE WEDDING SECTION -->
    <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top section-divider-bottom-1" style="background-image: url({{ asset('images/TNQ06146.JPG') }});">
        <div class="section-divider-top-1 off-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title light">The Big Day!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 center">
                    <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                        <div class="invite_title">
                            <div class="text">
                                Save<small>the</small>Date
                            </div>
                        </div>

                        <div class="invite_info px-2 px-lg-4">
                            <h2 class="fs-1">Nguyễn Phước <small>&</small> Mỹ Thùy</h2>

                            <div>Một lời chúc của bạn chắc chắn sẽ làm cho đám cưới của chúng tôi có thêm một niềm hạnh phúc!</div>
                            <div class="center m-0 mt-2">
                                <a href="#rsvp" class="btn btn-primary reverse scrollto text-white px-2" style="min-width:240px;max-width:240px;">Gửi lời chúc</a>
                            </div>
                            <div class="date">08 Tháng 07 Năm 2024</div>
                            <div class="count-down-clock">
                                <div id="clock" data-date="2024-07-08" data-text-day="Ngày" data-text-hour="Giờ" data-text-minute="Phút" data-text-second="Giây"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END THE WEDDING SECTION -->
        
    <!-- BEGIN GALLERY SECTION -->
    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="section-title">Album Hình Cưới</h1>
                </div>
            </div>
        </div>
        

        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="gallery-container gallery-fancybox masonry-gallery">
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06152.JPG') }}",
                                thumb: "{{ asset('images/TNQ06152.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu là điều kiện trong đó hạnh phúc của người khác là điều cần thiết cho chính bạn</h4></div>`
                            });
                        </script>
                        <div class="grid grid-item btn-see-more-gallery" data-index="0">
                            <img src="{{ asset('images/TNQ06152.JPG') }}" alt class="img img-responsive">
                        </div>

                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06278.JPG') }}",
                                thumb: "{{ asset('images/TNQ06278.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu không chỉ là một danh từ - nó là một động từ; nó còn hơn cả một cảm giác - đó là sự quan tâm, chia sẻ, giúp đỡ, hy sinh</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="1">
                            <img src="{{ asset('images/TNQ06278.JPG') }}" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06311.JPG') }}",
                                thumb: "{{ asset('images/TNQ06311.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Vì vậy, để được ai đó nhìn thấy đầy đủ và được yêu mến dù thế nào đi nữa — đây là một sự dâng hiến của con người có thể là điều kỳ diệu</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="2">
                            <img src="{{ asset('images/TNQ06311.JPG') }}" alt class="img img-responsive">
                        </div>
                       <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06453.JPG') }}",
                                thumb: "{{ asset('images/TNQ06453.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu không làm cho thế giới quay tròn. Tình yêu là những gì làm cho chuyến đi đáng giá</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="3">
                            <img src="{{ asset('images/TNQ06453.JPG') }}" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06507.JPG') }}",
                                thumb: "{{ asset('images/TNQ06507.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="4">
                            <img src="{{ asset('images/TNQ06507.JPG') }}" alt class="img img-responsive">
                        </div>
                         <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06543.JPG') }}",
                                thumb: "{{ asset('images/TNQ06543.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tôi có thể chinh phục thế giới bằng một tay miễn là bạn đang nắm tay kia</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="5">
                            <img src="{{ asset('images/TNQ06543.JPG') }}" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06712.JPG') }}",
                                thumb: "{{ asset('images/TNQ06712.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="6">
                            <img src="{{ asset('images/TNQ06712.JPG') }}" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06719.JPG') }}",
                                thumb: "{{ asset('images/TNQ06719.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Được ai đó yêu sâu sắc sẽ mang lại cho bạn sức mạnh, trong khi yêu ai đó sâu sắc sẽ cho bạn dũng khí</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="7">
                            <img src="{{ asset('images/TNQ06719.JPG') }}" alt class="img img-responsive">
                        </div>
                         <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06755.JPG') }}",
                                thumb: "{{ asset('images/TNQ06755.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Đối với thế giới, bạn có thể là một người, nhưng với một người, bạn là cả thế giới</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="8">
                            <img src="{{ asset('images/TNQ06755.JPG') }}" alt class="img img-responsive">
                        </div>
                        <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06790.JPG') }}",
                                thumb: "{{ asset('images/TNQ06790.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Tôi yêu bạn vì tất cả những gì bạn đang có, tất cả những gì bạn đã có, và tất cả những gì bạn chưa hiện hữu</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="9">
                            <img src="{{ asset('images/TNQ06790.JPG') }}" alt class="img img-responsive">
                        </div>
                         <script type="text/javascript">
                            photoGalleries.push({
                                src : "{{ asset('images/TNQ06333.JPG') }}",
                                thumb: "{{ asset('images/TNQ06333.JPG') }}",
                                subHtml: `<div class="lg-sub-html"><h4>Bước đi với bàn tay của bạn trong tay tôi và bàn tay của tôi trong tay bạn, đó chính xác là nơi tôi muốn luôn ở đó</h4></div>`
                            });
                        </script>
                            
                        <div class="grid grid-item btn-see-more-gallery" data-index="10">
                            <img src="{{ asset('images/TNQ06333.JPG') }}" alt class="img img-responsive">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END GALLERY SECTION -->
        
        <section id="invitation" class="parallax-background bg-color-overlay padding-divider-top" style="background-image: url({{ asset('images/TNQ06589.JPG') }});">
            <div class="section-divider-top-1 off-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="section-title light">Xem video cưới của chúng tôi!</h1>
                    </div>
                </div>

                <div class="invite neela-style" data-animation-direction="from-left" data-animation-delay="100">
                    <div class="ratio ratio-16x9">
						<iframe class="border border-5 border-white w-100 h-100" style="border-width: 10px!important;" src="https://youtu.be/Nc-n5W-ep7M?si=I9n67GOiMsr8Uu6B" allowfullscreen></iframe>
					</div>
                </div>
            </div>
        </section>
                
        <!-- BEGIN WEDDING GIFTS SECTION -->
        <div id="events"></div>
        <section id="giftregistry" class="parallax-background section-bg-color" style="padding:135px 0; background-image: url({{ asset('images/TNQ06712.jpg') }});">
         	<div class="section-divider-top-4 off-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xl-6 events-boxs py-5">
                    	<h2 class="section-title-lg desc text-white">Sự Kiện Cưới</h2>
                        <div class="section-desc mb-5 px-5 text-center">Tình yêu đích thực đứng về phía nhau trong những ngày tốt đẹp và sát cánh hơn trong những ngày tồi tệ.</div>
                        
                        <ul class="wedding-gifts">
                        	                            
                            <li data-animation-direction="from-bottom" data-animation-delay="300">
                                <div class="neela-style">
                                	<div class="d-flex align-items-center event-item-content">
	                                    <img src="{{ asset('images/hoacuoidep.jpg') }}" alt="LỄ CƯỚI NHÀ NỮ" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
	                                    <div class="d-inline-block">
	                                    	<h3 class="w-100">LỄ CƯỚI NHÀ NỮ</h3>
                                            <div class="dresscode-colors-wrap">
                                                <div class="dresscode-colors-event">
                                                    <i class="fa fa-user-tie"></i>
                                                    <span class="tooltip-dresscode">Dress Code: </span>
                                                    <div class="dresscode-colors-item" style="background:#eda2b6;"></div>
                                                    <div class="dresscode-colors-item" style="background:#ffffff;"></div>
                                                    <div class="dresscode-colors-item" style="background:#623262;"></div>
                                                </div>
                                            </div>
                                            <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>07:30 10/02/2023</strong></p>
	                                    	<p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Tư gia nhà nữ</strong></p>
	                                    </div>
                                    </div>

                                    <div class="info">
                                    	<div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                            <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ CƯỚI NHÀ NỮ (Đám cưới Nguyễn Phước và Mỹ Thùy)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. ",
                                            "startDate":"2023-02-10",
                                            "endDate":"2023-02-10",
                                            "startTime":"07:30",
                                            "endTime":"07:30",
                                            "location":"Tư gia nhà nữ",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" id="otheramount" class="btn btn-primary reverse calendar-button-custom-click">Thêm vào lịch</a>
                                        <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                                                                                    
                            <li data-animation-direction="from-bottom" data-animation-delay="300">
                                <div class="neela-style">
                                	<div class="d-flex align-items-center event-item-content">
	                                    <img src="{{ asset('images/tiec-cuoi-nu.jpg') }}" alt="TIỆC CƯỚI NHÀ NỮ" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
	                                    <div class="d-inline-block">
	                                    	<h3 class="w-100">TIỆC CƯỚI NHÀ NỮ</h3>
                                            <div class="dresscode-colors-wrap">
                                                <div class="dresscode-colors-event">
                                                    <i class="fa fa-user-tie"></i>
                                                    <span class="tooltip-dresscode">Dress Code: </span>
                                                    <div class="dresscode-colors-item" style="background:#504e63;"></div>
                                                    <div class="dresscode-colors-item" style="background:#cc8a4d;"></div>
                                                    <div class="dresscode-colors-item" style="background:#bc5f6a;"></div>
                                                </div>
                                            </div>
                                            <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>11:30 10/02/2023</strong></p>
	                                    	<p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Nhà hàng tiệc cưới Hoa Cau</strong></p>
	                                    </div>
                                    </div>

                                    <div class="info">
                                    	<div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                            <div class="atcb" style="display:none;">
                                            {
                                            "name":"TIỆC CƯỚI NHÀ NỮ (Đám cưới Nguyễn Phước và Mỹ Thùy)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. ",
                                            "startDate":"2023-02-10",
                                            "endDate":"2023-02-10",
                                            "startTime":"11:30",
                                            "endTime":"11:30",
                                            "location":"Nhà hàng tiệc cưới Hoa Cau",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" id="otheramount" class="btn btn-primary reverse calendar-button-custom-click">Thêm vào lịch</a>
                                        <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                                                                                    
                            <li data-animation-direction="from-bottom" data-animation-delay="300">
                                <div class="neela-style">
                                	<div class="d-flex align-items-center event-item-content">
	                                    <img src="{{ asset('images/ban-tiec.jpg') }}" alt="LỄ CƯỚI NHÀ NAM" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
	                                    <div class="d-inline-block">
	                                    	<h3 class="w-100">LỄ CƯỚI NHÀ NAM</h3>
                                            <div class="dresscode-colors-wrap">
                                                <div class="dresscode-colors-event">
                                                    <i class="fa fa-user-tie"></i>
                                                    <span class="tooltip-dresscode">Dress Code: </span>
                                                    <div class="dresscode-colors-item" style="background:#32435f;"></div>
                                                    <div class="dresscode-colors-item" style="background:#ffffff;"></div>
                                                    <div class="dresscode-colors-item" style="background:#57233a;"></div>
                                                </div>
                                            </div>
                                            <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>09:00 12/09/2023</strong></p>
	                                    	<p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Tư gia nhà nam</strong></p>
	                                    </div>
                                    </div>

                                    <div class="info">
                                    	<div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                            <div class="atcb" style="display:none;">
                                            {
                                            "name":"LỄ CƯỚI NHÀ NAM (Đám cưới Nguyễn Phước và Mỹ Thùy)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. ",
                                            "startDate":"2023-09-12",
                                            "endDate":"2023-09-12",
                                            "startTime":"09:00",
                                            "endTime":"09:00",
                                            "location":"Tư gia nhà nam",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" id="otheramount" class="btn btn-primary reverse calendar-button-custom-click">Thêm vào lịch</a>
                                        <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                                                                                    
                            <li data-animation-direction="from-bottom" data-animation-delay="300">
                                <div class="neela-style">
                                	<div class="d-flex align-items-center event-item-content">
	                                    <img src="{{ asset('images/tiec-cuoi-nam.jpg') }}" alt="TIỆC CƯỚI NHÀ NAM" width="100" height="100" class="d-inline-block rounded-circle me-0 mb-4 me-lg-3 mb-lg-0" />
	                                    <div class="d-inline-block">
	                                    	<h3 class="w-100">TIỆC CƯỚI NHÀ NAM</h3>
                                            <div class="dresscode-colors-wrap">
                                                <div class="dresscode-colors-event">
                                                    <i class="fa fa-user-tie"></i>
                                                    <span class="tooltip-dresscode">Dress Code: </span>
                                                    <div class="dresscode-colors-item" style="background:#7fb174;"></div>
                                                    <div class="dresscode-colors-item" style="background:#504e63;"></div>
                                                    <div class="dresscode-colors-item" style="background:#632a7e;"></div>
                                                </div>
                                            </div>
                                            <p class="w-100 mb-2 mt-2"><i class="fa fa-clock" aria-hidden="true"></i> <strong>12:00 12/09/2023</strong></p>
	                                    	<p class="w-100 mb-0 mt-1"><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Nhà hàng tiệc cưới For You</strong></p>
	                                    </div>
                                    </div>

                                    <div class="info">
                                    	<div class="calendar-button" style="visibility: hidden;height: 0;overflow: hidden;">
                                            <div class="atcb" style="display:none;">
                                            {
                                            "name":"TIỆC CƯỚI NHÀ NAM (Đám cưới Nguyễn Phước và Mỹ Thùy)",
                                            "description":"Cảm ơn bạn đã dành thời gian tham dự đám cưới của chúng tôi!. ",
                                            "startDate":"2023-09-12",
                                            "endDate":"2023-09-12",
                                            "startTime":"12:00",
                                            "endTime":"12:00",
                                            "location":"Nhà hàng tiệc cưới For You",
                                            "options":["Apple","Google","iCal","Microsoft365","MicrosoftTeams","Outlook.com","Yahoo"],
                                            "timeZone":"Asia/Ho_Chi_Minh",
                                            "iCalFileName":"Reminder-Event",
                                            "listStyle":"modal",
                                            "label":"Thêm vào lịch",
                                            "trigger":"click"
                                            }
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" id="otheramount" class="btn btn-primary reverse calendar-button-custom-click">Thêm vào lịch</a>
                                        <a href="https://www.google.com/maps/place/Da+Nang,+H%E1%BA%A3i+Ch%C3%A2u+District,+Da+Nang,+Vietnam/@16.0471659,108.1716864,13z/data=!3m1!4b1!4m5!3m4!1s0x314219c792252a13:0xfc14e3a044436487!8m2!3d16.0544068!4d108.2021667" target="_blank" id="otheramount" class="btn btn-primary reverse">Xem bản đồ <i class="fa fa-angle-right me-0"></i></a>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WEDDING GIFTS SECTION -->


                	<!-- BEGIN BRIDESMAIDS SECTION -->
        <section id="bridesmaids" class="parallax-background bg-color-overlay" style="background-image: url({{ asset('images/TNQ06146.JPG') }})">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="section-title light">Phù Dâu</h2>
                    </div>
                </div>

                <div class="row center">
                    <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top" data-animation-delay="300">
                        <div class="image">
                            <img src="{{ asset('images/TNQ06278.JPG') }}" alt="" width="434" height="434" />
                            <div class="hover-info neela-style">
                                <div class="content center">
                                    <h3>Lý Mạc Sầu<small>Phù dâu</small></h3>
                                    <p>Là cô gái đến từ vùng đất Cố Đô “Huế mộng Huế mơ” dịu dàng, nết na và thùy mị. Với nhiều tài lẻ như ...<a class="button-see" data-src="{{ asset('images/TNQ06278.JPG') }}" data-content="Là cô gái đến từ vùng đất Cố Đô “Huế mộng Huế mơ” dịu dàng, nết na và thùy mị. Với nhiều tài lẻ như biết nấu ăn, cắm hoa, thêu thùa may vá." 
                                        data-instagram="" data-twitter="" 
                                        data-facebook="" data-name="Lý Mạc Sầu" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a></p>
                                    <ul class="sn-icons"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top" data-animation-delay="300">
                        <div class="image">
                            <img src="{{ asset('images/TNQ06278.JPG') }}" alt="" width="434" height="434" />
                            <div class="hover-info neela-style">
                                <div class="content center">
                                    <h3>Phạm Ðoan Trang<small>Phù dâu</small></h3>
                                    <p>Là cô gái gái Huế thân thiện, hay cười, dễ giao tiếp nhưng thích yên tĩnh một mình. Thường hướng về ...<a class="button-see" data-src="{{ asset('images/TNQ06278.JPG') }}" data-content="Là cô gái gái Huế thân thiện, hay cười, dễ giao tiếp nhưng thích yên tĩnh một mình. Thường hướng về những thói quen, sở thích mang tính truyền thống." 
                                        data-instagram="" data-twitter="" 
                                        data-facebook="" data-name="Phạm Ðoan Trang" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a></p>
                                    <ul class="sn-icons"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
                    
        	<!-- END BRIDESMAIDS SECTION -->


        	<!-- BEGIN TESTIMONIALS SECTION -->
            <section id="testimonials" class="bg-color side-flowers-light">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-xl-10 offset-xl-1">
                            <div id="testimonials-slider" class="owl-carousel testimonials light"
                                data-animation-direction="from-bottom" data-animation-delay="300">
                                <div class="item">
                                    <blockquote>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng.</blockquote>
                                </div>

                                <div class="item">
                                    <blockquote>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng.</blockquote>
                                </div>

                                <div class="item">
                                    <blockquote>Tình yêu không có rào cản. Nó nhảy rào, nhảy rào, xuyên tường để đến đích với đầy hy vọng.</blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        	<!-- END TESTIMONIALS SECTION -->

        	<!-- BEGIN GROOMSMEN SECTION -->
            <section id="groomsmen" class="parallax-background bg-color-overlay" style="background-image: url({{ asset('images/TNQ06146.JPG') }})">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="section-title light">Phù Rể</h2>
                        </div>
                    </div>

                    <div class="row center">
                        <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top" data-animation-delay="300">
                            <div class="image">
                                <img src="{{ asset('images/TNQ06790.JPG') }}" alt="" width="434" height="434" />
                                <div class="hover-info neela-style">
                                    <div class="content center">
                                        <h3>Trần Đức Minh<small>Phù rể</small></h3>
                                        <p>Chàng trai sinh năm 1996 tại Bình Dương, từng là sinh viên Đại học Kinh tế TP. Hồ Chí Minh. Hiện tại...<a class="button-see" data-src="{{ asset('images/TNQ06790.JPG') }}" data-content="Chàng trai sinh năm 1996 tại Bình Dương, từng là sinh viên Đại học Kinh tế TP. Hồ Chí Minh. Hiện tại, đang làm nhân viên tín dụng ngân hàng." 
                                            data-instagram="" data-twitter="" 
                                            data-facebook="" data-name="Trần Đức Minh" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a></p>
                                        <ul class="sn-icons"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                <div class="element bmaid-gmen col-sm-6 col-lg-4" data-animation-direction="from-top" data-animation-delay="300">
                            <div class="image">
                                <img src="{{ asset('images/TNQ06790.JPG') }}" alt="" width="434" height="434" />
                                <div class="hover-info neela-style">
                                    <div class="content center">
                                        <h3>Hoàng Gia Bảo<small>Phù rể</small></h3>
                                        <p>Hòa đồng, xông xáo, nhiệt tình và có trách nhiệm trong công việc. Là chàng trai yêu động vật, thích ...<a class="button-see" data-src="{{ asset('images/TNQ06790.JPG') }}" data-content="Hòa đồng, xông xáo, nhiệt tình và có trách nhiệm trong công việc. Là chàng trai yêu động vật, thích chơi game, thích ăn cơm nhà và nước uống có ga…" 
                                            data-instagram="" data-twitter="" 
                                            data-facebook="" data-name="Hoàng Gia Bảo" style="font-size:14px;cursor: pointer">Xem thêm<i class="bi bi-arrow-down-short"></i></a></p>
                                        <ul class="sn-icons"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
                        <!-- END GROOMSMEN SECTION -->
        
        <!-- BEGIN CONTACTS SECTION -->
        <section id="rsvp" class="section-bg-color extra-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3">
                        <div class="form-wrapper flowers neela-style">
                            <h1 class="section-title">Sổ Lưu Bút</h1>
                            <form id="wish-form" class="form validate-rsvp-form row" method="post">
                                <div>
                                    <input type="text" name="name" placeholder="Tên của bạn*" class="form-control">
                                </div>

                                <div>
                                    <input type="email" name="email" placeholder="E-mail" class="form-control">
                                </div>
                                <div>
                                    <div class="textarea-emoji-picker">
                                        <div class="vitualTextarea">
                                            <textarea id="content" rows='3' class="form-control" name="content" placeholder="Nhập lời chúc của bạn*"></textarea>
                                            <div class="textAreaIcons">
                                                <span class="show-autocomplete tooltip-custom" data-toggle="tooltip" data-placement="top" title="Lời chúc gợi ý">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                                      <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"/>
                                                    </svg>
                                                </span>
                                                <span class="hide-autocomplete tooltip-custom" style="display: none;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lightbulb-off" viewBox="0 0 16 16">
                                                      <path fill-rule="evenodd" d="M2.23 4.35A6 6 0 0 0 2 6c0 1.691.7 3.22 1.826 4.31.203.196.359.4.453.619l.762 1.769A.5.5 0 0 0 5.5 13a.5.5 0 0 0 0 1 .5.5 0 0 0 0 1l.224.447a1 1 0 0 0 .894.553h2.764a1 1 0 0 0 .894-.553L10.5 15a.5.5 0 0 0 0-1 .5.5 0 0 0 0-1 .5.5 0 0 0 .288-.091L9.878 12H5.83l-.632-1.467a3 3 0 0 0-.676-.941 4.98 4.98 0 0 1-1.455-4.405zm1.588-2.653.708.707a5 5 0 0 1 7.07 7.07l.707.707a6 6 0 0 0-8.484-8.484zm-2.172-.051a.5.5 0 0 1 .708 0l12 12a.5.5 0 0 1-.708.708l-12-12a.5.5 0 0 1 0-.708"/>
                                                    </svg>
                                                </span>
                                                <div class="wishes-autocomplete-content" style="display: none;">
                                                    <input type="text" id="searchWishSuggestions" onkeyup="searchWishSuggestionsFunction()" placeholder="Tìm kiếm...">
                                                    <ul id="wishSuggestions">
                                                        <li><a class="showContent" href="#">Chúc mừng hạnh phúc! Chúc hai bạn trăm năm hạnh phúc!</a></li>
                                                        <li><a class="showContent" href="#">Chúc mừng ngày trọng đại tới hai bạn. Hạnh phúc bền lâu và trọn vẹn nhé!</a></li>
                                                        <li><a class="showContent" href="#">Chúc mừng hạnh phúc hai bạn. Chúc hai bạn bên nhau đầu bạc răng long, sớm có thiên thần nhỏ nhé!</a></li>
                                                        <li><a class="showContent" href="#">Chúc hai bạn ngày vui hạnh phúc. Hãy yêu thương nhau thật nhiều và sống thật hạnh phúc nha!</a></li>
                                                        <li><a class="showContent" href="#">Chúc hai bạn sớm có con đàn cháu đống, cửa nhà lúc nào cũng đầm ấm, yên vui nhé!</a></li>
                                                        <li><a class="showContent" href="#">Thật vui vì cuối cùng ngày này cũng tới với bạn. Tôi thành tâm chúc hai bạn thật nhiều hạnh phúc và sống đời vui vẻ cùng nhau mãi mãi!</a></li>
                                                        <li><a class="showContent" href="#">Một chương mới đã mở ra với hai bạn rồi. Tôi mong cuộc sống mới của cả hai sẽ tràn ngập hy vọng, hạnh phúc và niềm vui!</a></li>
                                                        <li><a class="showContent" href="#">Chúc đôi trai tài gái sắc hạnh phúc trọn vẹn, luôn yêu thương nhau thật nhiều!</a></li>
                                                        <li><a class="showContent" href="#">Chia vui cùng bạn trong ngày trọng đại này. Cầu mong cuộc sống sau này của 2 vợ chồng thật thuận hòa, may mắn, làm ăn phát tài nha.</a></li>
                                                        <li><a class="showContent" href="#">Tôi mong tình yêu của hai bạn thật bền chặt, gắn bó để xây dựng tổ ấm yên bình, hạnh phúc!</a></li>
                                                        <li><a class="showContent" href="#">Hai bạn của tôi chắc chắn sẽ có được nhiều hạnh phúc. Mong hai bạn có sức khỏe dồi dào, làm ăn phát đạt và sớm có cháu cho ông bà bồng bế nhé!</a></li>
                                                        <li><a class="showContent" href="#">Gửi lời chúc mừng chân thành nhất tới bạn của tôi. Chúc hai bạn một cuộc sống thật tuyệt vời, hòa thuận, gắn bó son sắt, thủy chung, hạnh phúc lâu dài.</a></li>
                                                        <li><a class="showContent" href="#">Nơi nào có yêu thương nơi đó chắc chắn hạnh phúc. Hai bạn đã tìm được nơi đủ đầy yêu thương rồi, hãy cùng nắm tay nhau đi hết cuộc đời nhé!</a></li>
                                                        <li><a class="showContent" href="#">Khởi đầu một cuộc sống mới, nguyện ước cho bạn của tôi những ngày tháng hạnh phúc phía trước để cùng xây dựng tổ ấm với người bạn đời. Happy ending!</a></li>
                                                        <li><a class="showContent" href="#">Mình tin rằng đây sẽ là khởi đầu cho những điều tốt đẹp sắp tới trong cuộc sống của hai bạn. Hãy yêu thương và cùng nhau vượt qua mọi khó khăn trong cuộc sống nhé.</a></li>
                                                        <li><a class="showContent" href="#">Hôn nhân đánh dấu sự kết thúc một câu chuyện tình yêu và bắt đầu một trận đấu vật. Chúc bạn những điều tốt đẹp nhất.</a></li>
                                                        <li><a class="showContent" href="#">Tôi sẽ nói cho bạn bí mật của một cuộc hôn nhân hạnh phúc. Đó vẫn là … một bí mật cho tất cả! Chúc bạn tất cả những điều tốt đẹp nhất của thời gian phía trước.</a></li>
                                                        <li><a class="showContent" href="#">Hôn nhân thật đẹp. Cuối cùng bạn đã tìm thấy một người mà bạn bị làm phiền suốt cuộc đời.</a></li>
                                                        <li><a class="showContent" href="#">Hai trở thành một: Một giường, một điều khiển từ xa, một phòng tắm! Xin chúc mừng đám cưới hai bạn.</a></li>
                                                        <li><a class="showContent" href="#">Chúc đôi trai tài gái sắc nhà mình hạnh phúc vẹn tròn, cung hỷ cung hỷ!</a></li>
                                                        <li><a class="showContent" href="#">Chúc mừng anh trai của em đã có người rước nhé. Em mong anh chị có cuộc sống vui vẻ, hạnh phúc phía trước, làm ăn phát tài phát lộc.</a></li>
                                                        <li><a class="showContent" href="#">Anh chị là một cặp trời sinh, chắc chắn sau này sẽ rất hạnh phúc. Em chúc anh chị sức khỏe dồi dào, làm ăn phát đạt và sớm có thiên thần nhỏ cho vui cửa vui nhà.</a></li>
                                                        <li><a class="showContent" href="#">Hôm nay là ngày vui của anh chị và cũng là ngày em rất hạnh phúc. Chúc anh chị mãi yêu thương nhau như bây giờ và đạt được mọi ước nguyện trong cuộc sống.</a></li>
                                                        <li><a class="showContent" href="#">Chúc anh/chị/em trăm năm hạnh phúc, thuận vợ thuận chồng.</a></li>
                                                        <li><a class="showContent" href="#">Hôm nay chú rể đẹp trai, cô dâu xinh gái. Chúc mừng ngày thành hôn hai bạn tôi!</a></li>
                                                        <li><a class="showContent" href="#">Chúc mừng đôi bạn trẻ nhé! Mãi yêu thương nhau đến đầu bạc răng long bạn nha!</a></li>
                                                        <li><a class="showContent" href="#">Thay mặt team (tên nhóm) chúc hai bạn ngày ngày ân ái, bên nhau trọn đời.</a></li>
                                                        <li><a class="showContent" href="#">Happy wedding! Chúc hai bạn có cuộc sống mới ngập tràn tiếng cười và niềm vui, sớm có thiên thần nhỏ bồng bé!</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="center">
                                    <button type="submit" class="btn btn-primary submit_form">Gửi lời chúc</button>
                                </div>
                            </form>
                            <div class="wish-box">
                                <div class="wish-box-item ">
                                    <strong>CEO của NTA</strong>
                                    <p>&quot;Một cuộc hôn nhân thành công đòi hỏi phải yêu nhiều lần, và luôn ở cùng một người&quot; 
                                        - Chúc cho hai bạn sẽ có được một cuộc hôn nhân viên mãn, trăm năm hạnh phúc!</p>
                                </div>
                                <div class="wish-box-item ">
                                    <strong>CEO của NTA</strong>
                                    <p>&quot;Một cuộc hôn nhân thành công đòi hỏi phải yêu nhiều lần, và luôn ở cùng một người&quot; 
                                        - Chúc cho hai bạn sẽ có được một cuộc hôn nhân viên mãn, trăm năm hạnh phúc!</p>
                                </div>
                                <div class="wish-box-item ">
                                    <strong>CEO của NTA</strong>
                                    <p>&quot;Một cuộc hôn nhân thành công đòi hỏi phải yêu nhiều lần, và luôn ở cùng một người&quot; 
                                        - Chúc cho hai bạn sẽ có được một cuộc hôn nhân viên mãn, trăm năm hạnh phúc!</p>
                                </div>
                                <div class="wish-box-item ">
                                    <strong>CEO của NTA</strong>
                                    <p>&quot;Một cuộc hôn nhân thành công đòi hỏi phải yêu nhiều lần, và luôn ở cùng một người&quot; 
                                        - Chúc cho hai bạn sẽ có được một cuộc hôn nhân viên mãn, trăm năm hạnh phúc!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACTS SECTION -->

        <section id="donate">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section-title">Hộp mừng cưới</h2>
					</div>
				</div>
			</div>
			
			<div class="container donate-box">
				<div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4 donate-card">
						<div class="map-info-container">
							<div class="info-wrapper animate-from-bottom animation-from-bottom mt-0" data-animation-direction="from-bottom" data-animation-delay="100">
								<div class="location-info">
									<div class="neela-style"><span class="h-lines"></span><span class="v-lines"></span>
										<h4 class="fs-5">Mừng cưới đến chú rể</h4>
                                        <img class="qr-code-image m-auto mb-2" src="{{ asset('images/QRA.jpeg') }}">
                                        <p>Ngân hàng: <strong>ACB</strong></p>
                                        <p>Tên tài khoản: <strong>26175957</strong></p>
                                        <p>Số tài khoản: <strong>Nguyễn Văn Phước</strong></p>
                                        <p>Chi nhánh: <strong>Đà Nẵng</strong></p>
                                        <div class="cryptos-box-view">
                                        	<div class="d-flex align-items-center h-100">
	                                        	<div class="w-100">
		                                            <h5 class="text-dark"><span class="coin-img"></span> Địa chỉ <span class="coin-id"></span></h5>
		                                            <div>
		                                                <span class="coin-address"></span>
		                                                <div class="coin-qr-code"></div>
		                                            </div>
		                                            <button class="cryptos-box-view-close">Đóng</button>
	                                        	</div>
                                        	</div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-sm-6 col-lg-4 donate-card">
						<div class="map-info-container">
							<div class="info-wrapper animate-from-bottom animation-from-bottom mt-0" data-animation-direction="from-bottom" data-animation-delay="100">
								<div class="location-info">
									<div class="neela-style"><span class="h-lines"></span><span class="v-lines"></span>
										<h4 class="fs-5">Mừng cưới đến cô dâu</h4>
                                        <img class="qr-code-image m-auto mb-2 " src="{{ asset('images/QRE.png') }}">
                                        <p>Ngân hàng: <strong>Vietcombank</strong></p>
                                        <p>Tên tài khoản: <strong>9762565773</strong></p>
                                        <p>Số tài khoản: <strong>Nguyễn Thị Mỹ Thùy</strong></p>
                                        <p>Chi nhánh: <strong>Đà Nẵng</strong></p>
                                        <div class="cryptos-box-view">
                                        	<div class="d-flex align-items-center h-100">
	                                        	<div class="w-100">
		                                            <h5 class="text-dark"><span class="coin-img"></span> Địa chỉ ví <span class="coin-id"></span></h5>
		                                            <div>
		                                                <span class="coin-address"></span>
		                                                <div class="coin-qr-code"></div>
		                                            </div>
		                                            <button class="cryptos-box-view-close">Đóng</button>
	                                            </div>
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

        <div id="menu-access" class="">
        <div class="btn-menu-open">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </div>
        <div class="btn-menu-close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
            </svg>
        </div>
        <ul class="p-0 m-0 list-menu-icon">
            <li class="text-center">
                <a href="#rsvp" class="text-white">
                    <span class="content-button tooltipBtn">
                        <span class="tooltiptext">Gửi lời chúc</span>
                        <img class="access-icon" src="{{ asset('images/wishes.png') }}" alt="">
                    </span>
                </a>
            </li>
            <li class="text-center buttonDonate">
                <a href="#donate" class="text-white">
                    <span class="content-button tooltipBtn">
                        <span class="tooltiptext">Mừng cưới</span>
                        <img class="access-icon" src="{{ asset('images/money_bag.png') }}" alt="">
                    </span>
                </a>
            </li>
        </ul>
    </div>
    
@endsection