<header class="header inner-header with-shadow fix-top ng-scope" ng-controller="IndividualPortalMainCtrl">
    <div class="container ng-scope" ng-controller="ChangeLang">
        <div class="logo"><a href="#/"><img src="img/logo-dar..k.png" alt=""></a></div>

        <span ng-click="getprofiledata()" id="getprofiledata"></span>

        <input type="hidden" value="CIN0083154" id="IndiviualCustomerID">

        <div class="main-menu"></div>
        <div class="right-menu">

            <div class="locale-popup dash-btns">
                <a class="locale-code-btn">
                    <i class="fa fa-globe wht"></i>
                    <span class="value ">Ar</span>
                </a>
                <div class="locale-overlay"></div>
                <div class="dash-dropdown locale-drop">
                    <a ng-click="changeLang('Ar')" class="navitem"> عربي</a>
                    <a ng-click="changeLang('Eng')" class="navitem">English</a>
                </div>
            </div>


            <div class="promo-popup dash-btns">
                <a class="promo-code-btn"><img src="img/promo-gray.png" class="gray" alt=""><img src="img/promo-wht.png"
                                                                                                 class="wht"
                                                                                                 alt=""><span
                            class="value">0</span></a>
                <div class="promo-overlay"></div>
                <div class="dash-dropdown promo-drop">
                    <h1 class="">الكود التسويقي</h1>
                    <h2 class=""></h2>
                    <a href="#" class="navitem ">شارك وإربح</a>
                    <a href="#" class="navitem ">عمولاتي</a>
                </div>
            </div>

            <div class="notify-popup dash-btns">
                <a class="notify-btn"><img src="img/notify-gray.png" class="gray" alt=""><img src="img/notify-wht.png"
                                                                                              class="wht" alt=""><span
                            class="value">0</span></a>
                <div class="notify-overlay"></div>
                <div class="dash-dropdown notify-drop">
                    <table>
                        <tbody>
                        <tr>
                            <td class="">تنبيهات</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="">تم الموافقة على طلب التمويل الخاص بك، يمكنك الآن إختيار العامل</p>
                    <a href="#/PendingContracts" class="navitem ">حدد المرشح</a>
                    <span class="notify-date ">التاريخ: 08/12/2019</span>
                    <p class="">تم إصدار الفاتورة</p>
                    <a href="#/MyInvoices" class="navitem ">عرض الفاتورة</a>
                    <span class="notify-date ">التاريخ: 08/12/2019</span>
                </div>
            </div>
            <div class="dashboard-menu dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle ">User Name<span
                            class="caret"></span></a>
                <div class="dropdown-menu dashboard-dropdown-menu" role="menu">
                    <div class="panel-1">
                        <div class="add-photo">
                            <div class="image-area">
                                <div class="flex-img">

                                    <img alt="" id="dashboard_photo" src="img/cbbe169a-90a1-43e0-aef5-0194718ca5d3.png">
                                </div>
                            </div>
                            <div class="upload-photo">

                                <input type="file" id="users_profile_photo">
                                <span class=""><i class="fa fa-camera"></i>تعديل الصورة</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-2">
                        <h1 class="">رقم العضو</h1>
                        <h2>CIN0083154</h2>
                    </div>
                    <div class="panel-3">
                        <a data-target="#Change_password" data-toggle="modal" class=""><i
                                    class="fa fa-lock"></i>تغيير كلمة السر</a>
                        <a href="#" class=""><i class="fa fa-sign-out"></i>خروج</a>
                    </div>
                </div>
            </div>
            <div class="dashboard-nav">
                <a class="dashboard-nav-btn">
                    <img class="normal" src="img/nav.png" alt="">
                    <img class="clicked" src="img/cross.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="navigation">
        <div class="container">
            <ul class="mob-menu">

            </ul>
        </div>
    </div>
</header>

<div class="dashoboard_sidebar_for_mob">
    <a class="dashboard-nav-close"><i class="fa fa-times"></i></a>
    <div class="panel-1">

        <div class="image" style="background-image:url(img/cbbe169a-90a1-43e0-aef5-0194718ca5d3.png)"></div>
        <h1 class="">User Name</h1>
        <h2>CIN0083154</h2>
    </div>

    <div class="panel-2">
        <ul>
            <li>
                <a class="menuitem " href="?page=profile" data-toggle="tooltip" data-placement="top"
                   title="Create, manage"><span class="icon-font"><i class="fa fa-home"></i></span>لوحة المعلومات</a>
            </li>
            <li class="dropdown" data-toggle="tooltip" data-placement="top" title="Create, manage"
                ng-class="getdropdownClass('MyInfo')">
                <a data-toggle="dropdown" class=""><span class="icon-font"><i class="fa fa-user"></i></span>
                    معلوماتي <span class="caret"></span></a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a class="menuitem "  href="?page=PersonalInfo" class="">البيانات الشخصية</a></li>
                        <li><a class="menuitem "  href="?page=FamilyInfo" class="">معلومات العائلة</a></li>
                        <li><a class="menuitem "  href="?page=Location" class="">الموقع</a></li>
                        <li><a class="menuitem "  href="?page=EmploymentInfo" class="">معلومات الوظيفة</a></li>
                        <li><a class="menuitem "  href="?page=BankInfo" class="">المعلومات المصرفية</a></li>
                        <li><a class="menuitem "  href="?page=CustomerDelegation" class="">تفوض عميل</a></li>


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
            </li>
        </ul>
    </div>
</div>


<div id="Change_password" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-dismiss" data-dismiss="modal"></div>
        <div class="modal-content">
            <div class="modal-body">

                <h3>تغير كلمة المرور
                    <a class="invite-dismiss" data-dismiss="modal"><i class="fa fa-times"></i></a>
                </h3>
                <div class="form-field">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <input type="password" class="form-control" id="oldpwd" placeholder="Old Password"/>
                        </div>
                    </div>
                </div>
                <div class="form-field">
                    <div class="row clearfix">
                        <div class="col-md-12"><input type="password" class="form-control"  id="Newpwd" placeholder="New Password"/></div>
                    </div>
                </div>
                <div class="form-field">
                    <div class="row clearfix">
                        <div class="col-md-12"><input type="password" class="form-control"  id="Confirmpwd"
                                                      placeholder="Confirm New Password"/></div>
                    </div>
                </div>
                <div class="yes-or-no">
                    <a class="cancel" id="cancelpwdPopup" data-dismiss="modal">الغاء</a>
                    <a class="btns" id="changepwd">حفظ</a>
                </div>
            </div>
        </div>
    </div>
</div>