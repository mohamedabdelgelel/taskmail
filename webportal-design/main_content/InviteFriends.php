<!-- Blog Area Start Here -->

<section id="tabs" class="section-padding-2-10 project-tab profile mt75" style="display: inline-block;width: 100%;">
    <div class="container">
        <div class="dashoboard_sidebar ng-scope mCustomScrollbar _mCS_1 mCS-dir-rtl mCS_no_scrollbar">
            <div id="mCSB_1" class="mCustomScrollBox mCS-dark-thin mCSB_vertical mCSB_inside" style="max-height: none;"
                 tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                     style="position:relative; top:0; left:0;" dir="rtl">
                    <div class="panel-1">

                        <div class="image"
                             style="background-image:url(https://erp.arco.sa/EnFiles/cbbe169a-90a1-43e0-aef5-0194718ca5d3.png)"></div>
                        <h1>اسم المستخدم</h1>
                        <h2>CIN0083154</h2>
                        <input type="hidden" value="CIN0083154" id="CustomerID">
                    </div>
                    <div class="panel-2">
                        <ul>
                            <li>
                                <a href="?page=profile" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font"><i class="fa fa-home"></i></span>
                                    لوحة المعلومات
                                </a>
                            </li>

                            <li class="dropdown" data-toggle="tooltip" data-placement="top">
                                <a data-toggle="dropdown" class="ng-binding" aria-expanded="true">
                                    <span class="icon-font"><i class="fa fa-user"></i></span> معلوماتي <span
                                            class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="?page=PersonalInfo" class="ng-binding">البيانات الشخصية</a></li>
                                        <li><a href="?page=FamilyInfo" class="ng-binding">معلومات العائلة</a></li>
                                        <li><a href="?page=Location" class="ng-binding">الموقع</a></li>
                                        <li><a href="?page=EmploymentInfo" class="ng-binding">معلومات الوظيفة</a></li>
                                        <li><a href="?page=BankInfo" class="ng-binding">المعلومات المصرفية</a></li>
                                        <li><a href="?page=CustomerDelegation" class="ng-binding">تفوض عميل</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="?page=stuff" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font"><i class="fas fa-file-alt"></i></span>
                                    الموظفين
                                </a>
                            </li>
                            <li><a href="?page=MyContracts" data-toggle="tooltip" data-placement="top"><span
                                            class="icon-font">
                                        <i class="fas fa-file-alt"></i> </span>عقودي</a>
                            </li>
                            <li>
                                <a href="?page=MyPayments" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font">
                                        <i class="fas fa-file-invoice-dollar"></i></span>مدفوعاتي</a>
                            </li>

                            <li><a href="?page=MyTickets" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font">
                                        <i class="fas fa-ticket-alt"></i></span>تذاكري</a></li>

                            <li class="active"><a href="?page=InviteFriends" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font"><i class="fa fa-user-plus"></i></span>إدعو صديقك</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div id="IndividualPortalApp" ng-view="" class="dashoboard_body ng-scope">


            <div class="my-contaract invite-friends ng-scope">
                <h1 class="ng-binding">احصل على 10 نقاط مقابل كل دعوة صديق</h1>
                <p class="ng-binding">دعوة أصدقائك والحصول على عمولة.<br>كلما زاد عدد الأصدقاء الذين تدعوهم كلما زادت
                    عمولتك</p>
                <!-- ngIf: currentLang !='Ar' -->
                <!-- ngIf: currentLang =='Ar' --><h2 ng-if="currentLang =='Ar'" class="ng-scope">دعوة أصدقائك من
                    قبل</h2><!-- end ngIf: currentLang =='Ar' -->
                <div class="content">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                            <div class="block">
                                <h3 class="ng-binding">رقم الجوال</h3>
                                <p class="ng-binding">أدخل رقم جوال صديقك</p>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-xs-12"><input type="tel" id="mobilenumber" ng-model="MobileNumber"
                                                                      class="ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="ng-binding">الرقم يجب ان يبدأ بـ 009665XX XX </h5>
                                <a ng-click="SendMobileInvitation()" ng-show="!disablemobile" class="ng-binding">ارسل
                                    الدعوة</a>
                                <a style="opacity:0.5" ng-show="disablemobile" class="ng-binding ng-hide">ارسل
                                    الدعوة</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="or-block"><span class="ng-binding">أو</span></div>
                            <div class="block">
                                <h3 class="ng-binding">البريد الإلكتروني</h3>
                                <p class="ng-binding">أدخل البريد الإلكتروني الخاص بصديقك</p>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-xs-12"><input type="email" id="invemail" ng-model="Email"
                                                                      required=""
                                                                      class="ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required">
                                        </div>
                                    </div>
                                </div>
                                <div class="email-address ng-binding"><img
                                            src="/app/IndividualCustomerPortalNew/images/payment-icon.png" alt="">في حال
                                    إضافة اكثر من بريد يرجى وضع فاصلة بين كل بريد
                                </div>
                                <a ng-click="SendEmailInvitation()" ng-show="!disableemail" class="ng-binding">ارسل
                                    الدعوة</a>
                                <a style="opacity:0.5" ng-show="disableemail" class="ng-binding ng-hide">ارسل الدعوة</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="green-border"></div>
                <div class="bottom-content">
                    <h4 class="ng-binding">أكثر من طريقة لدعوة الأصدقاء</h4>
                    <h6 class="ng-binding">بإمكانك دعوة اصدقائك عن طريق حساباتهم في تطبيقات التواصل الاجتماعي</h6>
                    <div class="copy-link">
                        <!-- ngIf: Afflicatecode -->
                    </div>
                    <div class="invite-via">
                        <h5 class="ng-binding">الدعوة بواسطة:</h5>
                        <ul>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube-play"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Blog Area End Here -->
