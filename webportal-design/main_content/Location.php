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
                        <h1></h1>
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
            <div class="mypersonal_information family-information ng-scope">

                <h1 class="title-page ng-binding">المواقع</h1>
                <div class="add-new-location">
                    <h4 ng-show="mylocationlist.length==0" class="ng-binding">لا يوجد موقع مضاف</h4>
                    <a class="add-Location ng-binding" ng-click="CreateClick()">+إضافة موقع جديد</a>
                    <div class="new-location-form" id="CreateLocationPopup">
                        <h4 class="ng-binding">أوجد عنوانك على الخريطة</h4>
                        <!--<input id="pac-input" class="controls" type="text" placeholder="Search Box">-->
                        <div style="height: 400px; margin-bottom: 25px; position: relative; overflow: hidden;" id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14493.531009877!2d46.7962381!3d24.7480626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc7c1708262c9f194!2z2KfZhNmI2LfZhtmK2Kkg2KfZhNin2YjZhNmJINmE2YTYp9iz2KrZgtiv2KfZhQ!5e0!3m2!1sar!2seg!4v1574328084610!5m2!1sar!2seg" frameborder="0" style="border:0; width:100%;height: 400px" allowfullscreen=""></iframe>
                        </div>
                        <form style="margin-top: 25px;" class="ng-pristine ng-valid">

                            <div class="form-block input-field">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <label><span class="ng-binding">أسم الموقع</span>:</label>
                                    </div>
                                    <div class="col-md-9"><input type="text" ng-model="userlocation.Name"
                                                                 placeholder="أسم الموقع"
                                                                 class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                </div>
                            </div>
                            <!--<div class="form-block input-field">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label><span>{{'Building Number' |translate}}</span> :</label>
                        </div>
                        <div class="col-md-9"><input type="number" ng-model="userlocation.BuildingNumber" placeholder="{{'Building Number' | translate}}" /></div>
                    </div>
                </div>
                <div class="form-block input-field">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label><span>{{'Street Name' |translate}}</span> :</label>
                        </div>
                        <div class="col-md-9"><input type="text" ng-model="userlocation.StreetName" placeholder="{{'Street Name' | translate}}" /></div>
                    </div>
                </div>

                <div class="form-block input-field">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label><span>{{'Neighborhood' |translate}}</span> :</label>
                        </div>
                        <div class="col-md-9"><input type="text" ng-model="userlocation.Neighborhood" placeholder="{{'Neighborhood' | translate}}" /></div>
                    </div>
                </div>-->
                            <div class="package-selection" style="background:none;">
                                <div class="form-block input-field">
                                    <div class="row clearfix">
                                        <div class="col-md-3">
                                            <label><span class="ng-binding">المدينة</span> :</label>
                                        </div>
                                        <div class="col-md-9">
                                            <!-- ngIf: currentLang !='Ar' -->
                                            <!-- ngIf: currentLang =='Ar' --><select style="margin-bottom:15px;"
                                                                                     ng-if="currentLang =='Ar'"
                                                                                     class="select ng-pristine ng-untouched ng-valid ng-scope ng-empty"
                                                                                     ng-model="userlocation.City"
                                                                                     ng-options="g.Id as g.DescAr for g in CityDrop">
                                                <option value="" class="ng-binding" selected="selected"> المدينة
                                                </option>
                                                <option label="الرياض" value="string:1">الرياض</option>
                                                <option label="الغاط" value="string:10">الغاط</option>
                                                <option label="مهد الذهب" value="string:100">مهد الذهب</option>
                                                <option label="القنفذه" value="string:101">القنفذه</option>
                                                <option label="رابغ" value="string:102">رابغ</option>
                                                <option label="شيبة" value="string:103">شيبة</option>
                                                <option label="الطائف" value="string:104">الطائف</option>
                                                <option label="تربة" value="string:105">تربة</option>
                                                <option label="علا" value="string:106">علا</option>
                                                <option label="ينبع" value="string:107">ينبع</option>
                                                <option label="الزيمة" value="string:108">الزيمة</option>
                                                <option label="حفر الباطن" value="string:109">حفر الباطن</option>
                                                <option label="القويعية" value="string:11">القويعية</option>
                                                <option label="null" value="string:110"></option>
                                                <option label="null" value="string:111"></option>
                                                <option label="null" value="string:112"></option>
                                                <option label="null" value="string:113"></option>
                                                <option label="null" value="string:114"></option>
                                                <option label="null" value="string:115"></option>
                                                <option label="null" value="string:116"></option>
                                                <option label="null" value="string:117"></option>
                                                <option label="null" value="string:118"></option>
                                                <option label="null" value="string:119"></option>
                                                <option label="الأرطاوية" value="string:12">الأرطاوية</option>
                                                <option label="null" value="string:120"></option>
                                                <option label="null" value="string:121"></option>
                                                <option label="null" value="string:122"></option>
                                                <option label="null" value="string:123"></option>
                                                <option label="null" value="string:124"></option>
                                                <option label="null" value="string:125"></option>
                                                <option label="null" value="string:126"></option>
                                                <option label="null" value="string:127"></option>
                                                <option label="null" value="string:128"></option>
                                                <option label="null" value="string:129"></option>
                                                <option label="بريدة" value="string:13">بريدة</option>
                                                <option label="null" value="string:130"></option>
                                                <option label="null" value="string:131"></option>
                                                <option label="null" value="string:132"></option>
                                                <option label="null" value="string:133"></option>
                                                <option label="null" value="string:134"></option>
                                                <option label="null" value="string:135"></option>
                                                <option label="null" value="string:136"></option>
                                                <option label="null" value="string:137"></option>
                                                <option label="null" value="string:138"></option>
                                                <option label="null" value="string:139"></option>
                                                <option label="ضرماء" value="string:14">ضرماء</option>
                                                <option label="null" value="string:140"></option>
                                                <option label="null" value="string:141"></option>
                                                <option label="null" value="string:142"></option>
                                                <option label="null" value="string:143"></option>
                                                <option label="null" value="string:144"></option>
                                                <option label="null" value="string:145"></option>
                                                <option label="null" value="string:146"></option>
                                                <option label="null" value="string:147"></option>
                                                <option label="null" value="string:148"></option>
                                                <option label="null" value="string:149"></option>
                                                <option label="الدلم" value="string:15">الدلم</option>
                                                <option label="null" value="string:150"></option>
                                                <option label="null" value="string:151"></option>
                                                <option label="null" value="string:152"></option>
                                                <option label="null" value="string:153"></option>
                                                <option label="null" value="string:154"></option>
                                                <option label="null" value="string:155"></option>
                                                <option label="null" value="string:156"></option>
                                                <option label="null" value="string:157"></option>
                                                <option label="null" value="string:158"></option>
                                                <option label="null" value="string:159"></option>
                                                <option label="الدوادمي" value="string:16">الدوادمي</option>
                                                <option label="null" value="string:160"></option>
                                                <option label="null" value="string:161"></option>
                                                <option label="null" value="string:162"></option>
                                                <option label="null" value="string:163"></option>
                                                <option label="null" value="string:164"></option>
                                                <option label="null" value="string:165"></option>
                                                <option label="null" value="string:166"></option>
                                                <option label="	الحريق" value="string:17"> الحريق</option>
                                                <option label="حوطه بني تميم" value="string:18">حوطه بني تميم</option>
                                                <option label="حريملا ء" value="string:19">حريملا ء</option>
                                                <option label="الدمام" value="string:2">الدمام</option>
                                                <option label="الخرج" value="string:20">الخرج</option>
                                                <option label="الخماسين" value="string:22">الخماسين</option>
                                                <option label="ليلى" value="string:23">ليلى</option>
                                                <option label="المجمعة" value="string:24">المجمعة</option>
                                                <option label="المزاحمية" value="string:25">المزاحمية</option>
                                                <option label="الرس" value="string:26">الرس</option>
                                                <option label="رغبه" value="string:27">رغبه</option>
                                                <option label="شقراء" value="string:28">شقراء</option>
                                                <option label="السلي" value="string:29">السلي</option>
                                                <option label="جدة" value="string:3">جدة</option>
                                                <option label="ثادق" value="string:30">ثادق</option>
                                                <option label="عنيزة" value="string:31">عنيزة</option>
                                                <option label="وادي الدواسر" value="string:32">وادي الدواسر</option>
                                                <option label="الزلفي" value="string:33">الزلفي</option>
                                                <option label="أبقيق" value="string:34">أبقيق</option>
                                                <option label="الاحساء" value="string:35">الاحساء</option>
                                                <option label="الظهران" value="string:36">الظهران</option>
                                                <option label="حفر الباطن" value="string:37">حفر الباطن</option>
                                                <option label="الهفوف" value="string:38">الهفوف</option>
                                                <option label="الجبيل" value="string:39">الجبيل</option>
                                                <option label="الخبر" value="string:4">الخبر</option>
                                                <option label="الخفجي" value="string:40">الخفجي</option>
                                                <option label="مدينه الملك خالد العسكريه" value="string:41">مدينه الملك
                                                    خالد العسكريه
                                                </option>
                                                <option label="المبرز" value="string:42">المبرز</option>
                                                <option label="العيون" value="string:43">العيون</option>
                                                <option label="القيصومة" value="string:44">القيصومة</option>
                                                <option label="القطيف" value="string:45">القطيف</option>
                                                <option label="رأس تنورة" value="string:46">رأس تنورة</option>
                                                <option label="صفوى" value="string:47">صفوى</option>
                                                <option label="سيهات" value="string:48">سيهات</option>
                                                <option label="تاروت" value="string:49">تاروت</option>
                                                <option label="المدينة المنورة" value="string:5">المدينة المنورة
                                                </option>
                                                <option label="الثقبة" value="string:50">الثقبة</option>
                                                <option label="عضيلية" value="string:51">عضيلية</option>
                                                <option label="أم الساهك" value="string:52">أم الساهك</option>
                                                <option label="العقير" value="string:53">العقير</option>
                                                <option label="عرعر" value="string:54">عرعر</option>
                                                <option label="بقعاء" value="string:55">بقعاء</option>
                                                <option label="ضباء" value="string:56">ضباء</option>
                                                <option label="دومة الجندل" value="string:57">دومة الجندل</option>
                                                <option label="ضرغط" value="string:58">ضرغط</option>
                                                <option label="القريات" value="string:59">القريات</option>
                                                <option label="القصيم" value="string:6">القصيم</option>
                                                <option label="حائل" value="string:60">حائل</option>
                                                <option label="حقل" value="string:61">حقل</option>
                                                <option label="الجوف" value="string:62">الجوف</option>
                                                <option label="الخط" value="string:63">الخط</option>
                                                <option label="حاله عمار" value="string:64">حاله عمار</option>
                                                <option label="رفحة" value="string:65">رفحة</option>
                                                <option label="سكاكا" value="string:66">سكاكا</option>
                                                <option label="تبوك" value="string:67">تبوك</option>
                                                <option label="تيمة" value="string:68">تيمة</option>
                                                <option label="طريف" value="string:69">طريف</option>
                                                <option label="البيكيرية" value="string:7">البيكيرية</option>
                                                <option label="أخرى" value="string:70">أخرى</option>
                                                <option label="الوجه" value="string:71">الوجه</option>
                                                <option label="ابو عريش" value="string:72">ابو عريش</option>
                                                <option label="أبها" value="string:73">أبها</option>
                                                <option label="عسير" value="string:74">عسير</option>
                                                <option label="الباحة" value="string:75">الباحة</option>
                                                <option label="بلجرشي" value="string:76">بلجرشي</option>
                                                <option label="بيشة" value="string:77">بيشة</option>
                                                <option label="ظهران الجنوب" value="string:78">ظهران الجنوب</option>
                                                <option label="مدينة فراسان" value="string:79">مدينة فراسان</option>
                                                <option label="الافلاج" value="string:8">الافلاج</option>
                                                <option label="مدينة جيزان الاقتصادية" value="string:80">مدينة جيزان
                                                    الاقتصادية
                                                </option>
                                                <option label="جيزان" value="string:81">جيزان</option>
                                                <option label="خميس مشيط" value="string:82">خميس مشيط</option>
                                                <option label="محايل عسير" value="string:83">محايل عسير</option>
                                                <option label="نجران" value="string:84">نجران</option>
                                                <option label="النماص" value="string:85">النماص</option>
                                                <option label="قلعة بيشه" value="string:86">قلعة بيشه</option>
                                                <option label="قلوه" value="string:87">قلوه</option>
                                                <option label="سبت العلايا" value="string:88">سبت العلايا</option>
                                                <option label="سراة عبيدة" value="string:89">سراة عبيدة</option>
                                                <option label="عفيف" value="string:9">عفيف</option>
                                                <option label="شرورة" value="string:90">شرورة</option>
                                                <option label="تنومة" value="string:91">تنومة</option>
                                                <option label="بدر" value="string:92">بدر</option>
                                                <option label="ذهبان" value="string:93">ذهبان</option>
                                                <option label="ضمد" value="string:94">ضمد</option>
                                                <option label="الليث" value="string:97">الليث</option>
                                                <option label="مستورة" value="string:98">مستورة</option>
                                                <option label="مكة المكرمة" value="string:99">مكة المكرمة</option>
                                            </select><!-- end ngIf: currentLang =='Ar' -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="form-block input-field">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label><span>{{'Postal Code' |translate}}</span> :</label>
                        </div>
                        <div class="col-md-9"><input type="number" ng-model="userlocation.PostalCode" placeholder="{{'Postal Code' | translate}}" /></div>
                    </div>
                </div>-->
                            <div class="form-block input-field">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <label><span class="ng-binding">بيانات إضافية</span>:</label>
                                    </div>
                                    <div class="col-md-9"><input type="text" ng-model="userlocation.AdditionalDetails"
                                                                 placeholder="Building Number , Land Mark , Neighborhood"
                                                                 class="ng-pristine ng-untouched ng-valid ng-empty">
                                    </div>
                                </div>
                            </div>

                            <!--<div class="form-block input-field">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <label><span>{{'Additional Details' |translate}}</span> :</label>
                        </div>
                        <div class="col-md-9">
                            <textarea ng-model="userlocation.AdditionalDetails" placeholder="{{'Additional Details' | translate}}"></textarea>
                        </div>
                    </div>
                </div>-->

                            <div class="form-block input-field">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <label><span class="ng-binding">Address Details</span>:</label>
                                    </div>
                                    <div class="col-md-9"><input type="text" ng-model="userlocation.AddressFromMap"
                                                                 placeholder="Address Details"
                                                                 class="ng-pristine ng-untouched ng-valid ng-not-empty">
                                    </div>
                                </div>
                            </div>


                        </form>
                        <div class="save-changes">
                            <input type="submit" value="حفظ العنوان"
                                   ng-click="saveUserLocation(userlocation,userlocation.RecId)">
                            <input type="button" class="cancel" value="إلغاء" ng-click="ClearFilter();">
                        </div>
                    </div>

                    <div class="addresses-list" id="addresses_block_1">
                        <!-- ngRepeat: list in mylocationlist | orderBy:'-RecId' -->
                    </div>
                </div>
            </div>

            <a data-target="#Deletepopup" data-toggle="modal" id="openDeletepopup" class="ng-scope"></a>
            <div id="Deletepopup" class="modal fade delete-address ng-scope" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-dismiss" data-dismiss="modal"></div>
                    <div class="modal-content">
                        <div class="modal-body">
                            <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                            <h1 class="ng-binding">حذف العنوان</h1>
                            <h2 class="ng-binding">هل أنت متأكد من أنك تريد حذف هذا العنوان?</h2>
                            <div class="dlt_or_not">
                                <a class="dlt-address ng-binding" ng-click="ConfirmClick(true)">نعم</a>
                                <!--  <a class="dlt-address" id="dlt_address_1" data-dismiss="modal" style="display:none;"></a>-->
                                <a class="dont-dlt ng-binding" data-dismiss="modal">لا</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
