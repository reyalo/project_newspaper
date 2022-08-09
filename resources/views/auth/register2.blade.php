@extends('auth.master')
@section('title')
Sign Up
@endsection
@section('content')
<!-- form starts here -->
<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="green-status">
        <x-auth-session-status class="mb-4" :status="session('status')" />

    </div>
    <div class="error-status">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    </div>
    <div class="agile-field-txt">
        <label><i class="fa fa-user" aria-hidden="true"></i> Username </label>
        <input type="text" name="name" placeholder="Enter Your Name" required="" />
    </div>
    <div class="agile-field-txt">
        <label><i class="fa fa-user" aria-hidden="true"></i> Email </label>
        <input type="email" name="email" placeholder="Enter Email" required="" />
    </div>
    <div class="agile-field-txt">
        <label><i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
        <input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />

        <label><i class="fa fa-unlock-alt" aria-hidden="true"></i></label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required=""
            id="password_confirmation" />

        <div class="agile_label">
            <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
            <label class="check" for="check3">Show password</label>
        </div>



        <div class="agile-right">
            <a href="{{ route('login') }}">Already have an account?</a>
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
					var x = document.getElementById("password_confirmation");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
    </script>
    <!-- //end script -->
    <input type="submit" value="REGISTER">
</form>
@endsection
