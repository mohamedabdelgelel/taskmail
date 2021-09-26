<!-- Blog Area Start Here -->

<section id="tabs" class="section-padding-2-10 project-tab profile mt75" style="display: inline-block;width: 100%;">
    <div class="container">
        <div class="dashoboard_sidebar ng-scope mCustomScrollbar _mCS_1 mCS-dir-rtl mCS_no_scrollbar">
            <div id="mCSB_1" class="mCustomScrollBox mCS-dark-thin mCSB_vertical mCSB_inside" style="max-height: none;"
                 tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                     style="position:relative; top:0; left:0;">
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

                            <li class="dropdown open active" data-toggle="tooltip" data-placement="top">
                                <a data-toggle="dropdown" class="ng-binding" aria-expanded="true">
                                    <span class="icon-font"><i class="fa fa-user"></i></span> معلوماتي <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="?page=PersonalInfo"" class="active">البيانات الشخصية</a></li>
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
                            <li><a href="?page=MyContracts" data-toggle="tooltip" data-placement="top"><span class="icon-font">
                                        <i class="fas fa-file-alt"></i> </span>عقودي</a>
                            </li>
                            <li><a href="?page=MyPayments" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font">
                                        <i class="fas fa-file-invoice-dollar"></i></span>مدفوعاتي</a>
                            </li>

                            <li><a href="?page=MyTickets" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font">
                                        <i class="fas fa-ticket-alt"></i></span>تذاكري</a></li>

                            <li><a href="?page=InviteFriends" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font"><i class="fa fa-user-plus"></i></span>إدعو صديقك</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div id="IndividualPortalApp" ng-view="" class="dashoboard_body ng-scope">
            <div class="mypersonal_information ng-scope">

                <h1 class="title-page ng-binding">البيانات الشخصية</h1>
                <div class="panel-group" id="dasboard_my_informtion">
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a data-toggle="collapse" data-parent="#dasboard_my_informtion" data-target="#topic-1" class="ng-binding">معلومات
                                الحساب</a>
                        </div>
                        <div id="topic-1" class="panel-collapse collapse in collapse show">
                            <div class="panel-body">
                                <form class="ng-pristine ng-valid">
                                    <div class="form-block">

                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">الإسم الأول</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12"><input type="text" ng-model="user.FirstName"
                                                                                   placeholder="اسمك"
                                                                                   class="ng-pristine ng-untouched ng-valid ng-empty">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">الاسم الثاني</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12"><input type="text"
                                                                                   ng-model="user.MiddleName"
                                                                                   placeholder="اسم الأب"
                                                                                   class="ng-pristine ng-untouched ng-valid ng-empty">
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span>{{'Third Name' |translate}}</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12"><input type="text" ng-model="user.LastName" placeholder="{{'Third Name'|translate}}" /></div>
                                        </div>
                                    </div>-->
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">أسم العائلة</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12"><input type="text"
                                                                                   ng-model="user.FamilyName"
                                                                                   placeholder="اسم جده"
                                                                                   class="ng-pristine ng-untouched ng-valid ng-empty">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-selection" style="background:none;">
                                        <div class="form-block">
                                            <div class="row clearfix">
                                                <div class="col-sm-4 col-xs-12">
                                                    <label><span class="ng-binding">الجنسية</span> :</label>
                                                </div>
                                                <div class="col-sm-8 col-xs-12">
                                                    <!-- ngIf: currentLang !='Ar' -->
                                                    <!-- ngIf: currentLang =='Ar' --><select ng-if="currentLang =='Ar'"
                                                                                             style="margin-bottom:15px;"
                                                                                             class="select ng-pristine ng-untouched ng-valid ng-scope ng-empty"
                                                                                             ng-model="user.Nationality"
                                                                                             ng-options="g.value as g.textAr for g in Nationality">
                                                        <option value="" class="ng-binding" selected="selected">
                                                            الجنسية
                                                        </option>
                                                        <option label="السعودية" value="string:1">السعودية</option>
                                                        <option label="أنتيغوا وبربودا
" value="string:10">أنتيغوا وبربودا
                                                        </option>
                                                        <option label="أيسلندا" value="string:100">أيسلندا</option>
                                                        <option label="أفغانستان" value="string:1000">أفغانستان</option>
                                                        <option label="الهند" value="string:101">الهند</option>
                                                        <option label="إندونيسيا" value="string:102">إندونيسيا</option>
                                                        <option label="إيران" value="string:103">إيران</option>
                                                        <option label="العراق" value="string:104">العراق</option>
                                                        <option label="أيرلندا" value="string:105">أيرلندا</option>
                                                        <option label="جزيرة آيل أوف مان" value="string:106">جزيرة آيل
                                                            أوف مان
                                                        </option>
                                                        <option label="فلسطين" value="string:107">فلسطين</option>
                                                        <option label="إيطاليا" value="string:108">إيطاليا</option>
                                                        <option label="جامايكا" value="string:109">جامايكا</option>
                                                        <option label="الأرجنتين" value="string:11">الأرجنتين</option>
                                                        <option label="اليابان" value="string:110">اليابان</option>
                                                        <option label="جيرسى" value="string:111">جيرسى</option>
                                                        <option label="الأردن" value="string:112">الأردن</option>
                                                        <option label="كازاخستان" value="string:113">كازاخستان</option>
                                                        <option label="كينيا" value="string:114">كينيا</option>
                                                        <option label="كيريباتي
" value="string:115">كيريباتي
                                                        </option>
                                                        <option label="كوريا الجنوبية" value="string:117">كوريا
                                                            الجنوبية
                                                        </option>
                                                        <option label="الكويت" value="string:118">الكويت</option>
                                                        <option label="كيرجستان" value="string:119">كيرجستان</option>
                                                        <option label="أرمينيا" value="string:12">أرمينيا</option>
                                                        <option label="لاتفيا" value="string:121">لاتفيا</option>
                                                        <option label="لبنان" value="string:122">لبنان</option>
                                                        <option label="ليسوتو" value="string:123">ليسوتو</option>
                                                        <option label="ليبريا" value="string:124">ليبريا</option>
                                                        <option label="ليبيا" value="string:125">ليبيا</option>
                                                        <option label="ليختنشتين
" value="string:126">ليختنشتين
                                                        </option>
                                                        <option label="ليتوانيا" value="string:127">ليتوانيا</option>
                                                        <option label="لوكسمبورج" value="string:128">لوكسمبورج</option>
                                                        <option label="ما كاو" value="string:129">ما كاو</option>
                                                        <option label="أروبا
" value="string:13">أروبا
                                                        </option>
                                                        <option label="مدغشقر" value="string:131">مدغشقر</option>
                                                        <option label="ملاوي" value="string:132">ملاوي</option>
                                                        <option label="ماليزيا" value="string:133">ماليزيا</option>
                                                        <option label="المالديف" value="string:134">المالديف</option>
                                                        <option label="مالى" value="string:135">مالى</option>
                                                        <option label="مالطا" value="string:136">مالطا</option>
                                                        <option label="جزر مارشال
" value="string:137">جزر مارشال
                                                        </option>
                                                        <option label="مارتينيك
" value="string:138">مارتينيك
                                                        </option>
                                                        <option label="موريتانيا" value="string:139">موريتانيا</option>
                                                        <option label="استراليا" value="string:14">استراليا</option>
                                                        <option label="موريشيوس" value="string:140">موريشيوس</option>
                                                        <option label="مايوت" value="string:141">مايوت</option>
                                                        <option label="المكسيك" value="string:142">المكسيك</option>
                                                        <option label="مولدافيا
" value="string:144">مولدافيا
                                                        </option>
                                                        <option label="موناكو" value="string:145">موناكو</option>
                                                        <option label="منغوليا" value="string:146">منغوليا</option>
                                                        <option label="مونتسيرات
" value="string:147">مونتسيرات
                                                        </option>
                                                        <option label="المغرب" value="string:148">المغرب</option>
                                                        <option label="موزمبيق" value="string:149">موزمبيق</option>
                                                        <option label="النمسا" value="string:15">النمسا</option>
                                                        <option label="ميانمار" value="string:150">ميانمار</option>
                                                        <option label="ناميبيا" value="string:151">ناميبيا</option>
                                                        <option label="ناورو
" value="string:152">ناورو
                                                        </option>
                                                        <option label="نيبال" value="string:153">نيبال</option>
                                                        <option label="هولندا" value="string:154">هولندا</option>
                                                        <option label="هولانده انتيلاس" value="string:155">هولانده
                                                            انتيلاس
                                                        </option>
                                                        <option label="كاليدونيا الجديدة
" value="string:156">كاليدونيا الجديدة
                                                        </option>
                                                        <option label="نيو زيلندا" value="string:157">نيو زيلندا
                                                        </option>
                                                        <option label="نيكاراجوا" value="string:158">نيكاراجوا</option>
                                                        <option label="النيجر" value="string:159">النيجر</option>
                                                        <option label="ازيربيجان" value="string:16">ازيربيجان</option>
                                                        <option label="نيجيريا" value="string:160">نيجيريا</option>
                                                        <option label="نييوي
" value="string:161">نييوي
                                                        </option>
                                                        <option label="جزيرة نورفولك" value="string:162">جزيرة نورفولك
                                                        </option>
                                                        <option label="جزر ماريانا الشمالية
" value="string:163">جزر ماريانا الشمالية
                                                        </option>
                                                        <option label="النرويج" value="string:164">النرويج</option>
                                                        <option label="عمان" value="string:165">عمان</option>
                                                        <option label="باكستان" value="string:166">باكستان</option>
                                                        <option label="بالاو
" value="string:167">بالاو
                                                        </option>
                                                        <option label="الأراضي الفلسطينية المحتلة" value="string:168">
                                                            الأراضي الفلسطينية المحتلة
                                                        </option>
                                                        <option label="بنما" value="string:169">بنما</option>
                                                        <option label="جزر الباهاماس" value="string:17">جزر الباهاماس
                                                        </option>
                                                        <option label="بابوا غينيا الجديدة
" value="string:170">بابوا غينيا الجديدة
                                                        </option>
                                                        <option label="باراغواي" value="string:171">باراغواي</option>
                                                        <option label="بيرو" value="string:172">بيرو</option>
                                                        <option label="الفلبين" value="string:173">الفلبين</option>
                                                        <option label="بيتكيرن" value="string:174">بيتكيرن</option>
                                                        <option label="بولا ندا" value="string:175">بولا ندا</option>
                                                        <option label="البرتغال" value="string:176">البرتغال</option>
                                                        <option label="بورتوريكو" value="string:177">بورتوريكو</option>
                                                        <option label="قطر" value="string:178">قطر</option>
                                                        <option label="ريونيون
" value="string:179">ريونيون
                                                        </option>
                                                        <option label="البحرين" value="string:18">البحرين</option>
                                                        <option label="رومانيا" value="string:180">رومانيا</option>
                                                        <option label="روسيا" value="string:181">روسيا</option>
                                                        <option label="رواندا" value="string:182">رواندا</option>
                                                        <option label="Saint Helena" value="string:183">Saint Helena
                                                        </option>
                                                        <option label="سانت كيتس ونيفيس" value="string:184">سانت كيتس
                                                            ونيفيس
                                                        </option>
                                                        <option label="سانت لوسيا
" value="string:185">سانت لوسيا
                                                        </option>
                                                        <option label="سان بيار و ميكلون" value="string:186">سان بيار و
                                                            ميكلون
                                                        </option>
                                                        <option label="ساموا
" value="string:188">ساموا
                                                        </option>
                                                        <option label="سان مار" value="string:189">سان مار</option>
                                                        <option label="بنجلاديش" value="string:19">بنجلاديش</option>
                                                        <option label="ساو تومي وبرينسيبي
" value="string:190">ساو تومي وبرينسيبي
                                                        </option>
                                                        <option label="السنغال" value="string:192">السنغال</option>
                                                        <option label="جمهورية صربيا
" value="string:193">جمهورية صربيا
                                                        </option>
                                                        <option label="سيشيل" value="string:194">سيشيل</option>
                                                        <option label="اسبانيا" value="string:195">اسبانيا</option>
                                                        <option label="سنغافورة" value="string:196">سنغافورة</option>
                                                        <option label="جمهورية سلوفاكيا" value="string:197">جمهورية
                                                            سلوفاكيا
                                                        </option>
                                                        <option label="سلوفينيا" value="string:198">سلوفينيا</option>
                                                        <option label="جزر سليمان
" value="string:199">جزر سليمان
                                                        </option>
                                                        <option label="جزر آلاند" value="string:2">جزر آلاند</option>
                                                        <option label="بربادوس" value="string:20">بربادوس</option>
                                                        <option label="الصومال" value="string:200">الصومال</option>
                                                        <option label="جنوب أفريقيا" value="string:201">جنوب أفريقيا
                                                        </option>
                                                        <option label="سريلانكا" value="string:204">سريلانكا</option>
                                                        <option label="السودان" value="string:205">السودان</option>
                                                        <option label="سورينام
" value="string:206">سورينام
                                                        </option>
                                                        <option label="سفالبارد" value="string:207">سفالبارد</option>
                                                        <option label="سوازيلاند" value="string:208">سوازيلاند</option>
                                                        <option label="السويد" value="string:209">السويد</option>
                                                        <option label="بيلاروسيا" value="string:21">بيلاروسيا</option>
                                                        <option label="سويسرا" value="string:210">سويسرا</option>
                                                        <option label="سورية" value="string:211">سورية</option>
                                                        <option label="تايوان" value="string:212">تايوان</option>
                                                        <option label="تاجاكستان" value="string:213">تاجاكستان</option>
                                                        <option label="تايلاند" value="string:215">تايلاند</option>
                                                        <option label="تيمور الشرقية
" value="string:216">تيمور الشرقية
                                                        </option>
                                                        <option label="توغو
" value="string:217">توغو
                                                        </option>
                                                        <option label="توكيلاو" value="string:218">توكيلاو</option>
                                                        <option label="التونجو" value="string:219">التونجو</option>
                                                        <option label="بلجيكا" value="string:22">بلجيكا</option>
                                                        <option label="ترينيداد وتوباغو" value="string:220">ترينيداد
                                                            وتوباغو
                                                        </option>
                                                        <option label="تونس" value="string:221">تونس</option>
                                                        <option label="تركيا" value="string:222">تركيا</option>
                                                        <option label="تركمينستان" value="string:223">تركمينستان
                                                        </option>
                                                        <option label="جزر تركس وكايكوس" value="string:224">جزر تركس
                                                            وكايكوس
                                                        </option>
                                                        <option label="توفالو
" value="string:225">توفالو
                                                        </option>
                                                        <option label="اوغندا" value="string:226">اوغندا</option>
                                                        <option label="اوكرانيا" value="string:227">اوكرانيا</option>
                                                        <option label="الإمارات" value="string:228">الإمارات</option>
                                                        <option label="المملكة المتحدة
" value="string:229">المملكة المتحدة
                                                        </option>
                                                        <option label="بيليز" value="string:23">بيليز</option>
                                                        <option label="الولايات المتحدة" value="string:230">الولايات
                                                            المتحدة
                                                        </option>
                                                        <option label="أورغواي" value="string:232">أورغواي</option>
                                                        <option label="اوزبيكستان" value="string:233">اوزبيكستان
                                                        </option>
                                                        <option label="فانواتو
" value="string:234">فانواتو
                                                        </option>
                                                        <option label="فنزويلا" value="string:235">فنزويلا</option>
                                                        <option label="فييتنام" value="string:236">فييتنام</option>
                                                        <option label="الجزر العذراء البريطانية
" value="string:237">الجزر العذراء البريطانية
                                                        </option>
                                                        <option label="الجزر العذراء الأمريكي
" value="string:238">الجزر العذراء الأمريكي
                                                        </option>
                                                        <option label="والس وفوتونا
