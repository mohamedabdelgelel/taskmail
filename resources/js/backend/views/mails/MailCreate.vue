<template>

    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
            <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">

                    <!--begin::Heading-->
                    <div class="d-flex flex-column">

                        <!--begin::Breadcrumb-->

                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                                {{ $trans('lang.Send') }}

                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                                <li class="breadcrumb-item">
                                    <a href="#" class="text-muted">
                                        {{ $trans('lang.Send') }}
                                    </a>
                                </li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Heading-->

                </div>
                <!--end::Info-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">


                    <!--begin::Button-->

                    <!--end::Button-->


                </div>
                <!--end::Toolbar-->

            </div>
        </div>
        <!--end::Subheader-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Dashboard-->

                <div class="row">

                    <div class="col-md-12">
                        <!--begin::Card-->
                        <div class="card card-custom">

                            <form class="form" enctype="multipart/form-data" @submit.prevent="validateBeforeSubmit">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>{{ $trans('lang.Title') }}*</label>
                                            <input name="title" v-model="title" v-validate="'required'"
                                                   :class="{'input': true, 'is-invalid': errors.has('title') }"
                                                   class="form-control" type="text" :placeholder="$trans('lang.Title')">
                                            <span v-show="errors.has('title')"
                                                  class="help is-danger invalid-feedback">{{
                                                    errors.first('title')
                                                }}</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>{{ $trans('lang.Message') }}*</label>
                                            <textarea name="message" v-model="message" v-validate="'required'"
                                                   :class="{'input': true, 'is-invalid': errors.has('message') }"
                                                   class="form-control" type="text" :placeholder="$trans('lang.Message')">
                                            </textarea>
                                            <span v-show="errors.has('message')"
                                                  class="help is-danger invalid-feedback">{{
                                                    errors.first('message')
                                                }}</span>
                                        </div>
                                    </div>




                                    <div class="form-group row" v-for="i in emails.length">
<!--                                            <input v-model="field1[i]" placeholder="Enter First Name">-->
                                            <div class="col-lg-6">
                                                <label>{{ $trans('lang.Email') }}</label>
                                                <input name="mails[]" v-model="mails[i-1]" v-validate="'required'"
                                                       :class="{'input': true, 'is-invalid': errors.has('mails') }"
                                                       class="form-control" type="email" :placeholder="$trans('lang.Email')">
                                                <span v-show="errors.has('mails')"
                                                      class="help is-danger invalid-feedback">{{
                                                    errors.first('mails')
                                                }}</span>
                                            </div>
                                    </div>
                                    <button @click="AddField" type="button" class="btn btn-secondary">
                                        New Email
                                    </button>

                                </div>


                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary mr-2">{{ $trans('lang.Submit') }}</button>
                                            <button type="reset" class="btn btn-secondary">{{ $trans('lang.Cancel') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>


</template>

<script>

export default {
    name: 'send-mail',
    data () {
        return {
            emails: [] ,
            mails: [] ,

            title: "",
            message: "",
            is_saving: false,
        }
    },





    methods: {
        validateBeforeSubmit() {
            this.is_saving = false;
            this.$validator.validateAll().then((result) => {
                if (result) {
                    // eslint-disable-next-line
                    this.create()
                    return;
                }
                this.is_saving = false;

                this.$toast.open({
                    type: "error",
                    message: "There Is Some Errors !"
                })
            });
        },
        create() {
            this.is_saving = true ;
            axios.post('/api/mails/send',{
                'title':this.title,
                'emails':this.mails,
                'message':this.message,

            }).then((res) => {
                if (!!res.response) {
                    if (res.response.status == 422) {
                        this.is_saving = false ;

                        for (let field of Object.keys(res.response.data.errors)) {
                            this.$toast.open({
                                type: "error",
                                message: res.response.data.errors[field][0]
                            })
                        }
                    }

                } else {
                    this.$toast.open({
                        type: "success",
                        message: "sent"
                    })



                }

            }).catch((err) => {
                console.log(err);
                console.log(err);

                this.is_saving = false ;

                this.$toast.open({
                    type: "error",
                    message: "There Is Some Errors Try Later Again!"
                })
            });

        },
        resetForm() {
            console.log('Reseting the form')
            var self = this; //you need this because *this* will refer to Object.keys below`

            //Iterate through each object field, key is name of the object field`
            Object.keys(this.form).forEach(function (key, index) {
                self.form[key] = '';
            });
        },

        AddField: function () {
            this.emails.push('');
        }

    },
    mounted() {

        this.emails.push('');
        this.mails=[];

    },

}

;
</script>
