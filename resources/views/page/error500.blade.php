{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-5">
    <div class="form-input-content text-center error-page">
        <h1 class="error-text font-weight-bold">500</h1>
        <h4><i class="fa fa-times-circle text-danger"></i> Internal Server Error</h4>
        <p>You do not have permission to view this resource</p> 
        <div>
            <a class="btn btn-primary" href="{!! url('/index'); !!}">Back to Home</a>
        </div>	
    </div>
</div>
@endsection