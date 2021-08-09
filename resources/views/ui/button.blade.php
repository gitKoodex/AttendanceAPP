{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid btn-page">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Buttons</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Buttons</h4>
          <p class="mb-0 subtitle">Default button style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-light">Light</button>
          <button type="button" class="btn btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Buttons</h4>
          <p class="mb-0 subtitle">Button Light style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn light btn-primary">Primary</button>
          <button type="button" class="btn light btn-secondary">Secondary</button>
          <button type="button" class="btn light btn-success">Success</button>
          <button type="button" class="btn light btn-danger">Danger</button>
          <button type="button" class="btn light btn-warning">Warning</button>
          <button type="button" class="btn light btn-info">Info</button>
          <button type="button" class="btn light btn-light">Light</button>
          <button type="button" class="btn light btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Outline Buttons</h4>
          <p class="mb-0 subtitle">Default outline button style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-outline-success">Success</button>
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-outline-info">Info</button>
          <button type="button" class="btn btn-outline-light">Light</button>
          <button type="button" class="btn btn-outline-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Button Sizes</h4>
          <p class="mb-0 subtitle">add <code>.btn-lg .btn-sm .btn-xs</code> to change the style
          </p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary btn-lg">Large Button</button>
          <button type="button" class="btn btn-primary">Default Button</button>
          <button type="button" class="btn btn-primary btn-sm">Small Button</button>
          <button type="button" class="btn btn-primary btn-xs">Extra Small Button</button>
          <button type="button" class="btn btn-primary btn-xxs">Extra Small Button</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Outline Button Sizes</h4>
          <p class="mb-0 subtitle">add <code>.btn-lg .btn-sm .btn-xs</code> to change the style
          </p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-outline-primary btn-lg">Large button</button>
          <button type="button" class="btn btn-outline-primary">Default button</button>
          <button type="button" class="btn btn-outline-primary btn-md">Small button</button>
          <button type="button" class="btn btn-outline-primary btn-sm">Small button</button>
          <button type="button" class="btn btn-outline-primary btn-xs">Extra small button</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded Buttons</h4>
          <p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
        </div>
        <div class="card-body">
          <h4 class="card-title"></h4>
          <button type="button" class="btn btn-rounded btn-primary">Primary</button>
          <button type="button" class="btn btn-rounded btn-secondary">Secondary</button>
          <button type="button" class="btn btn-rounded btn-success">Success</button>
          <button type="button" class="btn btn-rounded btn-danger">Danger</button>
          <button type="button" class="btn btn-rounded btn-warning">Warning</button>
          <button type="button" class="btn btn-rounded btn-info">Info</button>
          <button type="button" class="btn btn-rounded btn-light">Light</button>
          <button type="button" class="btn btn-rounded btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded outline Buttons</h4>
          <p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="rounded-button">
            <button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-rounded btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-rounded btn-outline-success">Success</button>
            <button type="button" class="btn btn-rounded btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-rounded btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-rounded btn-outline-info">Info</button>
            <button type="button" class="btn btn-rounded btn-outline-light">Light</button>
            <button type="button" class="btn btn-rounded btn-outline-dark">Dark</button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Button Right icons</h4>
          <p class="mb-0 subtitle">add <code>.btn-icon-right</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-primary">Add to cart <span
            class="btn-icon-right"><i class="fa fa-shopping-cart"></i></span>
          </button>
          <button type="button" class="btn btn-info">Add to wishlist <span
            class="btn-icon-right"><i class="fa fa-heart"></i></span>
          </button>
          <button type="button" class="btn btn-danger">Remove <span class="btn-icon-right"><i
          class="fa fa-close"></i></span>
          </button>
          <button type="button" class="btn btn-secondary">Sent message <span
            class="btn-icon-right"><i class="fa fa-envelope"></i></span>
          </button>
          <button type="button" class="btn btn-warning">Add bookmark <span
            class="btn-icon-right"><i class="fa fa-star"></i></span>
          </button>
          <button type="button" class="btn btn-success">Success <span class="btn-icon-right"><i
          class="fa fa-check"></i></span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Button Left icons</h4>
          <p class="mb-0 subtitle">add <code>.btn-icon-left</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-rounded btn-primary"><span
            class="btn-icon-left text-primary"><i class="fa fa-shopping-cart"></i>
            </span>Buy</button>
            <button type="button" class="btn btn-rounded btn-info"><span
              class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
              </span>Add</button>
              <button type="button" class="btn btn-rounded btn-danger"><span
                class="btn-icon-left text-danger"><i class="fa fa-envelope color-danger"></i>
                </span>Email</button>
                <button type="button" class="btn btn-rounded btn-secondary"><span
                  class="btn-icon-left text-secondary"><i
                  class="fa fa-share-alt color-secondary"></i> </span>Share</button>
                  <button type="button" class="btn btn-rounded btn-warning"><span
                    class="btn-icon-left text-warning"><i class="fa fa-download color-warning"></i>
                    </span>Download</button>
                    <button type="button" class="btn btn-rounded btn-success"><span
                      class="btn-icon-left text-success"><i class="fa fa-upload color-success"></i>
                      </span>Upload</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Square Buttons</h4>
          <p class="mb-0 subtitle">add <code>.btn-square</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn  btn-square btn-primary">Primary</button>
          <button type="button" class="btn  btn-square btn-secondary">Secondary</button>
          <button type="button" class="btn  btn-square btn-success">Success</button>
          <button type="button" class="btn  btn-square btn-danger">Danger</button>
          <button type="button" class="btn  btn-square btn-warning">Warning</button>
          <button type="button" class="btn  btn-square btn-info">Info</button>
          <button type="button" class="btn  btn-square btn-light">Light</button>
          <button type="button" class="btn  btn-square btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Square Outline Buttons</h4>
          <p class="mb-0 subtitle">add <code>.btn-square</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-square btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-square btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-square btn-outline-success">Success</button>
          <button type="button" class="btn btn-square btn-outline-danger">Danger</button>
          <button type="button" class="btn btn-square btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-square btn-outline-info">Info</button>
          <button type="button" class="btn btn-square btn-outline-light">Light</button>
          <button type="button" class="btn btn-square btn-outline-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded Button</h4>
          <p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-rounded btn-primary">Primary</button>
          <button type="button" class="btn btn-rounded btn-secondary">Secondary</button>
          <button type="button" class="btn btn-rounded btn-success">Success</button>
          <button type="button" class="btn btn-rounded btn-danger">Danger</button>
          <button type="button" class="btn btn-rounded btn-warning">Warning</button>
          <button type="button" class="btn btn-rounded btn-info">Info</button>
          <button type="button" class="btn btn-rounded btn-light">Light</button>
          <button type="button" class="btn btn-rounded btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded outline Buttons</h4>
          <p class="mb-0 subtitle">add <code>.btn-rounded</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-rounded btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-rounded btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-rounded btn-outline-success">Success</button>
          <button type="button" class="btn btn-rounded btn-outline-danger">Danger</button>
          <button type="button" class="btn btn-rounded btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-rounded btn-outline-info">Info</button>
          <button type="button" class="btn btn-rounded btn-outline-light">Light</button>
          <button type="button" class="btn btn-rounded btn-outline-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Dropdown Button</h4>
          <p class="mb-0 subtitle">Default dropdown button style</p>
        </div>
        <div class="card-body">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Secondary</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
            </div>
          </div>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
              <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Buttons Transparent</h4>
          <p class="mb-0 subtitle">Button transparent style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn tp-btn btn-primary">Primary</button>
          <button type="button" class="btn tp-btn btn-secondary">Secondary</button>
          <button type="button" class="btn tp-btn btn-success">Success</button>
          <button type="button" class="btn tp-btn btn-danger">Danger</button>
          <button type="button" class="btn tp-btn btn-warning">Warning</button>
          <button type="button" class="btn tp-btn btn-info">Info</button>
          <button type="button" class="btn tp-btn btn-light">Light</button>
          <button type="button" class="btn tp-btn btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Buttons Transparent Light</h4>
          <p class="mb-0 subtitle">Button transparent light style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn tp-btn-light btn-primary">Primary</button>
          <button type="button" class="btn tp-btn-light btn-secondary">Secondary</button>
          <button type="button" class="btn tp-btn-light btn-success">Success</button>
          <button type="button" class="btn tp-btn-light btn-danger">Danger</button>
          <button type="button" class="btn tp-btn-light btn-warning">Warning</button>
          <button type="button" class="btn tp-btn-light btn-info">Info</button>
          <button type="button" class="btn tp-btn-light btn-light text-black">Light</button>
          <button type="button" class="btn tp-btn-light btn-dark">Dark</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Disabled Button</h4>
          <p class="mb-0 subtitle">add <code>disabled="disabled"</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-rounded btn-primary" disabled="disabled">Primary</button>
          <button type="button" class="btn btn-rounded btn-secondary" disabled="disabled">Secondary</button>
          <button type="button" class="btn btn-rounded btn-success" disabled="disabled">Success</button>
          <button type="button" class="btn btn-rounded btn-danger" disabled="disabled">Danger</button>
          <button type="button" class="btn btn-rounded btn-warning" disabled="disabled">Warning</button>
          <button type="button" class="btn btn-rounded btn-info" disabled="disabled">Info</button>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Socia icon Buttons with Name</h4>
          <p class="mb-0 subtitle">add <code>.btn-facebook, .btn-twitter, .btn-youtube...</code> to change the style</p>
        </div>
        <div class="card-body">
          <button type="button" class="btn btn-facebook">Facebook <span class="btn-icon-right"><i
          class="fa fa-facebook"></i></span>
          </button>
          <button type="button" class="btn btn-twitter">Twitter <span class="btn-icon-right"><i
          class="fa fa-twitter"></i></span>
          </button>
          <button type="button" class="btn btn-youtube">Youtube <span class="btn-icon-right"><i
          class="fa fa-youtube"></i></span>
          </button>
          <button type="button" class="btn btn-instagram">Instagram <span
            class="btn-icon-right"><i class="fa fa-instagram"></i></span>
          </button>
          <button type="button" class="btn btn-pinterest">Pinterest <span
            class="btn-icon-right"><i class="fa fa-pinterest"></i></span>
          </button>
          <button type="button" class="btn btn-linkedin">Linkedin <span class="btn-icon-right"><i
          class="fa fa-linkedin"></i></span>
          </button>
          <button type="button" class="btn btn-google-plus">Google + <span
            class="btn-icon-right"><i class="fa fa-google-plus"></i></span>
          </button>
          <button type="button" class="btn btn-google">Google <span class="btn-icon-right"><i
          class="fa fa-google"></i></span>
          </button>
          <button type="button" class="btn btn-snapchat">Snapchat <span class="btn-icon-right"><i
          class="fa fa-snapchat"></i></span>
          </button>
          <button type="button" class="btn btn-whatsapp">Whatsapp <span class="btn-icon-right"><i
          class="fa fa-whatsapp"></i></span>
          </button>
          <button type="button" class="btn btn-tumblr">Tumblr <span class="btn-icon-right"><i
          class="fa fa-tumblr"></i></span>
          </button>
          <button type="button" class="btn btn-reddit">Reddit <span class="btn-icon-right"><i
          class="fa fa-reddit"></i></span>
          </button>
          <button type="button" class="btn btn-spotify">Spotify <span class="btn-icon-right"><i
          class="fa fa-spotify"></i></span>
          </button>
          <button type="button" class="btn btn-yahoo">Yahoo <span class="btn-icon-right"><i
          class="fa fa-yahoo"></i></span>
          </button>
          <button type="button" class="btn btn-dribbble">Dribbble <span class="btn-icon-right"><i
          class="fa fa-dribbble"></i></span>
          </button>
          <button type="button" class="btn btn-skype">Skype <span class="btn-icon-right"><i
          class="fa fa-skype"></i></span>
          </button>
          <button type="button" class="btn btn-quora">Quora <span class="btn-icon-right"><i
          class="fa fa-quora"></i></span>
          </button>
          <button type="button" class="btn btn-vimeo">Vimeo <span class="btn-icon-right"><i
          class="fa fa-vimeo"></i></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection