@extends('layouts.app')

@section('content')
<!-- All -->
<div class="auth-wrapper">
    <form method="post" action="{{ url('login') }}">
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
                        <input type="text" name="email" class="form-field1" placeholder="Email" value="{{ old('email') }}" autocomplete="off" />
                    </label>
                    <label class="form-partition">
                        <input type="password" name="password" class="form-field1" placeholder="Password" autocomplete="off" />
                    </label>
                    <button type="submit" class="sub-btn">
                        Login
                    </button>
                    <div class="auth-callout">
                        <div class="callout-msg">
                            <span>Don't have an account?</span>
                        </div>
                        <div class="callout-link">
                            <a href="{{ route('register.index') }}" class="link-txt">Join</a>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection