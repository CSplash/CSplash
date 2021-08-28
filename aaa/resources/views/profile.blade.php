@extends('layouts.app')

@section('content')
<div class="prf-wrapper">
    <!-- header Logo -->
    <div class="prf-logo">
        <div class="logo">{{ config('app.name') }}</div>
    </div>
    <div class="prf-content">
        <!-- button -->
        <div class="prf-nav">
            <a href="{{ route('memo.index') }}" class="prf-btn">Edit</a>
            <a href="{{ route('logout') }}" class="prf-btn">Exit</a>
            <a href="{{ route('deactive.index') }}" class="prf-btn">Account</a>
        </div>
        <!-- show profile -->
        <div class="prf-intro">
            <div class="prf-txt">
                <h5>Welcome to Seconds</h5>
                <div class="user-name">{{ $auth->name }}</div>
                <div class="subtitle">About</div>
                <p class="excerpt">Seconds is a community site for novelists to improve their writing, and users can point out each other's work to make it better.</p>
            </div>
        </div>
    </div>
    <!-- Image -->
    <div class="prf-image">
        <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" />
    </div>
</div>
@endsection