" value="string:239">والس وفوتونا
                                                        </option>
                                                        <option label="بينين" value="string:24">بينين</option>
                                                        <option label="الصحراء الغربية" value="string:240">الصحراء
                                                            الغربية
                                                        </option>
                                                        <option label="اليمن" value="string:241">اليمن</option>
                                                        <option label="زامبيا" value="string:242">زامبيا</option>
                                                        <option label="زيمبابوي" value="string:243">زيمبابوي</option>
                                                        <option label="Tanzania" value="string:244">Tanzania</option>
                                                        <option label="Kosovo" value="string:245">Kosovo</option>
                                                        <option label="جزر برمود
" value="string:25">جزر برمود
                                                        </option>
                                                        <option label="بوتان
" value="string:26">بوتان
                                                        </option>
                                                        <option label="بوليفيا
" value="string:27">بوليفيا
                                                        </option>
                                                        <option label="البوسنةوالهرسك" value="string:28">
                                                            البوسنةوالهرسك
                                                        </option>
                                                        <option label="بوتسوانا" value="string:29">بوتسوانا</option>
                                                        <option label="ألبانيا" value="string:3">ألبانيا</option>
                                                        <option label="جزيرة بوفيت" value="string:30">جزيرة بوفيت
                                                        </option>
                                                        <option label="البرازيل" value="string:31">البرازيل</option>
                                                        <option label="إقليم المحيط البريطاني الهندي" value="string:32">
                                                            إقليم المحيط البريطاني الهندي
                                                        </option>
                                                        <option label="بلغاريا" value="string:34">بلغاريا</option>
                                                        <option label="بوركينا فاسو" value="string:35">بوركينا فاسو
                                                        </option>
                                                        <option label="بوروندى" value="string:36">بوروندى</option>
                                                        <option label="كمبوديا
" value="string:37">كمبوديا
                                                        </option>
                                                        <option label="الكاميرون" value="string:38">الكاميرون</option>
                                                        <option label="كندا" value="string:39">كندا</option>
                                                        <option label="الجزائر" value="string:4">الجزائر</option>
                                                        <option label="الرأس الأخضر
" value="string:40">الرأس الأخضر
                                                        </option>
                                                        <option label="جزر سيمان" value="string:41">جزر سيمان</option>
                                                        <option label="جمهوريةأفريقياالوسطى" value="string:42">
                                                            جمهوريةأفريقياالوسطى
                                                        </option>
                                                        <option label="تشاد" value="string:43">تشاد</option>
                                                        <option label="شيلى" value="string:44">شيلى</option>
                                                        <option label="الصين" value="string:45">الصين</option>
                                                        <option label="جزيرة الكريسماس" value="string:46">جزيرة
                                                            الكريسماس
                                                        </option>
                                                        <option label="جزر كوكوس (كيلينغ)" value="string:47">جزر كوكوس
                                                            (كيلينغ)
                                                        </option>
                                                        <option label="كولومبيا" value="string:48">كولومبيا</option>
                                                        <option label="جزر القمر" value="string:49">جزر القمر</option>
                                                        <option label="سامواالأمريكية" value="string:5">سامواالأمريكية
                                                        </option>
                                                        <option label="الكونغو" value="string:50">الكونغو</option>
                                                        <option label="جزر كوك
" value="string:52">جزر كوك
                                                        </option>
                                                        <option label="كوستاريكا" value="string:53">كوستاريكا</option>
                                                        <option label="ساحل العاج
" value="string:54">ساحل العاج
                                                        </option>
                                                        <option label="كرواتيا" value="string:55">كرواتيا</option>
                                                        <option label="كوبا" value="string:56">كوبا</option>
                                                        <option label="قبرص" value="string:57">قبرص</option>
                                                        <option label="جمهوريةالتشيك" value="string:58">جمهوريةالتشيك
                                                        </option>
                                                        <option label="الدانمارك" value="string:59">الدانمارك</option>
                                                        <option label="أندورا
" value="string:6">أندورا
                                                        </option>
                                                        <option label="جيبوتى" value="string:60">جيبوتى</option>
                                                        <option label="دومينيكا
" value="string:61">دومينيكا
                                                        </option>
                                                        <option label="ج الدومينيكان" value="string:62">ج الدومينيكان
                                                        </option>
                                                        <option label="الإكوادور" value="string:63">الإكوادور</option>
                                                        <option label="مصر" value="string:64">مصر</option>
                                                        <option label="السلفادور" value="string:65">السلفادور</option>
                                                        <option label="غينيا الاستوائي
" value="string:66">غينيا الاستوائي
                                                        </option>
                                                        <option label="إريتريا" value="string:67">إريتريا</option>
                                                        <option label="ايستونيا" value="string:68">ايستونيا</option>
                                                        <option label="إثيوبيا" value="string:69">إثيوبيا</option>
                                                        <option label="انغولا" value="string:7">انغولا</option>
                                                        <option label="جزر فوكلاند
" value="string:70">جزر فوكلاند
                                                        </option>
                                                        <option label="جزر فارو
" value="string:71">جزر فارو
                                                        </option>
                                                        <option label="فيجى" value="string:72">فيجى</option>
                                                        <option label="فنلندا" value="string:73">فنلندا</option>
                                                        <option label="فرنسا" value="string:74">فرنسا</option>
                                                        <option label="غويانا الفرنسية
" value="string:75">غويانا الفرنسية
                                                        </option>
                                                        <option label="بولينيزيا الفرنسية
" value="string:76">بولينيزيا الفرنسية
                                                        </option>
                                                        <option label="المناطق الجنوبية لفرنسا" value="string:77">
                                                            المناطق الجنوبية لفرنسا
                                                        </option>
                                                        <option label="الغابون" value="string:78">الغابون</option>
                                                        <option label="غامبيا" value="string:79">غامبيا</option>
                                                        <option label="أنغويلا
" value="string:8">أنغويلا
                                                        </option>
                                                        <option label="جو رجيا" value="string:80">جو رجيا</option>
                                                        <option label="ألمانيا" value="string:81">ألمانيا</option>
                                                        <option label="غانا" value="string:82">غانا</option>
                                                        <option label="جبل طارق" value="string:83">جبل طارق</option>
                                                        <option label="اليونان" value="string:84">اليونان</option>
                                                        <option label="جرينلاند
" value="string:85">جرينلاند
                                                        </option>
                                                        <option label="غرينادا
" value="string:86">غرينادا
                                                        </option>
                                                        <option label="جزر جوادلوب
" value="string:87">جزر جوادلوب
                                                        </option>
                                                        <option label="جوام
" value="string:88">جوام
                                                        </option>
                                                        <option label="جواتيمالا" value="string:89">جواتيمالا</option>
                                                        <option label="أنتاركتيكا
" value="string:9">أنتاركتيكا
                                                        </option>
                                                        <option label="غيرنسي" value="string:90">غيرنسي</option>
                                                        <option label="غينيا
" value="string:91">غينيا
                                                        </option>
                                                        <option label="غينيا-بيساو
