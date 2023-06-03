@extends('admin.layout.master')

@section('title')
    الرئيسية
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
                    <a href="{{ route('admin.dashboard.view') }}" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.dashboard.view') }}" class="kt-subheader__breadcrumbs-link">
                        الرئيسية </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{ route('admin.users.view') }}" class="kt-subheader__breadcrumbs-link">
                        المستخدمين </a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')



    <!-- begin:: Content -->
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                   بيانات السائق
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover" id="users_table">
                <thead>
                <tr>

                    <th>اسم السائق</th>
                    <th>رقم الهوية</th>
                    <th>مكان العمل</th>
                    <th>رقم الموبايل</th>

                </tr>

                <tr>

                    <th>{{$res_json2->info->name }}</th>
                    <th>{{$res_json2->info->id_number }}</th>
                    <th>{{$res_json2->info->department->name  }}</th>
                    <th>{{$res_json2->info->mobile }}</th>

                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>


            <!--end: Datatable -->
        </div>
    </div>
    <!-- end:: Content -->
@stop

@section('js')
    {{-- <script src="assets/admin/general/js/scripts/users.js" type="text/javascript"></script> --}}
@stop
