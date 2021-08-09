{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
    </ol>
  </div>
  <!-- row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form Validation</h4>
        </div>
        <div class="card-body">
          <div class="form-validation">
            <form class="form-valide" action="#" method="post">
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-username">Username
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Enter a username..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-email">Email <span
                      class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-password">Password
                      <span class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                      <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span
                      class="text-danger">*</span>
                    </label>
                    <div class="col-lg-6">
                    <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-suggestions">Suggestions <span
                    class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" id="val-suggestions" name="val-suggestions" rows="5" placeholder="What would you like to see?"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-skill">Best Skill
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <select class="form-control default-select" id="val-skill" name="val-skill">
                      <option value="">Please select</option>
                      <option value="html">HTML</option>
                      <option value="css">CSS</option>
                      <option value="javascript">JavaScript</option>
                      <option value="angular">Angular</option>
                      <option value="angular">React</option>
                      <option value="vuejs">Vue.js</option>
                      <option value="ruby">Ruby</option>
                      <option value="php">PHP</option>
                      <option value="asp">ASP.NET</option>
                      <option value="python">Python</option>
                      <option value="mysql">MySQL</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-currency">Currency
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-currency" name="val-currency" placeholder="$21.60">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-website">Website
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-website" name="val-website" placeholder="http://example.com">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-phoneus">Phone (US)
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-phoneus" name="val-phoneus" placeholder="212-999-0000">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-digits">Digits <span
                    class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-digits" name="val-digits" placeholder="5">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-number">Number <span
                    class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-number" name="val-number" placeholder="5.0">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label" for="val-range">Range [1, 5]
                    <span class="text-danger">*</span>
                  </label>
                  <div class="col-lg-6">
                    <input type="text" class="form-control" id="val-range" name="val-range" placeholder="4">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-4 col-form-label"><a
                    href="javascript:void()">Terms &amp; Conditions</a> <span
                    class="text-danger">*</span>
                  </label>
                  <div class="col-lg-8">
                    <label class="css-control css-control-primary css-checkbox" for="val-terms">
                      <input type="checkbox" class="css-control-input mr-2"
                      id="val-terms" name="val-terms" value="1">
                      <span class="css-control-indicator"></span> I agree to the
                    terms</label>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-8 ml-auto">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Vertical Forms with icon</h4>
      </div>
      <div class="card-body">
        <div class="basic-form">
          <form class="form-valide-with-icon" action="#" method="post">
            <div class="form-group">
              <label class="text-label">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" id="val-username1" name="val-username" placeholder="Enter a username..">
              </div>
            </div>
            <div class="form-group">
              <label class="text-label">Password *</label>
              <div class="input-group transparent-append">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input type="password" class="form-control" id="dz-password" name="val-password" placeholder="Choose a safe one..">
                <div class="input-group-append show-pass ">
                  <span class="input-group-text "> 
                    <i class="fa fa-eye-slash"></i>
                    <i class="fa fa-eye"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input id="checkbox1" class="form-check-input" type="checkbox">
                <label for="checkbox1" class="form-check-label">Check me out</label>
              </div>
            </div>
            <button type="submit" class="btn mr-2 btn-primary">Submit</button>
            <button type="submit" class="btn btn-light">cencel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection