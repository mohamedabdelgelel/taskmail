
<!--
<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">ابقى على تواصل</h3>
                        <p>احصل على جميع التحديثات على البريد الالكترونى</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="البريد الالكترونى">
                            <button class="btn btn_get btn_get_two" type="submit">اشترك</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">روابط هامة</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">الرئيسية</a></li>
                            <li><a href="#">عن الشركة</a></li>
                            <li><a href="#">خدماتنا</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">روابط هامة</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">الاخبار</a></li>
                            <li><a href="#">اتصل بنا</a></li>
                            <li><a href="#">الدخول</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">تابعونا على</h3>
                        <div class="f_social_icon">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-pinterest"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12">
                    <p class="mb-0 f_400">ﺟﻤﻴﻊ ﺍﻟﺤﻘﻮق ﻣﺤﻔﻮﻇﺔ © للشركة الوطنية الاولى </p>
                </div>

            </div>
        </div>
    </div>
</footer>
-->
<!-- Footer Area Start Here -->
<footer class="footer-wrap-layout1 section-shape1">
    <div class="container">
        <div class="footer-bottom-box">
            <div class="row">
              <!--  <div class="col-md-6">
                    <div class="copyright">ﺟﻤﻴﻊ ﺍﻟﺤﻘﻮﻕ ﻣﺤﻔﻮﻇﺔ © للشركة الوطنية الاولى   </div>
                </div>-->
                <div class="col-md-12">
                    <div class="footer-bottom-menu">
                        <ul class="text-center">
                            <li><a href="#">الشروط والأحكام</a></li>
                            <li><a href="#">سياسة الخصوصية</a></li>
                            <li><a href="#">تواصل معنا</a></li>
                            <li><a href="#">ﺟﻤﻴﻊ ﺍﻟﺤﻘﻮﻕ ﻣﺤﻔﻮﻇﺔ © للشركة الوطنية الاولى</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Area End Here -->
<!-- Offcanvas Menu Start -->
<!-- Offcanvas Menu End -->
</div>
<!-- jquery-->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Plugins js -->
<script src="js/plugins.js"></script>
<!-- Popper js -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- MeanMenu js -->
<script src="js/jquery.meanmenu.min.js"></script>
<!-- Nivo Slider js -->
<script src="vendor/slider/js/jquery.nivo.slider.js"></script>
<script src="vendor/slider/home.js"></script>
<!-- Owl Carousel js -->
<script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
<!-- Magnific Popup js -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- CounterUp js -->
<script src="js/jquery.counterup.min.js"></script>
<!-- WayPoints js -->
<script src="js/waypoints.min.js"></script>

<!-- Select 2 js -->
<script src="js/select2.min.js"></script>
<!-- Datetime Picker js -->
<script src="js/jquery.datetimepicker.full.min.js"></script>
<!-- Validator js -->
<script src="js/validator.min.js"></script>
<script src="js/custom-file-input.js"></script>
<!-- Main js -->
<script src="js/main_rtl.js"></script>


<script>
    $('#sign-in-btn').click(function(){
        $('#sign-in').addClass('active');

    });
    $('.log-overlay').click(function(){

        $('#sign-in').removeClass('active');
        $('#sign-up').removeClass('active');
    });

    $('#sign-up-btn').click(function(){
        $('#sign-up').addClass('active');

    });


    $(document).on('change', '#services', function() {
        if ($(this).val()== 1) {
            $('#nationality').val(1);
            $('#nationality option[value="2"]').prop('disabled', true);
            $('#nationality option[value="1"]').prop('disabled', false);

        }
        else if ($(this).val()== 2) {
            $('#nationality').val(2);
            $('#nationality option[value="1"]').prop('disabled', true);
            $('#nationality option[value="2"]').prop('disabled', false);
        }
    });


</script>
