@extends('layouts.login_layout')

@section('form')
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" :value="old('name')" required autofocus autocomplete="name"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email" :value="old('email')" required/>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" required autocomplete="new-password"/>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" required autocomplete="new-password" />
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset('images/signup-image.jpg') }}" alt="sing up image"></figure>
                <a href="/login" class="signup-image-link">Already registered?</a>
            </div>
        </div>
    </div>
</section>
@endsection
