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

        <div id="IndividualPortalApp" ng-view="" class="dashoboard_body ng-scope">
            <div class="mypersonal_information family-information employment-info ng-scope">

                <h1 class="title-page ng-binding">معلومات الوظيفة</h1>
                <div class="employment-form">
                    <form class="ng-pristine ng-valid ng-valid-min ng-valid-max">
                        <h5 class="ng-binding">املأ الحقول؟ هل انت موظف؟</h5>
                        <div class="package-selection" style="background:none;">
                            <div class="form-block">
                                <div class="row clearfix">
                                    <div class="col-sm-4 col-xs-12">
                                        <label><span class="ng-binding">مجال العمل</span> :</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-12">
                                        <select class="select ng-pristine ng-untouched ng-valid ng-not-empty"
                                                style="margin-bottom:15px;" ng-model="user.WorkingSector"
                                                ng-options="g.value as g.text|translate for g in WorkingSectorDrop">
                                            <option value="" class="ng-binding" selected="selected"> مجال العمل</option>
                                            <option label="حكومي" value="string:1">حكومي</option>
                                            <option label="SemiGovernment" value="string:2">SemiGovernment</option>
                                            <option label="خاص" value="string:3" selected="selected">خاص</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="package-selection ng-hide" style="background:none;"
                             ng-show="user &amp;&amp; user.WorkingSector==1">
                            <div class="form-block">
                                <div class="row clearfix">
                                    <div class="col-sm-4 col-xs-12">
                                        <label><span class="ng-binding">Government Agency</span> :</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-12">
                                        <select class="select ng-pristine ng-untouched ng-valid ng-empty"
                                                style="margin-bottom:15px;" ng-model="user.WorkingSectorAgency"
                                                ng-options="g.Id as g.DescAr|translate for g in GovernmentAgencyDrop">
                                            <option value="" class="ng-binding" selected="selected"> Government Agency
                                            </option>
                                            <option label="وكالة شؤون البلديات التابعة لامانة منطقة الرياض"
                                                    value="number:200">وكالة شؤون البلديات التابعة لامانة منطقة الرياض
                                            </option>
                                            <option label="وكالة شؤون البلديات التابعة لأمانة المنطقة الشرقية"
                                                    value="number:199">وكالة شؤون البلديات التابعة لأمانة المنطقة
                                                الشرقية
                                            </option>
                                            <option label="وكالة وزارة الداخلية للأحوال المدنية" value="number:202">
                                                وكالة وزارة الداخلية للأحوال المدنية
                                            </option>
                                            <option label="صندوق التنمية الزراعية" value="number:91">صندوق التنمية
                                                الزراعية
                                            </option>
                                            <option label="قوات الدفاع الجوي" value="number:96">قوات الدفاع الجوي
                                            </option>
                                            <option label="مجمع الأمل للصحة النفسية بالرياض" value="number:107">مجمع
                                                الأمل للصحة النفسية بالرياض
                                            </option>
                                            <option label="جامعة الباحة" value="number:63">جامعة الباحة</option>
                                            <option label="جامعة القصيم" value="number:67">جامعة القصيم</option>
                                            <option label="جامعة الجوف" value="number:64">جامعة الجوف</option>
                                            <option label="ديوان المظالم" value="number:86">ديوان المظالم</option>
                                            <option label="هيئة الاتصالات وتقنية المعلومات" value="number:146">هيئة
                                                الاتصالات وتقنية المعلومات
                                            </option>
                                            <option label="مجلس الشورى" value="number:106">مجلس الشورى</option>
                                            <option label="هيئة الرقابة والتحقيق" value="number:150">هيئة الرقابة
                                                والتحقيق
                                            </option>
                                            <option label="هيئة الخبراء بمجلس الوزراء" value="number:149">هيئة الخبراء
                                                بمجلس الوزراء
                                            </option>
                                            <option label="وكالة وزارة الداخلية لشؤون الأفواج الأمنية"
                                                    value="number:201">وكالة وزارة الداخلية لشؤون الأفواج الأمنية
                                            </option>
                                            <option label="المديرية العامة لمكافحة المخدرات" value="number:18">المديرية
                                                العامة لمكافحة المخدرات
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بمنطقة الجوف"
                                                    value="number:10">المديرية العامة للشؤون الصحية بمنطقة الجوف
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بالمنطقة الباحة"
                                                    value="number:8">المديرية العامة للشؤون الصحية بالمنطقة الباحة
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بمنطقة المدينة المنورة"
                                                    value="number:13">المديرية العامة للشؤون الصحية بمنطقة المدينة
                                                المنورة
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بمنطقة الرياض"
                                                    value="number:11">المديرية العامة للشؤون الصحية بمنطقة الرياض
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بالمنطقة الشرقية"
                                                    value="number:9">المديرية العامة للشؤون الصحية بالمنطقة الشرقية
                                            </option>
                                            <option label="المديرية العامة للشؤؤن الصحية بالحدود الشمالية"
                                                    value="number:7">المديرية العامة للشؤؤن الصحية بالحدود الشمالية
                                            </option>
                                            <option label="المديرية العامة للسجون" value="number:6">المديرية العامة
                                                للسجون
                                            </option>
                                            <option label="المديرية العامة للمياه بالمنطقة الشرقية" value="number:17">
                                                المديرية العامة للمياه بالمنطقة الشرقية
                                            </option>
                                            <option label="مديرية الشئون الصحية بمحافظة القريات" value="number:111">
                                                مديرية الشئون الصحية بمحافظة القريات
                                            </option>
                                            <option label="مديرية الشؤون الصحية بالأحساء" value="number:109">مديرية
                                                الشؤون الصحية بالأحساء
                                            </option>
                                            <option label="مديرية الشئون الصحية بحفر الباطن" value="number:110">مديرية
                                                الشئون الصحية بحفر الباطن
                                            </option>
                                            <option label="هيئة تطوير المنطقة الشرقية" value="number:156">هيئة تطوير
                                                المنطقة الشرقية
                                            </option>
                                            <option label="هيئة تنظيم الكهرباء والانتاج المزدوج" value="number:160">هيئة
                                                تنظيم الكهرباء والانتاج المزدوج
                                            </option>
                                            <option label="طيران الأمن" value="number:94">طيران الأمن</option>
                                            <option label="جامعة جازان" value="number:77">جامعة جازان</option>
                                            <option label="ديوان المراقبة العامة" value="number:85">ديوان المراقبة
                                                العامة
                                            </option>
                                            <option label="الهيئة العامة للإعلام المرئي والمسموع" value="number:35">
                                                الهيئة العامة للإعلام المرئي والمسموع
                                            </option>
                                            <option label="الهيئة العامة للترفيه" value="number:37">الهيئة العامة
                                                للترفيه
                                            </option>
                                            <option label="الهيئة العامة للغذاء والدواء" value="number:44">الهيئة العامة
                                                للغذاء والدواء
                                            </option>
                                            <option label="الهيئة العامة للاستثمار" value="number:36">الهيئة العامة
                                                للاستثمار
                                            </option>
                                            <option label="الهيئة العامة للأرصاد وحماية البيئة" value="number:33">الهيئة
                                                العامة للأرصاد وحماية البيئة
                                            </option>
                                            <option label="هيئة العامة لصناعات العسكرية" value="number:151">هيئة العامة
                                                لصناعات العسكرية
                                            </option>
                                            <option label="الهيئة العامة للعقار" value="number:43">الهيئة العامة
                                                للعقار
                                            </option>
                                            <option label="الهيئة العامة للمنشات الصغيرة والمتوسطة" value="number:47">
                                                الهيئة العامة للمنشات الصغيرة والمتوسطة
                                            </option>
                                            <option label="الهيئة العامة للرياضة" value="number:39">الهيئة العامة
                                                للرياضة
                                            </option>
                                            <option label="الهيئة العامة للإحصاء" value="number:34">الهيئة العامة
                                                للإحصاء
                                            </option>
                                            <option label="الهيئة العامة للمساحة" value="number:45">الهيئة العامة
                                                للمساحة
                                            </option>
                                            <option label="الهيئة العامة للسياحة والتراث الوطني" value="number:41">
                                                الهيئة العامة للسياحة والتراث الوطني
                                            </option>
                                            <option label="الهيئة العامة للزكاة والدخل" value="number:40">الهيئة العامة
                                                للزكاة والدخل
                                            </option>
                                            <option label="الهيئة العامة للطيران المدني" value="number:42">الهيئة العامة
                                                للطيران المدني
                                            </option>
                                            <option label="الهيئة العامة للجمارك" value="number:38">الهيئة العامة
                                                للجمارك
                                            </option>
                                            <option label="الهيئة العامة للمنافسة" value="number:46">الهيئة العامة
                                                للمنافسة
                                            </option>
                                            <option label="المديرية العامة لحرس الحدود" value="number:4">المديرية العامة
                                                لحرس الحدود
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بمنطقة عسير" value="number:15">
                                                المديرية العامة للشؤون الصحية بمنطقة عسير
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بمنطقة جازان"
                                                    value="number:14">المديرية العامة للشؤون الصحية بمنطقة جازان
                                            </option>
                                            <option label="المديرية العامة للشؤون الصحية بمنطقة القصيم"
                                                    value="number:12">المديرية العامة للشؤون الصحية بمنطقة القصيم
                                            </option>
                                            <option label="المديرية العامة للشوؤن الصحية بمنطقة تبوك" value="number:16">
                                                المديرية العامة للشوؤن الصحية بمنطقة تبوك
                                            </option>
                                            <option label="المديرية العامة للجوازات" value="number:5">المديرية العامة
                                                للجوازات
                                            </option>
                                            <option label="المصروفات العامة -الشؤون المالية / المشاريع والميزانية"
                                                    value="number:26">المصروفات العامة -الشؤون المالية / المشاريع
                                                والميزانية
                                            </option>
                                            <option label="هيئة الاركان العامة" value="number:148">هيئة الاركان العامة
                                            </option>
                                            <option label="جامعة حائل" value="number:79">جامعة حائل</option>
                                            <option label="هيئة تطوير منطقة حائل" value="number:157">هيئة تطوير منطقة
                                                حائل
                                            </option>
                                            <option label="رئاســة أمن الدولــة" value="number:89">رئاســة أمن
                                                الدولــة
                                            </option>
                                            <option label="رئاسة امن الدولة ا-لادارة العامة للشؤون الفنية"
                                                    value="number:88">رئاسة امن الدولة ا-لادارة العامة للشؤون الفنية
                                            </option>
                                            <option label="برنامج الخدمات الصحية - الهيئة الملكية بالجبيل الصناعية"
                                                    value="number:54">برنامج الخدمات الصحية - الهيئة الملكية بالجبيل
                                                الصناعية
                                            </option>
                                            <option label="هيئة حقوق الانسان" value="number:162">هيئة حقوق الانسان
                                            </option>
                                            <option label="جامعة الامام محمد بن سعود" value="number:61">جامعة الامام
                                                محمد بن سعود
                                            </option>
                                            <option label="معهد الدراسات الدبلوماسية - وزارة الخارجية"
                                                    value="number:134">معهد الدراسات الدبلوماسية - وزارة الخارجية
                                            </option>
                                            <option label="معهد الإدارة العامة" value="number:133">معهد الإدارة العامة
                                            </option>
                                            <option label="صندوق اسكان قوى الامن الداخلي بعرعر وطريف" value="number:90">
                                                صندوق اسكان قوى الامن الداخلي بعرعر وطريف
                                            </option>
                                            <option label="وحدة خدمات الانترنت" value="number:163">وحدة خدمات الانترنت
                                            </option>
                                            <option label="مدينة جازان للصناعات الاساسية والتحويلية" value="number:120">
                                                مدينة جازان للصناعات الاساسية والتحويلية
                                            </option>
                                            <option label="ميناء جدة الاسلامي" value="number:144">ميناء جدة الاسلامي
                                            </option>
                                            <option label="ميناء الجبيل التجاري" value="number:140">ميناء الجبيل
                                                التجاري
                                            </option>
                                            <option label="دارة الملك عبدالعزيز" value="number:84">دارة الملك
                                                عبدالعزيز
                                            </option>
                                            <option label="مدينة الملك عبدالعزيز للعلوم والتقنية" value="number:112">
                                                مدينة الملك عبدالعزيز للعلوم والتقنية
                                            </option>
                                            <option label="كلية الملك عبدالعزيز الحربية" value="number:100">كلية الملك
                                                عبدالعزيز الحربية
                                            </option>
                                            <option label="ميناء الملك عبدالعزيز بالدمام" value="number:141">ميناء الملك
                                                عبدالعزيز بالدمام
                                            </option>
                                            <option label="جامعة الملك عبدالعزيز" value="number:72">جامعة الملك
                                                عبدالعزيز
                                            </option>
                                            <option label="كلية الملك عبدالله للدفاع الجوي" value="number:101">كلية
                                                الملك عبدالله للدفاع الجوي
                                            </option>
                                            <option label="مستشفى الملك عبدالله بن عبدالعزيز الجامعي"
                                                    value="number:125">مستشفى الملك عبدالله بن عبدالعزيز الجامعي
                                            </option>
                                            <option label="مدينة الملك عبدالله للطاقة الذرية والمتجددة"
                                                    value="number:116">مدينة الملك عبدالله للطاقة الذرية والمتجددة
                                            </option>
                                            <option label="مدينة الملك عبدالله الطبية بالعاصمة المقدسة"
                                                    value="number:115">مدينة الملك عبدالله الطبية بالعاصمة المقدسة
                                            </option>
                                            <option label="ميناء الملك فهد الصناعي بينبع" value="number:143">ميناء الملك
                                                فهد الصناعي بينبع
                                            </option>
                                            <option label="ميناء الملك فهد الصناعي بالجبيل" value="number:142">ميناء
                                                الملك فهد الصناعي بالجبيل
                                            </option>
                                            <option label="مستشفى الملك فهد التخصصي بالدمام" value="number:126">مستشفى
                                                الملك فهد التخصصي بالدمام
                                            </option>
                                            <option label="مستشفى الملك فهد للقوات المسلحة - بجدة" value="number:127">
                                                مستشفى الملك فهد للقوات المسلحة - بجدة
                                            </option>
                                            <option label="كلية الملك فهد البحرية" value="number:103">كلية الملك فهد
                                                البحرية
                                            </option>
                                            <option label="مدينة الملك فهد الطبية" value="number:117">مدينة الملك فهد
                                                الطبية
                                            </option>
                                            <option label="مكتبة الملك فهد الوطنية" value="number:139">مكتبة الملك فهد
                                                الوطنية
                                            </option>
                                            <option label="كلية الملك فهد الامنية" value="number:102">كلية الملك فهد
                                                الامنية
                                            </option>
                                            <option label="جامعة الملك فهد للبترول والمعادن" value="number:73">جامعة
                                                الملك فهد للبترول والمعادن
                                            </option>
                                            <option label="كلية الملك فيصل الجوية" value="number:104">كلية الملك فيصل
                                                الجوية
                                            </option>
                                            <option label="مدينة الملك فيصل الطبية لخدمة المناطق الجنوبية"
                                                    value="number:118">مدينة الملك فيصل الطبية لخدمة المناطق الجنوبية
                                            </option>
                                            <option label="مدينة الملك فيصل العسكرية" value="number:119">مدينة الملك
                                                فيصل العسكرية
                                            </option>
                                            <option label="مستشفى الملك فيصل التخصصي ومركز الأبحاث -جدة"
                                                    value="number:129">مستشفى الملك فيصل التخصصي ومركز الأبحاث -جدة
                                            </option>
                                            <option label="مستشفى الملك فيصل التخصصي ومركز الأبحاث -الرياض"
                                                    value="number:128">مستشفى الملك فيصل التخصصي ومركز الأبحاث -الرياض
                                            </option>
                                            <option label="جامعة الملك فيصل" value="number:74">جامعة الملك فيصل</option>
                                            <option label="مستشفى الملك خالد التخصصي للعيون" value="number:124">مستشفى
                                                الملك خالد التخصصي للعيون
                                            </option>
                                            <option label="كلية الملك خالد العسكرية" value="number:99">كلية الملك خالد
                                                العسكرية
                                            </option>
                                            <option label="جامعة الملك خالد" value="number:69">جامعة الملك خالد</option>
                                            <option label="جامعة الملك سعود بن عبدالعزيز للعلوم الصحية"
                                                    value="number:71">جامعة الملك سعود بن عبدالعزيز للعلوم الصحية
                                            </option>
                                            <option label="مدينة الملك سعود الطبية" value="number:114">مدينة الملك سعود
                                                الطبية
                                            </option>
                                            <option label="جامعة الملك سعود" value="number:70">جامعة الملك سعود</option>
                                            <option label="هيئة تطوير منطقة مكة المكرمة" value="number:158">هيئة تطوير
                                                منطقة مكة المكرمة
                                            </option>
                                            <option label="مستشفى قوى الامن منطقة مكة المكرمة" value="number:131">مستشفى
                                                قوى الامن منطقة مكة المكرمة
                                            </option>
                                            <option label="المدن الطبية في وزارة الداخلية" value="number:3">المدن الطبية
                                                في وزارة الداخلية
                                            </option>
                                            <option label="هيئة تطوير المدينة المنورة" value="number:155">هيئة تطوير
                                                المدينة المنورة
                                            </option>
                                            <option label="وزارة الخدمة المدنية" value="number:177">وزارة الخدمة
                                                المدنية
                                            </option>
                                            <option label="وزارة الاتصالات و تقنية المعلومات" value="number:165">وزارة
                                                الاتصالات و تقنية المعلومات
                                            </option>
                                            <option label="وزارة الثقافة" value="number:172">وزارة الثقافة</option>
                                            <option label="وزارة الثقافة والإعلام" value="number:173">وزارة الثقافة
                                                والإعلام
                                            </option>
                                            <option label="وزارة الدفاع -ادارة التشغيل والصيانة للمنشآت العسكرية"
                                                    value="number:182">وزارة الدفاع -ادارة التشغيل والصيانة للمنشآت
                                                العسكرية
                                            </option>
                                            <option label="وزارة الدفاع -الديوان العام" value="number:183">وزارة الدفاع
                                                -الديوان العام
                                            </option>
                                            <option label="وزارة الدفاع -قيادة القوات الجوية الملكية السعودية"
                                                    value="number:184">وزارة الدفاع -قيادة القوات الجوية الملكية
                                                السعودية
                                            </option>
                                            <option label="وزارة الدفاع -القوات البرية الملكية السعودية"
                                                    value="number:185">وزارة الدفاع -القوات البرية الملكية السعودية
                                            </option>
                                            <option label="وزارة الإقتصاد والتخطيط" value="number:164">وزارة الإقتصاد
                                                والتخطيط
                                            </option>
                                            <option label="وزارة الاقتصاد والتخطيط(الديوان العام)" value="number:167">
                                                وزارة الاقتصاد والتخطيط(الديوان العام)
                                            </option>
                                            <option label="وزارة التعليم" value="number:171">وزارة التعليم</option>
                                            <option label="وزارة الطاقة والصناعة فرع الشرقية" value="number:189">وزارة
                                                الطاقة والصناعة فرع الشرقية
                                            </option>
                                            <option label="وزارة الطاقة والصناعة والثروة المعدنية" value="number:190">
                                                وزارة الطاقة والصناعة والثروة المعدنية
                                            </option>
                                            <option label="وزارة الطاقة والصناعة والثروة المعدنية - وكالة الوزارة للثروة المعدنية"
                                                    value="number:191">وزارة الطاقة والصناعة والثروة المعدنية - وكالة
                                                الوزارة للثروة المعدنية
                                            </option>
                                            <option label="وزارة البيئة والمياه والزراعة" value="number:169">وزارة
                                                البيئة والمياه والزراعة
                                            </option>
                                            <option label="وزارة البيئة والمياة والزراعة / قطاع المياة"
                                                    value="number:168">وزارة البيئة والمياة والزراعة / قطاع المياة
                                            </option>
                                            <option label="وزارة المالية – مكتب تحقيق الرؤية" value="number:196">وزارة
                                                المالية – مكتب تحقيق الرؤية
                                            </option>
                                            <option label="وزارة المالية -الديوان العام" value="number:195">وزارة
                                                المالية -الديوان العام
                                            </option>
                                            <option label="وزارة الخارجية" value="number:176">وزارة الخارجية</option>
                                            <option label="وزارة الحج والعمرة" value="number:174">وزارة الحج والعمرة
                                            </option>
                                            <option label="وزارة الصحة -الديوان العام" value="number:188">وزارة الصحة
                                                -الديوان العام
                                            </option>
                                            <option label="وزارة الاسكان" value="number:166">وزارة الاسكان</option>
                                            <option label="وزارة الداخلية -الديوان العام" value="number:181">وزارة
                                                الداخلية -الديوان العام
                                            </option>
                                            <option label="وزارة الداخلية -اسكان قوى الأمن بالحفر الباطن"
                                                    value="number:178">وزارة الداخلية -اسكان قوى الأمن بالحفر الباطن
                                            </option>
                                            <option label="وزارة الداخلية -اسكان قوى الأمن بعرعر وطريف"
                                                    value="number:180">وزارة الداخلية -اسكان قوى الأمن بعرعر وطريف
                                            </option>
                                            <option label="وزارة الداخلية -اسكان قوى الأمن بالخفجي" value="number:179">
                                                وزارة الداخلية -اسكان قوى الأمن بالخفجي
                                            </option>
                                            <option label="وزارة الشـؤون الاسلامية والدعوة والارشاد" value="number:187">
                                                وزارة الشـؤون الاسلامية والدعوة والارشاد
                                            </option>
                                            <option label="وزارة العدل" value="number:192">وزارة العدل</option>
                                            <option label="وزارة العمل والتنمية الإجتماعية" value="number:193">وزارة
                                                العمل والتنمية الإجتماعية
                                            </option>
                                            <option label="وزارة العمل والتنمية الاجتماعية(قطاع التنمية الاجتماعية)"
                                                    value="number:194">وزارة العمل والتنمية الاجتماعية(قطاع التنمية
                                                الاجتماعية)
                                            </option>
                                            <option label="وزارة الشؤون البلدية والقروية" value="number:186">وزارة
                                                الشؤون البلدية والقروية
                                            </option>
                                            <option label="وزارة الحرس الوطني" value="number:175">وزارة الحرس الوطني
                                            </option>
                                            <option label="وزارة التجارة والاستثمار" value="number:170">وزارة التجارة
                                                والاستثمار
                                            </option>
                                            <option label="وزارة النقل -الديوان العام" value="number:197">وزارة النقل
                                                -الديوان العام
                                            </option>
                                            <option label="محايل عسير(إدارة تعليم محايل )" value="number:108">محايل
                                                عسير(إدارة تعليم محايل )
                                            </option>
                                            <option label="بلدية الدلم" value="number:56">بلدية الدلم</option>
                                            <option label="جامعة نجران" value="number:83">جامعة نجران</option>
                                            <option label="الهيئة الوطنية لمكافحة الفساد" value="number:52">الهيئة
                                                الوطنية لمكافحة الفساد
                                            </option>
                                            <option label="المركز الوطني للتقويم والاعتماد الاكاديمي" value="number:23">
                                                المركز الوطني للتقويم والاعتماد الاكاديمي
                                            </option>
                                            <option label="المركز الوطني للوثائق والمحفوظات" value="number:25">المركز
                                                الوطني للوثائق والمحفوظات
                                            </option>
                                            <option label="المركز الوطني للقياس" value="number:24">المركز الوطني
                                                للقياس
                                            </option>
                                            <option label="المركز الوطني لقياس أداء الاجهزة العامة" value="number:22">
                                                المركز الوطني لقياس أداء الاجهزة العامة
                                            </option>
                                            <option label="الهيئة الوطنية للأمن السيبراني" value="number:51">الهيئة
                                                الوطنية للأمن السيبراني
                                            </option>
                                            <option label="مركز المعلومات الوطني" value="number:121">مركز المعلومات
                                                الوطني
                                            </option>
                                            <option label="جامعة الحدود الشمالية" value="number:65">جامعة الحدود
                                                الشمالية
                                            </option>
                                            <option label="مكتب تحقيق الرؤية وزارة الخدمة المدنية" value="number:136">
                                                مكتب تحقيق الرؤية وزارة الخدمة المدنية
                                            </option>
                                            <option label="مكتب تحقيق الرؤية وزارة الإسكان" value="number:135">مكتب
                                                تحقيق الرؤية وزارة الإسكان
                                            </option>
                                            <option label="مكتب تحقيق الرؤية وزارة الداخلية" value="number:137">مكتب
                                                تحقيق الرؤية وزارة الداخلية
                                            </option>
                                            <option label="مكتب تحقيق الرؤية وزارة الشؤوون البلدية والقروية"
                                                    value="number:138">مكتب تحقيق الرؤية وزارة الشؤوون البلدية والقروية
                                            </option>
                                            <option label="قوة امن المنشات" value="number:98">قوة امن المنشات</option>
                                            <option label="رئاسة الحرس الملكي" value="number:87">رئاسة الحرس الملكي
                                            </option>
                                            <option label="مستشفى الامير محمد بن عبدالعزيز بالرياض" value="number:123">
                                                مستشفى الامير محمد بن عبدالعزيز بالرياض
                                            </option>
                                            <option label="مدينة الأمير محمد بن عبدالعزيز الطبية" value="number:113">
                                                مدينة الأمير محمد بن عبدالعزيز الطبية
                                            </option>
                                            <option label="جامعة الأمير سطام بن عبدالعزيز" value="number:59">جامعة
                                                الأمير سطام بن عبدالعزيز
                                            </option>
                                            <option label="جامعة الاميرة نورة بنت عبدالرحمن" value="number:62">جامعة
                                                الاميرة نورة بنت عبدالرحمن
                                            </option>
                                            <option label="هيئة تقويم التعليم العام" value="number:159">هيئة تقويم
                                                التعليم العام
                                            </option>
                                            <option label="النيابة العامة" value="number:27">النيابة العامة</option>
                                            <option label="هيئة النقل العام" value="number:153">هيئة النقل العام
                                            </option>
                                            <option label="مركز برنامج جودة الحياة" value="number:122">مركز برنامج جودة
                                                الحياة
                                            </option>
                                            <option label="هيئة الاذاعة والتلفزيون" value="number:147">هيئة الاذاعة
                                                والتلفزيون
                                            </option>
                                            <option label="صندوق التنمية العقارية" value="number:93">صندوق التنمية
                                                العقارية
                                            </option>
                                            <option label="معهد الأبحاث وتقنيات التحلية" value="number:132">معهد الأبحاث
                                                وتقنيات التحلية
                                            </option>
                                            <option label="المراسم الملكية" value="number:19">المراسم الملكية</option>
                                            <option label="الهيئه الملكية للجبيل وينبع-رئاسة الهيئه" value="number:53">
                                                الهيئه الملكية للجبيل وينبع-رئاسة الهيئه
                                            </option>
                                            <option label="الهيئة الملكية للجبيل وينبع" value="number:50">الهيئة الملكية
                                                للجبيل وينبع
                                            </option>
                                            <option label="المركز السعودي لزراعة الأعضاء" value="number:20">المركز
                                                السعودي لزراعة الأعضاء
                                            </option>
                                            <option label="هيئة تنمية الصادرات السعودية" value="number:161">هيئة تنمية
                                                الصادرات السعودية
                                            </option>
                                            <option label="هيئة المساحة الجيولوجية السعودية" value="number:152">هيئة
                                                المساحة الجيولوجية السعودية
                                            </option>
                                            <option label="المجلس الصحي السعودي" value="number:2">المجلس الصحي السعودي
                                            </option>
                                            <option label="صندوق التنمية الصناعية السعودي" value="number:92">صندوق
                                                التنمية الصناعية السعودي
                                            </option>
                                            <option label="الهيئة السعودية للملكية الفكرية" value="number:30">الهيئة
                                                السعودية للملكية الفكرية
                                            </option>
                                            <option label="الهيئة السعودية للمحاسبين القانونيين" value="number:29">
                                                الهيئة السعودية للمحاسبين القانونيين
                                            </option>
                                            <option label="الهيئة السعودية للمواصفات والمقاييس والجودة"
                                                    value="number:31">الهيئة السعودية للمواصفات والمقاييس والجودة
                                            </option>
                                            <option label="المركز السعودي لسلامة المرضى" value="number:21">المركز
                                                السعودي لسلامة المرضى
                                            </option>
                                            <option label="مؤسسة البريد السعودي" value="number:105">مؤسسة البريد
                                                السعودي
                                            </option>
                                            <option label="وكالة الانباء السعودية" value="number:198">وكالة الانباء
                                                السعودية
                                            </option>
                                            <option label="هيئة الهلال الأحمر السعودي" value="number:154">هيئة الهلال
                                                الأحمر السعودي
                                            </option>
                                            <option label="الهيئة السعودية للحياة الفطرية" value="number:28">الهيئة
                                                السعودية للحياة الفطرية
                                            </option>
                                            <option label="مستشفى قوى الامن بالدمام" value="number:130">مستشفى قوى الامن
                                                بالدمام
                                            </option>
                                            <option label="برنامج مستشفى قوى الأمن بالرياض" value="number:55">برنامج
                                                مستشفى قوى الأمن بالرياض
                                            </option>
                                            <option label="بنك التنمية الاجتماعية" value="number:57">بنك التنمية
                                                الاجتماعية
                                            </option>
                                            <option label="قوات الطوارىء الخاصة" value="number:97">قوات الطوارىء
                                                الخاصة
                                            </option>
                                            <option label="قوات الامن الخاصة" value="number:95">قوات الامن الخاصة
                                            </option>
                                            <option label="الهيئة العامة لعقارات الدولة" value="number:32">الهيئة العامة
                                                لعقارات الدولة
                                            </option>
                                            <option label="الهيئة العليا لتطوير مدينة الرياض" value="number:49">الهيئة
                                                العليا لتطوير مدينة الرياض
                                            </option>
                                            <option label="جامعة تبوك" value="number:76">جامعة تبوك</option>
                                            <option label="جامعة طيبة" value="number:82">جامعة طيبة</option>
                                            <option label="جامعة الطائف" value="number:66">جامعة الطائف</option>
                                            <option label="الهيئة العامة للولاية أموال القاصرين ومن في حكمهم"
                                                    value="number:48">الهيئة العامة للولاية أموال القاصرين ومن في حكمهم
                                            </option>
                                            <option label="المجلس الأعلى للقضاء" value="number:1">المجلس الأعلى للقضاء
                                            </option>
                                            <option label="جامعة أم القرى" value="number:58">جامعة أم القرى</option>
                                            <option label="جامعة المجمعة" value="number:68">جامعة المجمعة</option>
                                            <option label="جامعة بيشة" value="number:75">جامعة بيشة</option>
                                            <option label="جامعة حفر الباطن" value="number:80">جامعة حفر الباطن</option>
                                            <option label="جامعة الإمام عبدالرحمن بن فيصل" value="number:60">جامعة
                                                الإمام عبدالرحمن بن فيصل
                                            </option>
                                            <option label="جامعة جدة" value="number:78">جامعة جدة</option>
                                            <option label="جامعة شقراء" value="number:81">جامعة شقراء</option>
                                            <option label="ميناء ينبع التجاري" value="number:145">ميناء ينبع التجاري
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-block">
                            <div class="row clearfix">

                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">المسمى الوظيفي</span> :</label>
                                </div>
                                <div class="col-sm-8 col-xs-12"><input type="text" ng-model="user.OccupationDesc"
                                                                       placeholder="المسمى الوظيفي"
                                                                       class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                </div>

                            </div>
                        </div>
                        <div class="form-block">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">مكان العمل</span> :</label>
                                </div>

                                <div class="col-sm-8 col-xs-12"><input type="text" ng-model="user.WorkPlace"
                                                                       placeholder="مكان العمل"
                                                                       class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                </div>

                            </div>
                        </div>
                        <div class="form-block">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">تاريخ الالتحاق بالعمل</span>:</label>
                                </div>
                                <div class="col-sm-5 col-sm-8 col-xs-12">
                                    <input type="text" ng-model="user.WorkDateOfJoining" datedirtodayfuture=""
                                           format="'dd/MM/yyyy'"
                                           class="form-control ng-pristine ng-untouched ng-valid hasDatepicker ng-not-empty"
                                           placeholder="Date of joining" readonly="readonly" id="dp1574587914481">
                                </div>
                            </div>
                        </div>
                        <!--<div class="form-block">
                    <div class="row clearfix">
                        <div class="col-xs-12"><input type="text" ng-model="user.WorkPlace" placeholder=" Work Place" /></div>

                    </div>
                </div>-->
                        <div class="form-block ">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">راتب العميل الشهري</span> :</label>
                                </div>
                                <div class="col-sm-8 col-xs-12"><input type="number" ng-model="user.MonthlySalary"
                                                                       placeholder="راتب العميل الشهري"
                                                                       class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                </div>
                            </div>
                        </div>
                        <div class="form-block">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">عنوان العمل</span> :</label>
                                </div>
                                <div class="col-sm-8 col-xs-12"><input type="text" ng-model="user.WorkAddress"
                                                                       placeholder="عنوان العمل"
                                                                       class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                </div>
                            </div>
                        </div>
                        <!--<h5>Do you have another source of income? If yes Sepcify:</h5>-->
                        <div class="form-block ">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">رقم هاتف العمل</span> :</label>
                                </div>
                                <div class="col-sm-8 col-xs-12"><input type="number" ng-model="user.WorkTel"
                                                                       placeholder="رقم هاتف العمل" min="0" max=""
                                                                       class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-not-empty">
                                </div>
                            </div>
                        </div>
                        <div class="form-block">
                            <div class="row clearfix">
                                <div class="col-sm-4 col-xs-12">
                                    <label><span class="ng-binding">دخل أخر</span> :</label>
                                </div>
                                <div class="col-sm-8 col-xs-12"><input type="number" ng-model="user.OtherIncome"
                                                                       placeholder="دخل أخر" min="0" max=""
                                                                       class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-not-empty">
                                </div>
                            </div>
                        </div>
                        <div class="save-changes">
                            <input type="submit" value="حفظ التغييرات" ng-click="saveCustomer(user,user.CustomerID)">
                            <!--<input type="button" class="cancel" value="{{'Cancel'|translate}}" ng-click="ClearFilter();" />-->
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
