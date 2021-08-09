{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb ltr">
                <?php
                    $a = request()->path();
                    $a = explode("/",$a);
                    $length= count($a);
                    $length--;
                    $i=0;
                ?>
                @foreach($a as $bred)
                   <li class="breadcrumb-item @if($i==$length) {!! "active" !!} @endif"><a href="javascript:void(0)">{{$bred}}</a></li>
                @endforeach
            </ol>
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
                            <table id="reportsTable" class="display min-w850">
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
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2011/07/25</td>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Female</td>
                                    <td>M.COM., P.H.D.</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2009/01/12</td>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2012/03/29</td>
                                    <td>Cedric Kelly</td>
                                    <td>Developer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2008/11/28</td>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2012/12/02</td>
                                    <td>Brielle Williamson</td>
                                    <td>Specialist</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>
                                    <td>2012/08/06</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/10/14</td>
                                    <td>Rhona Davidson</td>
                                    <td>Integration</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2009/09/15</td>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2008/12/13</td>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2008/12/19</td>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>Female</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2013/03/03</td>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2008/10/16</td>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2012/12/18</td>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/03/17</td>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2012/11/27</td>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/06/09</td>
                                    <td>Paul Byrd</td>
                                    <td>Financial Officer</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2009/04/10</td>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2012/10/13</td>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2012/09/26</td>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2011/09/03</td>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2009/06/25</td>
                                    <td>Yuri Berry</td>
                                    <td>Marketing Officer</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2011/12/12</td>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>Male</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/09/20</td>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Female</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2009/10/09</td>
                                    <td>Angelica Ramos</td>
                                    <td>Executive Officer</td>
                                    <td>Male</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/12/22</td>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Female</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/11/14</td>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Male</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2011/06/07</td>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>Female</td>
                                    <td>B.TACH, M.TACH</td>
                                    <td><a href="javascript:void(0);"><strong>123 456 7890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2010/03/11</td>
                                    <td>Fiona Green</td>
                                    <td>Operating Officer</td>
                                    <td>Male</td>
                                    <td>B.A, B.C.A</td>
                                    <td><a href="javascript:void(0);"><strong>987 654 3210</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>2011/08/14</td>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Female</td>
                                    <td>B.COM., M.COM.</td>
                                    <td><a href="javascript:void(0);"><strong>(123) 4567 890</a></strong></td>
                                    <td><a href="javascript:void(0);"><strong>info@example.com</a></strong></td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
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
@endsection
