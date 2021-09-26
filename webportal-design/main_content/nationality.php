<style>
    .form-group input {
        height: 40px;
    }
    .nav-tabs .nav-item {
        color: #fff;
    }

</style>
<section id="tabs" class="section-padding-2-10 project-tab graybg mt75 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 padding0">
                <ul id="breadcrumb">
                    <li><a href="?page=index" class="active"><i class="fa fa-home"> </i></a></li>
                    <li><a href="?page=login" class="active"> سجل بياناتك</a></li>
                    <li><a href="?page=nationality" class="active"> اختر الجنسية</a></li>
                    <li><a href="?page=team"> اختر العاملة المنزلية</a></li>
                    <li><a href="?page=pay">تفاصيل الطلب / الدفع</a></li>
                </ul>
            </div>
            </div>




        <div class="row bggred marg0 padd4040040">
            <div class="col-lg-12">
                <div class="heading-layout4"> <h4 class="colorwh">الرجاء اختيار الجنسية المناسبة لك</h4> </div>

            </div>
            <div class="col-md-4">
                <form class="form-inline pr20">

                    <label class="colorwh" style="width: 100%;text-align: right;display: inline-block;font-size: 10px"> هل لديك رمز ترويجي؟</label>

                    <div class="form-group mx-sm-3 mb-2" style="margin-right:0px !important;">
                         <input type="text" class="form-control" id="inputPassword2" placeholder=" " style="width: 130px; height: 30px;">
                    </div>
                    <button type="submit" class="btn fw-btn-fill btn-success  mb-2" style="width: auto;padding: 4px;">تأكيد</button>
                </form>

                <img src="img/figure/banner-figure.png" alt="figure" class="ser_wom mt-3">

            </div>
            <div class="col-md-8 single-product-other-info">

                <ul class="nav nav-tabs tab-nav-list">
                    <li class="nav-item">
                        <a class="active" href="#nav-home" data-toggle="tab" aria-expanded="false">3 شهور</a>
                    </li>
                    <li class="nav-item">
                        <a href="#nav-profile" data-toggle="tab" aria-expanded="false">6 شهور</a>
                    </li>
                    <li class="nav-item">
                        <a href="#nav-contact" data-toggle="tab" aria-expanded="false">12 شهر</a>
                    </li>
                    <li class="nav-item">
                        <a href="#nav-contact2" data-toggle="tab" aria-expanded="false">24 شهر</a>
                    </li>
                </ul>



                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div id="product-view" class="product-box-grid">

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">اختر الخدمة </label>
                                        <div class="col-8">
                                            <select id="services" name="City" class="form-control select2">
                                                <option value="" selected>اختر الخدمة</option>
                                                <option value="1" >وساطة</option>
                                                <option value="2">تأجير </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12  mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">الجنسية المتاحة </label>
                                        <div class="col-8">
                                            <select id="nationality" name="City" class="form-control select2">
                                                <option value="" selected>اختر الجنسية</option>
                                                <option value="1">إندونيسيا</option>
                                                <option value="2">الفلبين</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-12 mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">استلام من فرع </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2">
                                                <option value="" selected>اختر المدينة</option>
                                                <option value="" >الرياض</option>
                                                <option value="" >المدينة المنورة</option>
                                                <option value="" >جدة</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12 mt-4">

                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;"> </label>
                                        <div class="col-8">
                                            <div class="form-checkbox form-checkbox-inline nationality_rent checked">
                                                <label class="form-checkbox-label">
                                                    إيجار منتهي بنقل الكفالة
                                                    <input name="rap" class="form-checkbox-field" checked type="checkbox">
                                                    <i class="form-checkbox-button"></i>


                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div id="product-view" class="product-box-grid">

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">اختر الخدمة </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2">
                                                <option value="">اختر الخدمة</option>
                                                <option value="" selected>وساطة</option>
                                                <option value="">تأجير </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12  mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">الجنسية المتاحة </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2 disabled" disabled>
                                                <option value="">اختر المدينة</option>
                                                <option value="" selected>إندونيسيا</option>
                                                <option value="">Mecca</option>
                                                <option value="">Dammam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-12 mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">استلام من فرع </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2">
                                                <option value="">اختر المدينة</option>
                                                <option value="" selected>بنجلاديش</option>
                                                <option value="">Mecca</option>
                                                <option value="">Dammam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div id="product-view" class="product-box-grid">

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">اختر الخدمة </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2 disabled" disabled>
                                                <option value="">اختر الخدمة</option>
                                                <option value="" selected>وساطة</option>
                                                <option value="">تأجير </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12  mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">الجنسية المتاحة </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2 disabled" disabled>
                                                <option value="">اختر المدينة</option>
                                                <option value="" selected>إندونيسيا</option>
                                                <option value="">Mecca</option>
                                                <option value="">Dammam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-12 mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">استلام من فرع </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2">
                                                <option value="">اختر المدينة</option>
                                                <option value="" selected>بنجلاديش</option>
                                                <option value="">Mecca</option>
                                                <option value="">Dammam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div id="product-view" class="product-box-grid">

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">اختر الخدمة </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2 disabled" disabled>
                                                <option value="">اختر الخدمة</option>
                                                <option value="" selected>وساطة</option>
                                                <option value="">تأجير </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 col-12  mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">الجنسية المتاحة </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2 disabled" disabled>
                                                <option value="">اختر المدينة</option>
                                                <option value="" selected>إندونيسيا</option>
                                                <option value="">Mecca</option>
                                                <option value="">Dammam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-12 col-12 mt-4">
                                    <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label colorwh" style="padding-top: 15px;">استلام من فرع </label>
                                        <div class="col-8">
                                            <select name="City" class="form-control select2">
                                                <option value="">اختر المدينة</option>
                                                <option value="" selected>بنجلاديش</option>
                                                <option value="">Mecca</option>
                                                <option value="">Dammam</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>

                </div>
                <div class="row bggred" /*style="background: #efefef;position: fixed;bottom: 0;width: 100%;"*/>
                <div class="col-2 mg-t-15"></div>
                <div class="col-4 mg-t-15 form-group">
                    <button style="color: #fff;background: rgba(0,0,0,0.24);" type="submit" class="fw-btn-fill  text-primarytext" value="?page=nationality">
                        الرجوع للخلف
                    </button>
                </div>
                <div class="col-4 mg-t-15 form-group">
                    <button style="color: #fff;" type="submit" class="fw-btn-fill btn-success text-primarytext" value="?page=nationality">تأكيد</button>
                </div>

            </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End Here -->