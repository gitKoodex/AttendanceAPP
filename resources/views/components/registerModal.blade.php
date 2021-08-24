<div class="modal fade" id="registereModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('ثبت نام') }}</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-mdb-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form id="registerModalForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{__("نام:")}}</label>
                        <input type="text" class="form-control" id="registerName" name="name" placeholder="{{__("نام")}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("Email Address")}}</label>
                        <input type="text" class="form-control" id="registerEmail" name="email" placeholder="{{__("Username")}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("Password")}}</label>
                        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="{{__("")}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">{{__("تایید رمز عبور")}}</label>
                        <input type="password" class="form-control" id="registerPassword_confirmation" name="password_confirmation" placeholder="{{__("")}}" />
                    </div>
                    <div class="modal-footer d-block">
                        <p class="float-start"><a href="#">حساب کاربری دارید؟</a></p>
                        <button type="submit" class="btn btn-success float-end">ثبت نام</button>
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
<script>

</script>
