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
                                    <span class="icon-font"><i class="fa fa-user"></i></span> معلوماتي <span
                                            class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="?page=PersonalInfo"" class="ng-binding">البيانات الشخصية</a></li>
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

        <div id="IndividualPortalApp" class="dashoboard_body ng-scope">
            <style class="ng-scope">
                hr {
                    border-bottom: 1px solid #d3b12b;
                }
            </style>
            <div class="mypersonal_information family-information ng-scope">

                <h1 class="title-page ng-binding">تفوض عميل</h1>


                <div class="add-new-location">
                    <a class="add-account ng-binding" ng-click="CreateCustDelegation()">+Add CustomerDelegation</a>
                    <div class="new-account-form" id="CustDelegationpopup">
                        <form class="ng-pristine ng-valid">
                            <h2 class="ng-binding">My CustomerDelegation Details</h2>


                            <div class="form-block">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <label><span class="ng-binding">الاسم</span>:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" ng-model="CustDelegation.Name" id="name" placeholder="الاسم"
                                               class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                </div>
                            </div>

                            <div class="form-block">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <label><span class="ng-binding">IdNumber</span>:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" ng-model="CustDelegation.IdNumber" id="idnumber"
                                               placeholder="IdNumber"
                                               class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                </div>
                            </div>

                            <div class="form-block">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <label><span class="ng-binding">رقم الجوال</span>:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" ng-model="CustDelegation.MobileNumber" id="mobilenumber"
                                               placeholder="رقم الجوال"
                                               class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                </div>
                            </div>
                            <div class="package-selection">
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <label><span class="ng-binding">الجنسية</span>:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <!-- ngIf: currentLang !='Ar' -->
                                            <!-- ngIf: currentLang =='Ar' --><select ng-if="currentLang =='Ar'"
                                                                                     class="select ng-pristine ng-untouched ng-valid ng-scope ng-empty"
                                                                                     ng-model="CustDelegation.Nationality"
                                                                                     ng-options="g.Id as g.DescAr for g in NationalityDrop">
                                                <option value="" class="ng-binding" selected="selected"> الجنسية
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
                                                <option label="جزيرة آيل أوف مان" value="string:106">جزيرة آيل أوف مان
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
                                                <option label="كوريا الجنوبية" value="string:117">كوريا الجنوبية
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
                                                <option label="هولانده انتيلاس" value="string:155">هولانده انتيلاس
                                                </option>
                                                <option label="كاليدونيا الجديدة
" value="string:156">كاليدونيا الجديدة
                                                </option>
                                                <option label="نيو زيلندا" value="string:157">نيو زيلندا</option>
                                                <option label="نيكاراجوا" value="string:158">نيكاراجوا</option>
                                                <option label="النيجر" value="string:159">النيجر</option>
                                                <option label="ازيربيجان" value="string:16">ازيربيجان</option>
                                                <option label="نيجيريا" value="string:160">نيجيريا</option>
                                                <option label="نييوي
" value="string:161">نييوي
                                                </option>
                                                <option label="جزيرة نورفولك" value="string:162">جزيرة نورفولك</option>
                                                <option label="جزر ماريانا الشمالية
" value="string:163">جزر ماريانا الشمالية
                                                </option>
                                                <option label="النرويج" value="string:164">النرويج</option>
                                                <option label="عمان" value="string:165">عمان</option>
                                                <option label="باكستان" value="string:166">باكستان</option>
                                                <option label="بالاو
" value="string:167">بالاو
                                                </option>
                                                <option label="الأراضي الفلسطينية المحتلة" value="string:168">الأراضي
                                                    الفلسطينية المحتلة
                                                </option>
                                                <option label="بنما" value="string:169">بنما</option>
                                                <option label="جزر الباهاماس" value="string:17">جزر الباهاماس</option>
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
                                                <option label="Saint Helena" value="string:183">Saint Helena</option>
                                                <option label="سانت كيتس ونيفيس" value="string:184">سانت كيتس ونيفيس
                                                </option>
                                                <option label="سانت لوسيا
