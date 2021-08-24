{{-- Extends layout --}}
@extends('dashboard.layout.default')



{{-- Content --}}
@section('content')
<div class="col-10 col-md-10 p-0 bg-gray">
            <main class="tab-content" id="A" style="margin-top: 58px">
    <div class="container-fluid">
        <div class="card my-3 p-3">
            <h1>
                <h4 class="card-title p-3">{{$page_title}}</h4>
            </h1>
        </div>
        <div class="card my-3 ltr text-left">
            <div class="card-body">
                <div class="page-titles">
                    <ol class="breadcrumb ltr text-left justify-content-end">
                        <?php
                            $a = request()->path();
                            $a = explode("/",$a);
                            $length= count($a);
                            $length--;
                            $i=0;
                        ?>
                        @foreach($a as $bred)
                           <li class="breadcrumb-item @if($i==$length) {!! 'active' !!} @endif"><a href="javascript:void(0)">{{$bred}}</a></li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$page_description}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="reportsTable" class="display min-w850 data-table">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>تاریخ</th>
                                    <th>نام</th>
                                    <th>دپارتمان</th>
                                    <th>جنسیت</th>
                                    <th>عنوان</th>
                                    <th>ورود</th>
                                    <th>خروج</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>تاریخ</th>
                                    <th>نام</th>
                                    <th>دپارتمان</th>
                                    <th>جنسیت</th>
                                    <th>عنوان</th>
                                    <th>ورود</th>
                                    <th>خروج</th>
                                    <th>عملیات</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</main>
</div>
</div>
</div>
@endsection

@section("extrajs")
    <script src="{{url('/')}}/dashboard/js/jquery.dataTables.min.js"></script>
    <script src="{{url('/')}}/dashboard/js/dataTables-init.php"></script>
    {!! make_js_path(Request::url()) !!}
@endsection

