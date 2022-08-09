@extends('auth.master')
@section('title')
Verify-Email
@endsection
@section('content')

{{-- <div class="col-md-10 green-status">
    <div>
        <div class="agile-field-txt">

            <label class="mail-text" id="mail-text">Thanks for signing up! Before getting started, could you verify your
                email
                address by clicking on the link we
                just emailed to you?<br> If you didn't receive the email, we will gladly send you another.</label>

        </div>
    </div>
    <div class="w3ls-login box box--big"> --}}


<div class="agile-field-txt">

    <label class="mail-text" id="mail-text">Thanks for signing up! Before getting started, could you verify your
        email
        address by clicking on the link we
        just emailed to you?<br> If you didn't receive the email, we will gladly send you another.</label>

</div>
        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new verification link has been sent to the email address you provided during registration.
        </div>
        @endif

        <div class="grid-container">
            <div class="grid-child">
                <!-- form starts here -->
                <form action="{{ route('password.email') }}" method="post" class="email-verify">
                    @csrf
                    <div class="green-status">
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                    </div>
                    <div class="error-status">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    </div>



                    <input type="submit" value="  Resend Email  ">
                </form>
            </div>
            <div class="grid-child">
                <form method="POST" action="{{ route('logout') }}" class="email-verify">
                    @csrf

                    <input type="submit" value="  Logout  ">
                </form>
            </div>
        </div>

<div class="bottom_padding">

</div>
@endsection
