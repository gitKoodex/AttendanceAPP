{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="row page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Alert</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Basic Alerts</h4>
          <p class="subtitle mb-0">Bootstrap default style</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            <strong>Welcome!</strong> Message has been sent.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-secondary alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
            <strong>Done!</strong> Your profile photo updated.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-success alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
            <strong>Success!</strong> Message has been sent.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-info alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
            <strong>Info!</strong> You have got 5 new email.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-warning alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            <strong>Warning!</strong> Something went wrong. Please check.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-danger alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> Message sending failed.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-dark alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> You successfully read this important alert message.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-light alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> You successfully read this message..
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Solid color alerts</h4>
          <p class="subtitle mb-0">add <code>.solid</code> class to change the solid color.</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
            <strong>Welcome!</strong> Message has been sent.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-secondary solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
            <strong>Done!</strong> Your profile photo updated.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          
          <div class="alert alert-success solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            <strong>Success!</strong> Message has been sent.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-info solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
            <strong>Info!</strong> You have got 5 new email.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-warning solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
            <strong>Warning!</strong> Something went wrong. Please check.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-danger solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> Message sending failed.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-dark solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> You successfully read this important alert message.
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
          <div class="alert alert-light solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> You successfully read this message..
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Square alerts</h4>
          <p class="mb-0 subtitle">add <code>.alert-square</code> class to change the solid color.
          </p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary solid alert-square"><strong>Welcome!</strong> Message has been sent.</div>
          <div class="alert alert-secondary solid alert-square"><strong>Done!</strong> Your profile photo updated.</div>
          <div class="alert alert-success solid alert-square "><strong>Success!</strong> Message has been sent.</div>
          <div class="alert alert-info solid alert-square "><strong>Info!</strong> You have got 5 new email.</div>
          <div class="alert alert-warning solid alert-square "><strong>Warning!</strong> Something went wrong. Please check.</div>
          <div class="alert alert-danger solid alert-square "><strong>Error!</strong> Message sending failed.</div>
          <div class="alert alert-dark solid alert-square"><strong>Error!</strong> You successfully read this important alert message.</div>
          <div class="alert alert-light solid alert-square"><strong>Error!</strong> You successfully read this message..</div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Rounded alerts</h4>
          <p class="mb-0 subtitle">add <code>.alert-rounded</code> class to change the solid color.
          </p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary solid alert-rounded"><strong>Welcome!</strong> Message has been sent.</div>
          <div class="alert alert-secondary solid alert-rounded"><strong>Done!</strong> Your profile photo updated.</div>
          <div class="alert alert-success solid alert-rounded "><strong>Success!</strong> Message has been sent.</div>
          <div class="alert alert-info solid alert-rounded "><strong>Info!</strong> You have got 5 new email.</div>
          <div class="alert alert-warning solid alert-rounded "><strong>Warning!</strong> Something went wrong. Please check.</div>
          <div class="alert alert-danger solid alert-rounded "><strong>Error!</strong> Message sending failed.</div>
          <div class="alert alert-dark solid alert-rounded"><strong>Error!</strong> You successfully read this important alert message.</div>
          <div class="alert alert-light solid alert-rounded"><strong>Error!</strong> You successfully read this message..</div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Dismissable Alerts</h4>
          <p class="subtitle mb-0">Bootstrap default style</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-secondary alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-info alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Info!</strong> You have got 5 new email.
          </div>
          <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
          </div>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-dark alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-light alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alerts alt</h4>
          <p class="mb-0 subtitle">add <code>.alert-alt</code> class to change the solid color.
          </p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-secondary alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-success alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-info alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Info!</strong> You have got 5 new email.
          </div>
          <div class="alert alert-warning alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
          </div>
          <div class="alert alert-danger alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-dark alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-light alert-dismissible alert-alt fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Solid Alt</h4>
          <p class="mb-0 subtitle">add <code>.alert-alt.solid</code> class to change the solid color.
          </p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-secondary alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-success alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-info alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Info!</strong> You have got 5 new email.
          </div>
          <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
          </div>
          <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-dark alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-light alert-dismissible alert-alt solid fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Dismissable with solid</h4>
          <p class="mb-0 subtitle">add <code>.solid</code> class to change the solid color.</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-secondary solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Success!</strong> Message has been sent.
          </div>
          <div class="alert alert-info solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Info!</strong> You have got 5 new email.
          </div>
          <div class="alert alert-warning solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
          </div>
          <div class="alert alert-danger solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-dark solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-light solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alert with Link</h4>
          <p class="mb-0 subtitle">Bootstrap default style</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
            well</a>
          </div>
          
          <div class="alert alert-secondary alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
            well</a>
          </div>
          
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
            well</a>
          </div>
          
          <div class="alert alert-info alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Hey! Take a quick look.</strong> <a href="#">My birthday party</a>
          </div>
          <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Why you did it to me! <a href="#">Check this out</a>
          </div>
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
          </div>
          <div class="alert alert-dark alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
          </div>
          <div class="alert alert-light alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alert with Link and solid color</h4>
          <p class="mb-0 subtitle">add <code>.solid</code> class to change the solid color.</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> WOW! Eveything looks OK. <a href="#" class="badge badge-sm light badge-primary ml-1">upgrade</a>
          </div>
          <div class="alert alert-secondary solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> WOW! Eveything looks OK. <a href="#" class="badge badge-sm light badge-secondary ml-1">upgrade</a>
          </div>
          <div class="alert alert-success solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> WOW! Eveything looks OK. <a href="#" class="badge badge-sm light badge-success ml-1">upgrade</a>
          </div>
          
          <div class="alert alert-info solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Hey! Take a quick look. <a href="#" class="badge badge-sm light badge-info ml-1">upgrade</a>
          </div>
          <div class="alert alert-warning solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Why you did it to me! <a href="#" class="badge badge-sm light badge-warning ml-1">upgrade</a>
          </div>
          <div class="alert alert-danger solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Something Went wrong <a href="#" class="badge badge-sm light badge-danger ml-1">upgrade</a>
          </div>
          <div class="alert alert-dark solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Something Went wrong <a href="#" class="badge badge-sm light badge-dark ml-1">upgrade</a>
          </div>
          <div class="alert alert-light solid alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Something Went wrong <a href="#" class="badge badge-sm light badge-light ml-1">upgrade</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Inline Notifications</h4>
          <p class="mb-0 subtitle">Default inline notification</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="alert alert-primary notification">
                <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                <button class="btn btn-primary btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-secondary notification">
                <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                <button class="btn btn-secondary btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-success notification">
                <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                <button class="btn btn-success btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-info notification">
                <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                <button class="btn btn-info btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-warning notification">
                <p class="notificaiton-title mb-2"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                <button class="btn btn-warning btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-danger notification">
                <p class="notificaiton-title mb-2"><strong>Danger! </strong> Religion And Science
                </p>
                <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                <button class="btn btn-danger btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-dark notification">
                <p class="notificaiton-title mb-2"><strong>Danger! </strong> Religion And Science
                </p>
                <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                <button class="btn btn-dark btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-light notification">
                <p class="notificaiton-title mb-2"><strong>Danger! </strong> Religion And Science
                </p>
                <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                <button class="btn btn-dark btn-sm">Confirm</button>
                <button class="btn btn-link btn-sm">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alert Icon Left</h4>
          <p class="mb-0 subtitle">add <code>.alert-right-icon</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="alert alert-primary solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-account-search"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Success! Message has been sent.
          </div>
          <div class="alert alert-secondary solid alert-right-icon alert-dismissible fade show">
            <span><i class="icon icon-bell-53"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Success! Message has been sent.
          </div>
          <div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-check"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Success! Message has been sent.
          </div>
          <div class="alert alert-info solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-email"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Info! You have got 5 new email.
          </div>
          <div class="alert alert-warning solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-alert"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
          </div>
          <div class="alert alert-danger solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-help"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-dark solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-settings"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-light solid alert-right-icon alert-dismissible fade show">
            <span><i class="mdi mdi-cogs"></i></span>
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alert outline</h4>
          <p class="mb-0 subtitle">add <code>.alert-outline-primary,secondary,success...</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="alert alert-outline-primary alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Success! Message has been sent.
          </div>
          <div class="alert alert-outline-secondary alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Success! Message has been sent.
          </div>
          <div class="alert alert-outline-success alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Success! Message has been sent.
          </div>
          <div class="alert alert-outline-info alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button> Info! You have got 5 new email.
          </div>
          <div class="alert alert-outline-warning alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Warning!</strong> Something went wrong. Please check.
          </div>
          <div class="alert alert-outline-danger alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-outline-dark alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
          <div class="alert alert-outline-light alert-dismissible fade show">
            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
            <strong>Error!</strong> Message Sending failed.
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alert Social</h4>
          <p class="mb-0 subtitle">add <code>.alert-social
          .facebook,.twitter,.linkedin,.google-plus</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="alert alert-social facebook alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-social-icon">
                    <span><i class="mdi mdi-facebook"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Facebook</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-social twitter alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-social-icon">
                    <span><i class="mdi mdi-twitter"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Twitter</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-social linkedin alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-social-icon">
                    <span><i class="mdi mdi-linkedin"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Linkedin</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-social google-plus alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-social-icon">
                    <span><i class="mdi mdi-google-plus"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Google Plus</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Message Alert</h4>
          <p class="subtitle mb-0">Bootstrap default style</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="alert alert-primary alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-secondary alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-info alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-dark alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-light alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-1">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Message Alert with Solid color</h4>
          <p class="mb-0 subtitle">add <code>.solid</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="alert alert-primary solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-secondary solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-success solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-info solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-warning solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-danger solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-dark solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2 text-white">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-light solid alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="media-body">
                    <h5 class="mt-1 mb-2">Notifications</h5>
                    <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header d-block">
          <h4 class="card-title">Alert left icon big </h4>
          <p class="mb-0 subtitle">add <code>.left-icon-big</code> to change the style</p>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="alert alert-primary left-icon-big alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-email-alert"></i></span>
                  </div>
                  <div class="media-body">
                    <h6 class="mt-1 mb-2">Welcome to your account, Dear user!</h6>
                    <p class="mb-0">Please confirm your email address: email@example.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-warning left-icon-big alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-help-circle-outline"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2">Pending!</h5>
                    <p class="mb-0">You message sending failed.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-success left-icon-big alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-check-circle-outline"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2">Congratulations!</h5>
                    <p class="mb-0">You have successfully created a account.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                </button>
                <div class="media">
                  <div class="alert-left-icon-big">
                    <span><i class="mdi mdi-alert"></i></span>
                  </div>
                  <div class="media-body">
                    <h5 class="mt-1 mb-2">Loading failed!</h5>
                    <p class="mb-0">Again upload your server</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection