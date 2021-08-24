{{-- Extends layout --}}
@extends('dashboard.layout.default')


@section('extracss')
    <link rel="stylesheet" href="{{asset('/dashboard/css')}}/mdtimepicker.min.css">
    <link rel="stylesheet" href="{{asset('/dashboard/css')}}/jquerysctipttop.css">
    <link rel="stylesheet" href="{{asset('/dashboard/css')}}/summernote.css">

@endsection

@section('extrajs')
    <script src="{{asset('/dashboard/js')}}/mdtimepicker.min.js"></script>
    <script src="{{asset('/dashboard/js')}}/mdtimepicker-init.js"></script>
    <script src="{{asset('/dashboard/js')}}/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
          var summernote = document.getElementById("summernote");
            // var summernote = $(".summernote");

            $('#summernote').summernote({
                height: 800,
                callbacks: {
                    onImageUpload: function(files, editor, welEditable) {
                        sendFile(files[0], editor, welEditable);
                    }
                }
            });

            function sendFile(file, editor, welEditable) {
                var path="<?=url("/")."/reports/get-report-img"?>";
                    console.log(path);
                data = new FormData();
                data.append("file", file);
                data.append("_token", "{{ csrf_token() }}");
                $.ajax({
                    data: data,
                    type: "POST",
                    url: path,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        console.log(url);
                        var imgNode =document.createElement('img');
                        var src= URL.createObjectURL(file);
                        imgNode.setAttribute("src",src);
                        $(summernote).summernote('insertNode', imgNode);
                    }
                });
            }
        });
    </script>


@endsection

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
                <div class="card my-3">
                    <div class="card-body">
                        <div class="page-titles ltr">
                            <ol class="breadcrumb justify-content-start">
                                <?php
                                $a = request()->path();
                                $a = explode("/", $a);
                                $length = count($a);
                                $length--;
                                $i = 0;
                                ?>
                                @foreach($a as $bred)
                                    <li class="breadcrumb-item @if($i==$length) {!! 'active' !!} @endif">
                                        <a href="javascript:void(0)">{{$bred}}</a>
                                    </li>
                                    @php
                                        $i++
                                    @endphp
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
                                <div class="row py-3">
                                    <div class="col-12 col-md-4">
                                        <p>
                                            گزارش کار
                                            <span class="user-name">
                                                      <?php
                                                if (Auth::check()) {
                                                    echo Auth::user()->name;
                                                }
                                                ?>
                                             </span>
                                            <span>
                                                روز
                                            </span>
                                            <span class="persian-date-txt">
                                               {!! parsi_date("l","now") !!}
                                                {{parsi_date("Y/m/d","now")}}
                                             </span>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="d-flex justify-content-end">
                                            <p class="pr-1">
                                                ساعت ورود:
                                            </p>
                                            <input type="text" id="timepicker" class="form-control get-time-input timepicker-start"
                                                   value="9:00 AM"/>
                                            <p class="px-1">
                                                ساعت خروج:
                                            </p>
                                            <input type="text" id="timepickerExit" class="form-control get-time-input timepicker-end"
                                                   value="6:00 PM"/>
                                        </div>

                                    </div>
                                </div>
                                {{-- تست ادیتوز --}}
                                <div class="summernote" id="summernote"></div>
                                {!! submit_btn("success",$page_description) !!}
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

