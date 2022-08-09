@extends('auth.master')
@section('title')
Forgot-Password
@endsection
@section('content')
        <!-- form starts here -->
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="green-status">
                <x-auth-session-status class="mb-4" :status="session('status')" />

            </div>
            <div class="error-status">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

            </div>
            <div class="agile-field-txt">
                <label><i class="fa fa-user" aria-hidden="true"></i> Email </label>
                <input type="email" name="email" placeholder="Enter Email" required="" />
            </div>
            <div class="agile-field-txt">

            </div>

            <input type="submit" value="  Email Password Reset  ">
            <div class="agile-field-txt">
                <label></label>
            </div>
            <div class="agile-field-txt">

            </div>
            <div class="agile-field-txt">

            </div>
            <div class="agile-field-txt">

            </div>
            <div class="agile-field-txt">

            </div>
        </form>
    @endsection
