@extends('auth.master')
@section('title')
Log IN
@endsection
@section('content')
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="green-status">
        <x-auth-session-status class="mb-6" :status="session('status')" />

    </div>

    <div class="error-status">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    </div>
    <div class="agile-field-txt">
        <label><i class="fa fa-user" aria-hidden="true"></i> Email </label>
        <input type="email" name="email" placeholder="Enter Email" required="" />
    </div>
    <div class="agile-field-txt">
        <label><i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
        <input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
        <div class="agile_label">
            <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
            <label class="check" for="check3">Show password</label>
        </div>


        @if (Route::has('password.request'))
        <div class="agile-right">
            <a href="{{ route('password.request') }}">Forgot password?</a>
        </div>

        @endif
        <div class="agile_label">
            <!-- Remember Me -->

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

        </div>
        <div class="agile-right">
            <a href="{{ route('register') }}">Dont have an account?</a>
        </div>
    </div>

    <!-- script for show password -->
    <script>
        function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
    </script>
    <!-- //end script -->
    <input type="submit" value="LOGIN">
</form>
@endsection
