<template>

<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
<!--begin::Subheader-->
<div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">

            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                {{ $trans('lang.dashboard') }}                            </h5>
            <!--end::Page Title-->

            <!--begin::Actions-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>


            <!--end::Actions-->
        </div>
        <!--end::Info-->


    </div>
</div>
<!--end::Subheader-->

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
        <!--begin::Dashboard-->
        <div class="row">

            <div class="col-xl-4">

                <!--begin::Callout-->
                <div class="card card-custom wave wave-animate-slow wave-primary  mb-8 gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-primary  svg-icon-4x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->

                                                            <i class="fas fa-users fa-3x text-danger "></i>

                                <!--end::Svg Icon--></span></div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h5 mb-3">
                                    {{ $trans('lang.Total Users') }}
                                    <div class="text-dark-75">
                                        342

                                    </div>
                                </a>

                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                </div>
                <!--end::Callout-->

            </div>
            <div class="col-xl-4">

                <!--begin::Callout-->
                <div class="card card-custom wave wave-animate-slow wave-primary  mb-8 gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-primary  svg-icon-4x"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->

                                                            <i class="fab fa-wpforms fa-3x text-danger "></i>

                                <!--end::Svg Icon--></span></div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h5 mb-3">
                                    {{ $trans('lang.Total Requests') }}
                                    <div class="text-dark-75">
                                        2284

                                    </div>
                                </a>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                </div>
                <!--end::Callout-->

            </div>
            <div class="col-xl-4">

                <!--begin::Callout-->
                <div class="card card-custom wave wave-animate-slow wave-primary  mb-8 gutter-b">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <!--begin::Icon-->
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-primary  svg-icon-4x">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->

                                <i class=" fas fa-female fa-3x text-danger "></i>

                                <!--end::Svg Icon-->
                            </span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h5 mb-3">
                                    {{ $trans('lang.Total Maids') }}

                                    <div class="text-dark-75">
                                        1681

                                    </div>
                                </a>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                </div>
                <!--end::Callout-->

            </div>
        </div>



        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