" value="string:92">غينيا-بيساو
                                                        </option>
                                                        <option label="غويان" value="string:93">غويان</option>
                                                        <option label="هاييتي" value="string:94">هاييتي</option>
                                                        <option label="الفاتيكان" value="string:96">الفاتيكان</option>
                                                        <option label="هندوراس" value="string:97">هندوراس</option>
                                                        <option label="هونج كونج" value="string:98">هونج كونج</option>
                                                        <option label="المجر" value="string:99">المجر</option>
                                                    </select><!-- end ngIf: currentLang =='Ar' -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">الجنس</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <div class="radio-check"><input type="radio" ng-model="IsGender"
                                                                                name="r1" value="Male"
                                                                                class="ng-pristine ng-untouched ng-valid ng-not-empty"><label
                                                            class="ng-binding">ذكر</label></div>
                                                <div class="radio-check"><input type="radio" ng-model="IsGender"
                                                                                name="r1" value="Female"
                                                                                class="ng-pristine ng-untouched ng-valid ng-not-empty"><label
                                                            class="ng-binding">أنثى</label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">تاريخ الميلاد (ميلادي)</span>:</label>
                                            </div>
                                            <div class="col-sm-5 col-sm-8 col-xs-12">
                                                <input type="text" ng-model="user.DOBGeorgian" datedirtodayfuture=""
                                                       format="'dd/MM/yyyy'" ng-change="Gethiridate(user.DOBGeorgian)"
                                                       class="form-control ng-pristine ng-untouched ng-valid hasDatepicker ng-empty"
                                                       placeholder="تاريخ الميلاد (ميلادي)" readonly="readonly"
                                                       id="dp1574233138648">
                                                <!--  <input type="date" ng-model="user.DOBGeorgian" ng-change="Gethiridate(user.DOBGeorgian)" placeholder="DOB (Georgian)">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block ">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">تاريخ الميلاد (هجري)</span> :</label>
                                            </div>
                                            <div class="col-sm-5 col-sm-8 col-xs-12">
                                                <input type="text" readonly="" id="uesrHijriDOB" value=""
                                                       placeholder="تاريخ الميلاد (هجري)">
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><a data-toggle="collapse" data-parent="#dasboard_my_informtion"
                                                      data-target="#topic-2" class="ng-binding">رقم هويه/إقامة</a></div>
                        <div id="topic-2" class="panel-collapse collapse">
                            <div class="panel-body">

                                <form class="ng-pristine ng-valid">
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">رقم هويه/إقامة</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <!-- ngIf: user.OldIDNumber && user.VerificationStatus ==1 -->
                                                <!-- ngIf: (user.OldIDNumber && !user.VerificationStatus) -->
                                                <!-- ngIf: (!user.OldIDNumber && !user.VerificationStatus) --><input
                                                        type="text"
                                                        ng-if="(!user.OldIDNumber &amp;&amp; !user.VerificationStatus)"
                                                        ng-model="user.IDNumber" placeholder="رقم هويه/إقامة"
                                                        class="ng-pristine ng-untouched ng-valid ng-scope ng-empty">
                                                <!-- end ngIf: (!user.OldIDNumber && !user.VerificationStatus) -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span
                                                            class="ng-binding">تاريخ انتهاء الهوية / الإقامة</span>:</label>
                                            </div>
                                            <div class="col-sm-5 col-sm-8 col-xs-12"><input type="text"
                                                                                            ng-model="user.IqamaExpiryDate"
                                                                                            datedirtodayfuture=""
                                                                                            format="'dd/MM/yyyy'"
                                                                                            class="form-control ng-pristine ng-untouched ng-valid hasDatepicker ng-empty"
                                                                                            placeholder="تاريخ انتهاء الهوية / الإقامة"
                                                                                            readonly="readonly"
                                                                                            id="dp1574233138649"></div>
                                        </div>
                                    </div>
                                    <h6 class="ng-binding">حمل صورة الاقامة/الإقامة</h6>
                                    <div class="form-block">

                                            <div class="col-xs-12">
                                                <div class="box">
                                                    <input type="hidden" id="customerrecid" value="650001">
                                                    <input type="file" name="files" id="fileAttach"
                                                           class="inputfile inputfile-5"
                                                           data-multiple-caption="{count} files selected" multiple="">
                                                    <label for="fileAttach" style="display:inline-block;"><p
                                                                class="ng-binding">إختار الملف</p><span id="clisttxt"
                                                                                                        class="ng-binding">لم يتم إختيار ملف</span></label>
                                                    <a href="/AttachmentSetup/Downloadfiles?Ids=0" target="_blank"
                                                       class="ng-binding"></a>
                                                </div>
                                            </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><a data-toggle="collapse" data-parent="#dasboard_my_informtion"
                                                      data-target="#topic-3" class="ng-binding">معلومات الاتصال</a>
                        </div>
                        <div id="topic-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form class="ng-pristine ng-valid ng-valid-min ng-valid-max ng-valid-email">
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <!--<div class="col-xs-12"><input type="number"   ng-model="user.MobileNumber" placeholder="{{'Mobile Number'|translate}}" /></div>-->
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">رقم الجوال</span>:</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <customermobileupdate customerid="user.CustomerID"
                                                                      title="'Update Mobile Number'"
                                                                      externalfn="customermobileupdatefn"
                                                                      class="ng-isolate-scope">
                                                    <!--<label ng-hide="externalfn.hideTemplateUpdate">{{CustomerContactDetails.MobileNumber}}</label>-->
                                                    <style>
                                                        hr {
                                                            border-bottom: 1px solid #d3b12b;
                                                        }
                                                    </style>
                                                    <input ng-hide="externalfn.hideTemplateUpdate" type="number"
                                                           value="0564103664" readonly="" min="0" max=""
                                                           placeholder="رقم الجوال">
                                                    <span class="btn btn-primary pull-right ng-binding"
                                                          ng-click="showhistorypopup()"
                                                          ng-hide="externalfn.hideTemplateUpdate">تحديث رقم الجوال</span>


                                                    <a data-target="#mobileupdatehistory" data-toggle="modal"
                                                       id="temphistorypopup"></a>
                                                    <div id="mobileupdatehistory"
                                                         class="modal fade delete-address Confirm_Delivery"
                                                         role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-dismiss" data-dismiss="modal"></div>
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <a class="invite-dismiss" data-dismiss="modal"><i
                                                                                class="fa fa-times"></i></a>
                                                                    <h1 class="ng-binding">تحديث رقم الجوال</h1>
                                                                    <div class="form-field">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12"><input type="tel"
                                                                                                          ng-model="CreateMob.MobileNumber"
                                                                                                          placeholder="رقم الجوال"
                                                                                                          class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="yes-or-no">
                                                                        <!--<a class="cancel" id="cancelpwdPopup" data-dismiss="modal">{{'Cancel' | translate}}</a>-->
                                                                        <a class="btns ng-binding"
                                                                           ng-click="AddOrUpdateMobileNumber()">إنشاء</a>
                                                                    </div>

                                                                    <hr>
                                                                    <table id="my_contracts"
                                                                           class="table my_contracts_table"
                                                                           cellspacing="0" width="100%">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="ng-binding">رقم الجوال</th>
                                                                            <th class="ng-binding">تاريخ الانشاء</th>
                                                                            <th class="ng-binding">الحاله</th>
                                                                            <th class="ng-binding">مفعل</th>
                                                                            <th class="ng-binding">الإجراء</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <!-- ngRepeat: crtline in CustomerContactHistory -->
                                                                        <!-- ngIf: mycontractlist.length<1 -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <a data-target="#verifypopup" data-toggle="modal"
                                                       id="tempverifypopup"></a>
                                                    <div id="verifypopup"
                                                         class="modal fade delete-address Confirm_Delivery"
                                                         role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-dismiss" data-dismiss="modal"></div>
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <a class="invite-dismiss" data-dismiss="modal"><i
                                                                                class="fa fa-times"></i></a>
                                                                    <h1 class="ng-binding">رمز التفعيل</h1>
                                                                    <div class="form-field">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12"><input type="text"
                                                                                                          value=""
                                                                                                          placeholder="رقم الجوال"
                                                                                                          readonly="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-field">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12"><input type="text"
                                                                                                          ng-model="VerifyMob.VerifyCode"
                                                                                                          placeholder="رمز التفعيل"
                                                                                                          class="ng-pristine ng-untouched ng-valid ng-empty">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="yes-or-no">
                                                                        <a class="btns ng-binding"
                                                                           ng-click="CheckVerifyCode()">التفعيل</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </customermobileupdate>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">الاتصال الثاني</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <input type="number" ng-model="user.FemaleContact"
                                                       placeholder="الاتصال الثاني" min="0" max=""
                                                       class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-min ng-valid-max">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">البريد الإلكتروني</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <!--<customeremailupdate customerid="user.CustomerID" title="'Update Email'" externalfn="customereamilupdatefn"></customeremailupdate>-->
                                                <input type="email" ng-model="user.Email"
                                                       placeholder="البريد الإلكتروني"
                                                       class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-email">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="save-changes">
                    <input type="submit" value="حفظ التغييرات" ng-click="saveCustomer(user,user.CustomerID)">
                    <!--  <input type="button" class="cancel" value="Cancel" onclick="ClearFilter();" />-->
                </div>
                <!--<div class="note">
                    <p>Create, manage, and lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet</p>
                </div>-->
            </div>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
