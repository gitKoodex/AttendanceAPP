{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
<div class="col-md-6">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                      <a href="{!! url('/index'); !!}"><img src="{{ asset('images/logo-full.png') }}" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4 text-white">Account Locked</h4>
                    <form action="{!! url('/index'); !!}">
                        <div class="form-group">
                            <label class="text-white"><strong>Password</strong></label>
                            <input type="password" class="form-control" value="Password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-white text-primary btn-block">Unlock</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection