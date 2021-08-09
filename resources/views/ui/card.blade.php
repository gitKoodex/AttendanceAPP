{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Card</a></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header border-0 pb-0">
          <h5 class="card-title">Card title</h5>
        </div>
        <div class="card-body">
          <p class="card-text">He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff <br> sections. The bedding was hardly able to cover it and seemed ready to
            slide off any moment.
          </p>
        </div>
        <div class="card-footer border-0 pt-0">
          <p class="card-text d-inline">Card footer</p>
          <a href="javascript:void()" class="card-link float-right">Card link</a>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Card title</h5>
        </div>
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p>
        </div>
        <div class="card-footer d-sm-flex justify-content-between align-items-center">
          <div class="card-footer-link mb-4 mb-sm-0">
            <p class="card-text text-dark d-inline">Last updated 3 mins ago</p>
          </div>
          
          <a href="javascript:void()" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-center">
        <div class="card-header">
          <h5 class="card-title">Card Title</h5>
        </div>
        <div class="card-body">
          
          <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content</p>
          <a href="javascript:void()" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer">
          <p class="card-text text-dark">Last updateed 3 min ago</p>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-center">
        <div class="card-header">
          <h5 class="card-title">Special title treatment</h5>
        </div>
        <div class="card-body custom-tab-1">
          <ul class="nav nav-tabs card-body-tabs mb-3">
            <li class="nav-item"><a class="nav-link active" href="javascript:void()">Active</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="javascript:void()">Link</a>
            </li>
            <li class="nav-item"><a class="nav-link disabled" href="javascript:void()">Disabled</a>
            </li>
          </ul>
          
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p><a href="javascript:void()" class="btn btn-primary btn-card">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-primary">
        <div class="card-header">
          <h5 class="card-title text-white">Primary card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-primary light btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-secondary">
        <div class="card-header">
          <h5 class="card-title text-white">Secondary card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-secondary light btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-success">
        <div class="card-header">
          <h5 class="card-title text-white">Success card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-success light btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-danger">
        <div class="card-header">
          <h5 class="card-title text-white">Danger card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="light btn btn-danger btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-warning">
        <div class="card-header">
          <h5 class="card-title text-white">Warning card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-warning light btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-info">
        <div class="card-header">
          <h5 class="card-title text-white">Info card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-info light btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">
          Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card bg-light">
        <div class="card-header">
          <h5 class="card-title">Light card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a href="javascript:void()" class="btn btn-dark btn-card">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card text-white bg-dark">
        <div class="card-header">
          <h5 class="card-title text-white">Dark card title</h5>
        </div>
        <div class="card-body mb-0">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="javascript:void()" class="btn btn-light btn-card text-dark">Go
          somewhere</a>
        </div>
        <div class="card-footer bg-transparent border-0 text-white">Last updateed 3 min ago
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card mb-3">
        <img class="card-img-top img-fluid" src="{{ asset('images/card/1.png') }}" alt="Card image cap">
        <div class="card-header">
          <h5 class="card-title">Card title</h5>
        </div>
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text text-dark">Last updated 3 mins ago</p>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card mb-3">
        <img class="card-img-top img-fluid" src="{{ asset('images/card/2.png') }}" alt="Card image cap">
        <div class="card-header">
          <h5 class="card-title">Card title</h5>
        </div>
        <div class="card-body">
          <p class="card-text">He lay on his armour-like back, and if he lifted his head a little
          </p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Card footer</p>
          <a href="javascript:void()" class="card-link float-right">Card link</a>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card mb-3">
        <div class="card-header">
          <h5 class="card-title">Card title</h5>
        </div>
        <div class="card-body">
          <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little</p>
        </div>
        <img class="card-img-bottom img-fluid" src="{{ asset('images/card/3.png') }}" alt="Card image cap">
        <div class="card-footer">
          <p class="card-text d-inline">Card footer</p>
          <a href="javascript:void()" class="card-link float-right">Card link</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection