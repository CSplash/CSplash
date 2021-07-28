@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <form method="post" action="{{ route('user.exec.register') }}">
        @csrf
        <div class="auth">
            <div class="auth-form-wrapper">
                <div class="form-wrapper">
                    <!-- title -->
                    <div class="auth-title">
                        {{ config('app.name') }}
                    </div>
                    @if ($errors->any())
                    <!-- error handring-->
                    <div class="auth-error">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <label class="form-partition">
                        <input type="text" name="name" class="form-field1" placeholder="Username" autocomplete="off" maxlength="255" />
                    </label>
                    <label class="form-partition">
                        <input type="text" name="email" class="form-field1" placeholder="Email" autocomplete="off" maxlength="255" />
                    </label>
                    <label class="form-partition">
                        <input type="password" name="password" class="form-field1" placeholder="Password" autocomplete="off" maxlength="255" />
                    </label>
                    <button type="submit" class="sub-btn">
                        Sign up
                    </button>
                    <div class="auth-callout">
                        <div class="callout-msg">
                            Already have an account?
                        </div>
                        <div class="callout-link">
                            <a href="{{ route("login.index") }}" class="link-txt">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection