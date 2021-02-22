<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>Paper Stack</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" />
    </head>
    <body>
        <div class="container">
        <section id="content">
        <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <h1>Login Form</h1>
            <div>
                <input type="email" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus/>
                
            </div>
            <div>
                <input type="password" placeholder="Password" name="password" required id="password" autocomplete="current-password"/>
            </div>
            <div>
                <input type="submit" value="Log in" />
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <a href="#">Register</a>
            </div>
            </form><!-- form -->
            
        </section><!-- content -->
        </div><!-- container -->
    </body>
</html>
