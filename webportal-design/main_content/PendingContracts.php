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
            <div class="my-contaract ng-scope">
                <div class="panel-1">
                    <table>
                        <tbody>
                        <tr>
                            <td><a class="My_Contracts_btn  ng-binding" href="?page=MyContracts">عقودي</a></td>
                            <td><a class="My_Contracts_btn active ng-binding" href="?page=PendingContracts">الطلبات المعلقه</a>
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
                <div class="panel-3" style="overflow:auto;">
                    <div id="pendingcontract_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row" style="width: 100%;">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="pendingcontract_length"><label>عرض <select
                                                name="pendingcontract_length" aria-controls="pendingcontract"
                                                class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select></label></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="pendingcontract_filter" class="dataTables_filter"><label>بحث<input
                                                type="search" class="form-control input-sm" placeholder=""
                                                aria-controls="pendingcontract"></label></div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <table id="pendingcontract"
                                       class="table my_contracts_table my_pending_table dataTable no-footer"
                                       cellspacing="0" role="grid" aria-describedby="pendingcontract_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="ng-binding sorting_asc" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="رقم الطلب: activate to sort column descending"
                                            style="width: 94px;">رقم الطلب
                                        </th>
                                        <th class="ng-binding sorting" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1"
                                            aria-label="الجنسية: activate to sort column ascending"
                                            style="width: 72px;">الجنسية
                                        </th>
                                        <th class="ng-binding sorting" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1"
                                            aria-label="المهنة: activate to sort column ascending"
                                            style="width: 206px;">المهنة
                                        </th>
                                        <th class="ng-binding sorting" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1"
                                            aria-label="المدة: activate to sort column ascending" style="width: 65px;">
                                            المدة
                                        </th>
                                        <th class="ng-binding sorting" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1"
                                            aria-label="الحاله: activate to sort column ascending"
                                            style="width: 159px;">الحاله
                                        </th>
                                        <th class="blank_th sorting" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1" aria-label=": activate to sort column ascending"
                                            style="width: 128px;"></th>
                                        <th class="blank_th sorting" tabindex="0" aria-controls="pendingcontract"
                                            rowspan="1" colspan="1" aria-label=": activate to sort column ascending"
                                            style="width: 128px;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- ngRepeat: item in PendingPackages -->
                                    <!-- end ngRepeat: item in PendingPackages -->
                                    <!-- ngIf: PendingPackages.length<1 -->
                                    <tr ng-repeat="item in PendingPackages" class="ng-scope odd" role="row">
                                        <td class="ng-binding sorting_1">0240105</td>
                                        <td class="ng-binding">كينيا</td>
                                        <!--<td>{{item.NationalityEn  |translate}}</td>-->
                                        <td class="ng-binding">عاملة الخدمة المنزلية</td>
                                        <td class="ng-binding"> شهور</td>
                                        <td class="ng-binding">في انتظار الدفع</td>
                                        <td class="yellow"><a ng-hide="item.status >2" href=""
                                                              ng-click="RemovePendingRequest(item.RequestNumber)"
                                                              class="ng-binding ng-hide">إلغاء</a></td>
                                        <td class="yellow"><a href="#/NewContractRequest/0240105"
                                                              class="ng-binding"><img
                                                        src="img/icon-8.png" alt="">أكمل
                                                الطلب</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="pendingcontract_info" role="status" aria-live="polite">
                                    من 1 إدخالات
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="pendingcontract_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="pendingcontract_previous"><a
                                                    href="#" aria-controls="pendingcontract" data-dt-idx="0"
                                                    tabindex="0"><i class="fa fa-caret-left"></i></a></li>
                                        <li class="paginate_button active"><a href="#" aria-controls="pendingcontract"
                                                                              data-dt-idx="1" tabindex="0">1</a></li>
                                        <li class="paginate_button next disabled" id="pendingcontract_next"><a href="#"
                                                                                                               aria-controls="pendingcontract"
                                                                                                               data-dt-idx="2"
                                                                                                               tabindex="0"><i
                                                        class="fa fa-caret-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
