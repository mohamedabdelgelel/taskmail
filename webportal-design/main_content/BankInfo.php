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
            <style class="ng-scope">
                hr {
                    border-bottom: 1px solid #d3b12b;
                }
            </style>
            <div class="mypersonal_information family-information ng-scope">

                <h1 class="title-page ng-binding">معلومات البنك</h1>
                <div class="banking_tabs">
                    <ul class="nav row clearfix">
                        <li class="active col-md-6"><a data-toggle="tab" data-target="#bank_tab" class="ng-binding">حساب
                                مصرفي نشط</a></li>
                        <li class="col-md-6"><a data-toggle="tab" data-target="#sadad_tab" class="ng-binding">جميع
                                الحسابات البنكية</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="bank_tab">
                        <div class="add-new-location">
                            <h4   class="ng-binding">No Accounts are Added</h4>
                            <a class="add-account ng-binding" ng-click="CreateBank()">+إضافة حساب بنك</a>
                            <div class="new-account-form" id="Bankpopup">
                                <form class="ng-pristine ng-valid ng-valid-maxlength">
                                    <h2 class="ng-binding">تفاصيل حسابي البنكي</h2>

                                    <div class="form-block">
                                        <div class="row clearfix">
                                            <div class="col-md-3">
                                                <label><span class="ng-binding">My IBAN Number</span>:</label>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" ng-model="userbank.IBANNumber" min="24" max="24"
                                                       id="IBANNumber" maxlength="24" placeholder="رقم IBAN "
                                                       class="ng-pristine ng-untouched ng-valid ng-valid-maxlength ng-not-empty">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="package-selection">
                                        <div class="form-block">
                                            <div class="row clearfix">
                                                <div class="col-md-3">
                                                    <label><span class="ng-binding">البنك</span>:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- ngIf: currentLang !='Ar' -->
                                                    <!-- ngIf: currentLang =='Ar' --><select ng-if="currentLang =='Ar'"
                                                                                             class="select ng-pristine ng-untouched ng-valid ng-scope ng-empty"
                                                                                             ng-model="userbank.BankID"
                                                                                             ng-options="g.Bank_Id as g.BankNameAr for g in Bank">
                                                        <option value="" class="ng-binding" selected="selected"> البنك
                                                        </option>
                                                        <option label="مصرف الراجحي
" value="string:0000002">مصرف الراجحي
                                                        </option>
                                                        <option label="مجموعة سامبا المالية (سامبا)
" value="string:0000004">مجموعة سامبا المالية (سامبا)
                                                        </option>
                                                        <option label="البنك الأهلي التجاري
" value="string:0000005">البنك الأهلي التجاري
                                                        </option>
                                                        <option label="مصرف الأنماء " value="string:0000006">مصرف
                                                            الأنماء
                                                        </option>
                                                        <option label="البنك السعودي البريطاني
" value="string:0000007">البنك السعودي البريطاني
                                                        </option>
                                                        <option label="البنك السعودي الفرنسي
" value="string:0000008">البنك السعودي الفرنسي
                                                        </option>
                                                        <option label="البنك العربي الوطني" value="string:0000009">البنك
                                                            العربي الوطني
                                                        </option>
                                                        <option label="بنك الجزيرة
" value="string:0000010">بنك الجزيرة
                                                        </option>
                                                        <option label="بنك البلاد
" value="string:0000011">بنك البلاد
                                                        </option>
                                                        <option label="البنك السعودي للاستثمار" value="string:0000012">
                                                            البنك السعودي للاستثمار
                                                        </option>
                                                        <option label="البنك الأول" value="string:0000013">البنك الأول
                                                        </option>
                                                        <option label="بنك الرياض
" value="string:0000014">بنك الرياض
                                                        </option>
                                                        <option label="بنك الأهلي" value="string:0000015">بنك الأهلي
                                                        </option>
                                                    </select><!-- end ngIf: currentLang =='Ar' -->
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="save-changes">
                                        <input type="button" value="إضافة حساب بنك" ng-click="updateuserbank()">
                                        <input type="button" class="cancel" value="إلغاء" ng-click="ClearFilter()">
                                    </div>
                                </form>
                            </div>

                            <div ng-hide="!user.IBANNumber || !user.BankStatus" class="addresses-list ng-hide"
                                 id="dlt_Bankinformation_1">
                                <div class="block">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="arabic_right ng-binding">تفاصيل حسابي البنكي</td>
                                            <!--<td>
                                    <a href="#/"><img src="/app/IndividualCustomerPortalNew/images/edit.png" alt="" /> {{'Edit'| translate}}</a>
                                    <a data-toggle="modal" data-target="#delete-bank-account"><img src="/app/IndividualCustomerPortalNew/images/dlt.png" alt="" />{{'Delete' | translate}}</a>
                                </td>-->
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul>
                                        <li class="ng-binding">اسم البنك: <span class="ng-binding">Riyad Bank</span>
                                        </li>
                                        <li class="ng-binding">رقم الحساب: <span style="unicode-bidi:bidi-override;"
                                                                                 class="ng-binding">SA2500000000000000000000</span>
                                        </li>
                                        <li class="ng-binding">الحاله: <span class="ng-binding">غير فعال</span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sadad_tab">
                        <div class="add-new-location">
                            <h4 ng-show="banklist.length==0" class="ng-binding ng-hide">No Accounts are Added</h4>

                            <div ng-hide="banklist.length==0" class="addresses-list" id="dlt_Sadadinformation_1">
                                <!-- ngRepeat: list in banklist -->
                                <div class="block ng-scope" ng-repeat="list in banklist">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="arabic_right ng-binding">تفاصيل حسابي البنكي</td>
                                            <!--<td>
                                    <a href="#/"><img src="/app/IndividualCustomerPortalNew/images/edit.png" alt="" /> {{'Edit'| translate}}</a>
                                    <a data-toggle="modal" data-target="#delete-bank-account"><img src="/app/IndividualCustomerPortalNew/images/dlt.png" alt="" />{{'Delete' | translate}}</a>
                                </td>-->
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul>
                                        <!-- ngIf: currentLang !='Ar' -->
                                        <!-- ngIf: currentLang =='Ar' -->
                                        <li ng-if="currentLang =='Ar'" class="ng-binding ng-scope">اسم البنك: <span
                                                    class="ng-binding">بنك الرياض
</span></li><!-- end ngIf: currentLang =='Ar' -->
                                        <li class="ng-binding">رقم الحساب: <span style="unicode-bidi:bidi-override;"
                                                                                 class="ng-binding">SA2500000000000000000000</span>
                                        </li>
                                        <li class="ng-binding">الحاله: <span class="ng-binding">غير فعال</span></li>
                                        <!-- ngIf: list.Status==false -->
                                        <li ng-if="list.Status==false" class="ng-binding ng-scope">الإجراء: <span> <a
                                                        class="btn btn-primary ng-binding" id="activeid"
                                                        ng-click="sendverifyCode(list.RecId,1)">تفعيل</a></span></li>
                                        <!-- end ngIf: list.Status==false -->

                                    </ul>
                                </div><!-- end ngRepeat: list in banklist -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<div id="delete-bank-account" class="modal fade delete-address" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-dismiss" data-dismiss="modal"></div>
                    <div class="modal-content">
                        <div class="modal-body">
                            <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                            <h1>{{'Delete Bank Account'| translate}}</h1>
                            <h2>{{'Are you sure you want to delete this Bank Account'| translate}}?</h2>
                            <div class="dlt_or_not">
                                <a class="dlt-address" id="Bankinformation_block_1" data-dismiss="modal">{{'Yes'| translate}}</a>
                                <a class="dont-dlt" data-dismiss="modal">{{'No'| translate}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div id="delete-sadad-account" class="modal fade delete-address ng-scope" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-dismiss" data-dismiss="modal"></div>
                    <div class="modal-content">
                        <div class="modal-body">
                            <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                            <h1 class="ng-binding">حذف طريقة الدفع</h1>
                            <h2 class="ng-binding">Are you sure you want to delete this Method?</h2>
                            <div class="dlt_or_not">
                                <a class="dlt-address ng-binding" id="Sadadinformation_block_1"
                                   data-dismiss="modal">نعم</a>
                                <a class="dont-dlt ng-binding" data-dismiss="modal">لا</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <a data-target="#bankverifypopup" data-toggle="modal" id="tempbankverifypopup" class="ng-scope"></a>
            <div class="mypersonal_information ng-scope">
                <div id="bankverifypopup" class="modal fade delete-address Confirm_Delivery" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-dismiss" data-dismiss="modal"></div>
                        <div class="modal-content">
                            <div class="modal-body">
                                <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                                <h1 class="ng-binding">رمز التفعيل</h1>
                                <div class="form-field">
                                    <div class="row clearfix">
                                        <div class="col-md-12"><input type="text" value="0564103664"
                                                                      placeholder="رقم الجوال" readonly=""></div>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="row clearfix">
                                        <div class="col-md-12"><input type="text" ng-model="BankActionVerifyCode"
                                                                      placeholder="رمز التفعيل"
                                                                      class="ng-pristine ng-untouched ng-valid ng-empty">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field">
                                    <div class="row clearfix">
                                        <div class="col-md-12"><a href="" class="btns ng-binding"
                                                                  ng-click="ResendBankVerifyCode()">إعادة إرسال رمز
                                                التحقق</a></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="yes-or-no">
                                    <a class="btns pull-right ng-binding" ng-click="CheckBankVerifyCode()">التفعيل</a>
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
