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
                            <li class="active"><a href="?page=MyContracts" data-toggle="tooltip"
                                                  data-placement="top"><span class="icon-font">
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
            <div class="my-Payments my-invoices ng-scope">
                <div class="panel-1">
                    <!-- ngIf: currentLang !='Ar' -->
                    <!-- ngIf: currentLang =='Ar' --><h1 ng-if="currentLang =='Ar'" class="ng-scope">فواتيري<span
                                class="ng-binding">الفواتير تصدر شهريًا</span></h1><!-- end ngIf: currentLang =='Ar' -->

                    <input type="hidden" id="AngProcessId" ng-model="ProcessId" value="690"
                           class="ng-pristine ng-untouched ng-valid ng-empty">
                    <input type="hidden" id="AngStageId" ng-model="StageId" value="0"
                           class="ng-pristine ng-untouched ng-valid ng-empty">
                </div>
                <div class="panel-2">
                    <table class="package-selection">
                        <tbody class="inner-block">
                        <tr>
                            <td class="form-block"><h2 class="ng-binding">فلتر بواسطة : </h2></td>
                            <td class="form-block">
                                <select class="select ng-pristine ng-untouched ng-valid ng-not-empty"
                                        ng-model="filter.PayStatus" ng-change="changestatus()"
                                        ng-options="g.id as g.Name|translate for g in PaymentStatus">
                                    <option value="" class="ng-binding" selected="selected"> حالة الدفع</option>
                                    <option label="قيد الإنتظار" value="number:1" selected="selected">قيد الإنتظار
                                    </option>
                                    <option label="مدفوعة" value="number:2">مدفوعة</option>
                                    <option label="تم الدفع" value="number:3">تم الدفع</option>
                                </select>
                            </td>
                            <td class="form-block">
                                <select class="select ng-pristine ng-untouched ng-valid ng-empty"
                                        ng-model="filter.ContractStatus" ng-change="changestatus()"
                                        ng-options="g.id as g.Name|translate for g in ContractStagesDrop">
                                    <option value="" class="ng-binding" selected="selected"> اظهار الكل</option>
                                    <option label="جديد" value="number:10">جديد</option>
                                    <option label="في انتظار الاختيار" value="number:30">في انتظار الاختيار</option>
                                    <option label="في انتظار التسليم" value="number:40">في انتظار التسليم</option>
                                    <option label="ملغية" value="number:20">ملغية</option>
                                    <option label="صالح" value="number:50">صالح</option>
                                    <option label="تم انهاءه" value="number:60">تم انهاءه</option>
                                    <option label="بالقرب من انتهاء الصلاحية" value="number:80">بالقرب من انتهاء
                                        الصلاحية
                                    </option>
                                    <option label="منتهى الصلاحيه" value="number:90">منتهى الصلاحيه</option>
                                    <option label="اغلق" value="number:100">اغلق</option>
                                    <option label="اظهار الكل" value="number:-1">اظهار الكل</option>
                                </select>

                            </td>
                            <td class="form-block">
                                <select class="select ng-pristine ng-untouched ng-valid ng-empty"
                                        ng-model="filter.InvoiceType" ng-change="changestatus()"
                                        ng-options="g.id as g.Name|translate for g in InvoiceTypes">
                                    <option value="" class="ng-binding" selected="selected"> نوع الفاتورة</option>
                                    <option label="المدفوعات الشهريه" value="number:10">المدفوعات الشهريه</option>
                                    <option label="دفعه لمره واحده" value="number:20">دفعه لمره واحده</option>
                                    <option label="دفع مقدم" value="number:30">دفع مقدم</option>
                                    <option label="عام" value="number:40">عام</option>
                                </select>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="panel-3" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                    <table class="table my_contracts_table" cellspacing="0" width="100%">
                        <thead>
                        <tr>

                            <th class="ng-binding">رقم الفاتورة</th>
                            <th class="ng-binding">تاريخ الفاتورة</th>
                            <th class="ng-binding">رقم العقد</th>
                            <th class="ng-binding">حالة العقد</th>
                            <th class="ng-binding">قيمة الفاتورة</th>
                            <th class="ng-binding">حالة الدفع</th>
                            <th class="ng-binding">نوع الفاتورة</th>
                            <th class="ng-binding">الإجراء</th>

                        </tr>
                        </thead>
                        <tbody>
                        <!-- ngRepeat: list in myinvoicelist | filter : Invoicepaginate -->

                        <!-- ngIf: myinvoicelist.length<1 -->
                        <tr ng-if="myinvoicelist.length<1" class="ng-scope">
                            <td colspan="8" class="ng-binding">لا يوجد بيانات</td>
                        </tr><!-- end ngIf: myinvoicelist.length<1 -->
                        </tbody>
                    </table>
                    <!-- ngIf: myinvoicelist && myinvoicelist.length > 0 -->
                </div>
            </div>


            <style class="ng-scope">
                ul.pagination {
                    margin-top: 11px;
                    background: #eee;
                    width: 100%;
                    border-radius: 0;
                    margin: 0;
                }

                .pagination > li {
                    margin-top: -1px;
                    margin-right: 4px;
                    display: inline-block;
                }

                .pagination > li {
                    display: inline;
                }

                ul.pagination li {
                    float: left;
                }

                .inactiveLink {
                    pointer-events: none;
                    opacity: 0.5;
                }

                .pagination > li > a, .pagination > li > span {
                    position: relative;
                    float: left;
                    padding: 6px 12px;
                    margin-left: -1px;
                    line-height: 1.42857143;
                    color: #337ab7;
                    text-decoration: none;
                    background-color: #fff;
                    border: 1px solid #ddd;
                }

                .pagination > li > span.fa, .pagination > li > a.fa {
                    font: normal normal normal 14px/1 FontAwesome !important;
                    margin: 5px 0px 0 0px;
                    font: normal normal normal 17px FontAwesome !important;
                }

                .pagination > li:first-child > a {
                    padding-right: 0px;
                }

                ul.pagination li.paging a {
                    text-transform: uppercase;
                    border: none;
                    background: transparent;
                }

                ul.pagination li.symbol a {
                    font-size: 0px;
                }

                ul.pagination li.pagetext span {
                    padding-left: 0px;
                    padding-right: 0px;
                    font-style: italic;
                    background-color: transparent;
                    border: none;
                    padding: 5px 0;
                }

                ul.pagination li span em {
                    /*float: left;*/
                    display: inline-block;
                    line-height: 22px;
                }

                .txtPage {
                    max-width: 45px;
                    box-shadow: none !important;
                    margin: 0 5px 0 7px;
                    text-align: center;
                }

                ul.pagination li.paging.pagetext span input {
                    /*float: left;*/
                    display: inline-block;
                    box-shadow: none;
                    padding: 0px;
                }

                ul.pagination li.pagetext span.endpage {
                    font-weight: 600;
                    font-style: italic;
                    color: #333;
                    padding: 0 0 0 6px;
                    float: none;
                    line-height: 22px;
                    margin: 0px;
                    border: none;
                    display: inline-block;
                }

                ul.pagination li.pagetext span.endpage {
                    padding: 0 0px 0 6px;
                }

                .pagination > li:last-child {
                    margin-left: 4px;
                    margin-right: 0;
                }

                ul.pagination li.paging-totalrecord {
                    float: right;
                }

                ul.pagination li.paging-totalrecord p {
                    padding: 6px 12px;
                    font-weight: bold;
                    margin: 0px;
                }

                ul.pagination li.pagetext > span {
                    min-width: 138px;
                }

                select.txtPage {
                    padding: 0px !important;
                    height: auto !important;
                }
            </style>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
