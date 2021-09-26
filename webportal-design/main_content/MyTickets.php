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
                            <li><a href="?page=MyContracts" data-toggle="tooltip" data-placement="top"><span
                                            class="icon-font">
                                        <i class="fas fa-file-alt"></i> </span>عقودي</a>
                            </li>
                            <li><a href="?page=MyPayments" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font">
                                        <i class="fas fa-file-invoice-dollar"></i></span>مدفوعاتي</a>
                            </li>

                            <li class="active"><a href="?page=MyTickets" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font">
                                        <i class="fas fa-ticket-alt"></i></span>تذاكري</a></li>

                            <li><a href="?page=InviteFriends" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font"><i class="fa fa-user-plus"></i></span>إدعو صديقك</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- ngView:  -->
        <div id="IndividualPortalApp" ng-view="" class="dashoboard_body ng-scope">
            <div class="my-contaract my-tickets ng-scope">
                <h1 style="text-transform:capitalize;" class="ng-binding">تذاكري</h1>

                <a ng-click="CreateTicket()" class="Creat_New_tickets_btn ng-binding">+إنشاء ملاحظة جديدة</a>

                <div class="creat_new_ticket hide" id="createpopup">
                    <form class="ng-pristine ng-valid">
                        <h2 class="ng-binding">التذكرة</h2>
                        <div class="row clearfix">
                            <div class="col-md-6 col-xs-12 package-selection">
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label><span class="ng-binding">المجموعة</span> :</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <!-- ngIf: currentLang !='Ar' -->


                                            <!-- ngIf: currentLang =='Ar' --><select ng-if="currentLang =='Ar'"
                                                                                     id="ddlGroup" name="ddlGroup"
                                                                                     ng-change="ChangeGroup()"
                                                                                     ng-model="$parent.ddlGroup"
                                                                                     ng-options="g.Id as g.DescriptionAr for g in ddlGroupDrop"
                                                                                     class="select ng-pristine ng-untouched ng-valid ng-scope ng-empty">
                                                <option value="" class="ng-binding" selected="selected">المجموعة
                                                </option>
                                                <option label="كروت التأمين" value="number:1">كروت التأمين</option>
                                                <option label="الاقامات" value="number:2">الاقامات</option>
                                                <option label="بطاقات الصراف" value="number:3">بطاقات الصراف</option>
                                                <option label="الباسبور" value="number:4">الباسبور</option>
                                                <option label="شكاوي العمالة" value="number:6">شكاوي العمالة</option>
                                                <option label="شكاوي العملاء" value="number:7">شكاوي العملاء</option>
                                                <option label="مشاكل التحصيل" value="number:8">مشاكل التحصيل</option>
                                                <option label="مشاكل الفواتير" value="number:9">مشاكل الفواتير</option>
                                                <option label="طلبات العملاء" value="number:10">طلبات العملاء</option>
                                                <option label="الفحص الطبي" value="number:11">الفحص الطبي</option>
                                                <option label="الرواتب" value="number:12">الرواتب</option>
                                                <option label="null" value="number:13"></option>
                                                <option label="null" value="number:14"></option>
                                                <option label="null" value="number:15"></option>
                                                <option label="null" value="number:16"></option>
                                            </select><!-- end ngIf: currentLang =='Ar' -->

                                        </div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label><span class="ng-binding">مجموعة فرعية</span> :</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">

                                            <!-- ngIf: currentLang !='Ar' -->


                                            <!-- ngIf: currentLang =='Ar' --><select ng-if="currentLang =='Ar'"
                                                                                     class="form-control ng-pristine ng-untouched ng-valid ng-scope ng-empty"
                                                                                     ng-change="GetCustomerContract()"
                                                                                     id="ddlSubGroup"
                                                                                     ng-model="ddlSubGroup"
                                                                                     ng-options="g.Id as g.DescriptionAr for g in ddlSubGroupDrop">
                                                <option value="" class="ng-binding" selected="selected">مجموعة فرعية
                                                </option>
                                            </select><!-- end ngIf: currentLang =='Ar' -->

                                        </div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label><span class="ng-binding">رقم العقد</span> :</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <select id="txtContractNo" name="txtContractNo" ng-model="TicketContract"
                                                    ng-change="GetContractEmployee(TicketContract)"
                                                    ng-options="g.ContractNumber as g.ContractNumber for g in CustomerContract"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty">
                                                <option value="" class="ng-binding" selected="selected">رقم العقد
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label><span class="ng-binding">رقم العامل</span> :</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <select id="txtLabour" name="txtLabour" ng-model="TicketLabour"
                                                    class="form-control ng-pristine ng-untouched ng-valid ng-empty"
                                                    ng-change="BindEmployeeName(TicketLabour)"
                                                    ng-options="g.EmployeeId as g.EmployeeId for g in CustomerLabour">
                                                <option value="" class="ng-binding" selected="selected">رقم العامل
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="employee_name">
                                    <div class="image" style="background-image:url()"></div>
                                    <label><span class="ng-binding">إسم الموظف</span> :</label>
                                    <h2><label id="custname"></label></h2>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label><span class="ng-binding">عنوان الملاحظة</span> :</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12"><input type="text" id="txtSubject"
                                                                      placeholder="عنوان الملاحظة"></div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <label><span class="ng-binding">الوصف</span> :</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12"><textarea id="textArea" placeholder="الوصف"
                                                                         required=""></textarea></div>
                                    </div>
                                </div>
                                <div class="form-block upload-file">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label><span class="ng-binding">تستطيع إرفاق ملف</span> :</label>
                                            <!-- <h4>{{'You can upload a file' |translate}}:</h4>-->

                                            <div class="box">
                                                <input type="file" name="files" id="file-6" ng-model="FileAttach" class="inputfile inputfile-5 ng-pristine ng-untouched ng-valid ng-empty" data-multiple-caption="{count} files selected" multiple="">
                                                <label for="file-6">
                                                    <p class="ng-binding">إختار الملف</p><span
                                                            ng-show="!ChoosenFileName || ChoosenFileName==''"
                                                            id="clisttxt" class="ng-binding">لم يتم إختيار ملف</span>
                                                    <span ng-show="ChoosenFileName" id="clisttxt"
                                                          class="ng-binding ng-hide"></span>
                                                </label>


                                            </div>

                                            <!--<input type="file" id="file-6" name="files" class="inputfile inputfile-5" value="Choose File" />-->


                                        </div>
                                    </div>
                                </div>
                                <div class="radio-field">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <label><span class="ng-binding">الأهمية</span> :</label>
                                            <!--  <h4>{{'Priority' | translate}}:</h4>-->
                                            <div class="radio-check"><input type="radio" name="Priority"
                                                                            value="1"><label
                                                        class="ng-binding">ضعفية</label></div>
                                            <div class="radio-check"><input type="radio" name="Priority"
                                                                            value="2"><label
                                                        class="ng-binding">متوسطة</label></div>
                                            <div class="radio-check"><input type="radio" name="Priority"
                                                                            value="3"><label
                                                        class="ng-binding">عالية</label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-block">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <input type="submit" id="crtbtn" value="عمل ملاحظة">
                                            <input type="button" class="cancel" value="إلغاء" ng-click="ClearFilter()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-2 package-selection">
                    <h2 class="ng-binding">حالة التذكرة</h2>
                    <div class="form-block">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <select class="select ng-pristine ng-untouched ng-valid ng-empty" id="TestStatusDrop"
                                        ng-model="TestStatusDrop" ng-change="StatusChange(TestStatusDrop)"
                                        ng-options="g.StatusId as g.StatusName|translate for g in StatusDrop">
                                    <option value="" class="ng-binding" selected="selected"> كل التذاكر</option>
                                    <option label="تذاكري المفتوحة" value="string:1">تذاكري المفتوحة</option>
                                    <option label="تذاكرى المغلقة" value="string:2">تذاكرى المغلقة</option>
                                    <option label="تذاكري المعلقة" value="string:3">تذاكري المعلقة</option>
                                    <option label="تذاكري المحلولة" value="string:4">تذاكري المحلولة</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-3" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                    <table id="my_tickets_table" class="table my_contracts_table dataTable" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="ng-binding">رقم الطلب</th>
                            <th class="ng-binding">تاريخ الاستفسار</th>
                            <th class="ng-binding">رقم العقد</th>
                            <th class="ng-binding">رقم العامل</th>
                            <th class="ng-binding">إسم الموظف</th>
                            <th class="ng-binding">الحاله</th>
                            <th class="ng-binding">نوع التذكرة</th>
                            <th class="ng-binding">الأهمية</th>
                            <th class="ng-binding">الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- ngRepeat: list in myticketlist -->

                        <!-- ngIf: !myticketlist || myticketlist.length <1 -->
                        <tr ng-if="!myticketlist || myticketlist.length <1" class="ng-scope">

                            <td colspan="9" class="ng-binding">
                                لا يوجد بيانات
                            </td>
                        </tr><!-- end ngIf: !myticketlist || myticketlist.length <1 -->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>

</section>
<!-- Blog Area End Here -->
