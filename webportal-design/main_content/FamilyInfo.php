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

                <h1 class="title-page ng-binding">معلومات العائلة</h1>
                <div class="panel-group" id="dasboard_family_informtion">
                    <div class="panel panel-default">
                        <div class="panel-heading active">
                            <a data-toggle="collapse"
                                                             data-parent="#dasboard_my_informtion"
                                                             data-target="#topic-1" class="ng-binding"
                                                             aria-expanded="true">عدد اأفراد العائلة</a></div>
                        <div id="topic-1" class="panel-collapse collapse in active show" style="" aria-expanded="true">
                            <div class="panel-body">
                                <form class="ng-pristine ng-valid ng-valid-min ng-valid-max">
                                    <div class="form-block input-field">

                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">عدد أفراد العائلة</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12"><input type="number"
                                                                                   ng-model="user.NoofFamilyMembers"
                                                                                   min="0" max=""
                                                                                   placeholder="عدد أفراد العائلة"
                                                                                   class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-not-empty">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-block input-field">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">عدد الزوجات</span> :</label>
                                            </div>

                                            <div class="col-sm-8 col-xs-12"><input type="number"
                                                                                   ng-model="user.NoofWifes" min="0"
                                                                                   max="" placeholder="عدد الزوجات"
                                                                                   class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-not-empty">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-block input-field">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">عدد الأشخاص المسنين</span> :</label>
                                            </div>

                                            <div class="col-sm-8 col-xs-12"><input type="number"
                                                                                   ng-model="user.NoofOldAgePerson"
                                                                                   min="0" max=""
                                                                                   placeholder="عدد الأشخاص المسنين"
                                                                                   class="ng-pristine ng-untouched ng-valid ng-valid-min ng-valid-max ng-not-empty">
                                            </div>
                                        </div>
                                        <h6 class="right-hint ng-binding">ملحوظة:فوق سن العاشر</h6>
                                    </div>
                                    <div class="form-block textarea-field">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">ملاحظات حول الأشخاص كبار السن</span>
                                                    :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <textarea ng-model="user.OldAgePersonNotes"
                                                          placeholder="ملاحظات حول الأشخاص كبار السن"
                                                          class="ng-pristine ng-untouched ng-valid ng-not-empty"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block textarea-field">
                                        <div class="row clearfix">
                                            <div class="col-xs-12">
                                                <h5 class="ng-binding">هل لدى أي فرد من أفراد الأسرة الخاصة بك إعاقة
                                                    تتطلب عناية خاصة؟</h5>
                                                <div class="radio-check"><input type="radio"
                                                                                ng-click="SpecialDisabledNotes(SpecialDisabled)"
                                                                                ng-model="SpecialDisabled" name="r1"
                                                                                value="Yes"
                                                                                class="ng-pristine ng-untouched ng-valid ng-not-empty"><label
                                                            class="ng-binding">نعم</label></div>
                                                <div class="radio-check"><input type="radio"
                                                                                ng-click="SpecialDisabledNotes(SpecialDisabled)"
                                                                                ng-model="SpecialDisabled" name="r1"
                                                                                value="No"
                                                                                class="ng-pristine ng-untouched ng-valid ng-not-empty"><label
                                                            class="ng-binding">لا</label></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block textarea-field" id="SpecialDisabledNotes"
                                         style="display: none;">
                                        <div class="row clearfix">
                                            <div class="col-sm-4 col-xs-12">
                                                <label><span class="ng-binding">ملاحظات حول المعاقين</span> :</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12">
                                                <textarea ng-model="user.SpecialDisabledNotes"
                                                          placeholder="ملاحظات حول المعاقين"
                                                          class="ng-pristine ng-untouched ng-valid ng-empty"></textarea>
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
                    <!-- <input type="button" class="cancel" value="Cancel" onclick="ClearFilter();" />-->
                </div>
            </div>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
