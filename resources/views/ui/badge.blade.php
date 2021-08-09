{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid badge-demo">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Badge</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Badges Size</h4>
          <p class="mb-0 subtitle">Default Bootstrap Badges</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <span class="badge badge-xs light badge-primary">Primary</span>
            <span class="badge badge-sm light badge-primary">Primary</span>
            <span class="badge light badge-secondary">Secondary</span>
            <span class="badge badge-lg light badge-danger">Danger</span>
            <span class="badge badge-xl light badge-warning">Warning</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Badges Light</h4>
          <p class="mb-0 subtitle">Default Bootstrap Badges</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <span class="badge light badge-primary">Primary</span>
            <span class="badge light badge-secondary">Secondary</span>
            <span class="badge light badge-success">Success</span>
            <span class="badge light badge-danger">Danger</span>
            <span class="badge light badge-warning">Warning</span>
            <span class="badge light badge-info">Info</span>
            <span class="badge light badge-light">Light</span>
            <span class="badge light badge-dark">Dark</span>
          </div>
          <div class="bootstrap-badge">
            <span class="badge light badge-primary">1</span>
            <span class="badge light badge-secondary">2</span>
            <span class="badge light badge-success">3</span>
            <span class="badge light badge-danger">4</span>
            <span class="badge light badge-warning">5</span>
            <span class="badge light badge-info">6</span>
            <span class="badge light badge-light">7</span>
            <span class="badge light badge-dark">8</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Badges </h4>
          <p class="mb-0 subtitle">Default Bootstrap Badges</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-danger">Danger</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-info">Info</span>
            <span class="badge badge-light">Light</span>
            <span class="badge badge-dark">Dark</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Pill Badge </h4>
          <p class="mb-0 subtitle">add <code>.badge-pill</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <span class="badge badge-pill badge-primary">Pill badge</span>
            <span class="badge badge-pill badge-secondary">Pill badge</span>
            <span class="badge badge-pill badge-success">Pill badge</span>
            <span class="badge badge-pill badge-danger">Pill badge</span>
            <span class="badge badge-pill badge-warning">Pill badge</span>
            <span class="badge badge-pill badge-info">Pill badge</span>
            <span class="badge badge-pill badge-light">Pill badge</span>
            <span class="badge badge-pill badge-dark">Pill badge</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Link Badge </h4>
          <p class="mb-0 subtitle">Link badge add in anchor tag</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-primary">Links</a>
            <a href="javascript:void()" class="badge badge-secondary">Links</a>
            <a href="javascript:void()" class="badge badge-success">Links</a>
            <a href="javascript:void()" class="badge badge-danger">Links</a>
            <a href="javascript:void()" class="badge badge-warning">Links</a>
            <a href="javascript:void()" class="badge badge-info">Links</a>
            <a href="javascript:void()" class="badge badge-light">Links</a>
            <a href="javascript:void()" class="badge badge-dark">Links</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded Badge </h4>
          <p class="mb-0 subtitle">add <code>.badge-rounded</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-rounded badge-primary">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-secondary">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-success">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-danger">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-warning">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-info">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-light">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-dark">Rounded</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded Outline Badge </h4>
          <p class="mb-0 subtitle">add <code>.badge-rounded</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-rounded badge-outline-primary">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-secondary">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-success">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-danger">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-warning">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-info">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-light">Rounded</a>
            <a href="javascript:void()" class="badge badge-rounded badge-outline-dark">Rounded</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Outline Circle Badge </h4>
          <p class="mb-0 subtitle">add <code>.badge-circle</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-circle badge-outline-primary">1</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-secondary">2</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-success">3</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-danger">4</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-warning">5</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-info">6</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-light">7</a>
            <a href="javascript:void()" class="badge badge-circle badge-outline-dark">8</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Circle Badge </h4>
          <p class="mb-0 subtitle">add <code>.badge-circle</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-circle badge-primary">1</a>
            <a href="javascript:void()" class="badge badge-circle badge-secondary">2</a>
            <a href="javascript:void()" class="badge badge-circle badge-success">3</a>
            <a href="javascript:void()" class="badge badge-circle badge-danger">4</a>
            <a href="javascript:void()" class="badge badge-circle badge-warning">5</a>
            <a href="javascript:void()" class="badge badge-circle badge-info">6</a>
            <a href="javascript:void()" class="badge badge-circle badge-light">7</a>
            <a href="javascript:void()" class="badge badge-circle badge-dark">8</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Outline Badge </h4>
          <p class="mb-0 subtitle">Default bootstrap outline baadge</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-outline-primary">1</a>
            <a href="javascript:void()" class="badge badge-outline-secondary">2</a>
            <a href="javascript:void()" class="badge badge-outline-success">3</a>
            <a href="javascript:void()" class="badge badge-outline-danger">4</a>
            <a href="javascript:void()" class="badge badge-outline-warning">5</a>
            <a href="javascript:void()" class="badge badge-outline-info">6</a>
            <a href="javascript:void()" class="badge badge-outline-light">7</a>
            <a href="javascript:void()" class="badge badge-outline-dark">8</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Number Badge </h4>
          <p class="mb-0 subtitle">Default bootstrap outline baadge</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-primary">1</a>
            <a href="javascript:void()" class="badge badge-secondary">2</a>
            <a href="javascript:void()" class="badge badge-success">3</a>
            <a href="javascript:void()" class="badge badge-danger">4</a>
            <a href="javascript:void()" class="badge badge-warning">5</a>
            <a href="javascript:void()" class="badge badge-info">6</a>
            <a href="javascript:void()" class="badge badge-light">7</a>
            <a href="javascript:void()" class="badge badge-dark">8</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Badge Sizes </h4>
          <p class="mb-0 subtitle">add <code>.badge-xs .badge-sm .badge-md .badge-lg
          .badge-xl</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="bootstrap-badge">
            <a href="javascript:void()" class="badge badge-xs badge-primary">xs</a>
            <a href="javascript:void()" class="badge badge-sm badge-secondary">sm</a>
            <a href="javascript:void()" class="badge badge-md badge-success">md</a>
            <a href="javascript:void()" class="badge badge-lg badge-danger">lg</a>
            <a href="javascript:void()" class="badge badge-xl badge-warning">xl</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection