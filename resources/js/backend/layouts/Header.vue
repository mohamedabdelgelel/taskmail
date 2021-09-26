<template>
    <div>
        <div id="kt_header" class="header  header-fixed ">
            <!--begin::Container-->
            <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                <!--begin::Header Menu Wrapper-->
                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                </div>
                <!--end::Header Menu Wrapper-->
                <!--begin::Topbar-->
                <div class="topbar">


                    <!--begin::Languages-->
                    <div class="dropdown">
                        <!--begin::Toggle-->
                        <div class="topbar-item" data-toggle=" " data-offset="10px,0px">
                            <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                <a href="/dashboard/lang/en" v-if="lang == 'ar'">
                                    <img class="h-20px w-20px rounded-sm"
                                         src="/media/svg/flags/226-united-states.svg" alt=""/>
                                </a>
                                <a href="/dashboard/lang/ar" v-else>
                                    <img class="h-20px w-20px rounded-sm"
                                         src="/media/svg/flags/226-united-states.svg" alt=""/>
                                </a>

                            </div>
                        </div>


                        <!--end::Toggle-->


                    </div>
                    <!--end::Languages-->

                    <!--begin::User-->
                    <div class="topbar-item">
                        <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                             id="kt_quick_user_toggle">
                            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                            <span
                                class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Admin</span>
                            <span class="symbol symbol-lg-35 symbol-25 symbol-light-danger ">
		                        <span class="symbol-label font-size-h5 font-weight-bold">A</span>
		                    </span>
                        </div>
                    </div>
                    <!--end::User-->

                    <!--begin::Dropdown-->
<!--                    <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                        &lt;!&ndash;begin::Nav&ndash;&gt;
                        <div class="navi navi-spacer-x-0 pt-5">

                            <div class="navi-footer  px-8 py-5">
                                <a href="#" target="_blank"
                                   class="btn btn-light-primary btn-block font-weight-bold">Sign Out</a>

                            </div>
                            &lt;!&ndash;end::Footer&ndash;&gt;
                        </div>
                        &lt;!&ndash;end::Nav&ndash;&gt;
                    </div>-->
                    <!--end::Dropdown-->
                </div>
                <!--end::Topbar-->
            </div>
            <!--end::Container-->
        </div>
    </div>

</template>
<style scoped>
a.sociall img {
    width: 25px;
}

.checkbox-inline.company_Card label {
    display: inline-block;
    text-align: center;
}

.checkbox-inline .checkbox span {
    margin: auto;
}

.btn .badge {
    position: absolute;
    top: -1px;
    right: 0;
    color: #6993FF;
    border: 1px solid;
    padding: 7px 5px;
    line-height: 0;
    border-radius: 50%;
}
</style>

<script>


export default {
    data: () => ({
        lang: window._locale,
    }),
    methods: {
        changeLang(lang) {
            console.log(lang)
            this.$lang.setLocale(lang)
        }
    },
};
</script>
