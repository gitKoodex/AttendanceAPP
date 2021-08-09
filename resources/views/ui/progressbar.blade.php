{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Progressbar</a></li>
    </ol>
  </div>
  <div class="row">
    <!-- column -->
    <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Default Progress bars</h4>
          <p class="mb-0 subtitle">Default progress bar style</p>
        </div>
        <div class="card-body">
          <div class="progress">
            <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- column -->
    <div class="col-xl-6 col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Striped Progress bar</h4>
          <p class="mb-0 subtitle">add <code>.progress-bar-striped</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="progress">
            <div class="progress-bar bg-info progress-bar-striped" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%; height:10px;" role="progressbar">
              <span class="sr-only">85% Complete (success)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- column -->
  </div>
  
  <div class="row">
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Colored Progress bar</h4>
          <p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the style
          </p>
        </div>
        <div class="card-body">
          <div class="progress mt-3">
            <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-info" style="width: 40%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-success" style="width: 20%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-primary" style="width: 30%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-warning" style="width: 80%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-inverse" style="width: 40%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Different bar sizes </h4>
          <p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the style
          </p>
        </div>
        <div class="card-body">
          <div class="progress mt-3">
            <div class="progress-bar bg-danger" style="width: 60%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-info" style="width: 40%; height:8px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-success" style="width: 20%; height:10px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-primary" style="width: 30%; height:12px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-warning" style="width: 80%; height:14px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Column -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Animated Striped bar </h4>
          <p class="mb-0 subtitle">add <code>bg-primary, .bg-danger, .bg-info</code> to change the style
          </p>
        </div>
        <div class="card-body">
          <div class="progress mt-3">
            <div class="progress-bar active progress-bar-striped bg-danger" style="width: 60%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-info active progress-bar-striped" style="width: 40%; height:8px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-success active progress-bar-striped" style="width: 20%; height:10px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-primary active progress-bar-striped" style="width: 30%; height:12px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-warning active progress-bar-striped" style="width: 80%; height:14px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Vertical Progress bars </h4>
          <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="progress progress-vertical">
            <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Vertical Progress From bottom </h4>
          <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="progress progress-vertical-bottom">
            <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical-bottom">
            <div class="progress-bar bg-info" style="width:4px; height:80%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical-bottom">
            <div class="progress-bar bg-success" style="width:4px; height:60%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical-bottom">
            <div class="progress-bar bg-primary" style="width:4px; height:40%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical-bottom">
            <div class="progress-bar bg-warning" style="width:4px; height:30%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Different size Progress bars </h4>
          <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="progress progress-vertical">
            <div class="progress-bar bg-danger" style="width:4px; height:60%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-info" style="width:6px; height:80%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-success" style="width:8px; height:60%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-primary" style="width:10px; height:40%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress progress-vertical">
            <div class="progress-bar bg-warning" style="width:14px; height:30%;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Animated bars </h4>
          <p class="mb-0 subtitle">add <code>.progress-vertical</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="progress mt-3">
            <div class="progress-bar bg-danger progress-animated" style="width: 60%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-info progress-animated" style="width: 40%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-success progress-animated" style="width: 20%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-primary progress-animated" style="width: 30%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-warning progress-animated" style="width: 80%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <div class="progress mt-3">
            <div class="progress-bar bg-inverse progress-animated" style="width: 40%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Column -->
    <div class="col-xl-8">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">SKILL BARS </h4>
          <p class="mb-0 subtitle">add <code>.progress-animated</code> to change the style</p>
        </div>
        <div class="card-body">
          <h6>Photoshop
            <span class="pull-right">85%</span>
          </h6>
          <div class="progress ">
            <div class="progress-bar bg-danger progress-animated" style="width: 85%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <h6 class="mt-4">Code editor
            <span class="pull-right">90%</span>
          </h6>
          <div class="progress">
            <div class="progress-bar bg-info progress-animated" style="width: 90%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
          <h6 class="mt-4">Illustrator
            <span class="pull-right">65%</span>
          </h6>
          <div class="progress">
            <div class="progress-bar bg-success progress-animated" style="width: 65%; height:6px;" role="progressbar">
              <span class="sr-only">60% Complete</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Column -->
  </div>
</div>

@endsection