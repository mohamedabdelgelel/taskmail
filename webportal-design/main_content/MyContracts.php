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
                            <li class="active" ><a href="?page=MyContracts" data-toggle="tooltip" data-placement="top"><span class="icon-font">
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
            <div class="my-contaract ng-scope">
                <div class="panel-1">
                    <table>
                        <tbody>
                        <tr>
                            <td><a class="My_Contracts_btn active ng-binding" href="?page=MyContracts">عقودي</a></td>
                            <td><a class="My_Contracts_btn ng-binding" href="?page=PendingContracts">الطلبات المعلقه</a>
                            </td>
                            <td><a class="Creat_New_Contract_btn ng-binding" ng-click="CreatePerDay()"
                                   href="#/NewContract">إنشاء العقد</a></td>
                            <!--<td><a class="Creat_New_Contract_btn" ng-click="CreateMonthly()" href="#/NewContract">{{'Create New Monthly Contract' | translate}}</a></td>-->
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" id="AngProcessId" ng-model="ProcessId" value="640"
                           class="ng-pristine ng-untouched ng-valid ng-empty">
                    <input type="hidden" id="AngStageId" ng-model="StageId" value="10"
                           class="ng-pristine ng-untouched ng-valid ng-empty">

                </div>
                <!--<div class="panel-2">
                    <h2>{{'Filter By' | translate}}</h2>
                    <div class="package-selection">
                        <div class="form-block">
                            <div class="row clearfix">
                                <div class="col-xs-12">
                                    <select class="select" name="ContractStatus" id="ContractStatus" ng-model="filter.ContractStatus" ng-change="getFilterbyStatus()">
                                        <option value="{{g.StageId}}" ng-repeat="g in StagesDrop" ng-show="g.StageId ==-1||  g.StageId ==30 || g.StageId ==40 || g.StageId ==50 || g.StageId ==80 || g.StageId ==90 || g.StageId ==111"> {{ g.StageDesc | translate}} </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="panel-2">
                    <h2 class="ng-binding">فلتر بواسطة</h2>
                    <div class="package-selection">
                        <div class="form-block">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <select class="select ng-pristine ng-valid ng-not-empty ng-touched"
                                            name="ContractStatus" id="ContractStatus" ng-model="filter.ContractStatus"
                                            ng-change="getFilterbyStatus()">
                                        <!-- ngRepeat: g in StagesDrop -->
                                        <option value="-1" ng-repeat="g in StagesDrop"
                                                ng-show="g.id ==-1||  g.id ==1 || g.id ==2" class="ng-binding ng-scope">
                                            اظهار الكل
                                        </option><!-- end ngRepeat: g in StagesDrop -->
                                        <option value="0" ng-repeat="g in StagesDrop"
                                                ng-show="g.id ==-1||  g.id ==1 || g.id ==2"
                                                class="ng-binding ng-scope ng-hide"> حالة العقد
                                        </option><!-- end ngRepeat: g in StagesDrop -->
                                        <option value="1" ng-repeat="g in StagesDrop"
                                                ng-show="g.id ==-1||  g.id ==1 || g.id ==2" class="ng-binding ng-scope">
                                            فعال
                                        </option><!-- end ngRepeat: g in StagesDrop -->
                                        <option value="2" ng-repeat="g in StagesDrop"
                                                ng-show="g.id ==-1||  g.id ==1 || g.id ==2" class="ng-binding ng-scope">
                                            غير فعال
                                        </option><!-- end ngRepeat: g in StagesDrop -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-3" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                    <table class="table my_contracts_table my_pending_table" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="ng-binding">رقم العقد</th>
                            <th class="ng-binding">تاريخ العقد</th>
                            <th class="ng-binding">إسم الموظف</th>
                            <th class="ng-binding">الحاله</th>
                            <th class="ng-binding">مدة العقد</th>
                            <th class="ng-binding">الأيام المستخدمة</th>
                            <th class="ng-binding">الأيام المتبقيه</th>
                            <th class="ng-binding">الإجراء</th>
                            <th class="ng-binding">طلب تغيير</th>
                            <th class="ng-binding">طلب ذات صلة</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- ngRepeat: list in mycontractlist | filter : Contractpaginate -->

                        <!-- ngIf: mycontractlist.length<1 -->
                        <tr ng-if="mycontractlist.length<1" class="ng-scope">
                            <td colspan="7" class="ng-binding">لا يوجد بيانات</td>
                        </tr><!-- end ngIf: mycontractlist.length<1 -->
                        </tbody>
                    </table>
                    <!-- ngIf: mycontractlist && mycontractlist.length > 0 -->
                </div>


            </div>


            <div id="change_request" class="modal fade delete-address change-rqst-modal ng-scope" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-dismiss" data-dismiss="modal"></div>
                    <div class="modal-content">
                        <div class="modal-body">

                            <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                            <h1 class="ng-binding">تغيير طلب العقد</h1>
                            <!-- ngRepeat: foll in CurrentActionStatus -->
                            <!-- ngRepeat: foll in CurrentActionStatus -->
                            <!-- ngRepeat: foll in CurrentActionStatus -->
                            <!-- ngRepeat: foll in CurrentActionStatus -->
                            <!-- ngRepeat: foll in CurrentActionStatus -->
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

</section>
<!-- Blog Area End Here -->
