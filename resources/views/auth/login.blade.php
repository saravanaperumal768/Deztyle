@include('header')

<main class="main">

<!-- breadcrumb -->
<div class="site-breadcrumb">
    <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
    <div class="container">
        <div class="site-breadcrumb-wrap">
            <h4 class="breadcrumb-title">Login</h4>
            <ul class="breadcrumb-menu">
                <li><a href="index.html"><i class="far fa-home"></i> Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- login area -->
<div class="login-area py-90">
    <div class="container">
        <div class="col-md-7 col-lg-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <img src="assets/img/logo/logo.png" alt="">
                    <p>Login with your gifoy account</p>
                </div>
                <form action="{{ route('authenticate') }}" method="POST">
    @csrf
    <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password">
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="forgot-password.html" class="forgot-pass">Forgot Password?</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn"><i class="far fa-sign-in"></i> Login</button>
                            </div>
</form>
@if ($errors->has('email'))
    <div>{{ $errors->first('email') }}</div>
@endif
                <div class="login-footer">
                    <p>Don't have an account? <a href="register.html">Register.</a></p>
                    <div class="social-login">
                        <span class="social-divider">or</span>
                        <p>Continue with social media</p>
                        <div class="social-login-list">
                            <a href="#" class="fb-auth"><i class="fab fa-facebook-f"></i> Facebook</a>
                            <a href="#" class="gl-auth"><i class="fab fa-google"></i> Google</a>
                            <a href="#" class="tw-auth"><i class="fab fa-x-twitter"></i> Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

@include('footer')