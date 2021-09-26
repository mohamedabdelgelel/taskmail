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

                            <li class="active" >
                                <a href="?page=stuff" data-toggle="tooltip" data-placement="top">
                                    <span class="icon-font"><i class="fas fa-file-alt"></i></span>
                                    العاملة المنزلية
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
        <!-- ngView:  -->
        <div id="IndividualPortalApp" ng-view="" class="dashoboard_body ng-scope"><div class="my-contaract ng-scope">


                <div class="mydashboard-listing">

                    <div class="mycontracts-details">



                        <div class="mycontracts_details_information">
                            <div class="panel-group" id="dasboard_contract_details">

                                <div class="panel panel-default">
                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#dasboard_contract_details" data-target="#contract-2" class="ng-binding collapsed" aria-expanded="false">العاملة المنزلية الحالية</a></div>
                                    <div id="contract-2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="my-contaract">


                                            <div class="panel-3" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                                                <table id="my_contracts" class="table my_contracts_table my_pending_table" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th class="ng-binding">رقم العاملة</th>
                                                        <th class="ng-binding">إسم العاملة</th>
                                                        <th class="ng-binding">الجنسية</th>
                                                        <th class="ng-binding">الجنس</th>
                                                        <th class="ng-binding">صالحة من</th>

                                                        <th class="ng-binding">الإجراء</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- ngRepeat: list in EmployeeListActive | orderBy : 'EmployeeName' -->

                                                    <!-- ngIf: ContractDetails.length<1 -->
                                                    </tbody>
                                                </table>
                                            </div>



                                        </div>


                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#dasboard_contract_details" data-target="#contract-3" class="ng-binding collapsed" aria-expanded="false">تاريخ العاملة المنزلية</a></div>
                                    <div id="contract-3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">

                                        <div class="my-contaract">


                                            <div class="panel-3" style="overflow:auto;-webkit-overflow-scrolling:touch;">
                                                <table id="my_contracts" class="table my_contracts_table my_pending_table" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th class="ng-binding">رقم العاملة</th>
                                                        <th class="ng-binding">إسم العاملة</th>
                                                        <th class="ng-binding">الجنسية</th>
                                                        <th class="ng-binding">الجنس</th>
                                                        <th class="ng-binding">صالحة من</th>
                                                        <th class="ng-binding">صالحة إلى</th>
                                                        <th class="ng-binding">الإجراء</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <!-- ngRepeat: list in EmployeeListInActive | orderBy : 'EmployeeName' -->

                                                    <!-- ngIf: ContractDetails.length<1 -->
                                                    </tbody>
                                                </table>
                                            </div>



                                        </div>

                                    </div>
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


            <extensionpaymenttemplateonline externalfn="currentExtensionPaymentFn" class="ng-scope ng-isolate-scope"><style>
                    .edit-tool-action {
                        font-weight: normal;
                    }

                    .profile_right i.fa {
                        font-family: FontAwesome !important;
                    }

                    .profile_right i.material-icons {
                        font-family: 'Material Icons';
                        font-size: 14px;
                        line-height: 24px;
                    }

                    .package-available p {
                        margin: 0px;
                    }

                    .package-available {
                        text-align: center;
                        border: 1px solid #ddd;
                        padding: 0;
                    }

                    span.package-label {
                        min-width: 110px;
                        display: inline-block;
                    }
                    .modal-body {
                        max-height: Calc(100vh - 160px);
                    }
                    .modal-dialog {
                        width: 900px;
                        margin: 60px auto 10px;
                    }
                </style>

                <div id="ExTempCreatePaymentPop" class="modal">
                    <div class="modal-dialog" style="width:800px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" id="btnclose" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title"><b class="ng-binding">{{'Payment' | translate }}</b></h4>

                                <h4 class="ng-binding">Total Amount- {{ExTempTotalPayAmount}} <span ng-show="ExTempavailableamount" class="ng-binding"> |AmountTo Pay -{{ExTempavailableamount}} </span></h4>
                            </div>
                            <div class="modal-body">


                                <div class="widget">
                                    <div class="widget-header">
                                        <span class="widget-caption">Advance Payment</span>
                                        <!--<span class="widget-caption" style="float:right;"> <small><label style="float:right;"><b>Available Balance:{{availableamount}}</b></label></small></span>-->

                                        <div class="widget-buttons">
                                            <!--<a class="themeprimary gridicon" href="/Sales/IndividualContract/PrintPaymentRecieptbyCustomerRequest?RequestId={{payselectRequestId}}" id="ChsPaymnetReciept" style="display:none">
                                                <i class="fa fa-print"></i>
                                            </a>-->
                                            <a href="" widget-maximize="" name="maximize" class="themeprimary gridicon">
                                                <i id="maximize" class="fa fa-expand"></i>
                                            </a>
                                            <a href="" widget-collapse="" name="collapseminus" class="themeprimary gridicon">
                                                <i id="collapse" class="fa fa-minus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="widget-body" ng-style="{'overflow-y':'auto','height': ExTempUnSettlementList.length>=7? '250px':'null'}">
                                        <!--<input class="btn btn-primary" type="button" value="Create Line" ng-click="crtline()" />-->
                                        <table class="table table-bordered table-condensed">
                                            <thead>
                                            <tr>

                                                <th class="ng-binding">
                                                    {{'Date' | translate }}
                                                </th>
                                                <th class="ng-binding">
                                                    {{'Transaction' | translate }}
                                                </th>
                                                <th class="ng-binding">
                                                    {{'Total Amount' | translate }}
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>

                                            <!-- ngRepeat: Items in ExTempUnTranSettlementList -->
                                            </tbody>
                                        </table>

                                    </div>
                                </div>


                                <div class="widget">
                                    <div class="widget-header">
                                        <span class="widget-caption ng-binding"> {{'Payment Lines' | translate }}</span>
                                        <div class="widget-buttons">
                                            <!--<a name="crtline" ng-hide="ExTemppaymentfinish" class="themeprimary gridicon" ng-click="ExTempcrtline()">
                                                <i id="crtlinei" class="fa fa-pencil-square-o"></i>
                                            </a>-->



                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <!--<input class="btn btn-primary" type="button" value="Create Line" ng-click="crtline()" />-->
                                        <table class="table">
                                            <thead>
                                            <tr>

                                                <th class="ng-binding">
                                                    {{'Payment Mode' | translate }}
                                                </th>
                                                <th class="ng-binding">
                                                    {{'Document Number' | translate }}
                                                </th>

                                                <th class="ng-binding">
                                                    {{'Document Details' | translate }}
                                                </th>
                                                <th class="ng-binding">
                                                    {{'Document Date' | translate }}
                                                </th>
                                                <th class="ng-binding">
                                                    {{'Line Amount' | translate }}
                                                </th>
                                                <th class="ng-binding">
                                                    {{'Notes' | translate }}
                                                </th>

                                                <th></th>




                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- ngRepeat: crtline in ExTempcrtlineList -->
                                            </tbody>
                                        </table>
                                        <!-- ngIf: ExTempcurrentSelectDetails.CustomerTransactionType ==12 && false -->
                                    </div>
                                </div>



                                <div class="clearfix">

                                    <!--<a name="crtline" ng-hide="ExTemppaymentfinish" class="themeprimary gridicon" ng-click="ExTempcrtline()">
                                <i id="crtlinei" class="fa fa-pencil-square-o"></i>
                            </a>-->


                                    <button type="submit" style="top:5px;float:right;margin-left:5px" class="btn btn-primary ng-binding" ng-show="ExTemppaymentfinish" ng-disabled="!ExTemppaymentfinish" ng-click="ExTempmakepayment()" id="makepayment">
                                        {{'Submit' | translate }}
                                    </button>

                                    <button style="top:5px;float:right;margin-left:5px" class="btn btn-primary ng-binding" ng-show="!ExTemppaymentfinish" ng-click="closeExpaymentPopUp()" id="closeExpaymentPopUp">
                                        {{'Submit' | translate }}
                                    </button>

                                    <button style="top:5px;float:right" class="btn btn-primary ng-binding" ng-disabled="ExTemppaymentfinish" ng-click="ExTempcrtline()" id="payNow">
                                        {{'Pay Now' | translate }}
                                    </button>

                                </div>




                            </div>
                        </div>
                    </div>
                </div>

                <div id="ExTempCreatePaymentLinePop" class="modal">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" id="ExTemplineclose" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title ng-binding">{{'Payment Lines' | translate }}</h4>


                            </div>

                            <input type="hidden" id="CreateClick" ng-click="CreateClick()">
                            <input type="hidden" id="DeleteBtn" ng-click="DeleteBtn()">


                            <div class="modal-body">
                                <!--<h4>{{'Total Amount' | translate }} - {{ExTempTotalPayAmount}} |{{'AmountTo Pay' | translate }} -{{ExTempavailableamount}}</h4>-->
                                <paymentaction class="payment-selection" paymentresource="PaymentResource" paymentinit="InitiatePayment" needredirect="true" redirectinit="AfterPaymentfn" paymentcardform="paymentcardform" currentpaymentfn="currentPaymentFn">
                                    <style>
                                        .sweet-alert ul li, .info-msg ul li {
                                            text-align: left;
                                            font-size: 20px;
                                            line-height: initial;
                                            margin-bottom: 5px;
                                        }
                                        .rotate-x-180 {
                                            -moz-transform: rotateX(180deg);
                                            -webkit-transform: rotateX(180deg);
                                            -o-transform: rotateX(180deg);
                                            -ms-transform: rotateX(180deg);
                                            transform: rotateX(180deg);
                                        }

                                    </style>

                                    <div class="clearfix">

                                        <!--<h2> {{'Select Advance Amount'|translate }} <b> {{paymentCurrentpackageDetails.AdvanceAmount}} </b> {{'SAR' |translate}} </h2>
                                        <h2 ng-if="paymentCurrentpackageDetails.DeliveryAmount"> {{'Select Delivery Amount'|translate }} <b> {{paymentCurrentpackageDetails.DeliveryAmount}} </b> {{'SAR' |translate}} </h2>-->
                                        <!-- ngIf: paymentCurrentpackageDetails.AdvanceAmount -->


                                        <div class="row clearfix">

                                            <div class="col-md-6 col-xs-12">
                                                <div class="panel-group" id="payment_info" ng-show="!paymentsucessform &amp;&amp; !showBankTransferform &amp;&amp; !showSadadBillform">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading"><a data-toggle="collapse" class="collapsed ng-binding" data-parent="#payment_info" data-target="#Creditcard" ng-click="payviacredit()">{{'Credit Card' |translate}} <span class="img-icon"><img src="/app/IndividualCustomerPortalNew/images/visa.png" alt=""></span></a></div>
                                                        <div id="Creditcard" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="Credit_Card">

                                                                    <div id="paymentcardform">

                                                                    </div>
                                                                    <div id="PaymentSucessForm" ng-show="paymentsucessform">
                                                                        <img src="../../../assets/img/thumbs-up-2.jpg" style="height:70px;">

                                                                        <hl class="ng-binding">{{'Payment Created Successfully'|translate}}</hl>
                                                                    </div>
                                                                    <div id="PaymentfailForm" ng-show="paymenterrorform">
                                                                        <img src="../../../assets/img/thumbs-up-2.jpg" class="rotate-x-180" style="height:70px;">

                                                                        <hl class="ng-binding">{{'Payment Failed'|translate}}</hl>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading"><a data-toggle="collapse" class="collapsed ng-binding" data-parent="#payment_info" data-target="#MadaCreditcard" ng-click="payviamadacredit()">{{'MADA Card' |translate}} <span class="img-icon"><img src="/app/IndividualCustomerPortalNew/images/madacardlogo.png" alt=""></span></a></div>
                                                        <div id="MadaCreditcard" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="Credit_Card">

                                                                    <div id="madapaymentcardform">

                                                                    </div>
                                                                    <div id="PaymentSucessForm" ng-show="paymentsucessform">
                                                                        <img src="../../../assets/img/thumbs-up-2.jpg" style="height:70px;">

                                                                        <hl class="ng-binding">{{'Payment Created Successfully'|translate}}</hl>
                                                                    </div>
                                                                    <div id="PaymentfailForm" ng-show="paymenterrorform">
                                                                        <img src="../../../assets/img/thumbs-up-2.jpg" class="rotate-x-180" style="height:70px;">

                                                                        <hl class="ng-binding">{{'Payment Failed'|translate}}</hl>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel panel-default" style="display:none">
                                                        <div class="panel-heading"><a data-toggle="collapse" class="collapsed ng-binding" data-parent="#payment_info" data-target="#BankTransfer">{{'Bank Transfer' |translate}}<span class="img-icon"><img src="/app/IndividualCustomerPortalNew/images/bank-icon.png" alt=""></span></a></div>
                                                        <div id="BankTransfer" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="Bank_Transfer">
                                                                    <ul>
                                                                        <li class="ng-binding">{{'The unique bank account will be assigned to your customer ID'|translate}}</li>
                                                                        <li class="ng-binding">{{'The account is only for you.This cannot be used by others to pay for their payment' | translate }}</li>
                                                                        <li class="ng-binding">{{'Your contract will be activated only after you make the payment and selected the employee' | translate}}</li>
                                                                        <li class="ng-binding">
                                                                            {{'In transfer method, your payment will take upto one business day to be updated in your ARCO account right after we receive your transfer in your bank account' | translate }},{{'and you will receive payment confirmation SMS message' | translate}} ({{'Please consider that making transfer from one bank to another bank takes more time' | translate}}).
                                                                        </li>
                                                                        <li class="ng-binding">{{'you will be allowed to make the selection after we update your payment'  | translate}}.</li>
                                                                        <li class="ng-binding">{{'Your contract will be activated only after you make the payment and selected the employee'  | translate}}.</li>
                                                                    </ul>
                                                                    <h2 class="with-ico ng-binding"><img src="/app/IndividualCustomerPortalNew/images/payment-icon.png" alt="">{{'Once you transfer the payment to the given bank account number , you can proceed with the candidate selection process' |translate}}.</h2>
                                                                    <div class="checkbox-site" ng-show="!showbankaccount">
                                                                        <input type="checkbox" id="TermsCKB" ng-model="TermsCKB" class="ng-pristine ng-untouched ng-valid">
                                                                        <label class="ng-binding">{{'I agree to the above bank transfer' |translate}}</label>
                                                                        <a class="ng-binding">{{'Terms and Conditions' |translate}}</a>
                                                                    </div>
                                                                    <input type="button" value="{{'Proceed With Bank Transfer'|translate}}" ng-disabled="!TermsCKB" ng-click="payviavirtual()" ng-show="!showbankaccount">
                                                                </div>

                                                                <div class="Bank_Transfer" ng-show="showbankaccount">
                                                                    <h2 class="with-ico"><b class="ng-binding">{{'Our Bank Account Number' |translate}} :</b> <span id="" class="ng-binding">{{virtualaccountid}}</span></h2>

                                                                    <input type="button" value="Go to Home" ng-click="gotoHome()">
                                                                    <input type="button" value="Go to New Request" ng-click="gotonewRequest()">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default" style="display:none;">
                                                        <div class="panel-heading"><a data-toggle="collapse" class="collapsed ng-binding" data-parent="#payment_info" data-target="#SadadAccount" ng-click="payviasadaad()">{{'Sadad Account'|translate }}<span class="img-icon"><img src="/app/IndividualCustomerPortalNew/images/sadad.png" alt=""></span></a></div>
                                                        <div id="SadadAccount" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="Sadad_Accounts" ng-show="!paymentAfterSaddadfn">
                                                                    <form class="ng-pristine ng-valid">

                                                                        <div class="sadad-id">
                                                                            <h1 class="ng-binding">{{'Enter new Sadad ID' |translate}}</h1>
                                                                            <div class="form-block">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12">
                                                                                        <input type="text" ng-model="sadaadid" placeholder="Sadad Account Name" class="ng-pristine ng-untouched ng-valid">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--<h6>To learn more about sadad, please view these tutorials</h6>-->
                                                                        </div>
                                                                        <div class="checkbox-site">
                                                                            <input type="checkbox" id="sadadCKB" ng-class="sadadCKB"><label class="ng-binding">{{'Save this card information for later use' |translate}}</label>
                                                                        </div>
                                                                        <div class="pay">

                                                                            <input type="button" value="Checkout Securely" ng-disabled="!sadadCKB" ng-click="PaySadaad()">
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div class="Sadad_Accounts" ng-show="paymentAfterSaddadfn">
                                                                    <div id="PaymentSucessForm" ng-show="paymentsucessform">
                                                                        <hl class="ng-binding">{{'Payment Created Sucessfully' |translate}}</hl>
                                                                    </div>
                                                                    <div id="PaymentfailForm" ng-show="paymenterrorform">
                                                                        <hl class="ng-binding">{{'Payment Faild' |translate}}</hl>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default" ng-hide="currentPaymentFn &amp;&amp; currentPaymentFn.HideSadadBills">
                                                        <div class="panel-heading"><a data-toggle="collapse" class="collapsed ng-binding" data-parent="#payment_info" data-target="#SadadBills">{{'Sadad Bills' |translate}} <span class="img-icon"><img src="/app/IndividualCustomerPortalNew/images/sadad.png" alt=""></span></a></div>
                                                        <div id="SadadBills" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="Sadad_Bills">
                                                                    <!--<p>{{'Sadad Bills' |translate }}{{'Terms & Conditions' |translate}}.</p>
                                                                    <h2 class="with-ico"><img src="/app/IndividualCustomerPortalNew/images/payment-icon.png" alt="" />{{'Once Sadad approve your Bill , you can proceed with the candidate selection process'|translate}}.</h2>
                                                                    <div class="checkbox-site">
                                                                        <input type="checkbox" id="sadadBillsCKB" ng-model="sadadBillsCKB" /><label>{{'I agree to the above bank transfer' |translate }}</label><a>{{'Terms and Conditions' |translate}}</a>
                                                                    </div>-->
                                                                    <!-- <input type="button" value="Proceed With Sadad Bills" ng-disabled="!sadadBillsCKB" ng-click="PaySadaadBills()" />-->
                                                                    <input type="button" value="{{'Proceed With Sadad Bills'|translate}}" ng-click="payviasadaadbills()">
                                                                </div>

                                                                <div class="Sadad_Bills" ng-show="showSadadBillNumber">
                                                                    <h2 class="with-ico"><b class="ng-binding">{{'SADAD Bill Number' |translate}} :</b> <span id="" class="ng-binding">{{SadadBillNumber}}</span></h2>

                                                                    <input type="button" value="Go to Home" ng-click="gotoHome()">
                                                                    <input type="button" value="Go to New Request" ng-click="gotonewRequest()">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default" style="display:none;">
                                                        <div class="panel-heading"><a data-toggle="collapse" class="collapsed ng-binding" data-parent="#payment_info" data-target="#SaudiFinance">{{'Saudi Finance Support' |translate }}<span class="img-icon"><img src="/app/IndividualCustomerPortalNew/images/saudi-finance.png" alt=""></span></a></div>
                                                        <div id="SaudiFinance" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="Sadad_Bills">
                                                                    <p class="ng-binding">{{'Descriptive text about Finance Support' |translate}}. {{'Lorem ipsum dolor sit amet' |translate}}, {{'consectetur adipiscing elit' |translate}}. {{'Aenean euismod bibendum laoreet'|translate}}.{{'Proin gravida dolor sit amet lacus accumsan et viverra justo commodo' |translate}}</p>
                                                                    <h2 class="with-ico ng-binding" ng-show="!Finacesuccessform"><img src="/app/IndividualCustomerPortalNew/images/payment-icon.png" alt="">{{'Once Sadad approve your Bill , you can proceed with the candidate selection process'|translate}}.</h2>
                                                                    <input type="submit" value="Proceed with Finance Support" ng-click="CreateFinanceApplication()" ng-show="!Finacesuccessform">
                                                                </div>

                                                                <div class="Sadad_Bills" ng-show="Finacesuccessform">
                                                                    <h2 class="with-ico ng-binding">{{'Your Application Id is' |translate }}<span class="ng-binding">{{FinaceApplicationId}}</span></h2>
                                                                    <h2 class="with-ico ng-binding">{{'The finance company will contact you to complete the procedure' |translate}}</h2>

                                                                    <input type="button" value="Go to Home" ng-click="gotoHome()">
                                                                    <input type="button" value="Go to New Request" ng-click="gotonewRequest()">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div ng-show="showBankTransferform" class="payment-information">
                                                    <div class="info">
                                                        <h1>BANK TRANSFER</h1>
                                                        <div class="bg-color">
                                                            <h2>Our Bank Account Number</h2>
                                                            <h3 class="ng-binding">{{virtualaccountid}}</h3>
                                                        </div>
                                                        <p>You will receive this IBAN number by SMS</p>
                                                        <p>We will notify you to select your employee when your application is approved.</p>
                                                        <h4><img src="images/payment-icon.png" alt="">Once you transfer the package fees you have selected (2800 SAR) to ARCO bank account number, you can proceed with the candidate selection process.</h4>
                                                        <div class="checkbox-site">
                                                            <input type="checkbox"><label>I understand that my contract status wil be pending bank transfer before proceeding by candidate selection</label>
                                                        </div>
                                                        <a class="confirm" ng-click="gotoHome()">Confirm</a>
                                                        <a ng-click="backpaymentfrom()" class="payment-link">Change Payment Method</a>
                                                    </div>

                                                </div>

                                                <div class="payment-information" ng-show="showSadadBillform">
                                                    <div class="info">
                                                        <h1 class="ng-binding">{{'Sadad Bills' |translate }}</h1>
                                                        <div class="bg-color">
                                                            <h2 class="ng-binding">{{'SADAD Bill Number' |translate }}</h2>
                                                            <h3 class="ng-binding">{{RequestSadadBillNumber}}</h3>
                                                        </div>
                                                        <p class="ng-binding">{{'Sadad Bills' |translate }}{{'Terms &amp; Conditions' |translate}}.</p>
                                                        <!-- ngIf: currentLang =='Ar' -->
                                                        <p class="ng-binding">{{'You will receive this SADAD ID by SMS'|translate}}</p>
                                                        <p class="ng-binding">{{'We will notify you to select your employee when your application is approved'|translate}}.</p>
                                                        <h4 style="text-align:justify" class="ng-binding">
                                                            <img src="/app/IndividualCustomerPortalNew/images/payment-icon.png" alt="">
                                                            {{"Once we have SADAD approval on your bill you can return to website to select the employee if you haven't already booked,"|translate}} {{'then please go to the nearest branch to sign the contract and provide us with the required documents,'|translate}} {{'in case of contract renewal there is no need to visit the nearest branch'|translate}}
                                                        </h4>
                                                        <a class="confirm ng-binding" ng-click="gotoHome(New)">{{'Go to Home'|translate}}</a>
                                                        <a ng-click="gotopaymentmethodss()" class="payment-link ng-binding">{{'Change Payment Method'|translate}}</a>
                                                    </div>
                                                </div>

                                                <div class="panel-group" ng-show="paymentsucessform">

                                                    <div id="PaymentSucessForm" ng-show="paymentsucessform" style="text-align:center;">
                                                        <img src="../../../assets/img/thumbs-up-2.jpg" style="height:70px;">
                                                        <br>
                                                        <hl class="ng-binding">{{'Payment Created Sucessfully' |translate}}</hl>
                                                        <br>
                                                        <br>
                                                        <input type="button" value="{{'Next' |translate}}" ng-click="currentPaymentFn.GoToSelection()" class="btn btn-primary">


                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-md-6 col-xs-12 col-rt" ng-hide="currentPaymentFn &amp;&amp; currentPaymentFn.TranSactionId ">
                                                <div class="right-bar" ng-show="paymentCurrentpackageDetails &amp;&amp; paymentCurrentpackageDetails.AdvanceAmount>=0 &amp;&amp; paymentCurrentpackageDetails.RecId">
                                                    <h2 class="ng-binding">{{'Your Contract Summary' |translate}}</h2>
                                                    <ul>
                                                        <li class="ng-binding"> {{'Nationality'|translate}} : <span class="ng-binding">{{paymentCurrentpackageDetails.NationalityEn |translate}}</span></li>
                                                        <li class="ng-binding">{{'Profession'|translate}} : <span class="ng-binding">{{paymentCurrentpackageDetails.JobSpecificationEn |translate}}</span></li>
                                                        <!-- ngIf: paymentCurrentpackageDetails.NoofMonths ==1 -->
                                                        <!-- ngIf: paymentCurrentpackageDetails.NoofMonths ==2 -->
                                                        <!-- ngIf: paymentCurrentpackageDetails.NoofMonths ==3 -->
                                                        <!-- ngIf: paymentCurrentpackageDetails.NoofMonths ==6 -->
                                                        <!-- ngIf: paymentCurrentpackageDetails.NoofMonths ==12 -->
                                                        <!-- ngIf: paymentCurrentpackageDetails.NoofMonths ==24 -->
                                                        <!-- ngIf: paymentCurrentpackageDetails.DeliveryAmount -->
                                                        <li class="ng-binding">{{'Advance Payment'|translate }}: <span class="ng-binding">{{paymentCurrentpackageDetails.AdvanceAmount}} {{'SAR' |translate}}</span></li>

                                                    </ul>
                                                    <div class="promocode-block" ng-show="!PromoDetails || !PromoDetails.PromoCode">

                                                        <h3 style="margin-top:10px;" id="Promomsg" ng-show="PackagePromoDetail.status" class="ng-binding">{{PackagePromoDetail.id.msg}}</h3>
                                                        <h3 style="margin-top:10px;" id="Promomsg" ng-show="!PackagePromoDetail.status" class="ng-binding">{{PackagePromoDetail.msg}}</h3>

                                                        <div class="row clearfix">
                                                            <div class="col-xs-12">
                                                                <input type="text" ng-model="PromoCodetxt" placeholder="{{'Enter Promo Code'|translate}}" class="ng-pristine ng-untouched ng-valid">
                                                                <input type="button" ng-click="checkPromoCode()" value="{{'Check Code'|translate}}" ng-show="!PackagePromoDetail.status">
                                                                <input type="button" ng-click="applyPromoCode()" value="{{'Apply Code'|translate}}" ng-show="PackagePromoDetail.status">
                                                            </div>
                                                        </div>
                                                        <!-- <h6>{{'Tips'|translate}}: {{'You can get a promo code by referring to affialte program' |translate}}.</h6>-->



                                                    </div>
                                                    <div class="promocode-block" ng-show="PromoDetails &amp;&amp; PromoDetails.PromoCode" style="border-top: 2px solid #6b4f4f;padding-top: 10px;">
                                                        <div class="row clearfix">

                                                            <h2 class="ng-binding">{{'Promo Code Details' |translate}}</h2>
                                                            <ul>
                                                                <li class="ng-binding">{{'Setup Name'|translate}} : <span class="ng-binding">{{PromoDetails.SetupName }}</span></li>
                                                                <li class="ng-binding">{{'Discount Amount'|translate}} : <span class="ng-binding">{{PromoDetails.DiscountAmount}} {{'SAR' |translate}}</span></li>
                                                                <li class="ng-binding">{{'Pay Amount'|translate }}: <span class="ng-binding">{{PromoDetails.PayAmount}} {{'SAR' |translate}}</span></li>
                                                                <li class="ng-binding">{{PromoDetails.promomsg}}</li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </paymentaction>
                            </div>
                            <!--<div class="modal-footer">
                                <button style="display:none" class="btn btn-primary" ng-if="ExTempTotalPayAmount==ExTempavailableamount" ng-click="BackToPrcocess()">
                                    Back
                                </button>
                            </div>-->

                        </div>
                    </div>
                </div>




                <!-- ngIf: false -->

            </extensionpaymenttemplateonline>
        </div>

    </div>

</section>
<!-- Blog Area End Here -->
