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
                            <li><a href="?page=MyContracts" data-toggle="tooltip" data-placement="top"><span class="icon-font">
                                        <i class="fas fa-file-alt"></i> </span>عقودي</a>
                            </li>
                            <li class="active"><a href="?page=MyPayments" data-toggle="tooltip" data-placement="top">
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
            <style class="ng-scope">
                table.dataTable.my_Payments_table tr td.sorting_1:before {
                    display: none;
                }
            </style>

            <div class="my-Payments ng-scope">
                 
                <div class="row clearfix">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="ng-binding">مدفوعاتي</h1>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <a href="" class="view-statement ng-binding" data-toggle="modal" data-target="#PaymentStatement">
                            <img class="normal" src="img/statement.png" alt="">
                            <img class="hover" src="img/statement-wht.png" alt="">الإطلاع على كشف الحساب
                        </a>
                    </div>
                    <input type="hidden" id="AngProcessId" ng-model="ProcessId" value="680"
                           class="ng-pristine ng-untouched ng-valid ng-empty">
                    <input type="hidden" id="AngStageId" ng-model="StageId" value="0"
                           class="ng-pristine ng-untouched ng-valid ng-empty">
                </div>

                <div class="panel-3" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                    <table id="my_contracts" class="table my_contracts_table dataTable no-footer" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th class="ng-binding">رقم مستند الدفع</th>
                            <th class="ng-binding">تاريخ السداد</th>
                            <th class="ng-binding">قيمة الدفعة</th>
                            <th class="ng-binding">طرق الدفع</th>
                            <th class="ng-binding">الإجراء</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- ngRepeat: list in mypaymentlist -->
                        <!-- ngIf: mypaymentlist.length<1 -->
                        <tr ng-if="mypaymentlist.length<1" class="ng-scope">
                            <td colspan="5" class="ng-binding">لا يوجد بيانات</td>
                        </tr><!-- end ngIf: mypaymentlist.length<1 -->
                        </tbody>
                    </table>
                </div>


            </div>
            <div class="my-Payments ng-scope">


                <div id="PaymentStatement" class="modal fade delete-address Confirm_Delivery" role="dialog"
                     style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-dismiss" data-dismiss="modal"></div>
                        <div class="modal-content">
                            <div class="modal-body" style="width:auto;height:500px;overflow-y:scroll">
                                <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                                <div id="my_statement_wrapper"
                                     class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="my_statement_length"><label>Showing
                                                    <select name="my_statement_length" aria-controls="my_statement"
                                                            class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select></label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="my_statement_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control input-sm" placeholder=""
                                                            aria-controls="my_statement"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="my_statement"
                                                   class="table my_contracts_table dataTable no-footer" cellspacing="0"
                                                   width="100%" role="grid" aria-describedby="my_statement_info"
                                                   style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th class="ng-binding sorting_asc" tabindex="0"
                                                        aria-controls="my_statement" rowspan="1" colspan="1"
                                                        style="width: 0px;" aria-sort="ascending"
                                                        aria-label="نوع التحويل: activate to sort column descending">نوع
                                                        التحويل
                                                    </th>
                                                    <th class="ng-binding sorting" tabindex="0"
                                                        aria-controls="my_statement" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="معرف المعاملة: activate to sort column ascending">
                                                        معرف المعاملة
                                                    </th>
                                                    <th class="ng-binding sorting" tabindex="0"
                                                        aria-controls="my_statement" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="رقم العقد: activate to sort column ascending">رقم
                                                        العقد
                                                    </th>
                                                    <th class="ng-binding sorting" tabindex="0"
                                                        aria-controls="my_statement" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="التاريخ: activate to sort column ascending">التاريخ
                                                    </th>
                                                    <th class="ng-binding sorting" tabindex="0"
                                                        aria-controls="my_statement" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="القيمة: activate to sort column ascending">القيمة
                                                    </th>
                                                    <th class="ng-binding sorting" tabindex="0"
                                                        aria-controls="my_statement" rowspan="1" colspan="1"
                                                        style="width: 0px;"
                                                        aria-label="الحاله: activate to sort column ascending">الحاله
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- ngRepeat: list in StatementList -->
                                                <!-- ngIf: mycontractlist.length<1 -->
                                                <tr class="odd">
                                                    <td valign="top" colspan="6" class="dataTables_empty">No data
                                                        available in table
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="my_statement_info" role="status"
                                                 aria-live="polite">Showing 0 to 0 of 0
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="my_statement_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous disabled"
                                                        id="my_statement_previous"><a href="#"
                                                                                      aria-controls="my_statement"
                                                                                      data-dt-idx="0" tabindex="0"><i
                                                                    class="fa fa-caret-left"></i></a></li>
                                                    <li class="paginate_button next disabled" id="my_statement_next"><a
                                                                href="#" aria-controls="my_statement" data-dt-idx="1"
                                                                tabindex="0"><i class="fa fa-caret-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
