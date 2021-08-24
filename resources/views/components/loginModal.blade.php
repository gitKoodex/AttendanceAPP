<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('login') }}</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-mdb-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form id="loginModalForm">
                    <div class="mb-3">
                        <label class="form-label">{{__("Email Address")}}</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{__("Username")}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("Password")}}</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="{{__("Password")}}" />
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" />
                        <label class="form-check-label" for="rememberMe">مرا به خاطر داشته باش</label>
                    </div>
                    <div class="modal-footer d-block">
                        <p class="float-start">  حساب کاربری ندارید!  <a class="btn btn-dark" data-mdb-toggle="modal"  data-mdb-target="#registereModal">ثبت نام</a></p>
                        <button type="submit" class="btn btn-success float-end">ورود</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                    بستن
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
    </div>
</div>