" value="string:185">سانت لوسيا
                                                </option>
                                                <option label="سان بيار و ميكلون" value="string:186">سان بيار و ميكلون
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
                                                <option label="جمهورية سلوفاكيا" value="string:197">جمهورية سلوفاكيا
                                                </option>
                                                <option label="سلوفينيا" value="string:198">سلوفينيا</option>
                                                <option label="جزر سليمان
" value="string:199">جزر سليمان
                                                </option>
                                                <option label="جزر آلاند" value="string:2">جزر آلاند</option>
                                                <option label="بربادوس" value="string:20">بربادوس</option>
                                                <option label="الصومال" value="string:200">الصومال</option>
                                                <option label="جنوب أفريقيا" value="string:201">جنوب أفريقيا</option>
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
                                                <option label="ترينيداد وتوباغو" value="string:220">ترينيداد وتوباغو
                                                </option>
                                                <option label="تونس" value="string:221">تونس</option>
                                                <option label="تركيا" value="string:222">تركيا</option>
                                                <option label="تركمينستان" value="string:223">تركمينستان</option>
                                                <option label="جزر تركس وكايكوس" value="string:224">جزر تركس وكايكوس
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
                                                <option label="الولايات المتحدة" value="string:230">الولايات المتحدة
                                                </option>
                                                <option label="أورغواي" value="string:232">أورغواي</option>
                                                <option label="اوزبيكستان" value="string:233">اوزبيكستان</option>
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
                                                <option label="الصحراء الغربية" value="string:240">الصحراء الغربية
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
                                                <option label="البوسنةوالهرسك" value="string:28">البوسنةوالهرسك</option>
                                                <option label="بوتسوانا" value="string:29">بوتسوانا</option>
                                                <option label="ألبانيا" value="string:3">ألبانيا</option>
                                                <option label="جزيرة بوفيت" value="string:30">جزيرة بوفيت</option>
                                                <option label="البرازيل" value="string:31">البرازيل</option>
                                                <option label="إقليم المحيط البريطاني الهندي" value="string:32">إقليم
                                                    المحيط البريطاني الهندي
                                                </option>
                                                <option label="بلغاريا" value="string:34">بلغاريا</option>
                                                <option label="بوركينا فاسو" value="string:35">بوركينا فاسو</option>
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
                                                <option label="جزيرة الكريسماس" value="string:46">جزيرة الكريسماس
                                                </option>
                                                <option label="جزر كوكوس (كيلينغ)" value="string:47">جزر كوكوس
                                                    (كيلينغ)
                                                </option>
                                                <option label="كولومبيا" value="string:48">كولومبيا</option>
                                                <option label="جزر القمر" value="string:49">جزر القمر</option>
                                                <option label="سامواالأمريكية" value="string:5">سامواالأمريكية</option>
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
                                                <option label="جمهوريةالتشيك" value="string:58">جمهوريةالتشيك</option>
                                                <option label="الدانمارك" value="string:59">الدانمارك</option>
                                                <option label="أندورا
" value="string:6">أندورا
                                                </option>
                                                <option label="جيبوتى" value="string:60">جيبوتى</option>
                                                <option label="دومينيكا
