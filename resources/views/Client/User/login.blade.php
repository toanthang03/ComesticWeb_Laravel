@extends('Layout.clientLayout')
@section('title', 'Argima - Sản phảm chính hãng VN')
@section('content')
<!--== Start Account Area Wrapper ==-->
<section>
    <div class="container" data-padding-top="62">
        <h4 class="fz-24 mb-25">Log in to your account</h4>
        <div class="row">
            <div class="col-12">
                <div class="login-form-content">
                    <div class="login-form">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3" for="frm_email">Email</label>
                                <div class="col-md-6">
                                    <input id="frm_email" class="form-control" type="email" name="email"
                                    require @if (isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @endif>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3" for="frm_pass">Password</label>
                                <div class="col-md-6">
                                    <div class="pass-content">
                                        <input type="password" class="form-control" id="frm_pass" name="password"
                                        required @if (isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif>
                                        <span class="show-pass" onclick="myFunction()">show</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-15">
                                <div class="col-12 py-3">
                                    @if (session('error'))
                                    <span class="text-danger">{{ session('error') }}</span>
                                    @endif
                                </div>
                                <div class="col-12 text-center">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox" name="remember" value="on" id="flexCheckDefault"
                                            @if (isset($_COOKIE['email'])) checked @endif>
                                        <label>Remember me</label>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <button class="btn btn-success" type="submit"><span>Sign in</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a class="btn-create-account" href="{{route('register')}}">No account? Create one here</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Account Area Wrapper ==-->
<script>
    function myFunction() {
        var x = document.getElementById("frm_pass");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

@endSection