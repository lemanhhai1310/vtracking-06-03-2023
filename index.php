<?php $data["title"] = "Home"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--slider-->
<div class="uk-flex uk-flex-middle" uk-height-viewport="offset-top: true; offset-bottom: 20;">
    <div class="uk-width uk-section-small">
        <div class="uk-container">
            <div class="home__slider" uk-slider="autoplay: true;">

                <div class="uk-position-relative">

                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-1" uk-grid>
                            <?php
                            $data = array(
                                array(
                                    'title' => 'DỊCH VỤ LÀM PHÙ HIỆU VẬN TẢI, ĐĂNG KÝ GRABCAR, GOCAR & BECAR, GIẤY LIÊN VẬN VIỆT NAM - LÀO - CAMPUCHIA',
                                    'desc' => array(
                                        '<strong>HTX Phù Hiệu Tlogistics</strong> cung cấp dịch vụ làm phù hiệu và đăng ký HTX cho các loại xe, bao gồm xe du lịch 4-7 chỗ, xe tải, container, xe đầu kéo và nhiều loại phương tiện khác. Chúng tôi cũng cung cấp giấy liên vận toàn quốc để hỗ trợ các hoạt động vận chuyển hàng hóa. Thủ tục đơn giản và thời gian hoàn tất nhanh chóng, chỉ trong 3 ngày là quý khách đã có được phù hiệu và giấy liên vận. Chúng tôi cũng cung cấp dịch vụ giao hàng tận nơi để đảm bảo sự thuận tiện và tiết kiệm thời gian cho quý khách hàng.',
                                    ),
                                    'img' => 'images/z4155240871183_584c35d60d6889ab1dd6427f1c19098c.jpg'
                                ),
                                array(
                                    'title' => 'THIẾT BỊ & GIẢI PHÁP ĐỊNH VỊ TGPS CHO XE MÁY VÀ Ô TÔ',
                                    'desc' => array(
                                        '<strong>Thiết bị và giải pháp định vị thương hiệu TGPS</strong> được thiết kế để đáp ứng các nhu cầu theo dõi, quản lý và chống trộm phương tiện giao thông, bao gồm xe máy và ô tô. Sản phẩm TGPS có thể ứng dụng cho nhiều mục đích khác nhau, bao gồm quản lý tài sản cho vay trong các công ty tài chính, cho thuê xe tự lái trong các HTX, giám sát con cái của cha mẹ và chống trộm xe máy và ô tô.',
                                    ),
                                    'img' => 'images/n-photo-banner.png',
                                ),
                                array(
                                    'title' => 'THIẾT BỊ ĐỊNH VỊ Ô TÔ HỢP CHUẨN',
                                    'desc' => array(
                                        '<strong>Thiết bị định vị ô tô TGPS-HC4G</strong> của chúng tôi đáp ứng tiêu chuẩn QCVN31:2014/BGTVT và được Bộ GTVT công nhận. Thiết bị này không chỉ đáp ứng các yêu cầu về đăng kiểm, kiểm định và cấp phù hiệu vận tải, mà còn cung cấp cho doanh nghiệp vận tải những giá trị và lợi ích rõ rệt.',
                                        'TGPS-HC4G giải quyết nhu cầu quản lý xe ô tô hiện nay. Thiết bị này sử dụng module 4G, cải thiện tốc độ và độ ổn định đáng kể, mang lại trải nghiệm sử dụng tốt hơn cho người dùng và hệ thống quản lý phương tiện của các doanh nghiệp cũng như cơ quan quản lý đường bộ và cơ quan nhà nước.',
                                        'Với TGPS-HC4G, doanh nghiệp vận tải có thể quản lý toàn bộ đội xe của mình, giám sát và theo dõi hành trình từ xa, phát hiện lỗi và sự cố kịp thời để đưa ra giải pháp phù hợp. Chúng tôi cam kết cung cấp thiết bị chất lượng, thủ tục đơn giản và dịch vụ hậu mãi tốt để đáp ứng mọi nhu cầu của khách hàng.',
                                    ),
                                    'img' => 'images/n-photo-banner.png',
                                ),
                                array(
                                    'title' => 'CAMERA HÀNH TRÌNH ĐÁP ỨNG NGHỊ ĐỊNH 10 TGPS-ND10',
                                    'desc' => array(
                                        '<strong>Camera hành trình TGPS-ND10</strong> là một giải pháp đáng tin cậy và hiệu quả cho các phương tiện vận tải, đáp ứng đầy đủ yêu cầu của Nghị định 10/2020/NĐ-CP. Thiết bị có thiết kế nhỏ gọn, 2 mắt camera, dễ dàng lắp đặt và quản lý từ xa thông qua phần mềm điều khiển.',
                                        'TGPS-ND10 tích hợp nhiều tính năng như quay video FullHD, lưu trữ dữ liệu trên đám mây và thẻ nhớ, ghi hình liên tục, hỗ trợ phát và kết nối WiFi, GPS để định vị vị trí xe. Thiết bị giúp các doanh nghiệp vận tải quản lý tối ưu tài sản, giám sát lộ trình và đảm bảo việc vận chuyển hàng hóa an toàn và hiệu quả.',
                                        'Sử dụng TGPS-ND10 giúp các xe đáp ứng các quy định pháp luật, đăng kiểm và không bị phạt khi kiểm tra của cơ quan chức năng. Điều này giúp tăng cường an toàn giao thông và giảm tai nạn đường bộ.',
                                    ),
                                    'img' => 'images/n-photo-banner.png',
                                ),
                                array(
                                    'title' => 'THIẾT BỊ CẢM BIẾN NHIÊN LIỆU VÀ CẢM BIẾN NHIỆT ĐỘ CHO XE',
                                    'desc' => array(
                                        'Thiết bị cảm biến nhiên liệu TGPS-CBNL có khả năng đo lường lượng nhiên liệu còn lại trong bồn, từ đó giúp tài xế và quản lý có thể theo dõi và kiểm soát lượng nhiên liệu tiêu thụ của xe. Điều này giúp ngăn chặn việc tiêu thụ nhiên liệu quá mức, gian lận, giảm thiểu lãng phí và giảm chi phí vận hành.',
                                        'Thiết bị cảm biến nhiệt độ TGPS-CBND cũng rất hữu ích trong việc tiết kiệm nhiên liệu. Nó giúp đo lường nhiệt độ của động cơ và hệ thống làm mát, từ đó đưa ra thông tin cho hệ thống quản lý và điều khiển xe hoạt động một cách hiệu quả nhất. Khi nhiệt độ động cơ đạt mức tối ưu, xe sẽ tiêu thụ nhiên liệu ít hơn và hoạt động ổn định hơn.',
                                        'Với bộ đôi thiết bị cảm biến nhiên liệu và cảm biến nhiệt độ, các doanh nghiệp vận tải có thể tiết kiệm được lượng nhiên liệu đáng kể và giảm chi phí vận hành. Các thông tin được thu thập từ các thiết bị này cũng giúp các nhà quản lý vận tải có thể đưa ra các quyết định thông minh về việc quản lý nhiên liệu, tối ưu hóa chi phí và cải thiện hiệu quả vận chuyển.',
                                    ),
                                    'img' => 'images/n-photo-banner.png',
                                ),
                                array(
                                    'title' => 'TƯ VẤN, LẮP ĐẶT & BẢO TRÌ CAMERA AN NINH',
                                    'desc' => array(
                                        'Chúng tôi cung cấp dịch vụ tư vấn, lắp đặt và bảo trì hệ thống camera an ninh cho các cửa hàng, nhà xưởng, trường học và đường phố. Hệ thống camera an ninh giúp bảo vệ tài sản và an toàn cho người dùng, và hỗ trợ giải quyết các vấn đề liên quan đến an ninh. ',
                                        'Chúng tôi có đội ngũ kỹ thuật viên giàu kinh nghiệm, sẵn sàng tư vấn giải pháp tối ưu cho từng trường hợp cụ thể và cam kết cung cấp sản phẩm và dịch vụ tốt nhất.',
                                        'Chúng tôi còn cung cấp các dịch vụ bảo trì, bảo hành tận nơi và giải pháp camera AI để tăng cường khả năng giám sát và phát hiện các hành vi đe dọa an ninh.',
                                        'Chúng tôi cam kết mang đến cho khách hàng các giải pháp camera an ninh chất lượng và hiện đại nhất để giúp quản lý và bảo vệ an ninh tối ưu hóa và hiệu quả hơn.',
                                    ),
                                    'img' => 'images/n-photo-banner.png',
                                ),
                            );
                            foreach ($data as $k=>$v): ?>
                                <li>
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-1-2@m">
                                            <h2 class="uk-h2 home__slider__title"><?= $v['title'] ?></h2>
                                            <?php foreach ($v['desc'] as $k1=>$v1): ?>
                                                <p class="home__slider__desc"><?= $v1 ?></p>
                                            <?php endforeach; ?>
                                            <div>
                                                <a href="" class="home__slider__btn uk-button uk-button-danger uk-border-pill">Đăng ký nhận tư vấn miễn phí</a>
                                            </div>
                                            <ul class="home__slider__list uk-nav uk-nav-default uk-margin">
                                                <li><a href="#"><img src="images/play-n.png" alt="">Video Sản phẩm</a></li>
                                                <li><a href="#"><img src="images/thongtin-n.png" alt="">Giới thiệu dịch vụ Vtracking</a></li>
                                            </ul>
                                        </div>
                                        <div class="uk-width-expand uk-visible@m">
                                            <img src="<?= $v['img'] ?>" alt="">
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>

                <ul class="uk-slider-nav uk-dotnav home__slider__dots uk-flex-center uk-margin"></ul>

            </div>
        </div>
    </div>
</div>
<!--/slider-->


<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-h2 home__slider__title uk-text-center">CÁC SẢN PHẨM VÀ DỊCH VỤ CỦA TLOGISTICS</h2>
    </div>

    <div class="uk-margin-medium-top uk-background-muted">
        <div class="uk-container">
            <div class="home__nav">
                <ul class="uk-child-width-expand uk-margin-remove-bottom" uk-tab uk-switcher="connect: .my-class">
                    <?php
                    $data = array(
                        array(
                            'icon' => 'icon1',
                            'txt' => 'Phù Hiệu & Giấy liên vận',
                            'href' => 'product1',
                        ),
                        array(
                            'icon' => 'icon2',
                            'txt' => 'Định vị xe máy và ô tô',
                            'href' => 'product2',
                        ),
                        array(
                            'icon' => 'icon3',
                            'txt' => 'Định vị hợp chuẩn',
                            'href' => 'product3',
                        ),
                        array(
                            'icon' => 'icon4',
                            'txt' => 'Camera nghị định 10',
                            'href' => 'product4',
                        ),
                        array(
                            'icon' => 'icon5',
                            'txt' => 'CB nhiên liệu & Nhiệt độ',
                            'href' => 'product5',
                        ),
                        array(
                            'icon' => 'icon6',
                            'txt' => 'Camera An Ninh',
                            'href' => 'product6',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <li class="<?= ($k == 0)?'uk-active':'' ?>">
                            <a href="#<?= $v['href'] ?>" class="uk-flex-column">
                                <div class="home__nav__icon <?= $v['icon'] ?>"></div>
                                <span class="line-clamp-1 item__15 uk-visible@m"><?= $v['txt'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <ul class="uk-switcher my-class">
        <li>
            <?php require "template-parts/layouts/product1.php"; ?>
        </li>
        <li>
            <?php require "template-parts/layouts/product2.php"; ?>
        </li>
        <li>
            <?php require "template-parts/layouts/product3.php"; ?>
        </li>
        <li>
            <?php require "template-parts/layouts/product4.php"; ?>
        </li>
        <li>
            <?php require "template-parts/layouts/product5.php"; ?>
        </li>
        <li>
            <?php require "template-parts/layouts/product6.php"; ?>
        </li>
    </ul>
</div>


<!--Lí do Chọn chúng tôi-->
<div class="uk-section uk-background-muted">
    <div class="uk-container">
        <h2 class="uk-h2 home__slider__title uk-text-center uk-text-uppercase">Lí do Chọn chúng tôi</h2>
        <div class="uk-grid uk-child-width-1-2@m uk-margin-medium uk-flex-middle" uk-grid>
            <div>
                <img src="images/n-img-2.png" alt="">
            </div>
            <div class="uk-flex-first@m">
                <div class="uk-child-width uk-grid" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'img' => 'images/mohinh/n-l-ico5.png',
                            'title' => 'Hệ thống máy chủ dữ liệu',
                            'desc' => 'Lưu trữ cơ sở dữ liệu của hệ thống. Các dữ liệu hành trình, hình ảnh, video của phương tiện được lưu trữ và xử lý tại đây',
                        ),
                        array(
                            'img' => 'images/mohinh/n-l-ico6.png',
                            'title' => 'Hệ thống máy chủ ứng dụng',
                            'desc' => 'Tiếp nhận và xử lý các yêu cầu từ người dùng, phân tích, xử lý nghiệp vụ và trả kết quả cho người dùng',
                        ),
                        array(
                            'img' => 'images/mohinh/n-l-ico7.png',
                            'title' => 'Thuê bao giám sát hành trình',
                            'desc' => 'Là các thiết bị giám sát hành trình, camera hành trình được gắn lên phương tiện của người dùng',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <div>
                            <div class="uk-grid" uk-grid>
                                <div class="uk-width-auto">
                                    <img src="<?= $v['img'] ?>" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <div class="home__product2__title"><?= $v['title'] ?></div>
                                    <div class="home__product2__desc item__10"><?= $v['desc'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Lí do Chọn chúng tôi-->

<!--/KHÁCH HÀNG CỦA V-TRACKING-->
<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-h2 home__slider__title uk-text-center uk-text-uppercase">KHÁCH HÀNG CỦA V-TRACKING</h2>
        <div class="uk-child-width-1-3@m uk-flex-center uk-margin-medium-top" uk-grid>
            <div>
                <div class="home__khachhang__box" data-src="images/n-bg-4.png" uk-img>
                    <div class="home__khachhang__box__txt1">26000</div>
                    <div class="home__khachhang__box__txt2">Tổng số khách hàng đang sử dụng dịch vụ</div>
                </div>
            </div>
            <div>
                <div class="home__khachhang__box" data-src="images/n-bg-5.png" uk-img>
                    <div class="home__khachhang__box__txt1">68000</div>
                    <div class="home__khachhang__box__txt2">Tổng số thuê bao đã kích hoạt dịch vụ</div>
                </div>
            </div>
        </div>
        <div class="uk-margin-medium uk-text-center home__khachhang__box__txt2">
            <div>Dịch vụ V-Tracking chính thức được cung cấp từ năm 2012.</div>
            <div>Một số khách hàng tiêu biểu như sau:</div>
        </div>
        <div class="uk-child-width-expand@m" uk-grid>
            <?php
            $data = array(
                'images/n-client-1.png',
                'images/n-client-2.png',
                'images/n-client-3.png',
                'images/n-client-4.png',
                'images/n-client-5.png',
                'images/n-client-6.png',
            );
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="home__khachhang__img">
                    <img src="<?= $v ?>" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/KHÁCH HÀNG CỦA V-TRACKING-->

<?php require "template-parts/layouts/footer.php"; ?>