" value="string:61">دومينيكا
                                                </option>
                                                <option label="ج الدومينيكان" value="string:62">ج الدومينيكان</option>
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
                                                <option label="المناطق الجنوبية لفرنسا" value="string:77">المناطق
                                                    الجنوبية لفرنسا
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
                            <div class="save-changes">
                                <input type="button" value="حفظ" ng-click="UpdateCustomerDeligation()">
                                <input type="button" class="cancel" value="إلغاء" ng-click="ClearFilter()">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                    <table id="my_tickets_table" class="table table-bordered table-condensed" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="ng-binding">رقم العميل</th>
                            <th class="ng-binding">الاسم</th>
                            <th class="ng-binding">الجنسية</th>
                            <th class="ng-binding">رقم الهوية</th>
                            <th class="ng-binding">رقم الجوال</th>
                            <th class="ng-binding">التحقق من الحساب</th>
                            <th class="ng-binding">تم التحقق منه</th>
                            <th class="ng-binding">فعال</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- ngRepeat: Custdelegation in CustomerDelegationList -->
                        <tr ng-repeat="Custdelegation in CustomerDelegationList" class="ng-scope">

                            <td class="ng-binding">CIN0083154</td>
                            <td class="ng-binding">def trhr ddrrd</td>
                            <td class="ng-binding">India</td>
                            <td class="ng-binding">2142486931</td>
                            <td class="ng-binding">114343434</td>
                            <td class="ng-binding">Not Verified</td>


                            <td>
                                <!-- ngIf: Custdelegation.VerificationStatus!=1 -->
                                <div ng-if="Custdelegation.VerificationStatus!=1" class="ng-scope">
                                    <a class="btn btn-primary ng-binding"
                                       ng-click="VerifyCustDeligateClick(Custdelegation)">التفعيل</a>
                                </div><!-- end ngIf: Custdelegation.VerificationStatus!=1 -->

                            </td>
                            <td>
                                <!-- ngIf: Custdelegation.IsActive ==false  || Custdelegation.IsActive ==null -->
                                <!-- ngIf: Custdelegation.IsActive==true -->
                                <div ng-if="Custdelegation.IsActive==true" class="ng-scope">
                                    <a class="btn btn-primary ng-binding"
                                       ng-click="DeActiveCustDeligateClick(Custdelegation)">De-Active</a>
                                </div><!-- end ngIf: Custdelegation.IsActive==true -->

                            </td>


                        </tr><!-- end ngRepeat: Custdelegation in CustomerDelegationList -->

                        <!-- ngIf: !CustomerDelegationList || CustomerDelegationList.length <1 -->

                        </tbody>
                    </table>
                </div>
            </div>


            <a data-target="#custdelegationverifypopup" data-toggle="modal" id="tempcustdelegationverifypopup"
               class="ng-scope"></a>
            <div class="mypersonal_information ng-scope">
                <div id="custdelegationverifypopup" class="modal fade delete-address Confirm_Delivery" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-dismiss" data-dismiss="modal"></div>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="ng-binding">Verify Customer Delegation</h1>
                                <a class="invite-dismiss modal-close" data-dismiss="modal"><i
                                            class="fa fa-times"></i></a>
                            </div>
                            <div class="modal-body">

                                <div class="form-field">
                                    <div class="row clearfix" style="margin-bottom:10px">
                                        <div class="col-sm-6 col-md-6">
                                            <label class="ng-binding">رقم العميل</label>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" value="" placeholder="رقم العميل" readonly="">
                                        </div>
                                    </div>
                                    <div class="row clearfix" style="margin-bottom:10px">
                                        <div class="col-sm-6 col-md-6">
                                            <label class="ng-binding">رقم الجوال</label>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" value="0564103664" placeholder="رقم الجوال" readonly="">
                                        </div>
                                    </div>
                                    <div class="row clearfix" style="margin-bottom:10px">
                                        <div class="col-sm-6 col-md-6">
                                            <label class="ng-binding">رمز التفعيل</label>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" ng-model="custdelegateverificationcode"
                                                   placeholder="رمز التفعيل"
                                                   class="ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12 col-md-12">
                                            <a href="" class="btns float-right ng-binding"
                                               ng-click="resendverifyCustDeligationcode()">إعادة إرسال رمز التحقق</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer clearfix">
                                <div class="yes-or-no float-right">
                                    <a class="btns  ng-binding" ng-click="verifyCustDeligation()">التفعيل</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
