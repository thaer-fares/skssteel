@extends('admin.layout.master')

@section('title')
   عرض بيانات السائق
@stop

@section('css')

@stop

@section('subheader')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    تصويب </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="{{ route('admin.dashboard.view') }}" class="kt-subheader__breadcrumbs-home"><i
                            class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.dashboard.view') }}" class="kt-subheader__breadcrumbs-link">
                        الرئيسية
                    </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.users.view') }}" class="kt-subheader__breadcrumbs-link">
                        المستخدمين
                    </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.users.showDriverInfo') }}" class="kt-subheader__breadcrumbs-link">
                        عرض بيانات السائق
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!-- begin:: Content -->
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            إضافة مستخدم
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" id="frmAdd2" method="get"
                      action="{{ route('admin.users.getDriverByIdentity') }}">
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>رقم هوية السائق:</label>
                                <input type="text" class="form-control" name="identity"
                                       placeholder="اكتب رقم هوي السائق هنا لجلب البيانات من برنامج المواصلات">
                            </div>

                        </div>



                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-6 kt-align-right">
                                    <button type="submit" class="btn btn-brand" id="driverInfo">جلب البيانات</button>
                                    <a href="{{ route('admin.users.view') }}" class="btn btn-secondary">الغاء</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    <!-- End:: Content -->
@stop

@section('js')
    {{-- <script src="assets/admin/general/js/scripts/users.js" type="text/javascript"></script> --}}

    <script>
//    $('#driverInfo').on('submit', function(event) {
//             event.preventDefault();
//             var form_data = $(this).serialize();


//             $.ajax({
//                 url: "",
//                 method: "get",
//                 data: form_data,
//                 dataType: "json",
//                 success: function(data) {
//                     Swal.fire({
//                         title: 'تمت الإضافة بنجاح!',
//                         text: "تمت إضافة البيانات بنجاح",
//                         type: 'success',
//                         showCancelButton: false,
//                         confirmButtonColor: '#3085d6',
//                         confirmButtonText: 'حسناً',
//                     }).then((result) => {
//                         if (result) {
//                             if (result.value) {

//                             }
//                         }
//                     })
//                 },
//                 error: function(data) {
//                     Swal.fire({
//                         type: 'error',
//                         title: 'خطأ في البيانات المدخلة',
//                         text: data.message,

//                     });

//                 }

//             })
//         });
//         </script>
@stop
